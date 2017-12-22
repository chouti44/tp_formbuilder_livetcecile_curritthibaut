<?php
	require "header.php";
	use FormBuilder\FormBuilder;

	$fb = new FormBuilder();
	$form = $fb->buildContactForm();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Form Builder</title>
</head>
<body>
	<?php $form->draw(); ?>
</body>
</html>

