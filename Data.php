<?php

class RestaurantData {

    private $menuList;

    function __construct(array $menuList) {
        if (sizeof($menuList)>0) {
            $this->menuList = $menuList;
        } else {
            throw new Exception("No Student record available");
        }
    }

    public function getItemName() {
        $menuNameList = [];

        foreach($this->menuList as $menu) {
            $menuNameList[] = array(
                "id"=>$menu['id'],
                "name"=>$menu['name']
            );
        }

        return json_encode($menuNameList);
    }

    public function getMenuById($id) {
        $response = ["In-Valid ID"];
        if($id) {
            foreach($this->menuList as $menu) {
                if ($id == $menu['id']) {
                    $response = $menu;
                    break;
                }
            }
        }
        return json_encode($response);
    }

}
?>
