<?php 

return function($site, $pages, $page) {

    $query   = get('q');
    $results = page('projects')->search($query, 'title|text|tags');
    $results = $results->paginate(8);

    return array(
        'query'      => $query,
        'results'    => $results, 
        'pagination' => $results->pagination()
    );

};