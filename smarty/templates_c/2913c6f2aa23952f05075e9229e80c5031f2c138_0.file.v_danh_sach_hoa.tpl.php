<?php
/* Smarty version 3.1.30, created on 2017-12-22 12:17:48
  from "C:\wamp\www\shop_hoa-master\views\hoa\v_danh_sach_hoa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3ce9dc623809_37217111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2913c6f2aa23952f05075e9229e80c5031f2c138' => 
    array (
      0 => 'C:\\wamp\\www\\shop_hoa-master\\views\\hoa\\v_danh_sach_hoa.tpl',
      1 => 1513884612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3ce9dc623809_37217111 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-main col-lg-9 col-md-9 col-sm-9 col-xs-12 content-color color f-right">
    <div class="category-products">
        <ul class="products-grid row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_hoa']->value, 'hoa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hoa']->value) {
?>
            <li class="item">
                <div class="category-products-grid">
                    <div class="images-container">
                        <div class="product-hover">
                            <a href="san-pham/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa_URL;?>
-<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
" class="product-image">
                                <img class="img-responsive hinh_hoa" src="public/images/hoa/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->Hinh;?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
">
                            </a>
                        </div>
                        <h2 class="product-name">
                        <a href="san-pham/<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa_URL;?>
-<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
"><?php echo $_smarty_tpl->tpl_vars['hoa']->value->TenHoa;?>
</a>
                        </h2>
                        <div class="actions-no hover-box">
                            <div class="actions">
                                <div class="price-box">
                                    <a class="minimal-price-link">
                                        <span class="mua_online">Mua online:</span>
                                        <span class="price" id="product-minimal-price-2678"><?php ob_start();
echo $_smarty_tpl->tpl_vars['hoa']->value->Gia;
$_prefixVariable1=ob_get_clean();
echo number_format($_prefixVariable1);?>
 ₫</span>
                                    </a>
                                </div>
                            </div>
                            <div class="actions-cart">
                              <?php if (isset($_SESSION['tong_gio_hang'])) {?>
                                <a  onclick="chuyen_huong_gio_hang(<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
,<?php echo $_SESSION['tong_gio_hang'];?>
,<?php echo $_smarty_tpl->tpl_vars['hoa']->value->SoLuongSP;?>
)" href="javascript:void(0)"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a>
                              <?php } else { ?>
                                  <a  onclick="chuyen_huong_gio_hang(<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
,0,<?php echo $_smarty_tpl->tpl_vars['hoa']->value->SoLuongSP;?>
)" href="javascript:void(0)"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a>
                              <?php }?>
                        </div>
                    </div>
                </div>
            </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
    </div>
    <div class="bsm_products_pagination" >
   <?php echo $_smarty_tpl->tpl_vars['phan_trang']->value;?>

</div>
<?php }
}
