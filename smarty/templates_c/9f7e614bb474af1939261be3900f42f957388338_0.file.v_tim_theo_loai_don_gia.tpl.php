<?php
/* Smarty version 3.1.30, created on 2017-12-18 04:33:17
  from "C:\wamp64\www\shop_hoa-master\views\hoa\v_tim_theo_loai_don_gia.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a37450df3e052_15686062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f7e614bb474af1939261be3900f42f957388338' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\views\\hoa\\v_tim_theo_loai_don_gia.tpl',
      1 => 1513571594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a37450df3e052_15686062 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-left sidebar col-lg-3 col-md-3 col-sm-3 col-xs-12 left-color color f-left">
    <div class="anav-container">
        <div class="block block-anav">
            <ul class="magictabs">
                <li class="item active loaded single">
                    <span class="title">Tìm theo loại sản phẩm</span>
                </li>
            </ul>
            <ul class="nav-accordion left">
                <ul class="level0" style="display: block;">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doc_loai_hoa']->value, 'loai_hoa');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['loai_hoa']->value) {
?>
                    <li>
                        <a href="loai-hoa/<?php echo makeURL($_smarty_tpl->tpl_vars['loai_hoa']->value->TenLoai);?>
-<?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->MaLoai;?>
">
                            <span><?php echo $_smarty_tpl->tpl_vars['loai_hoa']->value->TenLoai;?>
</span>
                        </a>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            </ul>
        </div>
        <div class="block block-layered-nav block-layered-nav--no-filters">
            <ul class="magictabs">
                <li class="item active loaded single">
                    <span class="title">Tìm theo giá</span>
                </li>
            </ul>
            <div class="block-content toggle-content1">
                <div id="narrow-by-list">
                    <dl class="narrow-by">
                        <dl class="narrow-by">
                            <dt class="odd">Giá bán</dt>
                            <dt class="toggle-tab mobile even" style="display:none"></dt>
                            <dd class="Giá bán toggle-content odd">
                                <ol>
                                    <li class="tim_theo_gia">
                                        <a href="http://www.hoa18.com/vn/shop-hoa-tp-ho-chi-minh-ha-noi/hoa-tuoi-chuc-mung-khai-truong?price=-1000000">
                                            <span class="price">0&nbsp;₫</span> -
                                            <span class="price"><?php echo number_format(500000);?>
&nbsp;₫</span>
                                            <span class="count">(25)</span>
                                        </a>
                                    </li>
                                    <li class="tim_theo_gia">
                                        <a href="http://www.hoa18.com/vn/shop-hoa-tp-ho-chi-minh-ha-noi/hoa-tuoi-chuc-mung-khai-truong?price=-1000000">
                                            <span class="price"><?php echo number_format(500000);?>
&nbsp;₫</span> -
                                            <span class="price"><?php echo number_format(1000000);?>
&nbsp;₫</span>
                                            <span class="count">(25)</span>
                                        </a>
                                    </li>
                                </ol>
                            </dd>
                        </dl>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
