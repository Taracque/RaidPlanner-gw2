<?php
/*------------------------------------------------------------------------
# GuildWars 2 Theme Plugin
# com_raidplanner - RaidPlanner Component
# ------------------------------------------------------------------------
# author    Taracque
# copyright Copyright (C) 2011 Taracque. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website: http://www.taracque.hu/raidplanner
-------------------------------------------------------------------------*/
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

class RaidPlannerPluginGuildwars2 extends RaidPlannerPlugin
{
	function __construct( $guild_id, $guild_name, $params)
	{
		parent::__construct( $guild_id, $guild_name, $params);
		
		$this->provide_sync = false;
	}

	public function characterLink( $char_name )
	{
		return sprintf($this->params['char_link'], rawurlencode($this->params['guild_realm']), rawurlencode($char_name) ) . '" target="_blank';
	}
	
	public function guildHeader()
	{
		return '<strong>' . $this->params['guild_world'] . " - " . strtoupper($this->params['guild_region']) . '</strong>';
	}

	public function loadCSS()
	{
		JHTML::stylesheet('raidplanner_wow.css', 'images/raidplanner/css/' );
		
		return true;
	}

}