<?php
    $today_date = time();
    $parts = getdate($today_date);
    $year = $parts['year'];
    $month = $parts['month'];
    $mday = $parts['mday'];
    $weekday = $parts['weekday'];
    $hours = $parts['hours'];
    $minutes = $parts['minutes'];
    $seconds = $parts['seconds'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Task 12</h1>
        <h2>Date Web Site was accessed:</h2>
        <p>Year: <?php echo $year; ?></p>
        <p>Month: <?php echo $month; ?></p>
        <p>Date: <?php echo $mday; ?></p>
        <p>Weekday: <?php echo $weekday; ?></p>
        <p>Time: <?php echo "$hours:$minutes:$seconds"; ?></p>
    </body>
</html>
