<?php include ('action.php'); ?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Pharping,Medical Store</title>
  </head>
  <body>
    

       	<div class="container">
    		<div  class="row text-center">
    			<div class="col-md-3"></div>
    			<div class="col-md-6">


    				<div class="card" style="width:auto">
 
						  <div class="card-body  ">
						    <h5 class="card-title  bg-primary p-4 my-10">Enter Medine Details</h5>

						    <form method="post" action= "action.php">
    					 		<table class="table table-primary">

                                   <tr>
                                   	<td>Medicine Name</td>
                                   	<td><input type="text" class="form-control" name="name" placeholder="Enter the medicine name" required> </td>
                                   	
                                   </tr>

                                    <tr>
                                     	<td>Qunatity</td>
                                         <td><input type="number" class="form-control" name="quantity" value="quantity" placeholder="Enter the medicine name" required> </td>
                                                                      	
                                     </tr> 
                                   
                                   <tr>
                                   	
                                   	<td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="submit" value="store"> </td>
                                   	
                                   </tr> 
    					 		
    					 	     </table>
    					 	</form>
						   
						  </div>
                   </div>
    			
    				

    			</div>
    			<div class="col-md-3"></div>
    			
    		 </div>
    	</div>


		<div class="container">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<table class="table table-bordered">
						<tr>
							<th>S.N</th>
							<th>Medicine Name</th>
							<th>Available Stock</th>
							<th>Action</th>
							<th>Action</th>
						</tr>
                          
                          <?php 

                            $myrowdata = $obj1->fetch_record("medicines");

                            /*debugger($myrowdata,true);*/

                            foreach ($myrowdata as $row) {
                                  
                             ?> 
                              <tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['m_name']; ?></td>
								<td><?php echo $row['qty']; ?></td>
								
								<td><a href="#"  class="btn btn-primary">Edit</a></td>
								<td><a href="#"  class="btn btn-danger">Delete</a></td>
						     </tr>
                             <?php

                            }

                           ?>



						
					</table>
				</div>

			</div>
			
		</div>
    	



  











    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>