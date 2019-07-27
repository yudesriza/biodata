<?php
	include 'koneksi.php';
	if($_GET['proses']=='entri'){
		if (isset($_POST['submit'])) {
			$simpan=$mysqli->query("INSERT INTO users (full_name, date_of_birth, place_of_birth_id, phone_number, address, last_education, religion) VALUES ('$_POST[full_name]' ,'$_POST[date_of_birth]', '$_POST[place_of_birth_id]', '$_POST[phone_number]', '$_POST[address]', '$_POST[last_education]', '$_POST[religion]')");

			if ($simpan) {
				$last_id = $mysqli->insert_id;
				$simpan_hobby = $mysqli->query("INSERT INTO users_hobbies(biodata_id,hobby_id) VALUES ('$last_id','$_POST[hobby]')");
				if ($simpan_hobby) {
					header('location:index.php');
				}
				else{
					echo "Gagal simpan hobby";
				}
				
			}
			else{
				echo "Gagal";
			}
		}
	}

	if($_GET['proses']=='ubah'){
		if (isset($_POST['submit'])) {
			$ubah=$mysqli->query("UPDATE users set
							full_name = '$_POST[full_name]',
							date_of_birth = '$_POST[date_of_birth]',
							place_of_birth_id = '$_POST[place_of_birth_id]',
							phone_number = '$_POST[phone_number]',
							address = '$_POST[address]',
							last_education = '$_POST[last_education]',
							religion = '$_POST[religion]'
							where id='$_GET[id_ubah]'
							");

			if ($ubah) {
				$ubah_hobby = $mysqli->query("UPDATE users_hobbies set
								hobby_id = '$_POST[hobby]'
								where biodata_id='$_GET[id_ubah]'
								");
				header('location:index.php');
			}
			else{
				echo "Gagal";
			}
		}
	}

	if($_GET['proses']=='hapus'){
		$hapus = $mysqli->query("DELETE FROM users where id='$_GET[id_hapus]'");
		if($hapus){
			header('location:index.php');
		}
	}
?>