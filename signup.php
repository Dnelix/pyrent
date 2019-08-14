<?php include('inc/head.php'); ?>
<?php
	if(isset($_GET['e'])){ $em = $_GET['e']; } else $em = "";
	if(isset($_GET['who'])){ $who = $_GET['who']; } else $who = "landlord";
?>
	  <div data-v-79b89e55="" class="main-module-container">
		<div data-v-3e8fa53f="" data-v-79b89e55="" class="signup-wrapper">
			<img data-v-3e8fa53f="" src="./images/PayRent.Web.Transparent.png" class="signup logo">
			<h1 data-v-3e8fa53f="">Create your account</h1>
			<div data-v-3e8fa53f="" class="signup-inner-wrapper">
				<div data-v-3e8fa53f="" class="header_cta_wrapper">
					<div data-v-3e8fa53f="" class="stakeHolder">
						<div data-v-3e8fa53f="" id="landlord" class="col50 <?= $who=='landlord' ? 'active':''; ?>" onclick="toggleWho('landlord','tenant')">
							<span data-v-3e8fa53f="" class="only-tablet-and-above">I'm a </span><strong data-v-3e8fa53f="">Landlord</strong>
						</div>
						<div data-v-3e8fa53f="" id="tenant" class="col50 <?= $who=='tenant' ? 'active':''; ?>" onclick="toggleWho('tenant','landlord')">
							<span data-v-3e8fa53f="" class="only-tablet-and-above">I'm a </span><strong data-v-3e8fa53f="">Renter</strong>
						</div>
					</div>
				</div>
				<div data-v-79545633="" data-v-3e8fa53f="" class="el-row">
					<form data-v-79545633="" class="el-form sign-up-form" autocomplete="off">
					
						<input type="hidden" id="who" name="who" value="<?= $who; ?>"/>
						
						<div data-v-79545633="" class="el-form-item el-form-item--feedback"><!---->
							<div class="el-form-item__content" style="margin-left: 0px;">
								<div data-v-79545633="" class="el-input"><!---->
									<input type="email" autocomplete="off" id="e2et-email" name="email" placeholder="Email" value="<?= $em; ?>" class="el-input__inner">
								</div><!---->
							</div>
						</div>
						<div data-v-79545633="" class="el-form-item el-form-item--feedback">
							<div class="el-form-item__content" style="margin-left: 0px;">
								<div data-v-79545633="" class="el-input">
									<input type="text" autocomplete="off" id="e2et-first-name" name="firstname" placeholder="First Name" class="el-input__inner">
								</div>
								<div class="el-form-item__error">Please input First Name</div>
							</div>
						</div>
						<div data-v-79545633="" class="el-form-item el-form-item--feedback">
							<div class="el-form-item__content" style="margin-left: 0px;">
								<div data-v-79545633="" class="el-input">
									<input type="text" autocomplete="off"  id="e2et-last-name" name="lastname" placeholder="Last Name"  class="el-input__inner">
								</div>
							</div>
						</div>
						<div data-v-79545633="" class="el-form-item el-form-item--feedback">
							<div class="el-form-item__content" style="margin-left: 0px;">
								<div data-v-79545633="" class="el-input">
									<input type="password" autocomplete="off" id="e2et-password" name="password" placeholder="Password" class="el-input__inner">
								</div>
							</div>
						</div>
						<div data-v-79545633="" class="el-form-item confirm-pssword el-form-item--feedback">
							<div class="el-form-item__content" style="margin-left: 0px;">
								<div data-v-79545633="" class="el-input">
									<input type="password" autocomplete="off" id="" name="confirmPassword" placeholder="Confirm Password" class="el-input__inner">
								</div>
							</div>
						</div>
						<div data-v-79545633="" class="el-form-item confirm-pssword el-form-item--feedback">
							<div class="el-form-item__content" style="margin-left: 0px;">
								<div data-v-79545633="" class="el-input">
									<input type="text" autocomplete="off" id="e2et-phone" name="phone" placeholder="Phone Number" class="el-input__inner">
								</div>
							</div>
						</div>
						<div data-v-79545633="" class="el-form-item register-business el-form-item--feedback">
							<div class="el-form-item__content" style="margin-left: 0px;">
								<label data-v-79545633="" role="checkbox" id="e2et-isBusiness" class="el-checkbox">
									<span aria-checked="mixed" id="biz" class="el-checkbox__input">
										<span class="el-checkbox__inner"></span>
										<input type="checkbox" aria-hidden="true" name="terms" class="el-checkbox__original" value="" onClick="toggleCheck('biz'); toggleElement('bizDiv')">
									</span>
									<span class="el-checkbox__label">Register as a business</span>
								</label>
							</div>
						</div>
						<div data-v-79545633="" class="el-form-item el-form-item--feedback" id="bizDiv" style="display:none">
							<div class="el-form-item__content" style="margin-left: 0px;">
								<div data-v-79545633="" class="el-input">
									<input type="text" autocomplete="off"  id="e2et-biz-name" name="bizname" placeholder="Business Name"  class="el-input__inner">
								</div>
							</div>
						</div>
						
						<div data-v-79545633="" class="el-form-item el-form-item--feedback">
							<div class="el-form-item__content" style="margin-left: 0px;">
								<label data-v-79545633="" role="checkbox" id="e2et-terms-condition" class="el-checkbox">
									<span aria-checked="mixed" id="terms_box" class="el-checkbox__input is-checked">
										<span class="el-checkbox__inner"></span>
										<input type="checkbox" aria-hidden="true" name="terms" class="el-checkbox__original" value="true" onClick="toggleCheck('terms_box')">
									</span>
									<a data-v-79545633="" href="terms_conditions" class="terms-link" target="_blank">Terms and conditions</a>
								</label>
							</div>
						</div>
						<div data-v-79545633="" class="el-form-item actions el-form-item--feedback">
							<div class="el-form-item__content" style="margin-left: 0px;">
								<button data-v-79545633="" type="submit" class="el-button el-button--primary" id="e2et-signup-btn" name="submit">
								<span>Create your account</span>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
<?php include('inc/foot.php'); ?>