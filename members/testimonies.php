<?php include('header.php'); ?>
<?php include('session.php'); ?>
<link rel="stylesheet" href=testimonies.css>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">
					 
					  <script type="text/javascript">
		              $(document).ready(function(){
		              $('#add').tooltip('show');
		              $('#add').tooltip('hide');
		              });
		             </script> 
					 <div id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></div>
				<?php	
	             $count_student=mysqli_query($conn,"select * from testimony");
	             $count = mysqli_num_rows($count_student);
                 ?>	 
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Testimonies</div>
                          <div class="muted pull-right">
								Number of testimonies shared: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
						  </div>
						  
                 <h4 id="sc">
					<div align="right" id="sc">Date:
						<?php
                            $date = new DateTime();
                            echo $date->format('l, F jS, Y');
                         ?></div>
				 </h4>

													
<div class="container-fluid">
  <div class="row-fluid"> 
     <div class="empty">
	     <div class="pull-right">
		   <!-- this is the code for printing the list of testimonies
			   <a href="print_giving.php" class="btn btn-info" id="print" data-placement="left" title="Click to Print"><i class="icon-print icon-large"></i> Print List</a> 		       -->
		   <script type="text/javascript">
		     $(document).ready(function(){
		     $('#print').tooltip('show');
		     $('#print').tooltip('hide');
		     });
		   </script>        	   
         </div>
      </div>
    </div> 
</div>
	
<div class="block-content collapse in">
    <div class="span12">
	<!-- <form action="" method="post">
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
		<thead>		
		        <tr>			        
                	<th>member Name </th>
					<th>Mobile No. </th>
					<th>Story</th>
					<th>Title</th>
			       
					<th>Date & Time  </th>
						
                   		
                    				
		    </tr>
		</thead>
<tbody> -->
<!-----------------------------------Content------------------------------------>
<!-- <?php
		$student_query = mysqli_query($conn,"SELECT *FROm members  LEFT OUTER JOIN testimony ON members.id = testimony.na WHERE testimony.tid !='' ORDER BY testimony.ttime" )or die(mysqli_error());
		while($row = mysqli_fetch_array($student_query)){
		$username = $row['tid'];
	
		?>
									
		<tr>
		<td><?php echo $row['fname']." ".$row['lname']; ?></td>
		    <td><?php echo $row['mobile']; ?></td>
			<td><?php echo $row['story']; ?></td>
			
			<td><?php echo $row['title']; ?></td>
			<td><?php echo $row['ttime']; ?></td>
            </tr>
											
	<?php } ?>   

</tbody>
</table>
</form>	 -->



<?php
		$student_query = mysqli_query($conn,"SELECT *FROm members  LEFT OUTER JOIN testimony ON members.id = testimony.na WHERE testimony.tid !='' Order by testimony.ttime desc")or die(mysqli_error());
		while($row = mysqli_fetch_array($student_query)){
		$username = $row['tid'];
		$img_src = $row['thumbnail'];
	
		?>  <div class ="testimonies">
	        <div class ="header"><h3><?php echo $row['title']; ?></h3><br></div>
			<img src ="<?php echo $img_src; ?>" class="image">
			<div class="content"><i><?php echo $row['story']; ?></i><br></div>
			<div class ="published">Published on: <b><?php echo $row['ttime']; ?></b> by <u><i><b><?php echo $row['fname']." ".$row['sname']; ?></u></i></div>
		</div>
											
	<?php } ?> 

		
			  		
</div>
</div>
</div>
</div>
</div>
	
</div>	
<?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>
 </body>
</html>