<div class="row">
	<div class="col-md-12">
		<header class="well well-sm">
			<h3 class="text-center">All Students</h3>
		</header>
	</div>
</div>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<table class="table table-striped">
			<thead>
				<tr class="active">
					<th>Full Name</th>
					<th>Reg No.</th>
					<th>Username</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Gender</th>
					<th>State</th>
				</tr>
			</thead>
			<tbody>
				<?php  
					$sq = mysqli_query($dbc, "SELECT * FROM students");
					while($row = mysqli_fetch_array($sq)){
				?>
				<tr>
					<td><?php echo $row["fullname"]; ?></td>
					<td><?php echo $row["regno"]; ?></td>
					<td><?php echo $row["username"]; ?></td>
					<td><?php echo $row["phone"]; ?></td>
					<td><?php echo $row["email"]; ?></td>
					<td><?php echo $row["gender"]; ?></td>
					<td><?php echo $row["state"]; ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>