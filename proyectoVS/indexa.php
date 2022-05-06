<?php
/* funcion normal */
    function suma(){
        $numme1= 1;
        $numme2 = 5;
        $suma = $numme1 + $numme2;
         echo "la suma es $suma "; 


    }
    suma();
    /* funciones con retorno */
    function multi(){
        $numme1= 1;
        $numme2 = 5;
        $multi = $numme1 * $numme2;
         echo "la multi es $multi "; 
        return $multi;
    }
    echo  multi();

    /* funcion para la resta de dos numeros con parametros */
    function resta($n1,$n2){
        $resta = $n1-$n2;
        echo $resta;
    }
    resta (1000, 23);

    /* funcion para la resta de dos numeros con parametros y el return y tambien como llmar la funcion dentro de otra funcion */

    function mul($nm1,$nm2,$nm3){
        $mul = $nm1*$nm2*$nm3;
        resta (10, 23);  
        return  "<br> este es el resultado $mul";
        }
    echo mul (1,2,3);
    



     


?>