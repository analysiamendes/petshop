<?php
    $nome=$_POST['nometutor'];
    $endereco=$_POST['endereco'];
    $Cep=$_POST['cep'];
    $Email=$_POST['email'];
    $Cel=$_POST['cel'];
    $NomeAnimal=$_POST['nomeanimal'];
    if (empty($_POST['porteanimal'])){
        $PorteAnimal="";
    }else{
        $PorteAnimal=$_POST['porteanimal'];
    }    
    $TipoTosa=$_POST['tipotosa'];
    $Obs=$_POST['obs'];
    $PHorario=$_POST['phorario'];
    $SHorario=$_POST['shorario'];   
    $HoraAtend=$_POST['horaatend']; 
    if (empty($_POST['dia3'])){
        $Dia3="";
    }else{
        $Dia3=$_POST['dia3'];
    }  
    if (empty($_POST['dia4'])){
        $Dia4="";
    }else{
        $Dia4=$_POST['dia4'];
    }  
    if (empty($_POST['dia5'])){
        $Dia5="";
    }else{
        $Dia5=$_POST['dia5'];
    }  
    if (empty($_POST['dia6'])){
        $Dia6="";
    }else{
        $Dia6=$_POST['dia6'];
    }  
    if (empty($_POST['dia7'])){
        $Dia7="";
    }else{
        $Dia7=$_POST['dia7'];
    }  
    require('conexao.php');
    $Inserir="INSERT INTO tdbanho (BaNomeTutor, BaEndereco, BaCep, BaEmail, BaCel, BaNomeAnimal, BaPorteAnimal, BaTipoTosa, BaObs, BaPriHora, BaSegHora, BaHoraAtend, BaDia3, BaDia4, BaDia5, BaDia6, BaDia7) 
      VALUES ('$nome','$endereco','$Cep','$Email', '$Cel','$NomeAnimal','$PorteAnimal','$TipoTosa','$Obs','$PHorario','$SHorario','$HoraAtend','$Dia3','$Dia4','$Dia5','$Dia6','$Dia7')";
 
    if(mysqli_query($conexao, $Inserir)){
        echo "Dados inseridos com sucesso";
    }else{
        echo "Erro ao inserir dados". mysqli_error($conexao);
    }
    mysqli_close($conexao);
?>
<p><button onclick="window.history.back()">Voltar</button></p>
