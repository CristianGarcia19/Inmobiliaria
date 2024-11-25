<?php
    require_once('../models/Propiedades.php');
    require_once('../models/admAgentes.php');
    $propiedad = new Propiedad();
    $agentes = new Agentes();
    
    //obtener lista de campos necesarios para el formulario de propiedad
    $lista_departamentos = $propiedad->departamentos();
    $estado_propiedad = $propiedad->estado_propiedad();
    $lista_ciudades = $propiedad->ciudades();
    $lista_agentes = $agentes->lista_agentes();
    $lista_categoria_propiedad = $propiedad->categoria_propiedad();
    $lista_carac_internas = $propiedad->caracteristicas_internas();
    $lista_carac_externas = $propiedad->caracteristicas_externas();

    if (isset($_GET['opc'])) {
        $opc = $_GET['opc'];
    
        
        switch ($opc) {
            
        }
    }
?>