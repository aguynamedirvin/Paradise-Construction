<?php
	return function($site, $pages, $page) {
		
		// Fetch the basic set of pages
		$projects = $page->children()->visible()->sortBy('date', 'desc');

		// Fetch all categories
		$cats = $projects->pluck('category', ',', true);
		
		// Add the tag filter
		if ($cat = param('category')) {
			$projects = $projects->filterBy('category', urldecode($cat), ',');
		}

		// apply pagination
		$projects   = $projects->paginate(9);
		$pagination = $projects->pagination();

		return compact('projects', 'cats', 'cat', 'pagination');
	};
?>