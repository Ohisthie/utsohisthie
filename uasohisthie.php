<html>
<body>
<form action="ohisthie.php" method="post">

<?php
echo"<b>PENDAFTARAN PELANGGAN BARU</b> <br>";
?>

<?php
echo"<b>Data Pribadi</b> <br>";
?>
<pre>
Nama Lengkap		: <input type="text" name="name" />

Jenis Kelamin		: <input type="radio" name="jk" value="Pria">Pria <input type="radio" name="jk"value="Wainta">Wanita

E-mail			: <input type="text" name="mail" />


<?php
echo"<b>Data Alamat Pengiriman</b> <br>";
?>
<pre>
Nama Negara		: <input type="text" name="negara" />

Kota			: <input type="text" name="kota" />

Alamat			: <input type="text" name="al" />

Kode Post		: <input type="text" name="pos" />


<?php
echo"<b>Data No Kontak</b> <br>";
?>
Nomor Telepon		: <input type="text" name="tel" />

No Handphone		: <input type="text" name="phone" />

No Faksimili		: <input type="text" name="fak" />


		<input type="submit"/ name="send" value="Submit"/><input type="reset" name="reset" value="Reset">
		</form>
		 <form action="uasohisthie.php">
     
</pre>
</form>
</body>
</html>
