<?php

/**
 * Order class for diner application represents a food order
 * @author Rob Smith
 * @version 1.0
 */
class Order
{
    private $_food;
    private $_meal;
    private $_condiments;

    /**Default constructor instantiates an Order object
     * @param $_food
     * @param $_meal
     * @param $_condiments
     */
    public function __construct($food="", $meal="", $condiments="")
    {
        $this->_food = $food;
        $this->_meal = $meal;
        $this->_condiments = $condiments;
    }

    /**
     * Get the food
     * @return string
     */
    public function getFood()
    {
        return $this->_food;
    }

    /**
     * Set the food
     * @param string $food
     */
    public function setFood($food): void
    {
        $this->_food = $food;
    }

    /**
     * Get the meal
     * @return string
     */
    public function getMeal()
    {
        return $this->_meal;
    }

    /**
     * set the meal
     * @param string $meal
     */
    public function setMeal($meal): void
    {
        $this->_meal = $meal;
    }

    /**
     * get the condiments
     * @return string
     */
    public function getCondiments()
    {
        return $this->_condiments;
    }

    /**
     * set the condiments
     * @param string $condiments
     */
    public function setCondiments($condiments): void
    {
        $this->_condiments = $condiments;
    }
}