<?php include "header.php"; ?>
<style type="text/css"> 
	.th_breadcrumb_sec{background-color: #f7f3ef;padding:20px 0 0 60px;overflow:hidden;}
	.breadcrumb{align-items:baseline;}
	.breadcrumb li a{color: #39768a;font-size:14px;}
	.breadcrumb-item.active{    color: #333;font-size:14px;}
	.th_breadcrumb_sec h2{width:100%;float:left;    color:#1b4756;font-family: 'Source Serif 4', serif;
		font-weight:700;font-size:3.875rem;margin-top:20px;}
	.th_breadcrumb_sec form{width:100%;float:left;padding-right: 50px;}
	.th_breadcrumb_sec form input{width:100%;float:left;height:65px;border:none;outline:none;padding:10px;
	    border-bottom: 2px solid rgba(0, 0, 0, 0.42);margin-top:20px;}
	.th_breadcrumb_sec form li{width:100%;float:left;display:flex;justify-content:space-between;
		margin-top:40px;align-items:center;}
	.th_breadcrumb_sec form li button{float:left;color: #fff;background-color: #6a11a8;text-align: center;border-radius: 25px; padding: 8px 48px;outline:none;border:none;font-weight:600;transition:0.3s;}
	.th_breadcrumb_sec form li button:hover{background-color:#3e0068;}
	.th_breadcrumb_sec form li a{float:left;color:#1d778c;font-weight:600;}
	.th_breadcrumb_sec form li a:hover{text-decoration:underline;}
</style>
<section>
	<div class="container th_breadcrumb_sec">
		<div class="row">
			<div class="col-lg-6 col-12">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="#">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Most Friendly</li>
				  </ol>
				</nav>
				<h2>Join our team at A Place for Mom</h2>
				<form>
					<input type="text" name="" placeholder="search job title or keyword">
					<input type="text" name="" placeholder="Enter a zip code or city">
					<li>
						<button>Search</button>
						<a href="#">View all open positions <i class="bi bi-chevron-right"></i></a>
					</li>
				</form>
			</div>
			<div class="col-lg-6 col-12">
				<div class="th_banner_image">
					<img src="assets/images/careers_image.jpeg" class="img-fluid" alt="careers image">
				</div>
			</div>
		</div>
	</div>
</section>

 
<?php include "footer.php" ?>