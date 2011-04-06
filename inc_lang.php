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
 */

include('lib/geoip/geoip.inc');

$language = 'en';

//get language based on client IP
$client_ip = $_SERVER['REMOTE_ADDR'];

$gi = geoip_open('lib/geoip/GeoIP.dat', GEOIP_STANDARD);
if(geoip_country_code_by_addr($gi, $client_ip) != '')
{
  if (file_exists('lang/'.$browser_lang.'.php'))
    $language = strtolower(geoip_country_code_by_addr($gi, $client_ip));
    $language = checklangreplacement($language);
}
else
{
  //get client browser language
  $browser_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

  if (file_exists('lang/'.$browser_lang.'.php'))
    $language = checklangreplacement($browser_lang);
}
geoip_close($gi);

include ('lang/'.$language.'.php');

// -----------------------------------------------------------------------------
function checklangreplacement($lang_file)
{
  // array holding countryfiles which should default to a common language file
  $lang_es = array('mx',  'co',  'ar',  'pe',  've',  'cl',  'ec',  'gt',  'cu',  'bo',  'do',  'hn',  'sv',  'py',  'ni',  'cr',  'uy',  'pa',  'gq');
  $lang_nl = array('be');

  if (in_array($lang_file, $lang_es)) $lang_file = "es";
  elseif (in_array($lang_file, $lang_nl)) $lang_file = "nl";

  return $lang_file;
}

?>