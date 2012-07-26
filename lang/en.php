<?php
/**
 * BigBrotherBot Config File Generator
 * Author: Freelander
 * Author URI: http://www.fps-gamer.net
 *
 * Copyright(c)2010  Freelander  <mailto:freelander@fps-gamer.net>
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
 *
 *---------------------------------------------------------------------------------
 *
 * LANGUAGE TRANSLATION FILE
 * Author Name: Freelander
 * Author E-mail: freelander@fps-gamer.net
 * Author URI: http://www.fps-gamer.net
 * Last Modified: 06.04.2011
 *
 */ 


/**********************************************************************************
 * HEADER
 **********************************************************************************/
$LANG['TITLE'] = "BigBrotherBot Config File Generator";
$LANG['SLOGAN'] = "For B3 Version $b3_version or higher";


/**********************************************************************************
 * GENERAL SETTINGS
 **********************************************************************************/
$LANG['GENERAL_SETTINGS'] = "General Settings:";
$LANG['GENERAL_SETTINGS_TIP'] = "Fill in your general information";
$LANG['GAME'] = "Game:";
$LANG['GAME_TIP'] = "Select your game.";
$LANG['BOT_NAME'] = "Bot Name:";
$LANG['BOT_NAME_TIP'] = "You may enter a different bot name if you like or leave it as is.";
$LANG['BOT_PREFIX'] = "Bot Prefix:";
$LANG['BOT_PREFIX_TIP'] = "Ingame messages are prefixed with this code, you can use colorcodes. 
                           ^1:Red,
                           ^2:Green, 
                           ^3:Yellow, 
                           ^4:Blue, 
                           ^5:Cyan, 
                           ^6:Pink/Magenta, 
                           ^7:White, 
                           ^0:Black";
$LANG['TIME_FORMAT'] = "Time Format:";
$LANG['TIME_FORMAT_TIP'] = "You can arrange the time format as specified in python's time directives.";
$LANG['TIME_ZONE'] = "Time Zone:";
$LANG['TIME_ZONE_TIP'] = "Set your server's timezone so all timebased lookups will show the proper time";
$LANG['B3_LOG'] = "B3 Log File:";
$LANG['B3_LOG_TIP'] = "Type the location you want to store the log created by B3.";
$LANG['LOG_LEVEL'] = "Log Level:";
$LANG['LOG_LEVEL_TIP'] = "The amount of logging you want in your b3.log file. Lower numbers log more information 
                          and contain all the messages with higher numbers after it.";


/**********************************************************************************
 * DATABASE SETTINGS
 **********************************************************************************/
$LANG['DB_SETTINGS'] = "Database Settings:";
$LANG['DB_SETTINGS_TIP'] = "Fill in your database connection information";
$LANG['USERNAME'] = "Username:";
$LANG['USERNAME_TIP'] = "Enter your B3 database username.";
$LANG['PASSWORD'] = "Password:";
$LANG['PASSWORD_TIP'] = "Enter your B3 database password.";
$LANG['HOSTNAME'] = "Hostname/IP:";
$LANG['HOSTNAME_TIP'] = "Enter your database hostname or the IP number if your database is on a remote server. 
                         But make sure the database server accepts your connection from outside, this is a common mistake.";
$LANG['DB_NAME'] = "Database Name:";
$LANG['DB_NAME_TIP'] = "Enter your B3 database name.";


/**********************************************************************************
 * BFBC2/BF3/MOH SPECIFIC SETTINGS
 **********************************************************************************/
