<?php
if (isset($_POST['submit'])) {
  $Nama Lengkap = $_POST['nama'];
  $Alamat = $_POST['alamat'];
  $No. WhatsApp = $_POST['nowa'];
  $Instagram = $_POST['ig'];
  header("location: https://api.whatsapp.com/send?phone=$Instagram");
} else {
  echo "
  <script>window.location=history.go(-1);
  </script>
}
?>
