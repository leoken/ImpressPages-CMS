<?php

/**
 * @package	ImpressPages
 * @copyright	Copyright (C) 2011 ImpressPages LTD.
 * @license	GNU/GPL, see ip_license.html
 */


namespace Modules\administrator\system; 
if (!defined('BACKEND')) exit;  

require_once (__DIR__.'/html_output.php');


class HtmlOutput{
  public static function header(){
    return '
      <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
      <html>
      <head>
        <title>ImpressPages</title>
        <link href="'.BASE_URL.BACKEND_DIR.'design/common.css" rel="stylesheet" type="text/css" />  
        <link href="'.BASE_URL.MODULE_DIR.'administrator/system/style.css" rel="stylesheet" type="text/css" />  
        <link REL="SHORTCUT ICON" HREF="backend_design/favicon.ico" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="text/javascript" src="'.LIBRARY_DIR.'js/default.js"></script>
      </head>   
      <body>
      ';        
  }


  public static function footer(){
    return "</body></html>";
  }
}


