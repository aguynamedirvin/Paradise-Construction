<div class="gallery">

	<?php foreach(page('projects')->children()->visible()->sortBy('date', 'desc')->limit($limit) as $project): ?>
	<div class="project">
		<a href="<?php echo $project->url() ?>">
			<?php if($image = $project->image( $project->after() )): ?>
			<img src="<?php echo thumb($image, array('width' => 400, 'height' => 280, 'quality' => 60))->url() ?>" alt="<?php echo $project->title()->html() ?>" >
			<?php endif ?>
			<button class="btn btn-line aligncenter"><?php echo l::get('view_project_btn') ?></button>
		</a>
	</div>
	<?php endforeach ?>

</div>