<?php
function eatSoup(){
    global $has_soup, $is_hungry;
    if ($has_soup) {
        echo "You have eaten the soup!\n";
        $has_soup = FALSE;
        $is_hungry = FALSE;
    } else {
        echo "You don't have any cooked food to eat!\n";
    }
}
