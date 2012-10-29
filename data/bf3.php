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
 * COD5 SETTINGS
 *-----------------------------------------------------------------------------*/
$game_name = 'Battlefield 3';

/*******************************************************************************
 * Game Specific Settings
 *******************************************************************************/
$game_specific_settings = array (
    'max_say_line_length' => array (
        'formtype'   => 'text',
        'title'      => _('Max Say Line Length:'),
        'tooltip'    => _('When sending a message, lines will have at most this number of characters.'),
        'default'    => 128
    ),
    'message_delay' => array (
        'formtype'   => 'text',
        'title'      => _('Message Delay:'),
        'tooltip'    => _('The delay (in second) to wait between two messages'),
        'default'    => 0.8
    ),
    'big_b3_private_responses' => array (
        'formtype'   => 'select',
        'title'      => _('Big B3 Private Responses:'),
        'tooltip'    => _('If on, then all private message sent by B3 will be displayed as a large on-screen message'),
        'default'    => 'on',
        'options'    => array (
            'on'  => 'on',
            'off' => 'off'
        )
    ),
    'big_msg_duration' => array (
        'formtype'   => 'text',
        'title'      => _('Big Message Duration:'),
        'tooltip'    => _('For how many seconds big messages are displayed'),
        'default'    => 6
    )
);

/*******************************************************************************
 * Server Settings
 *******************************************************************************/
$server = array (
    'public_ip' => array (
        'formtype'   => 'text',
        'title'      => _('Public IP:'),
        'tooltip'    => _('Enter your game server\'s public IP.'),
        'default'    => '11.22.33.44'
    ),
    'port' => array (
            'formtype'   => 'text',
            'title'      => _('Server Port:'),
            'tooltip'    => _('Enter your game server\'s port.'),
            'default'    => '19567'
    ),
    'rcon_ip' => array (
        'formtype'   => 'text',
        'title'      => _('Rcon IP:'),
        'tooltip'    => _('Enter your game server\'s rcon IP.'),
        'default'    => '11.22.33.44'
    ),
    'rcon_port' => array (
        'formtype'   => 'text',
        'title'      => _('Rcon Port:'),
        'tooltip'    => _('Enter your game server\'s rcon (admin) port.'),
        'default'    => '48888'
    ),
    'rcon_password' => array (
        'formtype'   => 'text',
        'title'      => _('Rcon Password:'),
        'tooltip'    => _('Enter your rcon password.'),
        'default'    => 'myrconpassword'
    ),
    'timeout' => array (
        'formtype'   => 'text',
        'title'      => _('Timeout:'),
        'tooltip'    => _('Timeout Value'),
        'default'    => 3
    ),
    'ban_agent' => array (
        'formtype'   => 'select',
        'title'      => _('Ban Agent'),
        'tooltip'    => _('Choose how to ban players'),
        'default'    => 'server',
        'options'    => array (
            'server'     => 'server',
            'punkbuster' => 'punkbuster',
            'both'       => 'both'
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
    )
);

/*******************************************************************************
 * External Plugins
 *******************************************************************************/
$external_plugins = array (
    'poweradminbf3' => array (
        'formtype'   => 'plugin',
        'title'      => 'Poweradmin BF3',
        'tooltip'    => 'Adds extra admin abilities to default admin plugin',
        'default'    => '@b3/extplugins/conf/plugin_poweradminbf3.xml',
        'url'        => 'http://forum.bigbrotherbot.net/index.php?action=downloads;sa=downfile&amp;id=172'
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