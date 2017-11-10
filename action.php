<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Information</title>
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/content.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/nav.css">
</head>
<body>
	<form action='information.php' method = 'POST'>
<?php
	$error=[];
	$list_dantoc=['kinh','dao','thái','mường','Tày','Ba Na'];
	$list_tongiao=['Phat giao','Thiên chúa','Tin lành','Hồi giáo'];
	$list_cs=['UT-01','UT-02','UT-03','CCB-1','CCB-2','CCB-3','Không thuộc diện chính sách'];
	$id=isset($_POST['id']) ? $_POST['id'] : '';
	$name=isset($_POST['name']) ? $_POST['name'] : '';
	$name1=isset($_POST['name1']) ? $_POST['name1'] : '';
	$date=isset($_POST['date']) ? $_POST['date'] : '';
	$dantoc=isset($_POST['dantoc']) ? $_POST['dantoc'] : '';
	$gender=isset($_POST['gender']) ? $_POST['gender'] : '';
	$ton_giao=isset($_POST['ton_giao']) ? $_POST['ton_giao'] : '';
	$noisinh=isset($_POST['noisinh']) ? $_POST['noisinh'] : '';
	$dien_cs=isset($_POST['dien_cs']) ? $_POST['dien_cs'] :'';
	$class =isset($_POST['class']) ? $_POST['class'] : '';
	$khoa=isset($_POST['khoa']) ? $_POST['khoa'] : '';
	$dang=isset($_POST['dang']) ? $_POST['dang'] : '';
	$nganh=isset($_POST['nganh']) ? $_POST['nganh'] : '';
	$doan =isset($_POST['doan']) ? $_POST['doan'] : '';
	$he_dao_tao =isset($_POST['he_dao_tao']) ? $_POST['he_dao_tao'] : '';
	$ngay_vao_hoi_sv=isset($_POST['ngay_vao_hoi_sv']) ? $_POST['ngay_vao_hoi_sv'] : '';
	$ngoai_ngu=isset($_POST['ngoai_ngu']) ? $_POST['ngoai_ngu'] : '';
	$so_nam_bo_doi=isset($_POST['so_nam_bo_doi']) ? $_POST['so_nam_bo_doi'] : '';
	$the_thu_vien=isset($_POST['the_thu_vien']) ? $_POST['the_thu_vien'] : '';
	$so_nam_tnxp=isset($_POST['so_nam_tnxp']) ? $_POST['so_nam_tnxp'] : '';
	if ($id == '') {
		$error['id'] ='Bạn phải nhập mã sinh viên';
		echo $error['id']."<br>";
	}
	if($name == ''||$name1 == ''){
		$error['name'] = 'bạn phải nhập họ và tên ';
		echo $error['name']."<br>";
	}
	if($date == ''){
		$error['date'] ='banj phải nhập ngày sinh';
		echo $error['date']."<br>";
	}
	if ($dantoc == '') {
		$error['dantoc'] ='Bạn phải nhập dân tộc';
		echo $error['dantoc']."<br>";
	}
	if($gender == ''){
		$error['gender'] = 'bạn phải nhập giới tính ';
		echo $error['gender']."<br>";
	}
	if($ton_giao == ''){
		$error['ton_giao'] ='bạn phải nhập tôn giáo';
		echo $error['ton_giao']."<br>";
	}
	if ($noisinh == '') {
		$error['noisinh'] ='Bạn phải nhập nơi sinh';
		echo $error['noisinh']."<br>";
	}
	if($dien_cs == ''){
		$error['dien_cs'] = 'bạn phải nhập diện chính sách ';
		echo $error['dien_chinh_sach']."<br>";
	}
	if($class == ''){
		$error['class'] ='bạn phải nhập lớp học';
		echo $error['class']."<br>";
	}
	if($khoa == ''){
		$error['khoa'] ='bạn phải nhập khoa';
		echo $error['khoa']."<br>";
	}
	// if ($dang == '') {
	// 	$error['dang'] ='Bạn phải nhập mã sinh viên';
	// }
	if($nganh == ''){
		$error['nganh'] = 'bạn phải nhập ngành học ';
		echo $error['nganh']."<br>";
	}
	// if($doan == ''){
	// 	$error['doan'] ='bạn phải nhập ngày sinh';
	// }
	if ($he_dao_tao == '') {
		$error['he_dao_tao'] ='Bạn phải nhập hệ đào tạo';
		echo $error['he_dao_tao']."<br>";

	}
	if($ngay_vao_hoi_sv == ''){
		$error['ngay_vao_hoi_sv'] = 'bạn phải nhập ngày vào hội sinh viên ';
		echo $error['ngay_vao_hoi_sv']."<br>";
	}
	if($ngoai_ngu == ''){
		$error['ngoai_ngu'] ='bạn phải nhập bằng ngoại ngữ';
		echo $error['ngoai_ngu']."<br>";
	}
	if ($so_nam_bo_doi == '') {
		$error['so_nam_bo_doi'] ='Bạn phải nhập số năm bộ đội';
		echo $error['so_nam_bo_doi']."<br>";
	}
	if($the_thu_vien == ''){
		$error['the_thu_vien'] = 'bạn phải nhập số thẻ thư viện ';
		echo $error['the_thu_vien']."<br>";
	}
	if($so_nam_tnxp == ''){
		$error['so_nam_tnxp'] ='bạn phải nhập so nam tntn';
		echo $error['so_nam_tnxp']."<br>";
	}
	if(isset($_FILES['image'])){
		if($_FILES['image']['error']>0){
			$error['file']= 'không upload được file';
			echo $error['file']."<br>";

		}
		else{
			if ($_FILES['image']['type'] !='image/jpeg' && $_FILES['image']['type'] !='image/png') {
				$error['file'] ='định dạng file không đúng';
				echo $error['file']."<br>";

			}
		}
		// var_dump($_FILES['image']);
	}
	// var_dump($error);

	if(empty($error)){
			echo "<div class='header'>";
				echo "<h4 class='text'>Lý lịch chi tiết sinh viên - $name $name1 -Mã sinh viên - $id </h4>";
			echo "</div>";
			echo "<div class='nav'>";
				echo "<ul>";
					echo "<li>";
						echo "<a href=''>Lý Lịch</a>";
					echo "</li>";
					echo "<li>";
						echo "<a href='https://www.google.com.vn'>Tuyển Sinh</a>";
					echo "</li>";
					echo "<li>";
						echo "<a href='https://www.google.com.vn'>Liên Lạc</a>";
					echo "</li>";
					echo "<li>";
						echo "<a href='https://www.google.com.vn'>Gia đình</a>";
					echo "</li>";
					echo "<li>";
						echo "<a href='https://www.google.com.vn'>Hồ Sơ</a>";
					echo "</li>";
				echo "</ul>";
			echo "</div>";
			echo "<div class='menu'>";
				echo "<div class='content'>";
				echo "<table>";
					echo "<tr>";
						echo "<td class='padding_text'> Mã SV</td>";
						echo "<td class='padding_text'><input class ='check' type='text' name='id' value='.$id'> </td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td class='padding_text'>Họ và tên </td>";
						echo "<td class = 'padding_text'><input class ='check' type='text' name='name' value='$name'></td>";
						echo "<td class='padding_text'><input class ='check' type='text' name='name1' value='$name1'> </td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td class='padding_text'>Ngày sinh</td>";
						echo "<td class='padding_text'><input class ='check' type='date' name='date' value='$date'></td>";
						echo '<td class="padding_text">Dan toc</td>';
						echo '<td class= "padding_text">';
						echo '<select name="dantoc" id="">';
							echo '<option value=" $dantoc;">' ;
							echo $dantoc ;
							echo '</option>';
						echo '</select>';
						echo "</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td class='padding_text'>Giới tính</td>";
						echo '<td class="padding_text">';
						if($gender =='nu'){
							echo "<input type='radio' name='gender' value='nu' checked='checked'>Nu";
							echo "<input  type='radio' name='gender' value='nam'>Nam";
						}
						else{
							echo "<input type='radio' name='gender' value='nu'>Nu";
							echo "<input type='radio' name='gender' value='nam' checked='checked'>Nam";
						}
						echo '</td>';
						echo '<td class="padding_text">Tôn giáo</td>';
						echo '<td class="padding_text">';
							echo '<select name="dantoc" id="">';
							echo '<option value=" $ton_giao;">' ;
							echo $ton_giao ;
							echo '</option>';
						echo '</select>';
						echo "</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td class= 'padding_text'>Nơi sinh</td>";
						echo "<td class = 'padding_text'><input class ='check' type='text' name='noisinh' value='$noisinh'></td>";
						echo '<td class="padding_text">Diện CS</td>';
						echo '<td class="padding_text">';
							echo '<select name="dien_cs" id="">';
							
								echo "<option value='$dien_cs;'>" ;
								echo $dien_cs ;
								echo "</option>";
							echo '</select>';
						echo "</td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td class='padding_text'>Lớp</td>";
						echo "<td class='padding_text'><input class='check' type='text' name='class' value=$class></td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td class='padding_text'>Khoa</td>";
						echo "<td class= 'padding_text'><input class='check' type='text' name='khoa' value='$khoa'></td>";
						echo "<td class = 'padding_text'>Đảng</td>";
						echo '<td>';
						if($dang ==''){
							echo'<input class ="check" type="checkbox" name="dang" value="dang">';
						}
						else{
							echo'có tham gia';

						}
						echo '</td>';
					echo "</tr>";
					echo "<tr>";
						echo "<td class =' padding_text'>Ngành</td>";
						echo "<td class= 'padding_text'><input class='check' type='text' name='nganh' value='$nganh'></td>";
						echo "<td class= 'padding_text'>Đoàn</td>";
						echo "<td class ='padding_text'>";
						if($doan == ''){
							echo'<input class ="check" type="checkbox" name="dang" value="$doan">';
						}
						else{
							echo'có tham gia';

						}
						echo "</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td class =' padding_text'>Hệ đào tạo</td>";
						echo "<td class= 'padding_text'><input class ='check' type='text' name='he_dao_tao' value='$he_dao_tao'></td>";
						echo "<td class='padding_text'>Ngày vào hội SV</td>";
						echo "<td class='padding_text'><input  class = 'check' type='date' name='ngay_vao_hoi_sv' value='$ngay_vao_hoi_sv'></td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td class='padding_text'>Ngoại ngữ</td>";
						echo "<td class = 'padding_text'> <input class ='check' type='text' name='ngoai_ngu' value='$ngoai_ngu'></td>";
						echo "<td class='padding_text'>Số năm bộ đội</td>";
						echo "<td class ='padding_text'><input class ='check' type='text' name='so_nam_bo_doi' value='$so_nam_bo_doi'></td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td class ='padding_text'>Thẻ thư viện</td>";
						echo "<td class ='padding_text'><input class ='check' type='text' name='the_thu_vien' value='$the_thu_vien'></td>";
						echo "<td class='padding_text'>Số năm TNXP</td>";
						echo "<td class = 'padding_text'><input class ='check' type='text' name='so_nam_tnxp' value='$so_nam_tnxp'></td>";
					echo "</tr>";
				echo "</table>";

				echo "</div>";
				echo "<div class='image'>";
					echo "<div class='main_image'>";
						if(isset($_POST['submit'])){
							if (isset($_FILES['image'])) {
									$type=$_FILES['image']['type'];
									if($type == 'image/jpeg' || $type == 'image/png'){
										move_uploaded_file($_FILES['image']['tmp_name'], './photo/'.$_FILES['image']['name']);
										// echo "file được upload";
										$photo='./photo/'.$_FILES['image']['name'];
										echo "<img src= $photo >";
									}
									
								// var_dump($_FILES['image']);

							}
						}
					echo "</div>";
					echo "<div class='submit'>";
						echo "<input type='submit' name='submit' value= 'Cập nhật thông tin '>";
					echo "</div>";
				echo "</div>";
			echo "</div>";
			echo "<div class='footer'>";
			echo "</div>";
	}	
	else{
		echo "<a href='information.php'>Quay lại</a>";
	}
	?>		
	</form>	
</body>
</html>