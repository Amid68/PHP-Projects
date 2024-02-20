<?php
  // Change player location
function changeLocation(){	
    global $location;
    echo "Where do you want to go?\n";
    $answer = strtolower(readline(">> "));  
    if ($location === $answer) {
        echo "You are already there!\n";
    } elseif ($location === "kitchen" && $answer === "bathroom") {
        echo "You go to: bathroom.\n";
        $location = $answer;
    } elseif ($location === "kitchen" && $answer === "woods") {
        echo "You follow the winding path, shivering as you make your way deep into the Terror Woods.\n";
        $location = $answer;
    } elseif (($location === "bathroom" || $location === "woods") && $answer === "kitchen") {
        echo "You go to: kitchen.\n";
        $location = $answer;
    } elseif ($answer === "woods" || $answer === "kitchen"|| $answer === "bathroom"){
         echo "You can't go directly to $answer. Try going somewhere else first.\n";
    } else {
        echo "That doesn't make sense. Are you confused? Try 'look around'.\n";
    }
}
