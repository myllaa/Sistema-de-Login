<?php
    $bol=null;
    function checagem($entradaN,$entradaS)
    {
        $modeloN='/^[a-zA-Z]+$/i';
        $modeloS='/^[a-zA-Z0-9]+$/i';
        if(preg_match($modeloN,$entradaN) and preg_match($modeloS,$entradaS)){
            return true;
    }
    }

    if(!isset($_POST['enviar']))
    {
        // echo "<h1> ERROR </h1>";
    }else{

    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['senha']= $_POST['senha'];

    $nome= $_SESSION['nome'];
    $senha= $_SESSION['senha'];

    
    if (!checagem($nome,$senha)){
        die("<p> ERROR</p>");
    }

    echo "<p id='name'> Olá, $nome!</p>";
    $ponteiro=fopen("login.txt","r");
        
    if($ponteiro==false){
        die("<h1>ERROR</h1>");
    }

    $senha=sha1($senha);

    $arquivo = file('login.txt');
    foreach($arquivo as $linha ){
        $linha = trim($linha);
        $vetor = explode('|',$linha);

    for($i=0;$i<count($vetor);$i++){
        if("$nome$senha"=="$vetor[$i]")
    {
        echo "<p id='logado'></p>";
        $bol=true;
        break;
    }
        echo "<p id='nLogado'></p>";
        header("refresh: 15;index.php");
    }
}
    fclose($ponteiro);
    }
?>