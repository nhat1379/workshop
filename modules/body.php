<section>
		<div class="container">
			<div class="row">
				
				<?php 
					if (isset ($_GET['view'])) {
						$view = $_GET['view'];
					}else{
						$view = '';
					}
					if ($view == ''){
						include ("modules/body-right.php");
					}elseif ($view == 'type') {
						include ("modules/body-type.php");
					}elseif ($view == 'slot') {
						include ("modules/body-slot.php");
					}elseif ($view =='detail') {
						include ("modules/body-detail.php");
					}elseif ($view =='items') {
						include ("modules/items.php");
					}elseif ($view =='immortal') {
						include ("modules/immortal.php");
					}elseif ($view == 'set') {
						include ("modules/set.php");
					}
					
					
					
					
				?>
				
				
			</div>
		</div>
	</section>