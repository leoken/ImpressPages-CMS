<?php 
/**
 * @package	ImpressPages
 * @copyright	Copyright (C) 2011 ImpressPages LTD.
 * @license	GNU/GPL, see ip_license.html
 */

namespace Modules\standard\content_management\Widgets\text_photos\title;   
 
if (!defined('CMS')) exit;
class Template {

  public static function generateHtml($title, $level, $layout = null){
    switch($layout){
      default:
      case "default":     
        return '
<div class="ipWidget ipWidgetTitle">
  <h'.htmlspecialchars($level).' class="ipWidgetTitleHeading">'.htmlspecialchars($title).'</h'.htmlspecialchars($level).'>
</div>
';
        break;
    }
  }
	 
}

