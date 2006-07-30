<?php
# TYPO3 CVS ID: $Id$
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TYPO3_CONF_VARS['SYS']['contentTable'] = 'tt_content';
$TYPO3_CONF_VARS['FE']['eID_include']['tx_cms_showpic'] = 'EXT:cms/tslib/showpic.php';

$TYPO3_CONF_VARS['SC_OPTIONS']['ext/install']['compat_version']['cms'] = array(
	'title' => 'CMS Frontend',
	'version' => 4000000,
	'description' => '<p>Word separator character for simulateStaticDocument is changed from ' .
					'underscore (_) to hyphen (-) to make URLs more friendly for search engines.' .
					'URLs that are already existing (e.g. external links to your site) will still work like before.</p>' .
					'<p>You can set the separator character back to an underscore by putting the following line into the '.
					'<b>Setup</b> section of your Page TypoScript template:</p>' .
					'<p style="margin-top: 5px; white-space: nowrap;"><code>config.simulateStaticDocuments_replacementChar = _</code></p>',
);

?>