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

include('data/common_settings.php');
include('functions.php');

//Get game name
$game = null;
if (array_key_exists('parser', $_GET)) {
    $game = $_GET['parser'];
}

$game_data_file = 'data/' . $game . '.php';

//If game is not selected or does not exists redirect to main page
if(!$game or !file_exists($game_data_file)) {
    $location = str_replace('form.php', '', $_SERVER['PHP_SELF']);
    ob_end_clean();
    header('Location:' . $location );
    return;
}
include($game_data_file);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<title><?php echo _('BigBrotherBot Config File Generator'); ?></title>

<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/osx.css" />
<script src="js/jquery.tools.min.js" type="text/javascript"></script>
<script src="js/jquery.simplemodal.js" type="text/javascript"></script>
<script src="js/osx.js" type="text/javascript"></script>
<script src="js/b3.js" type="text/javascript"></script>
<link rel="shortcut icon" href="img/favicon.ico" />
<meta name="description" content="BigBrotherBot - Web based b3.xml generator" />
<meta name="keywords" content="bigbrotherbot, b3, config, generator, server administration" />
<link rel="canonical" href="http://www.bigbrotherbot.net/" />

</head>

<body>

<div id="wrap">

<!-- Header starts -->

<?php get_header(); ?>

<!-- /Header Ends -->

<div id="main">

<!-- Form Starts -->

