
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">

    <title>My Diner</title>
</head><body>
<div class="container">
    <h1>The Diner:  Order Form Part 1</h1>

    <form action="#" method="post" class="form-horizontal">

        <!-- get food -->
        <div class="form-group">
            <label for="food" class="col-sm-4 control-label">What food would you like to order?</label>

            <div class="col-sm-4">
                <input class="form-control" type="text" name="food" id="food" value="">

                <!-- Display an error if there is one -->
            </div>
        </div>
        <br>

        <!-- get meal -->
        <div class="form-group">
            <label class="col-sm-4 control-label">Select a meal</label>
            <div class="col-sm-4">
                <p>You chose </p>
                <label><input type="radio"
                              name="meal"
                              id="breakfast"
                              value="breakfast"
                > Breakfast
                    </input>
                </label><br>
                <label><input type="radio"
                              name="meal"
                              id="brunch"
                              value="brunch"
                > Brunch
                    </input>
                </label><br>
                <label><input type="radio"
                              name="meal"
                              id="lunch"
                              value="lunch"
                > Lunch
                    </input>
                </label><br>
                <label><input type="radio"
                              name="meal"
                              id="dinner"
                              value="dinner"
                > Dinner
                    </input>
                </label><br>

                <!-- Display an error if there is one -->

            </div>
        </div>

        <div class="col-xs-1 ">
            <button type="submit">Next >></button>
        </div>
    </form>
</div>
</body>
</html>