<?php
$ruta = parse_url( $_SERVER['REQUEST_URI'] );

if ( isset( $ruta["query"] ) ) {

    if ( $ruta["query"] == "ctrRegCarpeta" ||
         $ruta["query"] == "ctrEditCarpeta" ||
         $ruta["query"] == "ctrEliCarpeta"
       ){
        $metodo = $ruta["query"];
        $carpeta = new ControladorCarpeta();
        $carpeta->$metodo();
    }
}

class ControladorCarpeta {

    static public function ctrInfoCarpetas() {
        $respuesta = ModeloCarpeta::mdlInfoCarpetas();
        return $respuesta;
    }

    static public function ctrRegCarpeta(){
        require_once "../modelo/carpetaModelo.php";

        $nomCarpeta = trim($_POST["nomCarpeta"]);
        
         if (empty($_FILES['file']['name'])) {
        } else {
            foreach ($datos as $row) {
                $countfiles = count($_FILES['file']['name']);
                $ruta = "../assets/img/" . $row["id_carpeta"] . "/";
                $files_arr = array();

                if (!file_exists($ruta)) {
                    mkdir($ruta, 0777, true);
                }

                for ($index = 0; $index < $countfiles; $index++) {
                    $nombre = $_FILES['file']['tmp_name'][$index];
                    $destino = $ruta . $_FILES['file']['name'][$index];

                    $producto->insert_imagenes($row["id_carpeta"], $_FILES['file']['name'][$index]);

                    move_uploaded_file($nombre, $destino);
                }
            }
        }
        echo json_encode($datos);

        $data = array(
            "nombre_carpeta"=>$nomCarpeta,
            
        );

        $respuesta = ModeloCarpeta::mdlRegCarpeta($data);

        echo $respuesta;
    }


    static public function ctrEditCarpeta() {

        require_once "../modelo/carpetaModelo.php";

            $idCarpeta = trim($_POST["idCarpeta"]);
            $nomCarpeta = trim($_POST["nomCarpeta"]);


        $data = array(
            "idCarpeta"=>$_POST["idCarpeta"],
            "nombre_carpeta"=>$_POST["nomCarpeta"]

        );

        $respuesta = ModeloCarpeta::mdlEditCarpeta( $data );
        echo $respuesta;
    }
    
      static public function ctrInfoCarpeta( $id ) {
    $respuesta = ModeloCarpeta::mdlInfoCarpeta( $id );
    return $respuesta;
  }
    
    static public function ctrEliCarpeta(){
        require "../modelo/carpetaModelo.php";
        $data = $_POST["id"];

        $respuesta = ModeloCarpeta::mdlEliCarpeta($data);

        echo $respuesta;
    }
    
    //Archivos
     static public function ctrInfoArchivos() {
        $respuesta = ModeloCarpeta::mdlInfoArchivos();
        return $respuesta;
    }

}
