<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Portfolio</title>
	<style type="text/css">
	* 
	{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
	body
	{
		font-family: Arial, sans-serif;
		background-color: #f0f4f8;
		color: #333;
	}
	header 
	{
		background-color: #2874a6;
		color: white;
		padding: 1rem 0;
		text-align: center;
	}
	header nav ul 
	{
		list-style: none;
	}
	header nav ul li 
	{
		display: inline;
		margin: 0 15px;
	}
	header nav a 
	{
		color: white;
		text-decoration: none;
	}
	.main
	{
		padding: 20px;
	}
	.portfolio 
	{
		max-width: 800px;
		margin: auto;
		padding: 20px;
		background: white;
		border-radius: 8px;
		box-shadow: 0 0 10px rgba(0,0,0,0.1);
	}
	.portfolio h2 
	{
		text-align: center;
		margin-bottom: 20px;
	}
	.portfolio-images 
	{
		display: flex;
		justify-content: space-between;
		margin-top: 20px;
	}
	.portfolio-images img 
	{
		width: 32%;
		border-radius: 5px;
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
        <div class="logo">
            <h1>L SQUARE TECHNOLOGY LIMITED</h1>
        </div>
        <nav>
            <a href="homee.php">Home</a>
			<a href="visionn.php">Our Vision</a>
		    <a href="teamm.php">Our Team</a>
			<a href="contactt.php">Contact</a>
        </nav>
    </header>
    <main>
        <section class="portfolio">
            <h2>Our Portfolio</h2>
            <p>At 5 Square Technology Limited, we specialize in custom software and web development, creating scalable solutions tailored to business needs. Our expertise extends to mobile app development, cloud solutions for efficient operations, and robust cybersecurity to protect digital assets. Additionally, we leverage AI technologies to deliver innovative and data-driven insights, empowering businesses to thrive in a connected world.</p>
            <div class="portfolio-images">
                <img src="four.jpg" alt="Portfolio Image 1">
                <img src="five.jpg" alt="Portfolio Image 2">
                <img src="six.jpg" alt="Portfolio Image 3">
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 5 Square Technology Limited</p>
    </footer>
</body>
</html>