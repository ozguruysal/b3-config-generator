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

include('configmyb3.php');


function generate_b3config_xml() {
    $doc = get_b3config_xml_document();
    header('Content-disposition: attachment; filename=b3.xml');
    header('Content-type: text/xml');
    echo $doc->saveXML();
}


function generate_b3config_ini() {
    $doc = get_b3config_xml_document();
    $xslt = new XSLTProcessor;
    $xslt->importStyleSheet(DomDocument::load('b3-main-config-xml2ini.xsl'));
    header('Content-disposition: attachment; filename=b3.ini');
    header('Content-type: text/plain');
    echo $xslt->transformToXML($doc);
}


$config_format = $_POST['config_format'];
if ($config_format == 'ini') {
    generate_b3config_ini();
} elseif ($config_format == 'xml') {
    generate_b3config_xml();
} else {
    throw new Exception('Not implemented (' . $config_format . ')');
}
