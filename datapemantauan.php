<!DOCTYPE html>
<html>
<head>
	<title>Data Pasien Covid</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div class="w3-container">
<center>
<div class="w3-container">
<label class="w3-label">Data Pemantauan Covid 19 Wilayah</label> <?php echo $_POST["wilayah"];?><br>
<label class="w3-label">Per</label> <?php date_default_timezone_set('Asia/Jakarta'); echo date("l, d M Y h:i:s a");?><br>
<?php echo $_POST["operator"];?> / <?php echo $_POST["nim"];;?> / <?php echo $_POST["ip address"];;?>
<hr>
<br>
<table class="w3-table w3-border w3-striped w3-card-4">
	<tr>
	<th>Positif</th>
    <th>Dirawat</th>
    <th>Sembuh</th>
    <th>Meninggal</th>
	</tr>
	<tr>
    <td><?php echo $_POST["positif"];?></td>
    <td><?php echo $_POST["dirawat"];?></td>
    <td><?php echo $_POST["sembuh"];?></td>
    <td><?php echo $_POST["meninggal"];?></td>
	</tr>
</table>
</div>
</center>
</div>
</body>
</html>
