<?php
/**
 * TopicFixture
 *
 */
class TopicFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'body' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'title' => '新しいパソコン',
			'category_id' => 1,
			'created' => '2012-10-05 16:52:07',
		),
		array(
			'id' => 2,
			'title' => '新しい携帯電話',
			'category_id' => 1,
			'created' => '2012-10-05 16:52:09',
		),
		array(
			'id' => 3,
			'title' => '格好良いスマートフォン',
			'category_id' => 1,
			'created' => '2012-10-05 16:52:10',
		),
		array(
			'id' => 4,
			'title' => 'はじめてのPHP',
			'category_id' => 1,
			'created' => '2012-10-05 16:52:11',
		),
		array(
			'id' => 5,
			'title' => 'はじめてのWindows',
			'category_id' => 1,
			'created' => '2012-10-05 16:52:12',
		),
		array(
			'id' => 6,
			'title' => 'CG入門',
			'category_id' => 1,
			'created' => '2012-10-05 16:52:13',
		),
		array(
			'id' => 7,
			'title' => '好きなお寿司は？',
			'category_id' => 2,
			'created' => '2012-10-05 16:52:15',
		),
	);

}
