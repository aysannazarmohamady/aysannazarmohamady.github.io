<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aysan Nazarmohammadi | Data Scientist & AI Specialist</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #7c3aed;
            --primary-dark: #6d28d9;
            --primary-light: #a78bfa;
            --secondary: #ec4899;
            --accent: #06b6d4;
            --bg-primary: #ffffff;
            --bg-secondary: #f8fafc;
            --text-primary: #1e293b;
            --text-secondary: #64748b;
            --text-light: #94a3b8;
            --border: #e2e8f0;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            line-height: 1.6;
            color: var(--text-primary);
            background-color: var(--bg-secondary);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        /* Header */
        header {
            background: var(--bg-primary);
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: var(--shadow-sm);
            border-bottom: 1px solid var(--border);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }

        .logo {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--primary);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .logo-icon {
            width: 36px;
            height: 36px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            font-size: 1rem;
        }

        .logo-text {
            display: none;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 0.5rem;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text-secondary);
            font-weight: 500;
            font-size: 0.9rem;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            transition: all 0.2s;
        }

        .nav-links a:hover {
            color: var(--primary);
            background: rgba(124, 58, 237, 0.1);
        }

        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--primary);
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 4rem 0;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g fill="%23ffffff" fill-opacity="0.05"><circle cx="30" cy="30" r="2"/></g></svg>');
            opacity: 0.5;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            gap: 3rem;
            max-width: 1000px;
            margin: 0 auto;
        }

        .hero-avatar {
            flex-shrink: 0;
        }

        .avatar-img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            border: 5px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
            object-fit: cover;
        }

        .hero-text {
            flex: 1;
            text-align: left;
        }

        .hero-title {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            letter-spacing: -0.02em;
        }

        .hero-subtitle {
            font-size: 1.5rem;
            font-weight: 400;
            margin-bottom: 1rem;
            opacity: 0.95;
        }

        .hero-description {
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto 2rem;
            opacity: 0.9;
            line-height: 1.7;
        }

        .hero-cta {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background: white;
            color: var(--primary);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        /* Contact Bar */
        .contact-bar {
            background: var(--bg-primary);
            padding: 1.5rem 0;
            border-bottom: 1px solid var(--border);
        }

        .contact-items {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            flex-wrap: wrap;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
            color: var(--text-secondary);
            font-size: 0.9rem;
            transition: all 0.2s;
        }

        .contact-item:hover {
            color: var(--primary);
        }

        .contact-item i {
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--bg-secondary);
            border-radius: 6px;
            color: var(--primary);
        }

        .divider {
            flex: 1;
            height: 1px;
            background: linear-gradient(to right, var(--border), transparent);
        }

        .contact-title {
            font-weight: 600;
            color: var(--text-primary);
        }

        /* Sections */
        .section {
            padding: 4rem 0;
        }

        .section-header {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 2.5rem;
            color: var(--text-primary);
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .section-header::after {
            content: '';
            flex: 1;
            height: 2px;
            background: linear-gradient(to right, var(--primary), transparent);
        }

        /* Stats */
        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
        }

        .stat-card {
            background: var(--bg-primary);
            padding: 2rem;
            border-radius: 12px;
            text-align: center;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border);
            transition: all 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            display: block;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: var(--text-secondary);
            font-weight: 500;
            font-size: 0.9rem;
        }

        /* Skills Grid */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            margin-top: 1rem;
        }

        .skill-card {
            background: var(--bg-primary);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border);
            transition: all 0.3s;
            min-height: 200px;
            display: flex;
            flex-direction: column;
        }

        .skill-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
            border-color: var(--primary-light);
        }

        .skill-icon {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            flex-shrink: 0;
        }

        .skill-card h3 {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            color: var(--text-primary);
        }

        .skill-card p {
            color: var(--text-secondary);
            font-size: 0.9rem;
            line-height: 1.6;
            flex-grow: 1;
        }

        /* Projects Grid */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
            gap: 1.5rem;
        }

        .project-card {
            background: var(--bg-primary);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border);
            transition: all 0.3s;
        }

        .project-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
        }

        .project-header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 1.5rem;
        }

        .project-header h3 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .project-body {
            padding: 1.5rem;
        }

        .project-body p {
            color: var(--text-secondary);
            margin-bottom: 1rem;
            font-size: 0.9rem;
            line-height: 1.6;
        }

        .project-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .tag {
            background: var(--bg-secondary);
            color: var(--primary);
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
            border: 1px solid var(--border);
        }

        /* Experience Timeline */
        .timeline {
            position: relative;
            padding-left: 2rem;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, var(--primary), var(--secondary));
        }

        .timeline-item {
            position: relative;
            padding-bottom: 2rem;
            margin-left: 1rem;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -2.5rem;
            top: 0.5rem;
            width: 12px;
            height: 12px;
            background: var(--primary);
            border: 3px solid var(--bg-primary);
            border-radius: 50%;
            box-shadow: 0 0 0 3px var(--border);
        }

        .timeline-content {
            background: var(--bg-primary);
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border);
        }

        .timeline-content h3 {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
        }

        .timeline-content h4 {
            font-size: 0.9rem;
            color: var(--primary);
            font-weight: 500;
            margin-bottom: 0.75rem;
        }

        .timeline-content p {
            color: var(--text-secondary);
            font-size: 0.9rem;
            line-height: 1.6;
        }

        /* Chatbot Section */
        .chatbot-section {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
        }

        .chatbot-container {
            max-width: 700px;
            margin: 0 auto;
        }

        .chatbot-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            padding: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .chat-header {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .chat-header h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .chat-messages {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            padding: 1rem;
            margin-bottom: 1rem;
            min-height: 250px;
            max-height: 400px;
            overflow-y: auto;
        }

        .message {
            margin-bottom: 1rem;
            padding: 0.75rem 1rem;
            border-radius: 12px;
            max-width: 85%;
            font-size: 0.9rem;
            line-height: 1.5;
        }

        .message.user {
            background: rgba(255, 255, 255, 0.2);
            margin-left: auto;
            text-align: right;
        }

        .message.bot {
            background: rgba(255, 255, 255, 0.15);
            margin-right: auto;
        }

        .message strong {
            display: block;
            margin-bottom: 0.25rem;
            opacity: 0.8;
            font-size: 0.85rem;
        }

        .chat-input-container {
            display: flex;
            gap: 0.75rem;
        }

        .chat-input {
            flex: 1;
            padding: 0.75rem 1rem;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 25px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 0.95rem;
            outline: none;
            transition: all 0.2s;
        }

        .chat-input::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .chat-input:focus {
            border-color: rgba(255, 255, 255, 0.6);
            background: rgba(255, 255, 255, 0.15);
        }

        .chat-send {
            padding: 0.75rem 1.5rem;
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 25px;
            color: white;
            cursor: pointer;
            transition: all 0.2s;
            font-weight: 600;
        }

        .chat-send:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        .chat-status {
            text-align: center;
            margin-top: 1rem;
            font-size: 0.85rem;
            opacity: 0.8;
        }

        /* Contact Grid */
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .contact-card {
            background: var(--bg-primary);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border);
            text-align: center;
            transition: all 0.3s;
        }

        .contact-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
        }

        .contact-card i {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .contact-card h3 {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--text-primary);
        }

        .contact-card a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
        }

        .contact-card a:hover {
            text-decoration: underline;
        }

        /* Footer */
        footer {
            background: var(--text-primary);
            color: white;
            text-align: center;
            padding: 2rem 0;
            margin-top: 4rem;
        }

        footer p {
            margin: 0;
            opacity: 0.8;
        }

        footer a {
            color: var(--primary-light);
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: var(--bg-primary);
                box-shadow: var(--shadow-lg);
                flex-direction: column;
                padding: 1rem 0;
                border-top: 1px solid var(--border);
            }

            .nav-links.active {
                display: flex;
            }

            .nav-links a {
                padding: 1rem 1.5rem;
                border-radius: 0;
            }

            .mobile-menu-toggle {
                display: block;
            }

            .hero-content {
                flex-direction: column;
                text-align: center;
            }

            .hero-text {
                text-align: center;
            }

            .avatar-img {
                width: 150px;
                height: 150px;
            }

            .hero-title {
                font-size: 2rem;
            }

            .hero-subtitle {
                font-size: 1.2rem;
            }

            .hero-description {
                font-size: 1rem;
            }

            .contact-items {
                flex-direction: column;
                align-items: flex-start;
            }

            .divider {
                display: none;
            }

            .stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .skills-grid,
            .projects-grid,
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .skill-card {
                min-height: auto;
            }

            .timeline {
                padding-left: 1rem;
            }

            .timeline-item {
                margin-left: 0.5rem;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 1rem;
            }

            .logo-icon {
                width: 32px;
                height: 32px;
                font-size: 0.9rem;
            }

            .avatar-img {
                width: 120px;
                height: 120px;
            }

            .hero-title {
                font-size: 1.75rem;
            }

            .hero-subtitle {
                font-size: 1rem;
            }

            .hero-description {
                font-size: 0.9rem;
            }

            .stats {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .section-header {
                font-size: 1.5rem;
            }

            .skill-card,
            .project-card,
            .contact-card {
                padding: 1.5rem;
            }
        }

        /* Scrollbar */
        .chat-messages::-webkit-scrollbar {
            width: 6px;
        }

        .chat-messages::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 3px;
        }

        .chat-messages::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.3);
            border-radius: 3px;
        }

        .chat-messages::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.5);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="container">
            <div class="logo">
                <div class="logo-icon">AN</div>
                <span class="logo-text">Aysan Nazarmohammadi</span>
            </div>
            <ul class="nav-links" id="navLinks">
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#chatbot">AI Assistant</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <button class="mobile-menu-toggle" id="mobileMenuToggle">
                <i class="fas fa-bars"></i>
            </button>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-avatar">
                    <img src="https://avatars.githubusercontent.com/u/30371881?v=4" alt="Aysan Nazarmohammadi" class="avatar-img">
                </div>
                <div class="hero-text">
                    <h1 class="hero-title">Aysan Nazarmohammadi</h1>
                    <p class="hero-subtitle">Data Scientist & AI Specialist</p>
                    <p class="hero-description">
                        Transforming challenges into intelligent AI solutions with 6+ years of experience in Machine Learning, Generative AI, and NLP. Expert in Zero-to-Production delivery and creative problem solving.
                    </p>
                    <div class="hero-cta">
                        <a href="#projects" class="btn btn-primary">
                            <i class="fas fa-rocket"></i>
                            View My Work
                        </a>
                        <a href="#contact" class="btn btn-secondary">
                            <i class="fas fa-envelope"></i>
                            Get In Touch
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Bar -->
    <div class="contact-bar">
        <div class="container">
            <div class="contact-items">
                <a href="mailto:aysan.nazarmohamady@yahoo.com" class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <span>aysan.nazarmohamady@yahoo.com</span>
                </a>
                <a href="tel:+989361867750" class="contact-item">
                    <i class="fas fa-phone"></i>
                    <span>+98 936 186 7750</span>
                </a>
                <a href="https://linkedin.com/in/aysan-nazarmohammadi" target="_blank" class="contact-item">
                    <i class="fab fa-linkedin"></i>
                    <span>LinkedIn</span>
                </a>
                <a href="https://github.com/aysannazarmohamady" target="_blank" class="contact-item">
                    <i class="fab fa-github"></i>
                    <span>GitHub</span>
                </a>
                <div class="divider"></div>
                <span class="contact-title">Keep in touch!</span>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <h2 class="section-header">About Me</h2>
            <p style="max-width: 900px; margin: 0 auto 3rem; color: var(--text-secondary); font-size: 1.1rem; line-height: 1.8;">
                I'm a passionate Data Scientist specializing in transforming complex challenges into intelligent AI solutions. 
                With extensive experience in storytelling, I excel at extracting strategic insights from data and communicating 
                complex concepts in accessible language. My expertise spans Machine Learning, Generative AI, and NLP, with a 
                proven track record of delivering data-driven solutions that bridge technical excellence and business objectives.
            </p>
            
            <div class="stats">
                <div class="stat-card">
                    <span class="stat-number">6+</span>
                    <span class="stat-label">Years Experience</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">99%</span>
                    <span class="stat-label">AI Detection Accuracy</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">200+</span>
                    <span class="stat-label">Professionals Impacted</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">30%</span>
                    <span class="stat-label">Engagement Improvement</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="section" style="background: var(--bg-primary);">
        <div class="container">
            <h2 class="section-header">Skills & Expertise</h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3>AI & Machine Learning</h3>
                    <p>Generative AI, NLP, LangChain, LangGraph, RAG, Fine-tuning, GPT, TensorFlow, Scikit-learn</p>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Programming & Data</h3>
                    <p>Python, SQL, JavaScript, A/B Testing, Statistical Analysis, Data Visualization</p>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Tools & Platforms</h3>
                    <p>Streamlit, n8n, Git, API Development, Docker, Model Deployment, MLOps</p>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Business Impact</h3>
                    <p>Rapid Technology Adoption, Technical Presentation, Cross-cultural Collaboration</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="section">
        <div class="container">
            <h2 class="section-header">Featured Projects</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-header">
                        <h3>AI Text Detective</h3>
                    </div>
                    <div class="project-body">
                        <p>Advanced machine learning system detecting AI-generated text with 99%+ accuracy using ensemble methods and sophisticated NLP techniques.</p>
                        <div class="project-tags">
                            <span class="tag">Scikit-learn</span>
                            <span class="tag">XGBoost</span>
                            <span class="tag">NLTK</span>
                            <span class="tag">Streamlit</span>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-header">
                        <h3>Bitcoin Price Prediction</h3>
                    </div>
                    <div class="project-body">
                        <p>Sophisticated cryptocurrency prediction system combining LSTM neural networks with comprehensive technical analysis.</p>
                        <div class="project-tags">
                            <span class="tag">LSTM</span>
                            <span class="tag">Feature Engineering</span>
                            <span class="tag">Time Series</span>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-header">
                        <h3>AI Food Recommendation Agent</h3>
                    </div>
                    <div class="project-body">
                        <p>Intelligent conversational AI providing personalized nutrition guidance with health-conscious decision support.</p>
                        <div class="project-tags">
                            <span class="tag">Streamlit</span>
                            <span class="tag">Groq LLM</span>
                            <span class="tag">NLP</span>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-header">
                        <h3>Patent Document Search Engine</h3>
                    </div>
                    <div class="project-body">
                        <p>Production-ready semantic search system enabling complex document analysis and automated insights extraction.</p>
                        <div class="project-tags">
                            <span class="tag">FAISS</span>
                            <span class="tag">LangChain</span>
                            <span class="tag">RAG</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="section" style="background: var(--bg-primary);">
        <div class="container">
            <h2 class="section-header">Professional Experience</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3>Founder & AI Product Developer</h3>
                        <h4>Startups | June 2024 - Present</h4>
                        <p>Founded JetApply solving global academic application inefficiencies. Built LangChain-powered recommendation engine with automated document generation and reinforcement learning optimization.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3>AI Research & Development Specialist</h3>
                        <h4>ISNA News Agency | Oct 2023 - Dec 2024</h4>
                        <p>Designed comprehensive quality assessment system using hierarchical clustering analysis, implementing 10-level categorization that automated salary decisions for 200+ journalists.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3>Data Scientist & Strategic Analyst</h3>
                        <h4>ISNA News Agency | Jun 2018 - Sep 2023</h4>
                        <p>Analyzed 15+ variables using Python and Google Analytics, establishing editorial standards that improved engagement rates by 25-30%. Built automated dashboard reducing CEO report generation time by 95%.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Chatbot Section -->
    <section id="chatbot" class="section chatbot-section">
        <div class="container">
            <h2 class="section-header" style="color: white;">AI Assistant</h2>
            <div class="chatbot-container">
                <div class="chatbot-card">
                    <div class="chat-header">
                        <h3><i class="fas fa-comments"></i> Chat with My AI Assistant</h3>
                        <p style="opacity: 0.9;">Ask me anything about my work, experience, or projects!</p>
                    </div>
                    
                    <div class="chat-messages" id="chatMessages">
                        <div class="message bot">
                            <strong>AI Assistant:</strong>
                            Hello! I'm Aysan's AI assistant. Feel free to ask me anything about her background, projects, or experience. How can I help you today?
                        </div>
                    </div>
                    
                    <div class="chat-input-container">
                        <input type="text" class="chat-input" id="chatInput" placeholder="Type your message here..." maxlength="500">
                        <button class="chat-send" id="chatSend">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                    
                    <div class="chat-status" id="chatStatus">
                        Ready to chat! (API connection will be configured soon)
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <div class="container">
            <h2 class="section-header">Let's Connect</h2>
            <div class="contact-grid">
                <div class="contact-card">
                    <i class="fas fa-envelope"></i>
                    <h3>Email</h3>
                    <a href="mailto:aysan.nazarmohamady@yahoo.com">aysan.nazarmohamady@yahoo.com</a>
                </div>
                <div class="contact-card">
                    <i class="fas fa-phone"></i>
                    <h3>Phone</h3>
                    <a href="tel:+989361867750">+98 936 186 7750</a>
                </div>
                <div class="contact-card">
                    <i class="fab fa-linkedin"></i>
                    <h3>LinkedIn</h3>
                    <a href="https://linkedin.com/in/aysan-nazarmohammadi" target="_blank">aysan-nazarmohammadi</a>
                </div>
                <div class="contact-card">
                    <i class="fab fa-github"></i>
                    <h3>GitHub</h3>
                    <a href="https://github.com/aysannazarmohamady" target="_blank">aysannazarmohamady</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2025 Aysan Nazarmohammadi. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const navLinks = document.getElementById('navLinks');

        mobileMenuToggle.addEventListener('click', function() {
            navLinks.classList.toggle('active');
            const icon = this.querySelector('i');
            if (navLinks.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', function() {
                navLinks.classList.remove('active');
                const icon = mobileMenuToggle.querySelector('i');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            });
        });

        // Smooth scrolling
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

        // Chat functionality
        const chatMessages = document.getElementById('chatMessages');
        const chatInput = document.getElementById('chatInput');
        const chatSend = document.getElementById('chatSend');
        const chatStatus = document.getElementById('chatStatus');

        const responses = [
            "That's a great question! Aysan has extensive experience in AI and machine learning, with over 6 years in the field.",
            "Aysan specializes in transforming complex challenges into intelligent AI solutions, particularly in NLP and generative AI.",
            "She's worked on various projects including AI text detection, Bitcoin price prediction, and conversational AI agents.",
            "Aysan has a strong background in both technical implementation and strategic business analysis.",
            "Feel free to reach out to Aysan directly through the contact information provided on this website!",
            "Aysan's expertise includes Python, TensorFlow, LangChain, and many other cutting-edge AI technologies.",
            "She's successfully improved engagement rates by 25-30% and automated complex business processes."
        ];

        function addMessage(message, isUser = false) {
            const messageDiv = document.createElement('div');
            messageDiv.className = `message ${isUser ? 'user' : 'bot'}`;
            messageDiv.innerHTML = `<strong>${isUser ? 'You' : 'AI Assistant'}:</strong> ${message}`;
            chatMessages.appendChild(messageDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        function sendMessage() {
            const message = chatInput.value.trim();
            if (message) {
                addMessage(message, true);
                chatInput.value = '';
                
                chatStatus.textContent = 'AI Assistant is typing...';
                
                setTimeout(() => {
                    const randomResponse = responses[Math.floor(Math.random() * responses.length)];
                    addMessage(randomResponse);
                    chatStatus.textContent = 'Ready to chat! (API connection will be configured soon)';
                }, 1000 + Math.random() * 2000);
            }
        }

        chatSend.addEventListener('click', sendMessage);
        chatInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });

        // Welcome message
        window.addEventListener('load', function() {
            setTimeout(() => {
                addMessage("Welcome! I can answer questions about Aysan's projects, experience, or technical skills.");
            }, 2000);
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '0';
                    entry.target.style.transform = 'translateY(20px)';
                    entry.target.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                    
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, 100);
                    
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.stat-card, .skill-card, .project-card, .timeline-item, .contact-card').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>
