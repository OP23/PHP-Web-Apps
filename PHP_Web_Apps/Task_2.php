<?php

    $assignment_1 = 60;
    $assignment_2 = 53;
    $assignment_3 = 78;
    $portfolio_mark = 64;
    $exam_mark = 61;
    $date_accessed = date('d/m/Y');
    
    $year_mark = ($assignment_1 + $assignment_2 + $assignment_3)/3;
    $year_mark = number_format($year_mark, 2);
    $year_mark_final = $year_mark * (30/100);
    $portfolio_mark_final = $portfolio_mark * (25/100);
    $exam_mark_final = $exam_mark * (45/100);
    $final_mark = $year_mark_final + $portfolio_mark_final + $exam_mark_final;
    $final_mark = number_format($final_mark, 2);
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>        
        <h1>Task 2:</h1>
        
        <h3>Records been accessed on: <?php echo $date_accessed; ?> </h3>
        <h3>Assignment 1: <?php echo $assignment_1; ?>%</h3>
        <h3>Assignment 2: <?php echo $assignment_2; ?>%</h3>
        <h3>Assignment 3: <?php echo $assignment_3; ?>%</h3>
        <h3>Year Mark: <?php echo $year_mark; ?>%</h3>
        <h3>Portfolio Mark: <?php echo $portfolio_mark; ?>%</h3>
        <h3>Exam Mark: <?php echo $exam_mark; ?>%</h3>
        <h3>Final Mark: <?php echo $final_mark; ?>%</h3>
    </body>
</html>
