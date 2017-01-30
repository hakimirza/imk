<?php 
include_once 'connection.php';

if(isset($_GET['idjabatan'])){
	
	$idjabatan = $_GET['idjabatan'];
	$stmt = $conn->query("SELECT idjabatanbos FROM jabatan WHERE id = $idjabatan");
    $result = $stmt->fetchAll();
    $idjabatanbos = $result[0]['idjabatanbos'];

    if($idjabatanbos != 0){
    	$stmt = $conn->query("SELECT id, nama FROM user WHERE idjabatan = $idjabatanbos");
		$result = $stmt->fetchAll();

		$return="<select id='iduserbos' name='iduserbos' required>";
		$return .= "<option value='' disabled selected>No Leader</option>";
		foreach ($result as $key => $row) {
			# code...
			$id = $row['id'];
			$nama = $row['nama'];
			$return .= "<option value='$id'>$nama</option>";
		}
		$return .="</select>
	              <label>Leader</label>";
		echo $return;
    }else{
    	$return="<select id='iduserbos' name='iduserbos' required>";
		$return .= "<option value='0'>No Leader</option>";
		$return .="</select>
	              <label>Leader</label>";
	              echo $return;
    }
	
}

?>