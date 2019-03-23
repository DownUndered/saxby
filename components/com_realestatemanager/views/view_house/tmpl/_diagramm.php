<?php
/**
 *
 * @package  RealEstateManager
 * @copyright 2012 Andrey Kvasnevskiy-OrdaSoft(akbet@mail.ru); Rob de Cleen(rob@decleen.com); 
 * Homepage: http://www.ordasoft.com
  * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version: 3.8 Pro
 *
 * */
function diagram($energy_value = 0, $climate_value = 0, $show_en = true, $show_cl = true){
  $html = '';
  $html_energy = '';
  $html_climate = '';

  if($show_en && $show_en){
    $en_abc = array(  'A'=>'(&lt; 50)',
                      'B'=>'(51 to 90)',
                      'C'=>'(91 to 150)',
                      'D'=>'(151 to 230)',
                      'E'=>'(231 to 330)',
                      'F'=>'(331 to 450)',
                      'G'=>'(&gt; 451)'
                    );

    $energy_class = 'A';
    if($energy_value > 50 && $energy_value <= 90){$energy_class = 'B';}
    elseif($energy_value > 90 && $energy_value <= 150){$energy_class = 'C';}
    elseif($energy_value > 150 && $energy_value <= 230){$energy_class = 'D';}
    elseif($energy_value > 230 && $energy_value <= 330){$energy_class = 'E';}
    elseif($energy_value > 330 && $energy_value <= 450){$energy_class = 'F';}
    elseif($energy_value > 450){$energy_class = 'G';}

    $html_energy = "\t<div class='left'>\n";
    $html_energy .= "<span>"._REALESTATE_MANAGER_SETTINGS_ENERGY_ECONOMY_LABEL.":</span>\n";
    $i = 1;
    foreach($en_abc as $key=>$val) {
      $html_energy .= "\t\t<div class='wrap'>\n";
      $html_energy .= "\t\t\t<div id='en_line$i' class='en_line$i'>\n";
      $html_energy .= "\t\t\t\t<div class='left'>$key</div>\n";
      $html_energy .= "\t\t\t\t<div class='right'>$val</div>\n";
      $html_energy .= "\t\t\t</div><!-- end div id='en_line$i' class='en_line$i' -->\n";
      //$html_energy .= "";
      if($key == $energy_class && !empty($energy_value)){
        $html_energy .= "\t\t\t<div id='en_val$i' class='en_val$i'>$energy_value</div>\n";
      }
      $html_energy .= "\t\t</div><!-- end div class='wrap' -->\n";
      $i++;
    }
    $html_energy .= "\t</div><!-- end div class='left' -->\n";
  }

  if($show_cl && $show_cl){
    $cl_abc = array(  'A'=>'(&lt; 5)',
                      'B'=>'(6 to 10)',
                      'C'=>'(11 to 20)',
                      'D'=>'(21 to 35)',
                      'E'=>'(35 to 55)',
                      'F'=>'(56 to 80)',
                      'G'=>'(&gt; 80)');

    $climate_class = 'A';
    if($climate_value > 6 && $climate_value <= 10){$climate_class = 'B';}
    elseif($climate_value > 11 && $climate_value <= 20){$climate_class = 'C';}
    elseif($climate_value > 20 && $climate_value <= 35){$climate_class = 'D';}
    elseif($climate_value > 35 && $climate_value <= 55){$climate_class = 'E';}
    elseif($climate_value > 55 && $climate_value <= 80){$climate_class = 'F';}
    elseif($climate_value > 80){$climate_class = 'G';}
    $i = 1;

    $html_climate = "\t<div class='left  marg_left'>\n";
    $html_climate .= "<span>"._REALESTATE_MANAGER_SETTINGS_ENERGY_LOST_LABEL.":</span>\n";
    foreach($cl_abc as $key=>$val) {
      $html_climate .= "\t\t<div class='wrap'>\n";
      $html_climate .= "\t\t\t<div id='cl_line$i' class='cl_line$i'>\n";
      $html_climate .= "\t\t\t\t<div class='left'>$key</div>\n";
      $html_climate .= "\t\t\t\t<div class='right'>$val</div>\n";
      $html_climate .= "\t\t\t</div><!-- end div id='cl_line$i' class='cl_line$i' -->\n";
      //$html_climate .= "";
      if($key == $climate_class && !empty($climate_value)){
        $html_climate .= "\t\t\t<div id='en_val$i' class='cl_val$i'>$climate_value</div>\n";
      }
      $html_climate .= "\t\t</div><!-- end div class='wrap' -->\n";
      $i++;
    }
    $html_climate .= "\t</div><!-- end div class='left' -->\n";
  }
    $html .= $html_energy . $html_climate;
    
    return $html;
  }
?>