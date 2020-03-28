<?php
$this->load->view("commerce/header.php");
?>
<body>
	<div>
	<form name="search " method="post" action="results" style="width: 30%;margin-left: 5%;">
		<div class="form-group">
			<label style="display: inline-block;margin-right: 20px;">Search By Team Name: </label>
			<input type="text" name="search1"  style="display: inline-block;border-radius: 5px;padding: 3px;">

		</div>
	</form>
</div>
	<table class="table table-bordered table-striped " style="width: 90%;margin-left: 5%;">
		<caption>Results analyses @<?php echo 2020;?></caption>
		<thead><th>game id</th><th>home</th><th>away</th><th>Score</th><th>Date</th></thead>
<?php
foreach ($all as $key => $value) {
?>
<tr>
	<td><?php echo $value['id'];?></td>
	<td><?php echo $value['home'];?></td>
	<td><?php echo $value['away'];?></td>
	<td><?php echo $value['home_score']." : ". $value['away_score'];?></td>
	<td><?php echo $value['date'];?></td>
	<td><button class="btn btn-secondary" id="add" data-target="#<?php echo $value['id']; ?>" data-toggle="modal">Edit</button><button class="btn btn-danger" style="margin-left: 20px;"><a href="?id=<?php echo $value['id'];?>"  style="color: white;" onclick="return confirm('Confirm to remove Item ??');">Delete</a></button></td>
</tr>
<div id="<?php echo $value['id'];?>" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-head">
				<button data-dismiss="modal" class="close" ><span>&times</span></button>
				<h5>Update Results:</h5>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label>Game Id:</label>
						<input type="text" disabled="" class="form-control" value="<?php echo $value['id'];?>" name="id">
					</div>
					<div class="form-group">
						<label>Home:</label>
						<input type="text" class="form-control" value="<?php echo $value['home'];?>" name="home">
					</div>
					<div class="form-group">
						<label>Away:</label>
						<input type="text" value="<?php echo $value['away'];?>" class="form-control" name="away">
					</div>
					<div class="form-group">
						<label>Home_score:</label>
						<input type="number" value="<?php echo $value['home_score'];?>" class="form-control" name="home_score">
					</div>
					<div class="form-group">
						<label>Away_score:</label>
						<input type="number" value="<?php echo $value['away_score'];?>" class="form-control" name="away_score">
					</div>
					
					<div class="form-group">
						<input type="submit"  value="save" class="form-control" name="update_results">
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

<?php
}



?>
<tr><td><button class="btn btn-secondary" id="add" data-target="#resadd" data-toggle="modal">Add Results</button></td></tr>
	</table>
<div id="resadd" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-head">
				<button data-dismiss="modal" class="close" ><span>&times</span></button>
				<h5>Update Results:</h5>
			</div>
			<div class="modal-body">
				<form method="post" action="add_results">
					<div class="form-group">
						<label>Home:</label>
						<input type="text" class="form-control" name="home">
					</div>
					<div class="form-group">
						<label>Away:</label>
						<input type="text" class="form-control" name="away">
					</div>
					<div class="form-group">
						<label>Home_score:</label>
						<input type="number" class="form-control" name="home_score">
					</div>
					<div class="form-group">
						<label>Away_score:</label>
						<input type="number" class="form-control" name="away_score">
					</div>
					<div class="form-group">
						<input type="submit"  value="save" class="form-control" name="add_results">
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

</body>