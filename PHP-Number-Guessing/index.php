<?php

$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "I'm going to think of numbers between 1 and 10 (inclusive). Do you think you can guess correctly?\n";

function guessNumber() {
	global $play_count;
	global $correct_guesses;
	global $guess_high;
	global $guess_low;

	$play_count++;
	$random = rand(1, 10);
	echo "\nMake your guess...\n";
	$answer = getUserInput();	

	echo "Round: $play_count\nMy Number: $random\nYour guess: $answer";
	
	if ($answer === $random) {
		$correct_guesses++;
	} elseif ($answer > $random) {
		$guess_high++;
	} else {
		$guess_low++;
	}
}

function getUserInput() {
    while (true) {
        $input = intval(readline(">> "));
        if ($input >= 1 && $input <= 10) {
            return $input;
        } else {
            echo "Invalid guess. Please enter a number between 1 and 10.\n";
        }
    }
}

for ($i = 0; $i < 10; $i++) {
	guessNumber();
}

$correct_guesses_percentage = $correct_guesses / $play_count * 100;

echo "\nYou've played $play_count rounds.\nYou guessed the number correctly $correct_guesses_percentage% of the time.\n";

if ($guess_high > $guess_low){
    echo "When you guessed wrong, you tended to guess high.\n";
} elseif ($guess_high < $guess_low) {
    echo "When you guessed wrong, you tended to guess low.\n";
} else {
    echo "Your high and low guesses were about the same.\n";
}
