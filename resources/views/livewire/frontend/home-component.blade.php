<div>
     <!----portfolio.header.section---->
    <nav class="navbar navbar-expand-lg navbarBackground">
        <div class="container">
            <a href="#home" class="navbar-brand">{{ $setting->logo_name ?? "A.E" }}</a>

            <!----nav links for desktop view---->
            <div class="col-md-6 col-lg-6 col-xl-6 collapse navbar-collapse justify-content-center align-items-center">
                <ul class="navbar-nav navLists">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skill</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-project" href="#project">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-project" href="#github">github</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-contact" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3 d-flex justify-content-end align-items-end">
                <a href="{{ asset('uploads/'.$setting?->resume) ?? asset('dist/pdf/limon-resume.pdf') }}" class="btn btn-outline-danger sayHi" download="limon-resume.pdf">download
                    cv</a>
            </div>
            <!----offcanvas toggle button for mobile menu---->
            <a class="btn navbar-toggler" id="toggleBtn" data-bs-toggle="offcanvas" href="#offcanvasNavbar"
                role="button" aria-controls="offcanvasExample">
                <span class="icon-bars"></span>
            </a>

            <!----site navigation for mobile menu---->

            <div class="offcanvas offcanvas-start offNav" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header offcanvas_header navbar-brand">
                    <a href="#home" class="offcanvas-title" style="font-size: 30px; font-weight: bold; color: #C4CFDE;"
                        id="offcanvasNavbarLabel">A.E</a>
                    <a class=" offcanvas_none" style="color:white" data-bs-dismiss="offcanvas" aria-label="Close">
                        <span class="icon-xmark"></span>
                    </a>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav offcanvas_nav">
                        <li class="nav-item">
                            <a href="#home" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#skills" class="nav-link">Skill</a>
                        </li>
                        <li class="nav-item">
                            <a href="#services" class="nav-link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#project" class="nav-link">Project</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div style="width: 100%;overflow: hidden;">
        <header>
            <!----header bottom section---->
            <div id="header_bottom_wrapper" class="p-5 overflow-hidden">
                <div class="container">
                    <div class="col-lg-6 col-xl-6 float-start">
                        <div data-aos="fade-right" data-aos-delay="200">
                            <p class="welcome_text text-uppercase">{{ $hero->title ?? '' }}</p>
                            <h1 class="title">
                                {{ $hero->greetings ?? '' }} <span class="title_color">{{ $hero->name ?? '' }}</span>
                            </h1>
                            <h3 class="text_random">
                                <span>a</span>
                                <div class="banner-sub-heading">
                                    <h1 class="animated_text">
                                        <span class="typewrite" data-period="2000"
                                            data-type='{{ json_encode(explode(',',$hero->rand_text)) ?? 'Nothing Found' }} '>
                                            <span class="wrap"></span>
                                        </span>
                                    </h1>
                                </div>
                            </h3>
                            <div class="short_intro " data-aos="fade-up" data-aos-delay="400">
                                {!! $hero->description ?? '' !!}
                            </div>
                        </div>
                        <!----social media icon---->
                        <p class="welcome_text text-uppercase" data-aos="fade-up" data-aos-delay="200">Find with me.</p>
                        <div class="social_icon d-flex justify-content-start align-items-start" data-aos="fade-up"
                            data-aos-delay="600">
                            <a href="{{ $hero->facebook ?? '' }}" target="_blank"
                                class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-facebook-f"></span>
                            </a>
                            <a href="{{ $hero->github ?? '' }}" target="_blank"
                                class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-github"></span>
                            </a>
                            <a href="{{ $hero->linkedin ?? '' }}" target="_blank"
                                class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-linkedin-in"></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 d-flex justify-content-end pic_main" data-aos="fade-left"
                        data-aos-delay="200">
                        <div class="pic_wrapper d-flex justify-content-center" style="background-image: url({{ asset('uploads/'.$hero->image ?? '') }});">

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!---- -/ portfolio.header.section---->
        <!----about me and more---->
        <section id="about" class="allSection">
            <div class="container">
                <div class="p-5 Wrapper">
                    <div data-aos="fade-up" data-aos-delay="200"
                        class="text-center Title d-flex align-items-center justify-content-center mb-lg-4">
                        <h2 class="border_design">
                            ABOUT ME
                        </h2>
                    </div>
                    <div class="flex-wrap d-flex">
                        <!------about left----->
                        <div data-aos="fade-right" data-aos-delay="400"
                            class="aboutLeft col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-center">
                            <div class="overflow-hidden text-center aboutImg">
                                <img src="{{ asset('uploads/'.$about?->image ?? '') }}" class="about_img" alt="emon.me">
                            </div>
                        </div>
                        <!------about right----->
                        <div data-aos="fade-left" data-aos-delay="500"
                            class="aboutRight col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="aboutText">
                                {!! $about->description ?? '' !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---- -/ about me and more---->
        <!----skills ---->
        <section id="skills" class="allSection">
            <div class="container">
                <div class="p-5 overflow-hidden Wrapper">
                    <div data-aos="fade-left" data-aos-delay="200"
                        class="text-center Title d-flex align-items-center justify-content-center mb-lg-4">
                        <h2 class="border_design">
                            SKILLS
                        </h2>
                    </div>
                    <div class="contentWrapper">
                        <div data-aos="fade-up" data-aos-delay="300"
                            class=" col-xl-3 col-lg-3 col-md-6 col-sm-12 float-start">
                            <div class="cardBlock">
                                <div class="card_body">
                                    <div class="d-flex align-items-center justify-content-center flex-column">
                                        <div class="mainIcon">
                                            <span class="icon-laravel"></span>
                                        </div>
                                        <p class="iconTitle">
                                            Laravel
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="350"
                            class=" col-xl-3 col-lg-3 col-md-6 col-sm-12 float-start">
                            <div class="cardBlock">
                                <div class="card_body">
                                    <div class="d-flex align-items-center justify-content-center flex-column">
                                        <div class="mainIcon mainIcon1">
                                            <span class="icon-php"></span>
                                        </div>
                                        <p class="iconTitle">
                                            PHP
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="400"
                            class=" col-xl-3 col-lg-3 col-md-6 col-sm-12 float-start">
                            <div class="cardBlock">
                                <div class="card_body">
                                    <div class="d-flex align-items-center justify-content-center flex-column">
                                        <div class="mainIcon mainIcon2">
                                            <span class="icon-mysql"></span>
                                        </div>
                                        <p class="iconTitle">
                                            MySql
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="450"
                            class=" col-xl-3 col-lg-3 col-md-6 col-sm-12 float-start">
                            <div class="cardBlock">
                                <div class="card_body">
                                    <div class="d-flex align-items-center justify-content-center flex-column">
                                        <div class="mainIcon mainIcon3">
                                            <span class="icon-js"></span>
                                        </div>
                                        <p class="iconTitle">
                                            Javascript
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="500"
                            class=" col-xl-3 col-lg-3 col-md-6 col-sm-12 float-start">
                            <div class="cardBlock">
                                <div class="card_body">
                                    <div class="d-flex align-items-center justify-content-center flex-column">
                                        <div class="mainIcon mainIcon4">
                                            <span class="icon-html5"></span>
                                        </div>
                                        <p class="iconTitle">
                                            HTML
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="550"
                            class=" col-xl-3 col-lg-3 col-md-6 col-sm-12 float-start">
                            <div class="cardBlock">
                                <div class="card_body">
                                    <div class="d-flex align-items-center justify-content-center flex-column">
                                        <div class="mainIcon mainIcon5">
                                            <span class="icon-css3-alt"></span>
                                        </div>
                                        <p class="iconTitle">
                                            CSS
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="600"
                            class=" col-xl-3 col-lg-3 col-md-6 col-sm-12 float-start">
                            <div class="cardBlock">
                                <div class="card_body">
                                    <div class="d-flex align-items-center justify-content-center flex-column">
                                        <div class="mainIcon mainIcon6">
                                            <span class="icon-bootstrap"></span>
                                        </div>
                                        <p class="iconTitle">
                                            Bootstrap
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="650"
                            class=" col-xl-3 col-lg-3 col-md-6 col-sm-12 float-start">
                            <div class="cardBlock">
                                <div class="card_body">
                                    <div class="d-flex align-items-center justify-content-center flex-column">
                                        <div class="mainIcon mainIcon7">
                                            <span class="icon-livewire">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
                                                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                </svg>
                                            </span>

                                        </div>
                                        <p class="iconTitle">
                                            Livewire
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---- -/ skills ---->
        <!----what i do---->
        <section id="services" class="allSection">
            <div class="container">
                <div class="p-5 overflow-hidden Wrapper">
                    <div data-aos="fade-right" data-aos-delay="200"
                        class="text-center Title d-flex align-items-center justify-content-center mb-lg-4">
                        <h2 class="border_design text-uppercase">
                            What I Do
                        </h2>
                    </div>
                    <div class="contentWrapper">
                        <div data-aos="fade-up" data-aos-delay="300"
                            class=" col-xl-4 col-lg-4 col-md-6 col-sm-12 float-start">
                            <div class="cardBlock">
                                <div class="card_body">
                                    <div class="d-flex align-items-center justify-content-center flex-column">
                                        <div class="mainIcon">
                                            <span class="icon-mobile"></span>
                                        </div>
                                        <p class="iconTitle">
                                            Web Development
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="350"
                            class=" col-xl-4 col-lg-4 col-md-6 col-sm-12 float-start">
                            <div class="cardBlock">
                                <div class="card_body">
                                    <div class="d-flex align-items-center justify-content-center flex-column">
                                        <div class="mainIcon mainIcon1">
                                            <span class="icon-book-open"></span>
                                        </div>
                                        <p class="iconTitle">
                                            Web Design
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="400"
                            class=" col-xl-4 col-lg-4 col-md-6 col-sm-12 float-start">
                            <div class="cardBlock">
                                <div class="card_body">
                                    <div class="d-flex align-items-center justify-content-center flex-column">
                                        <div class="mainIcon mainIcon2">
                                            <span class="icon-code"></span>
                                        </div>
                                        <p class="iconTitle">
                                            Programming
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="450"
                            class=" col-xl-4 col-lg-4 col-md-6 col-sm-12 float-start">
                            <div class="cardBlock">
                                <div class="card_body">
                                    <div class="d-flex align-items-center justify-content-center flex-column">
                                        <div class="mainIcon mainIcon3">
                                            <span class="icon-searchengin"></span>
                                        </div>
                                        <p class="iconTitle">
                                            SEO
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="500"
                            class=" col-xl-4 col-lg-4 col-md-6 col-sm-12 float-start">
                            <div class="cardBlock">
                                <div class="card_body">
                                    <div class="d-flex align-items-center justify-content-center flex-column">
                                        <div class="mainIcon mainIcon4">
                                            <span class="icon-notify"></span>
                                        </div>
                                        <p class="iconTitle">
                                            Digital Marketing
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="550"
                            class=" col-xl-4 col-lg-4 col-md-6 col-sm-12 float-start">
                            <div class="cardBlock">
                                <div class="card_body">
                                    <div class="d-flex align-items-center justify-content-center flex-column">
                                        <div class="mainIcon mainIcon5">
                                            <span class="icon-database"></span>
                                        </div>
                                        <p class="iconTitle">
                                            Database Management
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-----/ what i do---->
        <!-----projects---->
        <section id="project" class="allSection">
            <div class="container">
                <div class="p-5 Wrapper">
                    <div data-aos="fade-up" data-aos-delay="200"
                        class="text-center Title d-flex align-items-center justify-content-center mb-lg-4">
                        <h2 class="border_design">
                            PROJECTS
                        </h2>
                    </div>
                    <div class="projectWrapper" id="tabs">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <ul class="text-center box_filter" data-aos="fade-right" data-aos-delay="200">
                                    <li class="mt-1 box_control mixitup-control-active btn " data-filter="*">All</li>
                                    @foreach ($project_cat as $category)
                                        <li class="mt-1 box_control btn " data-filter=".{{ $category->slug }}">{{ $category->name ?? "category name" }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="row box_list">
                            @forelse ($projects as $project)
                                <div class="col-md-4 mix {{ $project->category->slug }}">
                                    <a href="{{ $project->link ?? "#" }}" class="box_item_img d-block">
                                        <img src="{{ asset('uploads/'.$project?->image) }}" class="img-fluid" alt="project-1">
                                        <div class="box_item_overlay">
                                            <div class="box_item_text">
                                                <h4>{{ $project->title ?? "project title" }}</h4>
                                                <p><i class="fa-solid fa-link"></i></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @empty
                                <h5 class="text-center text-danger">No project found :)</h5>
                            @endforelse
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-----/ projects---->
        <!-----testimonial---->
        <section id="testimonial" class="allSection">
            <div class="container">
                <div class="p-5 Wrapper">
                    <div data-aos="fade-up" data-aos-delay="200"
                        class="text-center Title d-flex align-items-center justify-content-center mb-lg-4">
                        <h2 class="border_design">
                            TESTIMONIAL
                        </h2>
                    </div>
                    <div class="testimonial_wrapper" >
                        <div class="slick_carousel">
                            @forelse ($testimonials as $testimonial)
                                <div class="text-center slick_item" data-aos="fade-up" data-aos-delay="300">
                                    <div class="slick_inner col-md-6 col-lg-6 col-xl-6 col-sm-12 col-12">
                                        <div class="item_top">
                                            <h5 class="client_title fs-2">My Client</h5>
                                            <h4 class="feedback">
                                                Valuable Feedback
                                            </h4>
                                        </div>
                                        <div class="item_btm">
                                            <div class="testi_card">
                                                <div class="testi_img">
                                                    <img src="{{ asset('uploads/'.$testimonial?->image) }}" alt="business">
                                                </div>
                                                <div class="testi_content">
                                                    <div class="text-left client">
                                                        <h5>{{ $testimonial->name ?? "client name" }}</h5>
                                                        <p class="client_designation">
                                                            {{ $testimonial->designation ?? "client designation" }}
                                                        </p>
                                                    </div>
                                                    <div class="client_review">
                                                        <div class="mb-2 review_star">
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                            <i class="fa-solid fa-star"></i>
                                                        </div>
                                                        <p>
                                                            <i class="fa-solid fa-quote-left"></i>
                                                            {{ $testimonial->description ?? "client feedback" }}
                                                            <i class="fa-solid fa-quote-right"></i>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <h5 class="text-center text-danger">No Testimonials Found :)</h5>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-----/ testimonial ---->
        <!-----github statistics---->
        <section id="github" class="allSection">
            <div class="container">
                <div class="p-5 Wrapper">
                    <div data-aos="fade-left"
                        class="text-center Title d-flex align-items-center justify-content-center mb-lg-4">
                        <h2 class="border_design">
                            GITHUB STATISTICS
                        </h2>
                    </div>
                    <div class="row">
                        <div class="box_shadow" style="background: #20232A">
                            <div data-aos="fade-up"
                                class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <!---------github graph--------->
                                <div class="d-flex align-items-center justify-content-center github_streak"
                                    style="background: #20232A">
                                    <img align="center" width="100%"
                                        src="http://github-profile-summary-cards.vercel.app/api/cards/profile-details?username=emon2021&theme=react&color=fff"
                                        alt="emon2021" />

                                </div>

                            </div>
                            <div class="gthub_stats ">
                                <!----left github stats--->
                                <div data-aos="fade-right"
                                    class="col-sm-12 col-md-6 col-lg-6 col-xl-6 responsive_bottom">
                                    <div class="github_streak">
                                        <img src="https://github-stats-alpha.vercel.app/api?username=emon2021&cc=21242&tc=fff&ic=fff&bc=transparent"
                                            width="100%" alt="GitHub Streak" />
                                    </div>
                                </div>
                                <!----right github stats--->
                                <div data-aos="fade-left"
                                    class="col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                                    <div class="float-end res_width github_streak">
                                        <img align="center" width="100%"
                                            src="https://github-readme-stats.vercel.app/api?username=emon2021&show_icons=true&theme=transparent&icon_color=fff&text_color=fff&title_color=fff&ring_color=ff4115&hide_border=true&text_bold=false&hide=issues&show=prs_merged"
                                            alt="emon2021" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-----/github statistics---->
        <!-----get in touch---->
        <section id="contact" class="allSection">
            <div class="container">
                <div class="p-5 Wrapper">
                    <div data-aos="fade-right"
                        class="text-center Title d-flex align-items-center justify-content-center mb-lg-4">
                        <h2 class="border_design">
                            GET IN TOUCH
                        </h2>
                    </div>
                    <div class="m-auto text-center col-xl-6 col-lg-6 col-md-6 col-sm-6 sayHiAll">
                        <div class="text-center greetingsWrapper">
                            <p data-aos="fade-left"  class="greatings">
                                {{ $setting->contact_text ?? "Hi there, how can I help you?" }}
                            </p>
                            <a data-aos="fade-up" target="_blank"  href="mailto:{{ $setting->email ?? "ahmedemon.dev24@gmail.com" }}"
                                class="btn btn-outline-danger sayHi">Say Hello</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-----/get in touch---->

        <!-----footer---->
        <footer id="footer" class="allSection">
            <div class="container">
                <div class="row">
                    <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-3"></div>
                    <div class=" col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        Copyright &copy; <span id="dYear">CurrentYear</span> All Rights Reserved by Emon.
                    </div>
                    <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-3"></div>
                </div>
            </div>
        </footer>
        <!-----/footer---->
    </div>
</div>
