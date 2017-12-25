<?php
session_start();
class C_hoa
{
    public function hien_thi_trang_hoa()
    {
        include("c_data_contact.php");
        include("models/m_hoa.php");
        $m_hoa = new M_hoa();
        $doc_hoa = $m_hoa->doc_tat_ca_hoa();
        $doc_loai_hoa = $m_hoa->doc_loai_hoa();
        include("Pager.php");
        $p=new pager();
        $limit=9;
        $count=count($doc_hoa);
        $pages=$p->findPages($count, $limit);
        $vt=$p->findStart($limit);
        $curpage=$_GET["page"];
        $phan_trang=$p->pageList($curpage, $pages);
        $doc_hoa = $m_hoa->doc_tat_ca_hoa($vt, $limit);
        include("URL.php");
        include("Smarty_shop_hoa.php");
        $smarty = new Smarty_Shop_Hoa();
        $title = "Danh sách hoa";
        $view = "views/v_hoa.tpl";
        if (isset($_GET['loai_hoa'])) {
            $ten_loai=$m_hoa->doc_ten_loai_hoa($_GET['loai_hoa'])->TenLoai;
            $smarty->assign('ten_loai', $ten_loai);
        }
        include("c_smarty_info.php");
        $smarty->assign('doc_hoa', $doc_hoa);
        $smarty->assign('doc_loai_hoa', $doc_loai_hoa);
        $smarty->assign('phan_trang', $phan_trang);
        $smarty->display("layout.tpl");
    }
}
