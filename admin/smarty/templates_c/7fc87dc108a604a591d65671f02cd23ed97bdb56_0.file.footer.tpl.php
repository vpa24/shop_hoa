<?php
/* Smarty version 3.1.30, created on 2018-01-07 15:22:29
  from "C:\wamp64\www\shop_hoa-master\admin\smarty\templates\layouts\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a523b358011f8_10011927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fc87dc108a604a591d65671f02cd23ed97bdb56' => 
    array (
      0 => 'C:\\wamp64\\www\\shop_hoa-master\\admin\\smarty\\templates\\layouts\\footer.tpl',
      1 => 1515338546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a523b358011f8_10011927 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="public/js/jquery.number.min.js"><?php echo '</script'; ?>
>
  <!-- Custom scripts for all pages-->
  <?php echo '<script'; ?>
 src="public/js/sb-admin.min.js"><?php echo '</script'; ?>
>
  <!-- Custom scripts for this page-->
  <?php echo '<script'; ?>
 src="public/js/sb-admin-datatables.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="public/js/Chart.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="public/js/app.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="public/js/doanh_thu_theo_ngay.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="public/js/doanh_thu_theo_tuan.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="public/js/doanh_thu_theo_thang.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="public/js/doanh_thu_theo_quy.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="public/js/sl_theo_tuan.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="public/js/accounting.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="public/js/cbpFWTabs.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    (function() {

      [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
        new CBPFWTabs( el );
      });

    })();
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    $('#price').number(true);
    $('#gia_khuyen_mai').number(true);
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
  $(document).ready(function () {

    $("#dt1").datepicker({
        dateFormat: "dd-M-yy",
        minDate: 0,
        onSelect: function (date) {
            var dt2 = $('#dt2');
            var startDate = $(this).datepicker('getDate');
            var minDate = $(this).datepicker('getDate');
            dt2.datepicker('setDate', minDate);
            startDate.setDate(startDate.getDate() + 30);
            //sets dt2 maxDate to the last day of 30 days window
            dt2.datepicker('option', 'maxDate', startDate);
            dt2.datepicker('option', 'minDate', minDate);
            $(this).datepicker('option', 'minDate', minDate);
        }
    });
    $('#dt2').datepicker({
        dateFormat: "dd-M-yy"
    });
});
  <?php echo '</script'; ?>
>
  </div>
</body>

</html>
<?php }
}
