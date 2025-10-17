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
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body class="bg-gradient">
    <!-- Preloader-content -->
    <button id="back-to-top" title="Back to Top">
        <img src="assets/images/arrow-up-solid_black.png" alt="Back to Top">
    </button>

    <!-- Navbar -->
    <header class="navbar">
        <div class="logo">
            <a href="index.php"><img src="assets/images/acadease_logo.svg" alt="AcadEase Logo"></a>
            <a href="index.php" class="logo-name">AcadEase</a>
        </div>

        <nav class="nav-links">
            <a href="about us.html">About Us</a>
            <a href="help.html">Help</a>
            <button class="dark-mode-toggle" id="darkModeToggle" aria-label="Toggle Dark Mode"><img src="assets/images/assets\dark-mode-toggle.svg" alt="Dark Mode Toggle" class="theme-icon"></button>
            <a href="pages/dashboard/studentpanel_dashb.php" class="get-started">Get Started</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Streamline Your</h1>
            <h2>Academic Consultations</h2>
            <p>Connect students with professors through our intelligent booking system. 
            Schedule consultations, manage appointments, and never miss an important meeting.</p>
            
            <div class="hero-buttons">
                <a href="pages/dashboard/studentpanel_dashb.php" class="btn-primary">Start Booking Now</a>
                <a href="about us.html" class="btn-outline">Learn More</a>
            </div>
        </div>    
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="features-header">
            <h1 class="features-title">Everything You Need for Academic Success</h1>
            <p class="features-description">Designed specifically for the CITE department with powerful features to streamline academic consultations.</p>
        
            <div class="feature-cards">
                <div class="feature">
                    <div class="feature-icon">
                        <img src="assets/images/easy_scheduling.svg" alt="Schedule Icon">
                        <h3 class="feature-title">Easy Scheduling</h3>
                        <p class="feature-description">Book appointments with professors based on their real-time availability.</p>
                    </div>
                </div>
                
                <div class="feature">
                    <div class="feature-icon">
                        <img src="assets/images/smart_reminders.svg" alt="Calendar Icon">
                        <h3 class="feature-title">Smart Reminders</h3>
                        <p class="feature-description">Get automated email and SMS notifications for upcoming consultations.</p>
                    </div>
                </div>

                <div class="feature">
                    <div class="feature-icon">
                        <img src="assets/images/role-based.svg" alt="Access Icon">
                        <h3 class="feature-title">Role-Based Access</h3>
                        <p class="feature-description">Separate portals for students, professors, and administrators.</p>
                    </div>
                </div>

                <div class="feature">
                    <div class="feature-icon">
                        <img src="assets/images/consultation_management.svg" alt="Management Icon">
                        <h3>Consultation Management</h3>
                        <p>View, reschedule, or cancel appointments with ease.</p>
                    </div>      
                </div>
            </div>
        </div>    
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <h2>Ready to Transform Your Academic Experience?</h2>
        <p>Join thousands of students and professors already using AcadEase to streamline their consultations.</p>
        <button class="btn-cta"><a href="sign in.html">Get Started</a></button>
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
            themeIcon.src='assets/images/light-mode-toggle.svg'; // Change to light mode icon in dark mode
        }
        
        darkModeToggle.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
            
            // Switch icon based on mode
            if (body.classList.contains('dark-mode')) {
                localStorage.setItem('darkMode', 'enabled');
                themeIcon.src='assets/images/light-mode-toggle.svg';
            } else {
                localStorage.setItem('darkMode', 'disabled');
                themeIcon.src='assets/images/dark-mode-toggle.svg';
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
