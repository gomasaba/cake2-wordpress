<?php
/**
 * Term TermRelationship
 *
 */
class TermRelationship extends WpBlogAppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = false;



/**
 * hasMany associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Post' => array(
			'className' => 'WpBlog.Post',
			'foreignKey' => 'object_id',
			'dependent' => false,
			'conditions' => array('Post.post_status'=>'publish'),
			'fields' => '',
			'order' => 'Post.id DESC',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
	);

	function beforeFind(&$queryData){
		$conditions = $queryData['conditions'];
		if (!is_array($conditions)) {
			if (!$conditions) {
				$conditions = array();
			}else{
				$conditions = array($conditions);
			}
		}
		if(!isset($conditions['Post.post_date']) && !isset($conditions['Post.post_date'])) {
			$queryData['conditions']['Post.post_date <='] = date('Y-m-d H:i:s');
		}
		return parent::beforeFind($queryData);
	}




}
