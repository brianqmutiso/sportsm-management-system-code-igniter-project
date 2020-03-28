<?php
$this->load->view("commerce/header.php");
$data=$all;
//print_r($data);
?>
<h5 style="text-align: center;">Todays Game Fixtures</h5>
<div>
	<form name="search " method="post" action="getall" style="width: 30%;margin-left: 5%;">
		<div class="form-group">
			<label style="display: inline-block;margin-right: 20px;">Search By Team Name: </label>
			<input type="text" name="search"  style="display: inline-block;border-radius: 5px;padding: 3px;">

		</div>
	</form>
</div>
<table class="table table-bordered  table-striped " style="width: 90%;margin-left: 5%;margin-right: 5%;">

	<caption>Available Game fixtures</caption>
	<thead class="thdark">
		<th>Away</th>
			<th>Home</th>
			<th>Date</th>
				<th>Action</th>
		</thead>
	</thead>
	<?php
foreach ($data as $key => $value) {
	?>
	<tr><td><?php echo $value['home']?></td><td><?php echo $value['away']?></td><td><?php echo $value['date']?></td><td style="text-align: center;">
		<button class="btn btn-danger" ><a href="?id=<?php echo $value['id'];?>" onClick="return confirm('Are you sure you want to delete this record ??')" style="color: white;">Delete</a></button><button data-toggle="modal" data-target="#<?php echo $value['id'];?>" class="btn btn-primary" style="margin-left: 20px;">
			Edit
		</button>
	</td>
	<div class="modal fade" id="<?php echo $value['id']; ?>" >
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-head">
				<button class="close" data-dismiss="modal"><span>&times</span></button>
				<h3 class="modal-title" style="text-align: center;">Update Fixture details</h1>
			</div>
			<div class="modal-body">
				<form method="post" action="update_deta">
					<div class="form-group">
						<label>Game Id</label>
						<input type="text" readonly="" value="<?php echo $value['id'];?>" name="des" class="form-control">
					</div>
					<div class="form-group">
						<label>Home</label>
						<input type="text" value="<?php echo $value['home'];?>" name="home" class="form-control">
					</div>
					<div class="form-group">
						<label>Away</label>
						<input type="text" value="<?php echo $value['away'];?>" name="away" class="form-control">
					</div>
					<div class="form-group">
						<label>Game date</label>
						<input type="date" name="date" value="<?php echo $value['date'];?>" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" value="Update" name="update">
					</div>
				</form>
			</div></div>
		</div>
	</div>
</tr>

	<?php
}
	?>
</table>
<button  type="button" data-target="#add" data-toggle="modal" class="btn btn-secondary" style="margin-left: 5%;">Add More Fixtures</button>
<div class="modal fade" id="add" >
		<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-head">
				<button class="close" data-dismiss="modal"><span>&times</span></button>
				<h3 class="modal-title" style="text-align: center;">Update Fixture details</h1>
			</div>
			<div class="modal-body">
				<form method="post" action="add_fixtures">
					<div class="form-group">
						<label>Game Id</label>
						<input type="text" readonly="" value="" name="des" class="form-control">
					</div>
					<div class="form-group">
						<label>Home</label>
						<input type="text" value="" name="home" class="form-control">
					</div>
					<div class="form-group">
						<label>Away</label>
						<input type="text" value="" name="away" class="form-control">
					</div>
					<div class="form-group">
						<label>Game date</label>
						<input type="date" name="date" value="" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" value="Add" name="add">
					</div>
				</form>
			</div></div>
		</div>
	</div>
<?php
$this->load->view("commerce/footer");

?>
