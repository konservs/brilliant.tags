<?php
namespace Brilliant\Tags;
use Brilliant\Tags\Tag;

/**
 * Basic class to control single content category
 *
 * @author Andrii Biriev <a@konservs.com>
 * @copyright � Andrii Biriev, a@konservs.com, www.konservs.com
 */
class Category extends \Brilliant\Items\BItemsItem{
	protected $collectionname='\Brilliant\Tags\Tags';
	protected $tableName='tags';
	/**
	 * @var DateTime
	 */
	public $created;
	/**
	 * @var DateTime
	 */
	public $modified;
	/**
	 * Constructor - init fields...
	 */
	function __construct() {
		parent::__construct();
		$this->fieldAddRaw('name','string');
		//HTML tags
		$this->fieldAddRaw('heading','string');
		$this->fieldAddRaw('title','string');
		$this->fieldAddRaw('metadesc','string');
		$this->fieldAddRaw('metakeyw','string');
		//Created & modified
		$this->fieldAddRaw('created','dt',array('readonly'=>true));
		$this->fieldAddRaw('modified','dt',array('readonly'=>true));
		}

	public function getName(){
		return $this->name;
		}
	}
