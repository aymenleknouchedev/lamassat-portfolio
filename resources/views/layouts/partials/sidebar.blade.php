<aside class="sidebar" id="sidebar">
    <div class="logo">
        Lamassat Portfolio
        <button id="closeMenuBtn" class="close-menu-btn" aria-label="Close navigation menu">
            <i class="fas fa-xmark"></i>
        </button>
    </div>
    
    <div class="sidebar-user">
        <div class="avatar"><i class="fas fa-user"></i></div>
        <div class="name">{{ Auth::user()->name }}</div>
        <div class="email">{{ Auth::user()->email }}</div>
    </div>
    
    <ul class="sidebar-menu">
        <li>
            <a href="/dashboard" class="active">
                <span class="icon"><i class="fas fa-sparkles"></i></span>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="/me">
                <span class="icon"><i class="fas fa-user-circle"></i></span>
                <span>Profile</span>
            </a>
        </li>
        <li>
            <a href="/contacts">
                <span class="icon"><i class="fas fa-users"></i></span>
                <span>Network</span>
            </a>
        </li>
        <li>
            <a href="/social">
                <span class="icon"><i class="fas fa-heart"></i></span>
                <span>Connect</span>
            </a>
        </li>
        <li>
            <a href="/categories">
                <span class="icon"><i class="fas fa-tag"></i></span>
                <span>Topics</span>
            </a>
        </li>
        <li>
            <a href="/projects">
                <span class="icon"><i class="fas fa-rocket"></i></span>
                <span>Portfolio</span>
            </a>
        </li>
        <li>
            <a href="/statistics">
                <span class="icon"><i class="fas fa-fire"></i></span>
                <span>Insights</span>
            </a>
        </li>
        <li>
            <a href="/testimonials">
                <span class="icon"><i class="fas fa-star"></i></span>
                <span>Reviews</span>
            </a>
        </li>
    </ul>
    
    <div class="sidebar-footer">
        <form method="POST" action="/logout">
            @csrf
            <button type="submit" class="btn-logout"><i class="fas fa-sign-out-alt"></i> Logout</button>
        </form>
    </div>
</aside>