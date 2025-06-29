<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>WebAI Style</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            color: white;
            background-color: #000;
            /* Warna dasar hitam */
        }

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 999;
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 1rem 2rem;
            background: rgba(0, 0, 0, 0.4);
            /* transparan */
            backdrop-filter: blur(4px);
            /* efek blur */
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: white;
        }

        .nav-menu {
            display: flex;
            gap: 1.5rem;
        }

        .nav-link {
            position: relative;
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
            padding-bottom: 5px;
        }

        .nav-link::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            height: 2px;
            width: 0%;
            background-color: white;
            transition: width 0.3s;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }

        .nav-link:hover {
            color: #ddd;
        }

        header {
            text-align: center;
            padding: 4rem 1rem;
        }

        header h1 {
            font-size: 2.2rem;
            font-weight: bold;
        }

        header p {
            margin-top: 0.5rem;
            font-size: 1rem;
        }

        .highlight {
            color: #00BFFF;
            /* Light blue */
            font-weight: bold;
        }

        .btn {
            margin-top: 1.5rem;
            padding: 0.75rem 1.5rem;
            background-color: #00BFFF;
            border: none;
            border-radius: 999px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #00a3cc;
        }

        .carousel-wrapper {
            overflow: hidden;
            width: 100%;
            margin: 3rem 0;
        }

        .carousel {
            display: flex;
            animation: scrollLeft 30s linear infinite;
        }

        .card {
            flex: 0 0 auto;
            width: 300px;
            margin: 0 1rem;
            background: #1a1a1a;
            border-radius: 12px;
            padding: 1rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
            /* Outline lebih halus */
        }

        .card img {
            max-width: 100%;
            border-radius: 8px;
        }

        @keyframes scrollLeft {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .services-grid {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 2rem;
            padding: 0 2rem;
        }

        .flip-card {
            width: 240px;
            height: 240px;
            perspective: 1000px;
        }

        .flip-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }

        .flip-card:hover .flip-inner {
            transform: rotateY(180deg);
        }

        .flip-front,
        .flip-back {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 20px;
            background: linear-gradient(to bottom, #111, #1e1e2f);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            backface-visibility: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
            padding: 1rem;
            text-align: center;
        }

        .flip-front img {
            width: 48px;
            margin-bottom: 1rem;
        }

        .flip-front p,
        .flip-back p {
            font-weight: bold;
        }

        .flip-back {
            transform: rotateY(180deg);
        }

        .btn-view {
            margin-top: 1rem;
            padding: 0.5rem 1rem;
            background-color: #00BFFF;
            border: none;
            border-radius: 999px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-view:hover {
            background-color: #009fcc;
        }

        .services-row {
            display: flex;
            justify-content: center;
            gap: 2rem;
            overflow-x: auto;
            padding: 0 2rem;
            scroll-behavior: smooth;
        }

        .flip-card {
            width: 240px;
            height: 240px;
            perspective: 1000px;
            flex: 0 0 auto;
            /* mencegah wrap */
        }

        .flip-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }

        .flip-card:hover .flip-inner {
            transform: rotateY(180deg);
        }

        .flip-front,
        .flip-back {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 20px;
            background: linear-gradient(to bottom, #111, #1e1e2f);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            backface-visibility: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
            padding: 1rem;
            text-align: center;
        }

        .flip-front img {
            width: 48px;
            margin-bottom: 1rem;
        }

        .flip-front p,
        .flip-back p {
            font-weight: bold;
        }

        .flip-back {
            transform: rotateY(180deg);
        }

        .btn-view {
            margin-top: 1rem;
            padding: 0.5rem 1rem;
            background-color: #00BFFF;
            border: none;
            border-radius: 999px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-view:hover {
            background-color: #009fcc;
        }

        .demo-grid {
            margin-top: 3rem;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .demo-card {
            position: relative;
            width: 320px;
            border-radius: 16px;
            overflow: hidden;
            background: #1a1a1a;
            transition: transform 0.3s;
        }

        .demo-card:hover {
            transform: scale(1.02);
        }

        .demo-card img {
            width: 100%;
            display: block;
            border-bottom: 2px solid #111;
        }

        .demo-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 40px;
            background: rgba(0, 0, 0, 0.6);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .demo-card:hover .demo-overlay {
            opacity: 1;
        }

        .demo-button {
            background-color: #00BFFF;
            padding: 0.6rem 1.2rem;
            color: white;
            border-radius: 999px;
            font-weight: bold;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .demo-button:hover {
            background-color: #009fcc;
        }

        .demo-title {
            padding: 1rem 0;
            font-weight: bold;
            color: white;
            font-size: 1rem;
            background-color: #0b0f2b;}

            marg .site-footer {
                background-color: #020b25;
                color: #fff;
                padding: 3rem 2rem;
                font-family: 'Segoe UI', sans-serif;
                font-size: 0.9rem;
            }

            .footer-container {
                max-width: 1000px;
                margin: 0 auto;
                text-align: left;
            }

            .footer-logo {
                font-size: 2.2rem;
                font-weight: bold;
                margin-bottom: 1rem;
            }

            .footer-social {
                margin-bottom: 1rem;
            }

            .footer-social a {
                display: inline-block;
                margin-right: 1rem;
                font-size: 1.2rem;
                color: white;
                transition: color 0.3s;
            }

            .footer-social a:hover {
                color: #00BFFF;
            }

            .footer-links {
                margin-bottom: 1rem;
            }

            .footer-links a {
                color: #ccc;
                text-decoration: none;
                margin: 0 0.3rem;
                transition: color 0.3s;
            }

            .footer-links a:hover {
                color: #fff;
            }

            .footer-desc {
                color: #ccc;
                line-height: 1.6;
                margin-bottom: 1rem;
            }

            .footer-copy {
                color: #999;
                font-size: 0.85rem;
            }
    </style>
</head>

<body>

    <header class="navbar">
        <div class="logo">Agaté.</div>
        <nav class="nav-menu">
            <a href="#" class="nav-link active">HOME</a>
            <a href="/about" class="nav-link">ABOUT</a>
            <a href="#" class="nav-link">SERVICE</a>
            <a href="#" class="nav-link">PORTFOLIO</a>
            <a href="#" class="nav-link">CAREER</a>
            <a href="#" class="nav-link">NEWS</a>
            <a href="#" class="nav-link">BLOG</a>
            <a href="#" class="nav-link">CONTACT</a>
        </nav>
    </header>

    <header>
        <h1>WebAI - AI Startup & Technology Landing Page</h1>
        <p>HTML Template Built for <span class="highlight">AI Image Generator</span></p>
        <button class="btn">View Demos</button>
    </header>

    <section>
        <div class="carousel-wrapper">
            <div class="carousel">
                <!-- Card sample -->
                <div class="card"><img src="https://placehold.co/300x180/111/fff?text=Card+1" alt="Card 1"></div>
                <div class="card"><img src="https://placehold.co/300x180/222/fff?text=Card+2" alt="Card 2"></div>
                <div class="card"><img src="https://placehold.co/300x180/333/fff?text=Card+3" alt="Card 3"></div>
                <div class="card"><img src="https://placehold.co/300x180/444/fff?text=Card+4" alt="Card 4"></div>
                <!-- Duplicate -->
                <div class="card"><img src="https://placehold.co/300x180/111/fff?text=Card+1" alt="Card 1"></div>
                <div class="card"><img src="https://placehold.co/300x180/222/fff?text=Card+2" alt="Card 2"></div>
                <div class="card"><img src="https://placehold.co/300x180/333/fff?text=Card+3" alt="Card 3"></div>
                <div class="card"><img src="https://placehold.co/300x180/444/fff?text=Card+4" alt="Card 4"></div>
            </div>
        </div>
    </section>

    <section id="services" style="background-color: #000; padding: 4rem 0; color: white; text-align: center;">
        <h2 style="font-size: 2rem; margin-bottom: 2rem;">OUR SERVICES</h2>
        <div class="services-row">
            <!-- Card 1 -->
            <div class="flip-card">
                <div class="flip-inner">
                    <div class="flip-front">
                        <img src="https://img.icons8.com/ios-filled/64/ffffff/city.png" alt="Gamification">
                        <p>GAMIFICATION SERVICE</p>
                    </div>
                    <div class="flip-back">
                        <p>GAMIFICATION SERVICE</p>
                        <button class="btn-view">View More</button>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="flip-card">
                <div class="flip-inner">
                    <div class="flip-front">
                        <img src="https://img.icons8.com/ios-filled/64/ffffff/services.png" alt="Full Dev">
                        <p>FULL DEVELOPMENT SERVICE</p>
                    </div>
                    <div class="flip-back">
                        <p>FULL DEVELOPMENT SERVICE</p>
                        <button class="btn-view">View More</button>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="flip-card">
                <div class="flip-inner">
                    <div class="flip-front">
                        <img src="https://img.icons8.com/ios-filled/64/ffffff/paint-palette.png" alt="Art">
                        <p>ART SERVICE</p>
                    </div>
                    <div class="flip-back">
                        <p>ART SERVICE</p>
                        <button class="btn-view">View More</button>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="flip-card">
                <div class="flip-inner">
                    <div class="flip-front">
                        <img src="https://img.icons8.com/ios-filled/64/ffffff/merge-git.png" alt="Porting">
                        <p>PORTING SERVICE</p>
                    </div>
                    <div class="flip-back">
                        <p>PORTING SERVICE</p>
                        <button class="btn-view">View More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="demo"
        style="background: linear-gradient(to bottom right, #000, #0b0f2b); padding: 4rem 2rem; color: white; text-align: center;">
        <h2 style="font-size: 2rem;">Home Pages</h2>
        <p style="margin-top: 0.5rem; color: #ccc;">Start working with Tailwindcss<br>It allows you to compose complex
            designs.</p>

        <div class="demo-grid">
            <!-- Card 1 -->
            <div class="demo-card">
                <img src="https://placehold.co/600x350/1e1e2f/ffffff?text=Web+3+Preview" alt="Web 3">
                <div class="demo-overlay">
                    <a href="#" class="demo-button">Live Preview</a>
                </div>
                <p class="demo-title">Web 3</p>
            </div>

            <!-- Card 2 -->
            <div class="demo-card">
                <img src="https://placehold.co/600x350/1e1e2f/ffffff?text=Image+Generator+Preview"
                    alt="Image Generator">
                <div class="demo-overlay">
                    <a href="#" class="demo-button">Live Preview</a>
                </div>
                <p class="demo-title">Image Generator</p>
            </div>
        </div>
    </section>

    <footer class="site-footer">
        <div class="footer-container">
            <!-- Logo -->
            <div class="footer-logo">Agaté.</div>

            <!-- Social Icons -->
            <div class="footer-social">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>

            <!-- Menu Links -->
            <div class="footer-links">
                <a href="#">About</a> |
                <a href="#">Service</a> |
                <a href="#">Career</a> |
                <a href="#">News</a> |
                <a href="#">Blog</a> |
                <a href="#">Privacy Policy</a>
            </div>

            <!-- Description -->
            <p class="footer-desc">
                All company names, brand names, trademarks, logos, illustrations, videos and any other intellectual
                property
                (Intellectual Property) published on this website are the property of their respective owners. Any
                non-authorized usage
                of Intellectual Property is strictly prohibited and any violation will be prosecuted under the law.
            </p>

            <!-- Copyright -->
            <p class="footer-copy">© 2025 Agaté. All rights reserved.</p>
        </div>
    </footer>

    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>



</body>

</html>
