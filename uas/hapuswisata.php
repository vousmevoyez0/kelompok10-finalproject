<?php

require 'koneksi.php';

$id = $_GET['id'];

if (hapus($id) > 0) {
	echo "<script>
			alert('Data Guest Berhasil Dihapus!');
			document.location.href = 'wisataa.php';
		</script>";
} else {
	echo "<script>
			alert('Data Guest Gagal Dihapus!');
			document.location.href = 'wisataa.php';
		</script>";
}


?>