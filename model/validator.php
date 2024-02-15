<?php

/*
 * 328/diner/model/validate.php
 * Validate data for the diner app
 */

class Validate
{
// Return true if food is valid
    static function validFood($food)
    {
        if (trim($food == "")) {
            return false;
        }
        if (!ctype_alpha($food)) {
            return false;
        }
        return true;
    }

    static function validMeal($meal)
    {
        return in_array($meal, DataLayer::getMeals());
    }
}