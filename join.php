<?php
if(PHP_SAPI !== 'cli') { die('This script can\'t be run from a web browser. Use CLI to run it.'); }

 $plugin_description = 'Joins channel: !join <#channel>';
 $plugin_command = 'join';

function plugin_join()
{

  if(empty($GLOBALS['args'])) { CHANNEL_MSG('Usage: '.$GLOBALS['C_CMD_PREFIX'].'join <#channel>'); } 
  
  else {
		 JOIN_CHANNEL($GLOBALS['args']); 

		 CLI_MSG('!join on: '.$GLOBALS['C_CNANNEL'].', joining: '.$GLOBALS['args']);
	   }
}

?>