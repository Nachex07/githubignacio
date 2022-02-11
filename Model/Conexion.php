<?php
    class Conexion {
        private $conexion;

        public function __construct() {
            $this->conexion   = new mysqli("107.180.41.237", "usuariolatina05", "!0832", "grupo05");    
        }
    
        public function ejecutar(string $sentencia) {
            $query = $this->conexion->query($sentencia);
            $resultado = [];
            $i = 0;
            while ($fila = $query->fetch_array(MYSQLI_BOTH)) {
                $resultado[$i++] = $fila;
            }
            $query->free();
            return $resultado;
        }


        public function insertar(string $sentencia){
            $this->conexion->query($sentencia);
            
        }

        public function eliminar(string $sentencia){
            $this->conexion->query($sentencia);
            
        }

        public function actualizar(string $sentencia){
            $this->conexion->query($sentencia);
        }

        public function cargartabla(string $sentencia){

            $this->conexion->query($sentencia);

            $resultado =  mysqli_query($this->conexion,$sentencia);

            return $resultado;
        }
   }

?>