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
    <link rel="stylesheet" href="assets/css/contact_us.css">
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
            <h1>Contact <span>Us</span></h1>
            <p>Have questions or need support? We're here to help you make the most of AcadEase.</p>
        </div>    
    </section>

    <!-- Contact Section -->
    <div class="contact-container">
        <!-- Send Message Section -->
        <div class="message-section">
            <h2>Send us a Message</h2>
            <p class="subtitle">Fill out the form below and we'll get back to you within 24 hours.</p>

            <form>
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" placeholder="Your full name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="your.email@example.com">
                    </div>
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" placeholder="What's this about?">
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" placeholder="Tell us more about your question or concern..."></textarea>
                </div>

                <button type="submit" class="send-button">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                    </svg>
                    Send Message
                </button>
            </form>
        </div>

        <!-- Get in Touch Section -->
        <div class="touch-section">
            <div class="touch-header">
                <h2>Get in Touch</h2>
                <p>We're committed to providing excellent support to our users. Choose the method that works best for you.</p>
            </div>

            <div class="contact-cards">
                <!-- Email Support Card -->
                <div class="contact-card">
                    <div class="contact-icon email">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="contact-info">
                        <h3>Email Support</h3>
                        <p class="primary-text">support@acadease.com</p>
                        <p>Response within 24 hours</p>
                    </div>
                </div>

                <!-- Phone Support Card -->
                <div class="contact-card">
                    <div class="contact-icon phone">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <div class="contact-info">
                        <h3>Phone Support</h3>
                        <p class="primary-text">+63 5285 0235</p>
                        <p>Mon-Fri, 9AM-6PM EST</p>
                    </div>
                </div>

                <!-- Office Address Card -->
                <div class="contact-card">
                    <div class="contact-icon address">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div class="contact-info">
                        <h3>Office Address</h3>
                        <p class="primary-text">Arellano Street, Dagupan City, 2400, Pangasinan</p>
                        <p>PTC - CITE Faculty Department</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

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