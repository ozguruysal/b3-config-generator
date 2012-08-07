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
 * Generates a dropdown list with available games
 */
function game_picker() {
  ?>
  <select name="parser" id="parser" onchange="form.submit()">
    <option value="0" disabled="disabled" selected="selected"><?php echo _('Please Select'); ?></option>
  <?php
  if ($handle = opendir('data')) {
    while (false !== ($entry = readdir($handle))) {
      if ($entry != "." && $entry != ".." && $entry != 'common_settings.php' && $entry != 'index.php') {
        include_once('data/' . $entry);
        $parser = explode('.', $entry);
        $parser = $parser[0];
        $games[$parser] = $game_name;
      }
   }
    closedir($handle);
  }
  //we sort the games here since it's not sorted in some servers
  asort($games);
  foreach($games as $parser => $game_name) {
    echo '  <option value="'.$parser.'">'.$game_name.'</option>' . "\n";
  }
  ?>
  </select>
  <?php
}

/**
 * Returns version
 */
function get_version() {
  $version = file_get_contents('version.txt');
  return $version;
}

/**
 * Displays header
 */
function get_header() {
  ?>
  <div class="header">
    <div class="b3logo">
      <a href="http://www.bigbrotherbot.net" title="<?php echo _('BigBrotherBot Home Page'); ?>">
        <img src="img/b3-logo-light-text.png" />
      </a>
    </div>
    <div class="header_text"><?php echo _('BigBrotherBot Config File Generator'); ?></div>
  </div>
  <?php
}

/**
 * Displays footer
 */
function get_footer() {
  ?>
  <div class="footer">
  <div class="footer_text">
    <span id="osx-modal"><a href="#" class="osx"><?php echo _('Privacy Statement'); ?></a></span>&nbsp;|
    <a href="http://www.bigbrotherbot.net">BigBrotherBot</a>
    <span class="copyright"><?php echo _('Copyright'); ?> &copy; <a href="http://www.fps-gamer.net">Freelander</a> 2012 - Version <?php echo get_version(); ?></span>
  </div>
</div>
  <?php
}

/**
 * Gets privacy statement content in a hidden div
 */
function get_privacy_statement() {
  ?>
  <div id="osx-modal-content">
    <div id="osx-modal-title"><?php echo _('Our Privacy Statement'); ?></div>
    <div class="close"><a href="#" class="simplemodal-close">x</a></div>
    <div id="osx-modal-data">
        <?php echo file_get_contents("privacy.txt"); ?>
        <p><button class="simplemodal-close"><?php echo _('Close'); ?></button> <span><?php echo _('or press ESC or click the overlay'); ?></span></p>
    </div>
</div>
  <?php
}

/*************************************************************************************
 * FORM BUILDER FUNCTIONS
 ************************************************************************************/
 
/**
 * This is the main builder function. It displays a form section 
 * for a particular array generated from settings files located in 
 * data folder
 *
 * @param array $section Data array in settings file
 */
function get_section($section) {

  foreach($section as $key=>$value) {

    $id = $key;
    $formtype = $section[$key]['formtype'];
    $title    = $section[$key]['title'];
    $tooltip  = $section[$key]['tooltip'];
    $default  = $section[$key]['default'];
  
    if($formtype == 'text') {
      get_textbox_field($section, $title, $id, $default, $tooltip);
    } 
    elseif($formtype == 'select') {
      get_select_field ($section, $title, $id, $default, $tooltip);
    }
    elseif($formtype == 'multioption') {
      get_multioption_field ($section, $title, $id, $default, $tooltip);
    }
    elseif ($formtype == 'plugin') {
      get_plugin_field($section, $title, $id, $default, $tooltip);
    }
  }
}

/**
 * Displays a text field
 *
 * @param string $title value in <label> tag
 * @param string $id name and id field of <input> tag
 * @param string $default default value to be displayed in text box
 * @param string $tooltip title field in <input> tag that's used as tooltip
 */
function get_textbox_field($section, $title, $id, $default, $tooltip) {
  if(isset($section[$id]['size'])){
    $size = $section[$id]['size'];
  }
  ?>
  <span>
      <label><?php echo $title ?></label>
      <input type="text" <?php if(isset($size)) echo 'style="width:'.$size.';"'; ?> name="<?php echo $id; ?>" id="<?php echo $id; ?>" value="<?php echo $default;?>" title="<?php echo $tooltip; ?>" />
    </span><br />
  <?php
}
 
/**
 * Creates a select field. Options are created from the options array.
 *
 * @param array $section data array in settings file
 * @param string $title value in <label> tag
 * @param string $id name and id field of <input> tag
 * @param string $tooltip title field in <input> tag that's used as tooltip
 */
function get_select_field ($section, $title, $id, $default, $tooltip) {
  ?>
  <span>
    <label><?php echo $title ?></label>
    <select name="<?php echo $id; ?>" id="<?php echo $id; ?>" title="<?php echo $tooltip; ?>">
      <option value="0"><?php echo _('Please Select'); ?></option>
      <?php
      foreach ($section[$id]['options'] as $k => $v) {
        if (is_numeric($k)) {
          $option = $k;
          $value = $k . ' - ' . $v;
        } else {
          $option = $v;
          $value = $v;
        }
        if(isset($default) && $default == $option) {
        ?>
          <option selected="selected" value="<?php echo $option; ?>"><?php echo $value; ?></option>
        <?php
        } else {
       ?>
         <option value="<?php echo $option; ?>"><?php echo $value; ?></option>
       <?php
        }
     }
     ?>
    </select>
  </span><br />
  <?php
}

