<?php
//The view presents the data sent to it.  This is what the user see when a link is clicked in index.php

  function showCar($carBrand) { // in controller.php, this function was used as follows "showCar($car);"  Here the parameter $car is replaced by $carBrand. It does not matter because when showCar()is used, whatever the variable name is, will be used as $carBrand 
    $page = htmlHeader() . 'Our car on special this month is a '.$carBrand.htmlFooter().'<br><br><a href=../index.php>Return to menu</a>';
    echo $page;
  }
  
  function showPrice($priceOfCar) {
    $page = htmlHeader() . 'It\'s price, never to repeated, is '.$priceOfCar.htmlFooter().'<br><br><a href=../index.php>Return to menu</a>';
    echo $page;    
  }
  
  function Ferrari_Car($carBrand, $carPrice, $carModel)
  {
    $page = htmlHeader() . "The " . $carBrand . " " . $carModel . ", a street burner in beautiful red, is now available at the extraordinary price of " . $carPrice . htmlFooter().'<br><br><a href=../index.php>Return to menu</a>';
    echo $page;
  }
  
  function Show_All_Specials($carMerc, $priceMerc, $carFerr, $modelFerr, $priceFerr)
  {
    $page = htmlHeader() . "Our car on special this month is a " . $carMerc . " at " . $priceMerc . " and the " . $carFerr . " " . $modelFerr . " at " . $priceFerr . htmlFooter() . "<br><br><a href=../index.php>Return to menu</a>";
    echo $page;
  }

  function htmlHeader() { // just to give the page a HTML header
    return "<!doctype html><html><head><meta charset=\"utf-8\"><title>Worst Dealership in the world</title>	
	<link rel=\"stylesheet\" type=\"text/css\" href=\"../template/dealership.css\"></head><body>";
  }
  
  function htmlFooter() { // just to give the page a HTML footer
    return '</body></html>';  
  }
?>