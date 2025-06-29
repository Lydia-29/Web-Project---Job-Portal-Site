<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L Square Technology & Limited</title>
    <style type="text/css">
        body 
		{
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #a0cfe7, #f3f8f9);
        }
        header 
		{
            background-color: #2874a6;
            color: white;
            padding: 1rem 0;
            text-align: center;
        }
        h1 
		{
            margin: 0;
            font-size: 24px;
        }
        .container
		{
            width: 60%;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        label 
		{
            font-weight: bold;
            display: block;
            margin: 12px 0 5px;
        }
        input, select 
		{
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button 
		{
            background-color: #2b5d6b;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover
		{
            background-color: #1a3c4e;
        }
        footer 
		{
            text-align: center;
            padding: 20px;
            background-color: #dcdcdc;
            color: white;
        }
    </style>
</head>
<body>
<header>
    <h1>L Square Technology & Limited</h1>
    <nav>
        <a href="homee.php">Home</a>
        <a href="visionn.php">Vision</a>
        <a href="portfolioo.php">Our Portfolio</a>
        <a href="teamm.php">Our Team</a>
        <a href="contactt.php">Contact</a>
    </nav>
</header>
<div class="container">
    <form method="post" action="projj.php" onsubmit="return handleSubmit()">
	<table align="center" cellpadding="10px" cellspacing="20px">
		<tr>
		</tr>
        <tr>
			<td><label for="name">NAME:</label></td>
			<td><input type="text" id="name" name="name" required pattern="^[A-Za-z\s]+$" title="Enter only alphabets"></td>
		</tr>
		<tr>
			<td><label for="age">Age:</label></td>
			<td><select id="age" name="age" required>
				<option value="">Select Age</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
			</select></td>
		</tr>
		<tr>
        <td><label>Sex:</label></td>
			<div class="radio-group">
			<td><input type="radio" name="sex" value="Male" required> M</label></td>
			<td><input type="radio" name="sex" value="Female"> F</label></td>
			<td><input type="radio" name="sex" value="Other"> Other</label></td>
			</div>
		</tr>

        <tr>
			<td><label for="qualification">Qualification:</label></td>
			<td><input type="text" id="qualification" name="qualification" required></td>
		</tr>
		<tr>
			<td><label for="address">Address:</label></td>
			<td><input type="text" id="address" name="address" required></td>
        <tr>
			<td><label for="job">Job Wanted:</label></td>
			<td><select name="job" id="Domain" required onchange="changelevel()">
				<option value="">Choose Domain</option>
				<option value="Software Engineer">Software Engineer</option>
				<option value="Data Scientist">Data Scientist</option>
				<option value="Network Administrator">Network Administrator</option>
				<option value="IT Project Manager">IT Project Manager</option>    
				<option value="Cybersecurity Specialist">Cybersecurity Specialist</option>    
				<option value="Technical Writer">Technical Writer</option>    
				<option value="Quality Assurance Tester">Quality Assurance Tester</option>    
				<option value="UI/UX">UI/UX</option>    
				<option value="Web Developer">Web Developer</option>    
				<option value="Database Administrator">Database Administrator</option>    
			</select></td>
		</tr>
		<tr>
			<td><label for="contact">Contact:</label></td>
			<td><input type="tel" id="contact" name="contact" required pattern="^[0-9]{10}$"></td>
		</tr>
        <tr>
			<td><label for="email">Email:</label></td>
			<td><input type="email" id="email" name="email" required></td>
		</tr>
        <tr>
			<td><label for="experience">Experience (in years):</label></td>
			<td><input type="number" id="experience" name="experience" required min="0"></td>
		</tr>
		<tr>
			<td><label for="blood-group">Blood Group:</label></td>
			<td><select id="blood-group" name="blood-group" required>
				<option value="">Select Blood Group</option>
				<option value="A+">A+</option>
				<option value="B+">B+</option>
				<option value="O+">O+</option>
				<option value="AB+">AB+</option>
			</select></td>
		</tr>
        <tr>
			<td><label for="hobbies">Hobbies:</label></td>
			<td><input type="text" id="hobbies" name="hobbies" required ></td>
		</tr>
		<tr>
			<td><input type="hidden" id="fee" name="fee"></td>
		</tr>
		<tr>
		</tr>
		<tr>
			<td><button id="button1" type='submit'> REGISTER </button></td>
		</tr>
		</table>
    </form>
</div>
<footer>
    <p>&copy; 2023 L Square Technology Limited</p>
</footer>
<script type="text/javascript">
		function changelevel() 
		{
			var x = document.getElementById("Domain").value;
			alert("You selected " + x + " Domain");
		}

		function handleSubmit() 
		{
			var job = document.getElementById("Domain").value;
			var fee = calculateFee(job);
			document.getElementById("fee").value = fee; // Set the fee in the hidden input

			if (confirm("Are you sure to submit? Your registration fee is $" + fee)) {
				return true; // Allow form submission
			} else {
				alert("Make changes and register again");
				return false; // Prevent form submission
			}
		}

		function calculateFee(job)
		{
			var fees = {
						"Software Engineer": 100,
						"Data Scientist": 120,
						"Network Administrator": 90,
						"IT Project Manager": 150,
						"Cybersecurity Specialist": 130,
						"Technical Writer": 80,
						"Quality Assurance Tester": 70,
						"UI/UX": 110,
						"Web Developer": 95,
						"Database Administrator": 85
					};
			var registrationFee = fees[job] || 0;
			var gst = registrationFee * 0.18; 
			return (registrationFee + gst).toFixed(2); 
		}
</script>
</body>
</html>