/**
 * Displays a multioption field where new fields shown or hidden
 * based on the initial selection. Supports max 2 options.
 *
 * @param array $section data array in settings file
 * @param string $title value in <label> tag
 * @param string $id name and id field of <select> tag
 * @param string $tooltip title field in <input> tag that's used as tooltip
 */
function get_multioption_field ($section, $title, $id, $default, $tooltip) {
  ?>
  <span>
    <label><?php echo $title; ?></label>
    <select name="<?php echo $id; ?>" id="<?php echo $id; ?>" title="<?php echo $tooltip; ?>">
      <option value="0"><?php echo _('Please Select'); ?></option>
    <?php
    foreach ($section[$id]['options'] as $key => $value) {
      if($default == $key) {
        ?>
        <option selected="selected" value="<?php echo $key; ?>"><?php echo $value['title']?></option>
        <?php
      } else {
        ?>
        <option value="<?php echo $key; ?>"><?php echo $value['title']?></option>
        <?php
      }
    //store option values in an array so we'll use the in java script below
    $option_value[] = $key;
    }
    ?>
    </select>
  </span><br />
  <?php
  foreach ($section[$id]['options'] as $key => $value) {
    //store hide numbers in an array so we'll use them in java script below
    $hide[] = $value['hide'];
    ?>
    <div class="hide" id="hide<?php echo $value['hide']; ?>">
    <?php
    get_section($value);
    ?>
    </div>
    <?php
  }
  ?>
  <script language="JavaScript">
  $(document).ready(function(){
      //slide down the default option when page is loaded
      var selected = ($('#<?php echo $id; ?> option:selected').val());
      if (selected == "<?php echo $option_value[0]; ?>") {
        $("#hide<?php echo $hide[0]; ?>").slideDown("fast");         //Slide Down Effect
      }
      else if (selected == "<?php echo $option_value[1]; ?>") {
        $("#hide<?php echo $hide[1]; ?>").slideDown("fast");         //Slide Down Effect
      }
      //slide up/down options depending on user choice
      $("#<?php echo $id; ?>").change(function(){
          if ($(this).val() == "<?php echo $option_value[0]; ?>" ) {
              $("#hide<?php echo $hide[0]; ?>").slideDown("slow");     //Slide Down Effect
          } else {
              $("#hide<?php echo $hide[0]; ?>").slideUp("slow");       //Slide Up Effect
          }
          if ($(this).val() == "<?php echo $option_value[1]; ?>" ) {
              $("#hide<?php echo $hide[1]; ?>").slideDown("slow");     //Slide Down Effect
          } else {
              $("#hide<?php echo $hide[1]; ?>").slideUp("slow");       //Slide Up Effect
          }
      });
  });
  </script>
  <?php
}

/**
 * Displays a checkbox and text field for plugins
 *
 * @param string $title value in <label> tag
 * @param string $id name and id field of <input> tag
 * @param string $default default value to be displayed in text box
 * @param string $tooltip title field in <input> tag that's used as tooltip
 */
function get_plugin_field($section, $title, $id, $default, $tooltip) {
  if(isset($section[$id]['disabled'])){
    $disabled = $section[$id]['disabled'];
  }
  if(isset($section[$id]['checked'])){
    $checked = $section[$id]['checked'];
  }
  if(isset($section[$id]['url'])){
    $url = $section[$id]['url'];
  }
  ?>
  <span>
    <span class="checkbox_text">
      <?php
      if(isset($disabled) && $disabled == True) {
      ?>
        <input type="checkbox" class="checkbox-1" <?php if(isset($checked) && $checked == True) echo 'checked="checked"'; ?> name="<?php echo $id; ?>_fake" id="<?php echo $id; ?>_fake" title="<?php echo $tooltip; ?>" disabled="disabled" />
        <label class="plugin_label" for="<?php echo $id; ?>_fake"><?php echo $title; ?></label>
        <input type="checkbox" style="display:none;" <?php if(isset($checked) && $checked == True) echo 'checked="checked"'; ?> name="<?php echo $id; ?>" id="<?php echo $id; ?>" title="<?php echo $tooltip; ?>" />
        <?php
      } else {
          ?>
          <input type="checkbox" class="checkbox-1" <?php if(isset($checked) && $checked == True) echo 'checked="checked"'; ?> name="<?php echo $id; ?>" id="<?php echo $id . '_plugin'; ?>" title="<?php echo $tooltip; ?>" />
          <label class="plugin_label" for="<?php echo $id . '_plugin'; ?>"><?php echo $title; ?></label>
          <?php
      }
      ?>
    </span>
      <input type="text" name="<?php echo $id . '_location'; ?>" id="<?php echo $id . 'location'; ?>" value="<?php echo $default; ?>" title="<?php echo $tooltip; ?>" />
    <?php
    if (isset($url)) {
    ?>
    <span style="font-size:9pt;"><a href="<?php echo $url; ?>" class="plugin-dl" target="_blank"><?php echo _('Download'); ?></a></span>
    <?php
    }
    ?>
  </span><br />
  <?php
}