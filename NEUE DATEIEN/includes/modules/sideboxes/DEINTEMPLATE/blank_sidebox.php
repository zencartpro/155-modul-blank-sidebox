<?php
/**
 * blank sidebox - allows a blank sidebox to be added to your site
 *
 * @package templateSystem
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: blank_sidebox.php 2016-06-13 20:49:16Z webchills $
 */

  // test if box should display
  $show_blank_sidebox = true;

  if ($show_blank_sidebox == true) {
      require($template->get_template_dir('tpl_blank_sidebox.php',DIR_WS_TEMPLATE, $current_page_base,'sideboxes'). '/tpl_blank_sidebox.php');
      $title =  BOX_HEADING_BLANK_SIDEBOX;
      $title_link = false;
      require($template->get_template_dir($column_box_default, DIR_WS_TEMPLATE, $current_page_base,'common') . '/' . $column_box_default);
 }