<?php foreach ($widgets as $widget) : ?>
	<section class="component textblock">
        <h2 class="textblock__headline"><?= $widget->title ?></h2>

        <div class="rtc">
			<p class="textblock__copy">
	        	<?= $widget->get('result') ?>
	        </p>
	    </div>
	</section>
<?php endforeach ?>