<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "intcache".
 *
 * Auto generated 24-04-2020 11:04
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'intcache',
  'description' => 'Turn uncachable page objects into cacheable links',
  'category' => 'misc',
  'author' => 'Nicole Cordes',
  'author_email' => 'typo3@cordes.co',
  'author_company' => 'biz-design',
  'state' => 'stable',
  'uploadfolder' => 0,
  'createDirs' => '',
  'clearCacheOnLoad' => 0,
  'version' => '1.1.3',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '7.6.0-10.4.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  '_md5_values_when_last_written' => 'a:27:{s:9:"ChangeLog";s:4:"1155";s:7:"LICENSE";s:4:"b234";s:9:"README.md";s:4:"b0b3";s:13:"composer.json";s:4:"f285";s:13:"composer.lock";s:4:"1bd0";s:12:"ext_icon.png";s:4:"2f84";s:17:"ext_localconf.php";s:4:"173f";s:16:"phpunit.xml.dist";s:4:"041c";s:24:"sonar-project.properties";s:4:"b13b";s:31:"Classes/Exception/Exception.php";s:4:"8ec8";s:40:"Classes/Hooks/ContentPostProcessHook.php";s:4:"22df";s:36:"Classes/Hooks/CreateHashBaseHook.php";s:4:"ceeb";s:38:"Classes/Renderer/IntObjectRenderer.php";s:4:"519b";s:37:"Classes/Renderer/IntcacheRenderer.php";s:4:"6214";s:42:"Configuration/TCA/Overrides/tt_content.php";s:4:"51da";s:38:"Configuration/TypoScript/constants.txt";s:4:"e2f4";s:34:"Configuration/TypoScript/setup.txt";s:4:"8728";s:43:"Resources/Private/Language/locallang_be.xlf";s:4:"6677";s:41:"Resources/Private/Templates/Intcache.ajax";s:4:"8c84";s:40:"Resources/Private/Templates/Intcache.esi";s:4:"c1cd";s:40:"Resources/Private/Templates/Intcache.ssi";s:4:"0e9b";s:45:"Resources/Private/Templates/PageRenderer.html";s:4:"9153";s:36:"Resources/Public/Icons/Extension.svg";s:4:"8ec3";s:47:"Tests/Functional/AbstractFunctionalTestCase.php";s:4:"d31c";s:48:"Tests/Functional/Fixtures/TypoScript/intcache.ts";s:4:"8467";s:51:"Tests/Functional/Hooks/IntcacheDisabledTestCase.php";s:4:"2ba1";s:50:"Tests/Functional/Hooks/IntcacheEnabledTestCase.php";s:4:"bbdf";}',
);

