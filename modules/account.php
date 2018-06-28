


<?php
	include("controllers/access-account.php");
	include("controllers/change-avatar.php");
	if (isset ($_SESSION['login'])) {
		$login2 = $_SESSION['login']['user_login'];
		$login3 = $_SESSION['login']['user_id'];
	}else{
		$login2 ='';
		$login3 ='';
	}
	
	$user = mysqli_query($conn,"SELECT * FROM d2_users where user_login = '$login2'");
	$rows_user = mysqli_fetch_array ($user);
	$sql = mysqli_query ($conn,"SELECT * FROM d2_bill INNER JOIN d2_users ON d2_bill.user_id = d2_users.user_id WHERE d2_bill.user_id = '$login3' order by bill_id DESC ");
	
	
					
				
?>


<div class="container">
							
    <div class="row">
        <div class="col-xs-12 col-sm-5 col-md-5">
            <div class="well well-sm" style="background-color:#f1efef;">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
						  <?php
							if ($rows_user['user_image'] == '') {
						  ?>
							<img src="http://placehold.it/200x200" width="100%" class="img-rounded img-responsive" >
						  <?php
							}else{
						  ?>
							<img src="<?php echo $rows_user['user_image']; ?>" width="100%" class="img-rounded img-responsive" >
						  <?php
							}	
						  ?>
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4><?php echo $rows_user['user_name']; ?></h4>
                            
                        <small><i class="glyphicon glyphicon-map-marker"></i><cite title="San Francisco, USA"> Ha Noi, Viet Nam</cite></small>
                        <p>
                            <small><i class="glyphicon glyphicon-envelope"></i> <?php echo $rows_user['user_email']; ?></small>
                            <br />
                            <small><i class="glyphicon glyphicon-globe"></i><a href="index.php"> http://localhost/index.php</a></small>
                            <br />
                           
                        <!-- Split button -->
                        
                    </div>
                </div>
				<div class="row">
					<div class="col-sm-6col-md-4">
						<div class="btn-group">
						  <form action="" method="post" enctype="multipart/form-data">
							<input type="file" name="avatar" style="margin:auto">
							<button type="button "class="btn btn-success" name="change_avatar" style="border-radius:0px; margin-top:5px">Change Avatar </button>
						  </form>
						</div>
					</div>
					
				</div>
				<div class="row">
					<a href="index.php?view=password">Change password</a>
				</div>
            </div>
        </div>
		<div class="col-xs-12 col-sm-7 col-md-7">
			<div class="well well-sm" style="background-color:#f1efef; height:350px; overflow: auto" >
			<h3 class="text-center">Trade History</h3>
				<table class="table table-striped custab" style="border: 1px solid #ccc;">
				<thead>
					<tr>
						<th>Bill ID</th>
						<th>Items</th>
						<th>Total</th>
						<th>Date</th>
						<th>Status</th>
					</tr>
				</thead>
				  <?php  
					if (mysqli_num_rows ($sql) == 0){
						echo '<div class="alert alert-success text-center"><strong>Bạn chưa có lịch sử giao dịch</strong</div>';
					}else{
						while ($rows_sql = mysqli_fetch_array ($sql)) {
							$bill_id = $rows_sql['bill_id'];
							$detail = mysqli_query ($conn,"SELECT * FROM d2_billdetail INNER JOIN d2_item ON d2_billdetail.item_id = d2_item.item_id where bill_id = '$bill_id'");		
				  ?>
					
						<tr>  
							<td style="vertical-align: middle"><?php echo $bill_id; ?></td>
							<td>
							<?php
								while ($rows_detail = mysqli_fetch_array ($detail)) {
							?>
								<p style="font-size: 12px; margin: 0px"><img src="images/images/<?php echo $rows_detail['item_image'];?>" width = "40px">
								<?php echo number_format($rows_detail['detail_dongia']) .' <i class="fa fa-times"></i> '. $rows_detail['detail_qty']; ?></p>
							<?php
								}
							?>
							</td> 
							
							<td style="vertical-align: middle"><?php echo number_format($rows_sql['bill_total']); ?> VNĐ</td>
							<td style="vertical-align: middle"><?php $date1 = $rows_sql['bill_date'];
							echo date("d/m/Y", strtotime($date1)) ?></td>
							<td style="vertical-align: middle"><?=$rows_sql['bill_stt']; ?></td>
						</tr>
				  <?php
						}
					}
				  ?>
				</table>
				<form action="" method="POST" class="text-center">
				<button class="btn btn-primary"  name="clear">Clear Trade History</button>
				</form>
				
				
				
			</div>
		</div>
    </div>
</div>