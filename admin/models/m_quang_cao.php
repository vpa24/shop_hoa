<?php
require_once("database.php");
class M_quang_Cao extends database
{
    function doc_tat_ca_quang_cao(){
        $sql = "select * from quang_cao ORDER BY ThoiGian DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function doc_quang_cao_theo_id($id){
        $sql = "SELECT * FROM quang_cao WHERE id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    function update_quang_cao($tieuDe,$hinh,$duongDan,$id){
        $sql = "UPDATE quang_cao SET TieuDe=?,Hinh=?,DuongDan=?,ThoiGian=now() WHERE id=?";
        $this->setQuery($sql);
        return $this->execute(array($tieuDe,$hinh,$duongDan,$id));
    }
    public function them_quang_cao(){
        if (isset($_POST["btn_add"])) 
        {
            $tieuDe = $_POST['tieu_de'];
            $duongDan = $_POST['duong_dan'];

            //upload hình
            $target_dir = "../public/images/quang_cao/";
            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            $uploadOk = 1;
            $hinh = "";
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            if (isset($_FILES['hinh']))
            {
                if($_FILES["hinh"]["size"] > 500000){
                    $_SESSION['thongBao'] = "File không được lớn hơn 5MB";
                    $uploadOk = 0;
                }
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ){
                    $_SESSION['thongBao'] = "Không phải file hình";
                    $uploadOk = 0;
                }
                if ($uploadOk == 0) {
                    $_SESSION['thongBao'] = "Upload ảnh bị lỗi";
                }else{
                    if(move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)) {
                        $hinh = $_FILES["hinh"]["name"];
                        $sql = "INSERT INTO quang_cao(TieuDe,Hinh,DuongDan,ThoiGian) VALUES ('$tieuDe', '$hinh', '$duongDan', now())";
                        $this->setQuery($sql);
                        $this->execute();
                        if($this){
                            $_SESSION['thongBaoThanhCong']="Thêm quảng cáo thành công";
                        }
                    } else{
                        $_SESSION['thongBao'] = "Lỗi upload file"; 
                    }
                }
            }
            else{
                echo 'Bạn chưa chọn file upload';
            }
        }
    }
}
?>