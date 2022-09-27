<!doctype html>
<html>
  <head>
    <title>Van Services</title> 
  </head>
  <body>
    <link rel="stylesheet" href="">
    <h1>Van Services</h1> 
      <tr>
        <h2>Welcome to the Van Services Company, please select what you need</h2>
      </tr>
    <table>
      <tr>
        <button><a class="current" href="Waste/wasteremoval_view.php">Waste Removal</a></th>
      </button>
      <?php foreach ($customerlist as $customer): ?>
        <tr>
          <td><?=$customer->givenname?></td>
          <td><?=$customer->surname?></td>
          <td><?=$customer->address?></td>
        </tr>
        <?php endforeach ?>
    </table>
  </body>
</html>