<?php
class Auto {
    public $placa;
    public $color;
    public $modelo;

    public function __construct($placa = null, $color = null, $modelo = null) {
        $this->placa = $placa;
        $this->color = $color;
        $this->modelo = $modelo;
    }

    public function getPlaca() {
        return $this->placa;
    }

    public function setPlaca($placa) {
        $this->placa = $placa;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
}
?>
<?php
