<?php

    /*TASK 3.A */
    
    $age = 20;
    if($age >= 18)
    {
        $message = "Welcome to the website";
    }
    else
    {
        $message = "Sorry, you are below the expected age. Kindly leave this website";
    }
    $age = 10;
    if($age >= 18)
    {
        $message = "Welcome to the website";
    }
    else
    {
        $message = "Sorry, you are below the expected age. Kindly leave this website";
    }
    
    /*TASK 3.B */
    
    if(isset($_GET['user_age_get']))
    {
        $age2 = $_GET['user_age_get'];
        if($age2 >= 18)
        {
            $message2 = "Welcome";
        }
        else
        {
            $message2 = "Sorry, you are below the expected age. Kindly leave this website";
        }
    }
    else
    {
        $message2 = "You have not selected an option";
    }
    
    /*TASK 3.C */
    
    if(isset($_POST['user_age_post']))
    {
        $age3 = $_POST['user_age_post'];
        if($age3 >= 18)
        {
            $message3 = "Welcome";
        }
        else
        {
            $message3 = "Sorry, you are below the expected age. Kindly leave this website";
        }
    }
    else
    {
        $message3 = "You have not selected an option";
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Task 3.A</h1>
        <h3><?php echo $message; ?></h3>
        
        <h1>GET METHOD - TASK 3.B:</h1>
        <form method="GET" action="Task_3.php">
            <select name="user_age_get">
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
            </select>
            <br><br>
            <input type="submit" value="Submit" />
        </form>
        <h3><?php echo $message2; ?></h3>
        
        <h1>Task 3.C:</h1>
        <form method="POST" action="Task_3.php">
            <select name="user_age_post">
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
            </select>
            <br><br>
            <input type="submit" value="Submit" />
        </form>
        <h3><?php echo $message3; ?></h3>
    </body>
</html>