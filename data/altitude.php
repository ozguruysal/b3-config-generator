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
 
/*-----------------------------------------------------------------------------*
 * ALTITUDE SETTINGS
 *-----------------------------------------------------------------------------*/
$game_name = 'Altitude';

/*******************************************************************************
 * Game Specific Settings
 *******************************************************************************/
$game_specific_settings = False;

/*******************************************************************************
 * Server Settings
 *******************************************************************************/
$server = array (
   'public_ip' => array (
        'formtype'   => 'text',
        'title'      => _('Public IP:'),
        'tooltip'    => _('Enter your game server\'s public IP.'),
        'default'    => '255.255.255.255'
    ),
    'port' => array (
        'formtype'   => 'text',
        'title'      => _('Server Port:'),
        'tooltip'    => _('Enter your game server\'s rcon (admin) port.'),
        'default'    => '27015'
    ),
    'command_file' => array (
        'formtype'   => 'text',
        'title'      => _('Command File'),
        'tooltip'    => _('Enter full path to your command file'),
        'default'    => 'C:/Program Files (x86)/Altitude/servers/command.txt'
    ),
    'delay' => array (
        'formtype'   => 'text',
        'title'      => _('Delay:'),
        'tooltip'    => _('Delay between each log reading. Set a higher value to consume less disk ressources or bandwidth if you remotely connect (ftp or http remote log access)'),
        'default'    => '0.05'
    ),
    'lines_per_second' => array (
        'formtype'   => 'text',
        'title'      => _('Lines per Second'),
        'tooltip'    => _('Number of lines to process per second. Set a lower value to consume less CPU ressources'),
        'default'    => '1000'
    ),
    'game_log' => array (
            'formtype'   => 'multioption',
            'title'      => _('Game Log File:'),
            'tooltip'    => _('Select your game log file location.'),
            'default'    => 'local',
            'options'    => array (
                'local' => array (
                    'title'   => _('Local Path'),
                    'hide'    => 3, //Unique number for hide div
                    'game_log_local' => array (
                        'title'      => _('Local Path:'),
                        'formtype'   => 'text',
                        'tooltip'    => _('Enter full path to your game log file.'),
                        'default'    => 'C:/Program Files (x86)/Altitude/servers/log.txt'
                    )
                ),
                'ftp' => array (
                    'title'          => _('FTP Location'),
                    'hide'           => 4, //Unique number for hide div
                    'game_log_ftpadr' => array (
                        'formtype'    => 'text',
                        'title'       => _('FTP Address:'),
                        'tooltip'     => _('Enter FTP address of your game log file including "ftp://" at the beginning.'),
                        'default'     => 'ftp://ftp.example.com/games/altitude/servers/log.txt'
                    ),
                    'game_log_ftpusr' => array (
                        'formtype'   => 'text',
                        'title'      => _('FTP User:'),
                        'tooltip'    => _('Enter your ftp user name'),
                        'default'    => 'ftpuser'
                    ),
                    'game_log_ftppas' => array (
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
 * Built-in Plugins
 *******************************************************************************/
$builtin_plugins = array (
    'admin'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Admin',
        'tooltip'    => _('This plugin provides main B3 functionalities.'),
        'default'    => '@conf/plugin_admin.xml',
        'checked'    => True,
        'disabled'   => True 
    )
);

/*******************************************************************************
 * External Plugins
 *******************************************************************************/
$external_plugins = array (
);