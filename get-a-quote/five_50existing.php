<!doctype html>
<html lang="en">
<?php include $_SERVER['DOCUMENT_ROOT'] . "\partials\html-head.php" ?>
<body>

<?php include $_SERVER['DOCUMENT_ROOT'] . '\partials\headers\header_inner.php'; ?>
<main>
<div class="business_size five_fifty">
	<div class="container">
		<h4>RESULTS FOR</h4>
		<h1>5-50 EMPLOYEES</h1>
		<p>You are an <span>existing</span> Tufts Health Plan broker looking for quotes for groups with <span>5-50 employees</span>. Good news! You can simply use our online portal, BrokerLink to get a quote.</p>
		<a href="javascript:void(0);">LOGIN TO BROKERLINK</a>
		<p class="register_today">Not registered on BrokerLink?  <a href="javascript:void(0);">Register today</a> to get started.</p>
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