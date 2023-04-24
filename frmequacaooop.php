<?php
  include "equacao.php";
  if($_POST){
    $a = $_POST["a"];
    if($a == 0){
      $resultado = "O valor de a deve ser diferente de zero";
    }else{
      $b = $_POST["b"];
      $c = $_POST["c"];
      $eq = new Equacao($a, $b, $c);
      $delta = $eq->calculaDelta();
      $resultado = $eq->resultado();

      $eq2 = new Equacao(1, 2, 1);
      $resultado2 = $eq2->resultado();
  }
}
?>
<html>
  <head>
    <title>Equação</title>
    <body>
      <h1>Equacao 2 grau</h1>
      <form action="" method="post">
        Valor de a: <input type="text" name="a" value="<?php echo $a; ?>"/>
        Valor de b: <input type="text" name="b" value="<?php echo $b; ?>"/>
        Valor de c: <input type="text" name="c" value="<?php echo $c; ?>"/>
        <input type="submit"/>
      </form>
      <?php
        if(isset($resultado)){
          echo $resultado;
          echo "<hr />";
          echo $resultado2;
        }
        ?>
    </body>
  </head>
</html>