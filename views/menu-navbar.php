<?php foreach ($root->getChildren() as $node) : ?>
	<a href="<?= $node->getUrl() ?>" class="nav_item<?= $node->get('active') ? ' active' : '' ?>">
  		<?= $node->title ?>
  	</a>
<?php endforeach ?>

