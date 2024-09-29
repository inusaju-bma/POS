<head>
	<?php include('templates/head.php'); ?>
	<?php include ('server/connection.php');?>
	<?php
	include 'set.php';
	$id = $_GET['reciept_id'];
	$sql = "SELECT * FROM sales_product,products WHERE reciept_no = '$id' AND sales_product.product_id = products.product_no";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_array($result);
	$result1 = mysqli_query($db,$sql); 
?>
</head>
<div>
	<div>
		<button id="buttons" onclick="window.location.href='main.php'" class="btn btn-secondary border mr-2">Back</button>
		<center><h4 style="font-size: 30px; font-family: Roboto; line-height: 30px; margin: 2px; padding: 0;">Gadget King</h4></center>
	</div>
	<div>
	<table style="width: 100%; margin-bottom: 20px;">
		<tbody>
			<tr>
				<td style="text-align: center;" colspan ="2">
					<h4 style="font-size: 23px; font-family: Times New Roman; line-height: 30px; margin: 2px; padding: 0;">Invoice</h4>
					<p style="font-size: 16px; font-family: Times New Roman; line-height: 24px; margin: 2px; padding: 0;">01833504424</p>
					<p style="font-size: 16px; font-family: Times New Roman; line-height: 24px; margin: 2px; padding: 0;">GEC, Chattogram</p>
				</td>
			</tr>
			<tr>
				<td>
					<h5 style="font-size: 20px; font-family: Times New Roman; line-height: 30px; margin: 0px; padding: 0;">Customer Details</h5>
					<p style="font-size: 14px; font-family: Times New Roman; line-height: 20px; margin: 0px; padding: 0;">Customer Name: </p>
					<p style="font-size: 14px; font-family: Times New Roman; line-height: 20px; margin: 0px; padding: 0;">Customer Contact No:</p>
					<p style="font-size: 14px; font-family: Times New Roman; line-height: 20px; margin: 0px; padding: 0;">Customer Address:</p>
				</td>
				<td align= "end">
					<h5 style="font-size: 20px; font-family: Times New Roman; line-height: 30px; margin: 0px; padding: 0;">Invoice Details</h5>
					<p style="font-size: 14px; font-family: Times New Roman; line-height: 20px; margin: 0px; padding: 0;">Invoice No: &nbsp<?php echo $row['reciept_no'];?></p>
					<p style="font-size: 14px; font-family: Times New Roman; line-height: 20px; margin: 0px; padding: 0;">Invoice Date: <?=date('d M Y');?></p>
					<p style="font-size: 14px; font-family: Times New Roman; line-height: 20px; margin: 0px; padding: 0;">Address:GEC, Chattogram</p>
				</td>
				
			</tr>
		</tbody>
	</table>
	<div>
	<table style="width: 100%"; cellpadding="5">
		<thead>
			<tr>
				<th align="start" style="border-bottom: 1px solid #ccc; font-family: Roboto;" width="7%">Product ID</th>
				<th align="start" style="border-bottom: 1px solid #ccc; font-family: Roboto;" >Product Name</th>
				<th align="start" style="border-bottom: 1px solid #ccc; font-family: Roboto;" width="10%">Unit Price</th>
				<th align="start" style="border-bottom: 1px solid #ccc; font-family: Roboto;" width="10%">Quantity</th>
				<th align="start" style="border-bottom: 1px solid #ccc; font-family: Roboto;" width="15%">Total Price</th>				
			</tr>
		</thead>
		<tbody class="table-hover">
					<?php 
						while($row1 = mysqli_fetch_array($result1)){
				  	?>
					<tr class="table-active">
						<td><?php echo $row1['product_id'];?></td>
						<td><?php echo $row1['product_name'];?></td>
						<td>৳<?php echo $row1['price'];?></td>
						<td><?php echo $row1['qty'];?></td>
						<td><?php echo $row1['price*qty'];?></td>
					</tr>
					<?php } ?>
		</tbody>	
	</table>
	</div>
	</div>
    <div>
      <div>
        <p style="font-size: 14px; font-family: Times New Roman; line-height: 20px; margin: 0px; padding: 0; text-align: center;">
          &copy; 2024 <a href="main.php">Gadget King Ctg</a>. All Rights Reserved
        </p>

      </div>
    </div>
</div>
	<script src="bootstrap4/jquery/jquery.min.js"></script>
	<script src="bootstrap4/js/jquery.dataTables.js"></script>
	<script src="bootstrap4/js/dataTables.bootstrap4.min.js"></script>
	<script src="bootstrap4/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#sales_table').dataTable();
			
		});
	</script>
<script>
	$(function () {
  		$('[data-toggle="popover"]').popover()
	});
	$(document).ready(function(){
	/* function for activating modal to show data when click using ajax */
	$(document).on('click', '.view_data', function(){  
		var id = $(this).attr("id");  
		if(id != ''){  
			$.ajax({  
				url:"view_cashflow.php",  
				method:"POST",  
				data:{id:id},  
				success:function(data){  
					$('#Contact_Details').html(data);  
					$('#dataModal').modal('show');  
				}  
			});  
		}            
	});   
 });  

</script>