<?php
  
function pickMushrooms(){
    global $location, $has_mushrooms;
    if ($location !== "woods") {
        echo "There aren't any mushrooms to pick!\n";
    } else {
        if ($has_mushrooms) {
            echo "You already have mushrooms!\n";
        } else {
            echo "You've picked some mushrooms.\n";
            $has_mushrooms = TRUE;
        }
    }
}  
