<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Session</title>
  <style>
      body {
    background-color: #d1d1d1;
    font-family: Arial, Helvetica, sans-serif;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
  }
  .login {
    background-color: rgb(16, 206, 190);
    font-size: x-large;
    padding: 15px;
    color: white;
  }
  .user_pass {
    background-color: white;
  }
  .user {
    padding: 15px;
  }
  .pass {
    padding: 15px;
  }
  .button {
    text-align: center;
    padding: 10px;
  }
  </style>
  
</head>
<body>
  <div class="login">Login</div>
  <div class="user_pass">
    <form action="session.php" method="POST">
      <div class="user">
        <label for="text">Usuário:</label>
        <br></br>
      <input type="text" name="usuario" placeholder="Usuário">
      </div>
      <div class="pass">
        <label for="senha">Senha:</label>
        <br></br>
      <input type="password" name="senha" placeholder="Senha">
      </div>
      <div class="button">
        <button type="submit" name="btn" value="btn1">Entrar</button>
        <input type="reset" value="Limpar">
      </div>
    </form>
  </div>
</body>
</html>
