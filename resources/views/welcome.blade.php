<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="{{ asset('template/assets/css/animate.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('template/assets/bootstarp/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/super-classes.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/mobile.css') }}">
    <title>Folio flix | Home</title>
</head>

<body>
    <!---header-and-banner-section-->
    <div class="header-and-banner-con w-100 float-left position-relative">
        <div class="header-and-banner-inner-con">
            <header class="main-header">
                <!--navbar-start-->
                <div class="container pl-0 pr-0">
                    <div class="header-con">
                        <div class="max-con">
                            <nav class="navbar navbar-expand-lg navbar-light p-0">
                            <a class="navbar-brand p-0" href="/">
                                <img src="{{ asset('template/assets/image/logo-img.png') }}" alt="logo-img" class="img-fluid">
                            </a>
                            <button class="navbar-toggler p-0 collapsed" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active pl-0">
                                        <a class="nav-link p-0 is-active" href="#home">Home<span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link p-0" href="#service-con">Skills</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link p-0" href="#Portfolio">Portfolio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link p-0" href="#testimonials">Testimonials</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link p-0" href="#blog">Articles</a>
                                    </li>
                                </ul>
                                <div class="d-inline-block contact">
                                    <a href="#Contact">Contact</a>
                                </div>
                            </div>
                        </nav>
                        </div>
                    </div>
                </div>
                <!--navbar-end-->
            </header>
            <section class="banner-main-con" id="home">
                <div class="container pl-0 pr-0">
                    <!--banner-start-->
                    <div class="footer-social-icon banner-social-icon mb-0">
                        <ul class="mb-0 list-unstyled">
                            @if ($user->behance)
                                <li class="">
                                    <a href="{{ $user->behance }}" target="_blank"><i
                                            class="fab fa-behance d-flex align-items-center justify-content-center"></i></a>
                                </li>
                            @endif
                            @if ($user->dribbble)
                                <li class="mt-3 mb-3">
                                    <a href="{{ $user->dribbble }}" target="_blank"><i
                                            class="fab fa-dribbble d-flex align-items-center justify-content-center ml-0 mr-0 "></i></a>
                                </li>
                            @endif
                            @if ($user->linkedin)
                                <li class="">
                                    <a href="{{ $user->linkedin }}" target="_blank"><i
                                            class="fab fa-linkedin-in d-flex align-items-center justify-content-center"></i></a>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <div class="banner-con text-lg-left text-center">
                        <div class="row">
                            <div class="col-lg-7 col-sm-12 d-flex justify-content-center flex-column">
                                <div class="banner-left-con wow slideInLeft">
                                    <div class="banner-heading">
                                        <h2>Hello, I Am</h2>
                                        <ul class="dynamic-txts">
                                            <li>
                                                <h1>{{ $user->name }}</h1>
                                            </li>
                                           
                                        </ul>
                                        <p>{{ $user->bio ?? 'Welcome to my portfolio' }}<br>
                                            Professional designer and developer
                                        </p>
                                    </div>
                                    <div class="banner-btn generic-btn d-inline-block">
                                        <a href="#Contact">Hire Me</a>
                                    </div>
                                    <a href="#Portfolio" class="See-btn">See My Work</a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-12">
                                <div class="banner-right-con position-relative wow slideInRight" id="banner-right-con">
                                    <div class="hero-image-circle">
                                        <figure class="mb-0">
                                            @if ($user->photo)
                                                <img src="{{ asset('storage/' . $user->photo) }}" alt="{{ $user->name }}">
                                            @else
                                                <img src="{{ asset('template/assets/image/banner-right-img.png') }}" alt="banner-right-img">
                                            @endif
                                        </figure>
                                    </div>
                                    <div class="cursor"></div>
                                    <div class="cursor2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--banner-end-->
                </div>
            </section>
        </div>
    </div>
    <!---header-and-banner-section-->
    <!-- service section -->
    <section class="w-100 float-left service-con padding-top padding-bottom position-relative" id="service-con">
        <div class="container">
            <div class="service-inner-con position-relative">
                <div class="generic-title text-center">
                    <h6>My Skills</h6>
                    <h2 class="mb-0">Provide Wide Range of<br>
                        Digital Services
                    </h2>
                </div>
                <div class="service-box wow fadeInUp">
                    <div class="row">
                        @forelse ($skills as $index => $skill)
                            <div class="col-lg-6 col-md-6 {{ $index === count($skills) - 1 && count($skills) % 2 !== 0 ? 'mb-0' : '' }}">
                                <div class="service-box-item {{ $index === count($skills) - 1 ? 'mb-0' : '' }}">
                                    <figure class="mb-0">
                                        <i class="{{ $skill->icon ?? 'fas fa-code' }} d-flex align-items-center justify-content-center" style="font-size: 3rem; color: #4a90e2;"></i>
                                    </figure>
                                    <div class="service-box-item-content">
                                        <h4>{{ $skill->name }}</h4>
                                        <p>{{ substr(strip_tags($skill->description), 0, 80) }}{{ strlen(strip_tags($skill->description)) > 80 ? '...' : '' }}</p>
                                        <a href="#" data-toggle="modal" data-target="#skill-modal-{{ $index }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                            @if (($index + 1) % 2 === 0)
                </div>
                <div class="row {{ $index === count($skills) - 1 ? 'mb-0' : '' }}">
                            @endif
                        @empty
                            <div class="col-12">
                                <div class="alert alert-info">No skills added yet. <a href="/login">Login to add skills</a></div>
                            </div>
                        @endforelse
                        @if (count($skills) % 2 !== 0 && count($skills) > 0)
                </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service section -->
    <!-- portfolio section -->
    <section class="w-100 float-left portfolio-con padding-top" id="Portfolio">
        <div class="container">
            <div class="generic-title text-center">
                <h6 class="text-white">Creative Works</h6>
                <h2 class="mb-0 text-white">Check My Portfolio</h2>
            </div>
            <div id="myBtnContainer" class="text-center">
                <button class=" active active_button" onclick="filterSelection('all')"> All </button>
                @forelse ($projects->pluck('title')->unique()->take(4) as $title)
                    <button class="" onclick="filterSelection('{{ strtolower(str_replace(' ', '_', $title)) }}')">{{ $title }}</button>
                @empty
                    <button class="" onclick="filterSelection('products')">Skill</button>
                @endforelse
            </div>
        </div>
    </section>
    <!-- portfolio section -->
    <section class="w-100 float-left portfolio-body-con position-relative">
        <div class="container">
            <div class="portfolio-img-con position-relative w-100 float-left wow fadeInUp">
                @forelse ($projects as $project)
                    <div class="filterDiv all position-relative">
                        <a href="{{ $project->url ?? '#' }}" {{ $project->url ? 'target="_blank"' : '' }}>
                            <div class="portfolio-img position-relative">
                                <figure>
                                    @if ($project->image)
                                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="img-fluid">
                                    @else
                                        <img src="{{ asset('template/assets/image/portfolio-img1.png') }}" alt="{{ $project->title }}" class="img-fluid">
                                    @endif
                                </figure>
                            </div>
                        </a>
                        <div class="portfolio-img-content text-left">
                            <div class="portfolio-img-title d-inline-block">
                                <h4>{{ $project->title }}</h4>
                                <p>{{ substr(strip_tags($project->description), 0, 50) }}{{ strlen(strip_tags($project->description)) > 50 ? '...' : '' }}</p>
                            </div>
                            <a href="{{ $project->url ?? '#' }}" class="float-lg-right" {{ $project->url ? 'target="_blank"' : '' }}>
                                <i class="fas fa-arrow-right d-flex align-items-center justify-content-center"></i>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-info w-100">No projects yet. <a href="/login">Login to add projects</a></div>
                @endforelse
            </div>
        </div>
    </section>
                        </div>
                        <a href="#" class="float-lg-right" data-toggle="modal"
                            data-target="#modalporfolio5-icon"><i
                                class="fas fa-arrow-right d-flex align-items-center justify-content-center"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- portfolio section -->
    <!-- tastimonials section -->
    <section
        class="w-100 float-left padding-top padding-bottom tastimonials-con position-relative text-lg-left text-center"
        id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="tastimonials-left-con wow slideInLeft">
                        <figure class="mb-0">
                            <img src="{{ asset('template/assets/image/tastimonials-img.png') }}" alt="tastimonials-img" class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div id="carouselExampleControls" class="carousel slide wow slideInRight" data-ride="carousel">
                        <div class="carousel-inner">
                            @forelse ($reviews as $index => $review)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <div class="testimonials-content">
                                        <h6>Testimonials</h6>
                                        <h2>Happy Clients Feedback</h2>
                                        <figure class="mb-0">
                                            <img src="{{ asset('template/assets/image/comma-icon.png') }}" alt="comma-icon" class="img-fluid">
                                        </figure>
                                        <div class="testimonials-inner-content">
                                            <p>{{ $review->content }}</p>
                                            <span class="d-block auther-name">{{ $review->reviewer_name }}</span>
                                            <span class="d-block">{{ $review->reviewer_title ?? 'Client' }}</span>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="carousel-item active">
                                    <div class="testimonials-content">
                                        <h6>Testimonials</h6>
                                        <h2>Happy Clients Feedback</h2>
                                        <figure class="mb-0">
                                            <img src="{{ asset('template/assets/image/comma-icon.png') }}" alt="comma-icon" class="img-fluid">
                                        </figure>
                                        <div class="testimonials-inner-content">
                                            <p>No testimonials yet. <a href="/login">Login to add reviews</a></p>
                                            <span class="d-block auther-name">John Doe</span>
                                            <span class="d-block">Client</span>
                                        </div>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <i class="fas fa-arrow-left d-flex align-items-center justify-content-center"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <i class="fas fa-arrow-right d-flex align-items-center justify-content-center"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tastimonials section -->
    <!-- blog section -->
    <section class="w-100 float-left blog-con padding-top padding-bottom position-relative" id="blog">
        <div class="container">
            <div class="blog-inner-con position-relative">
                <div class="generic-title text-center">
                    <h6>Latest News</h6>
                    <h2 class="mb-0">Blog & Articles</h2>
                </div>
                <div class="blog-box wow fadeInUp">
                    <div class="row">
                        @forelse ($articles as $article)
                            <div class="col-lg-4">
                                <div class="blog-box-item">
                                    <div class="blog-img">
                                        <a href="{{ $article->external_link ?? '#' }}" {{ $article->external_link ? 'target="_blank"' : '' }}>
                                            <figure class="mb-0">
                                                @if ($article->featured_image)
                                                    <img src="{{ $article->featured_image }}" alt="{{ $article->title }}" class="img-fluid">
                                                @else
                                                    <img src="{{ asset('template/assets/image/blog-img-1.png') }}" alt="{{ $article->title }}" class="img-fluid">
                                                @endif
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-auteher-title">
                                            <span>{{ $article->source ?? 'Article' }}</span>
                                            <span class="float-lg-right">{{ $article->publication_date ? $article->publication_date->format('M d, Y') : $article->created_at->format('M d, Y') }}</span>
                                        </div>
                                        <a href="{{ $article->external_link ?? '#' }}" {{ $article->external_link ? 'target="_blank"' : '' }}>
                                            <h4>{{ $article->title }}</h4>
                                        </a>
                                        <p>{{ substr(strip_tags($article->content), 0, 100) }}{{ strlen(strip_tags($article->content)) > 100 ? '...' : '' }}</p>
                                        <a href="{{ $article->external_link ?? '#' }}" {{ $article->external_link ? 'target="_blank"' : '' }}>Read More</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12">
                                <div class="alert alert-info text-center">No articles yet. <a href="/login">Login to add articles</a></div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section -->
    <!-- form section -->
    <section class="w-100 float-left form-main-con padding-top padding-bottom" id="Contact">
        <div class="container">
            <div class="form-main-inner-con position-relative">
                <div class="generic-title text-center">
                    <h6>Get in Touch</h6>
                    <h2 class="mb-0">Any Questions? Feel Free<br>
                        to Contact
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 order-lg-0 order-2">
                        <div class="contact-information position-relative wow slideInLeft">
                            <ul class="list-unstyled">
                                <li>
                                    <figure class="mb-0 d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('template/assets/image/location-icon.png') }}" alt="location-icon"
                                            class="img-fluid">
                                    </figure>
                                    <div class="contact-information-content">
                                        <h5>Address:</h5>
                                        <p class="mb-0">{{ $user->address ?? 'Contact for address information' }}</p>
                                    </div>
                                </li>
                                <li>
                                    <figure class="mb-0 d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('template/assets/image/message-icon.png') }}" alt="message-icon"
                                            class="img-fluid">
                                    </figure>
                                    <div class="contact-information-content">
                                        <h5>Email:</h5>
                                        <p class="mb-0">{{ $user->contact_email ?? $user->email }}</p>
                                        @if ($user->email && $user->contact_email && $user->contact_email !== $user->email)
                                            <p class="mb-0">{{ $user->email }}</p>
                                        @endif
                                    </div>
                                </li>
                                <li class="mb-0">
                                    <figure class="mb-0 d-flex align-items-center justify-content-center">
                                        <img src="{{ asset('template/assets/image/phone-icon.png') }}" alt="phone-icon" class="img-fluid">
                                    </figure>
                                    <div class="contact-information-content">
                                        <h5>Phone:</h5>
                                        <p class="mb-0">{{ $user->phone1 ?? '+1 (555) 000-0000' }}</p>
                                        @if ($user->phone2)
                                            <p class="mb-0">{{ $user->phone2 }}</p>
                                        @endif
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div id="form_result">

                        </div>

                        <form id= "contactpage" method="POST"
                            class="contact-form wow slideInRight text-lg-left text-center">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group mb-0">
                                        <input type="text" placeholder="Name" name="name" id="name"
                                            autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group mb-0">
                                        <input type="email" id="emailHelp" name="emailHelp" placeholder="Email"
                                            autocomplete="off" required>
                                        <small class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group mb-0">
                                        <input type="tel" placeholder="Phone" name="phone" id="phone"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group mb-0">
                                        <input type="text" name="subject" placeholder="Subject" id="subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class=" form-group mb-0">
                                        <textarea placeholder="Message" rows="3" name="comments" id="comments"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" id="submit" class="appointment-btn">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- form section -->
    <!-- weight footer section -->
    <div class="w-100 float-left weight-footer-con position-relative">
        <div class="container">
            <div class="weight-footer-content text-center wow fadeInUp">
                <figure class="">
                    <img src="{{ asset('template/assets/image/footer-logo.png') }}" alt="footer-logo" class="img-fluid">
                </figure>
                <div class="footer-navbar">
                    <ul class="list-unstyled">
                        <li class="d-inline-block border-left-0 pl-0"><a href="#home">Home</a></li>
                        <li class="d-inline-block"><a href="#service-con">Skills</a></li>
                        <li class="d-inline-block"><a href="#Portfolio">Portfolio</a></li>
                        <li class="d-inline-block"><a href="#testimonials">Testimonials</a></li>
                        <li class="d-inline-block"><a href="#blog">Articles</a></li>
                        <li class="d-inline-block pr-0"><a href="#Contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-social-icon">
                    <ul class="mb-0">
                        @if ($user->behance)
                            <li class="d-inline-block">
                                <a href="{{ $user->behance }}" target="_blank"><i
                                        class="fab fa-behance d-flex align-items-center justify-content-center"></i></a>
                            </li>
                        @endif
                        @if ($user->dribbble)
                            <li class="d-inline-block">
                                <a href="{{ $user->dribbble }}" target="_blank"><i
                                        class="fab fa-dribbble d-flex align-items-center justify-content-center"></i></a>
                            </li>
                        @endif
                        @if ($user->linkedin)
                            <li class="d-inline-block">
                                <a href="{{ $user->linkedin }}" target="_blank"><i
                                        class="fab fa-linkedin-in d-flex align-items-center justify-content-center"></i></a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="copy-right-content text-center">
                <p class="mb-0">Made with <i class="fas fa-heart" style="color: #e74c3c;"></i> by <a href="https://leknoucheaymen.com" target="_blank" style="color: #4a90e2; text-decoration: none;">Aymen Leknouche</a></p>
            </div>
        </div>
    </div>
    <a id="button"></a>
    <div id="modalWPWAF" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="far fa-times"></i></span></button>
                </div>
                <div class="modal-body service-model-content">
                    <figure class="mb-0">
                        <img src="{{ asset('template/assets/image/portfolio-model-img1.jfif') }}" alt="portfolio-model-img1"
                            class="img-fluid">
                    </figure>
                    <h4>Application UI Design</h4>
                    <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                        only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release .</p>
                    <ul class="list-unstyled model-list mb-md-3 mb-2">
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                    </ul>
                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when
                        an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="modalWPWAF-icon" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="far fa-times"></i></span></button>
                </div>
                <div class="modal-body service-model-content">
                    <figure class="mb-0">
                        <img src="{{ asset('template/assets/image/portfolio-model-img1.jfif') }}" alt="portfolio-model-img1"
                            class="img-fluid">
                    </figure>
                    <h4>Application UI Design</h4>
                    <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                        only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release .</p>
                    <ul class="list-unstyled model-list mb-md-3 mb-2">
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                    </ul>
                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when
                        an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="modalporfolio2" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="far fa-times"></i></span></button>
                </div>
                <div class="modal-body service-model-content">
                    <figure class="mb-0">
                        <img src="{{ asset('template/assets/image/portfolio-model-img2.jfif') }}" alt="portfolio-model-img1"
                            class="img-fluid">
                    </figure>
                    <h4>Furni furniture UI Design</h4>
                    <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                        only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release .</p>
                    <ul class="list-unstyled model-list mb-md-3 mb-2">
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                    </ul>
                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when
                        an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="modalporfolio2-icon" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="far fa-times"></i></span></button>
                </div>
                <div class="modal-body service-model-content">
                    <figure class="mb-0">
                        <img src="{{ asset('template/assets/image/portfolio-model-img2.jfif') }}" alt="portfolio-model-img1"
                            class="img-fluid">
                    </figure>
                    <h4>Furni furniture UI Design</h4>
                    <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                        only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release .</p>
                    <ul class="list-unstyled model-list mb-md-3 mb-2">
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                    </ul>
                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when
                        an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="modalporfolio3" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="far fa-times"></i></span></button>
                </div>
                <div class="modal-body service-model-content">
                    <figure class="mb-0">
                        <img src="assets/image/portfolio-model-img3.jfif" alt="portfolio-model-img1"
                            class="img-fluid">
                    </figure>
                    <h4>Mobile UI Design</h4>
                    <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                        only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release .</p>
                    <ul class="list-unstyled model-list mb-md-3 mb-2">
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                    </ul>
                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when
                        an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="modalporfolio3-icon" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="far fa-times"></i></span></button>
                </div>
                <div class="modal-body service-model-content">
                    <figure class="mb-0">
                        <img src="assets/image/portfolio-model-img3.jfif" alt="portfolio-model-img1"
                            class="img-fluid">
                    </figure>
                    <h4>Mobile UI Design</h4>
                    <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                        only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release .</p>
                    <ul class="list-unstyled model-list mb-md-3 mb-2">
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                    </ul>
                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when
                        an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="modalporfolio4" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="far fa-times"></i></span></button>
                </div>
                <div class="modal-body service-model-content">
                    <figure class="mb-0">
                        <img src="assets/image/portfolio-model-img4.jfif" alt="portfolio-model-img1"
                            class="img-fluid">
                    </figure>
                    <h4>Businesscard UI Design</h4>
                    <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                        only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release .</p>
                    <ul class="list-unstyled model-list mb-md-3 mb-2">
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                    </ul>
                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when
                        an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="modalporfolio4-icon" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="far fa-times"></i></span></button>
                </div>
                <div class="modal-body service-model-content">
                    <figure class="mb-0">
                        <img src="assets/image/portfolio-model-img4.jfif" alt="portfolio-model-img1"
                            class="img-fluid">
                    </figure>
                    <h4>Businesscard UI Design</h4>
                    <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                        only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release .</p>
                    <ul class="list-unstyled model-list mb-md-3 mb-2">
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                    </ul>
                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when
                        an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="modalporfolio5" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="far fa-times"></i></span></button>
                </div>
                <div class="modal-body service-model-content">
                    <figure class="mb-0">
                        <img src="{{ asset('template/assets/image/portfolio-model-img5.png') }}" alt="portfolio-model-img1"
                            class="img-fluid">
                    </figure>
                    <h4>Real estate UI Design</h4>
                    <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                        took a galley of type and scrambled it to make a type specimen book. It has survived not only
                        five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        It was popularised in the 1960s with the release .</p>
                    <ul class="list-unstyled model-list mb-md-3 mb-2">
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                    </ul>
                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when
                        an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="modalporfolio5-icon" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="far fa-times"></i></span></button>
                </div>
                <div class="modal-body service-model-content">
                    <figure class="mb-0">
                        <img src="{{ asset('template/assets/image/portfolio-model-img5.jfif') }}" alt="portfolio-model-img1"
                            class="img-fluid">
                    </figure>
                    <h4>Real estate UI Design</h4>
                    <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                        only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release .</p>
                    <ul class="list-unstyled model-list mb-md-3 mb-2">
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                    </ul>
                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when
                        an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="Ui-Design" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="far fa-times"></i></span></button>
                </div>
                <div class="modal-body service-model-content">
                    <figure class="mb-0">
                        <img src="{{ asset('template/assets/image/ui-ux-model-img.jpg') }}" alt="ui-ux-model-img" class="img-fluid">
                    </figure>
                    <h4>Ui/Ux Design</h4>
                    <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <ul class="list-unstyled model-list mb-md-3 mb-2">
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                    </ul>
                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when
                        an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="web-design" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="far fa-times"></i></span></button>
                </div>
                <div class="modal-body service-model-content">
                    <figure class="mb-0">
                        <img src="{{ asset('template/assets/image/web-designer-model-img.jpg') }}" alt="web-designer-model-img"
                            class="img-fluid">
                    </figure>
                    <h4>Web Design</h4>
                    <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <ul class="list-unstyled model-list mb-md-3 mb-2">
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                    </ul>
                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when
                        an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="web-development" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="far fa-times"></i></span></button>
                </div>
                <div class="modal-body service-model-content">
                    <figure class="mb-0">
                        <img src="{{ asset('template/assets/image/web-development-model-img.jpg') }}" alt="web-development-model-img"
                            class="img-fluid">
                    </figure>
                    <h4>Web Development</h4>
                    <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <ul class="list-unstyled model-list mb-md-3 mb-2">
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                    </ul>
                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when
                        an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="app-development" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="far fa-times"></i></span></button>
                </div>
                <div class="modal-body service-model-content">
                    <figure class="mb-0">
                        <img src="{{ asset('template/assets/image/App-development-model-img.JPG') }}" alt="App-development-model-img"
                            class="img-fluid">
                    </figure>
                    <h4>App Development</h4>
                    <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <ul class="list-unstyled model-list mb-md-3 mb-2">
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                        <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry</li>
                    </ul>
                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when
                        an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
    </div>
    <div id="blog-model-1" class="modal fade blog-model-con" tabindex="-1" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="far fa-times"></i></span></button>
                </div>
                <div class="modal-body">
                    <div class="blog-box-item mb-0">
                        <div class="blog-img">
                            <figure class="mb-0">
                                <img src="assets/image/blog-model-img1.png" alt="blog-img" class="img-fluid">
                            </figure>
                        </div>
                        <div class="blog-content pl-0 pr-0">
                            <div class="blog-auteher-title">
                                <span>By Elina Parker</span>
                                <span class="float-lg-right">Mar 8, 2022</span>
                            </div>
                            <h4>Quis autem vea eum
                                iure reprehenderit
                            </h4>
                            <div class="footer-social-icon mb-0">
                                <ul>
                                    <li class="d-inline-block">
                                        <a href="https://www.behance.net/"><i
                                                class="fab fa-behance d-flex align-items-center justify-content-center"></i></a>
                                    </li>
                                    <li class="d-inline-block">
                                        <a href="https://dribbble.com/"><i
                                                class="fab fa-dribbble d-flex align-items-center justify-content-center"></i></a>
                                    </li>
                                    <li class="d-inline-block">
                                        <a href="https://www.linkedin.com/"><i
                                                class="fab fa-linkedin-in d-flex align-items-center justify-content-center"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <p class="mb-md-4 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                                tempor eros a tellus auctor, nec suscipit nunc dignissim. Ut suscipit gravida augue sed
                                elementum. Sed sed luctus nisl. Donec scelerisque nisi in sodales mattis. Vestibulum
                                suscipit odio ac enim blandit sollicitudin. Aliquam ultrices sem quis urna placerat
                                interdum. Etiam rutrum, quam sagittis tristique mollis, libero arcu scelerisque erat,
                                eget tincidunt eros diam quis nunc.</p>
                            <h4 class="comment-title">LEAVE A COMMENT</h4>
                            <form class="contact-form blog-model-form">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group mb-0">
                                            <input type="text" placeholder="Name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group mb-0">
                                            <input type="email" placeholder="Email">
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group mb-0">
                                            <input type="tel" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group mb-0">
                                            <input type="text" placeholder="Subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class=" form-group mb-0">
                                            <textarea placeholder="Message" rows="3" name="comments"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="appointment-btn">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="blog-model-2" class="modal fade blog-model-con" tabindex="-1" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="far fa-times"></i></span></button>
                </div>
                <div class="modal-body">
                    <div class="blog-box-item mb-0">
                        <div class="blog-img">
                            <figure class="mb-0">
                                <img src="assets/image/blog-model-img2.png" alt="blog-img" class="img-fluid">
                            </figure>
                        </div>
                        <div class="blog-content pl-0 pr-0">
                            <div class="blog-auteher-title">
                                <span>By Elina Parker</span>
                                <span class="float-lg-right">Mar 9, 2022</span>
                            </div>
                            <h4>Reprehenderit in vouta
                                velit esse cillum
                            </h4>
                            <div class="footer-social-icon mb-0">
                                <ul>
                                    <li class="d-inline-block">
                                        <a href="https://www.behance.net/"><i
                                                class="fab fa-behance d-flex align-items-center justify-content-center"></i></a>
                                    </li>
                                    <li class="d-inline-block">
                                        <a href="https://dribbble.com/"><i
                                                class="fab fa-dribbble d-flex align-items-center justify-content-center"></i></a>
                                    </li>
                                    <li class="d-inline-block">
                                        <a href="https://www.linkedin.com/"><i
                                                class="fab fa-linkedin-in d-flex align-items-center justify-content-center"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <p class="mb-md-4 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                                tempor eros a tellus auctor, nec suscipit nunc dignissim. Ut suscipit gravida augue sed
                                elementum. Sed sed luctus nisl. Donec scelerisque nisi in sodales mattis. Vestibulum
                                suscipit odio ac enim blandit sollicitudin. Aliquam ultrices sem quis urna placerat
                                interdum. Etiam rutrum, quam sagittis tristique mollis, libero arcu scelerisque erat,
                                eget tincidunt eros diam quis nunc.</p>
                            <h4 class="comment-title">LEAVE A COMMENT</h4>
                            <form class="contact-form blog-model-form">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group mb-0">
                                            <input type="text" placeholder="Name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group mb-0">
                                            <input type="email" placeholder="Email">
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group mb-0">
                                            <input type="tel" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group mb-0">
                                            <input type="text" placeholder="Subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class=" form-group mb-0">
                                            <textarea placeholder="Message" rows="3" name="comments"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="appointment-btn">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="blog-model-3" class="modal fade blog-model-con" tabindex="-1" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="far fa-times"></i></span></button>
                </div>
                <div class="modal-body">
                    <div class="blog-box-item mb-0">
                        <div class="blog-img">
                            <figure class="mb-0">
                                <img src="assets/image/blog-model-img1.png" alt="blog-img" class="img-fluid">
                            </figure>
                        </div>
                        <div class="blog-content pl-0 pr-0">
                            <div class="blog-auteher-title">
                                <span>By Elina Parker</span>
                                <span class="float-lg-right">Mar 10, 2022</span>
                            </div>
                            <h4>Soluta nobis ose aligen
                                optio cumue
                            </h4>
                            <div class="footer-social-icon mb-0">
                                <ul>
                                    <li class="d-inline-block">
                                        <a href="https://www.behance.net/"><i
                                                class="fab fa-behance d-flex align-items-center justify-content-center"></i></a>
                                    </li>
                                    <li class="d-inline-block">
                                        <a href="https://dribbble.com/"><i
                                                class="fab fa-dribbble d-flex align-items-center justify-content-center"></i></a>
                                    </li>
                                    <li class="d-inline-block">
                                        <a href="https://www.linkedin.com/"><i
                                                class="fab fa-linkedin-in d-flex align-items-center justify-content-center"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <p class="mb-md-4 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                                tempor eros a tellus auctor, nec suscipit nunc dignissim. Ut suscipit gravida augue sed
                                elementum. Sed sed luctus nisl. Donec scelerisque nisi in sodales mattis. Vestibulum
                                suscipit odio ac enim blandit sollicitudin. Aliquam ultrices sem quis urna placerat
                                interdum. Etiam rutrum, quam sagittis tristique mollis, libero arcu scelerisque erat,
                                eget tincidunt eros diam quis nunc.</p>
                            <h4 class="comment-title">LEAVE A COMMENT</h4>
                            <form class="contact-form blog-model-form">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group mb-0">
                                            <input type="text" placeholder="Name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group mb-0">
                                            <input type="email" placeholder="Email">
                                            <small class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group mb-0">
                                            <input type="tel" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group mb-0">
                                            <input type="text" placeholder="Subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class=" form-group mb-0">
                                            <textarea placeholder="Message" rows="3" name="comments"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="appointment-btn">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- weight footer section -->
    <script src="{{ asset('template/assets/js/wow.js') }}"></script>
    <script>
        new WOW().init();
    </script>
    <script src="{{ asset('template/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src=" https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
    <script src="{{ asset('template/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/custom-script.js') }}"></script>
    <script src="{{ asset('template/assets/js/contact-form.js') }}"></script>
    <script>
        filterSelection("all")

        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("filterDiv");
            if (c == "all") c = "";
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
        }

        function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                }
            }
        }

        function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }

        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>
    <script>
        var btn = $('#button');

        $(window).scroll(function() {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
        });

        btn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, '300');
        });
    </script>
    <script>
        $(window).scroll(function() {

            if ($(window).scrollTop() >= 113) {

                $('header').addClass('fixed-header');
                $('.banner-main-con').addClass('banner-main-con2');

            } else {

                $('header').removeClass('fixed-header');
                $('.banner-main-con').removeClass('banner-main-con2');

            }

        });
    </script>
    <script>
        document.querySelectorAll('.nav-item a').forEach(function(link, index) {

            link.addEventListener('click', function() {

                if (this.classList.contains('is-active')) {

                    this.classList.remove('is-active');

                } else {

                    const activeLink = document.querySelector('a.is-active'); // **

                    if (activeLink) { // **

                        activeLink.classList.remove('is-active'); // **

                    } // **

                    this.classList.add('is-active');

                }

            });

        });

        document.querySelectorAll('#myBtnContainer button').forEach(function(link, index) {

            link.addEventListener('click', function() {

                if (this.classList.contains('active_button')) {

                    this.classList.remove('active_button');

                } else {

                    const activeLink = document.querySelector('#myBtnContainer button.active_button'); // **

                    if (activeLink) { // **

                        activeLink.classList.remove('active_button'); // **

                    } // **

                    this.classList.add('active_button');

                }

            });

        });
    </script>
    <script>
        function downloadImage() {
            source = '{{ asset("template/assets/image/cv-img.jpg") }}';
            const fileName = 'test-image.png';
            var el = document.createElement("a");
            el.setAttribute("href", source);
            el.setAttribute("download", fileName);
            document.body.appendChild(el);
            el.click();
            el.remove();
        }
    </script>
</body>

</html>
