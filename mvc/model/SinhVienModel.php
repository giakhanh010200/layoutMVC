<?php
class SinhVienModel extends DB{
    public function GetSV(){
        // connect db 
        return "Trịnh Gia Khánh";
    }

    public function Tong($x , $y){
        return $x + $y;
    }
    public function SinhVien(){
        $qr = "SELECT * FROM sinhvien";
        $stmt =  $this->conn->query($qr);
        $publisher = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $publisher;
    }
    /* 

    mã hóa pass
    $password = password_hash($password, PASSWORD_DEFAULT)

    */
}

?> 