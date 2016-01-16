<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
<?php echo "<h2>".$this->session->flashdata('pesan')."</h2>" ?>
	<table border="1" style="border-collapse:collapse"; width="50%">
		<thead>
			<tr style="background:green">
				<th>No Induk</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($data as $a) { ?>
			
		
			<tr>
				<td><?php echo $a['nim']; ?></td>
				<td><?php echo $a['nama']; ?></td>
				<td><?php echo $a['alamat']; ?></td>
				<td>
					<a href="<?php echo base_url()."index.php/crud/edit_data/".$a['nim']; ?>">Edit</a> ||
					<a href="<?php echo base_url()."index.php/crud/do_delete/".$a['nim']; ?>">Delete</a>
				</td>
			</tr>
		</tbody>
		<?php } ?>
	</table>
	<a href="<?php echo base_url()."index.php/crud/add_data"; ?>">Tambah Data</a>
</body>
</html>