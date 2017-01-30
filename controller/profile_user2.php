<?php
$user = $_SESSION['iduser'];
if ($user>1) {

$msg = "<h4>Test History</h4>";
$sql = "SELECT user.id, nilai.nilai, dimensi.labeldimensi, test.judul FROM user, nilai, test, dimensi WHERE user.id = nilai.iduser AND test.id = nilai.idtest and nilai.iddimensi = dimensi.id AND user.id=$user";
$stmt = $conn->query($sql);

if ($stmt->rowCount()>0) {
	$result = $stmt->fetchAll();

	$msg = $msg .'
	<table class="bordered striped highlight">
		<thead>
			<tr>
				<th data-field="id">No</th>
				<th data-field="name">Test</th>
				<th data-field="price">Nilai</th>
				<th data-field="price">Dimensi</th>
			</tr>
		</thead>

		<tbody>';

	  // $sql = "SELECT user.id, nilai.nilai, dimensi.labeldimensi, test.judul FROM user, nilai, test, dimensi WHERE user.id = nilai.iduser AND test.id = nilai.idtest and nilai.iddimensi = dimensi.id AND user.id=$user";
	  // $stmt = $conn->query($sql);
	  // $result = $stmt->fetchAll();
	  // $result->rowCount();

			foreach ($result as $key => $row) {
	  	# code...
				$key++;
				$msg = $msg . '<tr>
				<td>'.$key.'</td>
				<td>'.$row['judul'].'</td>
				<td>'.$row['nilai'].'</td>
				<td>'.$row['labeldimensi'].'</td>
			</tr>';
		}

		$msg = $msg .    '</tbody>
	</table>';
}
else{
	$msg .= '
	<div class="row">
		<div class="col s5">
			<div class="message">You have not done any test yet. <a href="./tesmenejemen.php"><b>Take a test</b></a></div>
		</div>
	</div>';
}

echo $msg;
}

?>