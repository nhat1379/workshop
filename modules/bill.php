<?php  
		include("controllers/access-bill.php");
		include ("controllers/access-checkout.php");
	if (isset ($_SESSION['id'])) {
		$id = $_SESSION['id'];
	}else{
		$id = '';
	}
	
	
	$bill = mysqli_query ($conn,"SELECT * FROM d2_bill INNER JOIN d2_billdetail ON d2_bill.bill_id = d2_billdetail.bill_id INNER JOIN d2_users ON d2_bill.user_id = d2_users.user_id WHERE d2_bill.bill_id ='$id'");
	$detail = mysqli_query ($conn,"SELECT * FROM d2_billdetail INNER JOIN d2_item ON d2_billdetail.item_id = d2_item.item_id WHERE bill_id = '$id'");
	$rows_bill = mysqli_fetch_array ($bill);
	
?>

<div class="container">
	<div class="col-sm-12">
	  <div class="text-center"><h1><strong>Your Bill</strong></h1></div>          
	  <table class="table table-hover" style="border: 1px solid #ccc;">
		
		<tbody>
		
		  <tr>
			<td>Bill ID </td> 
			<td colspan="4"><?php echo $rows_bill['bill_id']; ?> </td>
		  </tr>
		  <tr>
			<td>User: </td> 
			<td  colspan="4"><?php echo $rows_bill['user_login'] ?></td>
		  </tr>
			<?php
				$i = 1; 
				while ($rows_detail = mysqli_fetch_array ($detail)) {
			?>
			  <tr>
				<td>Item <?php echo $i; ?>: </td>
				<td><img src="images/images/<?php echo $rows_detail['item_image'] ?>" width="80px" ></td>
				<td>Quantity: <?php echo $rows_detail['detail_qty'] ?></td>
				<td>Price: <?php echo number_format($rows_detail['detail_dongia']); ?> VNĐ</td>
				<td>Total: <?php echo number_format($rows_detail['detail_thanhtien']); ?> VNĐ</td>
			  </tr>
			<?php
				$i++;
				}
			?>
		  <tr>
			<td>Date: </td>
			<td colspan="4"><?php echo date("d/m/Y H:i:s", strtotime($rows_bill['bill_date'])) ?></td>
		  </tr>
		  <tr>
			<td>Grand Total: </td>
			<td colspan="4"><strong><?php echo number_format($rows_bill['bill_total']) ?> VNĐ</strong></td>
		  </tr>
	
		</tbody>
	  </table>
	<form action="" method="POST">
	  <div class="text-center">
		<button class="btn btn-primary" name="done">Done</button>
	  </div>
	</form>
	</div>
</div>
<script>

</script>

