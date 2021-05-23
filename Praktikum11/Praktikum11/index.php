<?php

include_once("koneksi.php");
$db = new koneksiDB();
$koneksi = $db->getKoneksi();
$request = $_SERVER['REQUEST_METHOD'];
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segment = explode('/', $uri_path);

switch ($request) {
	case 'GET':
		if (!empty($uri_segment[4])) {
			$id = intval($uri_segment[4]);
			get_karyawan($id);
		} else {
			get_karyawan();
		}
		break;
	case 'POST':
		insert_karyawan();
		break;
	case 'PUT':
		$id = intval($uri_segment[4]);
		update_karyawan($id);
		break;
	case 'DELETE':
		$id = intval($uri_segment[4]);
		delete_karyawan($id);
		break;
	default:
		header("HTTP/1.0 405 Method Tidak Terdaftar");
		break;
}

function get_karyawan($id=""){
	global $koneksi;
	$query = "SELECT * FROM tb_karyawan";
	if (!empty($id)) {
		$query .= " WHERE id=$id LIMIT 1";
	}
	$respon = array();
	$result = mysqli_query($koneksi, $query);
	$i = 0;
	if ($result) {
		$respon['kode'] = 1;
		$respon['status'] = "sukses";
		while ($row = mysqli_fetch_array($result)) {
			$respon['data'][$i]['ID karyawan'] = $row['id'];
			$respon['data'][$i]['nama'] = $row['nama'];
			$respon['data'][$i]['email'] = $row['email'];
			$respon['data'][$i]['jabatan'] = $row['jabatan'];
			$respon['data'][$i]['gaji'] = $row['gaji'];
			$i++;
		}
	} else {
		$respon['kode'] = 0;
		$respon['status'] = "gagal";
	}
	header('Content-Type: application/json');
	echo json_encode($respon);
}

function insert_karyawan(){
	global $koneksi;
	$data = json_decode(file_get_contents('php://input'), true);
	$nama = $data['nama'];
	$email = $data['email'];
	$jabatan = $data['jabatan'];
	$gaji = $data['gaji'];

	$query = "INSERT INTO tb_karyawan set nama='".$nama."', email='".$email."', jabatan='".$jabatan."', gaji='".$gaji."'";

	if (mysqli_query($koneksi, $query)) {
		$respon = [
			'kode' => 1,
			'status' => 'Data Karyawan Berhasil Ditambah'
		];
	} else {
		$respon = [
			'kode' => 0,
			'status' => 'Data Karyawan Gagal Ditambah'
		];
	}
	header('Content-Type: application/json');
	echo json_encode($respon);
}

function update_karyawan($id){
	global $koneksi;
	$data = json_decode(file_get_contents('php://input'), true);
	$nama = $data['nama'];
	$email = $data['email'];
	$jabatan = $data['jabatan'];
	$gaji = $data['gaji'];

	$query = "UPDATE tb_karyawan SET nama='".$nama."', email='".$email."', jabatan='".$jabatan."', gaji='".$gaji."' WHERE id=".$id;

	if (mysqli_query($koneksi, $query)) {
		$respon = [
			'kode' => 1,
			'status' => 'Data Karyawan Berhasil Diupdate'
		];
	} else {
		$respon = [
			'kode' => 0,
			'status' => 'Data Karyawan Gagal Diupdate'
		];
	}
	header('Content-Type: application/json');
	echo json_encode($respon);
}

function delete_karyawan($id){
	global $koneksi;
	$query = "DELETE FROM tb_karyawan WHERE id='".$id."'";

	if (mysqli_query($koneksi, $query)) {
		$respon = [
			'kode' => 1,
			'status' => 'Data Karyawan Berhasil Dihapus'
		];
	} else {
		$respon = [
			'kode' => 0,
			'status' => 'Data Karyawan Gagal Dihapus'
		];
	}
	header('Content-Type: application/json');
	echo json_encode($respon);
}

?>