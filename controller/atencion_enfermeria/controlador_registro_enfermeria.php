<?php
    require '../../model/model_atencion_enfer.php';
    $MAEN = new Modelo_Atencion_Enfer();//Instaciamos
    $estu = strtoupper(htmlspecialchars($_POST['estu'],ENT_QUOTES,'UTF-8'));
    $motivo = strtoupper(htmlspecialchars($_POST['motivo'],ENT_QUOTES,'UTF-8'));
    $diagno = strtoupper(htmlspecialchars($_POST['diagno'],ENT_QUOTES,'UTF-8'));
    $observa = strtoupper(htmlspecialchars($_POST['observa'],ENT_QUOTES,'UTF-8'));
    $idusu = strtoupper(htmlspecialchars($_POST['idusu'],ENT_QUOTES,'UTF-8'));

    $consulta = $MAEN->Registrar_Atencion_Enferme($estu,$motivo,$diagno,$observa,$idusu);
    echo $consulta;



?>