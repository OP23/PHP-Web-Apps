<?php
//controller

  include_once('Simple-Non-OO-MVC-Model.php');  
  include_once('Simple-Non-OO-MVC-View.php');
  
  $page = getPage();
  
  if ("TITLE" == $page) {
    $title = getTitle();
    showTitlePage($title);    
  } elseif ("AUTHOR" == $page) {
    $author = getAuthor();
    showAuthorPage($author);    
  }
   
  function getPage() {
    
     if (isset($_GET["page"])) {
       $pageIn = $_GET["page"];
       switch($pageIn) {
         case "title":
           $page = "TITLE";
         break;
         case "author":
           $page = "AUTHOR";
         break;
         default:
           $page = "TITLE";
         break;
       }
     } else {
       $page = "TITLE";
     }
     
     return $page;
    
  }
  
  //model

  function getAuthor() {return 'Larry Truett';}
  function getTitle() {return 'PHP for Cats';}
  
  //view

  function showAuthorPage($authorIn) {
    $page = htmlBegin() . 'AUTHOR: '.$authorIn.htmlEnd();
    echo $page;
  }
  
  function showTitlePage($titleIn) {
    $page = htmlBegin() . 'TITLE: '.$titleIn.htmlEnd();
    echo $page;    
  }

  function htmlBegin() {
    return '<'.'HTML><'.'HEAD><'.'TITLE><'.'/TITLE><'.'/HEAD><'.'BODY>';
  }
  
  function htmlEnd() {
    return '<'.'/BODY><'.'/HTML>';  
  }
  
  ?>