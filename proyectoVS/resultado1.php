<?php
   
    if (isset($_POST ['edad'])){
        if ($_POST["edad"] == 18) {
            echo "Recientemente mayor de edad";

        }else{
            echo "Es menor de edad";
            
        }
    }
    if (isset($_POST ['n1'])){
        $num1 = ($_POST ['n1']);
        $num2 = ($_POST ['n2']);
       echo suma($num1,$num2);

    }
    function suma($n1,$n2){
        $resul=$n1+$n2;
        return $resul;

    }
    

?>