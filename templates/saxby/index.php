<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.beez3
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

/** @var JDocumentHtml $this */

JLoader::import('joomla.filesystem.file');

// Check modules
$showRightColumn = ($this->countModules('right-column'));
$showbottom      = ($this->countModules('position-9') or $this->countModules('position-10') or $this->countModules('position-11'));
$showleft        = ($this->countModules('position-4') or $this->countModules('position-7') or $this->countModules('position-5'));

if ($showRightColumn === false && $showleft === false)
{
	$showno = 0;
}

JHtml::_('behavior.framework', true);

// Get params
$color          = $this->params->get('templatecolor');
$logo           = $this->params->get('logo');
$navposition    = $this->params->get('navposition');
$headerImage    = $this->params->get('headerImage');
$config         = JFactory::getConfig();
$bootstrap      = explode(',', $this->params->get('bootstrap'));
$option         = JFactory::getApplication()->input->getCmd('option', '');
$catID 			= JRequest::getVar('catid');

// Output as HTML5
$this->setHtml5(true);

if (in_array($option, $bootstrap))
{
	// Load optional rtl Bootstrap css and Bootstrap bugfixes
	JHtml::_('bootstrap.loadCss', true, $this->direction);
}

// Add stylesheets
JHtml::_('stylesheet', 'templates/system/css/system.css', array('version' => 'auto'));
JHtml::_('stylesheet', 'position.css', array('version' => 'auto', 'relative' => true));
JHtml::_('stylesheet', 'layout.css', array('version' => 'auto', 'relative' => true));
JHtml::_('stylesheet', 'print.css', array('version' => 'auto', 'relative' => true), array('media' => 'print'));
JHtml::_('stylesheet', 'general.css', array('version' => 'auto', 'relative' => true));
JHtml::_('stylesheet', htmlspecialchars($color, ENT_COMPAT, 'UTF-8') . '.css', array('version' => 'auto', 'relative' => true));

if ($this->direction === 'rtl')
{
	JHtml::_('stylesheet', 'template_rtl.css', array('version' => 'auto', 'relative' => true));
	JHtml::_('stylesheet', htmlspecialchars($color, ENT_COMPAT, 'UTF-8') . '_rtl.css', array('version' => 'auto', 'relative' => true));
}

