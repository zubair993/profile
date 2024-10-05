<?php include 'header.php'; ?>
<style type="text/css">
	.th_search_sec h1{width:100%;float:left;text-align:center;margin:4rem 0 30px;color:#1b4756;font-size:56px;
		font-weight:700;font-family: 'Source Serif 4', serif;}
	.th_search_sec form{width:100%;float:left;display:flex;justify-content:center;}
	.th_search_sec form input{width:330px; height: 50px;padding-left: 24px;padding-right: 8px;
		border:1px solid #d6d6d6;outline:none;border-radius:30px 0 0 30px;}
	.th_search_sec form button{font: 700 1.125rem/1.75rem var(--font-poppins);color: #fff;cursor: pointer;
		height: 50px;outline: 0;padding: 0 14px 2px 14px;overflow: hidden;font-size: 16px;transition:0.3s;
		border-radius: 0 30px 30px 0;border:none;background-color: #6a11a8;}
	.th_search_sec form button:hover{background: #3e0068;}
</style>
<section class="th_search_sec">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>Find senior living near you</h1>
				<form>
					<input type="search" name="" placeholder="enter a zip code or city">
					<button>Search</button>
				</form>
			</div>
		</div>
	</div>
</section>
<style type="text/css">
	.custom_container{padding:0 75px;position:relative;}
	.custom_container:before{width:100%;height:75%;background-color:#ffb529;position:absolute;top:25%;left:0;content:"";z-index:-1}
	.th_pricing{width:100%;float:left;background-color:#fff;box-shadow: 0 4px 4px rgba(0,0,0,.25);margin-top: 48px;
	    border: 1px solid #d9d9d9;display: flex;align-items: center;}
	.th_pricing .th_image{width:30%;float:left;}
	.th_pricing .th_content{width:70%;float:left;padding:32px;}
	.th_pricing .th_content .left{width:70%;float:left;}
	.th_pricing .th_content .left h2{font-size: 48px;line-height: 60px;width:100%;float:left;font-weight: 700;
    font-family: 'Source Serif 4', serif;color:#000;margin-bottom:16px;}
	.th_pricing .th_content .left p{width:100%;float:left;}
	.th_pricing .th_content .right{width:30%;float:left;}
	.th_pricing .th_content .right li{width:100%;float:left;}
	.th_pricing .th_content .right li a{width:100%;float:left;color:#fff;background-color: #6a11a8;text-align:center;
		border-radius:4rem;    padding: 12px;    margin-bottom: 14px;}
	.th_pricing .th_content .right li a:hover {background-color: #3e0068;}

	.th_work_sec{width:100%;float:left;padding: 16px 24px 32px;box-shadow: 0 4px 4px rgba(0,0,0,.25);margin-top: 30px;
    border-radius: 5px;background-color: #fff;display: flex;align-items: center;flex-wrap: wrap;}
    .th_work_sec .heading{width:40%;float:left;}
    .th_work_sec .heading h2{width:100%;float:left;font-family: 'Source Serif 4', serif;font-size:32px;font-weight:700;
    	color: #1b4756;margin-bottom:24px;}
    .th_work_sec .heading p{width:100%;float:left;}
    .th_work_sec .heading a{float:left;padding: 12px 64px;border: 2px solid #6a11a8;border-radius: 4rem;text-align:center;
    	color:#6a11a8;background-color:#fff;margin-top: 24px;}
    .th_work_sec .heading a:hover{background-color:#6a11a80a;}
    .th_work_sec ul{width:60%;float:left;}
    .th_work_sec ul li{width:33.3%;float:left;display: flex;flex-wrap: wrap;justify-content: center;border-right: 1px solid #d0d0d0;
    	padding:10px;}
    .th_work_sec ul li span{width: 58px;height: 58px;float:left;border-radius: 50%;margin-bottom: 35px;background-color: #39768a;
        color: #eef7f9;text-align:center;font-size: 48px;line-height: 53px;font-family: 'Source Serif 4', serif;font-weight:700;}
    .th_work_sec ul li p{width:100%;float:left;text-align:center;}
    .th_work_sec ul li:last-child{border-right:none;}

    .th_bottom_heading{width:100%;float:left;display:flex;align-items:center;padding:50px 96px}
    .th_bottom_heading h2{font-size:42px;font-weight:700;color: #004858;font-family: 'Source Serif 4', serif;width:50%;}
    .th_bottom_heading ul{width:50%;float:left;}
    .th_bottom_heading ul span{width:100%;float:left;color:#000;margin-bottom:20px;}
    .th_bottom_heading ul li{width:100%;float:left;list-style:disc; margin-left: 20px;}
    .th_bottom_heading ul a{float:left;color: #6024a2;text-align: center;background-color: #fff;    padding: 12px 48px;
        border-radius: 4rem;margin-top:25px;font-weight:700;}
</style>
<section>
	<div class="container custom_container">
		<div class="row">
			<div class="col-12">
				<div class="th_pricing">
					<div class="th_image">
						<img src="assets/images/hp-long-lead-hero-image-desktop.jpg" class="img-fluid" alt="hp long lead hero image desktop">
					</div>
					<div class="th_content">
						<div class="left">
							<h2>Compare options. Get pricing. Save time.</h2>
							<p>Our unbiased recommendations come at no cost to your family.</p>
						</div>
						<ul class="right">
							<li><a href="#">Take our care quiz</a></li>
							<li><a href="#">Browse listings</a></li>
							<li><a href="#">Promotions near you</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="th_work_sec">
					<div class="heading">
						<h2>How our free service works</h2>
						<p>Our proven process can help you find the right senior living community for your loved one</p>
						<a href="#">Get Started</a>
					</div>
					<ul>
						<li> 
							<span>1</span>
							<p>Connect with an expert senior living advisor</p> 
						</li>
						<li> 
							<span>2</span>
							<p>Connect with an expert senior living advisor</p> 
						</li>
						<li> 
							<span>3</span>
							<p>Connect with an expert senior living advisor</p> 
						</li>
					</ul>
				</div>
			</div>
			<div class="col-12">
				<div class="th_bottom_heading">
					<h2>Does your loved one need care urgently?</h2>
					<ul>
						<span>Our Senior Living Advisors have expertise in:</span>
						<li>Hospital or rehab facility discharge</li>
						<li>Dementia and Alzheimer's care</li>
						<a href="#">Talk to an advisor near me</a>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<style type="text/css">
	.th_support_sec{padding: 64px 24px 48px 64px;background-color:#f7f3ef;margin-top:60px;}
	.th_support_sec h2{width:100%;float:left;color: #004858;font-size:34px;font-weight:600;font-family: 'Source Serif 4', serif;}
	.th_support_sec .th_card{ width:100%;padding: 24px;box-shadow: 2px 2px 7px 0 rgba(0,0,0,.1);border-radius: 4px;
		background-color: #fff;float:left;margin-bottom:24px;}
    .th_support_sec .th_card svg{width:45px;height:45px;}
    .th_support_sec .th_card h3{width:100%;float:left;color: #1d778c;font-weight:600;font-size:18px;margin:15px 0;height:45px;overflow:hidden;}
    .th_support_sec .th_card p{width:100%;float:left;}
</style>
<section>
	<div class="container th_support_sec">
		<div class="row">
			<div class="col-lg-4 col-12">
				<h2>Get the support you need every step of the way</h2>
			</div>
			<div class="col-lg-8 col-12">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-6">
						<div class="th_card">
							<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 45 45" class="server-MuiSvgIcon-root" focusable="false" aria-hidden="true"><path fill="currentColor" fill-rule="evenodd" d="M17.5 0c3.941 0 7.8 1.342 10.868 3.78a1.457 1.457 0 1 1-1.815 2.283c-2.59-2.058-5.72-3.146-9.053-3.146-8.041 0-14.583 6.542-14.583 14.583S9.459 32.083 17.5 32.083 32.083 25.541 32.083 17.5c0-2.23-.485-4.364-1.443-6.343a1.458 1.458 0 0 1 2.625-1.27A17.32 17.32 0 0 1 35 17.5C35 27.149 27.149 35 17.5 35 7.851 35 0 27.149 0 17.5 0 7.851 7.851 0 17.5 0Zm0 5.833c.805 0 1.458.654 1.458 1.459v8.75h5.834a1.459 1.459 0 0 1 0 2.916H17.5a1.459 1.459 0 0 1-1.458-1.458V7.292c0-.805.653-1.459 1.458-1.459Z"></path></svg>
							<h3>Identifying the right time</h3>
							<p>Spot signs that indicate it’s time to consider senior living</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-6">
						<div class="th_card">
							<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 45 45" class="server-MuiSvgIcon-root" focusable="false" aria-hidden="true"><path fill="currentColor" fill-rule="evenodd" stroke="currentColor" stroke-width="0.778" d="M25.74 1C32.307 1 38.7 5.764 38.7 12.322c0 2.638-1.018 5.194-2.872 7.22a4.669 4.669 0 0 0 1.183 4.324c.211.216.274.54.16.823a.736.736 0 0 1-.68.466c-2.1 0-4.124-.845-5.628-2.332-1.268.443-2.872.735-4.414.805-.421 5.9-5.862 10.585-12.49 10.585-1.746 0-3.658-.31-5.123-.823a8.018 8.018 0 0 1-5.627 2.332.736.736 0 0 1-.68-.466.769.769 0 0 1 .16-.822 4.669 4.669 0 0 0 1.183-4.325C2.018 28.084 1 25.528 1 22.89c0-6.312 5.937-10.979 12.25-11.303C13.67 5.685 19.112 1 25.74 1ZM13.96 13.077c-6.227 0-11.487 4.494-11.487 9.813 0 2.307.92 4.549 2.59 6.312.085.09.147.2.18.32a6.243 6.243 0 0 1-.449 4.492 6.613 6.613 0 0 0 3.305-2.01.724.724 0 0 1 .816-.192c1.326.541 3.306.89 5.044.89 6.09 0 11.045-4.401 11.045-9.812 0-5.621-5.165-9.813-11.045-9.813Zm5.89 12.078c.407 0 .736.338.736.754 0 .417-.33.755-.736.755H7.627a.746.746 0 0 1-.736-.755c0-.416.33-.754.736-.754ZM25.74 2.51c-5.812 0-10.59 4.01-11.014 9.08a13.47 13.47 0 0 1 5.48 1.487h11.867c.407 0 .736.338.736.755s-.33.755-.736.755h-9.605c2.375 1.992 3.764 4.675 3.98 7.53 1.548-.079 3.188-.404 4.337-.873a.724.724 0 0 1 .816.192 6.611 6.611 0 0 0 3.304 2.01 6.243 6.243 0 0 1-.448-4.492.761.761 0 0 1 .18-.32c1.67-1.763 2.59-4.005 2.59-6.312 0-5.319-5.26-9.812-11.486-9.812ZM7.628 20.626c.406 0 .736.338.736.754 0 .417-.33.755-.736.755a.746.746 0 0 1-.736-.755c0-.416.33-.754.736-.754Zm12.223 0c.407 0 .736.338.736.754 0 .417-.33.755-.736.755h-9.278a.746.746 0 0 1-.736-.755c0-.416.33-.754.736-.754Zm0-12.078c.406 0 .736.338.736.755s-.33.755-.736.755a.746.746 0 0 1-.736-.755c0-.417.33-.755.736-.755Zm12.223 0c.407 0 .736.338.736.755s-.33.755-.736.755h-9.278a.746.746 0 0 1-.736-.755c0-.417.33-.755.736-.755Z"></path></svg>
							<h3>Having the tough conversation</h3>
							<p>Spot signs that indicate it’s time to consider senior living</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-6">
						<div class="th_card">
							<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 45 45" class="server-MuiSvgIcon-root" focusable="false" aria-hidden="true"><path fill="currentColor" fill-rule="evenodd" stroke="currentColor" stroke-width="0.7" d="M6.36 17.822c.997 0 1.849.633 2.164 1.515h5.428c.92 0 1.829.236 2.628.681l4.045 2.251a.771.771 0 0 0 .376.097h4.958c1.69 0 3.063 1.36 3.063 3.03 0 .182-.018.361-.05.537l7.218-2.455c1.403-.498 2.961.044 3.627 1.263.904 1.655.123 3.534-1.46 4.17l-14.29 6.224a9.843 9.843 0 0 1-9.06-.512l-4.004-2.376c-.63-.374-1.633-.628-2.5-.734a2.3 2.3 0 0 1-2.144 1.457H1.766A.762.762 0 0 1 1 32.213V18.58c0-.419.343-.758.766-.758Zm7.592 3.03H8.656v9.153c1.05.124 2.277.434 3.134.943l4.005 2.376a8.296 8.296 0 0 0 7.642.43l14.314-6.235.025-.01c.773-.306 1.15-1.213.694-2.048-.304-.557-1.08-.8-1.766-.556l-9.31 3.166a3.083 3.083 0 0 1-1.435.355h-7.783a.761.761 0 0 1-.766-.757c0-.419.343-.758.766-.758h7.783c.844 0 1.532-.682 1.532-1.515 0-.835-.687-1.514-1.532-1.514h-4.958a2.32 2.32 0 0 1-1.127-.293l-4.045-2.25a3.862 3.862 0 0 0-1.877-.487Zm-7.593-1.515H2.531v12.118H6.36c.421 0 .764-.337.766-.753V20.094a.762.762 0 0 0-.766-.757Zm-1.53 1.515c.422 0 .765.34.765.757a.762.762 0 0 1-.766.758.762.762 0 0 1-.765-.758c0-.418.343-.757.765-.757ZM28.678 1c3.349 0 5.734 2.761 5.734 6.093 0 4.212-3.864 6.923-10.111 12.279a.769.769 0 0 1-1.003 0c-3.793-3.253-6.804-5.467-8.588-7.778a.752.752 0 0 1 .144-1.062.771.771 0 0 1 1.073.143c1.583 2.05 4.367 4.146 7.872 7.124 5.752-4.907 9.081-7.336 9.081-10.706 0-2.61-1.807-4.578-4.203-4.578-3.158 0-4.221 3.668-4.232 3.705a.764.764 0 0 1-.738.555.764.764 0 0 1-.737-.555c-.515-1.786-2.047-3.705-4.231-3.705-1.868 0-3.436 1.217-3.993 3.1a.767.767 0 0 1-.95.513.756.756 0 0 1-.52-.94C14.031 2.644 16.175 1 18.74 1c2.203 0 3.886 1.259 4.968 3.137C24.793 2.255 26.478 1 28.678 1Zm-14.74 6.673c.423 0 .766.34.766.757a.762.762 0 0 1-.766.758.762.762 0 0 1-.765-.758c0-.418.343-.757.765-.757Z"></path></svg>
							<h3>Understanding senior living options</h3>
							<p>Spot signs that indicate it’s time to consider senior living</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-6">
						<div class="th_card">
							<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 45 45" class="server-MuiSvgIcon-root" focusable="false" aria-hidden="true"><g fill="currentColor" fill-rule="evenodd" stroke="currentColor" stroke-width="0.745"><path d="M16 26.538c-1.473 0-2.667-1.102-2.667-2.461H12c.004 1.8 1.411 3.335 3.333 3.637V29h1.334v-1.286c2.176-.352 3.63-2.265 3.25-4.274-.334-1.759-1.983-3.045-3.917-3.055-1.473 0-2.667-1.102-2.667-2.462s1.194-2.461 2.667-2.461c1.473 0 2.667 1.102 2.667 2.461H20c-.004-1.8-1.411-3.335-3.333-3.637V13h-1.334v1.286c-2.176.352-3.63 2.265-3.25 4.274.334 1.759 1.983 3.045 3.917 3.055 1.473 0 2.667 1.102 2.667 2.462S17.473 26.538 16 26.538"></path><path d="M7.376 12.36c-.48.479-.915.999-1.302 1.554a11.456 11.456 0 0 0-1.624 9.754.639.639 0 1 0 1.229-.35c-1.553-5.425 1.582-11.083 7.004-12.637a10.204 10.204 0 0 1 10.028 2.595 10.18 10.18 0 0 1 .343 14.096l-.03.028-.01.012c-.008.007-.017.014-.024.022a5.967 5.967 0 0 1-.28.297 10.209 10.209 0 0 1-9.2 2.796.639.639 0 0 0-.248 1.254c3.76.745 7.643-.434 10.354-3.145.1-.1.192-.2.285-.3a.65.65 0 0 0 .046-.046c4.196-4.528 4.049-11.57-.332-15.918-4.481-4.491-11.752-4.497-16.24-.012"></path><path d="M30.754 11.04a.628.628 0 0 0-.856-.273.655.655 0 0 0-.241.922 13.851 13.851 0 0 1-.163 13.885c2.428-7.842-1.825-16.211-9.499-18.692a14.277 14.277 0 0 0-8.797.001 12.956 12.956 0 0 1 6.925-1.991c2.362-.002 4.68.638 6.72 1.855.31.166.693.043.855-.275a.656.656 0 0 0-.218-.843 14.32 14.32 0 0 0-11.773-1.334c6.28-3.92 14.48-1.898 18.317 4.52a13.84 13.84 0 0 1 1.955 7.094 13.72 13.72 0 0 1-1.947 7.079 15.19 15.19 0 0 0-1.278-11.947m-3.64 16.881c-2.39 4.193-6.779 6.774-11.527 6.782-7.356.002-13.32-6.09-13.322-13.606-.001-4.225 1.918-8.21 5.194-10.788.46-.363.942-.695 1.444-.995 6.372-3.766 14.525-1.542 18.21 4.97a13.878 13.878 0 0 1 .002 13.637M20.663 1C16.161.999 11.911 3.122 9.147 6.754a14.408 14.408 0 0 0-2.528 2.583C.266 14.398-.87 23.765 4.083 30.257c4.953 6.493 14.119 7.654 20.472 2.592a14.747 14.747 0 0 0 2.537-2.592c.948-.756 1.8-1.629 2.537-2.599 3.555-2.814 5.63-7.154 5.618-11.749C35.25 7.677 28.72 1.002 20.663 1"></path></g></svg>
							<h3>Paying for senior living</h3>
							<p>Spot signs that indicate it’s time to consider senior living</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-6">
						<div class="th_card">
							<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 45 45" class="server-MuiSvgIcon-root" focusable="false" aria-hidden="true"><path fill="currentColor" fill-rule="evenodd" stroke="currentColor" stroke-width="0.9" d="M2.665 14.517 18.438 2.466a1.276 1.276 0 0 1 1.525 0l15.774 12.051a1.105 1.105 0 0 1 .182 1.614 1.29 1.29 0 0 1-1.707.173L19.582 5.126a.634.634 0 0 0-.762 0L4.19 16.303a1.27 1.27 0 0 1-1.2.179 1.164 1.164 0 0 1-.762-.893 1.117 1.117 0 0 1 .437-1.072Zm12.289 19.831V23.445c0-.317.271-.574.607-.574h7.28c.335 0 .606.257.606.574v10.903h-8.493ZM4.952 17.196l.295-.225v9.917c0 .317.272.574.607.574.335 0 .606-.257.606-.574V16.042L19.2 6.31l12.74 9.732v15.437c-.001 1.584-1.358 2.868-3.033 2.87h-4.246V23.444c0-.951-.815-1.722-1.82-1.722h-7.28c-1.006 0-1.82.77-1.82 1.722v10.903H9.494c-1.675-.001-3.032-1.285-3.034-2.869 0-.317-.271-.574-.606-.574-.335 0-.607.257-.607.574.003 2.218 1.903 4.015 4.247 4.017h19.413c2.345-.002 4.244-1.8 4.247-4.017V16.971l.295.225c1.043.797 2.57.643 3.413-.343.842-.986.68-2.432-.363-3.229L20.725 1.573a2.552 2.552 0 0 0-3.05 0L1.902 13.624c-1.043.797-1.205 2.243-.363 3.23.843.985 2.37 1.14 3.413.342Z"></path></svg>
							<h3>Selecting the right provider</h3>
							<p>Spot signs that indicate it’s time to consider senior living</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-6">
						<div class="th_card">
							<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 45 45" class="server-MuiSvgIcon-root" focusable="false" aria-hidden="true"><path fill="currentColor" fill-rule="evenodd" d="M24.063 32.813H2.188V6.563h4.374v1.093c0 .604.49 1.094 1.094 1.094h10.938c.604 0 1.093-.49 1.093-1.094V6.563h4.375v26.25ZM8.75 4.375h2.188c.603 0 1.093-.49 1.093-1.094a1.094 1.094 0 0 1 2.188 0c0 .604.49 1.094 1.094 1.094H17.5v2.188H8.75V4.374Zm15.313 0h-4.375V3.281c0-.603-.49-1.094-1.094-1.094H16.22A3.29 3.29 0 0 0 13.125 0a3.29 3.29 0 0 0-3.095 2.188H7.656c-.603 0-1.093.49-1.093 1.093v1.094H2.188A2.191 2.191 0 0 0 0 6.563v26.25C0 34.017.982 35 2.188 35h21.875a2.191 2.191 0 0 0 2.187-2.188V6.563a2.191 2.191 0 0 0-2.188-2.187Z"></path></svg>
							<h3>Planning for a smooth transition</h3>
							<p>Spot signs that indicate it’s time to consider senior living</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<style type="text/css">
	.th_community_sec{margin-top:60px;}
	.th_community_sec .th_image{width:100%;float:left;}
	.th_community_sec .th_content{width:100%;float:left;padding: 48px;}
	.th_community_sec .th_content h2{width:100%;float:left;color: #004858;font-weight:700;font-size:34px;margin-bottom:20px;
		font-family: 'Source Serif 4', serif;}
	.th_community_sec .th_content p{width:100%;float:left;}
	.th_community_sec .th_content ul{width:100%;float:left;display:flex;justify-content:center;padding: 48px 0;}
	.th_community_sec .th_content ul li{width:33.3%;display:flex;justify-content:center;flex-wrap:wrap;}
	.th_community_sec .th_content ul li span{width: 5.9375rem;height: 5.9375rem;padding: 5px;background: #ffd479;
    text-align:center;align-items:center;border-radius:50%;margin-bottom:16px;color:#004858;font-size:24px;float:left;
	font-family: 'Source Serif 4', serif;display: flex;justify-content: center;font-weight:600;}
	.th_community_sec .th_content ul li p{width:100%;float:left;text-align:center;}
</style>
<section class="th_community_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<div class="th_image">
					<img src="assets/images/community_women.jpg" class="img-fluid w-100" alt="community women">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<div class="th_content">
					<h2>National network of communities</h2>
					<p>Our extensive network of senior living communities and home care providers ensures more personalized options for you to choose from</p>
					<ul>
						<li>
							<span>14k+</span>
							<p>Senior Living<br>Communities</p>
						</li>
						<li>
							<span>4k+</span>
							<p>Home Care<br>Providers</p>
						</li>
						<li>
							<span>350k</span>
							<p>Consumer<br>Reviews</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="th_community_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<div class="th_content">
					<h2>Being better informed means making better decisions</h2>
					<p>Our mission is to empower you with the best information and tools to make the right decision for your loved one</p>
					<ul>
						<li>
							<span>400+</span>
							<p>Local Experts</p>
						</li>
						<li>
							<span>2M+</span>
							<p>Families<br>Helped</p>
						</li>
						<li>
							<span>20+</span>
							<p>Years of<br>Experience</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<div class="th_image">
					<img src="assets/images/community_men.jpg" class="img-fluid w-100" alt="community men">
				</div>
			</div>
		</div>
	</div>
</section>
<style type="text/css">
	.th_review_sec{overflow:hidden;}
	.th_review_slider{padding:0 100px;margin-top:60px;}
	.th_review_slider .th_item .th_image{width:40%;float:left;padding-right: 64px;}
	.th_review_slider .th_item .th_image img{box-shadow: 20px 20px 1px #FFD479;margin-bottom: 15px;}
	.th_review_slider .th_item .th_content{width:60%;float:left;padding:50px;}
	.th_review_slider .th_item .th_content p{width:100%;float:left;text-align:center;font-size:24px;color:#000;
	font-family: 'Source Serif 4', serif;font-weight:600;}
	.th_review_slider .th_item .th_content i{width:100%;float:left;text-align:center;color: #616161;font-size:14px;margin-top:20px;}
	.th_review_slider .slick-dots li.slick-active button:before{color: #1d778c;}
	.th_review_slider .slick-dots li button:before{font-size:12px;}
	.th_review_slider .slick-dots{position:unset;margin-top:35px;}
	.accredited{width:100%;float:left;text-align:center;}
</style>
<section class="th_review_sec">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="th_review_slider">
					<?php for($r = 0; $r<= 4; $r++){ ?>
					<div class="th_item">
						<div class="th_image">
							<img src="assets/images/testimonial_image.jpg" class="img-fluid" alt="testimonial image">
						</div>
						<div class="th_content">
							<p>"Missy talked to me several times during the process, helping me read through the fine print of places, and offered my family the compassionate guidance needed during this difficult times."</p>
							<i>Cara found Memory Care for her grandma with her Senior Living Advisor Missy</i>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
			<div class="col-12">
				<div class="accredited">
					<img src="assets/images/accredited-reviews.png" class="img-fluid" alt="accredited reviews">
				</div>
			</div>
		</div>
	</div>
</section>
<style type="text/css">
	.th_search_banner{background-image:url('assets/images/search_banner.png');background-position:center;background-size:cover;overflow:hidden;background-repeat:no-repeat;padding:100px 0;margin-top: 60px;}
	.th_search_banner h2{width:100%;float:left;text-align:center;color:#fff;font-size: 36px;font-family: 'Source Serif 4', serif;
	font-weight:600;margin-bottom:30px;}
	.th_search_banner form{width:100%;float:left;display:flex;justify-content:center;}
	.th_search_banner form input{width:330px; height: 50px;padding-left: 24px;padding-right: 8px;
		border:1px solid #d6d6d6;outline:none;border-radius:30px 0 0 30px;}
	.th_search_banner form button{font: 700 1.125rem/1.75rem var(--font-poppins);color: #fff;cursor: pointer;
			height: 50px;outline: 0;padding: 0 14px 2px 14px;overflow: hidden;font-size: 16px;transition:0.3s;
			border-radius: 0 30px 30px 0;border:none;background-color: #6a11a8;}
	.th_search_banner form button:hover{background: #3e0068;}

	.th_advisor{background-color:#f3f7ff;padding:100px 50px;}
	.th_advisor .th_content{width:100%;float:left;display:flex;justify-content:center;flex-wrap:wrap;}
	.th_advisor .th_content h2{width:100%;float:left;text-align: center;color: #004858;font-size: 36px;font-family: 'Source Serif 4', serif;font-weight:600;}
	.th_advisor .th_content p{width:100%;float:left;text-align: center;margin:30px 0}
	.th_advisor .th_content a{float:left;padding: 12px 48px;border-radius: 4rem;border: 2px solid #1d778c;color:#1d778c;
		font-weight:600;}
	.th_advisor .th_content a:hover{background-color: rgba(29,119,140,.04);}
</style>
<section>
	<div class="container th_search_banner">
		<div class="row">
			<div class="col-12">
				<h2>Start your search for senior living</h2>
				<form>
					<input type="search" name="" placeholder="enter a zip code or city">
					<button>Search</button>
				</form>
			</div>
		</div>
	</div>
	<div class="container th_advisor">
		<div class="row">
			<div class="col-12">
				<div class="th_content">
					<h2>Does your loved one need care urgently?</h2>
					<p>Our Senior Living Advisors have expertise in:</p>
					<a href="#">Talk to an advisor near me</a>
				</div>
			</div>
		</div>
	</div>
</section>
<style type="text/css">
	.th_living_sec{margin-top:60px;}
	.th_living_sec .th_content{width:100%;float:left;padding-left:40px;}
	.th_living_sec .th_content h2{width:100%;float:left;color: #1b4756;font-family: 'Source Serif 4', serif;
    font-weight: 600;font-size: 36px;}
	.th_living_sec .th_content p{width:100%;float:left;margin: 16px 0 0;}
	.th_living_sec .th_content li{width:100%;float:left;}
	.th_living_sec .th_content li a{color: #39768a;margin-right: 8px;font-weight:600;margin-top: 24px;
		width:100%;float:left;}
	.th_living_sec .th_content li a:hover{text-decoration:underline;}
</style>
<section class="th_living_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<div class="th_image">
					<img src="assets/images/living_wallpaper.jpg" class="img-fluid" alt="living wallpaper">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<div class="th_content">
					<h2>Which senior living care type is the best fit for you?</h2>
					<p>Get the information you need to make the best decision about care.</p>
					<?php for($l = 0; $l <= 5; $l++){
						echo '<li><a href="#">Assisted Living <i class="bi bi-chevron-right"></i></a></li>';
					} ?>
				</div>
			</div>

		</div>
	</div>
</section>
<style type="text/css">
	.th_tabs_sec{margin-top:60px;}
	.th_tabs_sec ul{border: 1px solid #d0d0d0;padding: 16px 0 0 28px;box-shadow: 2px 2px 4px 0 #0000001A;}
	.nav-tabs .nav-link:hover{border:none;}
	.nav-tabs .nav-item{outline:none;}
	.nav-tabs .nav-item.show .nav-link, 
	.nav-tabs .nav-link.active{border: none;border-bottom: 3px solid #39768a;}
	.nav-tabs .nav-link{outline:none;margin:0;border:none;color: #000;font-weight: 600;}
	.tab-content{padding: 32px 36px 8px;width:100%;float:left;}
	.tab-content h2{color: #333;font-weight:600;width:100%;float:left;font-size: 18px;line-height: 28px;margin-bottom: 8px;}
	.tab-content p{width:100%;float:left;margin:15px 0;color: #333;font-size: 16px;font-family: Poppins;line-height: 24px;}
	.tab-content a {color: #39768a;margin-right: 8px;font-weight: 600;margin-top: 24px;width: 100%;
		float: left;}
	.tab-content a:hover{text-decoration:underline;}
	.th_tabs_sec .list{border-top: 1px solid #979797;    padding: 0 36px 8px;width:100%;float:left;}
	.th_tabs_sec .th_card{width:100%;float:left;margin-top: 24px;display:flex;    align-items: center;}
	.th_tabs_sec .th_card span{float:left;color: #fff;display: flex;padding: 2px 8px;font-size: 16px;align-items: center;
    font-weight: 700;line-height: 24px;margin-right: 12px;border-radius: 8px;justify-content: center;background-color: #094f6e;}
	.th_tabs_sec .th_card h5 a{width:100%;float:left;    color: #39768a;cursor: pointer;font-size: 16px;font-weight: 700;line-height: 24px;}
	.th_tabs_sec .th_card h5 a:hover{text-decoration:underline;}
	.th_tabs_sec .th_card h5 small{float:left;color:#333;font-size:16px;font-weight:400;line-height:24px;}
</style>
<section class="th_tabs_sec">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
				  <li class="nav-item" role="presentation">
				    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Assisted Living</button>
				  </li>
				  <li class="nav-item" role="presentation">
				    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Memory Care</button>
				  </li>
				  <li class="nav-item" role="presentation">
				    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Independent Living</button>
				  </li>
				  <li class="nav-item" role="presentation">
				    <button class="nav-link" id="four-tab" data-bs-toggle="tab" data-bs-target="#four" type="button" role="tab" aria-controls="four" aria-selected="false">Independent Living</button>
				  </li>
				</ul>
				<div class="tab-content" id="myTabContent">
				  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
				  	<h2>Top cities for Assisted Living</h2>
				  	<p>Assisted living facilities offer housing and care for active seniors who may need support with activities of daily living, like bathing, dressing, and medication management.</p>
				  	<a href="#">See our Assisted Living guide <i class="bi bi-chevron-right"></i></a>
				  	<a href="#">Search all Assisted Living facilities and reviews <i class="bi bi-chevron-right"></i></a>
				  	<p>The score shown is the overall experience rating which is an average of the reviews submitted for those communities. The overall experience rating is a star rating that ranges from 1 being the lowest to 5 being the highest.</p>
				  	<p>Below are the 60 largest cities grouped by their metropolitan area.</p>
				  </div>
				  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				  	<h2>Top cities for Memory Care</h2>
				  	<p>Assisted living facilities offer housing and care for active seniors who may need support with activities of daily living, like bathing, dressing, and medication management.</p>
				  	<a href="#">See our Assisted Living guide <i class="bi bi-chevron-right"></i></a>
				  	<a href="#">Search all Assisted Living facilities and reviews <i class="bi bi-chevron-right"></i></a>
				  	<p>The score shown is the overall experience rating which is an average of the reviews submitted for those communities. The overall experience rating is a star rating that ranges from 1 being the lowest to 5 being the highest.</p>
				  	<p>Below are the 60 largest cities grouped by their metropolitan area.</p>
				  </div>
				  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
				  	<h2>Top cities for Independent Living</h2>
				  	<p>Assisted living facilities offer housing and care for active seniors who may need support with activities of daily living, like bathing, dressing, and medication management.</p>
				  	<a href="#">See our Assisted Living guide <i class="bi bi-chevron-right"></i></a>
				  	<a href="#">Search all Assisted Living facilities and reviews <i class="bi bi-chevron-right"></i></a>
				  	<p>The score shown is the overall experience rating which is an average of the reviews submitted for those communities. The overall experience rating is a star rating that ranges from 1 being the lowest to 5 being the highest.</p>
				  	<p>Below are the 60 largest cities grouped by their metropolitan area.</p>
				  </div>
				  <div class="tab-pane fade" id="four" role="tabpanel" aria-labelledby="four-tab">
				  	<h2>Top cities for Nursing Homes</h2>
				  	<p>Assisted living facilities offer housing and care for active seniors who may need support with activities of daily living, like bathing, dressing, and medication management.</p>
				  	<a href="#">See our Assisted Living guide <i class="bi bi-chevron-right"></i></a>
				  	<a href="#">Search all Assisted Living facilities and reviews <i class="bi bi-chevron-right"></i></a>
				  	<p>The score shown is the overall experience rating which is an average of the reviews submitted for those communities. The overall experience rating is a star rating that ranges from 1 being the lowest to 5 being the highest.</p>
				  	<p>Below are the 60 largest cities grouped by their metropolitan area.</p>
				  </div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="list">
			<div class="row">
				<?php for($list = 0; $list <= 31; $list++){ ?>
				<div class="col-lg-3 col-md-4 col-sm-4 col-6">
					<div class="th_card">
						<span>8.2</span>
						<h5>
							<a href="#">Anaheim, CA</a>
							<small> facilities</small>
						</h5>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>

<style type="text/css">
	.th_reviews_sec{padding: 16px 24px 46px;border-top: 1px solid #ffb529;width:100%;float:left;    background-color: #f5f5f5;border-bottom: 2px solid #ffb529;}
	.th_reviews_sec h2{width:100%;float:left;margin: 27px 0 27px 9px;font-size:24px;font-weight:600;}
	.th_reviews_sec .th_card{width:100%;float:left;display:flex;justify-content:center;flex-wrap:wrap;
		padding:32px;border: #FFD479 5px solid;background-color:#fff;    min-height: 350px;}
	.th_reviews_sec .th_card p{width:100%;float:left;text-align:center;font-size:14px;margin:40px 0}
	.th_reviews_sec .th_card a{font-weight:600;color:#fff;background-color:#6A11A8;border-radius:4rem;    padding: 12px 80px;float:left;}
	.th_reviews_sec .th_card a:hover{background-color: #3E0068;} 
	.th_reviews_sec .heading{width:100%;float:left;background-color:#fff;padding: 27px 27px 13px 27px;}
	.th_rev_slider .th_card{border:none;position:relative;}
	.th_rev_slider .th_card b{width:100%;float:left;}
	.th_rev_slider .th_card b i{font-weight:400;font-size:14px;}
	.th_rev_slider .th_card span{width:100%;float:left;font-weight:600;margin-top:10px;}
	.th_rev_slider .th_card p{width:100%;float:left;text-align:left;}
	.th_rev_slider .th_card a{background:transparent;padding:0;color:#39768A;}
	.th_rev_slider .th_card a:hover{background-color:transparent;text-decoration:underline;}
	.th_rev_slider .slick-dots{bottom:15px;}
	.th_rev_slider .slick-dots li button:before{    font-size: 12px;}
	.th_rev_slider .slick-dots li.slick-active button:before {color: #1d778c;}
</style>
<section>
	<div class="container">
		<div class="th_reviews_sec">
			<div class="row">
				<div class="col-12">
					<h2>Reviews and awards</h2>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 col-12">
					<div class="th_card">
						<img src="assets/images/APFM.jpeg" class="img-fluid" alt="APFM">
						<p>The <strong>Best of Senior Living Award</strong> showcases top senior living communities stand out for their exceptional care and support of seniors.</p>
						<a href="#">Best of 2023</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 col-12">
					<strong class="heading">Latest senior living reviews</strong>
					<div class="row">
						<div class="col-12 th_rev_slider">
							<?php for($rev = 0; $rev <= 5; $rev++){?>
								<div class="th_card">
									<b>Beth - <i>Family/friend</i></b>
									<span>Very friendly and caring staff</span>
									<p>They have been wonderful there. I am a long distance from my uncle so I really appreciate that they keep in regular...</p>
									<a href="#">Read all reviews</a>
								</div>
							<?php } ?>
						</div>
					</div>
					
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 col-12">
					<div class="th_card">
						<img src="assets/images/APFM.jpeg" class="img-fluid" alt="APFM">
						<p>The <strong>Best of Senior Living Award</strong> showcases top senior living communities stand out for their exceptional care and support of seniors.</p>
						<a href="#">Best of 2023</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include 'footer.php'; ?>