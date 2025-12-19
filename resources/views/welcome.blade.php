<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Page Title -->
    <title>Welcome - Landing Page</title>
    
    <!-- Meta Description -->
    <meta name="description" content="Discover our amazing landing page with modern design and great features">
    
    <!-- Meta Keywords -->
    <meta name="keywords" content="landing, page, welcome, modern, design">
    
    <!-- Open Graph Meta Tags (for social media) -->
    <meta property="og:title" content="Welcome - Landing Page">
    <meta property="og:description" content="Discover our amazing landing page with modern design and great features">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:image" content="{{ asset('images/og-image.png') }}">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Welcome - Landing Page">
    <meta name="twitter:description" content="Discover our amazing landing page with modern design and great features">
    <meta name="twitter:image" content="{{ asset('images/og-image.png') }}">
    
    <!-- Theme Color -->
    <meta name="theme-color" content="#1e3a8a">
    
    <!-- Favicon and Icons -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon.svg') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --blue: #1e3a8a;
            --orange: #f97316;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        
        header {
            background: var(--blue);
            color: white;
            padding: 1rem 0;
            position: sticky;
            top: 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        nav {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        nav .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }
        
        nav a {
            color: white;
            text-decoration: none;
            margin-left: 2rem;
            transition: opacity 0.3s;
        }
        
        nav a:hover {
            opacity: 0.8;
        }
        
        .hero {
            background: var(--blue);
            color: white;
            padding: 6rem 2rem;
            text-align: center;
            min-height: 500px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        
        .btn {
            display: inline-block;
            padding: 0.75rem 2rem;
            background: var(--orange);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: transform 0.3s, box-shadow 0.3s;
            margin: 0 0.5rem;
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        .btn-secondary {
            background: transparent;
            color: white;
            border: 2px solid white;
        }
        
        .features {
            max-width: 1200px;
            margin: 4rem auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }
        
        .feature {
            text-align: center;
            padding: 2rem;
            border-radius: 8px;
            background: #f8f9fa;
        }
        
        .feature h3 {
            color: var(--blue);
            margin-bottom: 1rem;
        }
        
        footer {
            background: var(--blue);
            color: white;
            text-align: center;
            padding: 2rem;
            margin-top: 4rem;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">MyApp</div>
            <div>
                <a href="/">Home</a>
                <a href="#features">Features</a>
                <a href="#contact">Contact</a>
            </div>
        </nav>
    </header>
    
    <section class="hero">
        <h1>Welcome to Our Platform</h1>
        <p>Build amazing things with simplicity and elegance</p>
        <div>
            <a href="#" class="btn">Get Started</a>
            <a href="#" class="btn btn-secondary">Learn More</a>
        </div>
    </section>
    
    <section class="features" id="features">
        <div class="feature">
            <h3>🚀 Fast</h3>
            <p>Lightning-fast performance to keep your users happy</p>
        </div>
        <div class="feature">
            <h3>🔒 Secure</h3>
            <p>Enterprise-grade security to protect your data</p>
        </div>
        <div class="feature">
            <h3>📱 Responsive</h3>
            <p>Works perfectly on all devices and screen sizes</p>
        </div>
    </section>
    
    <footer id="contact">
        <p>&copy; 2025 MyApp. All rights reserved.</p>
    </footer>
</body>
</html>
