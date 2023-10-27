<?php
    session_start();
    $login_incorreto = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        foreach($_SESSION["usuarios"] as $credencial){
            if($_POST["nome"] == $credencial["nome"] && $_POST["senha"] == $credencial["senha"]){
                $_SESSION["nomeLogado"] = $credencial["nome"];
                $_SERVER["REQUEST_METHOD"] = "GET";
                $_SESSION["logou"] = true;
                echo '<script type="text/javascript">alert("Login correto ' . $credencial["nome"] . '"); window.location = "pages/tela-principal.php";</script>';
                exit(); 
            }else{
                $login_incorreto = true;
            }
        }
    } 
?>