<?php
namespace Dandart\Form\Interface;

interface DecoratableInterface
{
	/**
	 * Adds a decorator
	 *
	 * @return Dandart\Form;
	 * @author Dan Dart
	 **/
	public function addDecorator(DecoratorAbstract $objDecorator);
}