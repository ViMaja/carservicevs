<?php
    $numeroDeEstudiantes =  rand(1,10000) ;
    $carnet  = rand(1,70);
    $nombre = rand(1,70);
    $edad =  rand(1,70);  
    $sexo=rand(1,2);
    $cuenta1= 0;
    $cuenta2= 0;
    $cuenta3= 0;
    $cuenta4= 0;
    $cuenta5= 0;
    $cuenta6= 0;
    $cuenta7= 0;
    $cuenta8= 0;
    $cuenta9= 0;
    $cuenta10= 0;
    $con=0;
    $conM=0;
    $por = 0;
    $acu = 0;
    $i = 1;
    echo "1 Fabilola , 2 Laura , 3 pedro, 4 Augusto, 5 Mariana ";
        while ($i <=$numeroDeEstudiantes ) {
            $programa = rand(1,5);
            switch ($programa){
                case 1: 
                    echo "<br> Programacion";
                    $cuenta1++;
                    $con=$con+$edad;
                    break;
                    
                case 2: 
                    echo "<br> Contaduria";
                    $cuenta2++;

                    break;
                case 3: 
                    echo "<br> Gestion administrativa";
                    $cuenta3++;
                    break;
                case 4: 
                    echo "<br> Secretaria  ";
                    $cuenta4++;
                    break;
                case 5 :
                    echo "<br> electronica " ; 
                    $cuenta5++;
                    $conM=$conM+$edad;
                    break;
                
            } 
            $sexo = rand(1,2);
            switch($sexo){
                
                case 1:
                    $cuenta7++;
                    break;
                case 2;
                    $cuenta8++;
                    break;    
            }
            switch($nombre){
                case 1:
                    break;
                case 2:
                    break;
                case 3:
                    break; 
                case 4:
                    break;
                case 5:
                    break;        
            
            }
            

            
            if ($sexo == 2 ){
                if ($edad == 18 and $programa== 4 ){
                    $cuenta6++;
                } 

            } 
            if ($sexo == 1 and $programa == 1){
                $cuenta9++;
            }
            if ($sexo == 2 ){
                if ($edad == 18 and $programa== 5 ){
                    $cuenta10++;
                    $acu=$acu+$cuenta10;
                } 

            }
            if ($sexo == 2 ){
                if ($edad == 18 and $programa==3 ){
                    if ($nombre=4){
                        $cuneta11++;
                    }
                    
                } 

            }
            
            $pro = $con / $cuenta9;
            $por = $acu * $cuenta10 / 100;    
            $i++;
                
        }       

        print " <br>El numero de  estudiantes en programacion es de  $cuenta1  ";
        print " <br>El numero de  estudiantes en Contaduria es de $cuenta2  ";
        print " <br>El numero de  estudiantes en Gestion administrativa es de $cuenta3  ";
        print " <br>El numero de  estudiantes en Secretaria es de  $cuenta4  ";
        print " <br>El numero de  estudiantes en electronica es de  $cuenta5  ";
        print " <br> En secrtaria estudian  $cuenta6 mujeres mayor de edad"; 
        print " <br> En programacion estudian  $cuenta9 hombres"; 
        print " <br> el promedio de edad de los hombre que estudian programacion  es de: $pro";
        print " <br> la cantidada de mujeres mayores de edad que estuda Gestion administrativa y se llaman laura es de ";
        print " <br> el porsentaje de edad de las mujer que estudian programacion  es de: $por %"
?>