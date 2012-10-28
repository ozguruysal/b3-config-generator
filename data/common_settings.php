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

/**
 * This file holds an array of data for common b3 settings for all games/parsers
 */
 
 /*******************************************************************************
 * B3 Settings
 *******************************************************************************/
$b3 = array(
        'bot_name' => array (
            'formtype'   => 'text',
            'title'      => _('Bot Name:'), 
            'tooltip'    => _('Name of the bot.'), 
            'default'    => 'b3',
            'always_hide'=> true
        ),
        'bot_prefix' => array (
            'formtype'   => 'text',
            'title'      => _('Bot Prefix:'), 
            'tooltip'    => _('Ingame messages are prefixed with this code, you can use colorcodes.'), 
            'default'    => '^0(^2b3^0)^7:'
        ),
        'time_format' => array (
            'formtype'   => 'text',
            'title'      => _('Time Format:'), 
            'tooltip'    => _('You can arrange the time format as specified in python\'s time directives.'), 
            'default'    => '%I:%M%p %Z %m/%d/%y'
        ),
        'time_zone' => array (
            'formtype'   => 'text',
            'title'      => _('Time Zone:'), 
            'tooltip'    => _('Set your server\'s timezone so all timebased lookups will show the proper time.'), 
            'default'    => 'CET'
        ),
        'log_level' => array (
            'formtype'   => 'select',
            'title'      => _('Log Level:'), 
            'tooltip'    => _('The amount of logging you want in your b3.log file. Lower numbers log more information.'), 
            'default'    => 9,
            'options'    => array (
                8  => _('Extra verbose debugging'),
                9  => _('Verbose debugging'),
                10 => _('Debugging'),
                20 => _('Extra information'),
                21 => _('B3 log messages'),
                22 => _('Game log messages'),
                30 => _('Warnings'),
                40 => _('Errors'),
                50 => _('Critical Errors')
            )
        ),
        'logfile' => array (
            'formtype' => 'text',
            'title'      => _('B3 Log File:'), 
            'tooltip'    => _('Name and path of the logfile the bot will generate.<br/>@conf : the folder containing this config file'),
            'default'    => '@conf/b3.log'
        ),
);

 /*******************************************************************************
 * Database Settings
 *******************************************************************************/
