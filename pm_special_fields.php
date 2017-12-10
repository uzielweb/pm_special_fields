<?php
/*
* @copyright	Copyright (c) 2017 Ponto Mega (https://www.pontomega.com.br). All rights reserved.
* @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*/
// no direct access
defined('_JEXEC') or die;
jimport('joomla.plugin.plugin');
/*
* System - PM Special Fields Plugin
*
* @package		Joomla.Plugin
* @subpakage	PMSPecialFields.special_fields
*/
class plgsystemPM_special_fields extends JPlugin {
/*
* Load the language file on instantiation.
* Note this is only available in Joomla 3.1 and higher.
* If you want to support 3.0 series you must override the constructor
*
* @var boolean
* @since <your version>
*/
protected $autoloadLanguage = true;
/*
* Prepare form and add my field.
*
* @param   JForm  $form  The form to be altered.
* @param   mixed  $data  The associated data for the form.
*
* @return  boolean
*
* @since   <your version>
*/
function onContentPrepareForm($form, $data)
{
$app = JFactory::getApplication();
$option = $app->input->get('option');
if ($option == 'com_menus') {
JForm::addFormPath(JPATH_PLUGINS . '/system/pm_special_fields/');
$form->loadFile('menuoptions', false);
}
}
/*
* Constructor.
*
* @param 	$subject
* @param	array $config
*/
function __construct(& $subject, $config = array()) {
// call parent constructor
parent::__construct($subject, $config);
}
}
