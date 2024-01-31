

<?php require_once "inc/header.php";?>


<div class="container"> 

	<div class="row"> 
		<div class="col-md-10"> 
			<div class="our_project"> 


<p style="text-shadow: 3px 3px 3px #333333;font-size: 20px;margin-bottom: 40px;margin-top: -85px;text-align: center;text-decoration: underline;text-transform: capitalize;width: 631px;">PHP OOP & PDO Dynamic CRUD<span style="float:right;color: red;font-size: 18px"><?php date_default_timezone_set("ASIA/DHAKA");echo "Time Is ".date("h:m:s a");?></span></p>


	<!--PHP CODE WRITE HERE--->
	
		<h2 style="margin-left:-87px;color:green;width: 636px"> 
			<?php 
		
		
			?>
	
		</h2>
	   
	 
	<!--JAVSCRIPT CODE WRITE HERE--->   
	
		
		<script type="text/javascript"> 
		
				
		</script>

	<!--HTML CODE WRITE HERE--->	
	
				
				<div class="panel panel-default"> 
					
					<div class="panel-heading"> 
						<h2 >Update Student <a href="index.php" class=" btn btn-success pull-right">Back</a></h2>
					</div>
					
					
					
					<?php 
					
						$db = new database;
						$table ="tbl_student";
					
						$id =$_GET['id'];
						
						$wherecond =array(
									'wheresj'=>array('id'=>$id),
									'return_type'=>'single'
									);
						
						$value =$db->select($table,$wherecond);
					
					?>
					
					
					<?php if(!empty($value)){?>
					
					<div class="panel-body"> 
						<form action="lib/process_student.php" method="POST"> 
							<div class="form-group"> 
								<label for="name">Name</label>
								<input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name.." required="1" value="<?php echo $value['name'];?>"/>
							</div>
							<div class="form-group"> 
								<label for="email">Email</label>
								<input type="text" name="email" class="form-control" id="email" placeholder="Enter Your Email.." required="1"value="<?php echo $value['email'];?>" />
							</div>
							<div class="form-group"> 
								<label for="phone">Phone</label>
								<input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Your Phone.." required="1" value="<?php echo $value['phone'];?>" />
							</div>
							<div class="form-group">
								<input type="hidden" name="id" value="<?php echo $value['id'];?>"/>							
								<input type="hidden" name="action" value="edit"/>
								<input class="btn btn-primary" type="submit" name="submit" value="Update Student"/>
							</div>
						</form>
					</div>
					
					<?php }?>
						
				</div>

			</div>
		</div>

	</div>



</div>

<?php require_once "inc/footer.php";?>