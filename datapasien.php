<!DOCTYPE HTML>
<html>
<head>
	<title>UTS Pemrograman Web 2</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>  
<body>
<center>
<div class="w3-container">
<p>DATA PASIEN COVID 19</p>
<hr>
<form action="datapemantauan.php" method="post">
<label>Nama Wilayah:</label>  <select  class="w3-button w3-grey" name="wilayah" id="wilayah" required>
	<option value="">==PILIHAN==</option>
    <option value="DKI JAKARTA">DKI JAKARTA</option>
    <option value="Jawa Barat">Jawa Barat</option>
    <option value="Banten">Banten</option>
    <option value="Jawa Tengah">Jawa Tengah</option>
 	</select>
 	<br>
  	<br>
<label>Jumlah Positif:</label>    <input type="text" name="positif" required><br>
<br>
<label>Jumlah Dirawat:</label>    <input type="text" name="dirawat" required><br>
<br>
<label>Jumlah Sembuh:</label>     <input type="text" name="sembuh" required><br>
<br>
<label>Jumlah Meninggal:</label>  <input type="text" name="meninggal" required><br>
<br>
<label>Nama Operator:</label>     <input type="text" name="operator" required><br>
<br>
<label>NIM :</label>              <input type="text" name="nim" required><br>
<br>
<label>IP Address:</label>     <input type="text" name="operator" required><br>
<br>
<hr>
<input class="w3-button w3-grey" type="submit" value="SUBMIT">
</form>
</div>
</center>
</body>
</html>