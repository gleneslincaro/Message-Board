<body>
	<table>
		<tr>
			<th>ID</th>
			<th>GRADE</th>
		</tr>
		
			<?php
				foreach($grades as $grade) {
					
					echo "<tr><td>".$grade['grades']['id']."</td><td>".$grade['grades']['value']."</td></tr>";
				}
			?>
		
	</table>
</body>