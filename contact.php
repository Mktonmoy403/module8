<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact</title>
	<!-- Add CSS file here -->
	<link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
	<header>
        <div class="logo">
            <a href="index.html">
                <img src="logo.png" alt="My Personal Blog" />
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>
	<h1>Contact Us</h1>
	<form method="post" action="process-form.php">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" required><br><br>
		
		<label for="email">Email:</label>
		<input type="email" name="email" id="email" required><br><br>
		
		<label for="subject">Subject:</label>
		<input type="text" name="subject" id="subject" required><br><br>
		
		<label for="message">Message:</label>
		<textarea name="message" id="message" required></textarea><br><br>
		
		<input type="submit" value="Submit">
	</form>
	<footer>
        <p>Copyright © 2023</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>