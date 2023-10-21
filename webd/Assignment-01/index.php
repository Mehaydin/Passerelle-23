<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Developer Portfolio</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Mehmet Aydin</h1>
        <p>Web Developer</p>
    </header>

    <nav>
        <ul>
            <li><a href="#about">About Me</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <div id="about">
        <h2>About Me</h2>
        <img src="m.aydin.jpg" alt="Mehmet Aydin" />

        <p><strong>Hello! I am looking for an internship as an <em>IT developer</em>.</strong></p>

        <div class="container">
            <h1>Personal Information</h1>
            <table>
                <tr>
                    <th>Name</th>
                    <td>Mehmet Aydin</td>
                </tr>
                <tr>
                    <th>Date of Birth</th>
                    <td>December 11, 1989</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><a href="mailto:aydinmehmet.9002@gmail.com">aydinmehmet.9002@gmail.com</a></td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>+41 764567890</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>3065, Bolligen</td>
                </tr>
            </table>
        </div>
    </div>

    <div id="projects">
        <h2>Projects</h2>
        <ul>
            <li><a href="https://blockly-demo.appspot.com/static/demos/code/index.html?lang=en#y63yq9">Aufgabe</a></li>
            <li><a href="https://www.bfh.ch">BFH</a></li>
        </ul>
    </div>

    <div id="contact">
        <h2>Contact</h2>
        <p>Feel free to reach out to me at <a href="mailto:aydinmehmet.9002@gmail.com">aydinmehmet.9002@gmail.com</a>.</p>
    </div>

    <!-- PHP Code for Comment Form -->
    <div id="comments">
        <h2>Comments</h2>
        <?php
        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $comment = $_POST["comment"];
            $timestamp = date("Y-m-d H:i:s");

            // Save the comment to a file or database (you can implement this)
            // Example: Save to a text file
            $commentData = "Name: $name\nComment: $comment\nTimestamp: $timestamp\n\n";
            file_put_contents("comments.txt", $commentData, FILE_APPEND);
        }
        ?>

        <!-- Comment Form -->
        <form method="post" action="#comments">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="comment">Comment:</label>
            <textarea id="comment" name="comment" required></textarea><br>

            <input type="submit" value="Submit">
        </form>

        <!-- Display Comments -->
        <div class="comment-list">
            <?php
            // Display comments from the file (you can implement this)
            // Example: Read comments from a text file
            if (file_exists("comments.txt")) {
                $comments = file_get_contents("comments.txt");
                echo nl2br($comments);
            }
            ?>
        </div>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Mehmet Aydin. All rights reserved.</p>
    </footer>
</body>
</html>
