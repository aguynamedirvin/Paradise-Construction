<?php 

/**
 * 
 * This function provides an easier way to display projects. Instead of having
 * to repeat the same code over and over on every page that should display the
 * projects gallery, with this function you just type in 'projects()' and  
 * your options.
 *
 * @author Irvin Dominguez <aguynamedirvin@gmail.com>
 * @version 1.0.0
 *
 *
 * Usage:
 * ======
 * <?php projects() ?>
 *
 * Example:
 * <div class="gallery">
 *      <?php projects() ?>
 * </div>
 *
 *
 *
 * Options:
 * ========
 *
 * You can control the limit of the projects to display and other options
 * by supplying an associative array.
 *
 * <?php projects(array('visibleOnly' => true, 'limit' => 4)); ?>
 *
 *
 * Possible options (defaults in parenthesis):
 * -------------------------------------------
 *
 * 'visibleOnly'    (true)  	If true, only shows visible projects.
 *
 * 'limit'          (9)     	The number of projects to display.
 *
 * 'columns'        (3)     	The number of columns that will be displayed
 *
 * 'shuffle'		(false)		Displays random projects
 *
 */


function projects($options = array()) {


	/**
	 * Default Options
	 */

	$defaults = array(
		'visibleOnly'   => true,
		'limit'         => 9,
		'columns'       => 3,
		'shuffle'		=> false,
	);


	/**
	 * Merge default and given options
	 */ 
	$options = array_merge($defaults, $options);


	/**
	 * Thumbnail Options
	 */
	$thumbSettings = array(
		'height' 	=> 280,
		'width' 	=> 400,  
		'quality'	=> 75,
		'crop' 		=> true,
		'upscale' 	=> true,
	);


	/**
	 * Get projects from the Projects page, either visible only or all
	 */
	$projects = page('projects')->children()->sortBy('date', 'desc')->limit($options['limit']);
	if ($options['visibleOnly']) { 
		$projects = $projects->visible(); 
	}
	if ($options['shuffle']) {
		$projects = $projects->shuffle();
	}


	/**
	 * Main Loop
	 */
	$count = 0;

	foreach ($projects as $project) { 

		$count++;
?>
		<div class="project<?php ecco($count == $options['columns'], ' last') ?>">
			<a href="<?php echo $project->url() ?>">
				<?php $image = $project->image( $project->after() ) ?>
				<img src="<?php echo thumb($image, $thumbSettings)->url() ?>" alt="<?php echo $project->title()->html() ?>" >
				<button class="btn btn-line aligncenter"><?php echo l::get('view_project_btn') ?></button>
			</a>
		</div>
<?php

	}

}


?>