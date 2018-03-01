<?php

    $dsn = "mysql:host=localhost;dbname=my_guitar_shop1";
    $username = "root";
    $password = "";
    
    $db_access = new PDO($dsn, $username, $password);
    
    if(isset($_GET["id_number"]))
    {
        $product_id = $_GET["id_number"];
        $query = "SELECT productName
                  FROM products
                  WHERE productID='$product_id'";
        $query_delete = "DELETE
                         FROM products
                         WHERE productID='$product_id'";
        $product_name = $db_access->query($query);
        $product_name_extract = $product_name->fetch();
        $message = "{$product_name_extract["productName"]} has been deleted";
        $db_access->exec($query_delete);
    }
    
    if(isset($_GET["name"]) && isset($_GET["price"]) && isset($_GET["code"]))
    {
        $product_name = $_GET["name"];
        $product_price = $_GET["price"];
        $product_code = $_GET["code"];
        $query = "INSERT INTO products
                  (productCode, productName, listPrice)
                  VALUES
                  ('$product_code', '$product_name', '$product_price')";
        
        $db_access->exec($query);
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
        <h1>Task 5:</h1>
        
        <form method="GET" action="Task_5.php">
            <p>Enter Product Name:</p>
            <input type="text" name="name" /><br><br>
            <p>Enter Product Price:</p>
            <input type="text" name="price" /><br><br>
            <p>Enter Product Code:</p>
            <input type="text" name="code" /><br><br>
            <input type="submit" value="Submit" />
        </form>
        <br />
        <table style="width: 90%; margin: auto;">
            <tr>
                <th style="text-align: center; width: 25%; border: 1px solid black;">Product Name</th>
                <th style="text-align: center; width: 25%; border: 1px solid black;">List Price</th>
                <th style="text-align: center; width: 25%; border: 1px solid black;">Product Code</th>
                <th style="text-align: center; width: 25%; border: 1px solid black;">Delete Action</th>
            </tr>
            <?php foreach($get_results as $results) : ?>
                <tr>
                    <td style="border: 1px solid black;">
                        <?php echo $results["productName"]; ?>
                    </td>
                    <td style="border: 1px solid black;">
                        <?php echo $results["listPrice"]; ?>
                    </td>
                    <td style="border: 1px solid black;">
                        <?php echo $results["productCode"]; ?>
                    </td>
                    <td style="border: 1px solid black;">
                        <div style="text-align: center;">
                            <a href="Task_5.php?id_number=<?php echo $results["productID"]; ?>" style="text-decoration: none; color: red;">
                                <strong>Delete</strong>
                            </a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <p><?php if(isset($message)) {echo $message;} ?></p>
    </body>
</html>
