<?php
namespace Brilliant\Tags;

/**
 * Basic class to control Tags
 *
 * @method \Brilliant\Tags\Tag itemGet(integer $id)
 * @method \Brilliant\Tags\Tag[] itemsGet(integer[] $ids)
 * @method \Brilliant\Tags\Tag[] itemsFilter($params)
 *
 * @author Andrii Biriev <a@konservs.com>
 * @copyright © Andrii Biriev, a@konservs.com, www.konservs.com
 */
class Categories extends \Brilliant\Items\BItemsList{
	use \Brilliant\BSingleton;
	protected $tableName='tags';
	protected $itemClassName='\Brilliant\Tags\Tag';
	}
