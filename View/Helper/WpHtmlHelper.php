<?php
/**
 * Description of WpHtml
 *
 * @author ootatakayuki
 */
App::uses('AppHelper', 'View/Helper');

class WpHtmlHelper extends AppHelper {
	
/**
 * Other helpers used by WpHtmlHelper
 *
 * @var array
 */
	public $helpers = array('Html');
	
/**
 * Copies the validationErrors variable from the View object into this instance
 *
 * @param View $View The View this helper is being attached to.
 * @param array $settings Configuration settings for the helper.
 */
	public function __construct(View $View, $settings = array()) {
		parent::__construct($View, $settings);
	}
	
	public function category_link($category=array(),$controller=null,$action=null)
	{
		if(!$category) return;
		
		if(!$controller){
			$controller = $this->request->params['controller'];
		}
		if(!$action){
			$action = 'category';
		}
		$out = '<ul>';
		foreach ($category as $key=>$value){
			$out .= '<li>';
			$out .= $this->Html->link($value['name'],array('controller'=>$controller,'action'=>$action,$value['slug']));
			$out .= '</li>';
		}
		$out .= '</ul>';
		return $out;
	}
	
	
}

?>
