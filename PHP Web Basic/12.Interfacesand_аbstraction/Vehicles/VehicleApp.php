<?php

class VehicleApp
{
     public static function run(){
         /**
          * @var Vehicle[]
          */
         $vehicles = self::readData();
         self::printData($vehicles);
     }

     private static function readData():array {
         $vehicles = [];

         $n = 3;
         while ($n-- > 0){



             [$type, $fuel, $cons, $tank] = explode(' ', readline());
             $type = 'V'.$type;

             if (class_exists($type)){
                 $vehicles[$type] = new $type(floatval($fuel), floatval($cons), floatval($tank));
             }else{
                 continue;
             }
         }

         return $vehicles;
     }

     private static function printData($vehicles){

         $n = intval(readline());

         while ($n-- > 0){
             [$command, $type, $option] = explode(' ', readline());
             $type = 'V'.$type;
             lcfirst($command);

             if (class_exists($type)) {
                 $vehicles[$type]->$command(floatval($option));
             }
         }

         foreach ($vehicles as $vehicle){
             echo $vehicle;
         }
     }
}