<form id="b3" method="post" action="showmyconfig.php">
<table width="880px" border="0" cellpadding="0" cellspacing="0" id="b3conf" style="margin-left:auto; margin-right:auto;">
<tbody>
  <tr>
    <th></th>
  </tr>
  
  <!-- General Settings Starts -->
  
  <tr>
    <td>
    <div id="fieldbox">
      <fieldset id="settings">
        <legend><?php echo _('General Settings:'); ?></legend>
          <dl>
            <dt><?php echo _('Fill in your general information'); ?></dt>
            <dd>
              <input type="hidden" name="parser" id="parser" value="<?php echo $game;?>" />
              <span>
                 <label><?php echo _('Game:'); ?></label>
                <input type="text" name="game_name" id="game_name" value="<?php echo $game_name;?>" title="<?php echo _('Game you selected.'); ?>" readonly />
                <button type=button onclick="document.location='?parser='"><?php echo _('change'); ?></button>
              </span><br />
            <?php
            get_section($b3);
            ?>
            </dd>
          </dl>
      </fieldset>
    </div>
    </td>
  </tr>
  
  <!-- /General Settings End -->
  
  <!-- Database Settings Starts -->
  
  <tr>
    <td>
    <div id="fieldbox">
      <fieldset id="database">
        <legend><?php echo _('Database Settings:'); ?></legend>
          <dl>
            <dt><?php echo _('Fill in your database connection information'); ?></dt>
            <dd>
            <?php
            get_section($database);
            ?>
            </dd>
          </dl>
      </fieldset>
    </div>
    </td>
  </tr>
  
  <!-- /Database Settings End -->
  
  <?php
  //Display game specific settings if any
  if ($game_specific_settings) {
  ?>
  <!-- Game Specific Settings Starts -->
  <tr>
    <td>
    <div id="fieldbox">
      <fieldset id="<?php echo $game; ?>">
        <legend><?php echo _($game_name . ' Specific Settings:'); ?></legend>
          <dl>
            <dt><?php echo _('Configure ' . $game_name . ' specific settings.'); ?></dt>
            <dd>
            <?php
            get_section($game_specific_settings);
            ?>
            </dd>
          </dl>
      </fieldset>
    </div>
    </td>
  </tr>
  <!-- /Game Specific Settings Ends -->
  <?php
  }
  ?>
  
  <!-- Game Server Settings Starts -->
  
  <tr>
    <td>
    <div id="fieldbox">
      <fieldset id="gameserver">
        <legend><?php echo _('Game Server Settings:'); ?></legend>
          <dl>
            <dt><?php echo _('Fill in your game server related information'); ?></dt>
            <dd>
            <?php
            get_section($server);
            ?>
            </dd>
          </dl>
      </fieldset>
    </div>
    </td>
  </tr>
  
  <!-- /Game Server Settings End -->

  <!-- Autodoc Settings Starts -->
  
  <tr>
    <td>
    <div id="fieldbox">
      <fieldset id="autodocimg">
        <legend><?php echo _('Autodoc Settings:'); ?></legend>
          <dl>
            <dt><?php echo _('Autodoc will generate a user documentation for all B3 commands.'); ?></dt>
            <dd>
            <?php
            get_section($autodoc);
            ?>
            </dd>
          </dl>
      </fieldset>
    </div>
    </td>
  </tr>
  
  <!-- /Autodoc Settings End -->

  <!-- Update Settings Starts -->
  
  <tr>
    <td>
    <div id="fieldbox">
      <fieldset id="">
        <legend><?php echo _('Update Settings:'); ?></legend>
          <dl>
            <dt><?php echo _('B3 checks if a new version is available at startup. Choose here what channel you want to check against.'); ?></dt>
            <dd>
            <?php
            get_section($update);
            ?>
            </dd>
          </dl>
      </fieldset>
    </div>
    </td>
  </tr>
  
  <!-- /Update Settings End -->

  <!-- Messages Starts -->
  
  <tr>
    <td>
    <div id="fieldbox">
      <fieldset id="messages">
        <legend><?php echo _('Messages:'); ?></legend>
          <dl>
            <dt><?php echo _('These are B3 in game messages for specific events.'); ?></dt>
            <dd>
            <?php
            get_section($messages);
            ?>
            </dd>
          </dl>
      </fieldset>
    </div>
    </td>
  </tr>
  
  <!-- /Messages End -->

  <!-- External Plugins Directory Starts -->
  
  <tr>
    <td>
    <div id="fieldbox">
      <fieldset id="externalplugins_dir">
        <legend><?php echo _('External Plugins Directory:'); ?></legend>
          <dl>
            <dt>
              <?php echo _('Enter here the path to the config folder for your external plugins.'); ?><br />
              <span style="margin-top:10px; display:inline-block; border:1px dotted #CCC; width:400px; padding:5px;">
              <?php echo _('@b3 : the folder where B3 code is installed in'); ?><br />
              </span>
            </dt>
            <dd>
            <?php
            get_section($external_plugins_dir);
            ?>
            </dd>
          </dl>
      </fieldset>
    </div>
    </td>
  </tr>
  
  <!-- /External Plugins Directory End -->

  <!-- Built-in Plugins Starts -->
  
  <tr>
    <td>
    <div id="fieldbox">
      <fieldset id="builtinplugins">
        <legend><?php echo _('Built-in Plugins:'); ?></legend>
          <dl>
            <dt>
              <?php echo _('Choose built-in plugins you want to use and enter their paths.'); ?><br />
              <span style="margin-top:10px; display:inline-block; border:1px dotted #CCC; width:400px; padding:5px;">
              <?php echo _('@conf : the folder containing this config file'); ?><br />
              </span>
            </dt>
            <dd>
            <?php
            get_section($builtin_plugins);
            ?>
            </dd>
          </dl>
      </fieldset>
    </div>
    </td>
  </tr>
  
  <!-- /Built-in Plugins End -->

  <!-- External Plugins Starts -->
  
  <tr>
    <td>
    <div id="fieldbox">
      <fieldset id="externalplugins">
        <legend><?php echo _('External Plugins:'); ?></legend>
          <dl>
            <dt>
              <?php echo _('Choose external plugins you want to use and enter their paths. <strong>Note that you must download and install them before you run B3</strong>'); ?><br />
              <span style="margin-top:10px; display:inline-block; border:1px dotted #CCC; width:400px; padding:5px;">
              <?php echo _('@b3/extplugins : the folder containing this config file'); ?><br />
              </span>
            </dt>
            <dd>
            <?php
            get_section($external_plugins);
            ?>
            </dd>
          </dl>
      </fieldset>
    </div>
    </td>
  </tr>
  
  <!-- /External Plugins End -->

  <!-- Preserve Tips Starts -->
  
  <tr>
    <td>
    <div id="fieldbox">
      <fieldset id="preserve_tips">
        <legend><?php echo _('Preserve Tips:'); ?></legend>
          <dl>
            <dt>
              <?php echo _('You can preserve setting tips in your config file if you want. This is helpful if you want to
              edit the config file manually later as all setting tips will be added in the file. On the other hand, selecting "no"
              will produce a less complicated config file.'); ?><br />
            </dt>
            <dd>
              <span>
                <label><?php echo _('Preserve Tips:'); ?></label>
                <select name="preserve_tips" id="preserve_tips" title="<?php echo _('Do you want to keep setting tips in your config file?'); ?>">
                    <option value="yes">Yes</option>
                    <option value="no" selected="selected">No</option>
                </select>
              </span><br />
            </dd>
          </dl>
      </fieldset>
    </div>
    </td>
  </tr>
  
  <!-- /Preserve Tips End -->

  <tr>
    <td align="right" id="buttons">
      <button class="plugin-dl" type="submit" id="save" name="save" title="<?php echo _('Save'); ?>"><?php echo _('Save Config'); ?></button>
      <button class="plugin-dl" type="reset" id="clear" name="clear" title="<?php echo _('Reset'); ?>"><?php echo _('Reset'); ?></button>
    </td>
  </tr>

</tbody>
</table>
</form>

<!-- /Form Ends -->

</div> <!-- /main -->
</div> <!-- /wrap -->

<!-- Footer Starts -->

<?php get_footer(); ?>

<!-- /Footer Ends -->

<!--Privacy statement content starts here -->

<?php get_privacy_statement(); ?>

<!--Privacy statement content ends here -->

</body>
</html>