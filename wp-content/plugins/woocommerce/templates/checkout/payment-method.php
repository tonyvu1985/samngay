<?php
/**
 * Output a single payment method
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<li class="payment_method_<?php echo $gateway->id; ?>">
	<input id="payment_method_<?php echo $gateway->id; ?>" type="radio" class="input-radio" name="payment_method" value="<?php echo esc_attr( $gateway->id ); ?>" <?php checked( $gateway->chosen, true ); ?> data-order_button_text="<?php echo esc_attr( $gateway->order_button_text ); ?>" />
	<label for="payment_method_<?php echo $gateway->id; ?>">
		<?php echo $gateway->get_title(); ?> <?php echo $gateway->get_icon(); ?>
	</label>
	<?php if ( $gateway->has_fields() || $gateway->get_description() ) : ?>
		<div class="payment_box payment_method_<?php echo $gateway->id; ?>" <?php if ( ! $gateway->chosen ) : ?>style="display:none;"<?php endif; ?>>
			<?php $gateway->payment_fields(); ?>
			<?php if($gateway->id == 'bacs'): ?>
<span style="color:#999">Tên chủ Tài khoản:</span> <strong>Nguyễn Đình Bảo Châu</strong><br/><br/>
1. Agribank, Chợ Lớn, Hồ Chí Minh. Số tài khoản: <span class="sotaikhoan">6220 205 244 870</span><br/><br/>
2. Vietinbank, chi nhánh 6, Hồ Chí Minh. Số tài khoản: <span class="sotaikhoan">1010 1000 4721 216</span><br/><br/>
3. BIDV, Chợ Lớn, Hồ Chí Minh. Số tài khoản: <span class="sotaikhoan">1411 00000 77852</span><br/><br/>
4. Sacombank, Chợ Lớn, Hồ Chí Minh. Số tài khoản: <span class="sotaikhoan">0600 6316 9776</span><br/><br/>
Sau khi chuyển tiền, bạn vui lòng xác nhận việc thanh toán bằng việc gửi mail đến địa chỉ <a href="mailto:samngay@gmail.com">samngay@gmail.com</a> hoặc nhắn tin đến số điện thoại 0963 514 535. Chúng tôi sẽ liên lạc với bạn để xác nhận giao dịch.
			<?php endif; ?>
		</div>
	<?php endif; ?>
</li>
