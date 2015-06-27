<?php

	return function($site, $pages, $page) {

		// fetch the basic set of pages
		$projects = $page->children()->visible()->sortBy('date', 'desc');

		// add the tag filter
		if($tag = param('tag')) {
			$projects = $projects->filterBy('tags', $tag, ',');
		}

		// fetch all tags
		$tags = $projects->limit(9)->pluck('tags', ',', false);

		// apply pagination
		$projects   = $projects->paginate(9);
		$pagination = $projects->pagination();

		return compact('projects', 'tags', 'tag', 'pagination');

	};

?>