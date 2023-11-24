<div class="page-content bg-white">
		<!-- Banner  -->
		<div class="dz-bnr-inr style-1 text-center bg-parallax" style="background-image:url('views/assets/images/banner/bnr4.jpg'); background-size:cover; background-position:center;">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1>Danh sách blog</h1>
					<!-- Breadcrumb Row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
							<li class="breadcrumb-item active" aria-current="page">Danh sách blog</li>
						</ul>
					</nav>
					<!-- Breadcrumb Row End -->
				</div>
			</div>
		</div>
		<!-- Banner End -->
		
		<!-- Blog Section -->
		<section class="content-inner">
			<div class="container">
				<div class="row">
					<div class="col-xl-4 col-lg-4 order-lg-1 order-2">
						<aside class="side-bar sticky-top left">
							
							<div class="widget widget_categories">
								<div class="widget-title">
									<h4 class="title">Danh mục</h4>
								</div>
                                <ul>
                                <li class="cat-item"><a href="index.php?act=tintuc&&id=null">Hiển thị tất cả</a></li>
                                    
                                    <?php
                                foreach ($hienthi as $key => $value) {
                            extract($value);
                            
                            ?>
									<li class="cat-item"><a href="index.php?act=tintuc&id=<?php echo $value['id_danhmuc_tintuc'] ?>"><?php echo $value['ten_danhmuc_tintuc'] ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
							
							<div class="widget recent-posts-entry">
								<div class="widget-title">
									<h4 class="title">Bài viết gần đây</h4>
								</div>
								<div class="widget-post-bx">
                                <?php
                                foreach ($top3 as  $top3) {
                            extract($top3);
                            
                            ?>
									<div class="widget-post clearfix">
                                   
										<div class="dz-media"> 
										<img src="./uploads/monan/<?php echo $top3['anh_tintuc'] ?>" alt="">
										</div>
										<div class="dz-info">
											<h6 class="title"><a href="index.php?act=tintucchitiet&&idttct=<?php echo $top3['id_tintuc'] ?>"><?php echo $top3['ten_tintuc'] ?></a></h6>
											<div class="dz-meta">
												
											</div>
										</div>
                                        
									</div>
									<?php } ?>
								</div>
                            </div>
							
							
						</aside>
					</div>
					<div class="col-xl-8 col-lg-8 order-lg-2 order-1 m-b30">
						<div class="row loadmore-content">
                        <?php
                                foreach ($tintuc as $key => $value) {
                            extract($value);
                            
                            ?>
							<div class="col-xl-12 col-lg-12">
								<div class="dz-card style-1 blog-half overlay-shine dz-img-effect zoom m-b30">
									<div class="dz-media">
										<a href="index.php?act=tintucchitiet&&idttct=<?php echo $value['id_tintuc'] ?>"><img src="./uploads/monan/<?php echo $value['anh_tintuc'] ?>" alt="123"></a>
									</div>
									<div class="dz-info">
										
										<h5 class="dz-title"><a href="index.php?act=tintucchitiet&&idttct=<?php echo $value['id_tintuc'] ?>"><?php echo $value['ten_tintuc'] ?></a></h5>
										<p><?php echo $value['motangan'] ?></p>
										<div class="read-btn">
											<a href="index.php?act=tintucchitiet&&idttct=<?php echo $value['id_tintuc'] ?>" class="btn btn-primary btn-hover-2">Đọc tiếp</a>
										</div>
									</div>
								</div>
							</div>
							
							<?php } ?>
							
							
							
							
						</div>
						<div class="text-center m-t10">
							<a class="btn btn-primary dz-load-more btn-hover-2" href="index.php?act=tintucchitiet&&idttct=<?php echo $value['id_tintuc'] ?>" >Xem thêm</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Blog Section -->
		
	</div>