<!DOCTYPE html> 
<html> 
     <head> 
		<meta charset="utf-8"> 
		<title>DB Demo</title> 
	 </head> 
	  <body> 
		<h3>Student Table</h3> 
		<form method="post" action="db.php"> 
			<label for="sname">Name:</label> 
			<input type="text" name="studname" id="sname"><br><br> 
			<input type="submit" name="insert" value="Add Student"><br><br>
            <input type="submit" name="display" value="Display Student"><br><br> 			
		</form>
		
			<form action="db.php" method="post">
				<label for="sname">StudID:</label> 
			    <input type="text" name="Studid" id="sname"><br><br> 
				<label for="sname">Newname:</label> 
			    <input type="text" name="newname" id="sname"><br><br> 
				<input type="submit" name="update" value="Update Student"><br><br> 			
		    </form>
	  </body>
</html>