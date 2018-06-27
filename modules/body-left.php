<?php
	$type = $nhat->select("d2_type","","");
	$slot = $nhat->select("d2_slot","","");
?>


<div class="col-sm-3">
	<div class="left-sidebar">
		<div class="brands_products"><!--TYPE-->
			<h2>Rarity</h2>
			<div class="brands-name">
			<?php 
				while ( $rows_type = mysqli_fetch_array ($type)) {
			?>
				<ul class="nav nav-pills nav-stacked">
					<li><a href="index.php?view=type&id=<?php echo $rows_type['type_id']; ?>&pg=1"><?php echo $rows_type['type_title']; ?></a></li>
				</ul>
			<?php
				}
			?>
			</div>
			
		</div><!--/TYPE-->
		
		<div class="brands_products"><!--SLOT-->
			<h2>Slot</h2>
			<div class="brands-name">
			<?php
				while ($rows_slot = mysqli_fetch_array ($slot)) {
			?>
				<ul class="nav nav-pills nav-stacked">
					<li><a href="index.php?view=slot&id=<?php echo $rows_slot['slot_id']; ?>&pg=1"><?php echo $rows_slot['slot_title'] ?></a></li>
				</ul>
			<?php
				}
			?>			
			</div>
		</div><!--/SLOT-->
	</div>
</div>