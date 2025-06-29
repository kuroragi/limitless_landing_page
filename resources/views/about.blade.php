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
            background-color: #0b0f2b;
        }

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

.line, .branch-vertical, .branch-diagonal {
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
    </style>
</head>

<body>
    <div id="line-container"></div>

        {{-- <header class="navbar">
            <div class="logo">Agaté.</div>
            <nav class="nav-menu">
                <a href="/" class="nav-link">HOME</a>
                <a href="#" class="nav-link active">ABOUT</a>
                <a href="#" class="nav-link">SERVICE</a>
                <a href="#" class="nav-link">PORTFOLIO</a>
                <a href="#" class="nav-link">CAREER</a>
                <a href="#" class="nav-link">NEWS</a>
                <a href="#" class="nav-link">BLOG</a>
                <a href="#" class="nav-link">CONTACT</a>
            </nav>
        </header>


        <section class="who-we-are">
            <div class="container">
                <h2>WHO WE ARE</h2>
                <p>
                    We are home to a diverse set of professional talents and industry-leading experts. Over the years, we
                    have created over
                    50 titles on Android, iOS, PlayStation, Nintendo Switch, and Steam.
                </p>
                <p>
                    Over a decade ago, we started as a humble game studio with a simple mission: to bring people together
                    through
                    meaningful play. Since then, our passion has driven us to create some of the most impactful and
                    thrilling games in the
                    industry, from flash games and web-based social games to mobile, PC, console games, and even game-based
                    solutions.
                </p>
                <p>But we’re not stopping there.</p>
                <p>
                    We strive to push the boundaries of what’s possible to create even more unforgettable experiences for
                    our beloved
                    players. And we know that the only way to achieve this is by working together.
                </p>
                <p>
                    That’s why we’re inviting you to join us on this incredible journey. With our combined resources,
                    talent, and passion, we
                    can make a difference that will last for generations to come.
                </p>
                <p>
                    Together, we can create a brighter future for gaming, where players feel truly seen, heard, and valued.
                </p>
                <p>Let’s join hands and make an impact that surpasses even our wildest dreams.</p>
            </div>
        </section>

        <section class="our-team">
            <h2>OUR TEAM</h2>
            <div class="team-nav">
                <button class="team-tab active" data-target="#directors">BOARD OF DIRECTORS</button>
                <button class="team-tab" data-target="#commissioners">BOARD OF COMMISSIONERS</button>
                <button class="team-tab" data-target="#advisors">BOARD OF ADVISORS</button>
            </div>

            <!-- VIEW: DIRECTORS -->
            <div class="team-content" id="directors">
                <div class="member-card">
                    <img src="shieny.jpg" alt="Shieny Aprilia" />
                    <h3>SHIENY APRILIA</h3>
                    <p>CHIEF EXECUTIVE OFFICER</p>
                </div>
                <div class="member-card">
                    <img src="aditia.jpg" alt="Aditia Dwiperdana" />
                    <h3>ADITIA DWIPERDANA</h3>
                    <p>CHIEF PEOPLE OFFICER</p>
                </div>
            </div>

            <!-- VIEW: COMMISSIONERS -->
            <div class="team-content" id="commissioners" style="display: none;">
                <div class="member-card">
                    <img src="default.jpg" alt="Commissioner" />
                    <h3>JOHN DOE</h3>
                    <p>COMMISSIONER</p>
                </div>
            </div>

            <!-- VIEW: ADVISORS -->
            <div class="team-content" id="advisors" style="display: none;">
                <div class="member-card">
                    <img src="default.jpg" alt="Advisor" />
                    <h3>JANE SMITH</h3>
                    <p>BOARD ADVISOR</p>
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
        </footer> --}}

    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('.team-tab').on('click', function() {
            const target = $(this).data('target');

            $('.team-tab').removeClass('active');
            $(this).addClass('active');

            $('.team-content').hide();
            $(target).fadeIn(300);
        });
    </script>

<script>
  function createLine() {
  const startLeft = Math.random() * window.innerWidth;
  const lineHeight = 1000 Math.random() * 200;
  const shouldBranch = Math.random() < 0.5;

  let $line = $('<div class="line"></div>').css({
    left: startLeft + 'px',
    height: shouldBranch ? lineHeight + 'px' : '100vh',
    top: '-100px',
  });

  $('#line-container').append($line);

  if (shouldBranch) {
    const direction = Math.random() < 0.5 ? -1 : 1;
    const branchLeft = startLeft + (30 * direction);

    const $diagonal = $('<div class="branch-diagonal"></div>').css({
      top: lineHeight + 'px',
      left: startLeft + 'px',
    });

    const $afterBranch = $('<div class="branch-vertical"></div>').css({
      top: (lineHeight + 30) + 'px',
      left: branchLeft + 'px',
    });

    $('#line-container').append($diagonal, $afterBranch);

    // Cleanup diagonal & vertical cabang
    setTimeout(() => {
      $diagonal.remove();
      $afterBranch.remove();
    }, 3000);
  }

  // cleanup garis utama
  setTimeout(() => $line.remove(), shouldBranch ? 2000 : 3000);
}

</script>



</body>

</html>
