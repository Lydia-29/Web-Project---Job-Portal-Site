<?php
   
   $host="localhost";
   $username="root";
   $password="Lydia@";
   $db="mydatabase";
   
   $con = mysqli_connect($host, $username, $password, $db); 
   
   if(!$con)
   {
	   die("connection failed:".mysqli_connect_error());
   }
   echo"connection successfull <br>";
   
   $sql="CREATE TABLE IF NOT EXISTS student
       (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,name
	   VARCHAR(70) NOT NULL)";
	  
	if(mysqli_query($con,$sql))
    {
        echo "Table student is ready<br>";   
	}
    else
	{
        echo"Error:".mysqli_error($con);
    }

    //insert when the form received data
      if(isset($_POST["insert"]))
   {
	 $studname=$_POST["studname"];
	 if(!empty($studname))
	 {
		 $sql="INSERT INTO student(name) VALUE ('$studname')";
		 if(mysqli_query($con,$sql))
		 {
			 echo"New student inserted successfully<br>";
		 }
		 else
		 {
			 echo"error:".mysqli_error($con);
		 }
	 }
	else
	{
		echo"Name cannot be empty";
	}
}
	 
	 //display when a form recived
	 if(isset($_POST["display"]))
	 {
		 $sql="SELECT * FROM student";
		 $result=mysqli_query($con,$sql);
		 
		 if(mysqli_num_rows($result)>0)
		 {
			 while($row=mysqli_fetch_assoc($result))
			 {
				 echo$row["id"]."".$row["name"]."<br>";
			 }
		 }
		     else
			 {
				 echo"No records to be displayed";
			 }
		 } 
		   
		   echo "<a href='form.php'>
		   <button type='button'>Go back</button>
		   </a>";
		    
		//update when the form is received	
			if(isset($_POST["update"]))
		  {
			  $Studid=$_POST["Studid"];
              $newname=$_POST["newname"];
			  
			  if(!empty($Studid) && !empty($newname))
			  {
				  $sql="UPDATE student SET name='$newname' WHERE id='$Studid'";
				  
                   if (mysqli_query($con, $sql))  
				   {
					   echo"student table updated successfully <br>";
				   }
				   else
				   {
					   echo"updating Error:".mysqli_error($con);
				   }
			  }
			  else
			  {
				  echo"Both name and id required to update a table";
			  }
		  }
		  mysqli_close($con);
?>