if ($color === 'image')
{
	$this->addStyleDeclaration("
	.logoheader {
		background: url('" . $this->baseurl . "/" . htmlspecialchars($headerImage) . "') no-repeat right;
	}
	body {
		background: " . $this->params->get('backgroundcolor') . ";
	}");
}

JHtml::_('stylesheet', 'ie7only.css', array('version' => 'auto', 'relative' => true, 'conditional' => 'IE 7'));

// Check for a custom CSS file
JHtml::_('stylesheet', 'user.css', array('version' => 'auto', 'relative' => true));

JHtml::_('bootstrap.framework');

// Add template scripts
JHtml::_('script', 'templates/' . $this->template . '/javascript/md_stylechanger.js', array('version' => 'auto'));
JHtml::_('script', 'templates/' . $this->template . '/javascript/hide.js', array('version' => 'auto'));
JHtml::_('script', 'templates/' . $this->template . '/javascript/respond.src.js', array('version' => 'auto'));
JHtml::_('script', 'templates/' . $this->template . '/javascript/template.js', array('version' => 'auto'));

// Check for a custom js file
JHtml::_('script', 'templates/' . $this->template . '/javascript/user.js', array('version' => 'auto'));

require __DIR__ . '/jsstrings.php';

// Add html5 shiv
JHtml::_('script', 'jui/html5.js', array('version' => 'auto', 'relative' => true, 'conditional' => 'lt IE 9'));
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes" />
	<meta name="HandheldFriendly" content="true" />
	<meta name="apple-mobile-web-app-capable" content="YES" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Muli" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<jdoc:include type="head" />
</head>

<body id="shadow">
	<div id="all">
		<div id="back">
			<header id="header">			
				<div id="menuNav">
					<div id="menu-wrapper">
						<div class="logoheader">
							<h1 id="logo">
								<?php if ($logo) : ?>
								<a href="<?php echo JURI::base(); ?>">
									<img src="<?php echo $this->baseurl; ?>/<?php echo htmlspecialchars($logo); ?>"
										alt="<?php echo htmlspecialchars($this->params->get('sitetitle')); ?>" />
								</a>
								<?php endif;?>
								<?php if (!$logo AND $this->params->get('sitetitle')) : ?>
								<?php echo htmlspecialchars($this->params->get('sitetitle')); ?>
								<?php elseif (!$logo AND $config->get('sitename')) : ?>
								<?php echo htmlspecialchars($config->get('sitename')); ?>
								<?php endif; ?>
								<span class="header1">
									<?php echo htmlspecialchars($this->params->get('sitedescription')); ?>
								</span></h1>
						</div><!-- end logoheader -->

						<jdoc:include type="modules" name="top-naviagtion" />
					</div>
					
				</div>
			
				<?php if ($this->countModules('head-banner')) : ?>
					<div id="top">
						<jdoc:include type="modules" name="head-banner" />
					</div>
				<?php endif; ?>
			</header><!-- end header -->
			<div id="<?php echo $showRightColumn ? 'contentarea2' : 'contentarea'; ?>" >
				
				<?php if ($navposition === 'left' and $showleft) : ?>
				<nav class="left1 <?php if ($showRightColumn == null) { echo 'leftbigger';} ?>" id="nav">
					<jdoc:include type="modules" name="position-7" style="beezDivision" headerLevel="3" />
					<jdoc:include type="modules" name="position-4" style="beezHide" headerLevel="3" state="0 " />
					<jdoc:include type="modules" name="position-5" style="beezTabs" headerLevel="2" id="3" />
				</nav><!-- end navi -->
				<?php endif; ?>

				<div id="<?php echo $showRightColumn ? 'wrapper' : 'wrapper2'; ?>"
					<?php if (isset($showno)){echo 'class="shownocolumns"';}?>>
					<div id="main">				

						<?php if ($this->countModules('breadcrumbs')) : ?>
						<div id="breadcrumbs">
							<jdoc:include type="modules" name="breadcrumbs" />
						</div>
						<?php endif; ?>

						<jdoc:include type="message" />
						
						<jdoc:include type="component" />

						<jdoc:include type="modules" name="below-article" style="xhtml" />

			
						


					</div><!-- end main -->
				</div><!-- end wrapper -->

				<?php if ($showRightColumn) : ?>
					<aside id="right">
						<jdoc:include type="modules" name="right-column" style="xhtml" />
					</aside><!-- end right -->
				<?php endif; ?>


				<?php if ($navposition === 'center' and $showleft) : ?>
				<nav class="left <?php if ($showRightColumn == null) { echo 'leftbigger'; } ?>" id="nav">

					<jdoc:include type="modules" name="position-7" style="beezDivision" headerLevel="3" />
					<jdoc:include type="modules" name="position-5" style="beezTabs" headerLevel="2" id="3" />

				</nav><!-- end navi -->
				<?php endif; ?>

				
			</div> <!-- end contentarea -->
		</div><!-- back -->
	</div><!-- all -->

	

	
	<div id="footer-outer">
		<?php if ($showbottom) : ?>
		<div id="footer-inner">

			<div id="bottom">
				<div class="box box1">
					<jdoc:include type="modules" name="position-9" style="beezDivision" headerlevel="3" />
				</div>
				<div class="box box2">
					<jdoc:include type="modules" name="position-10" style="beezDivision" headerlevel="3" />
				</div>
				<div class="box box3">
					<jdoc:include type="modules" name="position-11" style="beezDivision" headerlevel="3" />
				</div>
			</div>

		</div>
		<?php endif; ?>

		<div id="footer-sub">
			<footer id="footer">
				<jdoc:include type="modules" name="position-14" />

				<jdoc:include type="modules" name="position-1" />
				<div>Copyright @ 2018 | SAXBY Real Estate. All Rights Reserved.</div>

			</footer><!-- end footer -->
		</div>
	</div>
	<jdoc:include type="modules" name="debug" />

</body>

</html>