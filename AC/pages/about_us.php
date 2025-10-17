<!-- TODO: include config/db_connect.php when ready -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Connect with professors through our intelligent booking system. Schedule, consultations, manage appointments, and never miss an important meeting.">
    
    <title>AcadEase</title>
    
    <!-- Favicon -->
    <link href="assets\acadease logo.svg" rel="icon">
    
    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/css/about_us.css">
</head>
<body class="bg-gradient">

    <!-- Preloader-content -->
    <button id="back-to-top" title="Back to Top">
        <img src="/assets/images/arrow-up-solid_black.png" alt="Back to Top">
    </button>

    <!-- Navbar -->
    <header class="navbar">
        <div class="logo">
            <a href="index.html"><img src="/assets/images/assets\acadease_logo.svg" alt="AcadEase Logo"></a>
            <a href="index.html" class="logo-name">AcadEase</a>
        </div>

        <nav class="nav-links">
            <a href="about us.html">About Us</a>
            <a href="help.html">Help</a>
            <button class="dark-mode-toggle" id="darkModeToggle" aria-label="Toggle Dark Mode"><img src="/assets/images/assets\dark-mode-toggle.svg" alt="Dark Mode Toggle" class="theme-icon"></button>
            <a href="booking.html" class="get-started">Get Started</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>About<span> AcadEase</span></h1>
            <p>We aim to enhance academic interactions, foster better communication, and support educational success through technology.</p>
        </div>    
    </section>

    <!-- Mission Section -->
    <section class="mission-section">
        <h1 class="mission-title">Our Values</h1>
        <p class="mission-description">
            These core principles guide everything we do and every decision we make.</p>

        <div class="features-container">
            <div class="feature">
                <div class="feature-icon">
                    <img src="/assets/images/assets\our_mission.svg" alt="Our Mission Icon">
                </div>
                <h2 class="feature-title">Mission</h2>
                <p class="feature-description">To bridge the gap between students and professors by providing an intuitive, efficient platform for academic consultations and mentorship.</p>
            </div>

            <div class="feature">
                <div class="feature-icon">
                    <img src="/assets/images/assets\community_support.svg" alt="Community Support Icon">
                </div>
                <h2 class="feature-title">Community Support</h2>
                <p class="feature-description">We believe in fostering meaningful connections within academic communities, making education more accessible and collaborative.</p>
            </div>

            <div class="feature">
                <div class="feature-icon">
                    <img src="/assets/images/assets\student_success.svg" alt="Student Success Icon">
                </div>
                <h2 class="feature-title">Student Success</h2>
                <p class="feature-description">Every feature we build is designed with student success in mind, ensuring they get the support they need when they need it.</p>
            </div>
        </div>
    </section>
    
    <!-- Team Section -->
    <section class="team-section">
        <h1 class="team-heading">Our Team</h1>
        <p class="team-subheading">Passionate individuals dedicated to transforming academic experiences.</p>
        <div class="team-grid">

            <!-- Team Member 1 -->
            <div class="team-member">
                <div class="avatar-container">
                    <img src="/assets/images/assets\halog.jpg" alt="Jillyanah Halog" class="avatar">
                </div>
                <h3 class="member-name">Jillyanah Halog</h3>
                <p class="member-title">Leader & Project Manager</p>
            </div>
            
            <!-- Team Member 2 -->
            <div class="team-member">
                <div class="avatar-container">
                    <img src="/assets/images/assets\aficial.jpg" alt="Justin Aficial" class="avatar">
                </div>
                <h3 class="member-name">Justin Aficial</h3>
                <p class="member-title">Backend Engineer</p>
            </div>
            
            <!-- Team Member 3 -->
            <div class="team-member">
                <div class="avatar-container">
                    <img src="/assets/images/assets\bacani.png" alt="Jerwen Bacani" class="avatar">
                </div>
                <h3 class="member-name">Jerwen Bacani</h3>
                <p class="member-title">QA Engineer</p>
            </div>

            <!-- Team Member 4 -->
            <div class="team-member">
                <div class="avatar-container">
                    <img src="/assets/images/assets\garcia.jpg" alt="Dwyane Garcia" class="avatar">
                </div>
                <h3 class="member-name">Dwyane Garcia</h3>
                <p class="member-title">Frontend Engineer</p>
            </div>
            
            <!-- Team Member 5 -->
            <div class="team-member">
                <div class="avatar-container">
                    <img src="/assets/images/assets\capua.jpg" alt="Keith Capua" class="avatar">
                </div>
                <h3 class="member-name">Keith Capua</h3>
                <p class="member-title">UI/UX Designer</p>
            </div>

            <!-- Team Member 6 -->
            <div class="team-member">
                <div class="avatar-container">
                    <img src="assets\dela rosa.JPG" alt="Kendrick Dela Rosa" class="avatar">
                </div>
                <h3 class="member-name">Kendrick Dela Rosa</h3>
                <p class="member-title">Database Manager</p>
            </div>
        </div>
    </section>

    <!-- Join Our Mission Section -->
    <section class="join-section">
        <div class="join-container">
                <h2 class="join-title">Join Our Community</h2>
                <p class="join-description">Experience the future of academic consultations with AcadEase.</p>
                <div class="join-buttons">
                <a href="contact us.html" class="btn btn-primary">Contact Us</a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2025 AcadEase. All rights reserved.</p>
    </footer>

    <!-- Dark Mode Toggle Script -->
    <script>
        const darkModeToggle = document.getElementById('darkModeToggle');
        const themeIcon = document.querySelector('.theme-icon');
        const body = document.body;
        
        // Check for saved dark mode preference
        if (localStorage.getItem('darkMode') === 'enabled') {
            body.classList.add('dark-mode');
            themeIcon.src='/assets/images/light-mode-toggle.svg'; // Change to light mode icon in dark mode
        }
        
        darkModeToggle.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
            
            // Switch icon based on mode
            if (body.classList.contains('dark-mode')) {
                localStorage.setItem('darkMode', 'enabled');
                themeIcon.src='/assets/images/light-mode-toggle.svg';
            } else {
                localStorage.setItem('darkMode', 'disabled');
                themeIcon.src='/assets/images/dark-mode-toggle.svg';
            }
        });

        // Show the "Back to Top" button when scrolling
        const backToTopButton = document.getElementById("back-to-top");

        window.addEventListener("scroll", function () {
                const backToTop = document.getElementById("back-to-top");
                if (window.scrollY > 200) {
                    backToTop.style.display = "flex";
                } else {
                    backToTop.style.display = "none";
            }
        });

        // Scroll to the top when the button is clicked
        document.getElementById("back-to-top").addEventListener("click", function () {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    </script>
</body>
</html>
