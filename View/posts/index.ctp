
		<table>
			<tr>
				<th></th>
				<th></th>
			</tr>
			<tr>
				<?php
					foreach($grades as $grade) {
						echo '<td>'.$grade['grades']['id'].'</td><td>'.$grade['grades']['value'].'</td>';
					}
				?>
			</tr>
		</table>
