<?php

    //8.A
    if(isset($_GET["age"]))
    {
        $user_age = $_GET["age"];
        
        if($user_age > 12 && $user_age < 19)
        {
            $message_output = "You Are A Teenager!";
        }
        else if($user_age >= 19 && $user_age < 30)
        {
            $message_output = "You Are A Young Adult";
        }
        else
        {
            $message_output = "You Are Neither A Teenager Nor A Young Adult";
        }
    }
    
    //8.B
    if(isset($_GET["age_conditional"]))
    {
        $user_age_conditional = $_GET["age_conditional"];
        $message_output_conditional = ($user_age_conditional > 12 && $user_age_conditional < 19) ? "You Are A Teenager!" : (($user_age_conditional >= 19 && $user_age_conditional < 30) ? "You Are A Young Adult" : "You Are Neither A Teenager Nor A Young Adult");
    }
    
    //8.C
    if(isset($_GET["age_multiply"]))
    {
        $age_multiples = $_GET["age_multiply"];
    }
    else 
    {
        $age_multiples =10;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1>TASK 8.A</h1>
        <form action="Task_8.php" method="GET">
            <p>Hello, Please Enter Your Age:</p>
            <input type="text" name="age" /><br /><br />
            <input type="submit" value="Submit" />
        </form>
        <p><?php if(isset($message_output)){echo $message_output;} ?></p>
        
        <h1>TASK 8.B</h1>
        <form action="Task_8.php" method="GET">
            <p>Hello, Please Enter Your Age:</p>
            <input type="text" name="age_conditional" /><br /><br />
            <input type="submit" value="Submit" />
        </form>
        <p><?php if(isset($message_output_conditional)){echo $message_output_conditional;} ?></p>
        
        <h1>TASK 8.C</h1>
        <form action="Task_8.php" method="GET">
            <p>Hello, Please Enter Your Age:</p>
            <input type="text" name="age_multiply" value="<?php echo $age_multiples; ?>" />
            <br /><br />
            <input type="submit" value="Submit" />
        </form>
        <br />
        <table>
            <?php for($i = 1; $i <= $age_multiples; $i++){ ?>
                <tr>
                    <td style="border: 1px solid black; width: 50px; height: 50px;"><?php echo $i; ?></td>
                    <td style="border: 1px solid black; width: 50px; height: 50px;"><?php echo $i*5; ?></td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>
