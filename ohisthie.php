<?php
echo"<b>PENDAFTARAN PELANGGAN BARU</b> <br>";
?>

<?php
echo"<b>Data Pribadi</b> <br>";
?>
<?php
if(isset($_POST['send']))
{
echo"Nama Lengkap 		: ".$_POST["name"]."<br>";
echo"Jenis Kelamin		: ".$_POST["jk"]."<br>";
echo"E-mail				: ".$_POST["mail"]."<br>";
}
?>

<?php
echo"<b>Data Alamat Pengiriman</b> <br>";
?>
<?php
if(isset($_POST['send']))
{
echo"Nama Negara 		: ".$_POST["negara"]."<br>";
echo"Kota				: ".$_POST["kota"]."<br>";
echo"Alamat				: ".$_POST["al"]."<br>";
echo"Kode Post			: ".$_POST["pos"]."<br>";
}
?>

<?php
echo"<b>Data Alamat Pengiriman</b> <br>";
?>
<?php
if(isset($_POST['send']))
{
echo"Nomor Telepon 		: ".$_POST["tel"]."<br>";
echo"No Handphone		: ".$_POST["kota"]."<br>";
echo"No Faksimili		: ".$_POST["fak"]."<br>";
}
?>

 <form action='uasohisthie.php'>
   <td>
    <input type='submit' name='home' value='Home'>