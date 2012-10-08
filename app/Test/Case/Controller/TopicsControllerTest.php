<?php
App::uses('TopicsController', 'Controller');

/**
 * TopicsController Test Case
 *
 */
class TopicsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.topic',
		'app.category',
		'app.comment'
	);

	public function testトピック一覧を表示できる()
	{
		$result = $this->testAction('/topics/index', array('return' => 'vars'));
		$topics = $result['topics'];
		$this->assertCount(7, $topics);
		$this->assertEquals('新しいパソコン', $topics[0]['Topic']['title']);
		$this->assertEquals('新しい携帯電話', $topics[1]['Topic']['title']);
		$this->assertEquals('格好良いスマートフォン', $topics[2]['Topic']['title']);
		$this->assertEquals('はじめてのPHP', $topics[3]['Topic']['title']);
		$this->assertEquals('はじめてのWindows', $topics[4]['Topic']['title']);
		$this->assertEquals('CG入門', $topics[5]['Topic']['title']);
		$this->assertEquals('好きなお寿司は？', $topics[6]['Topic']['title']);
	}

	public function testトピック一覧はtableタグで表示する()
	{
		$result = $this->testAction('/topics/index', array('return' => 'view'));
		$expected = array(
			'tag' => 'div',
			'attributes' => array('class' => 'topics index'),
			'child' => array(
				'tag' => 'table',
				'children' => array('count' => 8),
			)
		);
		$this->assertTag($expected, $result);
	}

}
