 <?php
 require_once "../model/dto/vehiculo.dto.php";
 require_once "../model/dao/vehiculo.dao.php";

    class ControladorVehiculo{
    public function objInserVehiculo($placa, $color){
        $objInserVehiculo = new Vehiculo();
        $objInserVehiculo -> setPlaca($placa);
        $objInserVehiculo -> setColor($color);

        $objInserVehiculo = new ModelVehiculo($objInserVehiculo);
        if ($objInserVehiculo-> mdlInsertar()){
            echo "<script>alert el registro a sido guardado<script>";
        };

    }

    }
 ?>