<?php
/**
 * @author      Lefteris Kavadas
 * @copyright   Copyright (c) 2016 - 2018 Lefteris Kavadas / firecoders.com
 * @license     GNU General Public License version 3 or later
 */
defined('_JEXEC') or die;
JHtml::_('script', 'media/showtime/vendor/macy/macy.js');
JHtml::_('stylesheet', 'showtime/wall.css', array('relative' => true));
?>
<?php foreach($galleries as $gallery): ?>
	<div class="showtime showtime-wall">
		<?php if($gallery->params->get('galleryTitle')): ?>
		<h3 class="showtime-title"><?php echo $gallery->title; ?></h3>
		<?php endif; ?>
		<div class="showtime-gallery" data-showtime-renderer="<?php echo $gallery->renderer; ?>" data-showtime-id="<?php echo $gallery->id; ?>" itemscope itemtype="http://schema.org/ImageGallery">
			<?php foreach($gallery->images as $image): ?>
			<div class="showtime-image" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
				<a data-showtime-width="<?php echo $image->width; ?>" data-showtime-height="<?php echo $image->height; ?>" data-showtime-caption="<?php echo htmlspecialchars($image->caption, ENT_QUOTES, 'UTF-8'); ?>" href="<?php echo $image->main; ?>" title="<?php echo htmlspecialchars($image->title, ENT_QUOTES, 'UTF-8'); ?>" itemprop="contentUrl">
					<img src="<?php echo $image->thumbnail; ?>" alt="<?php echo htmlspecialchars($image->alt, ENT_QUOTES, 'UTF-8'); ?>" itemprop="thumbnail" />
				</a>
				<?php if(($gallery->params->get('thumbnailImageTitle') && $image->title) || ($gallery->params->get('thumbnailImageDescription') && $image->description)): ?>
				<div itemprop="caption description">
					<?php if($gallery->params->get('thumbnailImageTitle') && $image->title): ?>
					<h3><?php echo $image->title; ?></h3>
					<?php endif; ?>
					<?php if($gallery->params->get('thumbnailImageDescription') && $image->description): ?>
					<div><?php echo $image->description; ?></div>
					<?php endif; ?>
				</div>
				<?php endif; ?>
			</div>
		<?php endforeach; ?>
		</div>
		<?php echo $gallery->snippet; ?>
		<script type="text/javascript">
			Macy({
				container: '[data-showtime-id="<?php echo $gallery->id; ?>"]',
				columns: <?php echo (int)$gallery->params->get('layoutWallColumns', 4); ?>,
				margin: <?php echo (int)$gallery->params->get('layoutWallMargin', 16); ?>,
				breakAt: <?php echo ShowtimeHelper::getWallResponsiveOptions($gallery->params); ?>
			});
		</script>
	</div>
<?php endforeach; ?>
