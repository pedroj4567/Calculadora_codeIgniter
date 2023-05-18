<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora en codeIgniter</title>
</head>
<body>
  <?php if(isset($resultado)): ?>
    <p>Resultado: <?php echo $resultado?></p>
  <?php endif; ?>

  <form method="post" action="<?php echo base_url('calculadora/calculo') ?>">
    <input type="number" name="num1" required>
    <select name="operator" required>
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="*">*</option>
      <option value="/">/</option>
    </select>
    <input type="number" name="num2" required>
    <button type="submit">Calcular</button>
  </form>
</body>
</html>