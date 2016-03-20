<?php
	return function($site, $pages, $page) {
		
		// Fetch the project images
		$projects = $page->images();

		// Fetch all categories
		//$cats = $projects->pluck('category', ',', true);
		
		// Add the tag filter
		/*if ($cat = param('category')) {
			$projects = $projects->filterBy('category', urldecode($cat), ',');
		}*/

		// Apply pagination
		$projects   = $projects->paginate(35);
		$pagination = $projects->pagination();

		return compact('projects', 'cats', 'cat', 'pagination');

	}
?>