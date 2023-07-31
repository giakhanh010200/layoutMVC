<!-- lấy url trên thanh địa chỉ -->
<?php
class App {
    protected $controller = "Home";
    protected $unknown_page = "404.html";
    protected $action = "main";
    protected $param = [];
    function __construct() {
        $arr = $this -> UrlProcessing();
        //Xử lí Controller
        if(file_exists("./mvc/controller/".$arr[0].".php")){
            $this->controller = $arr[0];
            require_once("./mvc/controller/".$arr[0].".php");
            unset($arr[0]);
        }
        else if ($arr[0] == ""){
            require_once "./mvc/controller/".$this->controller.".php";
            
        }
        else{
            $this->controller = "";
            require_once "./mvc/view/".$this->unknown_page;
        }
        // $this->controller = new $this->controller;

        // Xử lí Action 
        if (isset($arr[1])){
            if (method_exists($this->controller, $arr[1])){
                $this -> action = $arr[1];
            }
            else {
                $this->action="";
                require_once "./mvc/view/".$this->unknown_page;
            }
            unset($arr[1]);
        }
        else{
            $this->action = "main";
        }
        // xử lý param
        $this->param = $arr ? array_values($arr) : []; 
        // gọi hàm từ controller
        if ($this->controller != "" && $this->action != ""){
            $result = new $this->controller; 
            call_user_func_array([$result, $this->action],$this->param); 
        }
        
    }
    function UrlProcessing(){
        if(isset($_GET['url'])){
           return explode("/",filter_var(trim($_GET['url'])));
           
        }
    }
}


?>