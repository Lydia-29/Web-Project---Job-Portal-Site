<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $sex = htmlspecialchars($_POST['sex']);
    $qualification = htmlspecialchars($_POST['qualification']);
    $address = htmlspecialchars($_POST['address']);
    $job = htmlspecialchars($_POST['job']);
    $contact = htmlspecialchars($_POST['contact']);
    $email = htmlspecialchars($_POST['email']);
    $experience = htmlspecialchars($_POST['experience']);
    $blood_group = htmlspecialchars($_POST['blood-group']);
    $hobbies = htmlspecialchars($_POST['hobbies']);
    $fee = htmlspecialchars($_POST['fee']);

    $jobFees = [
        "Software Engineer" => 100,
        "Data Scientist" => 120,
        "Network Administrator" => 90,
        "IT Project Manager" => 150,
        "Cybersecurity Specialist" => 130,
        "Technical Writer" => 80,
        "Quality Assurance Tester" => 70,
        "UI/UX" => 110,
        "Web Developer" => 95,
        "Database Administrator" => 85
    ];

    $registrationFee = $jobFees[$job];
    $gst = calculateGST($registrationFee);
    $totalFee = $registrationFee + $gst;


    echo "<br><br><br><center><h1>Hello $name, you have registered successfully!</h1></center><br><br>";
    echo "<center><p>Your registration fee for the position of <strong>$job</strong> is <b>$$registrationFee</b>.</p></center>";
    echo "<center><p>The GST (18%) on your registration fee is <b>$$gst</b>.</p></center>";
    echo "<center><p>The total amount to be paid is <mark>$$totalFee</mark>.</p></center><br><br>";
    echo "<center>Your offer letter will be sent through mail soon.</center>";
    echo "<center><b><p>Thank you for registering with us!</p></b></center>";
    

    echo "<br><br><center><a href='homee.php' style='font-weight: bold; font-size: 18px;'>Go to Home Page</a></center>";
	} 
	else 
	{
		echo "<p>No data submitted.</p>";
	}

	function calculateGST($amount, $gstRate = 0.18) 
	{
		return $amount * $gstRate;
	}
?>