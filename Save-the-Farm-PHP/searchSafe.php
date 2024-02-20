<?php

function searchSafe(){
    global $location, $moved_cupboard, $rounds_left;
    if ($location !== "kitchen" || !$moved_cupboard) {
        echo "You don't see any safe here!\n";
    } else {
        echo "You enter the safe's passcode '1234' and eagerly examine its contents. Inside, you find a charming surprise: a chocolate shaped like Mickey Mouse, elegantly wrapped in gold foil. Savoring your discovery, you celebrate your victory in the game.\n\n";
        $rounds_left = 1;
    }
}  
