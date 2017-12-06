<?php include_once __DIR__ . '/../../includes/head.php'; ?>
<?php include_once __DIR__ . '/../../includes/nav.php'; ?>
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h2>Phonebook</h2>
					<p><a href="/index.php?page=phonebook&action=add" class="btn btn-primary">Add Contact</a></p>
					<table class="table table-condensed">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Number</th>
								<th>Action</th>					
							</tr>
						</thead>
						<tbody>
							<?php
							if ($contacts != NULL) {
								foreach ($contacts as $contact) {
							?>
							<tr>
								<td><?=$contact['id'];?></td>
								<td><?=$contact['name'];?></td>
								<td><?=$contact['number'];?></td>
								<td>
									<a href="/index.php?page=phonebook&action=view&id=<?=$contact['id'];?>" class="btn btn-info btn-sm">View</a>
									<a href="/index.php?page=phonebook&action=edit&id=<?=$contact['id'];?>" class="btn btn-success btn-sm">Edit</a>
									<a href="/index.php?page=phonebook&action=delete&id=<?=$contact['id'];?>" class="btn btn-danger btn-sm">Delete</a>
								</td>
							</tr>
							<?php 
								}
							} else { ?>
							<tr>
								<td colspan="4">
									<h4>No records!</h4>
								</td>
							</tr>
							<?php 
							}
							?>
						</tbody>			
					</table>
				</div>
			</div>
<?php include_once __DIR__ . '/../../includes/footer.php'; ?>					