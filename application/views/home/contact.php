<?php $this->load->view("home/inc/header") ?>
<div class="breadcrumb-banner-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumb-text">
					<h1 class="text-center">CONTACT US</h1>
					<div class="breadcrumb-bar">
						<ul class="breadcrumb text-center">
							<li><a href="<?= base_url() ?>">Home</a></li>
							<li>CONTACT</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End of Breadcrumb Banner Area-->
<!--Google Map Area Start-->
<!--End of Google Map Area-->
<!--Contact Form Area Start-->
<div class="contact-form-area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h4 class="contact-title">contact info</h4>
				<div class="contact-text">
					<p><span class="c-icon"><i class="zmdi zmdi-phone"></i></span><span class="c-text">+234 703 324 0864</span></p>
					<p><span class="c-icon"><i class="zmdi zmdi-email"></i></span><span class="c-text">info@fnpss.sch.ng</span></p>
					<p><span class="c-icon"><i class="zmdi zmdi-pin"></i></span><span class="c-text">Along Erepa road, after the Mtn Mast, <br>
							Yenagoa, Bayelsa State,</span></p>
				</div>
				<h4 class="contact-title">social media</h4>
				<div class="link-social">
					<a href="#"><i class="zmdi zmdi-facebook"></i></a>
					<a href="http://webmail.fnpss.sch.ng/" target="_blank"><i class="zmdi zmdi-rss "></i></a>
					<a href="# "><i class="zmdi zmdi-google-plus "></i></a>
					<a href="# "><i class="zmdi zmdi-pinterest "></i></a>
					<a href="# "><i class="zmdi zmdi-instagram "></i></a>
				</div>
			</div>
			<div class="col-md-7 ">
				<h4 class="contact-title ">send your massage</h4>
				<form id="contact-form " action="mail.php " method="post ">
					<div class="row ">
						<div class="col-md-6 ">
							<input type="text " name="name " placeholder="name ">
						</div>
						<div class="col-md-6 ">
							<input type="email " name="email " placeholder="Email ">
						</div>
						<div class="col-md-12 ">
							<textarea name="message " cols="30 " rows="10 " placeholder="Message "></textarea>
							<button type="submit " class="button-default ">SUBMIT</button>
						</div>
					</div>
				</form>
				<p class="form-messege "></p>
			</div>
		</div>
	</div>
</div>


<?php $this->load->view("home/inc/footer") ?>