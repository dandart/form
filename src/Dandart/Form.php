<?php
namespace Dandart;

use Dandart\Form\Element\ElementAbstract;
use Dandart\Form\Decorator\DecoratorAbstract;
use Dandart\Form\Interface\AddElementInterface;
use Dandart\Form\Interface\DecoratableInterface;
use Dandart\Form\Trait\AddElement;
use Dandart\Form\Trait\Decoratable;

/**
 * The base Form class
 * You should start here.
 *
 * @author Dan Dart
**/
class Form implements AddElementInterface,
			          DecoratableInterface,
			          RenderableInterface
{
	use AddElement;
	use Decoratable;

	/**
	 * Compile the form into string components.
	 *
	 * @return string
	 * @author Dan Dart
	 **/
	public function render()
	{
		$strOut = '';
		foreach ($this->_arrFormElements as $objElement) {
			$arrOut .= $objElement->render();
		}
	}

	/**
	 * The representation of the form
	 * if it is echoed.
	 *
	 * @return string
	 * @author Dan Dart
	 **/
	public function __toString()
	{
		return $this->render();
	}
}