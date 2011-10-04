<?php
/**
 * @package ImpressPages
 * @copyright   Copyright (C) 2011 ImpressPages LTD.
 * @license GNU/GPL, see ip_license.html
 */
namespace Modules\standard\content_management\widget;

if (!defined('CMS')) exit;

require_once(BASE_DIR.MODULE_DIR.'standard/content_management/widget.php');

class ipTextPicture extends \Modules\standard\content_management\Widget{


    
    public function post($instanceId, $postData, $data) {
        $answer = '';
        
        $newData = array();
        
        
        
        Model::updateInstance($instanceId, $newData);
        
        
        return $answer;  
    }
    
    public function managementHtml($instanceId, $data, $layout){
    	
    	if (!isset($data['text'])) {
    	   $data['text'] = '';    
    	}
    	
    	$data['instanceId'] = $instanceId;
    	

    	
    	$answer = \Ip\View::create('view/management.php', $data)->render();
    	
        return $answer;
    }
    
    
    public function previewHtml($widgetId, $data, $layout){
        
        $answer = '';
        
        if(isset($data['text'])) {
            $answer = $data['text'];
        }
        return $answer;
    }
    
    public function getTitle(){
        return 'Text with picture';
    }
    
    public function getIcon(){
        return MODULE_DIR.'standard/content_management/widget/ipTextPicture/icon.gif';
    }
    
    public function getName(){
        return 'IpTextPicture';
    }    
    

    
}