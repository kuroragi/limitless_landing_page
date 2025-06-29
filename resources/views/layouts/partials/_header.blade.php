<header class="navbar">
    <div class="logo">LIMIT <span class="text-lightblue pe-0">LESS</span>
    </div>
    <nav class="nav-menu">
        <a href="/" class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}">HOME</a>
        <a href="/about" class="nav-link {{ Route::currentRouteName() === 'about' ? 'active' : '' }}">ABOUT</a>
        <a href="/service" class="nav-link {{ request()->is('service*') ? 'active' : '' }}">SERVICE</a>
        <a href="#" class="nav-link {{ request()->is('portfolio*') ? 'active' : '' }}">PORTFOLIO</a>
        <a href="#" class="nav-link">CONTACT</a>
    </nav>
</header>