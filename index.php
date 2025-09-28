<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aysan Nazarmohammadi | Data Scientist & AI Specialist</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-purple: #8b5cf6;
            --dark-purple: #6d28d9;
            --light-purple: #a78bfa;
            --purple-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --bg-light: #f8fafc;
            --text-dark: #1e293b;
            --text-light: #64748b;
            --white: #ffffff;
            --border-light: #e2e8f0;
            --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.12);
            --shadow-md: 0 4px 6px rgba(0, 0, 0, 0.07);
            --shadow-lg: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            background-color: var(--bg-light);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(15px);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.15);
            border-bottom: 1px solid rgba(139, 92, 246, 0.1);
            transition: all 0.3s ease;
        }

        header.scrolled {
            background: rgba(255, 255, 255, 0.99);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.2rem 0;
        }

        .logo {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--primary-purple);
            text-shadow: 0 1px 3px rgba(139, 92, 246, 0.3);
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 600;
            transition: all 0.3s ease;
            position: relative;
            padding: 0.5rem 1rem;
            border-radius: 8px;
        }

        .nav-links a:hover {
            color: var(--primary-purple);
            background: rgba(139, 92, 246, 0.1);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background: var(--primary-purple);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            margin-top: 80px;
            padding: 6rem 0;
            background: var(--purple-gradient);
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
            background: url('data:image/svg+xml,<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g fill="%23ffffff" fill-opacity="0.05"><circle cx="30" cy="30" r="4"/></g></svg>');
        }

        .hero-content {
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            letter-spacing: -0.02em;
        }

        .hero .subtitle {
            font-size: 1.5rem;
            font-weight: 400;
            margin-bottom: 1.5rem;
            opacity: 0.9;
        }

        .hero p {
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto 2.5rem;
            opacity: 0.8;
            line-height: 1.7;
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 14px 32px;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-primary {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .btn-primary:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: var(--white);
            color: var(--primary-purple);
        }

        .btn-secondary:hover {
            background: var(--bg-light);
            transform: translateY(-2px);
        }

        /* Sections */
        .section {
            padding: 5rem 0;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 3rem;
            color: var(--text-dark);
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: var(--primary-purple);
            border-radius: 2px;
        }

        /* About Section */
        .about-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .about-content p {
            font-size: 1.2rem;
            color: var(--text-light);
            line-height: 1.8;
            margin-bottom: 2rem;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .stat-item {
            text-align: center;
            background: var(--white);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border-light);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-purple);
            display: block;
        }

        .stat-label {
            color: var(--text-light);
            font-weight: 500;
        }

        /* Skills Section */
        .skills-section {
            background: var(--white);
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .skill-card {
            background: var(--white);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border-light);
            transition: all 0.3s ease;
            text-align: center;
        }

        .skill-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
            border-color: var(--light-purple);
        }

        .skill-icon {
            font-size: 2.5rem;
            color: var(--primary-purple);
            margin-bottom: 1rem;
        }

        .skill-card h3 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--text-dark);
        }

        .skill-card p {
            color: var(--text-light);
            line-height: 1.6;
        }

        /* Projects Section */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .project-card {
            background: var(--white);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border-light);
            transition: all 0.3s ease;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .project-header {
            background: var(--purple-gradient);
            color: white;
            padding: 1.5rem;
        }

        .project-header h3 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .project-body {
            padding: 1.5rem;
        }

        .project-body p {
            color: var(--text-light);
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .project-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .tag {
            background: var(--light-purple);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        /* Experience Section */
        .experience-section {
            background: var(--white);
        }

        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 2px;
            background: var(--border-light);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -1px;
        }

        .timeline-item {
            padding: 20px 40px;
            position: relative;
            background-color: inherit;
            width: 50%;
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            width: 16px;
            height: 16px;
            right: -8px;
            background-color: var(--primary-purple);
            border: 3px solid var(--white);
            top: 20px;
            border-radius: 50%;
            z-index: 1;
            box-shadow: var(--shadow-sm);
        }

        .timeline-item:nth-child(even) {
            left: 50%;
        }

        .timeline-item:nth-child(even)::after {
            left: -8px;
        }

        .timeline-content {
            background: var(--white);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border-light);
            position: relative;
        }

        .timeline-content h3 {
            color: var(--text-dark);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .timeline-content h4 {
            color: var(--primary-purple);
            font-weight: 500;
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }

        .timeline-content p {
            color: var(--text-light);
            line-height: 1.6;
        }

        /* Contact Section */
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .contact-item {
            background: var(--white);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: var(--shadow-md);
            border: 1px solid var(--border-light);
            text-align: center;
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }

        .contact-icon {
            font-size: 2rem;
            color: var(--primary-purple);
            margin-bottom: 1rem;
        }

        .contact-item h3 {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--text-dark);
        }

        .contact-item a {
            color: var(--primary-purple);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .contact-item a:hover {
            color: var(--dark-purple);
        }

        /* Chat Bot Section */
        .chatbot-section {
            background: var(--purple-gradient);
            color: white;
            text-align: center;
        }

        .chatbot-container {
            max-width: 600px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 2rem;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .chat-header {
            margin-bottom: 2rem;
        }

        .chat-header h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .chat-messages {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            min-height: 200px;
            max-height: 300px;
            overflow-y: auto;
            text-align: left;
        }

        .message {
            margin-bottom: 1rem;
            padding: 0.8rem 1rem;
            border-radius: 12px;
            max-width: 80%;
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

        .chat-input-container {
            display: flex;
            gap: 1rem;
        }

        .chat-input {
            flex: 1;
            padding: 12px 16px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 25px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 1rem;
            outline: none;
            transition: all 0.3s ease;
        }

        .chat-input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .chat-input:focus {
            border-color: rgba(255, 255, 255, 0.6);
            background: rgba(255, 255, 255, 0.15);
        }

        .chat-send {
            padding: 12px 20px;
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 25px;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .chat-send:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-1px);
        }

        .chat-status {
            margin-top: 1rem;
            font-size: 0.9rem;
            opacity: 0.8;
        }



        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        /* Scrollbar Styling */
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
            <div class="logo">Aysan Nazarmohammadi</div>
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
                <h1>Aysan Nazarmohammadi</h1>
                <p class="subtitle">Data Scientist & AI Specialist</p>
                <p>Transforming challenges into intelligent AI solutions with 6+ years of experience. Expert in Zero-to-Production delivery, Machine Learning, and Generative AI technologies.</p>
                <div class="cta-buttons">
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
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            <div class="about-content">
                <p>
                    I'm a passionate Data Scientist specializing in transforming complex challenges into intelligent AI solutions. 
                    With extensive experience in storytelling, I excel at extracting strategic insights from data and communicating 
                    complex concepts in accessible language.
                </p>
                <p>
                    My expertise spans Machine Learning, Generative AI, and NLP, with a proven track record of delivering 
                    data-driven solutions that bridge technical excellence and business objectives.
                </p>
                
                <div class="stats">
                    <div class="stat-item">
                        <span class="stat-number">6+</span>
                        <span class="stat-label">Years Experience</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">99%</span>
                        <span class="stat-label">AI Detection Accuracy</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">200+</span>
                        <span class="stat-label">Professionals Impacted</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">30%</span>
                        <span class="stat-label">Engagement Improvement</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="section skills-section">
        <div class="container">
            <h2 class="section-title">Skills & Expertise</h2>
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
            <h2 class="section-title">Featured Projects</h2>
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
                            <span class="tag">SMOTE</span>
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
                            <span class="tag">Regularization</span>
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
                            <span class="tag">Python</span>
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
                            <span class="tag">gRPC</span>
                            <span class="tag">RAG</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="section experience-section">
        <div class="container">
            <h2 class="section-title">Professional Experience</h2>
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
            <h2 class="section-title">AI Assistant</h2>
            <div class="chatbot-container">
                <div class="chat-header">
                    <h3><i class="fas fa-comments"></i> Chat with My AI Assistant</h3>
                    <p>Ask me anything about my work, experience, or projects!</p>
                </div>
                
                <div class="chat-messages" id="chatMessages">
                    <div class="message bot">
                        <strong>AI Assistant:</strong> Hello! I'm Aysan's AI assistant. Feel free to ask me anything about her background, projects, or experience. How can I help you today?
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
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <div class="container">
            <h2 class="section-title">Let's Connect</h2>
            <div class="contact-grid">
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email</h3>
                    <a href="mailto:aysan.nazarmohamady@yahoo.com">aysan.nazarmohamady@yahoo.com</a>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>Phone</h3>
                    <a href="tel:+989361867750">+98 936 186 7750</a>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fab fa-linkedin"></i>
                    </div>
                    <h3>LinkedIn</h3>
                    <a href="https://linkedin.com/in/aysan-nazarmohammadi" target="_blank">aysan-nazarmohammadi</a>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fab fa-github"></i>
                    </div>
                    <h3>GitHub</h3>
                    <a href="https://github.com/aysannazarmohamady" target="_blank">aysannazarmohamady</a>
                </div>
            </div>
        </div>
    </section>

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

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!event.target.closest('nav')) {
                navLinks.classList.remove('active');
                const icon = mobileMenuToggle.querySelector('i');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });

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

        // Header scroll effect with better visibility
        function updateHeaderOnScroll() {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }

        // Animate elements on scroll with better performance
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in');
                    observer.unobserve(entry.target); // Stop observing once animated
                }
            });
        }, observerOptions);

        // Observe all sections and cards
        document.querySelectorAll('.section, .skill-card, .project-card, .timeline-item, .stat-item').forEach(el => {
            observer.observe(el);
        });

        // Chat functionality
        const chatMessages = document.getElementById('chatMessages');
        const chatInput = document.getElementById('chatInput');
        const chatSend = document.getElementById('chatSend');
        const chatStatus = document.getElementById('chatStatus');

        // Placeholder responses for demo
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
                
                // Show typing indicator
                chatStatus.textContent = 'AI Assistant is typing...';
                
                // Simulate AI response (replace with actual API call later)
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

        // Auto-resize chat input and prevent zoom on iOS
        chatInput.addEventListener('input', function() {
            if (this.value.length > 400) {
                this.style.fontSize = '0.9rem';
            } else {
                this.style.fontSize = window.innerWidth <= 768 ? '16px' : '1rem';
            }
        });

        // Add some welcome messages after page load
        window.addEventListener('load', function() {
            setTimeout(() => {
                addMessage("👋 Welcome! I can answer questions about Aysan's projects, experience, or technical skills.");
            }, 2000);
        });

        // Viewport height fix for mobile browsers
        function setVhProperty() {
            const vh = window.innerHeight * 0.01;
            document.documentElement.style.setProperty('--vh', `${vh}px`);
        }

        setVhProperty();
        window.addEventListener('resize', setVhProperty);
        window.addEventListener('orientationchange', setVhProperty);

        // Lazy loading for better performance
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        observer.unobserve(img);
                    }
                });
            });

            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        }

        // Performance optimization: Debounce scroll events
        let ticking = false;
        function updateOnScroll() {
            updateHeaderOnScroll();
            ticking = false;
        }

        window.addEventListener('scroll', function() {
            if (!ticking) {
                requestAnimationFrame(updateOnScroll);
                ticking = true;
            }
        });

        // API Integration placeholder (to be replaced with actual API)
        async function callChatAPI(message) {
            // This will be replaced with actual API call
            // const response = await fetch('YOUR_API_ENDPOINT', {
            //     method: 'POST',
            //     headers: {
            //         'Content-Type': 'application/json',
            //     },
            //     body: JSON.stringify({ message: message })
            // });
            // const data = await response.json();
            // return data.response;
            
            // For now, return a placeholder
            return responses[Math.floor(Math.random() * responses.length)];
        }
    </script>
</body>
</html>
