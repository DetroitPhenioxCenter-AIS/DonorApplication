<?php

session_start();

include_once 'Includes/db.php';
include_once 'website_head.php';

?>

	<div class="container w-50">
		<div class="text-center pb-2 pt-2">

         <button class="btn btn-primary " onclick="printDiv('printableArea')">Print Report</button></div>
		<div id="printableArea">
		<div class="head_image text-center pt-4 pb-2" >
              <img src="img/logo.png" class="img-fluid">
         </div>
         <div class="text-center">
         	<div class="pt-2 pb-2">
				<h1>Donation Report</h1>
			</div>
			<div >
				<h4 >
		             <?php echo"Date : " . date("m-d-Y");  ?>
				</h4>
			</div>
			<div class="text-left">
				<h4>Hello <?php echo ($_SESSION['u_user_name']); ?>,</h4>
				<p>Thanks a lot for donating and supporting us. Please find your details below for tax filing:</p>
			</div>
			<table class="table table-striped">
				<tr><td>Date</td><td>Amount</td></tr>
				<?php
		$username = $_SESSION['u_user_name'];
		$sql2 = "SELECT * FROM donors WHERE user_name='$username';";
 		$result = mysqli_query($conn, $sql2);

		while($row = mysqli_fetch_assoc($result)){
			$array = explode('|',$row['donation_amount']);
			$array1 = explode('|',$row['date_donation']);
			$len=count($array);
			for ($i=0;$i<$len-1;$i++){
		echo '<tr><td>'.$array1[$i].'</td><td>'. $array[$i]. '</td></tr>';
		}} ?>
			</table>
			<div >
				<h4> Total Amount: <?php echo($_SESSION['u_total']); ?> </h4>;
			</div>
			<div class=" text-left">
				<h4>Thanks and Regards,</h4>
				<h4>Detroit Pheonix Center</h4>
				<h4>Detroit, Mi</h4>
				
			</div>
			
         </div>
         </div>
         
	</div>
	<!--<div  style="display: block;" >
		<div class="text-center">
			<div >
				<img src="img/logo.png" class="img-fluid">
			</div>
			<div class="title">
				<h1>Donation Report</h1>
			</div>
			<div >
				<h3 >
		             <?php //echo"Date : " . date("m-d-Y");  ?>
		</h3>/
			</div>
			<div class="text-left">
				<h4>Hello <?php// echo ($_SESSION['u_user_name']); ?>,</h4>
				<p>Thanks a lot for donating and supporting us. Please find your details below for tax filing:</p>
			</div>

			<div>
				<table border="1" cellspacing="0" cellpadding="5" id="box">
					<thead class="text-center"><tr>
						<th>Date</th>
						<th>Amount</th>
						
						
					</tr></thead>
		<tbody>
<?php
		/*$username = $_SESSION['u_user_name'];
		$sql2 = "SELECT * FROM donors WHERE user_name='$username';";
 		$result = mysqli_query($conn, $sql2);

		while($row = mysqli_fetch_assoc($result)){
			$array = explode('|',$row['donation_amount']);
			$array1 = explode('|',$row['date_donation']);
			$len=count($array);
			for ($i=0;$i<$len-1;$i++){
		echo '<tr><td>'.$array1[$i].'</td><td>'. $array[$i]. '</td></tr>';
		}} */?>

		</tbody>

	    

		

				
		</table>

		

		
			</div>

			<div class=" text-left">
				<h4>Thanks and Regards,</h4>
				<h4>Detroit Pheonix Center</h4>
				<h4>Detroit, Mi</h4>
				
			</div>
			
		</div>
		
	</div> -->


	<script type="text/javascript">
	function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}


</script>

<?php include_once 'website_foot.php'; ?>



