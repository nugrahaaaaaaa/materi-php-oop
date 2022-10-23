<?php
class animal{
    // Properties
    public $name;
    public $legs;
    public $cold_blooded;
    public $yell;
  
    // Methods
    function __construct($name, $legs, $cold_blooded, $yell){
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_blooded = $cold_blooded;
        $this->yell = $yell;
    }

    function get_name() {
      return $this->name;
    }
    function get_legs() {
      return $this->legs;
    }
    function get_cold_blooded() {
        return $this->cold_blooded;
    }
    function get_yell() {
        return $this->yell;
  }
}
$goat = new animal("Domba", "4", " no", "mbeeeekkkkk");
echo "Nama : " . $goat->get_name();
echo "<br>legs : " . $goat->get_legs();
echo "<br>Cold blooded :" . $goat->get_cold_blooded();
echo "<br>Yell : " . $goat->get_yell();
?>
