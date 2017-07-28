<?php
if(PHP_SAPI !== 'cli') { die('This script can\'t be run from a web browser. Use CLI to run it.'); }

 $plugin_description = '!Test PLUGIN FROM REPOSITORY!';
 $plugin_command = 'test';

function plugin_test()
{

 CHANNEL_MSG('TEST PLUGIN');

}

?>