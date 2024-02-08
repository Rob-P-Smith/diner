<?php
function validFood($food)
{
    if (trim($food) == "") {
        return false;
    }
    if (!ctype_alpha($food)) {
        return false;
    }
    return true;
}

function validMeal($meal)
{
    return in_array($meal, getMeals());
}