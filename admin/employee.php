<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","getscat.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>
<?php include "header.php"; ?>

<link rel="stylesheet" type="text/css" href="style.css">

<div class="content">
	<form action="" method="post" enctype="multipart/form-data">
	<table border=0 align="center" bgcolor="white" width="65%" style="box-shadow: 1px 3px 15px 2px;" cellpadding="10" cellspacing="15" >
	

	<tr align="center">
			<td class="title">Add New Employee</td><td><a href="view_employee.php" style="color: red; text-decoration: none;">View Employee Detail</a></td>
    </tr>
    

   <tr align="center">  
         <tr align="center">
   	   	    <td> Enter Name</td>
   	   	    <td><input type="text" name="Name" value="" placeholder="" class="text" required></td>
   	   </tr> 
	 <tr align="center">
   	   	    <td> Enter 	Email</td>
   	   	    <td><input type="text" name="Email" value="" placeholder="" class="text" required></td>
   	   </tr>

	 <tr align="center">
   	   	    <td> Enter Mobile</td>
   	   	    <td><input type="text" name="Mobile" value="" placeholder="" class="text" required></td>
   	   </tr>

    <tr align="center">
   	   	    <td> Enter Address</td>
   	   	    <td><input type="text" name="Address" value="" placeholder="" class="text" required></td>
   	   </tr> 
    	<td colspan=2 align="center"> <input type="submit" name="add" value="Add Employee" class="btn"> </td>
    </tr>

</table>
</form>
<?php
include "connect.php";
if(isset($_POST['add']))
{
		$name=mysqli_real_escape_string($con,$_POST['Name']);
		$Email=mysqli_real_escape_string($con,$_POST['Email']);
		$Mobile=mysqli_real_escape_string($con,$_POST['Mobile']);
		$Address=mysqli_real_escape_string($con,$_POST['Address']);
		
		mysqli_query($con,"insert into emlpoyee_detail (Name,Email,Mobile,Address,Status) values('$name','$Email','$Mobile','	$Address',1)");
		echo "<div style='text-align:center; font-size:1.3em; color:red;'>Employee Data Addedd SuccessFully</div>";
		
}
?>	
</div>
<?php include "footer.php"; ?>