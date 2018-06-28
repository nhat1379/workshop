<?php
include ("controllers/access-bill.php");
	$bill = mysqli_query ($conn,"SELECT * FROM d2_bill INNER JOIN d2_users ON d2_bill.user_id = d2_users.user_id order by bill_id DESC");
	

?>

<div class="well well-sm" style="background-color:#f1efef; height:500px; overflow: auto" >
	<h3 class="text-center">Bills Manager</h3>

	<table class="table table-striped custab" style="border: 1px solid #ccc;">
	<thead>
		<tr>
			
			<th>Bill ID</th>
			<th>User</th>
			<th>Items</th>
			<th>Total</th>
			<th>Date</th>
			<th>Status</th>
			<th></th>
		</tr>
	</thead>
	  <?php
		while ($rows_bill = mysqli_fetch_array ($bill)) {
			echo '<form action="" method="POST">';
			$bill_id = $rows_bill['bill_id'];
			
			$detail = mysqli_query ($conn,"SELECT * FROM d2_billdetail INNER JOIN d2_item ON d2_item.item_id = d2_billdetail.item_id WHERE bill_id = '$bill_id'");
			
	  ?>
		<tr>  
			
			<td style="vertical-align: middle"><?php echo $rows_bill['bill_id']; ?><input class="hide" value="<?php echo $rows_bill['bill_id']; ?>" name="id" ></td>
			<td style="vertical-align: middle"><?php echo $rows_bill['user_login']; ?></td>
			<td>
			  <?php 
					while ($rows_detail = mysqli_fetch_array ($detail)) {
			  ?>
				<p style="font-size: 12px; margin: 0px"><img src="../images/images/<?=$rows_detail['item_image']; ?>" width = "40px">
				<?=number_format($rows_detail['detail_dongia']); ?> <i class="fa fa-times"></i> <?=$rows_detail['detail_qty']; ?></p>
			  <?php
					}
			  ?>
			</td> 
			<td style="vertical-align: middle"><?php echo number_format($rows_bill['bill_total']); ?> VNĐ</td>
			<td style="vertical-align: middle"><?php echo date("d/m/Y -- H:i:s",strtotime($rows_bill['bill_date'])); ?></td>
			
			<td style="vertical-align: middle">
				<select style="width:80%" name="stt" >
					<option value="<?php echo $rows_bill['bill_stt'] ?>"><?php echo $rows_bill['bill_stt'] ?></option>
					<option>Processing</option>
					<option>Transporting</option>
					<option>Delivered</option>
				</select>
			</td>
			<td style="vertical-align: middle"><button class="btn btn-primary" value="" name="update_stt" style="margin-top:unset">submit</button></td>
		</tr>
	  <?php
	  echo '</form>';
		}
	  ?>
	</table>
	
</div>