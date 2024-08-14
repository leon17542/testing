<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="styles.css">
    <?php include_once 'header.php' ?>
</head>
<body>
    <header>
        <h1>My Portfolio</h1>
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="about">
        <h2>About Me</h2>
        <p>
            <?php
            $aboutText = "Hello! I'm a web developer with a passion for creating beautiful and functional websites.";
            echo $aboutText;
            ?>
        </p>
    </section>

    <section id="projects">
        <h2>My Projects</h2>
        <div class="projects">
            <?php
            $projects = [
                ["title" => "Project One", "description" => "Description for project one."],
                ["title" => "Project Two", "description" => "Description for project two."],
                ["title" => "Project Three", "description" => "Description for project three."]
            ];

            foreach ($projects as $project) {
                echo "<div class='project-item'>";
                echo "<h3>" . $project["title"] . "</h3>";
                echo "<p>" . $project["description"] . "</p>";
                echo "</div>";
            }
            ?>
        </div>
    </section>

    <section id="contact">
        <h2>Contact Me</h2>
        <form action="contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Send</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 My Portfolio</p>
    </footer>
</body>
</html>
