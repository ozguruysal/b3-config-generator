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
 * HF SETTINGS
 *-----------------------------------------------------------------------------*/
$game_name = 'Homefront';

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
            'tooltip'    => _('Enter your game server\'s port.'),
            'default'    => '27015'
    ),
    'rcon_ip' => array (
        'formtype'   => 'text',
        'title'      => _('Rcon IP:'),
        'tooltip'    => _('Enter your game server\'s rcon IP.'),
        'default'    => '127.0.0.1'
    ),
    'rcon_port' => array (
            'formtype'   => 'text',
            'title'      => _('Rcon Port:'),
            'tooltip'    => _('Enter your game server\'s rcon (admin) port.'),
            'default'    => '27015'
    ),
    'rcon_password' => array (
            'formtype'   => 'text',
            'title'      => _('Rcon Password:'),
            'tooltip'    => _('Enter your rcon password.'),
            'default'    => 'MYrCOnPaSS'
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
    )
);

/*******************************************************************************
 * External Plugins
 *******************************************************************************/
$external_plugins = array (
    'poweradminhf' => array (
        'formtype'   => 'plugin',
        'title'      => 'Poweradmin HF',
        'tooltip'    => 'Adds extra admin abilities to default admin plugin',
        'default'    => '@b3/extplugins/conf/poweradminhf.xml',
        'url'        => 'http://forum.bigbrotherbot.net/downloads/?sa=downfile&amp;id=141'
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
        'url'        => 'http://forum.bigbrotherbot.net/downloads/?sa=downfile&id=7'
    ),
    'xlrstats' => array (
        'formtype'   => 'plugin',
        'title'      => 'XLRstats',
        'tooltip'    => 'Records all player stats in your database.',
        'default'    => '@b3/extplugins/conf/xlrstats.xml',
        'url'        => 'http://www.xlrstats.com'
    )
);