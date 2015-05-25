<?php
/**
 * @version $Id: index.php 10237 2012-05-01 01:46:24Z dixonn $
 * @author Noxidsoft - Noel Dixon
 * @package Noxidsoft
 * @subpackage lanky
 * @copyright Copyright (C) 2007 - 2012 Noxidsoft. All rights reserved.
 * @license Proprietary software, please refer to www.noxidsoft.com
 */

// No direct access.
defined('_JEXEC') or die;

$color = $this->params->get('templatecolor');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/beez5/css/template.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/beez5/css/print.css" type="text/css" media="Print" />

</head>
<body class="contentpane">
	<div id="all">
		<div id="main">
			<jdoc:include type="message" />
			<jdoc:include type="component" />
		</div>
	</div>
</body>
</html>
