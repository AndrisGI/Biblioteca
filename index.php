<?php
require_once("Config/Config.php");
require_once("Helpers/Helpers.php");
$url = isset($_GET['url']) ? $_GET['url'] : "Home/home";
$arrUrl = explode("/", $url);
$controller = $arrUrl[0];
$methop = $arrUrl[0];
$params = "";
if (isset($arrUrl[1])) {
    if ($arrUrl[1] != "") {
        $methop = $arrUrl[1];
    }
}
if (isset($arrUrl[2])) {
    if ($arrUrl[2] != "") {
        for ($i=2; $i < count($arrUrl); $i++) { 
            $params .= $arrUrl[$i]. ',';
        }
        $params = trim($params, ',');
    }
}
require_once("Libraries/Core/Autoload.php");
require_once("Libraries/Core/Load.php");
/*aqui el index tiene incluidos el footer y el header y por defecto siempre nos enviara a la pestaña de login a menos que ya este una sesion iniciada*/
?>