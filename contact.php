<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "<h2>Data berhasil dikirim!</h2>";
  echo "Nama: " . $_POST['nama'] . "<br>";
  echo "Email: " . $_POST['email'] . "<br>";
  echo "Pesan: " . nl2br($_POST['pesan']) . "<br>";
}
?>
