<?php

	return function($site, $pages, $page) {

	/*	// fetch the basic set of pages
		$projects = $page->children()->visible()->sortBy('date', 'desc');

		// add the category filter
		if($cat = param('category')) {
			$projects = $projects->filterBy('category', urldecode($cat), ',');
		}

		// fetch all categories
		$cats = $projects->pluck('category', ',', false);

		// Apply pagination
		$projects   = $projects->paginate(9);
		$pagination = $projects->pagination();

		return compact('projects', 'cats', 'cat', 'pagination');*/

	};

?>