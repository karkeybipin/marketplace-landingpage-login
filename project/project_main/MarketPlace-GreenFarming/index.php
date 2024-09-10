<?php
@session_start();
if (array_key_exists('username', $_SESSION) && array_key_exists('username', $_COOKIE)) {
	header('location:newsmagazine/dashboard.php');
}
include('class/user.class.php');
// $userObject = new User();
$error = [];
// validation
if (isset($_POST['submit'])) {
	if (isset($_POST['email']) && !empty($_POST['email'])) {

		$userObject->email = $_POST['email'];
	} else {
		$error['email'] = "Your email is invalid!";
	}

	if (isset($_POST['password']) && !empty($_POST['password'])) {

		$userObject->password = $_POST['password'];
	} else {
		$error['password'] = "enter the password!";
	}
	if (count($error) < 1) {
		$userObject->login();
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Marketplace - Green | Farming</title>
	<link rel="stylesheet" href="css/style.css">
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-5QPDV85');
	</script>
</head>

<body class="home page-template-default page page-id-15">
	<header id="header">
		<div class="bound-header">
			<h1 id="logo">
				<h1><span><strong>Green</strong>Farming</span></h1>
				<style>
					h1 span strong {
						font-weight: bold;
						color: Green;
					}

					h1 span {
						font-size: 0.5em;
						font-weight: bold;
						text-transform: uppercase;
						letter-spacing: 0.1em;
						font-family: Arial, sans-serif;
					}
				</style>

				</svg>
				</a>
			</h1>
			<nav id="nav">
				<div class="primary-link-wrap">
					<ul class="level-one-ul">
						<!-- <li class="level-one-li">
							<a href="#" class="primary link">About</a>
							<ul class="level-two-ul">
								This is the marketplace <br>
								Of the page Green🍀Farming
							</ul>
						</li>
						<li class="level-one-li">
							<a href="#" class="primary link">Gallery</a>
							<ul class="level-two-ul"> -->
								<!-- <img src="../imagess/adminimg.jpg" alt="" style="height:120px;width: 120px;">
								<img src="../imagess/wallpaper.jpg" alt="" style="height:120px;width: 120px;">
								<img src="../imagess/technology-tractor-field.jpg" alt="" style="height:120px;width: 120px;"> -->
							<!-- </ul>
						</li> -->
						<!-- <li class="level-one-li">
							<button onclick="goBack()" style="color: White; background:Red; height:45px; width:75px; margin-left: 150px;">↩</button>

							<script>
								function goBack() {
									window.history.back();
								}
							</script>
						</li> -->


						<a href="order.php" class="primary donate">Order Now</a>
			</nav>
			<button class="goback" onclick="goBack()" style="color: White; background:Red; height:45px; width:75px; margin-left: 150px;">↩</button>

			<script>
				function goBack() {
					window.history.back();
				}
			</script>
		</div>
	</header>


	<div class="block block_tile-links">
		<div class="block block_community">
			<div class="bound-layout">
				<h3>Agricultural products</h3>
				<div class="intro">
					<h2>Lists</h2>
				</div>
				<div class="people-quotes">
					<div class="slot slot-person">
						<div class="tile person">
							<a href="#">
								<div class="tile-image">
									<div class="image-auto" style="padding-bottom: 100%">
										<img loading="lazy" src="images/potato.png">
									</div>
								</div>
								<div class="text">
									<h4>Potatoes (आलु)</h4>
									<p>price: 75 Rs per kgs</p>
								</div>
							</a>
						</div>
					</div>
					<div class="slot slot-person">
						<div class="tile person">
							<a href="#">
								<div class="tile-image">
									<div class="image-auto" style="padding-bottom: 100%">
										<img loading="lazy" src="images/onion.png" sizes="(min-width: 600px) 50vw, 100vw" alt="">
									</div>
								</div>
								<div class="text">
									<h4>Onions <strong style="font-weight: bold;color: red;">(प्याज) </strong></h4>
									<p>price: 75 Rs per kgs</p>
								</div>
							</a>
						</div>
					</div>
					<div class="slot slot-person">
						<div class="tile person">
							<a href="#">
								<div class="tile-image">
									<div class="image-auto" style="padding-bottom: 100%">
										<img loading="lazy" src="images/tomato.png" sizes="(min-width: 600px) 50vw, 100vw" alt="">
									</div>
								</div>
								<div class="text">
									<h4>Tomatoes (टमाटर)</h4>
									<p>price: 75 Rs per kgs</p>
								</div>
							</a>
						</div>
					</div>
					<div class="slot slot-person">
						<div class="tile person">
							<a href="#">
								<div class="tile-image">
									<div class="image-auto" style="padding-bottom: 100%">
										<img loading="lazy" src="images/cabbage.png" sizes="(min-width: 600px) 50vw, 100vw" alt="">
									</div>
								</div>
								<div class="text">
									<h4>Cabbage (बन्दागोभी / गोभी)</h4>
									<p>price: 45 Rs per kgs</p>
								</div>
							</a>
						</div>
					</div>
					<div class="slot slot-person">
						<div class="tile person">
							<a href="#">
								<div class="tile-image">
									<div class="image-auto" style="padding-bottom: 100%">
										<img loading="lazy" src="images/cauli.png" sizes="(min-width: 600px) 50vw, 100vw" alt="">
									</div>
								</div>
								<div class="text">
									<h4>Cauliflower (काउली / फूलगोभी)</h4>
									<p>price: 35 Rs per kgs</p>
								</div>
							</a>
						</div>
					</div>
					<div class="slot slot-person">
						<div class="tile person">
							<a href="#">
								<div class="tile-image">
									<div class="image-auto" style="padding-bottom: 100%">
										<img loading="lazy" src="images/gantemula.png" sizes="(min-width: 600px) 50vw, 100vw" alt="">
									</div>
								</div>
								<div class="text">
									<h4>Turnip (मूला मूली)</h4>
									<p>price: 175 Rs per kgs</p>
								</div>
							</a>
						</div>
					</div>
					<div class="slot slot-person">
						<div class="tile person">
							<a href="#">
								<div class="tile-image">
									<div class="image-auto" style="padding-bottom: 100%">
										<img loading="lazy" src="images/chilligreen.png" sizes="(min-width: 600px) 50vw, 100vw" alt="">
									</div>
								</div>
								<div class="text">
									<h4>Chilli(खुर्सानी)</h4>
									<p>price: 45 Rs per kgs</p>
								</div>
							</a>
						</div>
					</div>
					<div class="slot slot-person">
						<div class="tile person">
							<a href="#">
								<div class="tile-image">
									<div class="image-auto" style="padding-bottom: 100%">
										<img loading="lazy" src="images/ginger.png" sizes="(min-width: 600px) 50vw, 100vw" alt="">
									</div>
								</div>
								<div class="text">
									<h4>ginger (अदुवा)</h4>
									<p>price: 293 Rs per kgs</p>
								</div>
							</a>
						</div>
					</div>
					<div class="slot slot-person">
						<div class="tile person">
							<a href="#">
								<div class="tile-image">
									<div class="image-auto" style="padding-bottom: 100%">
										<img loading="lazy" src="images/pumpkin.png" sizes="(min-width: 600px) 50vw, 100vw" alt="">
									</div>
								</div>
								<div class="text">
									<h4> Pumpkin (फर्सी)</h4>
									<p>price: 80 Rs per kgs</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="line" style="color:black; border: 2px solid black; width: 1100px;padding: 0; margin-left: 220px;"></div>

		<!-- For dairy products -->
		<div class="block block_community">
			<div class="bound-layout">
				<h3>Dairy products</h3>
				<div class="intro">
					<h2>Lists</h2>

				</div>
				<div class="people-quotes">
					<div class="slot slot-person">
						<div class="tile person">
							<a href="#">
								<div class="tile-image">
									<div class="image-auto" style="padding-bottom: 100%">
										<img loading="lazy" src="images/Milk.jfif">
									</div>
								</div>
								<div class="text">
									<h4>Milk ()</h4>
									<p>price: 120 Rs per Ltrs</p>
								</div>
							</a>
						</div>
					</div>
					<div class="slot slot-person">
						<div class="tile person">
							<a href="#">
								<div class="tile-image">
									<div class="image-auto" style="padding-bottom: 100%">
										<img loading="lazy" src="images/paneer.jpg" sizes="(min-width: 600px) 50vw, 100vw" alt="">
									</div>
								</div>
								<div class="text">
									<h4>Paneer <strong style="font-weight: bold;color: red;">() </strong></h4>
									<p>price: 270 Rs per kgs</p>
								</div>
							</a>
						</div>
					</div>
					<div class="slot slot-person">
						<div class="tile person">
							<a href="#">
								<div class="tile-image">
									<div class="image-auto" style="padding-bottom: 100%">
										<img loading="lazy" src="images/curd.jpeg" sizes="(min-width: 600px) 50vw, 100vw" alt="">
									</div>
								</div>
								<div class="text">
									<h4>Curd ()</h4>
									<p>price: 135 Rs per ltrs</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- For dairy products -->
		<!-- <div class="line" style="color:black; border: 2px solid black; width: 950px;padding: 0; margin-left: 220px;"></div> -->
		<div class="line" style="color:black; border: 2px solid black; width: 1100px;padding: 0; margin-left: 220px;"></div>


		<div class="block block_tile-links">
			<div class="bound-layout">
				<div class="intro">
				</div>
			</div>

			<div class="block block_community">
				<div class="bound-layout">
					<div class="intro">
					</div>
					<div class="people-quotes">
						<div class="slot slot-person">
							<div class="tile person">
							</div>
						</div>
						<div class="slot slot-person">
							<div class="tile person">
							</div>
						</div>
						<div class="slot slot-person">
							<div class="tile person">
							</div>
						</div>
						<style>
							.duration {
								font-size: 14px;
								color: #777777;
								margin-bottom: 5px;
							}
						</style>
					</div>
				</div>
			</div>
		</div>

		<!-- <div class="block block_tile-links">
			<div class="block block_community">
				<div class="bound-layout">
					<div class="intro">
						<button onclick="goBack()">Go Back</button>

						<script>
							function goBack() {
								window.history.back();
							}
						</script>

					</div>
					<div class="people-quotes">

					</div>
				</div>
			</div> -->

		<footer id="footer">
			<div class="bound-footer">
				<!-- <div class="mailing-list">
						<h4>enter your email</h4>
						<form action="#" method="post" class="email-signup-form" target="_blank" novalidate>
							<input type="email" name="EMAIL" placeholder="Email Address">
							<div style="position: absolute; left: -5000px;" aria-hidden="true">
								<input type="text" name="b_2bed87b8ed3d2d7231a9195d7_f1dec96ef0" tabindex="-1" value="">
							</div>
							<input type="submit" value="Submit">
						</form>
					</div> -->

				<!-- emails to contact (User)-> handler of the site/page. -->
				<!-- <div class="mailing-list">
						<h4>Enter your email</h4>
						<form action="#" method="post" class="email-signup-form" target="_blank" novalidate>
							<input type="email" name="EMAIL" placeholder="Email Address" required>
							<div style="position: absolute; left: -5000px;" aria-hidden="true">
								<input type="text" name="b_2bed87b8ed3d2d7231a9195d7_f1dec96ef0" tabindex="-1" value="">
							</div>
							<input type="submit" value="Submit">
						</form>
					</div>
					<div class="ft-blocks">
						<div class="ft-block">
							<h5>Mission</h5>
							<p>We unleash the potential of best way to serve our customer with our best product.</p>
						</div>
						<div class="ft-block">
							<h5>Address</h5>
							<p>
								Kathmandu, Nepal 1275 <br>
								Kathmandu, HQ 20006 <br>
								<b> Please mail checks to: </b>
								<br> Host: Rajan Gurung & Bipin Karki<br>
								PO BOX 120.232.45554 hadi-gaun, Bhaktapur 20735-9997, Nepal
							</p>
							<script type="application/ld+json">
								{
									"@context": "#",
									"@type": "company",
									"address": {
										"@type": "PostalAddress",
										"addressLocality": "Kathmandu",
										"addressRegion": "Budanilkantha, Sitapaila ",
										"streetAddress": "New-Road",
										"postalCode": "200145 <br> <br> Please mail checks to: </b> <br> ATTN: Karki Bipin <br> PO BOX 374 kalanki, MD 012102-197898"
									},
									"description": "We unleash the potential of best way to serve our customer with our best product.",
									"name": "Green | Farming",
									"telephone": "(+977) 9841149891",
									"email": "karkeybipin@gmail.com"
								}
							</script>
						</div>
						<div class="ft-block">
							<h5>Contact Us</h5>
							<p>
								<a href="#mailto:">tamurajan18@gmail.com</a> <br>
								<a href="#mailto:">karkeybipin@gmail.com</a> <br>
								<a href="#tel:12024961992">(+977) 98********</a>
							</p>
						</div> -->
				<!-- <div class="ft-block">
							<h5>Connect</h5>
							<nav class="social">
								<a href="#">
									<i><svg viewBox="0 0 800 800">
											<path d="M445 643h-90V419h-75v-87h75v-64q0-55 32-86 30-29 80-29 28 0 67 3v78h-47q-42 0-42 38v60h86l-11 87h-75v224z" />
										</svg>
									</i>
								</a>
								<a href="#">
									<i>
										<svg viewBox="0 0 800 800">
											<path d="M679 239s-21 34-55 57c7 156-107 329-314 329-103 0-169-50-169-50s81 17 163-45c-83-5-103-77-103-77s23 6 50-2c-93-23-89-110-89-110s23 14 50 14c-84-65-34-148-34-148s76 107 228 116c-22-121 117-177 188-101 37-6 71-27 71-27s-12 41-49 61c30-2 63-17 63-17z" />
										</svg>
									</i>
								</a>
								<a href="#">
									<i>
										<svg viewBox="0 0 800 800">
											<path d="M150 400c0-119 0-166 42-208s88-42 208-42 166 0 208 42 42 89 42 208 0 166-42 208-88 42-208 42-166 0-208-42-42-89-42-208zm455 0c0-114 0-148-29-176-29-29-62-29-176-29s-148 0-176 29c-29 29-29 62-29 176s0 148 29 176c29 29 62 29 176 29s148 0 176-29c29-29 29-62 29-176zM400 272a128 128 0 1 1 0 256 128 128 0 0 1 0-256zm0 211c46 0 83-37 83-83s-37-83-83-83-83 37-83 83 37 83 83 83zm163-216c0 16-13 30-30 30-16 0-30-14-30-30 0-17 14-30 30-30 17 0 30 13 30 30z" />
										</svg>
									</i>
								</a>
								<a href="#">
									<i>
										<svg viewBox="0 0 800 800">
											<path d="M400 224c144 0 201 2 224 25 17 17 26 52.125 26 151s-9 134-26 151c-23 23-80 25-224 25s-201-2-224-25c-17-17-26-52.125-26-151s9-134 26-151c23-23 80-25 224-25zm-52 100v141l135-70z" />
										</svg>
									</i>
								</a>
							</nav>
						</div> -->
			</div>
			<div class="cred">
				<nav>
					<a href="#">Partners</a>
					<a href="#">|</a>
					<a href="https://www.facebook.com/bipin.karkey">Bipin karki</a>
					<a href="#">&</a>
					<a href="https://www.facebook.com/profile.php?id=100008235061365">Rajan Gurung</a>
				</nav>
				<footer>
					<p> &copy; <span id="currentYear"></span> Rajan & Bipin. All rights reserved.</p>
				</footer>
				<script>
					const currentYear = new Date().getFullYear();
					document.getElementById("currentYear").textContent = currentYear;
				</script>
			</div>
	</div>

	</footer>
</body>

</html>