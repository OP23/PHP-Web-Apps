<?php

    $vehicles = array('BMW', 'Mercedes', 'Toyota', 'Ferrari', 'Porcshe', 'Hyundai', 'Subaru', 'Bugatti', 'Lamborghini', 'Land Rover');
    
    $vehicles_multiple = array();    
    $vehicles_multiple[0] = 'BMW';   
    $vehicles_multiple[1] = 'Mercedes';
    $vehicles_multiple[2] = 'Toyota';
    $vehicles_multiple[3] = 'Ferrari';  
    $vehicles_multiple[4] = 'Porcshe';
    $vehicles_multiple[5] = 'Hyundai';
    $vehicles_multiple[6] = 'Subaru';
    $vehicles_multiple[7] = 'Bugatti';
    $vehicles_multiple[8] = 'Lamborghini';
    $vehicles_multiple[9] = 'Land Rover';
    
    $count_down = array();
    $count_down[0] = "10, ";
    $count_down[1] = "9, ";
    $count_down[2] = "8, ";
    $count_down[3] = "7, ";
    $count_down[4] = "6, ";
    $count_down[5] = "5, ";
    $count_down[6] = "4, ";
    $count_down[5] = "3, ";
    $count_down[6] = "2, ";
    $count_down[7] = "1 : ";
    $count_down[8] = "We have lift-off!!";
    
    $message = "";
    
    for($i=0; $i < count($count_down); $i++)
    {
        $message .= $count_down[$i];
    }
    
    $soc_registered_students = array('cos1501'=>'Mrs D Becker', 'cos1511' => 'Mrs P le Roux', 'cos1512' => ' Mrs HW Du Plessis', 'cos1521' => ' Mrs P le Roux', 'cos2601' => 'Mrs D Becker');
    
    $range_display = "";
    //Displays 6 consecutive numbers using the 'range()' array
    $six_consecutive_numbers = range(1, 6);
    foreach($six_consecutive_numbers as $six_numbers)
    {
        $range_display .= $six_numbers . " ";
    }
    
    //Returns an array filled with a specific value. 
    //This is a variable referencing a 'array_fill()' method. 
    //When that specific value is reached, the value of an 'array_pad()' fills the rest of the array
    $number_fill = array_fill(0, 5, 'P');
    $number_pad = array_pad($number_fill, 10, 'R');
    
    //Joins two arrays using the 'array_merge()' method
    $old_programmers = array('Richard', 'Smith', 'Carl');
    $new_programmers = array('Joe', 'Carlos', 'Jeff');
    $join_programmers = array_merge($new_programmers, $old_programmers);
    
    //Originally contains six elements. 'slice' removes elements from a starting point (the first element), to an ending point
    $remove_programmers = array_slice($join_programmers, 2);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Task 13:</h1>
        <h2>Using a single statement:</h2>
        <?php foreach($vehicles as $display_vehicles){ ?>
            <p><?php echo $display_vehicles; ?></p>
        <?php } ?>
            
        <h2>Using multiple statements</h2>
        <?php foreach($vehicles_multiple as $display_vehicles_multiple){ ?>
            <p><?php echo $display_vehicles_multiple; ?></p>
        <?php } ?>
            
       <h2>Count Down:</h2>
       <p>
            <?php echo $message; ?>
       </p>
            
        <h2>SoC - Index and Elements</h2>
        <?php foreach($soc_registered_students as $course => $lecturer){ ?>
            <p><?php echo $course . " - " . $lecturer; ?></p>
        <?php } ?>
        
        <h2>Uses the 'range()' function to display 6 consecutive numbers</h2>
        <p><?php echo $range_display; ?></p>
        
        <h2>Returns an array filled with a specific value. This is a variable referencing a 'array_fill()' method. When that specific value is reached, the value of an 'array_pad()' fills the rest of the array</h2>
        <p><?php foreach($number_pad as $fill){echo $fill;} ?></p>
        
        <h2>Joins two arrays using the 'array_merge()' method</h2>
        <p><?php foreach($join_programmers as $programmers){echo $programmers . "<br />";} ?></p>
        
        <h2>Removes the first two elements. 'slice()' array removes elements from a starting point (first element) to an ending point:</h2>
        <p><?php foreach($remove_programmers as $remover){echo $remover . "<br />";} ?></p>
            
    </body>
</html>
