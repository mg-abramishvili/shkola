<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Школа 1770</title>

    <link rel="stylesheet" href="/css/style.css">
    <!--<link rel="stylesheet" href="/css/style_1024.css">-->
    <link rel="stylesheet" href="/css/flickity.css">
    @yield('styles')
</head>

@yield('content')

    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="/js/flickity.pkgd.min.js"></script>
    <script src="/js/hls.js"></script>
    <script>
        function loadNowPlaying(){
            $("#timetime").load("timetime.php");
            }
        setInterval(function(){loadNowPlaying()}, 1000);
    </script>
    <script>
        $('.photoalbums-detail-slider').flickity({
            lazyLoad: 1,
        });
    </script>
    <script>
        $('.events-slider').flickity({
            lazyLoad: 1,
        });
    </script>
    <script>
        $('.events-main-slider').flickity({
            lazyLoad: 1,
            pageDots: false,
        });
    </script>
    <script>
        if(Hls.isSupported()) {
          var video = document.getElementById('video');
          var hls = new Hls();
          hls.loadSource('https://rete.educom.ru/mosobrtv/tv2/index.m3u8');
          hls.attachMedia(video);
          hls.on(Hls.Events.MANIFEST_PARSED,function() {
            video.play();
        });
       }
      </script>

      <script>
        (function() {

            const idleDurationSecs = 180;    // X number of seconds
            const redirectUrl = '/';  // Redirect idle users to this URL
            let idleTimeout; // variable to hold the timeout, do not modify

            const resetIdleTimeout = function() {

                // Clears the existing timeout
                if(idleTimeout) clearTimeout(idleTimeout);

                // Set a new idle timeout to load the redirectUrl after idleDurationSecs
                idleTimeout = setTimeout(() => location.href = redirectUrl, idleDurationSecs * 1000);
            };

            // Init on page load
            resetIdleTimeout();

            // Reset the idle timeout on any of the events listed below
            ['click', 'touchstart', 'mousemove'].forEach(evt =>
                document.addEventListener(evt, resetIdleTimeout, false)
            );

        })();
    </script>
    <script>
        document.oncontextmenu = new Function("return false;");
    </script>
    @yield('scripts')

    <script>
        document.onkeydown = function(e){
            e = e || window.event;
            var key = e.which || e.keyCode;
            if(key===65){
                window.location.href = "http://localhost/admin";
            }
        }        
    </script>
</body>

</html>
