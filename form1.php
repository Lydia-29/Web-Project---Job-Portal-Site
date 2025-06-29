<!DOCTYPE html>
<html>
   <head>
     <title>Sample DB</title>
	 <meta charset="utf-8">
   </head>
   <body>
       <form method="post" action="db2.php">  
			
			<label for="ename">EmpName:</label> 
			<input type="text" name="empname" id="ename"><br><br>
			
			<label for="occ">Occupation:</label> 
			<input type="text" name="occupation" id="occ"><br><br> 
			
			<label for="sal">Salary:</label> 
			<input type="text" name="salary" id="sal"><br><br> 
			<input type="submit" name="insert" value="Add Employee">
			<input type="submit" name="display" value="Display Employee">
		</form>		<br><br> 

            <form method="post" action="db2.php">	
			<label for="eid">Empid:</label> 
			<input type="text" name="employid" id="eid"><br><br> 
			<label for="sall">New Salary:</label> 
			<input type="text" name="newsalary" id="sall"><br><br> 
			<input type="submit" name="update" value="Update Employee">
		    </form>
   </body>
</html>