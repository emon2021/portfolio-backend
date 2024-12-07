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
                                                            {{ strip_tags($testimonial->designation) }}
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
                                                            {{ strip_tags($testimonial->description) ?? "client feedback" }}
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

        <!-----give feedback---->
        <div class="chat-pop-up ">
            <div class="chat-pop-up--heading">
              <h3>
                Let's
                <span>
                  chat!
                </span>
              </h3>

              <figure id="lottie-animation">
                <svg width="166px" height="166px" viewBox="0 0 166 166" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <defs>
                      <circle id="path-1" cx="83" cy="83" r="83"></circle>
                  </defs>
                  <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g id="chat_option_01" transform="translate(-244.000000, -62.000000)">
                          <g id="modal_chat_option_01" transform="translate(46.000000, 40.000000)">
                              <g id="graphic_support-lady" transform="translate(281.000000, 105.000000) rotate(-360.000000) translate(-281.000000, -105.000000) translate(198.000000, 22.000000)">
                                  <mask id="mask-2" fill="white">
                                      <use xlink:href="#path-1"></use>
                                  </mask>
                                  <use id="Oval" fill="#274666" fill-rule="nonzero" xlink:href="#path-1"></use>
                                  <path d="M152,168.08275 C152,239.896957 133.596113,214.72453 89.7099219,214.72453 C17.7790385,214.72453 18.6567623,239.854555 16.094375,168.08275 C14.6786914,128.507907 28.8355274,96 82.6315039,96 C136.42748,96 152,120.027583 152,168.08275 Z" id="Path" fill="#2D578A" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                  <path d="M82.8428571,115 L82.8428571,115 C77.5,115 72,110.16286 72,104.842007 L73.1142857,86.6885062 C73.1377573,81.3474042 77.4796679,77.023375 82.8428571,77 L82.8428571,77 C88.2092857,77.0156268 92.5557372,81.3441782 92.5714286,86.6885062 L94,104.842007 C93.9857143,110.16286 88.2714286,115 82.8428571,115 Z" id="Path" fill="#D3B3A1" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                  <path d="M121,72 L90,76.7788546 L85.6420898,85.909668 C101.80424,86.5299323 110,90.7484716 110,90.7484716 L121,72 Z" id="Path" fill="#FF6B17" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                  <path d="M58,87.4687182 C62.5,85.4677734 71,84.2602539 80,87 L75.3546202,76.7616946 L47,71 L58,87.4687182 Z" id="Path" fill="#FF6B17" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                  <circle id="Oval" fill="#E5C6B1" fill-rule="nonzero" mask="url(#mask-2)" cx="84.5" cy="54.5" r="37.5"></circle>
                                  <path d="M79,67.8632813 C77.5807399,70.6015625 77.2294872,77 84.5,77 C88.4963997,77 84.9644489,75.3632813 90,67.8632813 L79,67.8632813 Z" id="Path" fill="#3B356B" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                  <ellipse id="Oval" fill="#B76F46" fill-rule="nonzero" mask="url(#mask-2)" cx="45.5" cy="55.5" rx="5.5" ry="7.5"></ellipse>
                                  <ellipse id="Oval" fill="#B76F46" fill-rule="nonzero" mask="url(#mask-2)" cx="122.5" cy="55.5" rx="5.5" ry="7.5"></ellipse>
                                  <path d="M44.857263,87.8810972 C48.8472779,89.5306131 52.4940656,89.1324541 56.5269838,88.1228366 L57.0704267,87.9237571 L57.671074,87.6393578 C57.7835787,87.5881084 57.8933649,87.5311537 58,87.4687182 C55.4114958,79.1215988 53.5809513,70.4758602 53.7096615,63.1525783 L60.2705128,23 C60.1847061,23.7820981 56.0998394,25.460563 55.5563965,26.0720215 C52.767081,29.4023947 49.2793402,32.5348589 47.3170571,36.4048244 C40.4382144,49.7147115 38.7363801,65.0153937 40.8529471,79.7330573 C41.0960663,81.4110132 41.3820889,83.074749 41.7253159,84.7384849 C41.8393208,85.8722471 42.5537001,86.8591107 43.5987638,87.3265185 C43.956292,87.5113781 44.3710247,87.6820177 44.857263,87.8810972 Z" id="Path" fill="#FF8D4E" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                  <path d="M110,90.7484716 C110.926739,90.8473127 111.853477,90.9320336 112.765958,90.9885142 C113.678439,91.0449947 114.662208,90.875553 115.617462,90.8614328 L115.817067,90.8614328 L116.03093,90.8614328 C117.028956,90.6637507 118.041239,90.5084291 119.025008,90.2260261 C119.50841,90.1132844 119.984522,89.9718271 120.45076,89.8024217 L120.579077,89.8024217 C121.249181,89.449418 122.004829,88.9975732 122.090374,88.9552128 C123.56756,88.0926123 124.995488,87.149832 126.367629,86.1311831 L127.194565,85.5381369 C135.749075,43.9543001 111.126344,23 111.126344,23 L115.218251,63.9484301 C115.318054,71.9263139 113.036851,81.6268558 110,90.7484716 Z" id="Path" fill="#FF8D4E" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                  <ellipse id="Oval" fill="#3B356B" fill-rule="nonzero" mask="url(#mask-2)" cx="70.5" cy="55.5" rx="2.5" ry="3.5"></ellipse>
                                  <ellipse id="Oval" fill="#3B356B" fill-rule="nonzero" mask="url(#mask-2)" cx="97.5" cy="55.5" rx="2.5" ry="3.5"></ellipse>
                                  <path d="M71.9550836,24.2793286 C71.9550836,24.2793286 76.6734816,47.7092853 107.449981,43.4467098 C107.449981,43.4467098 111.042235,41.9263912 110.129917,46.1889667 C109.217598,50.4515422 109.616737,58.9766932 114.221096,67.2176725 C114.221096,67.2176725 116.188283,69.5336719 112.795598,81 L125.981475,47.410905 C125.981475,47.410905 121.919894,-2.8351847 64.3012695,17 C54.7670898,21.8528857 50.1995443,26.5518603 50.5986328,31.0969238" id="Path" fill="#FF8D4E" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                  <path d="M75,32.2036683 C75,32.2036683 74.2508834,49.3130889 54.0954064,48.6213714 C57.2854471,60.0348421 56.8658304,72.1540654 52.8939929,83.3201798 C46.1943463,101.389535 43,47.0403028 43,47.0403028 C43,47.0403028 46.4063604,21.8137891 71.8056537,17" id="Path" fill="#FF8D4E" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                  <path d="M98,66 C91.9248678,66 87,61.0751322 87,55 C87,48.9248678 91.9248678,44 98,44 C104.075132,44 109,48.9248678 109,55 C108.99223,61.0719111 104.071911,65.9922304 98,66 L98,66 Z M98,46.2564103 C93.1788374,46.2564103 89.2705128,50.1647348 89.2705128,54.9858974 C89.2705128,59.8070601 93.1788374,63.7153846 98,63.7153846 C102.821163,63.7153846 106.729487,59.8070601 106.729487,54.9858974 C106.729487,52.6706935 105.809776,50.4503143 104.17268,48.8132179 C102.535583,47.1761214 100.315204,46.2564103 98,46.2564103 L98,46.2564103 Z" id="Shape" fill="#2D578A" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                  <path d="M69,66 C62.9248678,66 58,61.0751322 58,55 C58,48.9248678 62.9248678,44 69,44 C75.0751322,44 80,48.9248678 80,55 C79.9922304,61.0719111 75.0719111,65.9922304 69,66 L69,66 Z M69,46.2564103 C64.1788374,46.2564103 60.2705128,50.1647348 60.2705128,54.9858974 C60.2705128,59.8070601 64.1788374,63.7153846 69,63.7153846 C73.8211626,63.7153846 77.7294872,59.8070601 77.7294872,54.9858974 C77.7217226,50.1679547 73.8179428,46.2641749 69,46.2564103 L69,46.2564103 Z" id="Shape" fill="#2D578A" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                  <path d="M87.715528,55 C85.3939605,52.7807183 81.8729293,52.7496356 79.5167702,54.9276235 L78,53.2340134 C81.1279059,50.2887 85.8309976,50.2515662 89,53.1471616 L87.715528,55 Z" id="Path" fill="#2D578A" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                  <polygon id="Path" fill="#2D578A" fill-rule="nonzero" mask="url(#mask-2)" points="58.1380471 53 55.1212121 51.1505376 55 50.5770609 55.1212121 49 59 51.3799283"></polygon>
                                  <polygon id="Path" fill="#2D578A" fill-rule="nonzero" mask="url(#mask-2)" points="107.757396 54 109 53.1073171 108.964497 52.4926829 108.905325 51 107 52.3609756"></polygon>
                                  <path d="M127.669679,53 L123.472661,52.3423365 L125.55718,52.6641718 L123.472661,52.3423365 C123.472661,52.1884152 125.767031,36.6703547 116.309751,25.6300033 C109.804374,18.0458835 99.2698597,14.1978523 85,14.1978523 L85,10 C100.584925,10 112.210664,14.3517735 119.541455,22.9433778 C130.28582,35.410999 127.781599,52.2303938 127.669679,53 Z" id="Path" fill="#4580C1" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                  <path d="M42.331409,53 C42.2194547,52.2868293 39.7144768,35.478374 50.4341031,22.9349593 C57.7811055,14.3489431 69.3963664,10 85,10 L85,14.195122 C70.6978354,14.195122 60.1461405,18.0546341 53.6527898,25.6478049 C44.1786553,36.7229268 46.4737189,52.2169106 46.5017075,52.3147967 L42.331409,53 Z" id="Path" fill="#4580C1" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                  <path d="M50,42.1332968 L50,63.3862555 C50,63.3862555 39,67.6368472 39,53.7657495 C39,39.8946519 50,42.1332968 50,42.1332968 Z" id="Path" fill="#FFFFFF" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                  <path d="M96,74 L96,71.4020101 C101.472122,71.4020101 106.191672,70.8738589 110.132802,69.8371814 C115.207309,68.5023792 118.991308,66.3245142 121.429623,63.3454774 C123.867137,60.2951023 124.887888,56.3787749 124.242634,52.5527638 L126.760279,52 C127.561583,56.5828281 126.333444,61.283781 123.384665,64.9208543 C118.560351,70.959799 109.333674,74 96,74 Z" id="Path" fill="#4580C1" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                  <rect id="Rectangle" fill="#FFFFFF" fill-rule="nonzero" mask="url(#mask-2)" x="92" y="70" width="10" height="5" rx="1.47"></rect>
                                  <path d="M121,42.1332968 L121,63.3862555 C121,63.3862555 132,67.6368472 132,53.7657495 C132,39.8946519 121,42.1332968 121,42.1332968 Z" id="Path" fill="#FFFFFF" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                  <path d="M113.019061,195 L106.209449,187.961609 C120.163573,174.363437 126.554562,165.523218 127.140635,159.273126 C127.615076,154.177331 124.098636,149.841682 117.372748,141.986837 C112.136835,136.141882 107.333027,129.917316 103,123.363254 L111.191071,118 C115.271317,124.172136 119.800254,130.030106 124.740526,135.525594 C132.038533,143.971664 137.801587,150.658135 136.908523,160.202194 C136.015459,169.155027 129.108167,179.304388 113.019061,195 Z" id="Path" fill="#E5C6B1" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                  <path d="M52.5081015,198 C36.0269586,181.811129 28.9513595,171.469413 28.0937111,162.26895 C27.1788861,152.547173 33.0823658,145.685572 40.5439067,137.02051 C45.6070487,131.352887 50.2457934,125.3302 54.4235162,119 L63,124.354022 C58.5732751,131.073485 53.6524147,137.463799 48.2770362,143.473515 C41.3157902,151.574996 37.6993729,156.055466 38.1996678,161.35313 C38.8000216,167.820225 45.4325024,176.936151 59.6408772,190.941145 L52.5081015,198 Z" id="Path" fill="#E5C6B1" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                  <path d="M116,121.304888 C116,121.304888 108.882562,105.361944 100.142349,103.902279 C95.0462633,100.727862 95.7437722,102.485129 95.7437722,102.485129 L88.3879004,110.803803 C87.1725183,112.019112 84.4906061,112.654988 82.7712816,112.549196 C81.0519571,112.443403 79.4614998,111.606173 78.405694,110.251114 L72.341637,102.485129 C70.5063805,103.342559 68.5168954,103.824464 66.4911032,103.902279 C60.2626599,108.392415 55.2774198,114.379274 52,121.304888 C53.9968737,123.889235 57.1100468,125.373118 60.3843416,125.301253 C56.7156926,130.827361 57.1326301,138.09705 61.4092527,143.171522 L60.6263345,168 L107.459075,168 L107.459075,142.30706 C110.83582,137.683154 111.256204,131.54313 108.540925,126.505831 C108.540925,126.505831 115.302491,122.240208 116,121.304888 Z" id="Path" fill="#4580C1" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                  <path d="M72.0347072,101 L66,103.097452 C66,103.097452 66,111.997055 66,111.997055 C68.9501823,112.052656 71.8642541,111.320137 74.4598698,109.870472 L79,111.137682 L79,111.137682 L72.0347072,101 Z" id="Path" fill="#274666" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                  <path d="M94.0428266,101 L87,111.665266 L91.8576017,110.321269 C91.8576017,110.321269 96.993576,112.373394 100,111.939846 L100,103.081028 L94.0428266,101 Z" id="Path" fill="#274666" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                  <path d="M60.1145251,126 C53.9413408,125.695431 52.0977654,121.949239 52,121.766497 L52.4469274,120.715736 L52.4469274,120.715736 L52.7402235,120 C55.3756805,122.346057 58.6075384,123.754543 62,124.035533 L60.1145251,126 Z" id="Path" fill="#274666" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                  <path d="M107.896792,127 C114.061367,126.695431 115.902371,122.949239 116,122.766497 L115.553696,121.715736 L115.553696,121.715736 L115.246862,121 C112.620673,123.356401 109.390209,124.766247 106,125.035533 L107.896792,127 Z" id="Path" fill="#274666" fill-rule="nonzero" mask="url(#mask-2)"></path>
                              </g>
                          </g>
                      </g>
                  </g>


                </svg>
              </figure>
            </div>

            <h4>
              Whether you have questions or concerns, or just need help with something right now, we’re here.
            </h4>

            <a onclick=\ "window.open('" + urlToGo + "', (Math.floor(Math.random()*100000)), 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=700,height=710,left = 310,top = 275');\" href=\ "javascript:void(0);\" id=init-flash-frame class=button-yellow>
              <span>
                Start a chat
              </span>

              <svg width="17px" height="17px" viewBox="0 0 17 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="chat_option_01" transform="translate(-509.000000, -578.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g id="button_cta_static" transform="translate(333.000000, 559.000000)">
                            <polygon id="rightwards-arrow" points="192.774 27.224 184.782 35.216 182.286 32.72 185.982 29 176.526 29 176.526 25.448 185.982 25.448 182.262 21.728 184.758 19.208"></polygon>
                        </g>
                    </g>
                </g>

              </svg>
            </a>
          </div>

          <button class="toggle-chat chat-is-open" style="overflow: hidden">

            <img class="" style="width: 60px; height: 60px" src="{{ asset('dist') }}/images/notebook.gif" alt="">
          </button>
        <!-----/give feedback---->

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
