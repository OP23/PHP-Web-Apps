<?php
//  the controller is in-between the Model and the View. It organizes how these two pages will be used, depending on what was requested.  

  include_once('../model/model.php');  //include the model.php page
  include_once('../view/view.php'); //include the view.php page
   
  $page = fetchPage(); //set $page to the function fetchPage, which is defined next 
  
   
  function fetchPage() { // to find what key/value pairs were sent from index.php
    
     if (isset($_GET["page"])) { //  the function issetius used to ask the question  if a key "page" was sent when a link was clicked on index.php 
		
		 $pageReq = $_GET["page"]; // if it was, get the value of the key
       
	   switch($pageReq) { //let's decide which "page" was requested, and the call the correct function from view.php
        case "car":// If the link "<a href="controller/controller.php?page=car">Show me a car</a>"was clicked on the index.php page, then
           $page = "CAR"; // give a variable named $page a value of "CAR", which we will use at the bottom of this page 
         break;
     
             case "car_ferrari":// If the link "<a href="controller/controller.php?page=car">Show me a car</a>"was clicked on the index.php page, then
           $page = "FERRARI"; // give a variable named $page a value of "CAR", which we will use at the bottom of this page 
         break;
     
                  case "show_all":// If the link "<a href="controller/controller.php?page=car">Show me a car</a>"was clicked on the index.php page, then
           $page = "SHOW ALL"; // give a variable named $page a value of "CAR", which we will use at the bottom of this page 
         break;
		 
		  case "price": //PHP is case sensitive, so price and PRICE (in the line below is not the same). If the link "<a href="controller/controller.php?page=price">Show me it's price</a>" was clicked on the index.php page, then
           $page = "PRICE"; // give a $page a value of "PRICE", which we will use at the bottom of this page  
         break;
         
		 default: // If the link "<a href="controller/controller.php?page=not sure">Unsure what I want to see</a>"was clicked on the index.php page, then
           $page = "CAR"; // let us give $page a value of "CAR". Of course, we could have added this as another case, but one should always have a default to cover for unexpected problems
         break;
       }
     } else { // The link <a href="controller/controller.php">Just let me in!</a> was sent, so there was no key. Let's show them CAR. 
       $page = "CAR";
     }
     
     return $page; // show the function
    
  }
  
  
  if ($page=="PRICE") { //if $page is set to PRICE
    $price = price(); //  get the data on the proce by using the price()function in model.php 
    showPrice($price);  // then call the function showPrice in view.php  
  } elseif($page=="CAR") { //if $page is set to CAR
    $car = car();//  get the data on the car by using the car()function in model.php 
    showCar($car);   // then then call the function showCar in view.php  to present the car's data  to the user.
  } elseif($page=="FERRARI") {
    $car = Ferrari();
    $car_price = Ferrari_Price();
    $car_model = Ferrari_Model();
    Ferrari_Car($car, $car_price, $car_model);
  } elseif($page=="SHOW ALL") {
    $car_merc = car();
    $price_merc = price();
    $car_ferr = Ferrari();
    $model_ferr = Ferrari_Model();
    $price_ferr = Ferrari_Price();
    Show_All_Specials($car_merc, $price_merc, $car_ferr, $model_ferr, $price_ferr);
  }
  
  
?>