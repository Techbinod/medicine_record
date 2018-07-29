

<?php  include_once ('db.php'); ?>
<?php  include_once ('function.php'); ?>


<?php  
class DataOperation extends Database{


	   public function insert_record($table,$fields){

             //"INSERT INTO table_name (,) VALUES ('m.name','qty')";
            
            $sql="";
             $sql .= "INSERT INTO " .$table ;
             $sql .= " (".implode(",", array_keys($fields)).") VALUES ";
             $sql .=  "('".implode(" ',' ", array_values($fields))."')";
                 
             $query  = mysqli_query($this->conn,$sql);

             if($query){
             	return true;
             }else{
             	echo "Data is not inserted successfully";
             }


         }

           public function fetch_record($table){

             $sql ="SELECT * FROM ".$table;
             $array = array();
             $query = mysqli_query($this->conn,$sql);

             while($row =mysqli_fetch_assoc($query)){
             	$array[] = $row;
             }



             return $array;

	      }


     }




$obj1 = new DataOperation;




if(isset($_POST["submit"])){


	$myArray = array(

         "m_name" => $_POST["name"],
          "qty" => $_POST["quantity"]
         /* "key" => "value" you can add more according to cl*/
	  );


    $query = ($obj1 ->insert_record("medicines",$myArray));

   if($query){
	header("location:index.php?msg=Record Inserted ");
 

 }

}


 ?>