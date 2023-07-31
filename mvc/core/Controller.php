<!-- gọi và quyết định phần view và model được hiển thị  -->
<?php
class Controller{
    public function model($model){
        require_once "./mvc/model/".$model.".php";
        return new $model;
    }

    public function view($view, $data = []){
        require_once "./mvc/view/".$view.".php";
    }
}
?>