$LANG['BFBC2_MOH'] = "BFBC2/MOH Specific Settings:";
$LANG['BFBC2_MOH_TIP'] = "Configure BFBC2/MOH specific settings";
$LANG['MAX_SAY_LINE'] = "Max Say Line Length:";
$LANG['MAX_SAY_LINE_TIP'] = "How long do you want the lines to be restricted to in the chat zone. (maximum length is 100).";
$LANG['BF3'] = "BF3 Specific Settings";
$LANG['BF3_TIP'] = "Configure BF3 specific settings";
$LANG['MESSAGE_DELAY'] = "Message Delay:";
$LANG['MESSAGE_DELAY_TIP'] = "The delay (in second) to wait between two messages";
$LANG['BIG_B3_PRIVATE_RESPONSES'] = "Big B3 Private Responses:";
$LANG['BIG_B3_PRIVATE_RESPONSES_TIP'] = "if on, then all private message sent by B3 will be displayed as a big message on screen";
$LANG['BIG_MSG_DURATION'] = "Big Message Duration"; 
$LANG['BIG_MSG_DURATION_TIP'] = "For how many seconds big messages are displayed?";

/**********************************************************************************
 * GAME SERVER SETTINGS
 **********************************************************************************/
$LANG['GAME_SERVER_SETTINGS'] = "Game Server Settings:";
$LANG['GAME_SERVER_SETTINGS_TIP'] = "Fill in your game server related information";
$LANG['RCONPASS'] = "Rcon Password:";
$LANG['RCONPASS_TIP'] = "Enter your rcon password.";
$LANG['SERVER_PORT'] = "Server Port:";
$LANG['SERVER_PORT_TIP'] = "Enter your game server's port number.";
$LANG['PUBLIC_IP'] = "Public IP:";
$LANG['PUBLIC_IP_TIP'] = "Enter your game server's public IP.";
$LANG['RCON_IP'] = "Rcon IP:";
$LANG['RCON_IP_TIP'] = "Enter your game server's rcon IP.";
$LANG['RCON_PORT'] = "Rcon Port:";
$LANG['RCON_PORT_TIP'] = "Enter your game server's port number for rcon access.";
$LANG['TIMEOUT'] = "Timeout:";
$LANG['TIMEOUT_TIP'] = "Timeout value.";
$LANG['PUNKBUSTER'] = "Punkbuster:";
$LANG['PUNKBUSTER_TIP'] = "Select on if you use Punkbuster, otherwise select off.";
$LANG['GAME_LOG'] = "Game Log File:";
$LANG['GAME_LOG_TIP'] = "Select your game log file location.";
$LANG['GAME_LOG_URL'] = "Game Log URL:";
$LANG['GAME_LOG_URL_TIP'] = "Enter your game log URL";
$LANG['LOCAL_PATH'] = "Local Path:";
$LANG['LOCAL_PATH_TIP'] = "Enter full path to your game log file.";
$LANG['FTP_ADDRESS'] = "FTP Address:";
$LANG['FTP_ADDRESS_TIP'] = "Enter FTP address of your game log file including 'ftp://' at the beginning.";
$LANG['FTP_USER'] = "FTP User:";
$LANG['FTP_USER_TIP'] = "Enter your ftp user name";
$LANG['FTP_PASSWORD'] = "FTP Pass:";
$LANG['FTP_PASSWORD_TIP'] = "Enter your ftp password";


/**********************************************************************************
 * AUTODOC SETTINGS
 **********************************************************************************/
$LANG['AUTODOC_SETTINGS'] = "Autodoc Settings:";
$LANG['AUTODOC_SETTINGS_TIP'] = "Autodoc will generate a user documentation for all B3 commands.";
$LANG['TYPE'] = "Type:";
$LANG['TYPE_TIP'] = "Select autodoc file type you want to use.";
$LANG['MAX_LEVEL'] = "Max Level:";
$LANG['MAX_LEVEL_TIP'] = "If you want to exclude commands reserved for higher levels, you may enter a lower value here.";
$LANG['DESTINATION'] = "Destination:";
$LANG['DESTINATION_TIP'] = "Select the location where you want to generate your command documentation file.";
$LANG['LOCAL_PATH_TIP2'] = "Enter the full path and file name.";
$LANG['FTP_ADDRESS_TIP2'] = "Enter the FTP address for your B3 command documentation file.";


/**********************************************************************************
 * MESSAGE SETTINGS
 **********************************************************************************/
