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
 * 'filterBy'		(empty)		Filters projects by a defined set of options which are 'by', 'tag', and 'separator'
 *
 */

function projects($options = array()) {


	/**
	 * Default Options
	 */

	$defaults = array(
		//'visibleOnly'   => true,
		'limit'         => 9,
		'columns'       => 3,
		'shuffle'		=> FALSE,
		'filterBy'		=> NULL, /*array(
			'by'		=> '',
			'tag'		=> '',
			'separator'	=> '',

		),*/
	);


	/**
	 * Merge default and given options
	 */ 
	$options = array_merge($defaults, $options);


	/**
	 * Get projects from the Projects page
	 */
	$projects = page('projects')->images();
	/*if ($options['visibleOnly']) { 
		$projects = $projects->visible(); 
	}*/
	if ($options['shuffle']) {
		$projects = $projects->shuffle();
	}
	/*if (!array_key_exists('filterBy', $options)) {
		$projects = $projects->filterBy(
			$options['filterBy']['by'], 
			$options['filterBy']['tag'],
			$options['filterBy']['separator']
		);
	}*/
	$projects = $projects->limit($options['limit']);


	/**
	 * Main Loop
	 */
	$count = 0;

	foreach ($projects as $project) {
		$count++; 
?>
		<div class="project__thumb<?php ecco($count % $options['columns'] == 0, ' last') ?>">
			<a href="<?php echo page('projects')->url() ?>">
				<?php echo $project->crop(400, 280, 75)->html() ?>
				<button class="btn btn-line aligncenter"><?php echo l::get('view_projects_btn') ?></button>
			</a>
		</div>

<?php 
	} // End foreach
} // End function
?>