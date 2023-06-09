
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Page</title>
    <link rel="stylesheet" href="dashboard.css"> <!-- Include your custom CSS file -->
    <style>
        /* Add your custom styles here */

        /* Responsive styles */
        @media (max-width: 768px) {

            /* Adjust styles for smaller screens */
            .container {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            aside {
                order: 2;
                margin-top: 20px;
                width: 100%;
            }

            .content {
                order: 1;
                width: 100%;
            }

            .course-list {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }
        }

        /* Custom styles */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        header {
            background-color: #06BBCC !important;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
        }

        main {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        aside {
            flex: 0 0 25%;
            background-color: #fff;
            border-radius: 6px;
            padding: 20px;
        }

        .profile {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .profile h2 {
            margin: 0;
            font-size: 18px;
            font-weight: bold;
        }

        .menu {
            margin-top: 20px;
        }

        .menu a {
            display: block;
            color: #333;
            text-decoration: none;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }

        .menu a:last-child {
            border-bottom: none;
        }

        .content {
            flex: 0 0 75%;
            background-color: #fff;
            border-radius: 6px;
            padding: 20px;
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .course-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 20px;
        }

        .course {
            background-color: #f5f5f5;
            border-radius: 6px;
            padding: 20px;
            text-align: center;
            transition: transform 0.2s;
            cursor: pointer;
        }

        .course img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 6px;
            margin-bottom: 10px;
        }

        .course h2 {
            font-size: 18px;
            font-weight: bold;
            margin: 10px 0;
        }

        .course p {
            margin: 0;
        }

        .course:hover {
            transform: scale(1.05);
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <h1>Course Page</h1>
            <a href="logout.php" class="logout">Logout</a>
        </div>
    </header>
    <main>
        <aside>
            <div class="profile">
                <img src="img/nitta.jpg" alt="Profile Picture">
                <h2>Nitto</h2>
            </div>
            <div class="menu">
                <a href="dashboard.php" class="active">Dashboard</a>
                <a href="#">My Courses</a>
            </div>
        </aside>
        <div class="content">
            <h1>Welcome to Your Course</h1>
            <div class="course-list">
                <div class="course">
                    <img src="img/web.jpeg" alt="Course 1">
                    <h2>Course 1</h2>
                    <p>Description of Course 1</p>
                </div>
                <div class="course">
                    <img src="img/web.jpeg" alt="Course 2">
                    <h2>Course 2</h2>
                    <p>Description of Course 2</p>
                </div>
                <div class="course">
                    <img src="img/web.jpeg" alt="Course 3">
                    <h2>Course 3</h2>
                    <p>Description of Course 3</p>
                </div>
                <div class="course">
                    <img src="img/web.jpeg" alt="Course 4">
                    <h2>Course 4</h2>
                    <p>Description of Course 4</p>
                </div>
            </div>
            <div id="feedback-form" style="display: none;">
                <h2>Leave Feedback</h2>
                <form id="feedback" action="submit_feedback.php" method="post">
                    <textarea name="feedback-text" placeholder="Enter your feedback here" rows="4" required></textarea>
                    <button type="submit">Submit Feedback</button>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2023 Ecode Learning. All rights reserved.</p>
    </footer>

    <script>
        // Interactive features
        const courseElements = document.querySelectorAll('.course');
        const feedbackForm = document.getElementById('feedback-form');

        courseElements.forEach(course => {
            course.addEventListener('click', () => {
                feedbackForm.style.display = 'block';
            });
        });
    </script>
</body>

</html>