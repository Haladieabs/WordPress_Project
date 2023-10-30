<?php
/** @var \MABEL_WCBB\Code\Models\Bar_Model $model */
?>

<div class="wcbb-bottom-bar">
	<ul style="background: <?php echo $model->bgcolor;?>;">
		<li>
			<a href="<?php echo $model->account_url; ?>">
				<svg width="35" height="35" xmlns="http://www.w3.org/2000/svg" fill="<?php echo $model->fgcolor; ?>" viewBox="0 0 612 612"><path d="M612 306.04C612 137.4 474.6 0 305.96 0S0 137.4 0 306.04c0 92.88 42.14 176.43 107.7 232.6.8.79 1.59 1.59 3.1 2.3 53.06 44.53 121 71.06 195.96 71.06 73.36 0 141.3-26.53 194.36-69.46 3.11-.8 5.5-3.11 7.01-5.5C571.45 480.1 612 398.13 612 306.04zm-583.88 0c0-153.02 124.9-277.92 277.92-277.92s277.91 124.9 277.91 277.92c0 74.95-29.63 142.82-78.06 192.84-7.8-36.72-31.22-99.17-103.07-139.72 16.4-20.3 25.73-46.84 25.73-74.95 0-67.15-54.64-121.8-121.8-121.8s-121.78 54.65-121.78 121.8c0 28.12 10.11 53.85 25.73 74.95-72.5 40.55-95.92 103-102.93 139.72a272.62 272.62 0 0 1-79.65-192.84zm184.24-21.11c0-51.54 42.14-93.68 93.68-93.68s93.67 42.14 93.67 93.68-42.14 93.68-93.67 93.68-93.68-42.14-93.68-93.68zm-79.65 238.1c1.59-22.63 14.02-99.18 98.37-142.11a120.96 120.96 0 0 0 74.96 25.73c28.11 0 54.64-10.12 75.75-26.53 83.55 42.94 96.78 117.9 99.16 142.1-47.63 38.24-108.49 61.66-174.05 61.66-66.42.08-126.56-22.55-174.2-60.86z"/></svg>			</a>
		</li>
		<li>
			<a href="#" class="wcbb-toggle-product-search">
				<svg width="35" height="35" xmlns="http://www.w3.org/2000/svg" fill="<?php echo $model->fgcolor; ?>" viewBox="0 0 129 129"><path d="M51.6 96.7c11 0 21-3.9 28.8-10.5l35 35c.8.8 1.8 1.2 2.9 1.2s2.1-.4 2.9-1.2a4.1 4.1 0 0 0 0-5.8l-35-35c6.5-7.8 10.5-17.9 10.5-28.8 0-24.9-20.2-45.1-45.1-45.1-24.8 0-45.1 20.3-45.1 45.1 0 24.9 20.3 45.1 45.1 45.1zm0-82c20.4 0 36.9 16.6 36.9 36.9C88.5 72 72 88.5 51.6 88.5S14.7 71.9 14.7 51.6a37 37 0 0 1 36.9-36.9z"/></svg>
			</a>
		</li>
		<li>
			<a href="<?php echo $model->cart_url; ?>">
				<span class="wcbb-count-wrapper" style="background: <?php echo $model->fgcolor; ?>;color:<?php echo $model->bgcolor; ?>;">
					<span class="wcbb-count"><?php echo $model->cart_count; ?></span>
				</span>
				<svg width="35" height="35" fill="<?php echo $model->fgcolor; ?>" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.01 512.01"><path d="M306.48 35.4v.01A10.64 10.64 0 0 0 288 42.66c0 2.8 1.08 5.36 2.84 7.25v.01l122.03 131.41H99.13l122.02-131.4v-.02a10.66 10.66 0 0 0-15.62-14.5h-.01L70.02 181.33H0v64h29.02L85.34 480h341.32l56.32-234.68H512v-64h-70.03L306.48 35.4zm103.37 423.26h-307.7l-51.2-213.33h410.09l-51.19 213.33zM490.66 224H21.34v-21.34h469.32V224z"/><path d="M181.34 288c-5.9 0-10.68 4.77-10.68 10.66v106.67a10.68 10.68 0 0 0 21.34 0V298.67c0-5.89-4.77-10.65-10.66-10.65zM256 288c-5.9 0-10.66 4.77-10.66 10.66v106.67a10.67 10.67 0 1 0 21.32 0V298.67c0-5.89-4.78-10.65-10.66-10.65zM330.66 288c-5.89 0-10.65 4.77-10.65 10.66v106.67a10.66 10.66 0 1 0 21.33 0V298.67c0-5.89-4.78-10.65-10.68-10.65z"/></svg>
			</a>
		</li>
	</ul>
	<div class="wcbb-product-search" style="background: <?php echo $model->bgcolor; ?>;">
		<?php the_widget( 'WC_Widget_Product_Search', 'title=' ); ?>
	</div>
</div>