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

JHtml::_('behavior.framework', true);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
	<head>
		<jdoc:include type="head" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/print.css" type="text/css" media="Print" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/menu.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/custom.css" type="text/css" />
		
		<!-- Start call to Microsoft Internet Explorer stylesheet - because they are special -->
		<!--[if IE 8]>
			<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ie8.css" type="text/css" />
		<![endif]-->
		<!-- Stop call to Microsoft Internet Explorer stylesheet -->
	</head>

	<body>
		<div id="wrapper" style="width:<?php echo $this->params->get('siteWidth'); ?>";>
			<!-- Top start -->
			<div id="container2top">
				<div id="container1top">
					<?php if($this->countModules('top1')) : ?>
					<div id="col1top">
						<!-- Column one start -->
						<jdoc:include type="modules" name="top1" style="xhtml" />
						<!-- Column one end -->
					</div>
					<?php endif; ?>
					<?php if($this->countModules('top2')) : ?>
					<div id="col2top">
						<!-- Column two start -->
						<jdoc:include type="modules" name="top2" style="xhtml" />
						<!-- Column two end -->
					</div>
					<?php endif; ?>
				</div>
			</div>
			<!-- Top end -->
			
			<!-- Header start -->
			<?php if($this->countModules('header')) : ?>  
				<div id="header">  
					<jdoc:include type="modules" name="header" style="xhtml" />  
				</div>  
			<?php endif; ?>
			<!-- Header end -->
			
			<!-- Main and left and right start -->
			<div class="colmask threecol">
				<div class="colmid">
					<div class="colleft">
						<div class="col1">
							<!-- Column 1 start -->
							<div id="maincontent">
								<!-- ContentTop start -->
								<?php if($this->countModules('contentTop')) : ?>  
									<div id="contentTop">  
										<jdoc:include type="modules" name="contentTop" style="xhtml" />  
									</div>  
								<?php endif; ?>
								<!-- ContentTop end -->
								<jdoc:include type="message" />
								<jdoc:include type="component" />
							</div>
							<!-- Column 1 end -->
						</div>
						<?php if($this->countModules('left')) : ?> 
						<div class="col2">
							<!-- Column 2 start -->
								<div id="left">  
									<jdoc:include type="modules" name="left" style="xhtml" />  
								</div>
							<!-- Column 2 end -->
						</div>
						<?php endif; ?>
						<?php if($this->countModules('right')) : ?>
						<div class="col3">
							<!-- Column 3 start -->
								<div id="right">  
									<jdoc:include type="modules" name="right" style="xhtml" />  
								</div>
							<!-- Column 3 end -->
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<!-- Main and left and right end -->
	
			<!-- Footer start -->
			<?php if($this->countModules('footer')) : ?>  
				<div id="footer">  
					<jdoc:include type="modules" name="footer" style="xhtml" />  
				</div>  
			<?php endif; ?>
			<!-- Footer end -->
	
			<!-- Debug start -->
			<?php if($this->countModules('debug')) : ?>
				<jdoc:include type="modules" name="debug" style="xhtml" />
			<?php endif; ?>
			<!-- Debug end -->
		</div>
		
		<!-- Start Google analytics - get your code here: http://www.google.com/analytics //
			<script type="text/javascript">
			  var _gaq = _gaq || [];
			  _gaq.push(["_setAccount", "UA-XXXXXXX-X"]);
			  _gaq.push(["_trackPageview"]);
			  (function() {
				var ga = document.createElement("script"); ga.type = "text/javascript"; ga.async = true;
				ga.src = ("https:" == document.location.protocol ? "https://ssl" : "http://www") + ".google-analytics.com/ga.js";
				var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ga, s);
			  })();
			</script>
		// Stop Google analytics -->
		
	</body>
</html>
