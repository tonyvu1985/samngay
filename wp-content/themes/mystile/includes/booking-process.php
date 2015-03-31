<?php 
	// define steps in current page
	if (is_product()){
		$step2 ="disabled";
		$step3 ="disabled";
		$step4 ="disabled";
		$status_step2="process_status_hide";
		$status_step3="process_status_hide";
		$status_step4="process_status_hide";
	}
	else if(is_cart()){
		$step2 ="active";
		$step3 ="disabled";
		$step4 ="disabled";
		$status_step1="process_status_hide";
		$status_step3="process_status_hide";
		$status_step4="process_status_hide";
	}
	else if(is_checkout()){
		$step2 ="complete";
		$step3 ="active";
		$step4 ="disabled";
		$status_step1="process_status_hide";
		$status_step2="process_status_hide";
		$status_step4="process_status_hide";
	}

?>
<div class="container">
    <div class="row smpl-step" style="border-bottom: 0; min-width: 500px;margin-top:0">
        <div class="col-xs-3 smpl-step-step complete">
<!--            <div class="text-center smpl-step-num">Step 1</div>-->
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <p class="smpl-step-icon" style="font-size: 30px; padding-left: 15px; padding-top: 12px;">1</p>
            <div class="smpl-step-info text-left <?php echo $status_step1; ?>">
		<p><span style="color:#D60059">"MUA NGAY"</span> để thêm sản phẩm vào giỏ hàng</p>
		</div>
        </div>

        <div class="col-xs-3 smpl-step-step <?php echo $step2; ?>">           
<!--            <div class="text-center smpl-step-num">Step 2</div>-->
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <a class="smpl-step-icon" style="font-size: 30px; padding-left: 16px; padding-top: 12px;">2</a>
            <div class="smpl-step-info text-left <?php echo $status_step2; ?>">
		<p>2.1. Sửa số lượng của từng sản phẩm và ấn <span style="color:#D60059">"Cập nhật giỏ hàng"</span></p>
		<p>2.2. Ấn <i class="icon-remove-sign"></i> bên trái của sản phẩm để loại sản phẩm ra khỏi giỏ hàng</p>  
		2.3. Ấn <span style="color:#D60059">"Tiếp tục"</span> để nhập thông tin chi tiết về khách hàng
		</div>
        </div>
        <div class="col-xs-3 smpl-step-step <?php echo $step3; ?>">          
<!--            <div class="text-center smpl-step-num">Step 3</div>-->
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <a class="smpl-step-icon" style="font-size: 30px; padding-left: 16px; padding-top: 12px;">3</a>
            <div class="smpl-step-info text-left <?php echo $status_step3; ?>">
		<p>3.1. <span style="color:#D60059">"Ấn vào đây để đăng nhập"</span> nếu bạn có tài khoản của Sắm Ngay hoặc nhập <span style="color:#D60059">"Chi tiết đơn hàng"</span></p> 
		<p>3.2. Chọn hình thức thanh toán <span style="color:#D60059">"Chuyển khoản ngân hàng"</span> hoặc <span style="color:#D60059">"Trả tiền mặt khi nhận hàng"</span></p>
		<p>3.3. Ấn <span style="color:#D60059">"Hoàn tất đặt hàng"</span> để hoàn thành quy trình mua hàng</p>
		</div>
        </div>
        <div class="col-xs-3 smpl-step-step <?php echo $step4; ?>">           
<!--            <div class="text-center smpl-step-num">Step 4</div>-->
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <a class="smpl-step-icon" style="font-size: 30px; padding-left: 15px; padding-top: 12px;">4</a>
            <div class="smpl-step-info text-center <?php echo $status_step4; ?>"><span style="color:#D60059">"Hoàn tất"</span></div>
        </div>
    </div>
</div>

<style>
.process_status_hide{opacity:0.5; filter: alpha(opacity=50);}
.smpl-step {margin-top: 40px;}
.smpl-step {border-bottom: solid 1px #e0e0e0; padding: 0 0 10px 0;}
.smpl-step > .smpl-step-step {padding: 0; position: relative;}   
.smpl-step > .smpl-step-step .smpl-step-num {font-size: 17px; margin-top: -20px; margin-left: 47px;}
.smpl-step > .smpl-step-step .smpl-step-info {font-size: 13px; padding: 30px 5px 30px 10px;}
.smpl-step > .smpl-step-step > .smpl-step-icon {position: absolute; width: 50px; height: 50px; display: block; background: #D60059; top: 45px; left: 50%; margin-top: -35px; margin-left: -15px; border-radius: 50%; color:#fff;}
.smpl-step > .smpl-step-step > .progress {position: relative; border-radius: 0px; height: 5px; box-shadow: none; margin-top: 37px;}
.smpl-step > .smpl-step-step > .progress > .progress-bar {width: 0px; box-shadow: none; background: #3e3e3e;}
.smpl-step > .smpl-step-step.complete > .progress > .progress-bar {width: 100%;}
.smpl-step > .smpl-step-step.active > .progress > .progress-bar {width: 50%;}
.smpl-step > .smpl-step-step:first-child.active > .progress > .progress-bar {width: 0%;}
.smpl-step > .smpl-step-step:last-child.active > .progress > .progress-bar {width: 100%;}
.smpl-step > .smpl-step-step.disabled > .smpl-step-icon {background-color: #eee;}
.smpl-step > .smpl-step-step.disabled > .smpl-step-icon:after {opacity: 0;}
.smpl-step > .smpl-step-step:first-child > .progress {left: 50%; width: 50%;}
.smpl-step > .smpl-step-step:last-child > .progress {width: 50%;}
.smpl-step > .smpl-step-step.disabled a.smpl-step-icon {pointer-events: none;}
</style>
