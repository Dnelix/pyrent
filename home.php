<?php include('inc/head.php'); ?>
	<script>
		function addArrowClass() {
			_('up-arrow').classList.add("active");
			_('renterBtn').classList.add("active");
			_('landlordBtn').classList.remove("active");
		}
		function removeArrowClass() {
			_('up-arrow').classList.remove("active");
			_('renterBtn').classList.remove("active");
			_('landlordBtn').classList.add("active");
		}
	</script>
				<div data-v-79b89e55="" class="main-module-container">
					<div data-v-ca8873cc="" data-v-79b89e55="" class="row">
						<div data-v-ca8873cc="" class="headerSection">
							<div data-v-ca8873cc="" class="overlay">
								<img data-v-ca8873cc="" src="./images/bg_city1.jpg" alt="">
								<div data-v-ca8873cc="" class="overlay-gradient"></div>
							</div>
							<div data-v-ca8873cc="" class="headerrow">
								<div data-v-ca8873cc="" class="headerrow-inner">
									<div data-v-ca8873cc="" class="col col70">
										<div data-v-ca8873cc="">
											<h1 data-v-ca8873cc="">
											Paying &amp; collecting rent online has never been this <em data-v-ca8873cc=""><strong data-v-ca8873cc=""> easy</strong></em>.
											</h1>
										</div>
										<div data-v-ca8873cc="" class="header_cta_wrapper">
											<div data-v-ca8873cc="" class="stakeHolder">
												<div data-v-ca8873cc="" id="landlordBtn" class="col50 active" onClick="javascript:removeArrowClass()">
													<span data-v-ca8873cc="" class=" only-tablet-and-above"> I'm a </span>
													<strong data-v-ca8873cc=""> Landlord </strong>
												</div>
												<div data-v-ca8873cc="" id="renterBtn" class="col50" onClick="javascript:addArrowClass()">
													<span data-v-ca8873cc="" class="only-tablet-and-above"> I'm a </span>
													<strong data-v-ca8873cc=""> Renter </strong>
												</div>
											</div>
											<div data-v-ca8873cc="" id="up-arrow" class="up-arrow"></div>
											<div data-v-ca8873cc="" class="email_container">
												<input data-v-ca8873cc="" id="homeEmail" type="email" placeholder="Enter your email address">
												<a data-v-ca8873cc="" onClick="signUpFromHome()" class="signup" style="cursor:pointer"> Sign Up </a>
											</div>
										</div>
									</div>
									<div data-v-ca8873cc="" class="col col30 only-desktop">
										<img data-v-ca8873cc="" src="images/phone2.png"></div>
									</div>
								</div>
							</div>
							<div data-v-ca8873cc="" class="feature_section">
								<div data-v-ca8873cc="" class="fullwidth">
									<h2 data-v-ca8873cc=""> Free for Landlords </h2>
									<p data-v-ca8873cc="" class="sub-title"> No commitments, No monthly fees <br data-v-ca8873cc="">Works with all Banks</p>
								</div>
								<div data-v-ca8873cc="" class="featurerow">
									<div data-v-ca8873cc="" class="col">
										<h3 data-v-ca8873cc=""> Landlords </h3>
										<div data-v-ca8873cc="">
											<ul data-v-ca8873cc="" class="featureList">
												<li data-v-ca8873cc="">
													<h4 data-v-ca8873cc="">
														<i data-v-ca8873cc="" aria-hidden="true" class="fa fa-address-card"></i>
													</h4>
													<p data-v-ca8873cc="" class="ctaLandlords"> Sign up </p>
												</li>
												<li data-v-ca8873cc="">
													<h4 data-v-ca8873cc="">
														<i data-v-ca8873cc="" aria-hidden="true" class="fa fa-home"></i>
													</h4>
													<p data-v-ca8873cc=""> Add your property </p>
												</li>
												<li data-v-ca8873cc="">
													<h4 data-v-ca8873cc="">
														<i data-v-ca8873cc="" aria-hidden="true" class="fa fa-user-plus"></i>
													</h4>
													<p data-v-ca8873cc=""> Invite renters </p>
												</li>
												<li data-v-ca8873cc="">
													<h4 data-v-ca8873cc="">
														<i data-v-ca8873cc="" aria-hidden="true" class="fa fa-thumbs-up"></i>
													</h4>
													<p data-v-ca8873cc=""> Get paid </p>
												</li>
												<li data-v-ca8873cc="">
													<h4 data-v-ca8873cc="">
														<i data-v-ca8873cc="" aria-hidden="true" class="fa fa-bar-chart"></i>
													</h4>
													<p data-v-ca8873cc=""> Track payments </p>
												</li>
												<li data-v-ca8873cc="">
													<a data-v-ca8873cc="" href="landlords" class="infoButton"> More Info </a>
												</li>
											</ul>
										</div>
									</div>
									<div data-v-ca8873cc="" class="col renterFeatureCol">
										<h3 data-v-ca8873cc=""> Renters </h3>
										<div data-v-ca8873cc="">
											<ul data-v-ca8873cc="" class="featureList">
												<li data-v-ca8873cc="">
													<h4 data-v-ca8873cc="">
														<i data-v-ca8873cc="" aria-hidden="true" class="fa fa-address-card"></i>
													</h4>
													<p data-v-ca8873cc=""> Accept landlord invite </p>
												</li>
												<li data-v-ca8873cc="">
													<h4 data-v-ca8873cc="">
														<i data-v-ca8873cc="" aria-hidden="true" class="fa fa-credit-card-alt"></i>
													</h4>
													<p data-v-ca8873cc=""> Add a payment method<br data-v-ca8873cc="">
														<span data-v-ca8873cc="" class="smaller-text"> (E-check, Credit Card, and more soon!) </span>
													</p>
												</li>
												<li data-v-ca8873cc="">
													<h4 data-v-ca8873cc="">
														<i data-v-ca8873cc="" aria-hidden="true" class="fa fa-mobile"></i>
													</h4>
													<p data-v-ca8873cc=""> Pay rent from any device, anytime </p>
												</li>
												<li data-v-ca8873cc="">
													<h4 data-v-ca8873cc="">
														<i data-v-ca8873cc="" aria-hidden="true" class="fa fa-envelope"></i>
													</h4>
													<p data-v-ca8873cc=""> Get receipts in your inbox </p>
												</li>
												<li data-v-ca8873cc="">
													<a data-v-ca8873cc="" href="renters" class="infoButton"> More Info</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div data-v-ca8873cc="" class="pricing_section">
								<div data-v-ca8873cc="" class="row">
									<h2 data-v-ca8873cc=""> Simple Pricing </h2>
								</div>
								<div data-v-ca8873cc="" class="pricingrow">
									<div data-v-ca8873cc="" class="col">
										<h3 data-v-ca8873cc=""> Online Bank Transfer <br data-v-ca8873cc="">
											<span data-v-ca8873cc="" class="small-text"> (E-check) </span>
										</h3>
										<div data-v-ca8873cc="">
											<ul data-v-ca8873cc="">
												<li data-v-ca8873cc="">
													<h4 data-v-ca8873cc=""> LANDLORDS </h4>
													<p data-v-ca8873cc=""><strong data-v-ca8873cc=""> FREE </strong></p>
												</li>
												<li data-v-ca8873cc="">
													<h4 data-v-ca8873cc=""> RENTERS </h4>
													<p data-v-ca8873cc="">
														<strong data-v-ca8873cc=""> $2.55 </strong><br data-v-ca8873cc="">
														<span data-v-ca8873cc=""> per rent payment </span>
													</p>
												</li>
												<li data-v-ca8873cc="">
													<h4 data-v-ca8873cc="">
														<i data-v-ca8873cc="" aria-hidden="true" class="fa fa-university"></i>
													</h4>
													<p data-v-ca8873cc=""> Supports all major financial institutions </p>
												</li>
											</ul>
										</div>
									</div>
								<div data-v-ca8873cc="" class="col">
									<h3 data-v-ca8873cc=""> Credit Card </h3>
									<div data-v-ca8873cc="">
										<ul data-v-ca8873cc="">
											<li data-v-ca8873cc="">
												<h4 data-v-ca8873cc=""> LANDLORDS </h4>
												<p data-v-ca8873cc=""><strong data-v-ca8873cc=""> FREE </strong></p>
											</li>
											<li data-v-ca8873cc="">
												<h4 data-v-ca8873cc=""> RENTERS </h4>
												<p data-v-ca8873cc="">
													<strong data-v-ca8873cc=""> 3.5% </strong><br data-v-ca8873cc="">
													<span data-v-ca8873cc=""> per rent payment </span>
												</p>
											</li>
											<li data-v-ca8873cc="">
												<h4 data-v-ca8873cc="" class="small-icons">
													<i data-v-ca8873cc="" aria-hidden="true" class="fa fa-cc-visa"></i>
													<i data-v-ca8873cc="" aria-hidden="true" class="fa fa-cc-mastercard"></i>
													<i data-v-ca8873cc="" aria-hidden="true" class="fa fa-cc-discover"></i>
													<i data-v-ca8873cc="" aria-hidden="true" class="fa fa-cc-amex"></i>
												</h4>
												<p data-v-ca8873cc=""> Supports Visa, MasterCard, Discover, and AmericanExpress </p>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div data-v-ca8873cc="" class="faq_container">
							<h2 data-v-ca8873cc=""> FAQs </h2>
							<div data-v-ca8873cc="" class="faqrow">
							<div data-v-0ab61843="" data-v-ca8873cc="" class="accordian">
								<ul data-v-0ab61843="">
									<li data-v-0ab61843="" class="">
										<h6 data-v-0ab61843="" class="accordion">
											Do I need a Chase bank account to use payrent.ng?
											<!--i data-v-0ab61843="" class="fa fa-plus"></i-->
										</h6>
										<p data-v-0ab61843="" style="display: none;"> No, PayRent and Chase securely processes payments with all Banks and Credit Unions in the United States. </p>
									</li>
									<li data-v-0ab61843="" class="">
										<h6 data-v-0ab61843="" class="accordion">
											Is there a per transaction limit?
										</h6>
										<p data-v-0ab61843="" style="display: none;"> PayRent and Chase will process up to $50k per payment. </p>
									</li>
									<li data-v-0ab61843="" class="">
										<h6 data-v-0ab61843="" class="accordion">
											How many bank accounts can I add to my account?
										</h6>
										<p data-v-0ab61843="" style="display: none;">  Only 1. </p>
									</li>
									<li data-v-0ab61843="" class="">
										<h6 data-v-0ab61843="" class="accordion">
											Can I create more than one PayRent account to accept payments?
										</h6>
										<p data-v-0ab61843="" style="display: none;"> Yes, you will just need to use a different email address. </p>
									</li>
									<li data-v-0ab61843="" class="">
										<h6 data-v-0ab61843="" class="accordion">
											Can I prevent payments?
										</h6>
										<p data-v-0ab61843="" style="display: none;"> Yes, you can chose this option in your landlord dashboard. </p>
									</li>
									<li data-v-0ab61843="" class="">
										<h6 data-v-0ab61843="" class="accordion">
											How do my renters signup?
										</h6>
										<p data-v-0ab61843="" style="display: none;"> From your Landlord dashboard you will send your renter an invitation via text or email. Your renters will click the activation link, sign up and pay their rent. </p>
									</li>
									<li data-v-0ab61843="" class="">
										<h6 data-v-0ab61843="" class="accordion">
											Will I receive a 1099K?
										</h6>
										<p data-v-0ab61843="" style="display: none;"> Yes, if you process more than 200 transaction AND $20,000 in a year you will receive a 1099K. </p>
										</li>
										<li data-v-0ab61843="" class="">
											<h6 data-v-0ab61843="" class="accordion">
												Can a landlord absorb the ACH fee making it free for my tenant?
											</h6>
											<p data-v-0ab61843="" style="display: none;"> Yes, from your dashboard settings you can select absorb fee making ACH rent payments free for your tenants. If your tenant wants to pay rent using their credit card, your tenant will pay the fee </p>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div data-v-3fc21290="" data-v-ca8873cc="" class="ctabanner">
							<div data-v-3fc21290="" class="ctabanner-inner-container">
								<h2 data-v-3fc21290="">Collect Rent Online Today!</h2>
								<button data-v-3fc21290="" class="" onclick="goTo('signup')"> Sign Up </button>
							</div>
						</div>
					</div>
				</div>
				
<?php include('inc/foot.php'); ?>			