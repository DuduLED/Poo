<?php
    include_once 'Calculadora.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(!empty($_POST['numero1']) && !empty($_POST['numero2'])){
            $calcular = new Calculadora($_POST['numero1'], $_POST['numero2']);
            if(!empty($_POST['btnSomar'])){
                $calcular->__setNumero1(100);
                $calcular-> somaNumeros();
            }else{
                if(!empty($_POST['btnSubtrair'])){
                    $calcular-> subNumeros();
                }else{
                    if(!empty($_POST['btnMultiplicar'])){
                        $calcular-> multNumeros();
                    }else{
                        if($_POST['btnDividir']){
                            $calcular-> dividirNumeros();
                        }
                    }
                } 
            }
            
         }

    }

?>

