<?php foreach ($widgets as $widget) : ?>
	<section class="component textblock">

        <h2 class="textblock__headline<?php if ($widget->theme['hide_title']) : ?> textblock__headline--hidden<?php endif; ?>"><?= $widget->title ?></h2>

        <div class="rtc">
	        <?= $widget->get('result') ?>
	    </div>
	</section>
<?php endforeach ?>