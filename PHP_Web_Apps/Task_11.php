<?php

    //Uses the 'empty()' function to check if text box is empty. 
    //Returns TRUE if the text box is empty. 
    //Returns FALSE if the text box is not empty
    if(empty($_GET["user_string"]))
    {
        $message = "This String Is Empty";
    }
    else
    {
        $message = "This String Is Not Empty";
    }
    
    //Uses the 'strlen()' function to determine the length of the string. 
    //Returns an integer of the number of words
    if(isset($_GET["string_length"]))
    {
        $stringlen = $_GET["string_length"];
        $word_count = strlen($stringlen);
    }
    
    //Uses 'substr($array, $start, $len)' function to separate each word on a separate line.
    //$array - the array the function should reference
    //$start - the starting point
    //$len - number of charaters after the $start position
    if(isset($_GET["substring"]))
    {
        $sub_string = $_GET["substring"];
        $separate_str = "";
        
        for($i = 0; $i < strlen($sub_string); $i++)
        {
            $separate_str .= substr($sub_string, $i, 1);
            $separate_str .= "<br />";
        }
    }
    
    //Uses 'substr()' function to separate each word on a separate line.
    if(isset($_GET["stringsearch"]))
    {
        $user_search = $_GET["stringsearch"];
        $sentence_search = "The quick brown fox jumps over the lazy dog.";
        
        $is_found = stripos($sentence_search, $user_search);
        
        if($is_found !== false)
        {
            $is_it_found = "$user_search is found";
        }
        else
        {
            $is_it_found = "$user_search is not found";
        }
    }

    //Uses 'str_ireplace()' function to select a word and replace it. 
    //Type a word in sentence 1, 
    //type a word to replace it with and it will appear in a new sentence
    if(isset($_GET["stringselect"]) && isset($_GET["stringreplace"]))
    {
        $str_select = $_GET["stringselect"];
        $str_replace = $_GET["stringreplace"];
        $sentence_replace = "Internet Comprises Of Server-Side Programming As Well As Client-Side Programming";
        
        $replace = str_ireplace($str_select, $str_replace, $sentence_replace);
    }
    
    //Capitalizes the first word using the 'ucfirst()' method
    if(isset($_GET["charcapitalize"]))
    {
        $str_capitalize = $_GET["charcapitalize"];
        
        $str_capitalize_out = ucfirst($str_capitalize);
    }
    
    //Capitalizes the first word using the 'ucfirst()' method
    if(isset($_GET["charlower"]))
    {
        $str_lower = $_GET["charlower"];
        
        $str_lower_out = lcfirst($str_lower);
    }
    
    //Capitalizes the first word using the 'ucfirst()' method
    if(isset($_GET["wordsupper"]))
    {
        $words_upper = $_GET["wordsupper"];
        
        $words_upper_out = ucwords($words_upper);
    }
    
    //Converts each word to lower case using the 'lcwords()' method
    if(isset($_GET["wordslower"]))
    {
        $words_lower = $_GET["wordslower"];
        
        $words_lower_out = ucwords($words_lower);
    }
    
    //Shuffles the string value of the user input using 'str_shuffle()' method
    //Enter Your name and submit to randomly create nickname
    if(isset($_GET["stringshuffle"]))
    {
        $string_shuffle = $_GET["stringshuffle"];
        
        $string_shuffle_out = str_shuffle($string_shuffle);
    }
    
    //Converts Decimal to Hex using the 'dechex()' function
    if(isset($_GET["decvalue"]))
    {
        $dec_value = $_GET["decvalue"];
        
        $dec_value_out = dechex($dec_value);
    }
    
    //Checks to see if the product of two values is out of range using the 'is_infinite()' function
    if(isset($_GET["value1"]) && isset($_GET["value1"]))
    {
        $value_1 = $_GET["value1"];
        $value_2 = $_GET["value2"];
        
        $product = $value_1*$value_2;
        
        if(is_infinite($product))
        {
            $product_out = "Value is out of range";
        }
        else
        {
            $product_out = "Product is: $product";
        }
    }
    
    //Rounds a value to two decimal places using the 'round()' function
    if(isset($_GET["decivalue1"]) && isset($_GET["decivalue1"]))
    {
        $deci_value_1 = $_GET["decivalue1"];
        $deci_value_2 = $_GET["decivalue2"];
        
        $deci_product = $deci_value_1*$deci_value_2;
        
        $deci_product_out = round($deci_product, 2);
    }
    
    //Create a random number using the 'mt_rand($lo, $hi)' function. 
    //Enter the highest number in the first field ($hi) and the lowest number in the second field ($lo)
    if(isset($_GET["maxrandom"]) && isset($_GET["lowrandom"]))
    {
        $max_random = $_GET["maxrandom"];
        $low_random = $_GET["lowrandom"];

        $random_out = mt_rand($low_random, $max_random);
    }
    
    //Uses 'sprintf()' function to return an expiry date:
    $date_today = sprintf("%02d-%02d-%04d", 23, 10, 2015);
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1>TASK 11.A:</h1>
        <h2>Function 1:</h2>
        <form action="Task_11.php" method="GET">
            <p>Uses the 'empty()' function to check if text box is empty. Returns TRUE if the text box is empty. Returns FALSE if the text box is not empty</p>
            <input type="text" name="user_string" value="" /><br /><br />
            <input type="submit" value="Submit" />
        </form>
        <p><?php echo $message; ?></p><br /><br />
        
        
        
        <h2>Function 2:</h2>
        <form action="Task_11.php" method="GET">
            <p>Uses the 'strlen()' function to determine the length of the string. Returns an integer of the number of words</p>
            <input type="text" name="string_length" value="" /><br /><br />
            <input type="submit" value="Submit" />
        </form>
        <p><?php if(isset($_GET["string_length"])){echo $word_count;} ?></p><br /><br />
        
        
        
        <h2>Function 3:</h2>
        <form action="Task_11.php" method="GET">
            <p>Uses 'substr()' function to separate each word on a separate line.</p>
            <input type="text" name="substring" value="" /><br /><br />
            <input type="submit" value="Submit" />
        </form>
        <p><?php if(isset($_GET["substring"])){echo $separate_str;} ?></p><br /><br />
        
        
        
        <h2>Function 4:</h2>
        <form action="Task_11.php" method="GET">
            <p>The quick brown fox jumps over the lazy dog.</p>
            <p>Search For Word:</p>
            <input type="text" name="stringsearch" value="" /><br /><br />
            <input type="submit" value="Submit" />
        </form>
        <p><?php if(isset($_GET["stringsearch"])){echo $is_it_found;} ?></p><br /><br />
        
        
        
        <h2>Function 5:</h2>
        <form action="Task_11.php" method="GET">
            <p>Uses 'str_ireplace()' function to select a word and replace it. Type a word from sentence 1, then type a word to replace it with and it will appear in a new sentence</p>
            <p>Sentence 1: Internet Programming Comprises Of Server-Side Programming As Well As Client-Side Programming</p>
            <p>Select Word:</p>
            <input type="text" name="stringselect" value="" /><br /><br />
            <p>String Replace:</p>
            <input type="text" name="stringreplace" value="" /><br /><br />
            <input type="submit" value="Submit" />
        </form>
        <p><?php if(isset($_GET["stringreplace"])){echo $replace;} ?></p><br /><br />
        
        
        
        <h2>Function 6:</h2>
        <form action="Task_11.php" method="GET">
            <p>Capitalizes the first word using the 'ucfirst()' method</p>
            <p>Enter word to capitalize</p>
            <input type="text" name="charcapitalize" value="" /><br /><br />
            <input type="submit" value="Submit" />
        </form>
        <p><?php if(isset($_GET["charcapitalize"])){echo $str_capitalize_out;} ?></p><br /><br />
        
        
        
        <h2>Function 7:</h2>
        <form action="Task_11.php" method="GET">
            <p>The first word converted to lower case using the 'lcfirst()' method</p>
            <p>Enter word to covert to lower case</p>
            <input type="text" name="charlower" value="" /><br /><br />
            <input type="submit" value="Submit" />
        </form>
        <p><?php if(isset($_GET["charlower"])){echo $str_lower_out;} ?></p><br /><br />
        
        
        
        <h2>Function 8:</h2>
        <form action="Task_11.php" method="GET">
            <p>Converts each word to upper case using the 'ucwords()' method</p>
            <p>Enter words to capitalize</p>
            <input type="text" name="wordsupper" value="" /><br /><br />
            <input type="submit" value="Submit" />
        </form>
        <p><?php if(isset($_GET["wordsupper"])){echo $words_upper_out;} ?></p><br /><br />
        
        
        
        <h2>Function 9:</h2>
        <form action="Task_11.php" method="GET">
            <p>Converts each word to lower case using the 'lcwords()' method</p>
            <p>Enter words to convert to lower case</p>
            <input type="text" name="wordslower" value="" /><br /><br />
            <input type="submit" value="Submit" />
        </form>
        <p><?php if(isset($_GET["wordslower"])){echo $words_lower_out;} ?></p><br /><br />
        
        
        
        <h2>Function 10:</h2>
        <form action="Task_11.php" method="GET">
            <p>Shuffles the string value of the user input using 'str_shuffle()' method</p>
            <p>Enter Your name and submit to randomly create nickname</p>
            <input type="text" name="stringshuffle" value="" /><br /><br />
            <input type="submit" value="Submit" />
        </form>
        <p><?php if(isset($_GET["stringshuffle"])){echo $string_shuffle_out;} ?></p><br /><br />
        
        
        
        <h1>TASK 11.b</h1>
        <h2>Function 1:</h2>
        <form action="Task_11.php" method="GET">
            <p>Converts Decimal to Hex using the 'dechex()' function</p>
            <p>Enter Decimal Value</p>
            <input type="text" name="decvalue" /><br /><br />
            <input type="submit" value="Submit" />
        </form>
        <p><?php if(isset($_GET["decvalue"])){echo $dec_value_out;} ?></p><br /><br />
        
        <h2>Function 2:</h2>
        <form action="Task_11.php" method="GET">
            <p>Checks to see if the product of two values is out of range using the 'is_infinite()' function</p>
            <p>Value 1</p>
            <input type="text" name="value1" /><br /><br />
            <p>Value 2</p>
            <input type="text" name="value2" /><br /><br />
            <input type="submit" value="Submit" />
        </form>
        <p><?php if(isset($_GET["value1"]) && isset($_GET["value2"])){echo $product_out;} ?></p><br /><br />
        
        <h2>Function 3:</h2>
        <form action="Task_11.php" method="GET">
            <p>Rounds a value to two decimal places using the 'round()' function</p>
            <p>Value 1</p>
            <input type="text" name="decivalue1" /><br /><br />
            <p>Value 2</p>
            <input type="text" name="decivalue2" /><br /><br />
            <input type="submit" value="Submit" />
        </form>
        <p><?php if(isset($_GET["decivalue1"]) && isset($_GET["decivalue2"])){echo $deci_product_out;} ?></p><br /><br />
        
        <h2>Function 4:</h2>
        <form action="Task_11.php" method="GET">
            <p>Create a random number using the 'mt_rand($lo, $hi)' function. Enter the highest number in the first field ($hi) and the lowest number in the second field ($lo)</p>
            <p>To (Highest)</p>
            <input type="text" name="maxrandom" /><br /><br />
            <p>From (Lowest)</p>
            <input type="text" name="lowrandom" /><br /><br />
            <input type="submit" value="Submit" />
        </form>
        <p><?php if(isset($_GET["maxrandom"]) && isset($_GET["lowrandom"])){echo $random_out;} ?></p><br /><br />
        
        <h2>Function 5:</h2>
        <p>Uses 'sprintf()' function to return an expiry date:</p>
        <p><?php echo "Expiry Date: " . $date_today; ?></p>
    </body>
</html>
