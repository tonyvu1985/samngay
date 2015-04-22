<div class="row" id="carousel-samngay">
	<div class="col-sm-6 col-md-3"><!-- col 1 -->
		<div class="thumbnail">
			<img alt="Apple Watch" src="<?php echo get_bloginfo('url') . '/wp-content/uploads/2015/04/apple.png' ?>" data-holder-rendered="true">
			<div class="caption">
				<h3 id="thumbnail-label">Apple Watch & Macbook pro 2015</h3>
				<p>Sản phẩm công nghệ mới nhất của Apple</p>
				<a href="<?php echo get_bloginfo('url') . '/product-category/product-category/dien-tu/' ?>" class="btn btn-default">Xem ngay</a>
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-md-3"><!-- col 2 -->
		<div class="thumbnail">
			<img alt="sukin" src="<?php echo get_bloginfo('url') . '/wp-content/uploads/2015/03/bnSukin.png' ?>" data-holder-rendered="true">
			<div class="caption">
				<h3 id="thumbnail-label">Sukin</h3>
				<p>Mặt nạ, kem dưỡng ẩm cho da mặt, sữa rửa mặt...</p>
				<a href="<?php echo get_bloginfo('url') . '/product-category/cham-soc-da/?filter_nhan-hieu=63' ?>" class="btn btn-default">Xem ngay</a>
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-md-3"><!-- col 3 -->
		<div class="thumbnail">
			<img alt="Neutrogena Naturals" src="<?php echo get_bloginfo('url') . '/wp-content/uploads/2015/03/bnNeutrogena-Naturals.png' ?>" data-holder-rendered="true">
			<div class="caption">
				<h3 id="thumbnail-label">Neutrogena Naturals</h3>
				<p>Sữa rửa mặt, kem dưỡng ẩm, kem chống nắng...</p>
				<a href="<?php echo  get_bloginfo('url') . '/product-category/cham-soc-da/?filter_nhan-hieu=61' ?>" class="btn btn-default">Xem ngay</a>
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-md-3"><!-- col 4 -->
		<div class="thumbnail">
			<img alt="Nude by nature" src="<?php echo get_bloginfo('url') . '/wp-content/uploads/2015/03/bnNude.png' ?>" data-holder-rendered="true">
			<div class="caption">
				<h3 id="thumbnail-label">Dòng sản phẩm son môi</h3>
				<p>Son môi nước, son dưỡng môi, son môi khoáng chất ...</p>
				<a href="<?php echo  get_bloginfo('url') . '/product-category/my-pham/moi/' ?>" class="btn btn-default">Xem ngay</a>
			</div>
		</div>
	</div>
</div>
	<!-- hide carousel -->
<?php if(false) :?>
<div id="carousel-samngay" class="carousel slide" data-ride="carousel" data-interval="6000">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-samngay" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-samngay" data-slide-to="1"></li>
    <li data-target="#carousel-samngay" data-slide-to="2"></li>
    <li data-target="#carousel-samngay" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo get_bloginfo('url') . '/wp-content/uploads/2015/04/apple.png' ?>" alt="Apple Watch">
       <div class="carousel-caption">
            <h3>Apple Watch & Macbook pro 2015</h3>
            <p>Sản phẩm công nghệ mới nhất của Apple<br/><span style="color:#ff4800;">Có hàng từ 24.04.2015</span></p>
		<a href="<?php echo get_bloginfo('url') . '/product-category/product-category/dien-tu/' ?>" class="btn btn-info button">Xem chi tiết</a>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo get_bloginfo('url') . '/wp-content/uploads/2015/03/bnSukin.png' ?>" alt="Sukin">
       <div class="carousel-caption">
            <h3>Sukin</h3>
            <p>Mặt nạ, kem dưỡng ẩm cho da mặt, sữa rửa mặt...</p>
		<a href="<?php echo get_bloginfo('url') . '/product-category/cham-soc-da/?filter_nhan-hieu=63' ?>" class="btn btn-info button">Xem chi tiết</a>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo get_bloginfo('url') . '/wp-content/uploads/2015/03/bnNeutrogena-Naturals.png' ?>" alt="Neutrogena Naturals">
      <div class="carousel-caption">
		<h3>Neutrogena Naturals</h3>
		<p>Sữa rửa mặt, kem dưỡng ẩm chống nết nhăn ban đêm, kem chống nắng...</p>
		<a href="<?php echo  get_bloginfo('url') . '/product-category/cham-soc-da/?filter_nhan-hieu=61' ?>" class="btn btn-info button">Xem chi tiết</a>
      </div>
	</div>
    <div class="item">
      <img src="<?php echo get_bloginfo('url') . '/wp-content/uploads/2015/03/bnNude.png' ?>" alt="Nude by nature">
      <div class="carousel-caption">
		<h3>Dòng sản phẩm son môi</h3>
		<p>Son môi nước, son dưỡng môi, son môi khoáng chất ...</p>
		<a href="<?php echo  get_bloginfo('url') . '/product-category/my-pham/moi/' ?>" class="btn btn-info button">Xem chi tiết</a>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-samngay" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-samngay" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php endif; ?>
