<?php include_once __DIR__ . '/../../includes/head.php'; ?>
<?php include_once __DIR__ . '/../../includes/nav.php'; ?>
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h2>Add Contact</h2>
					<form id="phonebook-form" action="/index.php?page=phonebook&action=add" method="post">
						<div class="form-group">
							<label class="control-label" for="name">Name</label>
							<input type="text" class="form-control" id="name" placeholder="Name" name="name">
						</div>
						<div class="form-group">
							<label class="control-label" for="number">Number</label>
							<input type="text" class="form-control" id="number" placeholder="Number" name="number">
						</div>
						<a href="/index.php?page=phonebook" class="btn btn-default">Cancel</a>
						<button type="submit" class="btn btn-primary">Save</button>
					</form>		
				</div>
			</div>
<?php include_once __DIR__ . '/../../includes/footer.php'; ?>	