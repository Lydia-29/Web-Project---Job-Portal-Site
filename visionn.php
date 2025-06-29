<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styless.css">
    <title>Our Vision</title>
	<style type="text/css">
	body 
	{
		font-family: Arial, sans-serif;
		margin: 0;
		padding: 0;
		background-color: #f1f1f1;
	}
	header 
	{
		background-color: #2874a6;
		color: white;
		padding: 1rem 0;
		text-align: center;
	}
	.navigation nav ul 
	{
		list-style: none;
		padding: 0;
		display: flex;
		justify-content: flex-end;
	}
	.navigation nav ul li 
	{
		margin-left: 20px;
	}
	.navigation nav ul li a
	{
		color: white;
		text-decoration: none;
		font-weight: bold;
	}
	.vision-section 
	{
		display: flex;
		flex-direction: column;
		align-items: center;
		margin: 40px 20px;
	}
	.image-container 
	{
		display: flex;
		justify-content: center;
		margin-bottom: 30px;
	}
	.image-container img 
	{
		width: 200px; 
		height: 300px; 
		border-radius: 10px;
		margin: 0 10px;
	}
	.vision-details 
	{
		display: flex;
		flex-direction: column;
		align-items: center;
		max-width: 600px;
	}
	.vision-item 
	{
		background-color: white;
		border-radius: 10px;
		padding: 20px;
		margin: 10px 0;
		box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
	}
	.vision-item h2 
	{
		color: #4a90e2;
		margin: 0;
	}
	.vision-item h3	
	{
		margin: 5px 0;
	}
	.vision-item p 
	{
		margin-top: 10px;
	}
	footer 
	{
		text-align: center;
		padding: 20px;
		background-color: #dcdcdc;
    	color: white;
	}
	</style>
</head>
<body>
    <header>
        <div class="navigation">
            <nav>
			    <a href="homee.php">Home</a>
				<a href="portfolioo.php">Our Portfolio</a>
		        <a href="teamm.php">Our Team</a>
				<a href="contactt.php">Contact</a>
            </nav>
        </div>
    </header>
    <main>
        <section class="vision-section">
            <h1>Our Vision</h1>
            <div class="image-container">
                <img src="three.jpg" alt="Vision Image 1">
                <img src="four.jpg" alt="Vision Image 2">
            </div>
            <div class="vision-details">
                <div class="vision-item">
                    <h2>01</h2>
                    <h3>Innovative Excellence</h3>
                    <p>To lead the IT industry with innovative, scalable, and customer-centric solutions that empower businesses to thrive in the digital age.</p>
                </div>
                <div class="vision-item">
                    <h2>02</h2>
                    <h3>Driving Innovation</h3>
                    <p>To lead the evolution of blockchain technology by delivering cutting-edge cryptocurrency tools and platforms.</p>
                </div>
                <div class="vision-item">
                    <h2>03</h2>
                    <h3>Empowering the Future</h3>
                    <p>To harness the power of technology to solve real-world challenges, bridge digital divides, and inspire a smarter, more connected world.</p>
                </div>
            </div>
        </section>
    </main>
	<footer>
        <p>&copy; 2023 5 Square Technology Limited</p>
    </footer>
</body>

</html>