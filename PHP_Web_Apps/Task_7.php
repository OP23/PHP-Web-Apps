<?php

    if(isset($_GET["first_name"]) && isset($_GET["area"]) && isset($_GET["order"]))
    {
        $name = $_GET["first_name"];
        $area_name = $_GET["area"];
        $order_name = $_GET["order"];
        $first_order = $_GET["first_time"];
        $comments = $_GET["comment"];
        $all_extra = $_GET["extra"];
        
        $message = "Name: <strong>$name</strong> <br /><br /> Area Name: <strong>$area_name</strong> <br /><br /> Is This Your First Time Ordering With Us? <strong>$first_order</strong> <br /><br /> Additional Comments: <strong>$comments</strong> <br /><br />";
        
        $message .= "Extra's: <ul>";
        
        foreach($all_extra as $extras)
        {
            $message .=  "<li><strong>" . $extras . "</strong></li>";
        }
        
        $message .= "</ul>";
        
        $message .= "Order's: <ul>";
        
        foreach($order_name as $orders)
        {
            $message .= "<li><strong>$orders</strong></li>";
        }
        
        $message .= "</ul><br />";
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1>TASK 7:</h1>
                
        <h2>Welcome To Pizza House</h2>
        <h3>Place Your Order:</h3>
        <form action="Task_7.php" method="GET">
            *First Name:<br />
            <input type="text" name="first_name" /><br /><br />
            *Area:<br />
            <input type="radio" name="area" value="Durban" />Durban<br />
            <input type="radio" name="area" value="Cape Town" />Cape Town<br /><br />
            Extra's:<br />
            <input type="checkbox" name="extra[]" value="Prego Sauce" />Prego Sauce<br />
            <input type="checkbox" name="extra[]" value="Nando Sauce" />Nando Sauce<br />
            <input type="checkbox" name="extra[]" value="Chilli Sauce" />Chilli Sauce <br /><br />
            *Your Order:<br />
            <select name="order[]" size="6" multiple="multiple">
                <option value="Pizza">Pizza</option>
                <option value="Burger">Cheese Burger</option>
                <option value="Sandwich">Chicken Sandwich</option>
                <option value="Veg">Vegetarian Stir Fry</option>
                <option value="Curry">Chicken Curry</option>
                <option value="Seafood">Fish And Chips</option>
            </select>
            <br /><br />
            First Time Ordering With Us?<br />
            <select name="first_time">
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
            <br /><br />
            Comments<br />
            <textarea name="comment" cols="25" rows="10"></textarea><br /><br />
            <input type="submit" value="Submit"/>
        </form>
        <p><?php if(isset($message)){echo $message;} ?></p>
    </body>
</html>