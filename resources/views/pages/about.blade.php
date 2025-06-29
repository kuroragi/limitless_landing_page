@extends('layouts.main')

@section('content')


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
@endsection