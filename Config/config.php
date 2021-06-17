<?php
// Le tableau de données pour la classe Factory
return array(
    'API_Info' => array('url', 'created', 'edited'),
    'Common' => array('name', 'films'),
    'Film' => array('title', 'episode_id', 'opening_crawl', 'director',
        'producer', 'release_date', 'species', 'starships',
        'vehicles', 'characters', 'planets'),
    'People' => array('birth_year', 'eye_color', 'gender', 'hair_color',
        'height', 'mass', 'skin_color', 'homeworld', 'species',
        'starships', 'vehicles'),
    'Planet' => array('diameter', 'rotation_period', 'orbital_period', 'gravity',
        'population', 'climate', 'terrain', 'surface_water', 'residents'),
    'Species' => array('classification', 'designation', 'average_height', 'average_lifespan',
        'eye_colors', 'hair_colors', 'skin_colors', 'language', 'homeworld', 'people'),
    'Vehicles' => array('model','manufacturer','cost_in_credits','length','max_atmosphering_speed','crew',
        'passengers','cargo_capacity','consumables','vehicle_class','pilots'),
    'Starship' => array('starship_class', 'hyperdrive_rating', 'MGLT'),
 );