$LANG['MESSAGES'] = "Messages:";
$LANG['MESSAGES_TIP'] = "These are B3 in game messages for specific events.";
$LANG['KICKED_BY'] = "Kicked By:";
$LANG['KICKED_BY_TIP'] = "Enter the message that will be displayed when a player is kicked by a mod/admin.";
$LANG['KICKED'] = "Kicked:";
$LANG['KICKED_TIP'] = "Enter the message that will be displayed when a player is kicked by B3.";
$LANG['BANNED_BY'] = "Banned By:";
$LANG['BANNED_BY_TIP'] = "Enter the message that will be displayed when a player is banned by a mod/admin.";
$LANG['BANNED'] = "Banned:";
$LANG['BANNED_TIP'] = "Enter the message that will be displayed when a player is kicked by a B3.";
$LANG['TEMPBANNED_BY'] = "Temp Banned By:";
$LANG['TEMPBANNED_BY_TIP'] = "Enter the message that will be displayed when a player is temp banned by a mod/admin.";
$LANG['TEMPBANNED'] = "Temp Banned:";
$LANG['TEMPBANNED_TIP'] = "Enter the message that will be displayed when a player is temp banned by B3.";
$LANG['UNBANNED_BY'] = "Unbanned By:";
$LANG['UNBANNED_BY_TIP'] = "Enter the message that will be displayed when a player is unbanned by a mod/admin.";
$LANG['UNBANNED'] = "Unbanned:";
$LANG['UNBANNED_TIP'] = "Enter the message that will be displayed when a player is kicked by B3.";


/**********************************************************************************
 * EXTERNAL PLUGINS
 **********************************************************************************/
$LANG['EXTERNAL_PLUGINS'] = "External Plugins:";
$LANG['EXTERNAL_PLUGINS_TIP'] = "Enter here the path to the config folder for your external plugins.";
$LANG['B3_FOLDER_TIP'] = "@b3 : the folder where B3 code is installed in";
$LANG['EXTERNAL_DIR'] = "External Directory:";
$LANG['EXTERNAL_DIR_TIP'] = "Enter here the path to the config folder for your external plugins.";


/**********************************************************************************
 * BUILT-IN PLUGINS
 **********************************************************************************/
$LANG['BUILTIN_PLUGINS'] = "Built-in Plugins:";
$LANG['BUILTIN_PLUGINS_TIP'] = "Choose built-in plugins you want to use and enter their paths.";
$LANG['CONF_FOLDER_TIP'] = "@conf : the folder containing this config file";
$LANG['ENABLE_DISABLE_TIP'] = "Click to disable/enable this plugin";
$LANG['ENTER_PATH'] = "Enter path to plugin config file";
$LANG['CANNOT_DISABLE_TIP'] = "You cannot disable this plugin";
$LANG['XLRSTATS_TIP'] = "Click to disable/enable this plugin : 
                         This is a non-standard plugin, and quite resource heavy. Please take
                         a look in the B3 forums (look for XLR Extensions) for more
                         information before enabling this. Extra database tables are
                         necessary.";

/**********************************************************************************
 * MISC
 **********************************************************************************/
$LANG['SELECT_YOUR_GAME'] = "Select Your Game";
$LANG['SELECT_LOG_LEVEL'] = "Select Log Level";
$LANG['SELECT_PB_STATUS'] = "Select Your PB Status";
$LANG['SELECT_LOCATION'] = "Select Location";
$LANG['SAVE_BUTTON'] = "Save Config";
$LANG['SAVE_BUTTON_TIP'] = "Click to save your config file";
$LANG['RESET_BUTTON'] = "Reset";
$LANG['RESET_BUTTON_TIP'] = "Click to reset all settings to their default values";
$LANG['PRIVACY_STATEMENT'] = "Privacy Statement";
$LANG['OUR_PRIVACY_STATEMENT'] = "Our Privacy Statement";
$LANG['CLOSE'] = "Close";
$LANG['PRESS_ESC'] = "(or press ESC or click the overlay)";
$LANG['SELECT_OPTION'] = "Please Select";

?>