$database = array (
        'db_user' => array (
            'formtype'   => 'text',
            'title'      => _('Username:'),
            'tooltip'    => _('Your B3 database username.'),
            'default'    => 'root'
        ),
        'db_pass' => array (
            'formtype'   => 'text',
            'title'      => _('Password:'),
            'tooltip'    => _('Your B3 database password.'),
            'default'    => 'mYPASswOrd'
        ),
        'db_host' => array (
            'formtype'   => 'text',
            'title'      => _('Hostname/IP:'),
            'tooltip'    => _('Enter your database hostname or the IP number if your database is on a remote server. 
                               But make sure the database server accepts your connection from outside, this is a common mistake.'),
            'default'    => 'localhost'
        ),
        'db_name' => array (
            'formtype'   => 'text',
            'title'      => _('Database Name:'),
            'tooltip'    => _('Your B3 database name.'),
            'default'    => 'b3_db'
        )
);

 /*******************************************************************************
 * Autodoc Settings
 *******************************************************************************/
$autodoc = array (
        'type' => array (
            'formtype'   => 'select',
            'title'      => _('Type:'),
            'tooltip'    => _('Select autodoc file type you want to use.'),
            'default'    => 'html',
            'options'    => array (
                'html' => 'html',
                'htmltable' => 'htmltable',
                'xml' => 'xml'
            )
        ),
        'maxlevel' => array (
            'formtype'   => 'text',
            'title'      => _('Max Level:'),
            'tooltip'    => _('If you want to exclude commands reserved for higher levels, you may enter a lower value here.'),
            'default'    => '100'
        ),
        'destination' => array (
            'formtype'   => 'multioption',
            'title'      => _('Destination:'),
            'tooltip'    => _('Select the location where you want to generate your command documentation file.'),
            'default'    => 'locala',
            'options'    => array (
                'locala' => array (
                    'title'         => _('Local File'),
                    'hide'          => 1, //Unique number for hide div
                    'autodoc_local' => array (
                        'formtype'   => 'text',
                        'title'      => _('Local Path:'),
                        'tooltip'    => _('Enter the full path and file name.<br/>@conf : the folder containing this config file'),
                        'default'    => '@conf/b3_doc.html'
                    )
                ),
                'ftpa' => array (
                    'title'          => _('FTP Location'),
                    'hide'           => 2, //Unique number for hide div
                    'autodoc_ftpadr' => array (
                        'formtype'    => 'text',
                        'title'       => _('FTP Address:'),
                        'tooltip'     => _('Enter the FTP address for your B3 command documentation file.'),
                        'default'     => 'ftp://ftp.example.com/games/b3_doc.html'
                    ),
                    'autodoc_ftpusr' => array (
                        'formtype'   => 'text',
                        'title'      => _('FTP User:'),
                        'tooltip'    => _('Enter your ftp user name'),
                        'default'    => 'ftpuser'
                    ),
                    'autodoc_ftppas' => array (
                        'formtype'   => 'text',
                        'title'      => _('FTP Pass:'),
                        'tooltip'    => _('Enter your ftp password'),
                        'default'    => 'FtPpASSw0Rd'
                    )
                )
            )
        )
);

 /*******************************************************************************
 * Update
 *******************************************************************************/
$update = array (
    'channel' => array (
        'formtype'   => 'select',
        'title'      => 'Update:',
        'tooltip'    => _('B3 checks if a new version is available at startup. Choose here what channel you want to check against.'),
        'default'    => 'stable',
        'options'    => array (
            'stable' => 'stable',
            'beta'   => 'beta',
            'dev'    => 'dev'
        )
    )
);

 /*******************************************************************************
 * Messages
 *******************************************************************************/
$messages = array (
    'kicked_by' => array (
            'formtype'   => 'text',
            'title'      => _('Kicked By:'),
            'tooltip'    => _('The message that will be displayed when a player is kicked by a mod/admin.'),
            'default'    => '$clientname^7 was kicked by $adminname^7 $reason',
            'size'       => '420px'
    ),
    'kicked' => array (
            'formtype'   => 'text',
            'title'      => _('Kicked:'),
            'tooltip'    => _('The message that will be displayed when a player is kicked by B3.'),
            'default'    => '$clientname^7 was kicked $reason',
            'size'       => '420px'
    ),
    'banned_by' => array (
            'formtype'   => 'text',
            'title'      => _('Banned By:'),
            'tooltip'    => _('The message that will be displayed when a player is banned by a mod/admin.'),
            'default'    => '$clientname^7 was banned by $adminname^7 $reason',
            'size'       => '420px'
    ),
    'banned' => array (
            'formtype'   => 'text',
            'title'      => _('Banned:'),
            'tooltip'    => _('The message that will be displayed when a player is kicked by a B3.'),
            'default'    => '$clientname^7 was banned $reason',
            'size'       => '420px'
    ),
    'temp_banned_by' => array (
            'formtype'   => 'text',
            'title'      => _('Temp Banned By:'),
            'tooltip'    => _('The message that will be displayed when a player is temp banned by a mod/admin.'),
            'default'    => '$clientname^7 was temp banned by $adminname^7 for $banduration^7 $reason',
            'size'       => '420px'
    ),
    'temp_banned' => array (
            'formtype'   => 'text',
            'title'      => _('Temp Banned:'),
            'tooltip'    => _('The message that will be displayed when a player is temp banned by B3.'),
            'default'    => '$clientname^7 was temp banned for $banduration^7 $reason',
            'size'       => '420px'
    ),
    'unbanned_by' => array (
            'formtype'   => 'text',
            'title'      => _('Unbanned By:'),
            'tooltip'    => _('The message that will be displayed when a player is unbanned by a mod/admin.'),
            'default'    => '$clientname^7 was un-banned by $adminname^7 $reason',
            'size'       => '420px'
    ),
    'unbanned' => array (
            'formtype'   => 'text',
            'title'      => _('Unbanned:'),
            'tooltip'    => _('The message that will be displayed when a player is unbanned by B3'),
            'default'    => '$clientname^7 was un-banned $reason',
            'size'       => '420px'
    )
);
 
  /*******************************************************************************
 * External Plugins Directory
 *******************************************************************************/
 $external_plugins_dir = array (
    'external_dir' => array (
            'formtype'   => 'text',
            'title'      => _('External Directory:'),
            'tooltip'    => _('Enter here the path to the config folder for your external plugins.'),
            'default'    => '@b3/extplugins'
    )
);
 