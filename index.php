<?php
/**
 * BigBrotherBot Config File Generator
 * Author: Freelander
 * Author URI: http://www.fps-gamer.net
 *
 * Copyright(c)2010 - 2011 Freelander  <mailto:freelander@fps-gamer.net>
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

include('inc_configmyb3.php');
include('inc_lang.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<title><?php echo $LANG['TITLE']; ?></title>

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
<div class="header">
  <div class="b3logo"></div>
  <div class="header_text"><?php echo $LANG['TITLE']; ?></div>
  <div class="header_note"><?php echo $LANG['SLOGAN']; ?></div>
  <div class="header_right"></div>
</div>
<form id="b3" method="post" action="showmyconfig.php">
<table width="60%" border="0" cellpadding="0" cellspacing="0" id="b3conf" style="margin-left:auto; margin-right:auto;">
<tbody>
  <tr>
    <th></th>
  </tr>
  <tr>
    <td>
      <fieldset id="settings">
        <legend><?php echo $LANG['GENERAL_SETTINGS']; ?></legend>
          <dl>
            <dt><?php echo $LANG['GENERAL_SETTINGS_TIP']; ?></dt>
            <dd>
              <span>
			    <label><?php echo $LANG['GAME']; ?></label>
				<select class="select-1" name="parser" id="parser" title="<?php echo $LANG['GAME_TIP']; ?>"><option value="0">----- <?php echo $LANG['SELECT_YOUR_GAME']; ?> -----</option><?php select_your_game(); ?></select>
			  </span><br />
              <span>
			    <label><?php echo $LANG['BOT_NAME']; ?></label>
				<input type="text" size="28" name="bot_name" id="bot_name" value="B3" title="<?php echo $LANG['BOT_NAME_TIP']; ?>" />
			  </span><br />
              <span>
			    <label><?php echo $LANG['BOT_PREFIX']; ?></label>
				<input type="text" size="28" name="bot_prefix" id="bot_prefix" value="^0(^2b3^0)^7:" title="<?php echo $LANG['BOT_PREFIX_TIP']; ?>" />
			  </span><br />
              <span>
			    <label><?php echo $LANG['TIME_FORMAT']; ?></label>
				<input type="text" size="28" name="time_format" id="time_format" value="%I:%M%p %Z %m/%d/%y" title="<?php echo $LANG['TIME_FORMAT_TIP']; ?>" />
			  </span><br />
              <span>
			    <label><?php echo $LANG['TIME_ZONE']; ?></label>
				<input type="text" size="28" name="time_zone" id="time_zone" value="CST" title="<?php echo $LANG['TIME_ZONE_TIP']; ?>" />
			  </span><br />
              <span>
			    <label><?php echo $LANG['B3_LOG']; ?></label>
				<input type="text" size="28" name="logfile" id="logfile" value="/path/to/b3.log" title="<?php echo $LANG['B3_LOG_TIP']; ?>" />
			  </span><br />
              <span>
			    <label><?php echo $LANG['LOG_LEVEL']; ?></label>
				<select style="width:194px;" name="log_level" id="log_level" title="<?php echo $LANG['LOG_LEVEL_TIP']; ?>"><option value="0">----- <?php echo $LANG['SELECT_LOG_LEVEL']; ?> -----</option><?php select_log_level(); ?></select>
			  </span><br />
            </dd>
          </dl>
      </fieldset>
    </td>
  </tr>
  <tr>
    <td>
      <fieldset id="database">
        <legend><?php echo $LANG['DB_SETTINGS']; ?></legend>
          <dl>
            <dt><?php echo $LANG['DB_SETTINGS_TIP']; ?></dt>
            <dd>
              <span>
			    <label><?php echo $LANG['USERNAME']; ?></label>
				<input type="text" size="30" name="db_user" id="db_user" value="root" title="<?php echo $LANG['USERNAME_TIP'];?>" />
			  </span><br />
              <span>
			    <label><?php echo $LANG['PASSWORD'];?></label>
				<input type="text" size="30" name="db_pass" id="db_pass" value="mYPASswOrd" title="<?php echo $LANG['PASSWORD_TIP']; ?>" />
			  </span><br />
              <span>
			    <label><?php echo $LANG['HOSTNAME']; ?></label>
				<input type="text" size="30" name="db_host" id="db_host" value="localhost" title="<?php echo $LANG['HOSTNAME_TIP']; ?>" />
			  </span><br />
              <span>
			    <label><?php echo $LANG['DB_NAME']; ?></label>
				<input type="text" size="30" name="db_name" id="db_name" value="b3_db" title="<?php echo $LANG['DB_NAME_TIP']; ?>" />
			  </span><br />
            </dd>
          </dl>
      </fieldset>
    </td>
  </tr>
  
  <tr>
    <td>
    <div class="hide" id="hide5">
      <fieldset id="bfbc2">
        <legend><?php echo $LANG['BFBC2_MOH']; ?></legend>
          <dl>
            <dt><?php echo $LANG['BFBC2_MOH_TIP']; ?></dt>
	          <dd>
                <span>
			      <label><?php echo $LANG['MAX_SAY_LINE']; ?></label>
				  <input type="text" size="30" name="max_say_line_length" id="max_say_line_length" value="100" title="<?php echo $LANG['MAX_SAY_LINE_TIP']; ?>" />
			    </span><br />
			  </dd>
          </dl>
      </fieldset>
    </div>
    </td>
  </tr>
  
  <tr>
    <td>
      <fieldset id="gameserver">
        <legend><?php echo $LANG['GAME_SERVER_SETTINGS']; ?></legend>
          <dl>
            <dt><?php echo $LANG['GAME_SERVER_SETTINGS_TIP']; ?></dt>
            <dd>
              <span>
			    <label><?php echo $LANG['RCONPASS']; ?></label>
				<input type="text" size="30" name="rcon_password" id="rcon_password" value="MYrCOnPaSS" title="<?php echo $LANG['RCONPASS_TIP']; ?>" />
			  </span><br />
              <span>
			    <label><?php echo $LANG['SERVER_PORT']; ?></label>
				<input type="text" size="30" name="port" id="port" value="28960" title="<?php echo $LANG['SERVER_PORT_TIP']; ?>" />
			  </span><br />
              <span>
			    <label><?php echo $LANG['PUBLIC_IP']; ?></label>
			    <input type="text" size="30" name="public_ip" id="public_ip" value="255.255.255.255" title="<?php echo $LANG['PUBLIC_IP_TIP']; ?>" />
			  </span><br />
              <span>
			    <label><?php echo $LANG['RCON_IP']; ?></label>
				<input type="text" size="30" name="rcon_ip" id="rcon_ip" value="127.0.0.1" title="<?php echo $LANG['RCON_IP_TIP']; ?>" />
			  </span><br />
              <div>
                <div class="hide" id="hide6">
                  <span>
				    <label><?php echo $LANG['RCON_PORT']; ?></label>
				    <input type="text" size="30" name="rcon_port" id="rcon_port" value="19567" title="<?php echo $LANG['RCON_PORT_TIP']; ?>" />
				  </span><br />
                  <span>
				    <label><?php echo $LANG['TIMEOUT']; ?></label>
				    <input type="text" size="30" name="timeout" id="timeout" value="3" title="<?php echo $LANG['TIMEOUT_TIP']; ?>" />
				  </span><br />
                </div>
			    <div class="hide" id="hide12">
			      <label><?php echo $LANG['PUNKBUSTER']; ?></label>
				  <select style="width:207px;" name="pb" id="pb" title="<?php echo $LANG['PUNKBUSTER_TIP']; ?>"><option value="0">----- <?php echo $LANG['SELECT_PB_STATUS']; ?> -----</option><?php select_pbsettings(); ?></select>
			    </div>
			  </div><br />
			  <div class="hide" id="hide7">
              <span>
			    <label><?php echo $LANG['GAME_LOG']; ?></label>
				<select style="width:207px;" name="game_log" id="game_log" title="<?php echo $LANG['GAME_LOG_TIP']; ?>"><option value="0">----- <?php echo $LANG['SELECT_LOCATION']; ?> -----</option><option value="local">Local File</option><option value="ftp">FTP Location</option></select>
			  </span><br />
			  </div>
			  <!-- Blackops Only -->
			  <div class="hide" id="hide11">
              <span>
			    <label><?php echo $LANG['GAME_LOG_URL']; ?></label>
				<input type="text" size="60" name="game_log_url" id="game_log_url" title="<?php echo $LANG['GAME_LOG_URL_TIP']; ?>" />
			  </span><br />
			  </div>
              <div class="hide" id="hide1">
                <span>
				  <label><?php echo $LANG['LOCAL_PATH']; ?></label>
				  <input type="text" size="30" name="game_log_local" id="game_log_local" value="/path/to/games_mp.log" title="<?php echo $LANG['LOCAL_PATH_TIP']; ?>" />
				</span><br />
              </div>
              <div class="hide" id="hide2">
                <span>
				  <label><?php echo $LANG['FTP_ADDRESS']; ?></label>
				  <input type="text" size="50" name="game_log_ftpadr" id="game_log_ftpadr" value="ftp://ftp.example.com/games/games_mp.log" title="<?php echo $LANG['FTP_ADDRESS_TIP']; ?>" />
				</span><br />
                <span>
				  <label><?php echo $LANG['FTP_USER']; ?></label>
				  <input type="text" size="50" name="game_log_ftpusr" id="game_log_ftpusr" value="ftpuser" title="<?php echo $LANG['FTP_USER_TIP']; ?>" />
				</span><br />
                <span>
				  <label><?php echo $LANG['FTP_PASSWORD']; ?></label>
				  <input type="text" size="50" name="game_log_ftppas" id="game_log_ftppas" value="FtPpASSw0Rd" title="<?php echo $LANG['FTP_PASSWORD_TIP']; ?>" />
				</span><br />
              </div>
            </dd>
          </dl>
      </fieldset>
    </td>
  </tr>
  <tr>
    <td>
      <fieldset id="autodocimg">
        <legend><?php echo $LANG['AUTODOC_SETTINGS']; ?></legend>
          <dl>
            <dt><?php echo $LANG['AUTODOC_SETTINGS_TIP']; ?></dt>
            <dd>
              <span>
			    <label><?php echo $LANG['TYPE']; ?></label>
				<select style="width:207px" name="type" id="type" title="<?php echo $LANG['TYPE_TIP']; ?>"><option value="0">----- Select Autodoc Type -----</option><?php select_autodoc_type(); ?></select>
			  </span><br />
              <span>
			    <label><?php echo $LANG['MAX_LEVEL']; ?></label>
				<input type="text" size="30" name="maxlevel" id="maxlevel" value="100" title="<?php echo $LANG['MAX_LEVEL_TIP']; ?>" />
			  </span><br />
              <span>
			    <label><?php echo $LANG['DESTINATION']; ?></label>
				<select style="width:207px" name="autodoc" id="autodoc" title="<?php echo $LANG['DESTINATION_TIP']; ?>"><option value="0">----- Select Location -----</option><option value="locala">Local File</option><option value="ftpa">FTP Location</option></select>
			  </span><br />
              <div class="hide" id="hide3">
                <span>
				  <label><?php echo $LANG['LOCAL_PATH']; ?></label>
				  <input type="text" size="30" name="autodoc_local" id="autodoc_local" value="/path/to/b3_doc.html" title="<?php echo $LANG['LOCAL_PATH_TIP2']; ?>" />
				</span><br />
              </div>
              <div class="hide" id="hide4">
                <span>
				  <label><?php echo $LANG['FTP_ADDRESS']; ?></label>
				  <input type="text" size="50" name="autodoc_ftpadr" id="autodoc_ftpadr" value="ftp://ftp.example.com/games/b3_doc.html" title="<?php echo $LANG['FTP_ADDRESS_TIP2']; ?>" />
				</span><br />
                <span>
				  <label><?php echo $LANG['FTP_USER']; ?></label>
				  <input type="text" size="50" name="autodoc_ftpusr" id="autodoc_ftpusr" value="ftpuser" title="<?php echo $LANG['FTP_USER_TIP']; ?>" />
				</span><br />
                <span>
				  <label><?php echo $LANG['FTP_PASSWORD'];?></label>
				  <input type="text" size="50" name="autodoc_ftppas" id="autodoc_ftppas" value="FtPpASSw0Rd" title="<?php echo $LANG['FTP_PASSWORD_TIP']; ?>" />
				</span><br />
              </div>
            </dd>
          </dl>
      </fieldset>
    </td>
  </tr>
  <tr>
    <td>
      <fieldset id="messages">
        <legend><?php echo $LANG['MESSAGES']; ?></legend>
          <dl>
            <dt><?php echo $LANG['MESSAGES_TIP']; ?></dt>
            <dd>
              <span>
			    <label><?php echo $LANG['KICKED_BY']; ?></label>
				<input type="text" size="60" name="kicked_by" id="kicked_by" value="$clientname^7 was kicked by $adminname^7 $reason" title="<?php echo $LANG['KICKED_BY_TIP']; ?>" />
		      </span><br />
              <span>
			    <label><?php echo $LANG['KICKED']; ?></label>
				<input type="text" size="60" name="kicked" id="kicked" value="$clientname^7 was kicked $reason" title="<?php echo $LANG['KICKED_TIP']; ?>" />
			  </span><br />
              <span>
			    <label><?php echo $LANG['BANNED_BY']; ?></label>
				<input type="text" size="60" name="banned_by" id="banned_by" value="$clientname^7 was banned by $adminname^7 $reason" title="<?php echo $LANG['BANNED_BY_TIP']; ?>" />
			  </span><br />
              <span>
			    <label><?php echo $LANG['BANNED']; ?></label>
				<input type="text" size="60" name="banned" id="banned" value="$clientname^7 was banned $reason" title="<?php echo $LANG['BANNED_TIP']; ?>" />
			  </span><br />
              <span>
			    <label><?php echo $LANG['TEMPBANNED_BY']; ?></label>
				<input type="text" size="60" name="temp_banned_by" id="temp_banned_by" value="$clientname^7 was temp banned by $adminname^7 for $banduration^7 $reason" title="<?php echo $LANG['TEMPBANNED_BY_TIP']; ?>" />
			  </span><br />
              <span>
			    <label><?php echo $LANG['TEMPBANNED']; ?></label>
				<input type="text" size="60" name="temp_banned" id="temp_banned" value="$clientname^7 was temp banned for $banduration^7 $reason" title="<?php echo $LANG['TEMPBANNED_TIP']; ?>" />
			  </span><br />
              <span>
			    <label><?php echo $LANG['UNBANNED_BY']; ?></label>
				<input type="text" size="60" name="unbanned_by" id="unbanned_by" value="$clientname^7 was un-banned by $adminname^7 $reason" title="<?php echo $LANG['UNBANNED_BY_TIP']; ?>" />
			  </span><br />
              <span>
			    <label><?php echo $LANG['UNBANNED']; ?></label>
				<input type="text" size="60" name="unbanned" id="unbanned" value="$clientname^7 was un-banned $reason" title="<?php echo $LANG['UNBANNED_TIP']; ?>" />
			  </span><br />
            </dd>
          </dl>
      </fieldset>
    </td>
  </tr>

  <tr>
    <td>
      <fieldset id="externalplugins">
        <legend><?php echo $LANG['EXTERNAL_PLUGINS']; ?></legend>
          <dl>
            <dt>
              <?php echo $LANG['EXTERNAL_PLUGINS_TIP']; ?><br />
              <span style="margin-top:10px; display:inline-block; border:1px dotted #CCC; width:400px; padding:5px;">
              <?php echo $LANG['B3_FOLDER_TIP']; ?><br />
              </span>
            </dt>
            <dd>
              <span>
			    <label><?php echo $LANG['EXTERNAL_DIR']; ?></label>
				<input type="text" size="30" name="external_dir" id="external_dir" value="@b3/extplugins" title="<?php echo $LANG['EXTERNAL_DIR_TIP']; ?>" />
			  </span><br />
            </dd>
          </dl>
      </fieldset>
    </td>
  </tr>

  <tr>
    <td>
      <fieldset id="builtinplugins">
        <legend><?php echo $LANG['BUILTIN_PLUGINS']; ?></legend>
          <dl>
            <dt>
              <?php echo $LANG['BUILTIN_PLUGINS_TIP']; ?><br />
              <span style="margin-top:10px; display:inline-block; border:1px dotted #CCC; width:400px; padding:5px;">
              <?php echo $LANG['CONF_FOLDER_TIP']; ?><br />
              </span>
            </dt>
            <dd>
              <span>
			    <span class="checkbox_text">
				<input type="checkbox" class="checkbox-1" checked="checked" name="censor" id="censor" title="<?php echo $LANG['ENABLE_DISABLE_TIP']; ?>" /> Censor</span>
				<input type="text" size="40" name="censor_location" id="censor_location" value="@conf/plugin_censor.xml" title="<?php echo $LANG['ENTER_PATH']; ?>" />
			  </span><br />
              <span>
			    <span class="checkbox_text">
				<input type="checkbox" class="checkbox-1" checked="checked" name="spamcontrol" id="spamcontrol" title="<?php echo $LANG['ENABLE_DISABLE_TIP']; ?>" /> Spam Control</span>
				<input type="text" size="40" name="spamcontrol_location" id="spamcontrol_location" value="@conf/plugin_spamcontrol.xml" title="<?php echo $LANG['ENTER_PATH']; ?>" />
			  </span><br />
              <span>
			    <span class="checkbox_text">
				<input type="checkbox" class="checkbox-1" checked="checked" name="admin_fake" id="admin_fake" title="<?php echo $LANG['CANNOT_DISABLE_TIP']; ?>" disabled="disabled" /> Admin</span>
				<input type="checkbox" style="display:none;" checked="checked" name="admin" id="admin" title="<?php echo $LANG['CANNOT_DISABLE_TIP']; ?>" /></span>
				<input type="text" size="40" name="admin_location" id="admin_location" value="@conf/plugin_admin.xml" title="<?php echo $LANG['ENTER_PATH']; ?>" />
			  <br />
			  <div class="hide" id="hide8">
              <span>
			    <span class="checkbox_text">
				<input type="checkbox" class="checkbox-1" checked="checked" name="tk" id="tk" title="<?php echo $LANG['ENABLE_DISABLE_TIP']; ?>" /> Team Kill</span>
				<input type="text" size="40" name="tk_location" id="tk_location" value="@conf/plugin_tk.xml" title="<?php echo $LANG['ENTER_PATH']; ?>" />
			  </span><br />
			  </div>
			  <div class="hide" id="hide9">
              <span>
			    <span class="checkbox_text">
				<input type="checkbox" class="checkbox-1" checked="checked" name="stats" id="stats" title="<?php echo $LANG['ENABLE_DISABLE_TIP']; ?>" /> Stats</span>
				<input type="text" size="40" name="stats_location" id="stats_location" value="@conf/plugin_stats.xml" title="<?php echo $LANG['ENTER_PATH']; ?>" />
			  </span><br />
			  </div>
              <span>
			    <span class="checkbox_text">
				<input type="checkbox" class="checkbox-1" checked="checked" name="pingwatch" id="pingwatch" title="<?php echo $LANG['ENABLE_DISABLE_TIP']; ?>" /> Ping Watch</span>
				<input type="text" size="40" name="pingwatch_location" id="pingwatch_location" value="@conf/plugin_pingwatch.xml" title="<?php echo $LANG['ENTER_PATH']; ?>" />
			  </span><br />
              <span>
			    <span class="checkbox_text">
				<input type="checkbox" class="checkbox-1" checked="checked" name="adv" id="adv" title="<?php echo $LANG['ENABLE_DISABLE_TIP']; ?>" /> Advertise</span>
				<input type="text" size="40" name="adv_location" id="adv_location" value="@conf/plugin_adv.xml" title="<?php echo $LANG['ENTER_PATH']; ?>" />
			  </span><br />
              <span>
			    <span class="checkbox_text">
				<input type="checkbox" class="checkbox-1" checked="checked" name="status" id="status" title="<?php echo $LANG['ENABLE_DISABLE_TIP']; ?>" /> Status</span>
				<input type="text" size="40" name="status_location" id="status_location" value="@conf/plugin_status.xml" title="<?php echo $LANG['ENTER_PATH']; ?>" />
			  </span><br />
              <span>
			    <span class="checkbox_text">
				<input type="checkbox" class="checkbox-1" checked="checked" name="welcome" id="welcome" title="<?php echo $LANG['ENABLE_DISABLE_TIP']; ?>" /> Welcome</span>
				<input type="text" size="40" name="welcome_location" id="welcome_location" value="@conf/plugin_welcome.xml" title="<?php echo $LANG['ENTER_PATH']; ?>" />
			  </span><br />
			  <div class="hide" id="hide10">
              <span>
			    <span class="checkbox_text">
				<input type="checkbox" class="checkbox-1" checked="checked" name="punkbuster" id="punkbuster" title="<?php echo $LANG['ENABLE_DISABLE_TIP']; ?>" /> Punkbuster</span>
				<input type="text" size="40" name="punkbuster_location" id="punkbuster_location" value="@conf/plugin_punkbuster.xml" title="<?php echo $LANG['ENTER_PATH']; ?>" />
			  </span><br />
			  </div>
              <span>
			    <span class="checkbox_text">
				<input type="checkbox" class="checkbox-1" name="xlrstats" id="xlrstats" title="<?php echo $LANG['XLRSTATS_TIP']; ?>" /> XLRstats</span>
				<input type="text" size="40" name="xlrstats_location" id="xlrstats_location" value="@b3/extplugins/conf/xlrstats.xml" title="<?php echo $LANG['ENTER_PATH']; ?>" />
			  </span><br />
            </dd>
          </dl>
      </fieldset>
    </td>
  </tr>
  <tr>
    <td align="right">
	  <button type="submit" id="save" name="save" title="<?php echo $LANG['SAVE_BUTTON_TIP']; ?>"><?php echo $LANG['SAVE_BUTTON']; ?></button>
	  <button type="reset" id="clear" name="clear" title="<?php echo $LANG['RESET_BUTTON_TIP']; ?>"><?php echo $LANG['RESET_BUTTON']; ?></button>
	</td>
  </tr>
</tbody>
</table>
</form>
<div class="footer">
  <div class="footer_text">
    <span id="osx-modal"><a href="#" class="osx"><?php echo $LANG['PRIVACY_STATEMENT']; ?></a></span>&nbsp;|
    <a href="http://www.bigbrotherbot.net">BigBrotherBot</a>
	<span class="copyright">Copyright &copy; <a href="http://www.fps-gamer.net">Freelander</a> 2011 - Version <?php echo $version; ?></span>
  </div>
    <span class="validator_logo">
      <a href="http://validator.w3.org/check?uri=referer">
        <img style="border:none;" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
      </a>
    </span>
	<span class="validator_logo_css">
      <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" />
      </a>
    </span>

</div>

<!--Privacy statement content starts here -->
<div id="osx-modal-content">
	<div id="osx-modal-title"><?php echo $LANG['OUR_PRIVACY_STATEMENT']; ?></div>
	<div class="close"><a href="#" class="simplemodal-close">x</a></div>
	<div id="osx-modal-data">
		<?php echo file_get_contents("privacy.txt"); ?>
		<p><button class="simplemodal-close"><?php echo $LANG['CLOSE']; ?></button> <span><?php echo $LANG['PRESS_ESC']; ?></span></p>
	</div>
</div>
<!--Privacy statement content ends here -->

</body>
</html>