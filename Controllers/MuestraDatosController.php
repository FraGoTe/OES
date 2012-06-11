<?php

class MuestraDatos {

    public function UploadImage($_POST,$_FILES,$_SERVER) {
        session_start();
        $path = "../../Public/images/Fotos/";
        $valid_formats = array("jpg", "png", "gif", "bmp", "jpeg");
        if (isset($_POST) && $_SERVER['REQUEST_METHOD'] == "POST") {
            $name = $_FILES['photoimg']['name'];
            $size = $_FILES['photoimg']['size'];
            if (strlen($name)) {
                list($txt, $ext) = explode(".", $name);
                if (in_array($ext, $valid_formats)) {
                    if ($size < (1024 * 1024)) { // Image size max 1 MB
                        $actual_image_name = $_SESSION['usucod']. "." . $ext;
                        $tmp = $_FILES['photoimg']['tmp_name'];
                        if (move_uploaded_file($tmp, $path . $actual_image_name)) {
                            echo "<img width='130' height='150' src='../../Public/images/Fotos/" . $actual_image_name . "' class='preview'>";
                        }
                        else
                            echo "Fallido";
                    }
                    else
                        echo "La foto debe ser como m&aacute;ximo de 1 MB";
                }
                else
                    echo "Formato In&aacute;lido..";
            }
            else
                echo "Seleccione una imagen..!";
            exit;
        }
    }

}

?>
