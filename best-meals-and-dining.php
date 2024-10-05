<?php include "header.php"; ?>
<style type="text/css"> 
	.th_breadcrumb_sec{background-color: #f7f3ef;padding:20px 120px 48px;}
	.breadcrumb{align-items:baseline;}
	.breadcrumb li a{color: #39768a;font-size:14px;}
	.breadcrumb-item.active{    color: #333;font-size:14px;}
	.th_breadcrumb_sec h2{width:100%;float:left;    color: #333;font-family: 'Source Serif 4', serif;
		font-weight:700;font-size:36px;}
</style>
<section>
	<div class="container th_breadcrumb_sec">
		<div class="row">
			<div class="col-12">
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
				    <li class="breadcrumb-item"><a href="#">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Best Meals And Dining</li>
				  </ol>
				</nav>
				<h2>Best Meals and Dining Awards 2023</h2>
			</div>
		</div>
	</div>
</section>

<style type="text/css">
	.cus_pad{padding:20px 120px 48px;}
	.th_community .th_content{width:100%;float:left;}
	.th_community .th_content h2{width:100%;float:left;margin:32px 0 16px;font-size:34px;color: #333;
	font-family: 'Source Serif 4', serif;font-weight:600;}
	.th_community .th_content p{width:100%;float:left;margin-bottom: 24px;color: #333;}
	.th_community .th_content li{display:inline-flex;}
	.th_community .th_content li a:first-child{background-color: #39768a;    border-radius: 4rem;padding: 12px 48px;color:#fff;font-weight:600;float:left;}
	.th_community .th_content li a:first-child:hover{background-color: #004858;}
	.th_community .th_content li a:last-child{color: #39768a;padding: 12px 30px;font-weight:600;float:left;}
	.th_community .th_content li a:last-child:hover{text-decoration:underline;}
	.th_community .th_image{margin-top:-100px;padding-left:40px;float:right;}
</style>
<section class="th_community">
	<div class="container cus_pad">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-6 col-12">
				<div class="th_content">
					<h2>Honoring top-rated senior living food services</h2>
					<p>The top senior living communities stand out for their exceptional care and support of seniors in independent living, assisted living, memory care, and in-home care. Our Best of Senior Living Award winners represent the top 1-2% of senior care providers nationwide based on reviews from those who matter most: residents and families.</p>
					<p>Below are the winners from the 2023 Best of Senior Living Awards.</p>
					<li>
						<a href="#">See all the 2023 winners</a>
						<a href="#">2024 awards criteria <i class="bi bi-chevron-right"></i></a>
					</li>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
				<div class="th_image">
					<img src="assets/images/Badge-APFM.png" class="img-fluid" alt="Badge APFM">
				</div>
			</div>
		</div>
	</div>
</section>
<style type="text/css">
	.th_packages_sec{padding: 48px 120px 48px;margin-top:60px;background-color: #e6f2fc;} 
	.th_packaegs_slider .th_card{width:100%;float:left;background-color:#fff;border:1px solid #d0d0d0;}
	.th_packaegs_slider .th_card .th_content{padding: 8px 16px;width:100%;float:left;}
	.th_packaegs_slider .th_card .th_content h3{width:100%;float:left;color: #1b4756;font-size:20px;
	font-family:'Source Serif 4', serif;font-weight:600;}
	.th_packaegs_slider .th_card .th_content small{width:100%;float:left;font-size:14px;color:#525252;margin:10px 0;}
	.th_packaegs_slider .th_card .th_content strong{width:100%;float:left;color:#380e65;}
	.th_packaegs_slider .th_card .th_content span{width:100%;float:left;color:#39768a;display:flex;align-items:center;    font-size: 14px;}
	.th_packaegs_slider .th_card .th_content span .tag{height:32px;background-color:#094f6e;padding:0 10.4px;
    font-weight: 700;font-size: 16px;line-height: 36px;margin-right:8px;color:#fff;border-radius: 8px;}
	.th_packaegs_slider .th_card .th_content span b{font-size: 14px;line-height: 24px;margin-right: 8px;}
	.th_packaegs_slider .th_card .th_content p{width:100%;float:left;margin-top:10px;font-size:14px;}
	.th_packaegs_slider .th_card a{float:left;text-align:right;background-color:#f7f7f7;font-size: 16px;
		line-height: 18px;font-weight: 700;color: #39768a;height: 34px; padding: 8px 16px;width:100%;margin-top:20px;}
    .th_packaegs_slider .th_card a:hover{text-decoration:underline;}
    .th_packaegs_slider .slick-slide{padding:0 10px;}

    .th_search_sec h3{width:100%;float:left;color:#333;margin:15px 0 25px;font-size:22px;font-weight:700;
    	padding:0 10px;}
    .th_search_sec form{width:100%;float:left;padding:0 10px;}
    .th_search_sec form select, .th_search_sec form input{width:100%;float:left;height: 48px;border: none;
    border-bottom: 1px solid #949494;padding: 0 5px;outline: none;cursor: pointer;}
    .th_search_sec form input{cursor:text;padding:0 10px}
    .th_search_sec form button{width: 168px;outline: none;border: none;color: #fff;border-radius: 100px;
    padding: 12px 64px;font-size: 16px;text-align: center;font-weight: 700;line-height: 18px;
    background-color: #39768a;transition:0.3s;}
    .th_search_sec form button:hover{background-color: #004858;}
</style>
<section class="th_packages_sec">
	<div class="container"> 
		<div class="row">
			<div class="col-12">
				<div class="th_packaegs_slider">
					<?php for($p = 0; $p <= 5; $p++){ ?>
					<div class="th_card">
						<img src="assets/images/package_image.jpg" class="img-fluid" alt="package image">
						<div class="th_content">
							<h3>Senior Star at Woodland Terrace</h3>
							<small>9524 East 71st Street, Tulsa, OK 74133</small>
							<strong>$X,XXX+ monthly</strong>
							<span>
								<div class="tag">9.2</div>
								<b>Review Score</b>33 reviews
							</span>
							<p>Studio, 1bd, 2bd</p>
							<p>Welcome to Senior Star at Woodland Terrace! Woodland Terrace is an independent living community located in Tulsa, Oklahoma. It's a community filled with friendship and lots of ways to enjoy a life full of purpose. Inside Woodland Terrace, residents gather for fellowship and fun in the multiple...</p>
						</div>
						<a href="#">See details <i class="bi bi-chevron-right"></i></a>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="th_search_sec">
			<div class="row">
				<div class="col-12">
					<h3>Find more local award winners near you</h3>
				</div>
			</div>
			<form>
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-5 col-12">
						<select>
							<option>All Senior Living</option>
							<option>Assisted Living</option>
							<option>Memory Care</option>
							<option>Independent Living</option>
							<option>Home Care</option>
						</select>
					</div>
					<div class="col-lg-5 col-md-5 col-sm-5 col-12">
						<input type="text" name="" placeholder="Enter a zip code or city" >
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-12">
						<button>Search</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section> 
<style type="text/css">
	.th_critaria_sec{background-color: #f7f3ef;padding:48px 140px;margin:40px 0 80px}
	.th_critaria_sec h2{margin-bottom: 32px;width:100%;float:left;font-size:34px;color: #333;
	font-family: 'Source Serif 4', serif;font-weight:600;}
	.th_critaria_sec .th_card{width:100%;float:left;display:flex;justify-content:center;flex-wrap: wrap;}
	.th_critaria_sec .th_card span{float:left;display:flex;width:72px;box-shadow: 0 2px 4px 0 #0000001A;align-items: center;border-radius: 10px;margin-bottom: 16px;justify-content: center;
		background-color: #fff;height:72px;}
	.th_critaria_sec .th_card p{width:100%;float:left;text-align:center;font-size:14px;}
	.th_critaria_sec small{width:100%;float:left;text-align:center;font-size:12px;margin-top:20px;padding:0 10%;}
</style>
<section>
	<div class="container">
		<div class="th_critaria_sec">
			<div class="row">
				<div class="col-12">
					<h2>Best of 2024 Senior Living Awards criteria</h2>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 col-12">
					<div class="th_card">
						<span>
							<svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" fill="none" viewBox="0 0 40 40" class="server-MuiSvgIcon-root" focusable="false" aria-hidden="true"><path stroke="#391273" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="m14.2 34-8.8.6.6-8.8L30.8 1 39 9.2 14.2 34ZM6.957 26.087l6.956 6.956M26 6l8 8M24 39H1"></path></svg>
						</span>
						<p>Receive 10 or more reviews on APlaceforMom.com</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 col-12">
					<div class="th_card">
						<span>
							<svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" fill="none" viewBox="0 0 40 40" class="server-MuiSvgIcon-root" focusable="false" aria-hidden="true"><path stroke="#391273" stroke-linejoin="round" stroke-width="2" d="m21 1 4.49 13.82h14.531l-11.756 8.54 4.49 13.82L21 28.64 9.244 37.18l4.49-13.82L1.98 14.82h14.53L21 1Z"></path></svg>
						</span>
						<p>Attain an average overall rating of at least 4.5 stars for reviews received during the award period</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 col-12">
					<div class="th_card">
						<span>
							<svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" fill="none" viewBox="0 0 42 42" class="server-MuiSvgIcon-root" focusable="false" aria-hidden="true"><path stroke="#391273" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M28.279 22.758h-4.78v-7.985c0-1.397.996-2.395 2.39-2.395 1.394 0 2.39.998 2.39 2.395v7.985Z"></path><path stroke="#391273" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M25.89 1 15.136 8.585v.998c0 .4.398.799.797.799h1.99v11.377c0 .6.399.998.996.998h14.137c.597 0 .996-.399.996-.998V10.382h1.792c.597 0 .995-.4.995-.998v-.799L25.89 1Z"></path><path stroke="#391273" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M30.07 3.994V1.998c0-.599.399-.998.996-.998s.996.4.996.998v3.393"></path><path stroke="#391273" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M27.68 33.336s6.571-2.595 8.761-2.994c1.991-.399 3.186.6 3.982 1.198.996.798.598 2.196-.398 2.595l-18.119 6.587c-1.394.4-2.787.4-4.181-.2l-10.553-4.99c-.796-.4-1.195-.798-1.195-1.397V25.95c0-.998.797-1.597 1.792-1.597 1.792.2 4.182.798 7.566 2.994H21.907c3.783 0 5.774 2.595 5.774 5.988Zm0 0H15.335M1.996 37.529h2.787c.597 0 .996-.6.996-1.198V25.352c0-.598-.399-1.197-.996-1.197H1.996c-.598 0-.996.599-.996 1.197v10.979c0 .798.398 1.197.996 1.197Z"></path></svg>
						</span>
						<p>Offer assisted living, in-home care, independent living, skilled nursing, or memory care in the United States or Canada</p>
					</div>
				</div>
				<div class="col-12">
					<small>*Based on online reviews and ratings collected from APlaceforMom.com during the awards period of Sept. 11, 2023 to Oct. 20, 2023. Note: only digital submissions are eligible via an invite to review link or by QR code submission. Postcard reviews do not count toward this award.</small>
				</div>
			</div>
		</div>
	</div>
</section> 
<?php include "footer.php" ?>