<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nota = $_POST['nota'] ?? '';
    $mensagem = null;

    switch ($nota) {
        case '1':
            $mensagem = '⭐, Péssimo';
            break;
        case '2':
            $mensagem = '⭐⭐, Ruim';
            break;
        case '3':
            $mensagem = '⭐⭐⭐, Regular';
            break;
        case '4':
            $mensagem = '⭐⭐⭐⭐, Bom';
            break;
        case '5':
            $mensagem = '⭐⭐⭐⭐⭐, Excelente';
            break;
        default:
            $mensagem = '❌ Nota inválida. Escolha uma nota de 1 a 5 estrelas.';
            break;
    }
} else {
    $mensagem = 'Método inválido.';
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Resultado da Avaliação</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f6f7f9;
      margin: 0;
    }
    .centralizar {
      max-width: 540px;
      margin: 10vh auto;
      background: #fff;
      padding: 24px;
      border-radius: 16px;
      text-align: center;
    }
    h1 {
      font-size: 1.3rem;
      margin-bottom: 16px;
    }
    .msg {
      font-size: 1.1rem;
      margin: 20px 0;
    }
    .voltar {
      border: 1px solid #d7dce1;
      display:inline-block;
      padding:10px 16px;
      border-radius:10px;
      text-decoration:none;
      font-weight:700;
      background:#2563eb;
      cursor: pointer;
      color:#fff;
    }
  </style>
</head>
<body>
  <div class="centralizar">
    <h1>Resultado da Avaliação</h1>
        <p class="msg"><?php echo ($mensagem); ?></p>

        <button class="voltar" onclick="history.back()">Voltar</button>

  </div>
</body>
</html>
