<?php
require_once("database.php");
class M_thong_ke_san_pham extends database
{
    function theo_ngay(){
        $sql = "select * from slider ORDER BY ThoiGian DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    function theo_tuan(){
      $sql="SELECT week(ngay_dat)as tuan,sum(so_luong) as so_luong_ban FROM shop_hoa.chi_tiet_hoa_don inner join hoa_don on hoa_don.ma_hoa_don=chi_tiet_hoa_don.ma_hoa_don WHERE MONTH(ngay_dat) = MONTH(CURRENT_DATE())
AND YEAR(ngay_dat) = YEAR(CURRENT_DATE()) group by week(ngay_dat)";
      $this->setQuery($sql);
      return $this->loadAllRows();
    }

}

?>
