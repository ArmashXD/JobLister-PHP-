<?php include 'inc/header.php';?>

    <h2 class="page-header">Create Job Listing</h2>

    <form method="post" action="create.php">
		<div class="form-group">
			<label>Company</label>
			<input type="text" class="form-control" name="company" id="company" required>
		</div>
		<div class="form-group">
			<label>Category</label>
			<select class="form-control" name="category">
				<option value="0">Choose Category</option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
			</select>
		</div>
		<div class="form-group">
			<label>Job Title</label>
			<input type="text" class="form-control" name="job_title" id="job_title" required>
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea class="form-control" name="description" id="description" required></textarea>
		</div>
		<div class="form-group">
			<label>Location</label>
			<input type="text" class="form-control" name="location" id="location" required>
		</div>
		<div class="form-group">
			<label>Salary</label>
			<input type="text" class="form-control" name="salary" id="salary" required>
		</div>
		<div class="form-group">
			<label>Contact User</label>
			<input type="text" class="form-control" name="contact_user" id="contact_user" required>
		</div>
		<div class="form-group">
			<label>Contact Email</label>
			<input type="text" class="form-control" name="contact_email" id="contact_email" required>
        </div>
        <input type="submit" class="btn btn-success" value="Submit" name="submit">
    </form>
       <br>
   
<?php include 'inc/footer.php';?>
