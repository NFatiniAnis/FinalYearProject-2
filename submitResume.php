<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Resume Builder</h1>
    <form action="submit_resume.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="education">Education:</label><br>
        <textarea id="education" name="education" required></textarea><br>
        <label for="experience">Experience:</label><br>
        <textarea id="experience" name="experience" required></textarea><br>
        <label for="skills">Skills:</label><br>
        <textarea id="skills" name="skills" required></textarea><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
