<?php
/**
 * @author      Lefteris Kavadas
 * @copyright   Copyright (c) 2016 - 2018 Lefteris Kavadas / firecoders.com
 * @license     GNU General Public License version 3 or later
 */
defined('_JEXEC') or die;
JHtml::_('jquery.framework');
JHtml::_('script', 'media/showtime/vendor/slick/slick.min.js');
JHtml::_('stylesheet', 'media/showtime/vendor/slick/slick.css');
JHtml::_('stylesheet', 'media/showtime/vendor/slick/slick-theme.css');
JHtml::_('stylesheet', 'showtime/slideshow.css', array('relative' => true));
?>
<?php foreach($galleries as $gallery): ?>
	<div class="showtime showtime-slideshow">
		<?php if($gallery->params->get('galleryTitle')): ?>
		<h3 class="showtime-title"><?php echo $gallery->title; ?></h3>
		<?php endif; ?>
		<div class="showtime-gallery" data-showtime-id="<?php echo $gallery->id; ?>" itemscope itemtype="http://schema.org/ImageGallery">
		<?php foreach($gallery->images as $image): ?>
			<div class="showtime-image" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
				<img src="<?php echo $image->main; ?>" alt="<?php echo htmlspecialchars($image->alt, ENT_QUOTES, 'UTF-8'); ?>" />
				<?php if(($gallery->params->get('thumbnailImageTitle') && $image->title) || ($gallery->params->get('thumbnailImageDescription') && $image->description)): ?>
				<div itemprop="caption description" class="showtime-image-text">
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
		<script type="text/javascript">
			jQuery('[data-showtime-id="<?php echo $gallery->id; ?>"]').slick({
					dots: <?php echo $gallery->params->get('layoutDots', 1) && !$gallery->params->get('layoutThumbnails', 0)? 'true' : 'false'; ?>,
					arrows: <?php echo $gallery->params->get('layoutArrows', 1) && !$gallery->params->get('layoutThumbnails', 0)? 'true' : 'false'; ?>,
					autoplay: <?php echo $gallery->params->get('layoutAutoplay', 1)? 'true' : 'false'; ?>,
					autoplaySpeed: <?php echo (int)$gallery->params->get('layoutAutoplaySpeed', 3000); ?>,
					fade: <?php echo $gallery->params->get('layoutEffect', 'fade') == 'slide' ? 'false' : 'true'; ?>,
					draggable: <?php echo $gallery->params->get('layoutEffect', 'fade') == 'fade' ? 'false' : 'true'; ?>
					<?php if($gallery->params->get('layoutThumbnails', 0)): ?>
					,asNavFor: '[data-showtime-slideshow-navigation="<?php echo $gallery->id; ?>"]'
					<?php endif; ?>
			});
		</script>
	</div>
	<?php if($gallery->params->get('layoutThumbnails', 0)): ?>
	<div class="showtime showtime-slideshow-navigation">
		<div data-showtime-slideshow-navigation="<?php echo $gallery->id; ?>">
			<?php foreach($gallery->images as $image): ?>
				<div class="showtime-image" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
					<img src="<?php echo $image->thumbnail; ?>" alt="<?php echo htmlspecialchars($image->alt, ENT_QUOTES, 'UTF-8'); ?>" />
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	<script type="text/javascript">
		jQuery('[data-showtime-slideshow-navigation="<?php echo $gallery->id; ?>"]').slick({
			asNavFor: '[data-showtime-id="<?php echo $gallery->id; ?>"]',
			dots: <?php echo $gallery->params->get('layoutDots', 1)? 'true' : 'false'; ?>,
			arrows: <?php echo $gallery->params->get('layoutArrows', 1)? 'true' : 'false'; ?>,
			slidesToScroll: <?php echo (int)$gallery->params->get('layoutItemsToScroll', 3); ?>,
			slidesToShow: <?php echo (int)$gallery->params->get('layoutItemsToShow', 3); ?>,
			centerMode: <?php echo $gallery->params->get('layoutCenterMode', 1)? 'true' : 'false'; ?>,
			focusOnSelect: true,
			responsive: <?php echo ShowtimeHelper::getCarouselResponsiveOptions($gallery->params); ?>
		});
	</script>
	<?php endif; ?>
<?php endforeach; ?>
