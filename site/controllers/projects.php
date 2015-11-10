<?php
	return function($site, $pages, $page) {
		
		// Fetch the basic set of pages
		$projects = $page->children()->visible()->sortBy('date', 'desc');

		// Fetch all categories
		$cats = $projects->pluck('category', ',', true);
		
		// Fetch projects
		$projects = projects(array('visibleOnly' => true, 'limit' => 15));

		// Add the tag filter
		if ($cat = param('category')) {
			//$projects = $projects->filterBy('category', urldecode($cat), ',');

			$projects = projects(array('visibleOnly' => true, 'filterBy' => array('by' => 'category', 'tag' => urldecode($cat), ',')));
		}

		// Apply pagination
		//$projects   = $projects->paginate(15);
		$pagination = $projects->pagination();

		return compact('projects', 'cats', 'cat', 'pagination');

	};
?>