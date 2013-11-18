<?php
namespace Dandart\Form\Interface;

interface AddElementInterface
{
	/**
	 * Adds an element
	 *
	 * @return Dandart\Form;
	 * @author Dan Dart
	 **/
	public function addElement(ElementAbstract $objElement);
}