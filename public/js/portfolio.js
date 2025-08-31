// Loading Screen
document.addEventListener('DOMContentLoaded', function() {
    const loadingScreen = document.getElementById('loadingScreen');
    const progressBar = document.getElementById('progressBar');
    const loadingPercentage = document.getElementById('loadingPercentage');
    
    if (loadingScreen) {
        let progress = 0;
        const interval = setInterval(() => {
            progress += Math.random() * 15;
            if (progress > 100) progress = 100;
            
            progressBar.style.width = progress + '%';
            loadingPercentage.textContent = Math.round(progress) + '%';
            
            if (progress >= 100) {
                clearInterval(interval);
                setTimeout(() => {
                    loadingScreen.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                }, 500);
            }
        }, 100);
        
        // Hide loading screen after maximum 3 seconds
        setTimeout(() => {
            if (!loadingScreen.classList.contains('hidden')) {
                loadingScreen.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }
        }, 3000);
    }
});

// Theme Toggle
const themeToggle = document.getElementById('themeToggle');
const body = document.body;

if (themeToggle) {
    const themeIcon = themeToggle.querySelector('i');
    
    // Check for saved theme preference
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme) {
        body.classList.add(savedTheme);
        updateThemeIcon();
    }
    
    themeToggle.addEventListener('click', () => {
        body.classList.toggle('dark-theme');
        updateThemeIcon();
        
        // Save theme preference
        if (body.classList.contains('dark-theme')) {
            localStorage.setItem('theme', 'dark-theme');
        } else {
            localStorage.removeItem('theme');
        }
    });
    
    function updateThemeIcon() {
        if (body.classList.contains('dark-theme')) {
            themeIcon.className = 'fas fa-sun';
        } else {
            themeIcon.className = 'fas fa-moon';
        }
    }
}


// Mobile Navigation Toggle
const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.nav-menu');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navMenu.classList.toggle('active');
});

// Close mobile menu when clicking on a link
document.querySelectorAll('.nav-link').forEach(n => n.addEventListener('click', () => {
    hamburger.classList.remove('active');
    navMenu.classList.remove('active');
}));

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Navbar background on scroll
window.addEventListener('scroll', () => {
    const navbar = document.querySelector('.navbar');
    const isDarkTheme = document.body.classList.contains('dark-theme');
    
    if (window.scrollY > 100) {
        if (isDarkTheme) {
            navbar.style.background = 'linear-gradient(135deg, rgba(0, 0, 0, 0.95), rgba(26, 26, 46, 0.95))';
        } else {
            navbar.style.background = 'linear-gradient(135deg, rgba(26, 26, 46, 0.98), rgba(22, 33, 62, 0.98))';
        }
        navbar.style.boxShadow = '0 4px 25px rgba(0, 0, 0, 0.2)';
    } else {
        if (isDarkTheme) {
            navbar.style.background = 'linear-gradient(135deg, rgba(0, 0, 0, 0.9), rgba(26, 26, 46, 0.9))';
        } else {
            navbar.style.background = 'linear-gradient(135deg, rgba(26, 26, 46, 0.95), rgba(22, 33, 62, 0.95))';
        }
        navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.1)';
    }
});

// Active navigation link highlighting
window.addEventListener('scroll', () => {
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.nav-link');
    
    let current = '';
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (scrollY >= (sectionTop - 200)) {
            current = section.getAttribute('id');
        }
    });

    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${current}`) {
            link.classList.add('active');
        }
    });
});

// Intersection Observer for animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe elements for animation
document.addEventListener('DOMContentLoaded', () => {
    const animateElements = document.querySelectorAll('.project-card, .skill-category, .stat');
    
    animateElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
});

// Contact form handling - Updated for Laravel
const contactForm = document.querySelector('.contact-form');
if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        // Allow Laravel to handle the form submission
        // Remove e.preventDefault() to let the form submit normally
        
        // Get form data for validation
        const formData = new FormData(this);
        const name = formData.get('name');
        const email = formData.get('email');
        const subject = formData.get('subject');
        const message = formData.get('message');
        
        // Simple validation
        if (!name || !email || !subject || !message) {
            e.preventDefault();
            showNotification('Please fill in all fields', 'error');
            return;
        }
        
        if (!isValidEmail(email)) {
            e.preventDefault();
            showNotification('Please enter a valid email address', 'error');
            return;
        }
        
        // Show loading message
        showNotification('Sending message...', 'info');
    });
}

// Email validation
function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// Notification system
function showNotification(message, type = 'info') {
    // Remove existing notifications
    const existing = document.querySelector('.notification');
    if (existing) {
        existing.remove();
    }
    
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.textContent = message;
    
    // Add styles
    notification.style.cssText = `
        position: fixed;
        top: 100px;
        right: 20px;
        background: ${type === 'success' ? '#10b981' : type === 'error' ? '#ef4444' : '#3b82f6'};
        color: white;
        padding: 1rem 1.5rem;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        z-index: 1001;
        transform: translateX(100%);
        transition: transform 0.3s ease;
        max-width: 300px;
        font-weight: 500;
    `;
    
    document.body.appendChild(notification);
    
    // Animate in
    setTimeout(() => {
        notification.style.transform = 'translateX(0)';
    }, 100);
    
    // Remove after 5 seconds
    setTimeout(() => {
        notification.style.transform = 'translateX(100%)';
        setTimeout(() => {
            notification.remove();
        }, 300);
    }, 5000);
}

// Typing animation for hero title
function typeWriter(element, text, speed = 100) {
    let i = 0;
    element.innerHTML = '';
    
    function type() {
        if (i < text.length) {
            element.innerHTML += text.charAt(i);
            i++;
            setTimeout(type, speed);
        }
    }
    
    type();
}

// Initialize typing animation on page load
document.addEventListener('DOMContentLoaded', () => {
    const heroTitle = document.querySelector('.hero-title');
    if (heroTitle) {
        const originalText = heroTitle.textContent;
        setTimeout(() => {
            typeWriter(heroTitle, originalText, 50);
        }, 500);
    }
});

// Parallax effect for hero section
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const hero = document.querySelector('.hero');
    const rate = scrolled * -0.5;
    
    if (hero) {
        hero.style.transform = `translateY(${rate}px)`;
    }
});

// Skills animation on scroll
const skillItems = document.querySelectorAll('.skill-item');
const skillObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
            setTimeout(() => {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'scale(1)';
            }, index * 100);
        }
    });
}, { threshold: 0.5 });

document.addEventListener('DOMContentLoaded', () => {
    skillItems.forEach(item => {
        item.style.opacity = '0';
        item.style.transform = 'scale(0.8)';
        item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        skillObserver.observe(item);
    });
});

// Project cards hover effect enhancement
document.querySelectorAll('.project-card').forEach(card => {
    card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-15px) scale(1.02)';
    });
    
    card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0) scale(1)';
    });
});

// Add loading animation
window.addEventListener('load', () => {
    document.body.classList.add('loaded');
});

// Add CSS for loading animation
const loadingStyles = `
    body:not(.loaded) {
        overflow: hidden;
    }
    
    body:not(.loaded)::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        z-index: 9999;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: fadeOut 0.5s ease 1s forwards;
    }
    
    @keyframes fadeOut {
        to {
            opacity: 0;
            visibility: hidden;
        }
    }
`;

// Inject loading styles
const styleSheet = document.createElement('style');
styleSheet.textContent = loadingStyles;
document.head.appendChild(styleSheet);
