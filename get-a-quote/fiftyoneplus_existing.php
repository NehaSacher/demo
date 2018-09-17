<!doctype html>
<html lang="en">

<?php include $_SERVER['DOCUMENT_ROOT'] . "\partials\html-head.php" ?>

<body>

<?php include $_SERVER['DOCUMENT_ROOT'] . '\partials\headers\header_inner.php'; ?>
<main>
<div class="business_size">
	<div class="container">
		<h4>RESULTS FOR</h4>
		<h1>51+ EMPLOYEES</h1> 
		<p>You are an <span>existing</span> Tufts Health Plan broker looking for quotes for groups with <span>51 or more employees</span>.
To proceed with your quote pick one of these contact methods below. </a>
		</p>
	</div>
</div>
<div class="retirement gray five_fifty_existing fiftyone_existing">
	<div class="container">
		<div class="col-md-6">
			<p class="contact_header">For a business this size in Massachusetts, <br>you
				can call or email using the following:</p>
				<p class="contact_number">Watertown office: <a href="tel:+18002088013">1-800-208-8013</a></p>
				<p class="contact_number">Worcester office: <a href="tel:+18002089545">1-800-208-9545</a></p>
				<p class="contact_email"><a href="mailto:paula_giokas@tufts-health.com">large_group_prospectus@tufts-health.com</a></p>
			</div>
			<div class="col-md-6 contact">
				<p class="contact_header">We can contact you! Simply fill in your basic information and we’ll reach out:</p>
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
	
	<!-- Feeling is Mutual Option2 -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '\partials\components\multi-column-media-2.php'; ?>


</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '\partials\footers\footerno_options.php'; ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '\partials\body-scripts.php'; ?>

</body>
</html>