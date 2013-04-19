<?php
/**
 *  @package     FrameworkOnFramework
 *  @subpackage  include
 *  @copyright   Copyright (c)2010-2012 Nicholas K. Dionysopoulos
 *  @license     GNU General Public License version 2, or later
 *
 *  Initializes FOF
 */

defined('_JEXEC') or die();

if (!defined('FOF_INCLUDED'))
{
    define('FOF_INCLUDED', '##VERSION##');

	// Register the FOF autoloader
    require_once __DIR__ . '/autoloader/fof.php';
	FOFAutloaderFof::init();
	
	// Register the component autoloader
    require_once __DIR__ . '/autoloader/component.php';
	FOFAutloaderComponent::init();
}