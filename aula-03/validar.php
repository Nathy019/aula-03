  <?php
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    if($usuario == "nathy@nathy.com" && $senha == 123){
        header("location:painel.php");
    }
    else{
        header("location:invalido.php");
    }
    ?>
