<?php require_once('config/head.php'); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ - ADMIN</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    
</head>


<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                    <a href="index.html"><img src="/assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        

                        <li class="sidebar-item active ">
                            <a href="/index.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Trang Chủ</span>
                            </a>
                        </li>
                
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person"></i>
                                <span><?=$user['username'];?> - <?=tien($user['money']);?>đ</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="nap-the">Nạp Tiền</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ls-napthe">Lịch Sử Nạp</a>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Tạo Web</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="mau-web">Tạo Website</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="history-site">Lịch Sử Tạo Web</a>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-server"></i>
                                <span>Mua Code</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="mua-code">Mua Code</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="history-code">Lịch Sử Mua Code</a>
                                
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-globe"></i>
                                <span>Mua Miền</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="mua-domain">Mua Miền</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="lsmuamien.php">Lịch Sử Mua Miền</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="Whois">Check Miền</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-title">DVK - BANK</li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-hexagon-fill"></i>
                                <span>Nạp Tiền</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="nap-the">Nạp Thẻ Cào</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="nap-momo">Nạp Ví Diện Tử</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-hdd-stack-fill"></i>
                                <span>Chuyển Tiền</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="chuyen-tien">Chuyển Tiền</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="history-bank">Lịch Sử Chuyển Tiền</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-title">Liên Hệ</li>

                        <li class="sidebar-item  ">
                            <a href="https://zalo.me/grixtv2003" class='sidebar-link'>
                                <i class="bi bi-phone-fill"></i>
                                <span>ZALO ADMIN</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="https://zalo.me/grixtv2003" class='sidebar-link'>
                                <i class="bi bi-phone-fill"></i>
                                <span>FACEBOOK</span>
                            </a>
                        </li>

                        <li class="sidebar-title">Tài Khoản</li>

                        <li class="sidebar-item  ">
                            <a href="profile" class='sidebar-link'>
                                <i class="bi bi-person"></i>
                                <span>Thông Tin Tài Khoản</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="mailto:@gmail.com" class='sidebar-link'>
                                <i class="bi bi-envelope"></i>
                                <span>Liên Hệ</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="/logout" class='sidebar-link'>
                                <i class="bi bi-card-list"></i>
                                <span>Đăng Xuất</span>
                            
                        <?php if($user['level'] == '810'){ ?>
                    <li>
                        <a href="/admin" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-settings2"></span>
                            <span class="mtext">Quản Trị Website</span>
                        </a>
                    </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Dashboard</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Tổng Lượt Truy Cập</h6>
                                                <h6 class="font-extrabold mb-0">112.000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="iconly-boldProfile"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Tổng Thành Viên</h6>
                                                <h6 class="font-extrabold mb-0">5000+</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="iconly-boldMoney"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Tổng Thu Nhập 07</h6>
                                                <h6 class="font-extrabold mb-0">3 Triệu +</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="iconly-boldBookmark"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Saved Post</h6>
                                                <h6 class="font-extrabold mb-0">112</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Chỉ Số Trong Tháng Này</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="chart-profile-visit"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Nguồn Truy Cập </h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <svg class="bi text-primary" width="32" height="32" fill="blue"
                                                        style="width:10px">
                                                        <use
                                                            xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                                    </svg>
                                                    <h5 class="mb-0 ms-3">Trình Duyệt</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-0">862</h5>
                                            </div>
                                            <div class="col-12">
                                                <div id="chart-europe"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <svg class="bi text-success" width="32" height="32" fill="blue"
                                                        style="width:10px">
                                                        <use
                                                            xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                                    </svg>
                                                    <h5 class="mb-0 ms-3">Mạng Xã Hội</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-0">375</h5>
                                            </div>
                                            <div class="col-12">
                                                <div id="chart-america"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <svg class="bi text-danger" width="32" height="32" fill="blue"
                                                        style="width:10px">
                                                        <use
                                                            xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                                    </svg>
                                                    <h5 class="mb-0 ms-3">Được Giới Thiệu</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="mb-0">1025</h5>
                                            </div>
                                            <div class="col-12">
                                                <div id="chart-indonesia"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Nhận Xét Về Website</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-lg">
                                                <thead>
                                                    <tr>
                                                        <th>Tên Thành Viên</th>
                                                        <th>Lời Nhận Xét</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="assets/images/faces/5.jpg">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0">LÊ BON</p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0">Tạo Web Uy Tín Nha </p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="assets/images/faces/2.jpg">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0">ADMIN</p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0">MUA CODE HAY TẠO WEB GIÁ RẺ THÌ LÊN GRIXTV.NET</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card">
                            <div class="card-body py-4 px-5">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="https://upanh.cf/5mzojtjarp.jpg" alt="Face 1">
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold"><?=$user['username'];?> </h5>
                                        <h6 class="text-muted mb-0"><?=$user['email'];?>  </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Thông Báo Từ ADMIN</h4>
                            </div>
                            <div class="card-content pb-4">
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                        <img src="/assets/images/logo/logo.png">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">ADMIN</h5> </p>
                                        <h6 class="text-muted mb-0"><?=$bentancoder['modal_thongbao'];?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Nguồn Truy Cập ADMIN</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-visitors-profile"></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; ADMIN</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://zalo.me/0584768479">ADMIN</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
    </div>
<a href="https://zalo.me/0584768479" id="linktelegram" target="_blank" rel="noopener noreferrer">
			<div id="fcta-telegram-tracking" class="fcta-telegram-mess">
				<span id="fcta-telegram-tracking"> Chat với Admin</span>
			</div>
			<div class="fcta-telegram-vi-tri-nut">
				<div id="fcta-telegram-tracking" class="fcta-telegram-nen-nut">
					<div id="fcta-telegram-tracking" class="fcta-telegram-ben-trong-nut">
						<i class="fab fa-telegram fa-2x"></i>
					</div>
					<div id="fcta-telegram-tracking" class="fcta-telegram-text"> Chat Ngay </div>
				</div>
			</div>
		</a>

		<style>
		@keyframes zoom{
			0%{
				transform:scale(.5);
				opacity:0
		}
			50%{
				opacity:1
		}
			to{
				opacity:0;
				transform:scale(1)
		}
		}
		@keyframes lucidgentelegram{
			0% to{
				transform:rotate(-25deg)
		}
			50%{
				transform:rotate(25deg)
		}
		}
		.jscroll-to-top{
			bottom:100px
		}
		.fcta-telegram-ben-trong-nut svg path{
			fill:#fff
		}
		.fcta-telegram-vi-tri-nut{
			position:fixed;
			bottom:24px;
			right:20px;
			z-index:999
		}
		.fcta-telegram-nen-nut,div.fcta-telegram-mess{
			box-shadow:0 1px 6px rgba(0,0,0,.06),0 2px 32px rgba(0,0,0,.16)
		}
		.fcta-telegram-nen-nut{
			width:50px;
			height:50px;
			text-align:center;
			color:#fff;
			background:#0068ff;
			border-radius:50%;
			position:relative
		}
		.fcta-telegram-nen-nut::after,.fcta-telegram-nen-nut::before{
			content:"";
			position:absolute;
			border:1px solid #0068ff;
			background:#0068ff80;
			z-index:-1;
			left:-20px;
			right:-20px;
			top:-20px;
			bottom:-20px;
			border-radius:50%;
			animation:zoom 1.9s linear infinite
		}
		.fcta-telegram-nen-nut::after{
			animation-delay:.4s
		}
		.fcta-telegram-ben-trong-nut,.fcta-telegram-ben-trong-nut i{
			transition:all 1s
		}
		.fcta-telegram-ben-trong-nut{
			position:absolute;
			text-align:center;
			width:30%;
			height:46%;
			left:10px;
			bottom:25px;
			line-height:50px;
			font-size:20px;
			opacity:1
		}
		.fcta-telegram-ben-trong-nut i{
			animation:lucidgentelegram 1s linear infinite
		}
		.fcta-telegram-nen-nut:hover .fcta-telegram-ben-trong-nut,.fcta-telegram-text{
			opacity:0
		}
		.fcta-telegram-nen-nut:hover i{
			transform:scale(.5);
			transition:all .5s ease-in
		}
		.fcta-telegram-text a{
			text-decoration:none;
			color:#fff
		}
		.fcta-telegram-text{
			position:absolute;
			top:6px;
			text-transform:uppercase;
			font-size:12px;
			font-weight:700;
			transform:scaleX(-1);
			transition:all .5s;
			line-height:1.5
		}
		.fcta-telegram-nen-nut:hover .fcta-telegram-text{
			transform:scaleX(1);
			opacity:1
		}
		div.fcta-telegram-mess{
			position:fixed;
			bottom:29px;
			right:58px;
			z-index:99;
			background:#fff;
			padding:7px 25px 7px 15px;
			color:#0068ff;
			border-radius:50px 0 0 50px;
			font-weight:700;
			font-size:15px
		}
		.fcta-telegram-mess span{
			color:#0068ff!important
		}
		span#fcta-telegram-tracking{
			font-family:Roboto;
			line-height:1.5
		}
		.fcta-telegram-text{
			font-family:Roboto
		}
		</style>
		
</body>

</html>