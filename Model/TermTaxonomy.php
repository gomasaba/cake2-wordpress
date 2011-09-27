<?php
/**
 * TermTaxonomy Model
 *
 */
class TermTaxonomy extends WpBlogAppModel {
	
	
	var $useTable = "term_taxonomy";
	
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'term_taxonomy_id';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'taxonomy';


	public function beforeFind(&$queryData){
		$conditions = $queryData['conditions'];
		if (!is_array($conditions)) {
			if (!$conditions) {
				$conditions = array();
			}else{
				$conditions = array($conditions);
			}
		}
		if(!isset($conditions['taxonomy']) && !isset($conditions[$this->alias . '.taxonomy'])) {
			$queryData['conditions'][$this->alias . '.taxonomy'] = 'category';
		}
		return parent::beforeFind($queryData);
	}

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Term' => array(
			'className' => 'WpBlog.Term',
			'foreignKey' => 'term_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
	);

	
	public function find($type = 'first', $query = array()) {
		switch ($type) {
			case 'list':
				$return = parent::find('all',array('fields'=>array('TermTaxonomy.term_taxonomy_id')));
				return Set::combine($return,'{n}.TermTaxonomy.term_taxonomy_id','{n}.Term.0');
				break;

			default:
				break;
		}
		parent::find($type, $query);
	}
	
}
