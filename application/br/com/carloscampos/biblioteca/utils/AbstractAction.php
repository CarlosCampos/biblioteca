<?php

namespace br\com\carloscampos\biblioteca\utils
{
	use br\com\carloscampos\biblioteca\actions\AutorAction;

	abstract class AbstractAction
	{
	public abstract function render();
	
	/**
	 * @return AbstractAction 
	*/
	
	public  static function getAction($action)
	{
	switch ($action) {
		case 'autor':
		
		default:
			
		return new AutorAction();
	}
	}
	}
}