<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Square Technology</title>
    <style>
    body 
	{
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }
    header 
	{
		background-color: #2874a6;
        color: white;
        padding: 20px;
        text-align: center;
    }
    .container
	{
        display: flex;
        justify-content: space-between;
        padding: 20px;
    }
        .left-column,
        .right-column {
            width: 48%;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .right-column {
            text-align: left;
        }
        .right-column h2 {
            font-weight: bold;
        }
        .contact-info {
            list-style: none;
            padding: 0;
        }
        .contact-info li {
            margin: 10px 0;
        }
        .button {
            display: inline-block;
            margin: 10px 0;
            padding: 10px 20px;
            color: white;
            background: #007bff;
            border-radius: 5px;
            text-decoration: none;
        }
		footer {
    text-align: center;
    padding: 20px;
    background-color: #dcdcdc;
    color: white;
}
    </style>
</head>
<body>

<header>
    <h1>L. SQUARE TECHNOLOGY AND LIMITED</h1>
    <nav>
            <a href="homee.php">Home</a>

        <a href="visionn.php">Our Vision</a>
		        <a href="portfolioo.php">Portfolio</a>

		<a href="contactt.php">Contact</a>
				<a href="teamm.php">Our Team</a>

		
        </nav>
</header>

<div class="container">
    <div class="left-column">
        <img src="twelve.jpg" alt="Group Meeting" style="width:100%; border-radius:10px;" />
    </div>
    <div class="right-column">
        <h2>Our Contact</h2>
        <ul class="contact-info">
            <li>📞 +91 8870531497</li>
            <li>🌐 www.L2tech&lyd.com</li>
            <li>📧 hello@techlydia.com</li>
            <li>📍 123 Anywhere ST., Any City, ST 12345</li>
        </ul>
    </div>
</div>
<footer>
        <p>&copy; 2023 5 Square Technology Limited</p>
    </footer>

</body>
</html>