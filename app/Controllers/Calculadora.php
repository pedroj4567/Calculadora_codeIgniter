<?php
namespace App\Controllers;

class Calculadora extends BaseController {
  public function index() {
    return view('calculadora');
  }

  public function calculo() {
    $num1 = $this->request->getPost('num1');
    $num2 = $this->request->getPost('num2');
    $operator = $this->request->getPost('operator');

    switch($operator) {
      case '+':
        $resultado = $num1 + $num2;
        break;
      case '-':
        $resultado = $num1 - $num2;
        break;
      case '*':
        $resultado = $num1 * $num2;
        break;
      case '/':
        $resultado = $num1 / $num2;
        break;
      default:
        $resultado = 0;
        break;
    }

    $data['resultado'] = $resultado;
    return view('calculadora', $data);
  }
}