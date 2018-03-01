<?php

    $dsn = "mysql:host=localhost;dbname=my_guitar_shop1";
    $username = "root";
    $password = "";

    global $db_access;
    
    $db_access = new PDO($dsn, $username, $password);
    
    function Insert_Record($product_name, $product_price, $product_code)
    {
        global $db_access;
            
        $query = "INSERT INTO products
                  (productCode, productName, listPrice)
                  VALUES
                  ('$product_code', '$product_name', '$product_price')";

        $return_record = $db_access->exec($query);
        
        return $return_record;
    }
    
    function Delete_Record($product_id)
    {   
        global $db_access;
            
        $query = "DELETE
                  FROM products
                  WHERE productID='$product_id'";

        $return_record = $db_access->exec($query);
        
        return $return_record;
    }
    
    if(isset($_GET["name"]) && isset($_GET["price"]) && isset($_GET["code"]))
    {
        Insert_Record($_GET["name"], $_GET["price"], $_GET["code"]);
    }
    
    if(isset($_GET["id_number"]))
    {
        Delete_Record($_GET["id_number"]);
    }
    
    $query = "SELECT productName, listPrice, productCode, productID
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
        <h1>TASK 6:</h1>        
        
        <form method="GET" action="Task_6.php">
            <p>Enter Product Name:</p>
            <input type="text" name="name" /><br><br>
            <p>Enter Product Price:</p>
            <input type="text" name="price" /><br><br>
            <p>Enter Product Code:</p>
            <input type="text" name="code" /><br><br>
            <input type="submit" value="Submit" />
        </form>
        <table style="width: 90%; margin: auto;">
            <tr>
                <th style="text-align: center; width: 25%; border: 1px solid black;">Product Name</th>
                <th style="text-align: center; width: 25%; border: 1px solid black;">List Price</th>
                <th style="text-align: center; width: 25%; border: 1px solid black;">Product Code</th>
                <th style="text-align: center; width: 25%; border: 1px solid black;">Delete Action</th>
            </tr>
            <?php foreach($get_results as $record) : ?>
                <tr>
                    <td style="border: 1px solid black;">
                        <?php echo $record["productName"]; ?>
                    </td>
                    <td style="border: 1px solid black;">
                        <?php echo $record["listPrice"]; ?>
                    </td>
                    <td style="border: 1px solid black;">
                        <?php echo $record["productCode"]; ?>
                    </td>
                    <td style="border: 1px solid black;">
                        <div style="text-align: center;">
                            <a href="Task_6.php?id_number=<?php echo $record["productID"] ?>" style="text-decoration: none; color: red;">
                                <strong>Delete</strong>
                            </a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
