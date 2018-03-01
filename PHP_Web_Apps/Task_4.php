<?php
    $dsn = "mysql:host=localhost;dbname=my_guitar_shop1";
    $username = "root";
    $password = "";
    
    $db_access = new PDO($dsn, $username, $password);
    
    $query = "SELECT productName, listPrice
               FROM products";
    
    $get_results = $db_access->query($query);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        
        <h1>Task 4:</h1>
        <table style="width: 90%; margin: auto;">
            <tr>
                <th style="text-align: center; width: 50%; border: 1px solid black;">Product Name</th>
                <th style="text-align: center; width: 50%; border: 1px solid black;">List Price</th>
            </tr>
            <?php foreach($get_results as $results) : ?>
                <tr>
                    <td style="border: 1px solid black;">
                        <?php echo $results["productName"]; ?>
                    </td>
                    <td style="border: 1px solid black;">
                        <?php echo $results["listPrice"]; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        
    </body>
</html>