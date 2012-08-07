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
 * SmG SETTINGS
 *-----------------------------------------------------------------------------*/
$game_name = 'Urban Terror 4.1';

/*******************************************************************************
 * Game Specific Settings
 *******************************************************************************/
$game_specific_settings = False;

/*******************************************************************************
 * Server Settings
 *******************************************************************************/
$server = array (
    'rcon_password' => array (
            'formtype'   => 'text',
            'title'      => _('Rcon Password:'),
            'tooltip'    => _('Enter your rcon password.'),
            'default'    => 'MYrCOnPaSS'
    ),
    'port' => array (
            'formtype'   => 'text',
            'title'      => _('Server Port:'),
            'tooltip'    => _('Enter your game server\'s rcon (admin) port.'),
            'default'    => '28960'
    ),
    'public_ip' => array (
        'formtype'   => 'text',
        'title'      => _('Public IP:'),
        'tooltip'    => _('Enter your game server\'s public IP.'),
        'default'    => '255.255.255.255'
    ),
    'rcon_ip' => array (
        'formtype'   => 'text',
        'title'      => _('Rcon IP:'),
        'tooltip'    => _('Enter your game server\'s rcon IP.'),
        'default'    => '127.0.0.1'
    ),
    'delay' => array (
        'formtype'   => 'text',
        'title'      => _('Delay:'),
        'tooltip'    => _('Delay between each log reading. Set a higher value to consume less disk ressources or bandwidth if you remotely connect (ftp or http remote log access)'),
        'default'    => '0.33'
    ),
    'lines_per_second' => array (
        'formtype'   => 'text',
        'title'      => _('Lines per Second'),
        'tooltip'    => _('Number of lines to process per second. Set a lower value to consume less CPU ressources'),
        'default'    => '50'
    ),
    'punkbuster' => array (
        'formtype'   => 'select',
        'title'      => _('Punkbuster:'),
        'tooltip'    => _('Select on if you use Punkbuster, otherwise select off.'),
        'default'    => 'on',
        'options'    => array (
            'on' => 'on',
            'off' => 'off'
        )
    ),
    'game_log' => array (
            'formtype'   => 'multioption',
            'title'      => _('Game Log File:'),
            'tooltip'    => _('Select your game log file location.'),
            'default'    => 'local',
            'options'    => array (
                'local' => array (
                    'title'   => _('Local Path'),
                    'hide'    => 10,
                    'game_log_local' => array (
                        'title'      => _('Local Path:'),
                        'formtype'   => 'text',
                        'tooltip'    => _('Enter full path to your game log file.'),
                        'default'    => '/path/to/games_mp.log'
                    )
                ),
                'ftp' => array (
                    'title'          => _('FTP Location'),
                    'hide'           => 11, //Unique number for hide div
                    'game_log_ftpadr' => array (
                        'formtype'    => 'text',
                        'title'       => _('FTP Address:'),
                        'tooltip'     => _('Enter FTP address of your game log file including "ftp://" at the beginning.'),
                        'default'     => 'ftp://ftp.example.com/games/games_mp.log'
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
    'censor'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Censor',
        'tooltip'    => _('Cencors bad words and bad names'),
        'default'    => '@conf/plugin_censor.xml'
    ),
    'spamcontrol'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Spam Control',
        'tooltip'    => _('Warns players who spams the in game chat'),
        'default'    => '@conf/plugin_spamcontrol.xml'
    ),
    'admin'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Admin',
        'tooltip'    => _('This plugin provides main B3 functionalities.'),
        'default'    => '@conf/plugin_admin.xml',
        'checked'    => True,
        'disabled'   => True 
    ),
    'tk'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Team Kill',
        'tooltip'    => _('Punishes team killers'),
        'default'    => '@conf/plugin_tk.xml'
    ),
    'stats'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Stats',
        'tooltip'    => _('Displays round based stats'),
        'default'    => '@conf/plugin_stats.xml'
    ),
    'pingwatch'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Ping Watch',
        'tooltip'    => _('Notifies players with high ping'),
        'default'    => '@conf/plugin_pingwatch.xml'
    ),
    'adv'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Advertise',
        'tooltip'    => _('Manages your server messages'),
        'default'    => '@conf/plugin_adv.xml'
    ),
    'status'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Status',
        'tooltip'    => _('Writes server status to an xml file. This can be used by 3rd party tools to monitor server status.'),
        'default'    => '@conf/plugin_status.xml'
    ),
    'welcome'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Welcome',
        'tooltip'    => _('Welcomes players'),
        'default'    => '@conf/plugin_welcome.xml'
    ),
    'punkbuster'   => array (
        'formtype'   => 'plugin',
        'title'      => 'Punkbuster',
        'tooltip'    => _('Provides Punkbuster features if enabled in server config.'),
        'default'    => '@conf/plugin_punkbuster.xml'
    )
);

/*******************************************************************************
 * External Plugins
 *******************************************************************************/
$external_plugins = array (
    'poweradminurt' => array (
        'formtype'   => 'plugin',
        'title'      => 'Poweradmin UrT',
        'tooltip'    => 'Adds extra admin abilities to default admin plugin',
        'default'    => '@b3/extplugins/conf/poweradminurt.xml',
        'url'        => 'http://forum.bigbrotherbot.net/downloads/?sa=downfile&amp;id=1'
    ),
    'banlist' => array (
        'formtype'   => 'plugin',
        'title'      => 'Banlist',
        'tooltip'    => 'Allows easy sharing of cheater banlist between clans',
        'default'    => '@b3/extplugins/conf/banlist.xml',
        'url'        => 'http://forum.bigbrotherbot.net/downloads/?sa=downfile&amp;id=6'
    ),
    'chatlogger' => array (
        'formtype'   => 'plugin',
        'title'      => 'Chatlogger',
        'tooltip'    => 'This plugin logs to database and/or file all clients\' messages (chat, team chat, private chat).',
        'default'    => '@b3/extplugins/conf/plugin_chatlogger.xml',
        'url'        => 'http://github.com/courgette/b3-plugin-chatlogger/zipball/v1.0'
    ),
    'xlrstats' => array (
        'formtype'   => 'plugin',
        'title'      => 'XLRstats',
        'tooltip'    => 'Records all player stats in your database.',
        'default'    => '@b3/extplugins/conf/xlrstats.xml',
        'url'        => 'http://www.xlrstats.com'
    )
);