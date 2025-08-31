<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Name - Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <a href="#home">Portfolio</a>
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#home" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#skills" class="nav-link">Skills</a>
                </li>
                <li class="nav-item">
                    <a href="#projects" class="nav-link">Projects</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
            </ul>
            <div class="nav-controls">
                <button class="theme-toggle" id="themeToggle">
                    <i class="fas fa-moon"></i>
                </button>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <h1 class="hero-title">
                    Hi, I'm <span class="highlight">Mohammad Khaleel Al Ahmad</span>
                </h1>
                <p class="hero-subtitle">Full Stack Developer</p>
                <p class="hero-description">
                    A personal portfolio website designed and developed entirely using full-stack technologies, 
                    aiming to showcase my practical skills in developing interactive front-ends and seamless user experiences,
                    as well as managing data and building powerful APIs in the back-end. 
                    The website includes sections dedicated to introducing myself, 
                    showcasing my previous projects, and ways to communicate, 
                    with a responsive design that supports all devices.
                </p>
                <div class="hero-buttons">
                    <a href="#projects" class="btn btn-primary">View My Work</a>
                    <a href="#contact" class="btn btn-secondary">Get In Touch</a>
                </div>
            </div>
            <div class="hero-image">
                <div class="hero-avatar">
                    <img src="{{ asset('images/user2.jpg') }}" alt="Mohammad Khaleel Al Ahmad" class="profile-photo">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            <div class="about-content">
                <div class="about-text">
                    <p>
                        I'm a passionate developer with 2+ years of experience creating web applications.
                        I love turning complex problems into simple, beautiful designs.
                    </p>
                    <p>
                        When I'm not coding, you can find me exploring new technologies, contributing to 
                        open-source projects, or sharing my knowledge through blog posts and tutorials.
                    </p>
                    <div class="about-stats">
                        <div class="stat">
                            <h3>10+</h3>
                            <p>Projects Completed</p>
                        </div>
                        <div class="stat">
                            <h3>2+</h3>
                            <p>Years Experience</p>
                        </div>
                        <div class="stat">
                            <h3>20+</h3>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="about-image">
                    <div class="about-avatar">
                        <img src="{{ asset('images/user2.jpg') }}" alt="Mohammad Khaleel Al Ahmad - About" class="about-photo">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills">
        <div class="container">
            <h2 class="section-title">Skills & Technologies</h2>
            <div class="skills-grid">
                <div class="skill-category">
                    <h3>Frontend</h3>
                    <div class="skill-items">
                        <span class="skill-item">HTML5</span>
                        <span class="skill-item">CSS3</span>
                        <span class="skill-item">JavaScript</span>
                        <span class="skill-item">React</span>
                    </div>
                </div>
                <div class="skill-category">
                    <h3>Backend</h3>
                    <div class="skill-items">
                        <span class="skill-item">PHP</span>
                        <span class="skill-item">Laravel</span>
                        <span class="skill-item">MySQL</span>
                        <span class="skill-item">PostgreSQL</span>
                    </div>
                </div>
                <div class="skill-category">
                    <h3>Tools & Others</h3>
                    <div class="skill-items">
                        <span class="skill-item">Git</span>
                        <span class="skill-item">Docker</span>
                        <span class="skill-item">Problem Solving</span>
                        <span class="skill-item">Team Work</span>
                        <span class="skill-item">Use AI Tools</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <div class="container">
            <h2 class="section-title">Featured Projects</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-image">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="project-content">
                        <h3>E-Commerce Platform</h3>
                        <p>A full-stack e-commerce solution with React frontend and Node.js backend, featuring user authentication, payment integration, and admin dashboard.</p>
                        <div class="project-tech">
                            <span>React</span>
                            <span>Node.js</span>
                            <span>MongoDB</span>
                            <span>Stripe</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="project-link">
                                <i class="fas fa-external-link-alt"></i> Live Demo
                            </a>
                            <a href="#" class="project-link">
                                <i class="fab fa-github"></i> GitHub
                            </a>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-image">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <div class="project-content">
                        <h3>Task Management App</h3>
                        <p>A collaborative task management application with real-time updates, drag-and-drop functionality, and team collaboration features.</p>
                        <div class="project-tech">
                            <span>Vue.js</span>
                            <span>Firebase</span>
                            <span>Vuex</span>
                            <span>Socket.io</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="project-link">
                                <i class="fas fa-external-link-alt"></i> Live Demo
                            </a>
                            <a href="#" class="project-link">
                                <i class="fab fa-github"></i> GitHub
                            </a>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-image">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="project-content">
                        <h3>Analytics Dashboard</h3>
                        <p>A comprehensive analytics dashboard with interactive charts, real-time data visualization, and customizable reporting features.</p>
                        <div class="project-tech">
                            <span>React</span>
                            <span>D3.js</span>
                            <span>Python</span>
                            <span>PostgreSQL</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="project-link">
                                <i class="fas fa-external-link-alt"></i> Live Demo
                            </a>
                            <a href="#" class="project-link">
                                <i class="fab fa-github"></i> GitHub
                            </a>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-image">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="project-content">
                        <h3>Mobile Weather App</h3>
                        <p>A responsive weather application with location-based forecasts, interactive maps, and personalized weather alerts.</p>
                        <div class="project-tech">
                            <span>React Native</span>
                            <span>Redux</span>
                            <span>Weather API</span>
                            <span>Maps API</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="project-link">
                                <i class="fas fa-external-link-alt"></i> Live Demo
                            </a>
                            <a href="#" class="project-link">
                                <i class="fab fa-github"></i> GitHub
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title">Get In Touch</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Let's work together!</h3>
                    <p>I'm always interested in new opportunities and exciting projects. Feel free to reach out if you'd like to collaborate or just say hello!</p>
                    <div class="contact-details">
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <span>Mo7ammaddev@gmail.com</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <span>+962 78 178 1283</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Jordan, Zarqa</span>
                        </div>
                    </div>
                    <div class="social-links">
                        <a href="https://wa.me/962781781283" class="social-link" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/mo7ammed-al-a7med/" class="social-link" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="https://github.com/M7D-CIS-Programmer" class="social-link" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-github"></i>
                        </a>
                        {{-- <a href="#" class="social-link" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-dribbble"></i>
                        </a> --}}
                    </div>
                </div>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                
                @if(session('error'))
                    <div class="alert alert-error">
                        {{ session('error') }}
                    </div>
                @endif
                
                @if($errors->any())
                    <div class="alert alert-error">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <form class="contact-form" action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="subject" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea id="message" name="message" placeholder="Your Message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Your Name. All rights reserved.</p>
        </div>
    </footer>

    <!-- Loading Screen -->
    <div class="loading-screen" id="loadingScreen">
        <div class="loading-content">
            <div class="loading-logo">
                <span class="loading-text">Portfolio</span>
            </div>
            <div class="loading-progress">
                <div class="progress-bar" id="progressBar"></div>
            </div>
            <div class="loading-percentage" id="loadingPercentage">0%</div>
        </div>
    </div>


    <script src="{{ asset('js/portfolio.js') }}"></script>
</body>
</html>
