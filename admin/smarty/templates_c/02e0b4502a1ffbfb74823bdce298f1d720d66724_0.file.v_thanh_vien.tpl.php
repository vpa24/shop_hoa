<?php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
/* Smarty version 3.1.30, created on 2018-01-17 14:22:06
=======
/* Smarty version 3.1.30, created on 2018-01-13 10:44:43
>>>>>>> ecb47bcaeeda9a0ea3b2a6fb628cd60df7506547
=======
/* Smarty version 3.1.30, created on 2018-01-13 10:44:43
>>>>>>> ecb47bcaeeda9a0ea3b2a6fb628cd60df7506547
=======
/* Smarty version 3.1.30, created on 2018-01-13 10:44:43
>>>>>>> ecb47bcaeeda9a0ea3b2a6fb628cd60df7506547
  from "C:\wamp64\www\shop_hoa-master\admin\views\v_thanh_vien.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
  'unifunc' => 'content_5a5f5c0e0b92a0_19341043',
=======
  'unifunc' => 'content_5a59e31b027e24_38639530',
>>>>>>> ecb47bcaeeda9a0ea3b2a6fb628cd60df7506547
=======
  'unifunc' => 'content_5a59e31b027e24_38639530',
>>>>>>> ecb47bcaeeda9a0ea3b2a6fb628cd60df7506547
=======
  'unifunc' => 'content_5a59e31b027e24_38639530',
>>>>>>> ecb47bcaeeda9a0ea3b2a6fb628cd60df7506547
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02e0b4502a1ffbfb74823bdce298f1d720d66724' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\views\\v_thanh_vien.tpl',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
      1 => 1516198921,
=======
      1 => 1515762910,
>>>>>>> ecb47bcaeeda9a0ea3b2a6fb628cd60df7506547
=======
      1 => 1515762910,
>>>>>>> ecb47bcaeeda9a0ea3b2a6fb628cd60df7506547
=======
      1 => 1515762910,
>>>>>>> ecb47bcaeeda9a0ea3b2a6fb628cd60df7506547
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
function content_5a5f5c0e0b92a0_19341043 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5a59e31b027e24_38639530 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> ecb47bcaeeda9a0ea3b2a6fb628cd60df7506547
=======
function content_5a59e31b027e24_38639530 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> ecb47bcaeeda9a0ea3b2a6fb628cd60df7506547
=======
function content_5a59e31b027e24_38639530 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> ecb47bcaeeda9a0ea3b2a6fb628cd60df7506547
?>

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <div class="row">
            <div class="col col-6">
              <i class="fa fa-table"></i> Danh sách thành viên
            </div>
            <div class="col col-6">
              <a href="them_thanh_vien.php" class="btn btn-success float-right" target="_blank">Thêm thành viên mới</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Tài khoản</th>
                  <th>Tên</th>
                  <th>Quyền</th>
                  <th>Hành động</th>
                </tr>
              </thead>
              <tbody>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['thanh_viens']->value, 'thanh_vien');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['thanh_vien']->value) {
?>
                <tr id="delete<?php echo $_smarty_tpl->tpl_vars['thanh_vien']->value->ID;?>
">
                  <td><?php echo $_smarty_tpl->tpl_vars['thanh_vien']->value->TaiKhoan;?>
</td>
                  <td><?php echo $_smarty_tpl->tpl_vars['thanh_vien']->value->HoTen;?>
</td>
                  <td><?php if ($_smarty_tpl->tpl_vars['thanh_vien']->value->permission == 1) {?>Admin<?php } else { ?>Thành viên<?php }?></td>
                  <td><?php if ($_smarty_tpl->tpl_vars['thanh_vien']->value->permission != 1) {?>
                      <button type="button" class="btn btn-primary" onclick="getId(<?php echo $_smarty_tpl->tpl_vars['thanh_vien']->value->ID;?>
)" id="update<?php echo $_smarty_tpl->tpl_vars['thanh_vien']->value->id;?>
" data-toggle="modal" data-target="#edit<?php echo $_smarty_tpl->tpl_vars['thanh_vien']->value->ID;?>
" >Sửa</button>
                      <button type="button" onclick="deleteAjax(<?php echo $_smarty_tpl->tpl_vars['thanh_vien']->value->ID;?>
)" class="btn btn-danger">Xóa</button>
                      <?php } else { ?>
                      <button type="button" class="btn btn-primary" onclick="getId(<?php echo $_smarty_tpl->tpl_vars['thanh_vien']->value->ID;?>
)" id="update<?php echo $_smarty_tpl->tpl_vars['thanh_vien']->value->id;?>
" data-toggle="modal" data-target="#edit<?php echo $_smarty_tpl->tpl_vars['thanh_vien']->value->ID;?>
" >Sửa</button>
                      <?php }?>
                  </td>
                </tr>
                
                <div class="modal fade" id="edit<?php echo $_smarty_tpl->tpl_vars['thanh_vien']->value->ID;?>
" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document" style="max-width: 875px;">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Chi tiết<?php echo $_smarty_tpl->tpl_vars['thanh_vien']->value->HoTen;?>
</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="POST">
                          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['thanh_vien']->value->ID;?>
">
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Tài khoản:</label>
                            <input type="text" class="form-control" name="tai_khoan" value="<?php echo $_smarty_tpl->tpl_vars['thanh_vien']->value->TaiKhoan;?>
" disabled>
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Quyền:</label>
                            <select class="form-control" name="permission">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                                <option <?php if ($_smarty_tpl->tpl_vars['thanh_vien']->value->permission == 1) {?> selected="selected" <?php }?> value="1">Admin</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['thanh_vien']->value->permission == 0) {?> selected="selected" <?php }?>  value="0">QL Đơn Hàng</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['thanh_vien']->value->permission == 2) {?> selected="selected" <?php }?>  value="2">QL Sản Phẩm</option>
=======
=======
>>>>>>> ecb47bcaeeda9a0ea3b2a6fb628cd60df7506547
=======
>>>>>>> ecb47bcaeeda9a0ea3b2a6fb628cd60df7506547
                                <option value="<?php echo $_smarty_tpl->tpl_vars['thanh_vien']->value->permission;?>
"><?php if ($_smarty_tpl->tpl_vars['thanh_vien']->value->permission == 1) {?>Admin<?php } else { ?>Thành viên<?php }?></option>
                                <option value="1">Admin</option>
                                <option value="0">Thành viên</option>
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ecb47bcaeeda9a0ea3b2a6fb628cd60df7506547
=======
>>>>>>> ecb47bcaeeda9a0ea3b2a6fb628cd60df7506547
=======
>>>>>>> ecb47bcaeeda9a0ea3b2a6fb628cd60df7506547
                            </select>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-success" name="btn_update" id="checkUpdate<?php echo $_smarty_tpl->tpl_vars['hoa']->value->MaHoa;?>
">Cập nhật</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                

              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

              </tbody>
            </table>
          </div>
        </div>
  
    <?php echo '<script'; ?>
 src="public/js/ajax/ajax_delete_thanh_vien.js"><?php echo '</script'; ?>
>
    <?php if (isset($_SESSION['thongBao'])) {?>
      <?php echo '<script'; ?>
>swal("<?php echo $_SESSION['thongBao'];?>
");<?php echo '</script'; ?>
>
    <?php }?>
    <?php if (isset($_SESSION['thongBaoThanhCong'])) {?>
      <?php echo '<script'; ?>
>
          swal({
            title: "Thành công!",
            text: "<?php echo $_SESSION['thongBaoThanhCong'];?>
!",
            icon: "success"
            }).then(function() {
                window.location = "thanh_vien.php";
            });
      <?php echo '</script'; ?>
>
    <?php }
}
}
