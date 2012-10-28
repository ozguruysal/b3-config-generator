<?php
/**
 * BigBrotherBot Config File Generator
 * Author: Freelander (Özgür Uysal) <freelander@bigbrotherbot.net>
 * Author URI: http://www.bigbrotherbot.net
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as 
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

// Set to 1 for debugging
$debug = 0;

if($debug == 0) {
  error_reporting(0);
}
elseif($debug == 1) {
  error_reporting(E_ALL);
}
/*------------------------------------------------------------------------------*/

include ('data/common_settings.php');

//Get game name
$game = $_POST['parser'];

if(!$game) {
    echo 'Please select game!!!';
    return;
}
include('data/' . $game . '.php');

//Are we including comments in config file?
$preserve_tips = $_POST['preserve_tips'];

function generate_b3config_xml() {

  global $game;
  global $b3;
  global $server; 
  global $autodoc;
  global $update;
  global $messages;
  global $external_plugins_dir;
  global $builtin_plugins;
  global $external_plugins;
  global $game_specific_settings;
  global $preserve_tips;
  
  //collect posted information
  foreach($_POST as $key => $value) {
    //create new variables named after our form input names/array key names in config files.
    $$key = $value;
  }

  //where is our gamelog?
  if($game_log == 'local') {
    $game_log = $game_log_local;
  }
  elseif($game_log == 'ftp') {
    $game_log_ftpadr = explode("//", $game_log_ftpadr);
    $game_log = $game_log_ftpadr[0].'//'.$game_log_ftpusr.':'.$game_log_ftppas.'@'.$game_log_ftpadr[1];
  }

  //what is our autodoc file location?
  if($destination == 'locala') {
    $destination = $autodoc_local;
  }
  elseif ($destination == 'ftpa') {
    $autodoc_ftpadr = explode("//", $autodoc_ftpadr);
    $destination = $autodoc_ftpadr[0].'//'.$autodoc_ftpusr.':'.$autodoc_ftppas.'@'.$autodoc_ftpadr[1];
  }

  //put database information in b3 format
  $database = 'mysql://'.$db_user.':'.$db_pass.'@'.$db_host.'/'.$db_name;

  //Add parser and database to $b3 array
  $parser = $game;
  $b3['parser'] = $parser;
  $b3['database'] = $database;  
  
  //Prepare the XML document
  $doc = new DOMDocument('1.0', 'UTF-8');
  $doc->formatOutput = true;
  
  $createdby = 'Created by BigBrotherBot Config File Generator at http://config.bigbrotherbot.net (' . date("d M Y - D H:i:s T", time()) . ')';
  $createdby = $doc->createComment($createdby);
  $doc->appendChild($createdby);

  $conf = $doc->createElement("configuration");
  $doc->appendChild($conf);

  //Create XML parts with <settings> tag
  $xml_parts_settings = array();
  
  //We create the array this way (one by one) to keep the order although 
  //it's not necessary. Is there a better way?
  $xml_parts_settings['b3'] = $b3;
  
  //does our game have some specific settings?
  if($game_specific_settings) {
    $xml_parts_settings[$game] = $game_specific_settings;
  }
  
  $xml_parts_settings['server'] = $server;
  $xml_parts_settings['autodoc'] = $autodoc;
  $xml_parts_settings['update'] = $update;
  $xml_parts_settings['messages'] = $messages;
  $xml_parts_settings['plugins'] = $external_plugins_dir;

  foreach($xml_parts_settings as $part_name => $part_array) {
    $sets = $doc->createElement("settings");
    $conf->appendChild($sets);

    $sets_atr = $doc->createAttribute('name');
    $sets->appendChild($sets_atr);

    $sets_atr_text = $doc->createTextNode($part_name);
    $sets_atr->appendChild($sets_atr_text);

    foreach($part_array as $set_name => $value) {
      //Add comments if $preserve_tips is yes
      if($preserve_tips == 'yes') {
        if($set_name == 'parser') {
          $comment = $doc->createComment(_('Your game parser.'));
        }
        elseif($set_name == 'database') {
          $comment = $doc->createComment(_('Your database info: [mysql]://[db-user]:[db-password]@[db-server[:port]]/[db-name]'));
        } else {
          $comment = $doc->createComment($part_array[$set_name]['tooltip']);
        }
        $sets->appendChild($comment);
      }

      $set = $doc->createElement("set");
      
      $set->appendChild( $doc->createTextNode($$set_name));
      $sets->appendChild($set);

      $set_atr = $doc->createAttribute('name');
      $set->appendChild($set_atr);
      
      $set_atr_text = $doc->createTextNode($set_name);
      $set_atr->appendChild($set_atr_text);
    }
  }

  //Merge builtin and ext plugins arrays so we all keep them in <plugins> tag
  $all_plugins = array_merge($builtin_plugins, $external_plugins);
  
  //Create XML parts <plugins> tag
  $plugins = $doc->createElement("plugins");
  $conf->appendChild($plugins);

  foreach($all_plugins as $plugin_name => $value) {
    if($$plugin_name == 'on') {
      //Add comments if $preserve_tips is yes
      if($preserve_tips == 'yes') {
        $comment = $doc->createComment($all_plugins[$plugin_name]['tooltip']);
        $plugins->appendChild($comment);
      }

      $plugin = $doc->createElement("plugin");
      $plugins->appendChild($plugin);

      $plugin_atr = $doc->createAttribute('name');
      $plugin->appendChild($plugin_atr);
      $plugin_atr_text = $doc->createTextNode($plugin_name);
      $plugin_atr->appendChild($plugin_atr_text);

      $plugin_atr = $doc->createAttribute('config');
      $plugin->appendChild($plugin_atr);

      $text = ${$plugin_name.'_location'};
      $plugin_atr_text = $doc->createTextNode($text);
      $plugin_atr->appendChild($plugin_atr_text);
    }
  }
  
  //echo $doc->saveXML();
  
  $doc->save('tmp/b3.xml');
  header('Content-disposition: attachment; filename=b3.xml');
  header('Content-type: application/xml');
  readfile('tmp/b3.xml');
  unlink('tmp/b3.xml');
  return;
  
}
