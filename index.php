<?php
/**
*BigBrotherBot Config File Generator
*Version: 1.1
*Date: 12.10.2010
*Author: Freelander
*Author URI: http://www.fps-gamer.net

*Copyright(c)2010  Freelander  <mailto:freelander@fps-gamer.net>

*This program is free software; you can redistribute it and/or modify
*it under the terms of the GNU General Public License, version 2, as 
*published by the Free Software Foundation.

*This program is distributed in the hope that it will be useful,
*but WITHOUT ANY WARRANTY; without even the implied warranty of
*MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*GNU General Public License for more details.

*You should have received a copy of the GNU General Public License
*along with this program; if not, write to the Free Software
*Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

include('inc_configmyb3.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<title>BigBrotherBot Config Generator Version 1.0</title>

<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/osx.css" />
<script src="js/jquery.tools.min.js" type="text/javascript"></script>
<script src="js/jquery.simplemodal.js" type="text/javascript"></script>
<script src="js/osx.js" type="text/javascript"></script>
<link rel="shortcut icon" href="img/favicon.ico" />
<meta name="description" content="BigBrotherBot - Web based b3.xml generator" />
<meta name="keywords" content="bigbrotherbot, b3, config, generator, server administration" />
<link rel="canonical" href="http://www.bigbrotherbot.net/" />

<!-- Tooltip functions start here -->
<script>
$(function() {
$("#b3 :input").tooltip({

	// place tooltip on the right edge
	position: "center right",

	// a little tweaking of the position
	offset: [-2, 20],

	// custom opacity setting
	opacity: 0.8

	});
});
</script>
<script type="text/javascript">
$(document).ready(function(){
	$("#game_log").change(function(){
		if ($(this).val() == "local" ) {
			$("#hide1").slideDown("fast"); //Slide Down Effect
		} else {
			$("#hide1").slideUp("fast");	//Slide Up Effect
		}
		if ($(this).val() == "ftp" ) {
			$("#hide2").slideDown("fast"); //Slide Down Effect
		} else {
			$("#hide2").slideUp("fast");	//Slide Up Effect
		}
	});

	$("#autodoc").change(function(){
		if ($(this).val() == "locala" ) {
			$("#hide3").slideDown("fast"); //Slide Down Effect
		} else {
			$("#hide3").slideUp("fast");	//Slide Up Effect
		}
		if ($(this).val() == "ftpa" ) {
			$("#hide4").slideDown("fast"); //Slide Down Effect
		} else {
			$("#hide4").slideUp("fast");	//Slide Up Effect
		}
	});

	$("#parser").change(function(){
		if ($(this).val() == "bfbc2" || $(this).val() == "moh") {
			$("#hide5").slideDown("fast"); //Slide Down Effect
		} else {
			$("#hide5").slideUp("fast");	//Slide Up Effect
		}
	});

	$("#parser").change(function(){
		if ($(this).val() == "bfbc2" || $(this).val() == "moh") {
			$("#hide6").slideDown("fast"); //Slide Down Effect
			$("#hide7").slideUp("fast");	//Slide Up Effect
			$("#hide8").slideUp("fast");	//Slide Up Effect
			$("#hide9").slideUp("fast");	//Slide Up Effect
			$("#hide10").slideUp("fast");	//Slide Up Effect
		} else {
			$("#hide6").slideUp("fast");	//Slide Up Effect
			$("#hide7").slideDown("fast"); //Slide Down Effect
			$("#hide8").slideDown("fast"); //Slide Down Effect
			$("#hide9").slideDown("fast"); //Slide Down Effect
			$("#hide10").slideDown("fast"); //Slide Down Effect
		}
	});
});
</script>
<!-- Tooltip functions end here -->

<!-- Modal pop-up window function starts here -->


<script type="text/javascript">

</script>
<!-- Modal pop-up window function ends here -->

</head>
<body>
<div class="header">
  <div class="b3logo"></div>
  <div class="header_text">BigBrotherBot Config File Generator</div>
  <div class="header_note">For B3 Version 1.3 or higher</div>
  <div class="header_right"></div>
</div>
<form id="b3" name="b3config" method="POST" action="showmyconfig.php">
<table width="60%" border="0" cellpadding="0" cellspacing="0" id="b3conf" align="center">
<tbody>
  <tr>
    <th></th>
  </tr>
  <tr>
    <td>
      <fieldset id="settings">
        <legend>General Settings:</legend>
          <dl>
            <dt>Fill in your general information</dt>
            <dd>
              <span>
			    <label>Game:</label>
				<select class="select-1" name="parser" id="parser" title="Select your game."><option value="0">----- Select Your Game -----</option><?php select_your_game(); ?></select>
			  </span><br />
              <span>
			    <label>Bot Name:</label>
				<input type="text" size="28" name="bot_name" id="bot_name" value="B3" title="You may enter a different bot name if you like or leave it as is.">
			  </span><br />
              <span>
			    <label>Bot Prefix:</label>
				<input type="text" size="28" name="bot_prefix" id="bot_prefix" value="^0(^2b3^0)^7:" title="Ingame messages are prefixed with this code, you can use colorcodes. 
				  <br /><br /><u>Color Codes:</u> 
				  <br />^1 = Red
				  <br />^2 = Green
				  <br />^3 = Yellow
				  <br />^4 = Blue
				  <br />^5 = Cyan
				  <br />^6 = Pink/Magenta
				  <br />^7 = White
				  <br />^0 = Black">
			  </span><br />
              <span>
			    <label>Time Format:</label>
				<input type="text" size="28" name="time_format" id="time_format" value="%I:%M%p %Z %m/%d/%y" title="You can arrange the time format as specified in python's time directives.">
			  </span><br />
              <span>
			    <label>Time Zone:</label>
				<input type="text" size="28" name="time_zone" id="time_zone" value="CST" title="Set your server's timezone so all timebased lookups will show the proper time">
			  </span><br />
              <span>
			    <label>B3 Log File:</label>
				<input type="text" size="28" name="logfile" id="logfile" value="/path/to/b3.log" title="Type the location you want to store the log created by B3.">
			  </span><br />
              <span>
			    <label>Log Level:</label>
				<select style="width:194px;" name="log_level" id="log_level" title="The amount of logging you want in your b3.log file. Lower numbers log more information and contain all the messages with higher numbers after it."><option value="0">----- Select Log Level -----</option><?php select_log_level(); ?></select>
			  </span><br />
            </dd>
          </dl>
      </fieldset>
    </td>
  </tr>
  <tr>
    <td>
      <fieldset id="database">
        <legend>Database Settings:</legend>
          <dl>
            <dt>Fill in your database connection information</dt>
            <dd>
              <span>
			    <label>Username:</label>
				<input type="text" size="30" name="db_user" id="db_user" value="root" title="Enter your B3 database username.">
			  </span><br />
              <span>
			    <label>Password:</label>
				<input type="text" size="30" name="db_pass" id="db_pass" value="mYPASswOrd" title="Enter your B3 database password.">
			  </span><br />
              <span>
			    <label>Hostname/IP:</label>
				<input type="text" size="30" name="db_host" id="db_host" value="localhost" title="Enter your database hostname or the IP number if your database is on a remote server. But make sure the database server accepts your connection from outside, this is a common mistake.">
			  </span><br />
              <span>
			    <label>Database Name:</label>
				<input type="text" size="30" name="db_name" id="db_name" value="b3_db" title="Enter your B3 database name.">
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
        <legend>BFBC2/MOH Specific Settings:</legend>
          <dl>
            <dt>Configure BFBC2/MOH specific settings</dt>
	          <dd>
                <span>
			      <label>Max Say Line Length:</label>
				  <input type="text" size="30" name="max_say_line_length" id="max_say_line_length" value="100" title="How long do you want the lines to be restricted to in the chat zone. (maximum length is 100).">
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
        <legend>Game Server Settings:</legend>
          <dl>
            <dt>Fill in your game server related information</dt>
            <dd>
              <span>
			    <label>Rcon Password:</label>
				<input type="text" size="30" name="rcon_password" id="rcon_password" value="MYrCOnPaSS" title="Enter your rcon password.">
			  </span><br />
              <span>
			    <label>Server Port:</label>
				<input type="text" size="30" name="port" id="port" value="28960" title="Enter your game server's port number.">
			  </span><br />
              <span>
			    <label>Public IP:</label>
			    <input type="text" size="30" name="public_ip" id="public_ip" value="255.255.255.255" title="Enter your game server's public IP.">
			  </span><br />
              <span>
			    <label>Rcon IP:</label>
				<input type="text" size="30" name="rcon_ip" id="rcon_ip" value="127.0.0.1" title="Enter your game server's rcon IP.">
			  </span><br />
              <span>
              <div class="hide" id="hide6">
                <span>
				  <label>Rcon Port:</label>
				  <input type="text" size="30" name="rcon_port" id="rcon_port" value="19567" title="Enter your game server's port number for rcon access.">
				</span><br />
                <span>
				  <label>Timeout:</label>
				  <input type="text" size="30" name="timeout" id="timeout" value="3" title="Timeout.">
				</span><br />
              </div>
			    <label>Punkbuster:</label>
				<select style="width:207px;" name="pb" id="pb" title="Select on if you use Punkbuster, otherwise select off."><option value="0">----- Select Your PB Status -----</option><?php select_pbsettings(); ?></select>
			  </span><br />
			  <div class="hide" id="hide7">
              <span>
			    <label>Game Log File:</label>
				<select style="width:207px;" name="game_log" id="game_log" title="Select your game log file location."><option value="0">----- Select Location -----</option><option value="local">Local File</option><option value="ftp">FTP Location</option></select>
			  </span><br />
			  </div>
              <div class="hide" id="hide1">
                <span>
				  <label>Local Path:</label>
				  <input type="text" size="30" name="game_log_local" id="game_log_local" value="/path/to/games_mp.log" title="Enter full path to your game log file.">
				</span><br />
              </div>
              <div class="hide" id="hide2">
                <span>
				  <label>FTP Address:</label>
				  <input type="text" size="50" name="game_log_ftpadr" id="game_log_ftpadr" value="ftp://ftp.example.com/games/games_mp.log" title="Enter FTP address of your game log file including 'ftp://' at the beginning.">
				</span><br />
                <span>
				  <label>FTP User:</label>
				  <input type="text" size="50" name="game_log_ftpusr" id="game_log_ftpusr" value="ftpuser" title="Enter your ftp user name">
				</span><br />
                <span>
				  <label>FTP Pass:</label>
				  <input type="text" size="50" name="game_log_ftppas" id="game_log_ftppas" value="FtPpASSw0Rd" title="Enter your ftp password">
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
        <legend>Autodoc Settings:</legend>
          <dl>
            <dt>Autodoc will generate a user documentation for all B3 commands.</dt>
            <dd>
              <span>
			    <label>Type:</label>
				<select style="width:207px" name="type" id="type" title="Select autodoc file type you want to use."><option value="0">----- Select Autodoc Type -----</option><?php select_autodoc_type(); ?></select>
			  </span><br />
              <span>
			    <label>Max Level:</label>
				<input type="text" size="30" name="maxlevel" id="maxlevel" value="100" title="If you want to exclude commands reserved for higher levels, you may enter a lower value here.">
			  </span><br />
              <span>
			    <label>Destination:</label>
				<select style="width:207px" name="autodoc" id="autodoc" title="Select the location where you want to generate your command documentation file."><option value="0">----- Select Location -----</option><option value="locala">Local File</option><option value="ftpa">FTP Location</option></select>
			  </span><br />
              <div class="hide" id="hide3">
                <span>
				  <label>Local Path:</label>
				  <input type="text" size="30" name="autodoc_local" id="autodoc_local" value="/path/to/b3_doc.html" title="Enter the full path and file name.">
				</span><br />
              </div>
              <div class="hide" id="hide4">
                <span>
				  <label>FTP Address:</label>
				  <input type="text" size="50" name="autodoc_ftpadr" id="autodoc_ftpadr" value="ftp://ftp.example.com/games/b3_doc.html" title="Enter the FTP address for your B3 command documentation file.">
				</span><br />
                <span>
				  <label>FTP User:</label>
				  <input type="text" size="50" name="autodoc_ftpusr" id="autodoc_ftpusr" value="ftpuser" title="Enter your ftp user name">
				</span><br />
                <span>
				  <label>FTP Pass:</label>
				  <input type="text" size="50" name="autodoc_ftppas" id="autodoc_ftppas" value="FtPpASSw0Rd" title="Enter your ftp password">
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
        <legend>Messages:</legend>
          <dl>
            <dt>These are B3 in game messages for specific events.</dt>
            <dd>
              <span>
			    <label>Kicked By:</label>
				<input type="text" size="45" name="kicked_by" id="kicked_by" value="%s^7 was kicked by %s^7 %s" title="Enter the message that will be displayed when a player is kicked by a mod/admin.">
		      </span><br />
              <span>
			    <label>Kicked:</label>
				<input type="text" size="45" name="kicked" id="kicked" value="%s^7 was kicked %s" title="Enter the message that will be displayed when a player is kicked by B3.">
			  </span><br />
              <span>
			    <label>Banned By:</label>
				<input type="text" size="45" name="banned_by" id="banned_by" value="%s^7 was banned by %s^7 %s" title="Enter the message that will be displayed when a player is banned by a mod/admin.">
			  </span><br />
              <span>
			    <label>Banned:</label>
				<input type="text" size="45" name="banned" id="banned" value="%s^7 was banned %s" title="Enter the message that will be displayed when a player is kicked by a B3.">
			  </span><br />
              <span>
			    <label>Temp Banned By:</label>
				<input type="text" size="45" name="temp_banned_by" id="temp_banned_by" value="%s^7 was temp banned by %s^7 for %s^7 %s" title="Enter the message that will be displayed when a player is temp banned by a mod/admin.">
			  </span><br />
              <span>
			    <label>Temp Banned:</label>
				<input type="text" size="45" name="temp_banned" id="temp_banned" value="%s^7 was temp banned for %s^7 %s" title="Enter the message that will be displayed when a player is temp banned by B3.">
			  </span><br />
              <span>
			    <label>Unbanned By:</label>
				<input type="text" size="45" name="unbanned_by" id="unbanned_by" value="%s^7 was un-banned by %s^7 %s" title="Enter the message that will be displayed when a player is unbanned by a mod/admin.">
			  </span><br />
              <span>
			    <label>Unbanned:</label>
				<input type="text" size="45" name="unbanned" id="unbanned" value="%s^7 was un-banned %s" title="Enter the message that will be displayed when a player is kicked by B3.">
			  </span><br />
            </dd>
          </dl>
      </fieldset>
    </td>
  </tr>

  <tr>
    <td>
      <fieldset id="externalplugins">
        <legend>External Plugins:</legend>
          <dl>
            <dt>
              Enter here the path to the config folder for your external plugins.<br />
              <span style="margin-top:10px; display:inline-block; border:1px dotted #CCC; width:400px; padding:5px;">
              @b3 : the folder where B3 code is installed in<br />
              </span>
            </dt>
            <dd>
              <span>
			    <label>External Directory:</label>
				<input type="text" size="30" name="external_dir" id="external_dir" value="@b3/extplugins" title="Enter here the path to the config folder for your external plugins.">
			  </span><br />
            </dd>
          </dl>
      </fieldset>
    </td>
  </tr>

  <tr>
    <td>
      <fieldset id="builtinplugins">
        <legend>Built-in Plugins:</legend>
          <dl>
            <dt>
              Choose built-in plugins you want to use and enter their paths.<br />
              <span style="margin-top:10px; display:inline-block; border:1px dotted #CCC; width:400px; padding:5px;">
              @conf : the folder containing this config file<br />
              </span>
            </dt>
            <dd>
              <span>
			    <span class="checkbox_text">
				<input type="checkbox" class="checkbox-1" checked="checked" name="censor" id="censor" title="Click to disable/enable this plugin"> Censor</span>
				<input type="text" size="40" name="censor_location" id="censor_location" value="@conf/plugin_censor.xml" title="Enter path to plugin config file">
			  </span><br />
              <span>
			    <span class="checkbox_text">
				<input type="checkbox" class="checkbox-1" checked="checked" name="spamcontrol" id="spamcontrol" title="Click to disable/enable this plugin"> Spam Control</span>
				<input type="text" size="40" name="spamcontrol_location" id="spamcontrol_location" value="@conf/plugin_spamcontrol.xml" title="Enter path to plugin config file">
			  </span><br />
              <span>
			    <span class="checkbox_text">
				<input type="checkbox" class="checkbox-1" checked="checked" name="admin_fake" id="admin_fake" title="You cannot disable this plugin" disabled> Admin</span>
				<input type="checkbox" style="display:none;" checked="checked" name="admin" id="admin" title="You cannot disable this plugin"></span>
				<input type="text" size="40" name="admin_location" id="admin_location" value="@conf/plugin_admin.xml" title="Enter path to plugin config file">
			  </span><br />
			  <div class="hide" id="hide8">
              <span>
			    <span class="checkbox_text">
				<input type="checkbox" class="checkbox-1" checked="checked" name="tk" id="tk" title="Click to disable/enable this plugin"> Team Kill</span>
				<input type="text" size="40" name="tk_location" id="tk_location" value="@conf/plugin_tk.xml" title="Enter path to plugin config file">
			  </span><br />
			  </div>
			  <div class="hide" id="hide9">
              <span>
			    <span class="checkbox_text">
				<input type="checkbox" class="checkbox-1" checked="checked" name="stats" id="stats" title="Click to disable/enable this plugin"> Stats</span>
				<input type="text" size="40" name="stats_location" id="stats_location" value="@conf/plugin_stats.xml" title="Enter path to plugin config file">
			  </span><br />
			  </div>
              <span>
			    <span class="checkbox_text">
				<input type="checkbox" class="checkbox-1" checked="checked" name="pingwatch" id="pingwatch" title="Click to disable/enable this plugin"> Ping Watch</span>
				<input type="text" size="40" name="pingwatch_location" id="pingwatch_location" value="@conf/plugin_pingwatch.xml" title="Enter path to plugin config file">
			  </span><br />
              <span>
			    <span class="checkbox_text">
				<input type="checkbox" class="checkbox-1" checked="checked" name="adv" id="adv" title="Click to disable/enable this plugin"> Advertise</span>
				<input type="text" size="40" name="adv_location" id="adv_location" value="@conf/plugin_adv.xml" title="Enter path to plugin config file">
			  </span><br />
              <span>
			    <span class="checkbox_text">
				<input type="checkbox" class="checkbox-1" checked="checked" name="status" id="status" title="Click to disable/enable this plugin"> Status</span>
				<input type="text" size="40" name="status_location" id="status_location" value="@conf/plugin_status.xml" title="Enter path to plugin config file">
			  </span><br />
              <span>
			    <span class="checkbox_text">
				<input type="checkbox" class="checkbox-1" checked="checked" name="welcome" id="welcome" title="Click to disable/enable this plugin"> Welcome</span>
				<input type="text" size="40" name="welcome_location" id="welcome_location" value="@conf/plugin_welcome.xml" title="Enter path to plugin config file">
			  </span><br />
			  <div class="hide" id="hide10">
              <span>
			    <span class="checkbox_text">
				<input type="checkbox" class="checkbox-1" checked="checked" name="punkbuster" id="punkbuster" title="Click to disable/enable this plugin"> Punkbuster</span>
				<input type="text" size="40" name="punkbuster_location" id="punkbuster_location" value="@conf/plugin_punkbuster.xml" title="Enter path to plugin config file">
			  </span><br />
			  </div>
              <span>
			    <span class="checkbox_text">
				<input type="checkbox" class="checkbox-1" name="xlrstats" id="xlrstats" title="Click to disable/enable this plugin<br /> 
					This is a non-standard plugin, and quite resource heavy. Please take
					a look in the B3 forums (look for XLR Extensions) for more
					information before enabling this. Extra database tables are
					necessary."> XLRstats</span>
				<input type="text" size="40" name="xlrstats_location" id="xlrstats_location" value="@b3/extplugins/conf/xlrstats.xml" title="Enter path to plugin config file">
			  </span><br />
            </dd>
          </dl>
      </fieldset>
    </td>
  </tr>
  <tr>
    <td align="right">
	  <button type="submit" id="save" name="save" title="Click to save your config file">Save Config</button>
	  <button type="reset" id="clear" name="clear" title="Click to reset all settings to their default values">Reset</button>
	</td>
  </tr>
</tbody>
</table>
</form>
<div class="footer">
  <div class="footer_text">
    <span id="osx-modal"><a href="#" target="_blank"  class="osx">Privacy Statement</a><span>&nbsp;|
    <a href="http://www.bigbrotherbot.net" target="_blank">BigBrotherBot</a>
	<span class="copyright">Copyright &copy; <a href="http://www.fps-gamer.net" target="_blank">Freelander</a> 2010 - Version <?php echo $version; ?></span>
  </div>
</div>

<!--Privacy statement content starts here -->
<div id="osx-modal-content">
	<div id="osx-modal-title">Our Privacy Statement</div>
	<div class="close"><a href="#" class="simplemodal-close">x</a></div>
	<div id="osx-modal-data">
		<?php echo file_get_contents("privacy.txt"); ?>
		<p><button class="simplemodal-close">Close</button> <span>(or press ESC or click the overlay)</span></p>
	</div>
</div>
<!--Privacy statement content ends here -->

</body>
</html>