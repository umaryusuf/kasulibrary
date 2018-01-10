<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<h1><?php echo $_SESSION['student']; ?></h1>
				<br>
				<div>
						<?php
						?>
					<p><a href="dashboard.php?action=change_profile&id=<?php echo $student_id; ?>">Change Profile</a></p>
					<p><a href="dashboard.php?action=change_password">Change Password</a></p>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<table class="table table-striped">
				<?php
					$sql = mysqli_query($dbc, "SELECT * FROM students WHERE username='".$_SESSION["student"]."'");
					while ($data = mysqli_fetch_assoc($sql)) {
						$student_id = $data["student_id"];
				?>
				<tr>
					<td>Full Name:</td>
					<td><?php echo ucfirst($data['fullname']); ?></td>
				</tr>
				<tr>
					<td>Registration No:</td>
					<td><?php echo ucfirst($data['regno']); ?></td>
				</tr>
				<tr>
					<td>Phone:</td>
					<td><?php echo $data['phone']; ?></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><?php echo $data['email']; ?></td>
				</tr>
				<tr>
					<td>Gender:</td>
					<td><?php echo ucfirst($data['gender']); ?></td>
				</tr>
				<tr>
					<td>State:</td>
					<td><?php echo ucfirst($data['state']); ?></td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
</div>
