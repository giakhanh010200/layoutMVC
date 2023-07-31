<?php
class Home extends Controller{
    
    function main(){
        $name = $this->model("SinhVienModel");
        echo $name -> GetSV();
    }
    
    function show($a, $b){
        //model
        $data = $this->model("SinhVienModel");
        $tong = $data-> Tong($a,$b);
        //view
        $this->view("main_layout",[
            "tong"=>$tong,
            "page"=>"news",
            'SV' => $data->SinhVien()
            ]);
    }

    function name($ho, $ten){
        echo $ho . " - " . $ten;
    }
}
?>