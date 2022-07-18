<!DOCTYPE html>
<html>
<head>
	<title>DATA BARANG</title>
</head>
<body>
	<center>
		<h3>Data Barang</h3>
		<table border="1" width="500">
			<tr>
				<td>ID</td>
				<td>nama</td>
				<td>qty</td>
				<td>price</td>
			</tr>

			<?php foreach($barang as $brg): ?>
			<tr>
				<td><?php echo $brg['id']; ?></td>
				<td><?php echo $brg['nama']; ?></td>
				<td><?php echo $brg['qty']; ?></td>
				<td><?php echo $brg['price']; ?></td>
			</tr>
				<?php endforeach; ?>

			<tr>
				<td colspan="4" align="center">tambah data</td>
			</tr>
		</table>
	</center>
</body>
</html>