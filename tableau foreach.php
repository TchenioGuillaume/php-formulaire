<!-- //-----------------------
//***** tableau foreach ******
//------------------------ -->


<?php
  $ze = [
    "nom" => "Mouse",
    "prenom" => "Mickey",
    "age" => 111,
    "taille (cm)" => 90,
    "couleur de cheveux" => "y'en a pas"
  ];
  $zr = [
    "nom" => "Tchenio",
    "prenom" => "Guillaume",
    "age" => 26,
    "taille (cm)" => 174,
    "couleur de cheveux" => "blond"
  ];
  $zt = [
    "nom" => "Lautre",
    "prenom" => "Lui",
    "age" => 10,
    "taille (cm)" => 174,
    "couleur de cheveux" => "noir"
  ];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }
    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    tr:nth-child(even) {
        background-color: #dddddd;
    }
  </style>
  <body>
    <!-- tableau foreach -->
    <table style="width:100%">
      <tr>
        <?php foreach ($ze as $key => $value)
          echo '<th>' . $key . '</th>';
        ?>
      </tr>
      <tr>
        <?php foreach ($zr as $key => $value)
          echo '<td>' . $value . '</td>';
        ?>
      </tr>
      <tr>
        <?php foreach ($ze as $key => $value)
          echo '<td>' . $value . '</td>';
        ?>
      </tr>
      <tr>
        <?php foreach ($zt as $key => $value)
          echo '<td>' . $value . '</td>';
        ?>
      </tr>
    </table>
  </body>
</html>
