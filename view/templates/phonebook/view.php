<?php include_once __DIR__ . '/../../includes/head.php'; ?>
<?php include_once __DIR__ . '/../../includes/nav.php'; ?>
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h2>View Contact</h2>
					<p><a href="/index.php?page=phonebook" class="btn btn-primary">Back</a></p>
					<table class="table">
						<tbody>
							<tr>
								<th>ID</th>
								<td><?=$contact['id'];?></td>
							</tr>
							<tr>
								<th>Name</th>
								<td><?=$contact['name'];?></td>
							</tr>
							<tr>
								<th>Number</th>
								<td><?=$contact['number'];?></td>
							</tr>
						</tbody>			
					</table>
				</div>
			</div>
<?php include_once __DIR__ . '/../../includes/footer.php'; ?>	