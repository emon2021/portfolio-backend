<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Ahmed Limon | Web Developer</title>
        <!----bootstrap.min.css-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
        <!-- fontawesome  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" />
        <!----aos.css---->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
        <!-- slick.carousel  -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
        <!-----favicon---->
        <link rel="icon" type="image/icon" href="{{ asset('dist') }}/images/favicon/favicon.png">
        <!----custom.style.css---->
        <link rel="stylesheet" href="{{ asset('dist') }}/css/style.css">
        <link rel="stylesheet" href="{{ asset('dist') }}/css/responsive.css">
    </head>
    <body id="home">


        {{ $slot }}



    <!------------js links---------->
    <!----jquery.min.js---->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!----jquery.ui.js---->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!----bootstrap.min.js---->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <!-------aos.js----->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <!-- mixitup js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>
    <!-- slick.carousel  -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
    <!-- aos.init  -->
    <script>
        AOS.init();
    </script>
    <!-------animated.text.js----->
    <script src="{{ asset('dist') }}/js/animated_text.js"></script>
    <!----custom.app.js---->
    <script src="{{ asset('dist') }}/js/app.js"></script>
     <!-- custom jquery -->
    <script>
        //__jquery to Scroll to a Specific Section After Page Reload__//
        $(document).ready(function () {
            // Get the specific section on the page
            let firstSection = $('#home');
            // Scroll to the specific section

            if (firstSection.length > 0) {
                $('html, body').animate({
                    scrollTop: firstSection.offset().top
                }, 'slow');
            }

            // Smooth scrolling using jquery;
            $('a[href^="#"]').on('click', function (event) {
                event.preventDefault();

                var target = $(this.getAttribute('href'));

                if (target.length) {
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top
                    }, 'slow');
                }
            });

            //__Dynamic copyright year__//
            var dateNow = new Date();
            var crnt_year = dateNow.getFullYear();

            $('#dYear').each(function () {
                var text = $(this).text();
                $(this).text(text.replace('CurrentYear', crnt_year));
            });
        });
    </script>
    </body>
</html>
