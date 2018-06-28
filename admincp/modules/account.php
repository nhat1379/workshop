<?php
	include("controllers/access-account.php");
	$user = mysqli_query ($conn,"SELECT * FROM d2_users order by user_lv DESC");
?>

<div class="well well-sm" style="background-color:#f1efef; height:500px; overflow: auto" >
	<h3 class="text-center">Bills Manager</h3>

	<table class="table table-striped custab" style="border: 1px solid #ccc;">
	<thead>
		<tr>
			
			<th>ID</th>
			<th>Name</th>
			<th>Account</th>
			<th>Password</th>
			<th>Email</th>
			<th>Avatar</th>
			<th>Level</th>
			<th></th>
		</tr>
	</thead>
	  <?php
		while ($rows_user = mysqli_fetch_array ($user)) {
			echo '<form action="" method="POST">';
			//$user_id = $rows_user['bill_id'];
			
			//$detail = mysqli_query ($conn,"SELECT * FROM d2_billdetail INNER JOIN d2_item ON d2_item.item_id = d2_billdetail.item_id WHERE bill_id = '$bill_id'");
			
	  ?>
		<tr>  
			
			<td style="vertical-align: middle"><?php echo $rows_user['user_id']; ?><input class="hide" value="<?php echo $rows_user['user_id']; ?>" name="id" ></td>
			<td style="vertical-align: middle"><?php echo $rows_user['user_name']; ?></td>
			<td style="vertical-align: middle"><?php echo $rows_user['user_login']; ?></td>
			<td style="vertical-align: middle"><?php echo $rows_user['user_password']; ?></td>
			
			<td style="vertical-align: middle"><?php echo $rows_user['user_email']; ?></td>
			<td style="vertical-align: middle"><img src="../<?php echo $rows_user['user_image']; ?>" style="height:40px"</td>
			
			
			<td><select name="lv">
				<option value="<?=$rows_user['user_lv'] ?>"><?=$rows_user['user_lv'] ?></option>
				<option>1</option>
				<option>0</option>
			
			</select></td>
			
			<td style="vertical-align: middle"><button class="btn btn-primary" value="" name="edit-acc" style="margin-top:unset">submit</button></td>
		</tr>
	  <?php
		echo '</form>';
		}
	  ?>
	</table>
	
</div>