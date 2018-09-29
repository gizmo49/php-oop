<!DOCTYPE html>
<html>
<head>
	<title>Hello world</title>
</head>
<body>
	<ul>
		
	<?php foreach ($tasks as $key): ?>
		
		
			<li>
			
				<?= $key->description ?>
					
			</li>

		
		
	<?php endforeach ?>
	</ul>
</body>
</html>