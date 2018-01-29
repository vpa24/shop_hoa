<?php
require_once("database.php");
class M_lich_su extends database
{
    function them($ma_hoa,$ma_kh){
        $sql="INSERT INTO  lich_su values(?,?,?)";
        $this->setQuery($sql);
        $param=array(null,$ma_hoa,$ma_kh);
        return $this->execute($param);
    }
    function xoa($ma_hoa,$ma_kh){
        $sql="DELETE FROM lich_su WHERE ma_hoa = ? and ma_khach_hang= ?";
        $this->setQuery($sql);
        $param= array($ma_hoa,$ma_kh);
        return $this->execute($param);
    }
    function xem($ma_kh)
    {
        $sql="select * from lich_su inner join hoa on hoa.MaHoa=lich_su.ma_hoa where ma_khach_hang=? order by id desc limit 1,4";
		$this->setQuery($sql);
	    return $this->loadAllRows(array($ma_kh));
    }
    function xem_tat_ca($ma_kh, $vt=-1, $limit=-1)
    {
        $sql="select * from lich_su inner join hoa on hoa.MaHoa=lich_su.ma_hoa where ma_khach_hang=$ma_kh order by id desc";
        if($vt>=0 && $limit>0){
           $sql.=" limit $vt,$limit";
        }
		$this->setQuery($sql);
	    return $this->loadAllRows();
    }
}
