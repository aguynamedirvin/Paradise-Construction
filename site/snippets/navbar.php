<nav class="site-navigation alignright" role="navigation">
	<ul class="navigation">
		<?php foreach($pages->visible() as $p): ?>
			<li><a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a></li>
		<?php endforeach ?>

		<li class="hide-sm">
			<a href="tel:<?php echo $site->phone() ?>">
				<button class="btn btn-line"><?php echo l::get('call_us') ?>: <?php echo $site->phone() ?></button>
            </a>
		</li>

	</ul>
</nav>