<?php
/**
 * @version     
 * @package     Joomdle
 * @subpackage  Content
 * @copyright   Copyright (C) Antonio Duran Terres
 * @license     GNU/GPL, see LICENSE.php
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.user.helper');

//require_once (JPATH_ADMINISTRATOR . '/components/com_joomdle/help/coursegroups.php');


class JoomdleHelperSocialgroups
{
	static function add_group ($name, $description, $course_id)
	{
		JPluginHelper::importPlugin( 'joomdlesocialgroups' );
		$dispatcher = JDispatcher::getInstance();
		$dispatcher->trigger('onAddSocialGroup', array ($name, $description, $course_id));
	}

	static function update_group ($name, $description, $course_id)
	{
		JPluginHelper::importPlugin( 'joomdlesocialgroups' );
		$dispatcher = JDispatcher::getInstance();
		$dispatcher->trigger('onUpdateSocialGroup', array ($name, $description, $course_id));
	}

	static function delete_group ($course_id)
	{
		JPluginHelper::importPlugin( 'joomdlesocialgroups' );
		$dispatcher = JDispatcher::getInstance();
		$dispatcher->trigger('onDeleteSocialGroup', array ($course_id));
	}

	static function add_group_member ($username, $permissions, $course_id)
	{
		JPluginHelper::importPlugin( 'joomdlesocialgroups' );
		$dispatcher = JDispatcher::getInstance();
		$dispatcher->trigger('onAddSocialGroupMember', array ($username, $permissions, $course_id));
	}

	static function remove_group_member ($username, $course_id)
	{
		JPluginHelper::importPlugin( 'joomdlesocialgroups' );
		$dispatcher = JDispatcher::getInstance();
		$dispatcher->trigger('onRemoveSocialGroupMember', array ($username, $course_id));
	}

}

?>
