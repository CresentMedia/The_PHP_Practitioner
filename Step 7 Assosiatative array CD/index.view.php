<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	
	<title>Document</title>


</head>

<body>


	<header>
		<h1>Task</h1>

	</header>

	<ul>
		<?php foreach ($task as $heading => $feature) : ?>

			<li><strong><?= $heading; ?></strong> <?= $feature; ?></li>
			

			<?php endforeach; ?>  

</ul>


</body>



</html>