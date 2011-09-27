<?php

class WpBlogAppController extends AppController {

	var $uses = array('WpBlog.Post');
	
	
	public function index()
	{
//		pr($this->Post);
		pr($this->Post->find('all'));
	}
	
	
}
