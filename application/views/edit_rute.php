<!DOCTYPE html>
<html>
<head>
	<title>Edit Rute</title>
</head>
<body>
	<?php foreach($rute as $u){ ?>
	<form action="<?php echo base_url('index.php/admin/update_rute'); ?>" method="post">
		<table style="margin:20px auto;">
		<tr><td><input type="text" name="id" value="<?php echo $u->id; ?>" hidden></td></tr>
			<tr>
				<td><label>Depart At</label></td>
				<td>
					<input class="form-control" type="text" name="depart_at" value="<?php echo $u->depart_at ?>">
				</td>
			</tr>
			<tr>
				<td><label>Rute From</label></td>
				<td><input class="form-control" type="text" name="rute_from" value="<?php echo $u->rute_from ?>"></td>
			</tr>
            <tr>
				<td><label>Rute To</label></td>
				<td><input class="form-control" type="text" name="rute_to" value="<?php echo $u->rute_to ?>"></td>
			</tr>
            <tr>
				<td><label>Price</label></td>
				<td><input class="form-control" type="text" name="price" value="<?php echo $u->price ?>"></td>
			</tr>
            <tr>
				<td><label>TransportationID</label></td>
				<td><input class="form-control" type="text" name="transportationid" value="<?php echo $u->transportationid ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php } ?>
</body>
</html>
