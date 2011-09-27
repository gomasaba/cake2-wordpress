<?php
/**
 * Term Model
 *
 * @property Term $Term
 * @property TermTaxonomy $TermTaxonomy
 * @property Term $Term
 */
class Term extends WpBlogAppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'term_id';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	//The Associations below have been created with all possible keys, those that are not needed can be removed


/**
 * hasMany associations
 *
 * @var array
 */
	public $hasOne = array(
		'TermTaxonomy' => array(
			'className' => 'WpBlog.TermTaxonomy',
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

	
	
}
