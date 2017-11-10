<?php 
	$list_dantoc=['kinh','dao','thái','mường','Tày','Ba Na'];
	$list_tongiao=['Phat giao','Thiên chúa','Tin lành','Hồi giáo'];
	$list_cs=['UT-01','UT-02','UT-03','CCB-1','CCB-2','CCB-3'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.text{
			padding: 10px;
		}
	</style>
</head>
<body>
	<form action="action.php" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td class="text">Mã SV</td>
				<td class="text"><input type="text" name="id" value=""></td>
				<td class="text"></td>
				<td class="text"></td>
			</tr>
			<tr>
				<td class="text">Họ và tên</td>
				<td class="text"><input type="text" name="name" value=""></td>
				<td class="text"><input type="text" name="name1"></td>
				<td></td>
			</tr>
			<tr>
				<td class="text">Ngày sinh</td>
				<td class="text"><input type="date" name="date" value=""></td>
				<td class="text">Dan toc</td>
				<td class="text">
					<select name="dantoc" id="">
						<?php foreach ($list_dantoc as $key => $value) {?>
							<option value="<?php echo $value; ?>"><?php echo $value; ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td class="text">Giới tính</td>
				<td class="text">
					<input type="radio" name="gender" value="nu">Nu
					<input type="radio" name="gender" value="nam">Nam
				</td>
				<td class="text">Tôn giáo</td>
				<td class="text">
					<select name="ton_giao" id="">
						<?php foreach ($list_tongiao as $key => $value) {?>
							<option value="<?php echo $value; ?>"><?php echo $value; ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td class="text">Nơi sinh</td>
				<td class="text"><input type="text" name="noisinh" value=""></td>
				<td class="text">Dien CS</td>
				<td class="text">
					<select name="dien_cs" id="">
						<?php foreach ($list_cs as $key => $value) {?>
							<option value="<?php echo $value; ?>"><?php echo $value; ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td class="text">Lớp</td>
				<td class="text"><input type="text" name="class" value=""></td>
				<td class="text"></td>
				<td></td>
			</tr>
			<tr>
				<td class="text">Khoa</td>
				<td class="text"><input type="text" name="khoa" value=""></td>
				<td class="text">Dảng</td>
				<td class="text"><input type="checkbox" name="dang" value="dang">có</td>
			</tr>
			<tr>
				<td class="text">Ngành</td>
				<td class="text"><input type="text" name="nganh" value=""></td>
				<td class="text">Đoàn</td>
				<td class="text"><input type="checkbox" name="doan" value="doan">có</td>
			</tr>
			<tr>
				<td class="text">Hệ đào tạo</td>
				<td class="text"><input type="text" name="he_dao_tao" value=""></td>
				<td class="text">Ngày vào hội SV</td>
				<td class="text"><input type="date" name="ngay_vao_hoi_sv"></td>
			</tr>
			<tr>
				<td class="text">Ngoại ngữ</td>
				<td class="text"><input type="text" name="ngoai_ngu" value=""></td>
				<td class="text">Số năm bộ đội</td>
				<td class="text"><input type="text" name="so_nam_bo_doi" value=""></td>
			</tr>
			<tr>
				<td class="text">Thẻ thư viện</td>
				<td class="text"><input type="text" name="the_thu_vien"></td>
				<td class="text">Số năm TNXP</td>
				<td class="text"><input type="text" name="so_nam_tnxp"></td>
			</tr>
			<tr>
				<td ><input type="file" name="image"></td>
				<td><input type="submit" name="submit" value="Cập nhật thông tin"></td>
			</tr>

		</table>
	</form>
	 <!-- <?php
		if(isset($_POST['submit'])){
			if(isset($_FILES['image'])){
				if($_FILES['image']['error']>0){
					$error['file']= 'không upload được file';
				}
				else{
					$type_input=$_FILES['image']['type'];
					if($type_input == 'image/jpeg'|| $type_input == 'image/png' || $type_input =='gif'){
						move_uploaded_file($_FILES['image']['tmp_name'], './photo/'.$_FILES['image']['name']);
						echo "file được upload";
						$photo='./photo/'.$_FILES['image']['name'];
						echo "<img src= $photo >";
					}
					else{
						$error['file'] ='định dạng file không đúng';
					}
				} 

			}
			else{
				echo "ban chua chon file";
			}
		}
	 ?>  -->
</body>
</html>