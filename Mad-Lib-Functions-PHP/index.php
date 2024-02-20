<?php

function generateStory($singular_noun, $verb, $color, $distance_unit) {
	$story = "The {$singular_noun}s are lovely, {$color}, and deep.\nBut I have promises to keep,\nAnd {$distance_unit} to go before I {$verb},\nAnd {$distance_unit} to go before I {$verb}.\n";
	return $story;
};

function getUserInput($prompt) {
    	$input = "";
	while (empty($input)) {
		echo $prompt;
		$input = trim(readline());
		if (empty($input)) {
			echo "Input cannot be empty. Please try again\n";
		}
	}
	return $input;
};

$singular_noun = getUserInput("Enter a singular noun: ");
$verb = getUserInput("Enter a verb: ");
$color = getUserInput("Enter a color: ");
$distance_unit = getUserInput("Enter a distance unit: ");

echo generateStory($singular_noun, $verb, $color, $distance_unit);
