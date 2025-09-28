<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aysan Nazarmohammadi | Data Scientist & AI Specialist</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #667eea;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            transition: color 0.3s ease;
            font-weight: 500;
        }

        .nav-links a:hover {
            color: #667eea;
        }

        /* Hero Section */
        .hero {
            margin-top: 80px;
            padding: 4rem 0;
            text-align: center;
            color: white;
        }

        .hero-content {
            animation: fadeInUp 1s ease-out;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero .subtitle {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto 2rem;
            opacity: 0.8;
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 12px 30px;
            border: none;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
            cursor: pointer;
            display: inline-block;
        }

        .btn-primary {
            background: linear-gradient(45deg, #ff6b6b, #ee5a24);
            color: white;
        }

        .btn-secondary {
            background: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        /* Sections */
        .section {
            padding: 4rem 0;
            background: white;
            margin: 2rem 0;
            border-radius: 20px;
            box-shadow: 0 10px 50px rgba(0,0,0,0.1);
        }

        .section h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #333;
            position: relative;
        }

        .section h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            border-radius: 2px;
        }

        /* Skills Grid */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .skill-card {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .skill-card:hover {
            transform: translateY(-5px);
        }

        .skill-card h3 {
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }

        /* Projects Grid */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .project-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 25px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .project-card:hover {
            transform: translateY(-5px);
        }

        .project-header {
            background: linear-gradient(45deg, #4facfe 0%, #00f2fe 100%);
            color: white;
            padding: 1.5rem;
        }

        .project-body {
            padding: 1.5rem;
        }

        .project-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .tag {
            background: #667eea;
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
        }

        /* Experience Timeline */
        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 4px;
            background: linear-gradient(180deg, #667eea 0%, #764ba2 100%);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -2px;
        }

        .timeline-item {
            padding: 10px 40px;
            position: relative;
            background-color: inherit;
            width: 50%;
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            right: -10px;
            background-color: #667eea;
            border: 4px solid #fff;
            top: 15px;
            border-radius: 50%;
            z-index: 1;
        }

        .timeline-item:nth-child(even) {
            left: 50%;
        }

        .timeline-item:nth-child(even)::after {
            left: -10px;
        }

        .timeline-content {
            background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
            padding: 2rem;
            border-radius: 15px;
            position: relative;
        }

        /* Contact Section */
        .contact-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            text-align: center;
        }

        .contact-item {
            background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
            padding: 2rem;
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        .contact-item:hover {
            transform: translateY(-5px);
        }

        .contact-item h3 {
            margin-bottom: 1rem;
            color: #333;
        }

        .contact-item a {
            color: #667eea;
            text-decoration: none;
            font-weight: bold;
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

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero .subtitle {
                font-size: 1.2rem;
            }
            
            .nav-links {
                display: none;
            }
            
            .timeline::after {
                left: 31px;
            }
            
            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }
            
            .timeline-item::after {
                left: 22px;
            }
            
            .timeline-item:nth-child(even) {
                left: 0%;
            }
        }

        /* Fun floating elements */
        .floating-shapes {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .shape {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .shape:nth-child(1) {
            width: 60px;
            height: 60px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            width: 80px;
            height: 80px;
            top: 60%;
            right: 10%;
            animation-delay: 2s;
        }

        .shape:nth-child(3) {
            width: 40px;
            height: 40px;
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }
    </style>
</head>
<body>
    <!-- Floating Shapes -->
    <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <!-- Header -->
    <header>
        <nav class="container">
            <div class="logo">Aysan N.</div>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Aysan Nazarmohammadi</h1>
                <p class="subtitle">Data Scientist & AI Specialist</p>
                <p>Transforming challenges into Agentic AI products with 6+ years of experience in ML, Generative AI, and NLP. Expert in Zero-to-Production delivery and creative problem solving.</p>
                <div class="cta-buttons">
                    <a href="#projects" class="btn btn-primary">View My Work</a>
                    <a href="#contact" class="btn btn-secondary">Get In Touch</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <h2>About Me</h2>
            <p style="text-align: center; font-size: 1.2rem; max-width: 800px; margin: 0 auto; color: #666;">
                I'm a passionate Data Scientist with expertise in transforming complex challenges into intelligent AI solutions. 
                With years of storytelling experience, I excel at extracting strategic insights from data and communicating 
                complex concepts in simple language. My focus is on delivering data-driven solutions that meet both 
                technical excellence and business needs.
            </p>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="section">
        <div class="container">
            <h2>Skills & Expertise</h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <h3>🤖 AI & Machine Learning</h3>
                    <p>Generative AI, NLP, LangChain, LangGraph, RAG, Fine-tuning, GPT, TensorFlow, Scikit-learn</p>
                </div>
                <div class="skill-card">
                    <h3>💻 Programming & Data</h3>
                    <p>Python, SQL, JavaScript, A/B Testing, Statistical Analysis, Data Visualization</p>
                </div>
                <div class="skill-card">
                    <h3>🛠️ Tools & Platforms</h3>
                    <p>Streamlit, n8n, Git, API Development, Docker, Model Deployment, MLOps</p>
                </div>
                <div class="skill-card">
                    <h3>🚀 Business Impact</h3>
                    <p>Rapid Technology Adoption, Technical Presentation, Cross-cultural Collaboration</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="section">
        <div class="container">
            <h2>Featured Projects</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-header">
                        <h3>AI Text Detective</h3>
                    </div>
                    <div class="project-body">
                        <p>Advanced machine learning system detecting AI-generated text with 99%+ accuracy using ensemble methods.</p>
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
                        <p>Sophisticated Bitcoin price prediction system combining LSTM neural networks with technical analysis.</p>
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
                        <p>Agentic conversational AI system providing personalized nutrition guidance with health-conscious decision support.</p>
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
    <section id="experience" class="section">
        <div class="container">
            <h2>Professional Experience</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3>Founder & AI Product Developer</h3>
                        <h4>Startups | June 2024 - Present</h4>
                        <p>Founded JetApply solving global academic application inefficiencies. Built LangChain-powered recommendation engine with automated document generation.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3>AI Research & Development Specialist</h3>
                        <h4>ISNA News Agency | Oct 2023 - Dec 2024</h4>
                        <p>Designed comprehensive quality assessment system using hierarchical clustering analysis, implementing 10-level categorization for 200+ journalists.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3>Data Scientist & Strategic Analyst</h3>
                        <h4>ISNA News Agency | Jun 2018 - Sep 2023</h4>
                        <p>Analyzed 15+ variables using Python and Google Analytics, establishing editorial standards that improved engagement rates by 25-30%.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <div class="container">
            <h2>Let's Connect</h2>
            <div class="contact-info">
                <div class="contact-item">
                    <h3>📧 Email</h3>
                    <a href="mailto:aysan.nazarmohamady@yahoo.com">aysan.nazarmohamady@yahoo.com</a>
                </div>
                <div class="contact-item">
                    <h3>📱 Phone</h3>
                    <a href="tel:+989361867750">+98 936 186 7750</a>
                </div>
                <div class="contact-item">
                    <h3>💼 LinkedIn</h3>
                    <a href="https://linkedin.com/in/aysan-nazarmohammadi" target="_blank">aysan-nazarmohammadi</a>
                </div>
                <div class="contact-item">
                    <h3>🔗 GitHub</h3>
                    <a href="https://github.com/aysannazarmohamady" target="_blank">aysannazarmohamady</a>
                </div>
            </div>
        </div>
    </section>

    <script>
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

        // Add scroll effect to header
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(255, 255, 255, 0.98)';
            } else {
                header.style.background = 'rgba(255, 255, 255, 0.95)';
            }
        });

        // Animate elements on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'fadeInUp 0.6s ease-out forwards';
                }
            });
        }, observerOptions);

        // Observe all sections and cards
        document.querySelectorAll('.section, .skill-card, .project-card, .timeline-item').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>
