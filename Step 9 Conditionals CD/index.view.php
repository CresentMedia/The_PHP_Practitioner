<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	
	<title>Document</title>


</head>

<body>


	<header>
		<h1>Task for the day</h1>

	</header>

	<ul>
		
		<li>
			
			<strong>Name: </strong> <?= $task["title"]; ?>


		</li>

        <li>
			
			<strong>Date Due: </strong> <?= $task["due"]; ?>


		</li>


		<li>
			
			<strong>Person Responsible: </strong> <?= $task["assigned_to"]; ?>


		</li>


		<li>
			
			<strong>Status: </strong> 


			<?php if ($task["Completed"]) : ?>

				<span class="icon">&#9989;</span>

			<?php else : ?>

			
					<span class="icon">Incomplete</span>

					<?php endif; ?>

		
		</li>


    </ul>


</body>



</html>