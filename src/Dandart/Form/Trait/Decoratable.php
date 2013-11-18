<?php
namespace Dandart\Form\Trait;

trait Decoratable
{
	/**
	 * Array of variable decorators.
	 *
	 * @var array
	 * @author Dan Dart
	 **/
	private $_arrDecorators = [];

	/**
	 * List of default form decorators
	 *
	 * @var array
	 * @author Dan Dart
	 **/
	private $_arrDefaultDecorators = [];

	/**
	 * Adds a decorator
	 *
	 * @return Dandart\Form;
	 * @author Dan Dart
	 **/
	public function addDecorator(DecoratorAbstract $objDecorator)
	{
		$this->_arrDecorators[] = $objDecorator;
		return $this;
	}

	/**
	 * Retrieves the decorators for further processing.
	 *
	 * @return array
	 * @author Dan Dart
	 **/
	protected function _getDecorators()
	{
		return $this->_arrDecorators;
	}
}