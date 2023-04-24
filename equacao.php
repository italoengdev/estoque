<?php
  class Equacao{
    public $a;
    public $b;
    public $c;

  function __construct($a, $b=0, $c=0){
    $this->a = $a;
    $this->b = $b;
    $this->c = $c;
  }

  public function calculaDelta(){
    return $this->b * $this->b - 4 * $this->a * $this->c;
  }

  public function calculaX1(){
    return (-$this->b + sqrt($this->calculaDelta())) / (2 * $this->a);
  }

  public function calculaX2(){
    return (-$this->b - sqrt($this->calculaDelta())) / (2 * $this->a);
  }

  public function resultado(){
      $delta = $this->calculaDelta();
      if ($delta < 0) {
          $resultado = "Não existe raiz real";
      } else {
          $resultado = ($delta == 0) ? "Raiz única" : "Duas raízes";
          $resultado .= " x1 = " . $this->calculaX1();
          $resultado .= " x2 = " . $this->calculaX2();
          $resultado .= " Delta = " . $delta;
      }
      return $resultado;
  }
  }
