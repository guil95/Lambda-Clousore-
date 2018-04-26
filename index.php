<?php
$users  = [
	[
		'name' => 'Guilherme',
		'age' => 23
	],
	[
		'name' => 'Joãozinho',
		'age'  => 40
	],
	[
		'name' => 'Mariasinha',
		'age'  => 30 
	]
];

function attr($field){
	
	return function ($user) use ($field){
		return $user[$field];
	};
}

$usersName = array_map(attr('name'), $users);
$usersAge = array_map(attr('age'), $users);

print_r($usersName);
print_r($usersAge);
