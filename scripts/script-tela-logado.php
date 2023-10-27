<?php 
    session_start();  
    if($_SESSION["logou"] == true){
        $_SESSION["logou"] = false;
    }else{
        header("Location: ../index.php");
    }
    echo '<script type="text/javascript">
        alert("Você entrou em área restrita, caso reinicie a página ou tente acessar essa página após sair, será necessário fazer o login novamente!");
        </script>';
    $nomeUsuario = $_SESSION['nomeLogado'];
    $nomeFormatado = ucfirst(strtolower($nomeUsuario));
    echo "<h1>Olá $nomeFormatado</h1>";
?>