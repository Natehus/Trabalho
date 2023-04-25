<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pesquisar Carros</title>
  <style>
    body {
      font-family: monospace;
      background-color: lightblue;
    }

    #container {
      background-color: rgba(0, 0, 0, 0.9);
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      padding: 80px;
      border-radius: 15px;
      color:white;
      font-family: cursive;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h1 {
      font-size: 36px;
      margin-top: 0;
      text-align: center;
    }

    form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    label {
      font-size: 18px;
      margin-bottom: 10px;
    }

    input {
      padding: 6px;
      border: none;
      outline: none;
      font-size: 15px;
      margin-bottom: 15px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 5px;
      font-size: 18px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #3e8e41;
    }

  </style>
</head>
<body>
  <div id="container">
    <h1>Pesquisar Carros</h1>
    <form action="buscar.php" method="GET">
      <label for="marca">Marca:</label>
      <input type="text" id="marca" name="marca">

      <label for="modelo">Modelo:</label>
      <input type="text" id="modelo" name="modelo">

      <label for="ano">Ano:</label>
      <input type="text" id="ano" name="ano">

      <label for="preco">Preço:</label>
      <input type="text" id="preco" name="preco">

      <input type="submit" value="Pesquisar">
    </form>
  </div>
</body>
</html>
