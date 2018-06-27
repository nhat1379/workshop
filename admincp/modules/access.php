<?php
	
	
	include ("modules/config.php");
	if (isset ($_POST['add'])){
		$name = $_POST['name'];
		$image = $_FILES['image']['name'];
		$price = $_POST['price'];
		$desciption = $_POST['desciption'];
		$rarity = $_POST['rarity'];
		$slot = $_POST['slot'];

			
			if (empty ($name)) {
				$kq = '<div class="alert alert-danger"><strong>Không được để trống tên item!</strong></div>';
			}elseif (empty ($image)) {
				$kq = '<div class="alert alert-danger"><strong>Không được để trống hinh anh item!</strong></div>';
			}elseif (empty ($price)) {
				$kq = '<div class="alert alert-danger"><strong>Không được để trống giá item!</strong></div>';
			}elseif (empty ($rarity)) {
				$kq = '<div class="alert alert-danger"><strong>Không được để trống rarity item!</strong></div>';
			}elseif (empty ($slot)) {
				$kq = '<div class="alert alert-danger"><strong>Không được để trống slot item!</strong></div>';
			}else{
				$sql = mysqli_query ($conn,"INSERT INTO `d2_item`(`item_title`, `item_image`, `item_price`, `item_desciption`, `slot_id`, `type_id`) VALUES ('$name','$image','$price','$desciption','$slot','$rarity')");
				if ($sql) {
					$kq = '<div class="alert alert-success"><strong>Thêm thành công!</strong></div>';
				}else{
					$kq = '<div class="alert alert-danger"><strong>Thêm thất bại</strong></div>';
				}
			}
	
	}else {
			$kq = '<div class="alert alert-danger"><strong>Thêm item k thành công!</strong></div>';
		}	
	
	If (isset($_POST['del'])) {
		$sql = mysqli_query ($conn,"DELETE FROM d2_item WHERE item_id=".$_POST['del']."");
		if ($sql){
			$kq = '<div class="alert alert-success"><strong>Xóa sản phâm thành công!</strong></div>';
		}else{
			$kq = 'that bai';
		}	
	}
		
	If (isset($_POST['edit'])) {
		$sql = mysqli_query ($conn,"SELECT * FROM d2_item INNER JOIN d2_type ON d2_type.type_id = d2_item.type_id INNER JOIN d2_slot ON d2_slot.slot_id=d2_item.slot_id WHERE item_id=".$_POST['edit']."");
		if ($sql){
			$rows = mysqli_fetch_array ($sql);
			
			$idupdate = $rows['item_id'];
			$name = $rows['item_title'];
			
			$image = $rows['item_image'];
			
			$price = $rows['item_price'];
		
			$desciption = $rows['item_desciption'];
			
			$rarity = $rows['type_id'];
		
			$slot = $rows['slot_id'];
		}
}
	
	If (isset ($_POST['save'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		
		
		$image = $_FILES['image']['name'];
		if ($image) {
			$image = $_FILES['image']['name'];
		}else{
			$image = $_POST['image2'];
		}
		
		
		$price = $_POST['price'];
		$desciption = $_POST['desciption'];
		$rarity = $_POST['rarity'];
		$slot = $_POST['slot'];
		
		$sql = mysqli_query($conn,"UPDATE d2_item SET item_title='$name', item_image='$image', item_price='$price', item_desciption='$desciption', slot_id = '$slot', type_id = '$rarity' WHERE item_id=".$id);
		if ($sql) {
					$kq = '<div class="alert alert-success"><strong>Sửa thành công!</strong></div>';
				}else{
					$kq = '<div class="alert alert-danger"><strong>Sửa thất bại</strong></div>';
				}
	}

	
	
	
	

?>




