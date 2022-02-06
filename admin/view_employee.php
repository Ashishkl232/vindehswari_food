<?php include "header.php"; ?>
<?php include "connect.php"; ?>
<style type="text/css">
	tr{
		font-size: 1.2em;
		color: #26947e;


	}
	tr:hover{
		background-color: black;
		color: white;
	

	}
	th{
		color: blue;
		font-size: 1.3em;
	}
	.del{
		color: red;
		text-decoration: none;
	}
	.del:hover{
		color: blue;
		text-decoration: none;
		text-shadow: 2px 3px 2px #FFFFFF;
	}


</style>
<div class="content">
	<table border=1 width="100%" cellspacing="3" cellpadding="5" style="box-shadow: 5px 4px 10px 2px; font-family: times new roman; background-color:">

		<tr>
			<th>Employee Name</th>
			<th>Email</th>
			<th>Mobile</th>
			<th>Address</th>
			<th>REMOVE</th>
		</tr>
		<?php 
			$s = mysqli_query($con,"select * from emlpoyee_detail");
			while($r = mysqli_fetch_array($s))
			{
			?>
				<tr align=center>
					<td><?php echo $r['Name']; ?></td>
					<td><?php echo $r['Email']; ?></td>
					<td><?php echo $r['Mobile']; ?></td>
					<td><?php echo $r['Address']; ?></td>
					<td><a href="delemployee.php?a=<?php echo $r['id']; ?>" class="del">DELETE</a></td>
				</tr>	
		<?php	
			}
		?>


	</table>	


</div>
<?php include "footer.php"; ?>