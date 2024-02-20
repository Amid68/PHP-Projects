<?php

// Global Variable Initialization
$rounds_left = 25;
$location = "kitchen";
$wearing_glasses = TRUE;
$wearing_contacts = FALSE;
$has_mushroom = FALSE;
$has_soup = FALSE;
$moved_cupboard = FALSE;
$is_hungry = TRUE;
$needs_to_pee = TRUE;

// Include each of the function definitions

include "printHelp.php";
include "gameRound.php";

include "printStatus.php";
include "changeLocation.php";
include "lookAround.php";

include "pickMushrooms.php";
include "cookSoup.php";
include "eatSoup.php";

include "pee.php";

include "moveCupboard.php";
include "searchSafe.php";




//Display Intro Text
printHelp();
echo "\nOk, the game is about to begin. Will you be able to find the golden mouse statuette and save your great-aunt's farm? We wish you good luck!\n**********BEGIN GAME***********\n";
echo "\nHello there. It's been quite the ordeal lately, hasn't it? Between your recent toenail trouble and the risk of losing Great-Aunt Natasha's emu farm, things are certainly tense. And now, you find yourself in Uncle Boris's secluded cabin deep in the Terror Woods, following a brief detour to the Mayo Clinic. According to family lore, a priceless golden statue lies hidden here. With a tight schedule and just 25 minutes to spare, the hunt for the statue is a race against time. Let's see how this unfolds! \n\n";


// Play 25 rounds
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();
gameRound();


// Game Is Over
echo "\n**********ATTENTION***********\n The game is over!\n" ;




