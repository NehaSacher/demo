<!doctype html>
<html lang="en">

<?php include $_SERVER['DOCUMENT_ROOT'] . "\partials\html-head.php"; ?>

<body>

	<?php include $_SERVER['DOCUMENT_ROOT'] . "\partials\headers\header_inner.php"; ?>
<main>
	<div class="business_size">
		<div class="container">
			<h4>RESULTS FOR</h4>
			<h1>RETIREMENT ONLY PLANS</h1>
			<p>You have selected to get a quote for
				<span>5-50 employees, Retirement Only Plans.</span>
				<br>To proceed with your quote pick one of these contact methods below. </p>
		</div>
	</div>

	<div class="retirement gray">
		<div class="container">
			<div class="col-md-6">
				<p class="contact_header">For Retirement Only Plans, you can contact either of the following representatives:</p>
				<p class="contact_name">Paula Giokas</p>
				<p class="contact_designation">Senior Sales Executive, Retiree Products</p>
				<p class="contact_number">
					<a href="tel:+6179729040">617-972-9040</a>
				</p>
				<p class="contact_email">
					<a href="mailto:paula_giokas@tufts-health.com">paula_giokas@tufts-health.com</a>
				</p>

				<p class="contact_name">Mary Bartkiewicz</p>
				<p class="contact_designation">Manager, Client Services</p>
				<p class="contact_number">
					<a href="tel:+6179729057">617-972-9057</a>
				</p>
				<p class="contact_email">
					<a href="mailto:mary_bartkiewicz@tufts-health.com">mary_bartkiewicz@tufts-health.com</a>
				</p>
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
					<label>Preferred contact method
						<input type="radio" name="gender" value="male" checked> Phone
						<input type="radio" name="gender" value="female"> Email
					</label>

					<p class="submit">
						<input type="submit" value="Submit">
					</p>
				</form>
			</div>
		</div>
	</div>
	
	<!-- Feeling is Mutual Option2 -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '\partials\components\multi-column-media-2.php'; ?>


</main>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '\partials\footers\footerno_options.php'; ?>
	
	<!-- Body-level Scripts -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '\partials\body-scripts.php'; ?>

</body>
</html>
