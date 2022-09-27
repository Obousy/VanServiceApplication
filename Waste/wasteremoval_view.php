<!doctype html>
<?php require_once("wasteremoval_controller.php");?>
<html>
  <head>
    <title>Waste Removal</title>
  </head>
  <body>
    <h3>Enter your details, and what you would like done in your house</h3>
     <link rel="stylesheet" href="">
    <?php if ($status): ?>
      <p><?=$status?></p>
    <?php endif ?>
    <form action="wasteremoval.php" method="POST">
      First Name: <input name="firstname"/><br/>
      Last Name: <input name="surname"/><br/>
      Address: <input name="address"/><br/>
      City: <input name="city"/><br/>
      Type of Waste: <input name="wastetype"/><br/>
      <input type="submit"/>
       </form>
       <form action="https://formsubmit.co/obousy01@hotmail.com" method="POST"> 
      <br> </br>
      <input type="email" name="email" placeholder="Email Address" required> 
      <input type="text" name="message" placeholder="Email Extra Details" required>
      <br> </br>
      <button type="submit">Send</button>  
  </body>
</html>