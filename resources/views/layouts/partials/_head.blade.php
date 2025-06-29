<head>
    <meta charset="UTF-8">
    <title>WebAI Style</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script><!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>


    <style>
        .text-lightblue {
            color: #00BFFF;
            /* Light blue */
        }

        a {
            text-decoration: none;
        }

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

        .carousel .card {
            flex: 0 0 auto;
            width: 300px;
            margin: 0 1rem;
            background: #1a1a1a;
            border-radius: 12px;
            padding: 1rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
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
            background-color: #0b0f2b;
        }

        marg .site-footer {
            background-color: #020b25;
            color: #fff;
            padding: 3rem 2rem;
            font-family: 'Segoe UI', sans-serif;
            font-size: 0.9rem;
        }

        .footer {
            background-image: url('assets/images/footer-bg1.png');
            background-size: cover;
            background-position: center;
            /* filter: brightness(0) saturate(100%) invert(59%) sepia(91%) saturate(2064%) hue-rotate(172deg) brightness(99%) contrast(104%); */
            /* background-color: #1c1e22; */
            padding: 60px 40px 30px;
        }

        .footer-top {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 40px;
        }

        .footer-col {
            flex: 1 1 200px;
        }

        .footer-logo {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .footer-logo i {
            font-size: 32px;
            color: #00d2ff;
        }

        .footer-text {
            font-size: 14px;
            line-height: 1.8;
        }

        .footer-links,
        .footer-explore {
            list-style: none;
            padding: 0;
        }

        .footer-links li,
        .footer-explore li {
            margin-bottom: 10px;
        }

        .footer-links a,
        .footer-explore a {
            text-decoration: none;
            color: #bbb;
            transition: color 0.3s;
        }

        .footer-links a:hover,
        .footer-explore a:hover {
            color: #fff;
        }

        .footer-newsletter {
            display: flex;
            margin-top: 20px;
        }

        .footer-newsletter input {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 5px 0 0 5px;
            outline: none;
        }

        .footer-newsletter button {
            padding: 10px 20px;
            background-color: #00d2ff;
            color: white;
            border: none;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }

        .footer-bottom {
            background-color: #15171b;
            padding: 20px 40px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            font-size: 14px;
            border-top: 1px solid #2a2d32;
        }

        .footer-contact-item {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
        }

        .footer-social {
            display: flex;
            gap: 10px;
        }

        .footer-social a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
        }

        @media (max-width: 768px) {
            .footer-top {
                flex-direction: column;
            }

            .footer-bottom {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
        }


        .who-we-are {
            background-color: #050c24;
            color: white;
            padding: 80px 20px;
            text-align: center;
        }

        .who-we-are .container {
            max-width: 900px;
            margin: 0 auto;
        }

        .who-we-are h2 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 2rem;
            color: white;
        }

        .who-we-are p {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 1.5rem;
            color: #ddd;
        }

        .our-team {
            background-color: #050c24;
            color: white;
            padding: 80px 20px;
            text-align: center;
        }

        .our-team h2 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 2rem;
        }

        .team-nav {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 40px;
        }

        .team-tab {
            background: transparent;
            color: white;
            border: 2px solid white;
            border-radius: 50px;
            padding: 10px 25px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s ease;
        }

        .team-tab.active,
        .team-tab:hover {
            background: white;
            color: #050c24;
        }

        .team-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .member-card {
            background-color: #111930;
            border-radius: 20px;
            overflow: hidden;
            width: 240px;
            padding-bottom: 20px;
        }

        .member-card img {
            width: 100%;
            height: auto;
            display: block;
        }

        .member-card h3 {
            margin-top: 15px;
            font-size: 1rem;
            font-weight: bold;
        }

        .member-card p {
            font-size: 0.9rem;
            margin-top: 5px;
            color: #ccc;
        }

        #line-container {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .line,
        .branch-vertical,
        .branch-diagonal {
            position: absolute;
            background: #00ffff;
            box-shadow: 0 0 4px #00ffff, 0 0 10px #00ffff;
        }

        /* Garis utama vertikal */
        .line {
            width: 2px;
            animation: drop 2s linear forwards;
        }

        @keyframes drop {
            from {
                top: -100px;
                opacity: 1;
            }

            to {
                top: 100vh;
                opacity: 0;
            }
        }

        /* Tikungan diagonal (45 derajat) */
        .branch-diagonal {
            width: 2px;
            height: 30px;
            transform: rotate(45deg);
            transform-origin: top left;
        }

        /* Cabang lanjutan vertikal dari diagonal */
        .branch-vertical {
            width: 2px;
            height: 100px;
            top: 0;
            animation: growDown 2s linear forwards;
        }

        @keyframes growDown {
            0% {
                height: 0;
                opacity: 1;
            }

            100% {
                height: 100px;
                opacity: 0;
            }
        }

        .section {
            min-height: 100vh;
            padding: 10rem 9% 2rem;
        }

        .heading {
            text-align: center;
            font-size: 4.5rem;
        }

        .heading span {
            color: #00ffff;
        }

        .service h2 {
            margin-bottom: 5rem;
        }

        .service-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .service-container .service-box {
            flex: 1 1 3rem;
            background: #323946;
            padding: 3rem 2rem 4rem;
            border-radius: 2rem;
            text-align: center;
            border: .2rem solid 1f242d;
            transition: .5s ease;
        }

        .service-container .service-box:hover {
            border-color: #00ffff;
            transform: scale(1.02);
        }

        .service-box i {
            font-size: 2.8rem;
            color: #00ffff;
        }

        .service-box h3 {
            font-size: 2rem;
        }

        .service-box p {
            font-size: 0.8rem;
            margin: 1rem 0 3rem;
        }

        .service-btn {
            display: inline-block;
            padding: 1rem 2.8rem;
            background: ##323946;
            border: .1rem solid #00ffff;
            border-radius: 4rem;
            font-size: 1.6rem;
            color: #fff;
            letter-spacing: .1rem;
            font-weight: 600;
            transition: .5s ease;
        }

        .service-btn:hover {
            background: #00ffff;
            box-shadow: 0 0 1rem #00ffff;
            color: #323946;
        }

        .hero {
            position: relative;
            width: 100%;
            height: 100vh;
            background: url('assets/images/office_people.jpg') center center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            overflow: hidden;
        }

        .overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 30%, rgba(0, 0, 0, 0.8) 100%);
            z-index: 1;
            animation: overlayReveal 1s ease forwards;
        }

        .hero-text {
            position: relative;
            z-index: 2;
            padding-left: 80px;
            color: white;
            font-size: 64px;
            font-weight: 800;
            max-width: 800px;
            line-height: 1.2;
            opacity: 0;
            transform: translateY(100px);
            animation: textReveal 1s ease forwards;
            animation-delay: 0.5s;
        }

        @keyframes textReveal {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes overlayReveal {
            0% {
                transform: translateY(100%);
            }

            100% {
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .hero-text {
                font-size: 40px;
                padding-left: 40px;
            }
        }

        .our-benefits {
            background-color: #050826;
            color: white;
            padding: 80px 20px;
            font-family: sans-serif;
        }

        .our-benefits h2 {
            text-align: center;
            font-size: 32px;
            margin-bottom: 50px;
            font-weight: bold;
        }

        .benefit-item {
            display: flex;
            align-items: stretch;
            justify-content: center;
            max-width: 1200px;
            margin: 0 auto 30px auto;
            gap: 40px;
        }

        .benefit-title {
            width: 30%;
            font-weight: bold;
            font-size: 20px;
            line-height: 1.5;
            text-align: right;
        }

        .vertical-line {
            width: 2px;
            background-color: white;
            height: 1;
            /* tetap panjang sesuai tinggi item tertinggi */
        }

        .benefit-desc {
            width: 50%;
            font-size: 16px;
            line-height: 1.6;
        }

        /* Responsive */
        @media screen and (max-width: 768px) {
            .benefit-item {
                flex-direction: column;
                align-items: flex-start;
            }

            .vertical-line {
                display: none;
            }

            .benefit-title,
            .benefit-desc {
                width: 100%;
                text-align: left;
            }

            .benefit-title {
                font-size: 18px;
            }

            .benefit-desc {
                font-size: 15px;
            }

        }

        .porting-process {
            padding: 60px 20px;
            text-align: center;
        }

        .porting-process h2 {
            font-size: 32px;
            margin-bottom: 40px;
        }

        .timeline-scroll {
            overflow-x: auto;
            overflow-y: hidden;
            white-space: nowrap;
            padding-bottom: 20px;
        }

        .timeline {
            display: flex;
            gap: 40px;
            padding: 0 20px;
            align-items: flex-start;
            position: relative;
            min-width: 800px;
        }

        .timeline::before {
            content: "";
            position: absolute;
            top: 40px;
            left: 0;
            right: 0;
            height: 2px;
            background: #fff;
            z-index: 0;
        }

        .timeline-step {
            flex: 0 0 auto;
            width: 300px;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }

        .timeline-time {
            font-weight: bold;
            margin-bottom: 10px;
            color: #fff;
        }

        .timeline-icon {
            background-color: #070b24;
            border: 6px solid #fff;
            color: #fff;
            border-radius: 50%;
            padding: 12px;
            font-size: 20px;
            z-index: 1;
        }

        .timeline-card {
            background: #f5f5f5;
            color: #1e1e1e;
            border-radius: 20px;
            padding: 25px;
            margin-top: 20px;
            text-align: left;
            position: relative;
        }

        .timeline-card::before {
            content: "";
            position: absolute;
            top: -20px;
            left: 30px;
            width: 0;
            height: 0;
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            border-bottom: 20px solid #f5f5f5;
        }

        .timeline-card h3 {
            margin-top: 0;
            margin-bottom: 10px;
        }

        .timeline-card p {
            margin: 0;
        }

        /* Scrollbar styling for Webkit browsers (optional) */
        .timeline-scroll::-webkit-scrollbar {
            height: 8px;
        }

        .timeline-scroll::-webkit-scrollbar-track {
            background: #1a1a2e;
        }

        .timeline-scroll::-webkit-scrollbar-thumb {
            background: #00bcd4;
            border-radius: 4px;
        }
    </style>
</head>