<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/main.css" />
  <title>Formulario </title>
</head>
<body class="fondo">
  <?php
    $filas=8;
    $columns=8;
  ?>
  <div class="contenedor center">
    <form method="post">
      <table>
      <?php
        echo "<tr>";
        for($x=0; $x<=$columns; $x++){
          echo "<td class='cabecera'>".($x)."</td>";
        }
        for($x=1; $x<=$filas; $x++){
          echo "<tr>";
          for($y=0; $y<=$columns; $y++){
            if($x==0 && $y == 0){
              echo "<td>".$x."</td>";
            }elseif($y==0){
              echo "<td class='cabecera'>".(chr($x+64))."</td>";
            }else{
              echo "<td><input type='checkbox' name='disparo[]' value='$x$y'/></td>";
            }
          }
        }
      ?>
      </table>
      <input type="submit" value="check">
    </form>
  </div>
</body>
</html>
