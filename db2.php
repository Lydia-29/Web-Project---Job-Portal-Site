<?php

  $host="localhost";
  $username="root";
  $password="Lydia@";
  $db="mydatabase";
  
  $con=mysqli_connect($host, $username, $password, $db);
  
  if(!$con)
  {
	  die("Connection failed:".mysqli_connect_error());
  }
     echo"Connected successfully<br>";
	 
	 $sql="CREATE TABLE IF NOT EXISTS employee 
	    (empid INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,ename VARCHAR(30)NOT NULL,
		occupation VARCHAR(30) NOT NULL,salary int(30) NOT NULL)";
		
	 if(mysqli_query($con,$sql))
	 {
		 echo"Table employee created successfully<br><br>";
	 }
	 else 
	 { 
         echo"Error:".mysqli_error($con);
	 }
	 
	 if(isset($_POST["insert"]))
	 {
		 $empname=$_POST["empname"];
		 $occupation=$_POST["occupation"];
		 $salary=$_POST["salary"];
		 
		 if(!empty($empname) && !empty($occupation) && !empty($salary))
		 {
			 $sql="INSERT INTO employee(ename,occupation,salary) VALUES('$empname', '$occupation', '$salary')";
			 if(mysqli_query($con,$sql))
			 {
				 echo"Employee Data inserted Successfully<br>";
			 }
			 else
			 {
				 echo"Error Inserting:".mysqli_error($con);
			 }
		 }
		 else
		{
			echo"values should be entered to inserting";
		}
	 }
		                                                         
     if(isset($_POST["display"]))
	 {
        $sql="SELECT * FROM employee";
        $result=mysqli_query($con,$sql);

         if(mysqli_num_rows($result)>0)
		 {
            while($row=mysqli_fetch_assoc($result))
			{
                echo $row["empid"] . "  " . $row["ename"] . "  " . $row["occupation"] . "  " . $row["salary"] . "<br>";
			}
		 }
		 else
		 {
			 echo"No Records";
		 }
	 }
		 
		 echo"<a href='form1.php'>
		       <button type='button'>GO BACK</button>
		     </a>";
			 
		if(isset($_POST["update"]))
		{
			$employid=$_POST["employid"];
			$newsalary=$_POST["newsalary"];
			
			if(!empty($employid) && !empty($newsalary))
			{
				$sql="UPDATE employee SET salary='$newsalary' WHERE empid='$employid'";
				if(mysqli_query($con,$sql))
				{
					echo"Updating Successfull<br>";
				}
				else
				{
					echo"Updating error:".mysqli_error($con);
				}
			}
			else
			{
				echo"Both Salary and EmployeeID needed to be updating the table";
			}
	    }
		mysqli_close($con);
?>