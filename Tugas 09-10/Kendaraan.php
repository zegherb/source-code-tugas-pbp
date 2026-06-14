<?php
class Kendaraan{
    public function jalan(){
        return "Kendaraan berjalan\n";
    }
}
class Mobil extends Kendaraan{
    public function jalan(){
        return "Mobil berjalan\n";
    }
}
class Motor extends Kendaraan{
    public function jalan(){
        return "Motor berjalan\n";
    }
}
$mobil = new Mobil();
echo $mobil->jalan();
$motor = new Motor();
echo $motor->jalan();
?>