<?php
header("Content-type: application/json");
require 'https://github.com/SaloniSharmaMitAoe/Assignment-4/Data.php';
// include 'Data.php';

$req = $_GET['req'] ?? null;

if ($req) {
    $jsonData = file_get_contents("https://github.com/SaloniSharmaMitAoe/Assignment-4/restaurant.json");
    $dataList = json_decode($jsonData, true)['menu_items'];
    try {
        $menuData = new RestaurantData($dataList);
    } catch (Exception $th) {
        echo json_encode([$th->getMessage()]);
        return;
    }
}

switch ($req) {
    case 'name_list':
        echo $menuData->getItemName();
        break;

    case "name_data":
        $id = $_GET['id'] ?? null;
        echo $menuData->getMenuById($id);
        break;

    default:
        echo json_encode(["In-valid request"]);
        break;
}

?>
