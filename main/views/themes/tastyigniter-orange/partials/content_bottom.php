<?php if (!empty($bottom_modules)) { ?>
	<div id="module-bottom" class="bottom-section {class}">
		<?php foreach ($bottom_modules as $module) { ?>
			<?php echo $module; ?>
		<?php } ?>
	</div>
<?php } ?>