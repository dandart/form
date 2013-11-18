<?php
namespace Dandart\Form\Interface;

interface RenderableInterface
{
	/**
	 * Compile into string components.
	 *
	 * @return string
	 * @author Dan Dart
	 **/
	public function render();
}