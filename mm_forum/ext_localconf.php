<?php
if (!defined ("TYPO3_MODE")) 	die ("Access denied.");

//include_once t3lib_extMgm::extPath('mm_forum').'includes/cache/class.tx_mmforum_cache.php';

## Extending TypoScript from static template uid=43 to set up userdefined tag:
t3lib_extMgm::addTypoScript($_EXTKEY,"editorcfg","tt_content.CSS_editor.ch.tx_mmforum_pi1 = < plugin.tx_mmforum_pi1.CSS_editor",43);
t3lib_extMgm::addTypoScript($_EXTKEY,"editorcfg","tt_content.CSS_editor.ch.tx_mmforum_pi2 = < plugin.tx_mmforum_pi2.CSS_editor",43);
t3lib_extMgm::addTypoScript($_EXTKEY,"editorcfg","tt_content.CSS_editor.ch.tx_mmforum_pi3 = < plugin.tx_mmforum_pi3.CSS_editor",43);
t3lib_extMgm::addTypoScript($_EXTKEY,'editorcfg','tt_content.CSS_editor.ch.tx_mmforum_pi4 = < plugin.tx_mmforum_pi4.CSS_editor',43);
t3lib_extMgm::addTypoScript($_EXTKEY,"editorcfg","tt_content.CSS_editor.ch.tx_mmforum_pi5 = < plugin.tx_mmforum_pi5.CSS_editor",43);
t3lib_extMgm::addTypoScript($_EXTKEY,"editorcfg","tt_content.CSS_editor.ch.tx_mmforum_pi6 = < plugin.tx_mmforum_pi6.CSS_editor",43);

t3lib_extMgm::addPItoST43($_EXTKEY,"pi1/class.tx_mmforum_pi1.php","_pi1","list_type",1);
t3lib_extMgm::addPItoST43($_EXTKEY,"pi2/class.tx_mmforum_pi2.php","_pi2","list_type",0); 
t3lib_extMgm::addPItoST43($_EXTKEY,"pi3/class.tx_mmforum_pi3.php","_pi3","list_type",1); 
t3lib_extMgm::addPItoST43($_EXTKEY,'pi4/class.tx_mmforum_pi4.php','_pi4','list_type',1); 
t3lib_extMgm::addPItoST43($_EXTKEY,"pi5/class.tx_mmforum_pi5.php","_pi5","list_type",1);  
t3lib_extMgm::addPItoST43($_EXTKEY,"pi6/class.tx_mmforum_pi6.php","_pi6","list_type",0);

	/**
	 * This is a hook to that triggers the tx_mmforum_cache class to
	 * delete all cache files used for the mm_forum. This hook is
	 * called after clearing the TYPO3 cache.
	 */
$TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc'][] = 'typo3conf/ext/mm_forum/includes/cache/class.tx_mmforum_cache.php:tx_mmforum_cache->clearAllCaches';

?>