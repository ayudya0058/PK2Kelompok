<?php
if (isset($_POST['submit'])) {
  $Nama Lengkap = $_POST['nama'];
  $Alamat = $_POST['alamat'];
  $No. WhatsApp = $_POST['nowa'];
  $Instagram = $_POST['ig'];
  $Hari/Tanggal = $_POST['date'];
  $Sesi/jam = $_POST['sesi'];
  $Item yang disewa = $_POST['Pilihan item'];
  $no_wa = $_POST['no_wa'];
  header("location: https://api.whatsapp.com/send?phone=$no_wa&text=Nama Lengkap:%20$name%20%");
} else {
  echo "
  <script>window.location=history.go(-1);
  </script>
}
?>
