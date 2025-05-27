<!DOCTYPE html>
<html lang="en-US" class="scheme_original">

<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">

        <title>@yield('title', 'Logos Household')</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caveat:400,700|Lato:300,300i,400,400i,700,700i|Raleway:300,300i,400,400i,700,700i&amp;subset=latin-ext">
        <link rel="stylesheet" href="{{asset('assets/css/fontello/css/fontello.css')}}" type="text/css" media="all" />

        <link rel="stylesheet" href="{{asset('assets/js/vendor/essential-grid/css/settings.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('assets/js/vendor/essential-grid/css/lightbox.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('assets/css/tpl-essential-grids.min.css')}}" type="text/css" media="all" />

        <link rel="stylesheet" href="{{asset('assets/js/vendor/revslider/css/settings.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('assets/css/plugin.revslider.min.css')}}" type="text/css" media="all" />

        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('assets/css/core.animation.min.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('assets/css/shortcodes.min.css')}}" type="text/css" media="all" />

        <link rel="stylesheet" href="{{asset('assets/css/plugin.instagram-widget.min.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('assets/js/vendor/html5-jquery-audio-player/css/style.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('assets/css/plugin.html5-jquery-audio-player.min.css')}}" type="text/css" media="all" />

        <link rel='stylesheet' href="{{asset('assets/js/vendor/swiper/swiper.min.css')}}" type='text/css' media='all' />

        <link rel="stylesheet" href="{{asset('assets/css/skin.min.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" type="text/css" media="all" />

        <link rel="stylesheet" href="{{asset('assets/css/core.messages.min.css" type="text/css')}}" media="all" />
        <link rel="stylesheet" href="{{asset('assets/js/vendor/magnific/magnific-popup.min.css')}}" type="text/css" media="all" />

        <link rel="icon" sizes="32x32" href="{{ asset('assets/images/loho.png') }}" type="image/png">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/loho.png') }}">
        
    </head>

    <body class="home page body_style_wide body_filled article_style_stretch scheme_original top_panel_show top_panel_above sidebar_hide">
        <a id="toc_home" class="sc_anchor" title="Home" data-description="<i>Return to Home</i> - <br>navigate to home page of the site" data-icon="icon-home" data-url="index.html" data-separator="yes"></a>
        <a id="toc_top" class="sc_anchor" title="To Top" data-description="<i>Back to top</i> - <br>scroll to top of the page" data-icon="icon-double-up" data-url="" data-separator="yes"></a>
        <!-- Body wrap -->
        <div class="body_wrap">
            <!-- Page wrap -->
            <div class="page_wrap">
                <div class="top_panel_fixed_wrap"></div>

                @include('user.layouts.header')

                <main>
                    @yield('content')
                </main>
                
                @include('user.layouts.footer')

            </div>
            <!-- /Page wrap -->
        </div>
        <!-- /Body wrap -->

        <a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>

        <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script type="text/javascript" src="{{asset('assets/js/jquery/jquery.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/jquery/jquery-migrate.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('assets/js/vendor/photostack/modernizr.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/_main.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/_packed.js')}}"></script>

        <script type="text/javascript" src="{{asset('assets/js/vendor/essential-grid/js/lightbox.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/vendor/essential-grid/js/jquery.themepunch.tools.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/vendor/essential-grid/js/jquery.themepunch.essential.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/essential-grid-homepage-1.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/essential-grid-sermons-boxed.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('assets/js/vendor/revslider/jquery.themepunch.revolution.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('assets/js/vendor/revslider/revolution.extension.slideanims.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/vendor/revslider/revolution.extension.layeranimation.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/vendor/revslider/revolution.extension.navigation.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/revslider-homepage-1.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('assets/js/vendor/html5-jquery-audio-player/jquery-jplayer/jquery.jplayer.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/ttw-musicplayer-homepage-1.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('assets/js/superfish.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/core.utils.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/core.init.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/template.init.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('assets/js/shortcodes.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/core.messages.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/vendor/magnific/jquery.magnific-popup.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('assets/js/countdown/jquery.plugin.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/countdown/jquery.countdown.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/vendor/swiper/swiper.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/vendor/isotope/dist/isotope.pkgd.min.js')}}"></script>

    </body>

</html>