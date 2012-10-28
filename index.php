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
 
 include ('functions.php');
 
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<title><?php echo _('BigBrotherBot Config File Generator | Select Your Game'); ?></title>

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

<div id="wrap">

<!-- Header Starts -->

<?php get_header(); ?>

<!-- /Header Ends -->

<div id="main">

<!-- Form Starts -->

<form id="b3" method="get" action="form.php">
<table width="880px" border="0" cellpadding="0" cellspacing="0" id="b3conf" style="margin-left:auto; margin-right:auto;">
<tbody>

  <tr>
    <td>
    <div id="fieldbox_index">
      <fieldset id="">
        <legend style="padding: 10px 0 0 10px;">
          <?php echo _('Online Config File Generator for BigBrotherBot'); ?>
        </legend>
          <dl>
            <dt style="font-size:11pt; line-height: 16pt; border:none;">
              <span><img style="float:left; margin-right:20px;" src="img/b3-config.png" /></span>
              <span>
                <?php echo _('Using this tool you can create your main b3 config file (b3.xml) 
                via a user friendly web form. <br />Please read our <a href="#" class="osx">Privacy Statement</a> 
                first then select your game to start!'); ?><br />
              </span>
            </dt>
            <div style="border-bottom:1px solid #D9D9D9; margin: 0 20px 0 140px; position: relative; bottom:10px;"></div>
            <dd style="padding: 10px 0 0px 50px;">
              <span>
              <label style="width:180px; font-size:12pt;"><?php echo _('Select Your Game:'); ?></label>
              <?php game_picker(); ?>
              </span>
            </dd>
          </dl>
      </fieldset>
    </div>
    </td>
  </tr>

</tbody>
</table>
</form>

<!-- /form Ends -->

</div> <!-- /main -->
</div> <!-- /wrap -->

<!-- Footer Starts -->

<?php get_footer(); ?>

<!-- /Footer Ends -->

<!--Privacy statement content starts here -->

<?php get_privacy_statement(); ?>

<!--Privacy statement content ends here -->

</body>
</html>