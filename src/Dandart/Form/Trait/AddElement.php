<?php
namespace Dandart\Form\Trait;

class AddElement
{
	/**
	 * The variable array of form elements.
	 *
	 * @var array
	 * @author Dan Dart
	 **/
	private $_arrFormElements = [];

	/**
	 * Adds an element to the form
	 *
	 * @return Dandart\Form;
	 * @author Dan Dart
	 **/
	public function addElement(ElementAbstract $objElement)
	{
		$this->_arrFormElements[] = $objElement;
		return $this;
	}

	/**
	 * Retrieves the elements for further processing.
	 *
	 * @return array
	 * @author Dan Dart
	 **/
	protected function _getElements()
	{
		return $this->_arrFormElements;
	}
}