<?php
  session_start();
  require_once ("wasteremoval.php");
  require_once ("dataAccess.php");

  $status = false;

  if(isset($_REQUEST["customer"]))
  {
    $firstname = $_REQUEST["firstname"];
    $surname = $_REQUEST["surname"];
    $address = $_REQUEST["address"];
    $city = $_REQUEST["city"];
    $wastetype = $_REQUEST["wastetype"];

    $waste = new Wasteremoval();
    $waste->givenname = htmlentities($givenname);
    $waste->surname = htmlentities($surname);
    $waste->address = htmlentities($address);
    $waste->city = htmlentities($city);
    $waste->wastetype = htmlentities($wastetype);

    wasteremoval($waste);
    $status = "$customer has been added.";
  }

  require_once ("wasteremoval.php");

?>