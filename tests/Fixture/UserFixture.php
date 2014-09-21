<?php
/**
 * Copyright 2009-2014, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2009-2014, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

namespace Tags\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserFixture
 *
 * @package tags
 * @subpackage tags.tests.fixtures
 */
class UserFixture extends TestFixture {

/**
 * fields property
 *
 * @var array
 */
	public $fields = [
		'id' => ['type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36],
		'name' => ['type' => 'string', 'null' => false],
		'article_id' => ['type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36]
	];

/**
 * records property
 *
 * @var array
 */
	public $records = [
		[
			'id' => 'user-1',
			'name' => 'CakePHP',
			'article_id' => 'article-1'
		],
		[
			'id' => 'user-2',
			'name' => 'Second User',
			'article_id' => 'article-2'
		],
		[
			'id' => 'user-3',
			'name' => 'Third User',
			'article_id' => 'article-3'
		]
	];
}
