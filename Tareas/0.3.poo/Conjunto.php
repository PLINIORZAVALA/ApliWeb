<?php
class Conjunto {
    // Atributos privados para almacenar el tamaño del conjunto y el arreglo de datos
    private $tamano;
    private $datos;

    // Constructor que recibe el tamaño del conjunto y genera el arreglo de números aleatorios
    public function __construct($tamano) {
        $this->tamano = $tamano;
        $this->datos = $this->generarConjunto($tamano);
    }

    // Método privado para generar un conjunto de números aleatorios basado en el tamaño
    private function generarConjunto($tamano) {
        $conjunto = [];
        for ($i = 0; $i < $tamano; $i++) {
            $conjunto[] = rand(1, 20); // Generar números aleatorios entre 1 y 20
        }
        return $conjunto;
    }

    // Método público para obtener los datos del conjunto
    public function getDatos() {
        return $this->datos;
    }

    // Método público para obtener el tamaño del conjunto
    public function getTamano() {
        return $this->tamano;
    }

    // Método estático para obtener la intersección de dos conjuntos
    public static function interseccion($conjunto1, $conjunto2) {
        return array_values(array_intersect($conjunto1->getDatos(), $conjunto2->getDatos()));
    }

    // Método estático para obtener la unión de dos conjuntos
    public static function union($conjunto1, $conjunto2) {
        return array_values(array_unique(array_merge($conjunto1->getDatos(), $conjunto2->getDatos())));
    }

    // Método estático para obtener la diferencia entre dos conjuntos
    public static function diferencia($conjunto1, $conjunto2) {
        return array_values(array_diff($conjunto1->getDatos(), $conjunto2->getDatos()));
    }
}
?>
