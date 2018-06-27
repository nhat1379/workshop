<?php
	$type = mysqli_query ($conn,"SELECT * FROM d2_type");
	$slot1 = mysqli_query ($conn,"SELECT * FROM d2_slot");
?>



<div class="col-lg-3 col-md-4 col-sm-5 custyle">
  <form action="index.php" method="POST" enctype="multipart/form-data">
    <table style="margin:0" class="table table-striped custab">
    <thead>

        <tr>
            <th>Add item</th>
        </tr>
    </thead>
			<tr class="hide">
                <td>id <input style="float:right"  value="<?php if (isset($_POST['edit'])) { echo $idupdate; } ?>" type="text" name="id"></td>
				
            </tr>
		
			<tr>
                <td>Name <input style="float:right" value="<?php if (isset($_POST['edit'])) { echo $rows['item_title']; } ?>" type="text" name="name" required></td>
				
            </tr>
			<tr>
				<?php 
					if (isset ($_POST['edit'])) {
				?>
					<td>Image
						<img src="../images/images/<?php echo $image; ?>" width="60px" style="padding-bottom:2px; float:right"  >
						<input style="float:right" value="" type="file" name="image" >
						<input class="hide" value="<?php echo $image; ?>" name="image2">
					</td>
				<?php
					}else{
				?>
					<td>Image <input style="float:right" value="" type="file" name="image" required ></td>
				<?php
					}
				?>
            </tr>
			<tr>
                <td>Price <input style="float:right" value="<?php if (isset($_POST['edit'])) { echo $price; } ?>" type="text" name="price"  required></td>
				
            </tr>
			<tr>
                <td>Desciption <textarea   name="desciption" ><?php if (isset($_POST['edit'])) { echo $desciption; } ?></textarea></td>
				
			</tr>
			<tr>
				<td>Slot <select name="slot" style="width: 72%; float: right" required>
					
					<?php  
						if (isset($_POST['edit'])) {
					?>
						<option value="<?php echo $slot ?>"><?php echo $slot ?>-<?php echo $rows['slot_title'] ?></option>
					<?php 
						}else { 
					?>
						<option required>Slot</option>
					<?php 
						} 
					?>
					<?php 
						while ($rows_slot = mysqli_fetch_array ($slot1)){
					?>
						<option value="<?php echo $rows_slot['slot_id']; ?>" required><?php echo $rows_slot['slot_id']; ?>-<?php echo $rows_slot['slot_title'] ?></option>
					<?php
						}
					?>
				</select></td>

			</tr>
			<tr>
				<td>Rarity <select name="rarity" style="width: 72%; float: right" required>
					<?php
						if (isset ($_POST['edit'])){
					?>
					<option value="<?php echo $rarity ?>" ><?php echo $rarity ?>-<?php echo $rows['type_title'] ?></option>
					<?php
						}else{ 
					?>
					<option required>Rarity</option>
					<?php
						}
					?>
					
					<?php 
						while ($rows_type = mysqli_fetch_array ($type)){
					?>
					<option value="<?php echo $rows_type['type_id'] ?>" required><?php echo $rows_type['type_id'] ?>-<?php echo $rows_type['type_title'] ?></option>
					<?php
						}
					?>
				</select></td>
			</tr>
			<tr>
			<?php
				if (isset($_POST['edit'])) {
			?>
					<td style="text-align: center"><button class="btn btn-info type="submit" name="save"><span class="glyphicon glyphicon-ok"></span> Save item</button></td>
			<?php
				}else{
			?>
					<td style="text-align: center"><button class="btn btn-primary type="submit" name="add"><span class="glyphicon glyphicon-plus"></span> Add new item</button></td>
			<?php			
				}
			?>
				
			</tr>
           
    </table>
  </form>
</div>

