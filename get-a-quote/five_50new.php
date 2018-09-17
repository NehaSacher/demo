<!doctype html>
<html lang="en">

<?php include $_SERVER['DOCUMENT_ROOT'] . "\partials\html-head.php" ?>

<body>

<?php include $_SERVER['DOCUMENT_ROOT'] . '\partials\headers\header_inner.php'; ?>
<main>
<div class="business_size five_fifty five_fifty_new">
	<div class="container">
		<h4>RESULTS FOR</h4>
		<h1>5-50 EMPLOYEES</h1> 
		<p>You are a <span>new</span> Tufts Health Plan broker looking for quotes for groups with <span>5-50 employees</span>.
			As a <span>new broker</span>, you will need to complete the following forms to get started.
			Email the completed forms, along with a <span>copy of your state License(s)</span> to: 
			<br>
			<a href="mailto:broker_forms@tufts-health.com">broker_forms@tufts-health.com </a>
		</p>
		<div id="download_buttons">
		<div class="col-md-6">
			<a href="javascript:void(0);" class="download_button"><img src="/assets/images/file.png" class="offhover"><img src="/assets/images/file_white.png" class="onhover">Individual Form<i class="fa fa-download"></i></a>
			</div>
			<div class="col-md-6">
			<a href="javascript:void(0);" class="download_button"><img src="/assets/images/file.png" class="offhover"><img src="/assets/images/file_white.png" class="onhover">BrokerLink Form<i class="fa fa-download"></i></a>
			</div>
			<div class="col-md-6">
			<a href="javascript:void(0);" class="download_button"><img src="/assets/images/file.png" class="offhover"><img src="/assets/images/file_white.png" class="onhover">Agency Form<i class="fa fa-download"></i></a>
			</div>
			<div class="col-md-6">
			<a href="javascript:void(0);" class="download_button"><img src="/assets/images/file.png" class="offhover"><img src="/assets/images/file_white.png" class="onhover">W9 Form<i class="fa fa-download"></i></a>
			</div>
		</div>
		<p class="register_today">
			Want all forms in one zip?  <a href="javascript:void(0);">Download all</a> forms to get started.</p>
			<p class="or"><span>or</span></p>
		</div>
	</div>
	<div class="retirement gray five_fifty_existing">
		<div class="container">
			<div class="col-md-6">
				<p class="contact_header">For a business this size in Massachusetts, you
					can contact Greg Saia regarding your quote:</p>
					<p class="contact_number"><a href="tel:+6179729040">1-800-208-8013  ext. 58682</a></p>
					<p class="contact_email"><a href="mailto:paula_giokas@tufts-health.com">greg_saia@tufts-health.com</a></p>
				</div>
				<div class="col-md-6 contact">
					<p class="contact_header contact_form">We can contact you! Simply fill in your basic information and we’ll reach out:</p>
					<form method=get>
						<input type="text" placeholder="Full Name">
						<input type="text" placeholder="Email Address">
						<input type="text" placeholder="Phone Number">
						<div class="selectdiv">
						<select>
							<option value="">Best Call Time</option>
							<option value="morning">Morning</option>
							<option value="afternoon">Afternoon</option>
							<option value="evening">Evening</option>
							<option value="night">Night</option>
						</select>
						</div>
						<label>Preferred contact method</label>
						<label><input type="radio" name="gender" value="male" checked> Phone</label>
						<label><input type="radio" name="gender" value="female"> Email</label>


						<p class="submit"><input type="submit" value="Submit"></p>
					</form>
				</div>
			</div>
		</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '\partials\components\checklist.php'; ?>
</main>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '\partials\footers\footerno_options.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '\partials\body-scripts.php'; ?>

</body>
</html>