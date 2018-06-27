<?php
	if (isset ($_GET['pg'])) {
		$page = $_GET['pg'];
	}else{
		$page = '';
	}
	if ($page == '' || $page ==1 || $page==0){
		$pg = 0;
	}else{
		$pg = ($page *7)-7;
	}
	$item = mysqli_query ($conn,"SELECT * FROM d2_item INNER JOIN d2_slot ON d2_slot.slot_id=d2_item.slot_id INNER JOIN d2_type ON d2_type.type_id=d2_item.type_id order by item_id desc limit $pg,7");
?>


<div class="col-lg-9 col-md-8 col-sm-7 custyle">
	<form action="index.php" method="POST">
    <table style="margin:0" class="table table-striped custab">
    <thead>
   
        <tr>
            <th>Number</th>
            <th>Name</th>
            <th>Image</th>
			<th>Price</th>
			<th class="hide">Desciption</th>
			<th>Slot</th>
			<th>Type</th>
            <th class="text-center">Manager</th>
        </tr>
    </thead>
		<?php
			$i=1;
			while ($rows_item = mysqli_fetch_array ($item)) {
		?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $rows_item['item_title']; ?></td>
                <td><img src="../images/images/<?php echo $rows_item['item_image']; ?>" width="60px"></td>
				<td><?php echo number_format($rows_item['item_price']); ?> VNĐ</td>
				<td class="hide"><?php echo $rows_item['item_desciption']; ?></td>
				<td><?php echo $rows_item['slot_title']; ?></td>
				<td><?php echo $rows_item['type_title']; ?></td>
                <td class="text-center">
				
				<button name="edit" type="submit" value="<?php echo $rows_item['item_id']; ?>" class='btn btn-info btn-xs'><span class="glyphicon glyphicon-edit"></span></button> 
				<button name="del" type="submit" value="<?php echo $rows_item['item_id']; ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></button>
				
				</td>
            </tr>
		<?php
			$i++;
			}
		?>
           
    </table>
	</form>
	
	<div class="row" style="text-align:center;">
		<ul class="pagination">
			
	<?php
	$page = mysqli_query ($conn,"SELECT * FROM d2_item");
	$count = mysqli_num_rows ($page);
	$a = ceil($count / 7);
	
?>		
			<!--Previous-->
			<?php 
				if (isset ($_GET['pg'])) {
					$page = $_GET['pg'];
				}else{
					$page = '';
				}
				if ($page <= 1)	{
			?>
				<li class="disabled"><a href=""><i class="fa fa-angle-left"></i> Prev</a></li>
			<?php
				}else{
			?>
				<li><a href="?pg=<?php echo	 $_GET['pg'] - 1 ?>"><i class="fa fa-angle-left"></i> Prev</a></li>
			<?php
				}
			?>	
			<!--/Previous-->
			<!--pagination-->
			<?php
				for ($b=1;$b<=$a;$b++){
				if ($page == $b) {
			?>
					<li class="active"><a href="?pg=<?php echo $b ?>"> <?php echo $b; ?></a></li>
			<?php
				}else{ 
			?>			
				<li><a href="?pg=<?php echo $b ?>"> <?php echo $b; ?></a></li>
			<?php
				}
			?>
			<?php
				}
			?>
			<!--/pagination-->
			<!--Next-->
			<?php
				if ($page ==''){
			?>
				<li><a href="?pg=2">Next <i class="fa fa-angle-right"></i></a></li>
			<?php
				}elseif ($page == $a) {
			?>
				<li class="disabled"><a href="">Next <i class="fa fa-angle-right"></i></a></li>
			<?php
				}else{
			?>
				<li><a href="?pg=<?php echo $_GET['pg']+1 ?>">Next <i class="fa fa-angle-right"></i></a></li>
			<?php
				}
			?>
			
			<!--/Next-->
		</ul>


</div>
</div>
