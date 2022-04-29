<?php
    session_start();
    echo "<p>Aula Sessins PHP <p>";

    $usuario = "renato";
    $senha = 12345;

    if(@$_POST["btn"] == "bt1") {
        $senha1 = @$_POST["senha"];
        if($senha1 == $senha) {
            $_SESSION["user"] = $usuario;
            $_SESSION["pass"] = $senha1;
            Header("Location:sessionpagina2.php");
        }
    }
?>

<form mothed="post" action="sessionpagina2.php">
    Usuário <input type="text" name="usuario" value="usuario">
    Senha <input type="password" name="senha" value="senha">
    <button type="submit" name="btn" value="bt1">Entrar</button>
    <input type="reset" value="Limpar">
    
</form>
<a href="sessionpagina2.php">aula 09 continua</a>