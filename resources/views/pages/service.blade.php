@extends('layouts.main')

@section('content')

<section class="hero" id="hero" style="">
    <div class="overlay"></div>
    <div class="hero-text">
        LEADING SOFTWARE<br>
        DEVELOPMENT<br>
        COMPANY
    </div>
</section>


<section class="service section" id="service">
    <div class="container">
        <h2 class="heading">Our <span>Services</span></h2>

        <div class="service-container">
            <div class="service-box">
                <i class='bx bx-code-alt'></i>
                <h3>Developing</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident cum possimus earum consequatur,
                    illo optio quam architecto porro unde. Modi!</p>
            </div>
            <div class="service-box">
                <i class='bx bx-transfer'></i>
                <h3>API Gateway</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident cum possimus earum consequatur,
                    illo optio quam architecto porro unde. Modi!</p>
            </div>
            <div class="service-box">
                <i class='bx bx-wrench'></i>
                <h3>Maintaning</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident cum possimus earum consequatur,
                    illo optio quam architecto porro unde. Modi!</p>
            </div>
        </div>
    </div>
</section>

<section class="our-benefits">
    <h2>OUR BENEFITS</h2>
    <div class="benefit-item">
        <div class="benefit-title">SYSTEMATIC WORKFLOW &<br> ROBUST TEAM SUPPORT</div>
        <div class="vertical-line"></div>
        <div class="benefit-desc">
            Each stage of our workflow is handled by a dedicated team of experts who collaborate closely with each other
            and with the client to achieve the best results. We use various project management tools and techniques to
            optimize our workflows.
        </div>
    </div>

    <!-- Lanjutkan untuk item berikutnya -->
    <div class="benefit-item">
        <div class="benefit-title">EXPERIENCED WITH GAME <br>ENGINE IMPLEMENTATIONS <br>& CONCERNS</div>
        <div class="vertical-line"></div>
        <div class="benefit-desc">
            Experienced in handling end-to-end art asset production from concept to implementation. We’re familiar with
            the requirements and limitations of different game engines, and we apply best practices to optimize assets
            for efficiency and compatibility.
        </div>
    </div>

    <!-- dan seterusnya -->
</section>

<section class="porting-process">
    <h2>PORTING PROCESS</h2>
    <div class="timeline-scroll">
        <div class="timeline">
            <div class="timeline-step">
                <span class="timeline-time">1 - 2 Weeks</span>
                <div class="timeline-icon"><i class="bx bx-calendar"></i></div>
                <div class="timeline-card">
                    <h3>ASSESSMENT</h3>
                    <p>Generate a Summary Assessment Report of the game title evaluation. Provide an estimation for the
                        Cost and Timeline of the porting process.</p>
                </div>
            </div>
            <div class="timeline-step">
                <span class="timeline-time">Week 1</span>
                <div class="timeline-icon"><i class="bx bx-calendar"></i></div>
                <div class="timeline-card">
                    <h3>PRE-PRODUCTION</h3>
                    <p>Develop a High-Level Plan of Production including platform agreement, stability specs,
                        cross-platform features, and localization by the client.</p>
                </div>
            </div>
            <div class="timeline-step">
                <span class="timeline-time">Week 4</span>
                <div class="timeline-icon"><i class="bx bx-calendar"></i></div>
                <div class="timeline-card">
                    <h3>PRODUCTION – PRE ALPHA</h3>
                    <p>Create a Basic Runnable Build. Design UI/UX adaptation. Design Control Adaptation.</p>
                </div>
            </div>
            <!-- Tambah step lagi jika diperlukan -->
            <div class="timeline-step">
                <span class="timeline-time">1 - 2 Weeks</span>
                <div class="timeline-icon"><i class="bx bx-calendar"></i></div>
                <div class="timeline-card">
                    <h3>ASSESSMENT</h3>
                    <p>Generate a Summary Assessment Report of the game title evaluation. Provide an estimation for the
                        Cost and Timeline of the porting process.</p>
                </div>
            </div>
            <div class="timeline-step">
                <span class="timeline-time">Week 1</span>
                <div class="timeline-icon"><i class="bx bx-calendar"></i></div>
                <div class="timeline-card">
                    <h3>PRE-PRODUCTION</h3>
                    <p>Develop a High-Level Plan of Production including platform agreement, stability specs,
                        cross-platform features, and localization by the client.</p>
                </div>
            </div>
            <div class="timeline-step">
                <span class="timeline-time">Week 4</span>
                <div class="timeline-icon"><i class="bx bx-calendar"></i></div>
                <div class="timeline-card">
                    <h3>PRODUCTION – PRE ALPHA</h3>
                    <p>Create a Basic Runnable Build. Design UI/UX adaptation. Design Control Adaptation.</p>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection