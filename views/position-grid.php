<?php foreach ($widgets as $widget) : ?>
<div class="uk-width-medium-1-<?= count($widgets) ?>">

    <div class="uk-panel">

        <h3 class="uk-panel-title"><?= $widget->title ?></h3>

        <?= $widget->get('result') ?>

    </div>

</div>
<?php endforeach ?>