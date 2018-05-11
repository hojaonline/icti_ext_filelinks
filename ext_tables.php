<?php

$conf = unserialize($TYPO3_CONF_VARS["EXT"]["extConf"]["icti_ext_filelinks"]);

$TCA['tt_content']['columns']['media']['config']['maxitems'] = $conf['maxitems'];
$TCA['tt_content']['columns']['media']['config']['max_size'] = $conf['maxsize'];
$TCA['tt_content']['columns']['media']['config']['size'] = $conf['size'];
?>
