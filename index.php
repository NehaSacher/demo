<!doctype html>
<html lang="en">

<?php include $_SERVER['DOCUMENT_ROOT'] . "\partials\html-head.php" ?>

<body>

	<?php include $_SERVER['DOCUMENT_ROOT'] . '\partials\headers\header.php'; ?>

	<main>
		<!-- Affordable Healthcare -->
		<?php include $_SERVER['DOCUMENT_ROOT'] . '\partials\components\carousel-affordable.php';?>

		<!-- Healthplan For you -->
		<?php include $_SERVER['DOCUMENT_ROOT'] . '\partials\components\four-panel.php'; ?>

		<!-- Quality -->
		<?php include $_SERVER['DOCUMENT_ROOT'] . '\partials\components\checklist.php'; ?>

		<!-- Feeling is Mutual Option1 -->
		<?php include $_SERVER['DOCUMENT_ROOT'] . '\partials\components\multi-column-media-1.php'; ?>
		<!-- Feeling is Mutual Option2 -->
		<?php include $_SERVER['DOCUMENT_ROOT'] . '\partials\components\multi-column-media-2.php'; ?>

		<!-- Critical Connections -->
		<?php include $_SERVER['DOCUMENT_ROOT'] . '\partials\components\carousel-connections.php'; ?>

		<!-- Pharmacy -->
		<?php include $_SERVER['DOCUMENT_ROOT'] . '\partials\components\flippable-pharmacy.php'; ?>

		<!-- Vision-pink -->
		<?php include $_SERVER['DOCUMENT_ROOT'] . '\partials\components\flippable-vision-pink.php'; ?>

		<!-- Dental -->
		<?php include $_SERVER['DOCUMENT_ROOT'] . '\partials\components\flippable-dental.php'; ?>
	</main>

	<?php include $_SERVER['DOCUMENT_ROOT'] . '\partials\footers\footer.php'; ?>

	<!-- Body-level Scripts -->
	<?php include $_SERVER['DOCUMENT_ROOT'] . '\partials\body-scripts.php'; ?>

</body>
</html>
