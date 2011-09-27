<?php
/**
 * Post Model
 *
 */
class Post extends WpBlogAppModel {
	
	var $name ='Post';
	var $order = 'Post.id DESC';
	
 	var $hasMany= array(
					'WpBlog.PostMeta'
	);
	/*
	//HABTMの関連づけ
	var $hasAndBelongsToMany = array(
				'WpBlog.Term' =>
					array(
						'joinTable' => 'term_relationships',
						'foreignKey' => 'object_id',
						'associationForeignKey' => 'term_taxonomy_id',
						'unique' => true,
					),
	);
	 * 
	 */
	function beforeFind(&$queryData){
		$conditions = $queryData['conditions'];
		if (!is_array($conditions)) {
			if (!$conditions) {
				$conditions = array();
			}else{
				$conditions = array($conditions);
			}
		}
		if(!isset($conditions['post_type']) && !isset($conditions[$this->alias . '.post_type'])) {
			$queryData['conditions'][$this->alias . '.post_type'] = 'post';
		}
		if(!isset($conditions['post_date']) && !isset($conditions[$this->alias . '.post_date'])) {
			$queryData['conditions'][$this->alias . '.post_date <='] = date('Y-m-d H:i:s');
		}
		return parent::beforeFind($queryData);
	}
	
	function afterFind($results, $primary = false) {
		return parent::afterFind($results, $primary);
	}
	
	function get_category($id)
	{
		$query = "SELECT category.* FROM {$this->tablePrefix}terms AS category INNER JOIN {$this->tablePrefix}term_taxonomy AS tt ON tt.term_id = category.term_id INNER JOIN {$this->tablePrefix}term_relationships AS tr ON tr.term_taxonomy_id = tt.term_taxonomy_id WHERE tt.taxonomy IN ('category') AND tr.object_id IN ({$id})";
		$ret = $this->query($query);
		return $ret;
	}
	
	
}
