<?php
/**
 * blank sidebox - allows a blank sidebox to be added to your site
 *
 * @package templateSystem
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_blank_sidebox.php 2016-06-13 20:49:16Z webchills $
 */

  $content = '';
  $content .= '<div id="' . str_replace('_', '-', $box_id . 'Content') . '" class="sideBoxContent">';

  // Den Inhalt der Sidebox definieren Sie nicht hier, sondern in includes/languages/german/extra_definitions/DEINTEMPLATE/blank_sidebox_defines.php
  // Wenn Sie im Shop auch englisch aktiv haben, definieren Sie den Inhalt für die englische Version in includes/languages/english/extra_definitions/DEINTEMPLATE/blank_sidebox_defines.php
  $content .= '<div class="blanksideboxcontent">' . TEXT_BLANK_SIDEBOX . '</div>';
  $content .= '</div>';