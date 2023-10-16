<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
        <title>Quảng bá du lịch</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

	    <!-- favicon -->
        <link rel="shortcut icon" href="./admin/images/favicon.ico">
		<!-- Bootstrap core CSS -->
	    <link rel="stylesheet" href="./admin/css/bootstrap.min.css" type="text/css">
	    <!-- Icons -->
        <link href="./admin/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
	    <!-- Custom  Css -->
	    <link rel="stylesheet" type="text/css" href="./admin/css/style.css" />
		<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
	</head>

	<body>
		
		<div class="sidenav shadow">
			<div class="text-center pt-0 pt-lg-3 pb-0 pb-lg-3">
				<div class="d-none d-lg-inline-block">
					<a class="logo text-uppercase" href="#">
						<img src="./Image/logo.png" alt="logo" height="60">
						<!-- <img src="./Image/logo.png" alt="logo" height="18"> -->
					</a>
				</div>	
			</div>	
			<!-- NAVBAR -->
			<nav class="navbar navbar-expand-lg navbar-custom text-white sticky">
			    <div class="container">
					<a class="mobile-re text-uppercase d-inline-block d-lg-none" href="#"><img src="images/logo.png" alt="logo" height="20"></a>
				    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				        <span class="mdi mdi-menu"></span>
				    </button>

				    <div class="collapse navbar-collapse" id="navbarNav">
				        <ul class="navbar-nav nav flex-column">
				            <li class="nav-item active">
				                <a class="nav-link" href="#Introduction"><i class="mdi mdi-account-circle-outline mr-2"></i>Tất cả văn bản</a>
				            </li>
				            <li class="nav-item">
				                <a class="nav-link" href="#Structure"><i class="mdi mdi-sitemap mr-2"></i>Văn bản đi (đã gửi)</a>
				            </li>
				            <li class="nav-item">
				                <a class="nav-link" href="#HTML_Structure"><i class="mdi mdi-language-html5 mr-2"></i>Văn bản đến (đã nhận )</a>
				            </li>
				            <!-- <li class="nav-item">
				                <a class="nav-link" href="#Installation"><i class="mdi mdi-language-css3 mr-2"></i>Installation</a>
							</li>
				            <li class="nav-item">
				                <a class="nav-link" href="#Themes"><i class="mdi mdi-language-javascript mr-2"></i>Themes</a>
				            </li>
				            <li class="nav-item">
				                <a class="nav-link" href="#Credits"><i class="mdi mdi-cash mr-2"></i>Credits</a>
				            </li>
				            <li class="nav-item">
				                <a class="nav-link" href="#Support"><i class="mdi mdi-headset mr-2"></i>Support</a>
				            </li>
				            <li class="nav-item">
				                <a class="nav-link" href="#Change_Log"><i class="mdi mdi-update mr-2"></i>Change Log</a>
				            </li> -->
				        </ul>
				    </div>
			    </div>
			</nav>
			<!-- NAVBAR END-->
		</div>

		<div class="main">
			
			<section class="bg-home" id="Introduction">
				<div class="container">
				
<h2>
    <a href="" class="btn btn-primary">Thêm mới</a>
</h2>
<table id="list" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Màu sắc</th>
                <th>Mô tả</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Action</th>
            </tr>
        </thead>
        
        <tbody>
     
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->color}}</td>
                <td>{{$item->describe}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->updated_at}}</td>  
                <td>
                    <a class="btn btn-primary" href="{{route('products.edit', $item)}}">Sửa sản phẩm</a>

                    <button type="button" onclick="
                             if(confirm('Bạn chắc chắn muốn xóa không?'))
                             
                             document.getElementById('destroy-{{$item->id}}').submit()
                    
                    
                    " class="btn btn-danger">Xóa sản phẩm</button>

                    <form action="{{route('products.destroy', $item)}}" id="destroy-{{$item->id}}" method="POST">
      
                   
                    </form>
                </td>
            </tr>

        </tbody>
				</div><!--end container-->
			</section>
		


	
	
	



			


			<!-- Footer Start -->
			<footer class="footer bg-light mt-4">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12">
							<div class="text-center">
								<p class="mb-0">© 2022 <span class="text-custom">Quản lý văn bản</span>. Design by Mannat-Themes.</p>
							</div>
						</div>
					</div>
				</div><!--end container-->
			</footer>
			<!-- Footer End -->
				

			<!-- JAVASCRIPTS -->
		    <script src="./admin/js/jquery.min.js"></script>
			<script src="./admin/js/bootstrap.min.js"></script>
			<script src="./admin/js/jquery.easing.min.js"></script>
			<script src="./admin/js/scrollspy.min.js"></script>
		    <!-- Custom -->
			<script src="./admin/js/app.js"></script>
		</div>		
	</body>
</html>