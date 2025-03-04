<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arifin's Profile</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="web.svg" type="image/svg+xml">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-container">
            <div class="navbar-logo">
                <img src="Weblogo.png" alt="Logo" class="logo">
                <a href="#" class="title-logo">My Website</a>
            </div>
            <ul class="navbar-menu">
                <li><a href="#">Home</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#profile">Profile</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="section" id="greetings">
            <h2 class="greeting-text">Let's have your work done</h2>
            <h2 class="greeting-text">Visualize your imagination</h2>
        </div>
        <div class="section" id="skills">
            <h2>3D Skills</h2>
            <div class="skills">
                <div class="skill">
                    <h3>3D Modeling</h3>
                    <p>Description of 3D modeling skill.</p>
                </div>
            </div>
            <div class="projects">
                <h3>Projects</h3>
                <div class="project-list">
                    <div class="project">
                        <h3>Project 1</h3>
                        <p>Description of project 1.</p>
                    </div>
                    <div class="project">
                        <h3>Project 2</h3>
                        <p>Description of project 2.</p>
                    </div>
                    <div class="project">
                        <h3>Project 3</h3>
                        <p>Description of project 3.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <h2>Programming Skills</h2>
            <div class="skills">
                <div class="skill">
                    <h3>Programming</h3>
                    <p>Description of programming skill.</p>
                </div>
            </div>
            <div class="projects">
                <h3>Projects</h3>
                <div class="project-list">
                    <div class="project">
                        <h3>Project 1</h3>
                        <p>Description of project 1.</p>
                    </div>
                    <div class="project">
                        <h3>Project 2</h3>
                        <p>Description of project 2.</p>
                    </div>
                    <div class="project">
                        <h3>Project 3</h3>
                        <p>Description of project 3.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="profile">
            <h2>Profile</h2>
            <div class="profile-info">
                <img src="Arifin.jpg" alt="Profile Picture" class="profile-picture">
                <div class="bio">
                    <p>Hi, I'm Arifin, a passionate web developer with expertise in 3D modeling and programming. I love creating interactive and visually appealing web applications. In my free time, I enjoy exploring new technologies and working on personal projects.</p>
                </div>
            </div>
        </div>
        <div class="section" id="contact">
            <h2>Contact</h2>
            <div class="contact-info">
                <p><a href="https://wa.me/085157732792" target="_blank"><i class="fas fa-phone"></i> WhatsApp: 085157732792</a></p>
                <p><a href="mailto:stdyfiinsz@gmail.com"><i class="fas fa-envelope"></i> Email: stdyfiinsz@gmail.com</a></p>
                <p><a href="https://www.instagram.com/fiinsz/" target="_blank"><i class="fab fa-instagram"></i> Instagram: @fiinsz</a></p>
                <p><a href="https://github.com/Fiinsz" target="_blank"><i class="fab fa-github"></i> GitHub: Fiinsz</a></p>
            </div>
        </div>
        <footer class="footer">
            <p>&copy; 2023 My Portfolio. All rights reserved.</p>
        </footer>
    </div>
    <script>
        document.querySelectorAll('.skill, .project').forEach(item => {
            item.addEventListener('mouseover', () => {
                item.classList.add('hover');
            });
            item.addEventListener('mouseout', () => {
                item.classList.remove('hover');
            });
        });
    </script>
</body>
</html>