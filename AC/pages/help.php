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
    <link rel="stylesheet" href="assets/css/help.css">
</head>
<body class="bg-gradient">

    <!-- Preloader-content -->
    <button id="back-to-top" title="Back to Top">
        <img src="assets/images/assets\arrow-up-solid_black.png" alt="Back to Top">
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
            <h1>Help & <span>Support</span></h1>
            <p>Find answers to your questions and get the help you need to make the most of AcadEase.</p>

            <div class="search-container">
                <img src="/assets/images/assets\search_icon.svg" alt="Search Icon" class="search-icon">
                <input type="text" class="search-bar" placeholder="Search for help articles, tutorials, or FAQs...">
            </div>  
        </div>    
    </section>

    <!-- FAQ Section -->
    <div class="container">
        <div class="header">
            <h1>Frequently Asked Questions</h1>
            <p class="subtitle">Quick answers to the most common questions about AcadEase.</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question">How do I book an appointment with a professor?</div>
                <div class="faq-answer">
                    Navigate to your student dashboard, select 'Book Appointment', choose your professor, and pick an available time slot from their calendar.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">Can I reschedule or cancel my appointment?</div>
                <div class="faq-answer">
                    Yes! Go to 'My Appointments' in your dashboard, find the appointment, and click 'Reschedule' or 'Cancel'. You'll receive confirmation notifications.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">How do I set my availability as a professor?</div>
                <div class="faq-answer">
                    In your professor dashboard, click 'Manage Availability', then set your recurring schedule and block off any unavailable times.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">What notifications will I receive?</div>
                <div class="faq-answer">
                    You'll get email and SMS notifications for appointment confirmations, reminders (24hrs and 1hr before), cancellations, and reschedules.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">How do I update my profile information?</div>
                <div class="faq-answer">
                    Click on your profile icon in the top right corner, select 'Profile Settings', and update your information as needed.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">What if I forgot my password?</div>
                <div class="faq-answer">
                    On the login page, click 'Forgot Password', enter your email, and follow the instructions in the reset email we send you.
                </div>
            </div>
        </div>
    </div>
    
    <!-- CTA Section -->
    <section class="cta">
        <h2>Still Need Help?</h2>
        <p>Our support team is here to assist you with any questions or issues.</p>
        <button class="btn-cta"><a href="contact us.html">Contact Support</a></button>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2025 AcadEase. All Rights Reserved.</p>
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
