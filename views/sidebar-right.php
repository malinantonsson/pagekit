<?php foreach ($widgets as $widget) : ?>
	<section class="component textblock">
        <h2 class="textblock__headline"><?= $widget->title ?></h2>

        <div class="rtc">
	        <?= $widget->get('result') ?>
	    </div>
	</section>
<?php endforeach ?>