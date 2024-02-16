<?php

/**
 * Controller class for the diner application
 */
class Controller
{

    private $_f3;

    function __constructor($f3)
    {
        $this->_f3 = $f3;
    }

    function home()
    {
        // Display a view page
        $view = new Template();
        echo $view->render('views/home.html');
    }

    function order1()
    {
        //echo "Order Form Part I";

        // If the form has been posted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // Initialize variables
            $food = "";
            $meal = "";

            // Validate the data
            if (Validate::validFood($_POST['food'])) {
                $food = $_POST['food'];
            } else {
                $this->_f3->set('errors["food"]', "Invalid food");
            }

            if (isset($_POST['meal']) and Validate::validMeal($_POST['meal'])) {
                $meal = $_POST['meal'];
            } else {
                $this->_f3->set('errors["meal"]', "Invalid meal");
            }

            // If there are no errors
            if (empty($this->_f3->get('errors'))) {

                // Instantiate a new Order object
                $order = new Order($food, $meal);

                // Put the object in the session array
                $this->_f3->set('SESSION.order', $order);
                var_dump($this->_f3->get('SESSION.order'));

                // Redirect to order2 route
                $this->_f3->reroute('order2');
            }
        }

        // Get data from the model and add to the F3 "hive"
        $this->_f3->set('meals', DataLayer::getMeals());

        // Display a view page
        $view = new Template();
        echo $view->render('views/order-form-1.html');
    }

    function order2()
    {
        //echo "Order Form Part II";
        $this->_f3->set('condiments', DataLayer::getCondiments());

        // If the form has been posted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // Validate the data
            if (isset($_POST['conds'])) {
                $conds = implode(", ", $_POST['conds']);
            } else {
                $conds = "None selected";
            }

            $this->_f3->get("SESSION.order")->setCondiments($conds);

            // Redirect to summary route
            $this->_f3->reroute('summary');
        }

        // Display a view page
        $view = new Template();
        echo $view->render('views/order-form-2.html');

    }

    function orderSummary()
    {
        // Display a view page
        $view = new Template();
        echo $view->render('views/order-summary.html');
    }

    function breakfast(){
        $view = new Template();
        echo $view->render('views/breakfast-menu.html');
    }
}
