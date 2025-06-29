@extends('layouts.main')

@section('content')
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
            <img src="https://placehold.co/600x350/1e1e2f/ffffff?text=Image+Generator+Preview" alt="Image Generator">
            <div class="demo-overlay">
                <a href="#" class="demo-button">Live Preview</a>
            </div>
            <p class="demo-title">Image Generator</p>
        </div>
    </div>
</section>


@endsection