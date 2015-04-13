<div class="preOrder" style="float:right; text-align:center;">
	<span>5% OFF cho sản phẩm không có trên Sắm Ngay</span><br/>
	<button itype="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalPreOrder">Đặt hàng trước</button>
</div>


<!-- Modal -->
<div class="modal fade" id="myModalPreOrder" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Đặt hàng trước</h4>
	<p class="loigiaithich">Nếu bạn không tìm thấy sản phẩm mình cần mua trên Sắm Ngay, email chi tiết sản phẩm và đường link sản phẩm ở website bạn mua. Sắm Ngay sẽ giảm giá 5% so với giá bạn mua.</p>
      </div>
      <div class="modal-body">
		<form action="<?php echo get_bloginfo('url'); ?>" id="frmPreOrder" method="post">
		<h4>Thông tin khách hàng</h4>
		<div class="row">
			<div class="col-md-6">
				<input type="text" class="form-control" name="name" placeholder="Họ Tên" />
			</div>
			<div class="col-md-6">
				<input type="text" class="form-control" name="phone" placeholder="Điện thoại" />
			</div>
		</div>
		<input type="text" class="form-control" name="address" placeholder="Địa chỉ" />
		<h4 style="margin:20px 0 10px 0; border-top: 1px solid #ddd; padding-top: 20px;">Thông tin sản phẩm bạn cần mua</h4>
		<div class="row">
			<div class="col-md-6">
				<input type="text" class="form-control" name="product" placeholder="Tên sản phẩm">
			</div>
			<div class="col-md-6">
				<input type="text" class="form-control" name="qty" placeholder="Số lượng" />
			</div>
		</div>
		<input type="text" class="form-control" name="link" placeholder="Bạn mua sản phẩm từ trang web nào?" />
      </div>
      <div class="modal-footer">
		<div class="row">
			<div class="col-md-6 text-left">
				<i class="icon icon-spinner icon-2x icon-spin"></i>
			</div>
			<div class="col-md-6 text-right">
				<button type="button" class="btn btn-primary">Đặt hàng</button>
			</div>
		</div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" defer>
    document.getElementById("frmPreOrder").action += "/preOrderPost/";
        var becomeProviderForm = jQuery("#frmbecomeProvider");
        var formBecomeProvider = new VarienForm('frmbecomeProvider');
        jQuery(".btn-submitdetail").bind('click', function(event){
             event.preventDefault();
                if(formBecomeProvider.validator.validate())  {
                     jQuery.ajax({
                             type: "POST",
                             url: becomeProviderForm.attr('action'),
                             dataType: 'json',
                             data: becomeProviderForm.serialize(),
                             success: function(data, textStatus, jqXHR) {
                                     if(data['isSentEmail'] == 1) {
                                       jQuery('#frmbecomeProvider #dialog-box').text(data['text']);
                                        setTimeout(function() {
                                            //jQuery('#dialog-box').fadeOut('fast');
                                            jQuery("#frmbecomeProvider input[type=text], #frmbecomeProvider textarea").val("");
                                        }, 3000); // <-- time in milliseconds
                                     }
                             },
                     });
        }
        });

</script>

