<?php
if(PHP_SAPI !== 'cli') { die('This script can\'t be run from a web browser. Use CLI to run it.'); }

 $plugin_description = 'Devoice user: !devoice <nick>';
 $plugin_command = 'devoice';

function plugin_devoice()
{

  if(empty($GLOBALS['args'])) { CHANNEL_MSG('Usage: '.$GLOBALS['C_CMD_PREFIX'].'devoice <nick>'); } 
  
  else {
		 fputs($GLOBALS['socket'], 'MODE '.$GLOBALS['C_CNANNEL'].' -v '.$GLOBALS['args']."\n");

		 CLI_MSG('!devoice on: '.$GLOBALS['C_CNANNEL'].', who: '.$GLOBALS['args']);
	   }
}

?>