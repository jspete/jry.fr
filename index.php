<?php

// Functions below
function get_ip() {
  if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];}
  else {
    $ip = $_SERVER['REMOTE_ADDR'];}
  return $ip;
}
$ip = get_ip();

?>
<!doctype html>
<!-- Rendered: <?php echo date("F j, Y, g:i a"); ?>  IP:<?php echo $ip ?>


 |\/\/\/|  
 |      |  
 | (o)(o)  
 C      _) 
  |  ___|  
  |   /    
 /____\    
/      \
Contact: pete(at)jry.fr
PGP: https://keybase.io/jsantin/pgp_keys.asc?fingerprint=87202b40112a5d7c9ca580cb0e7ec743292f93f6

-->
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JS.</title>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" integrity="sha384-9/D4ECZvKMVEJ9Bhr3ZnUAF+Ahlagp1cyPC7h5yDlZdXs4DQ/vRftzfd+2uFUuqS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/ico" href="img/favicon.ico"/>
</head>

<body class="">
    <main id="homepage" class="hidden">
        <div id="square_picture">
        </div>
        <div id="square_description">
            <div class="square_inner">
                <h1><strong>Jérémy</strong> Santin</h1>
                <p>Passionné de technologie et habitant à Paris, J'aime créer et participer à différents projets mélant innovation et technologie</p>
                <p class="title">Centres d'intérêt:</p>
                <p style="word-spacing: 10px;">#Blockchain #Bitcoin #Tech #SciFi #Drones #Web3</p>
                <p class="title">pete (at) jry.fr</p>
                <p>PGP Public key: <a class="link" title="PGP Public key" href="https://keybase.io/jsantin/pgp_keys.asc?fingerprint=87202b40112a5d7c9ca580cb0e7ec743292f93f6" target="_blank"><span class="lk">0E7E</span> <span class="lk">C743</span> <span class="lk">292F</span> <span class="lk">93F6</span></a></p>

                <section id="social">
                    <ul>
                        <li>
                            <a title="Visit me on Twitter" href="https://twitter.com/_jspete" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a title="Visit me on LinkedIn" href="http://linkd.in/1wYcKUR" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a title="Contact me via Email" href="mailto:pete@jry.fr" target="_blank">
                            <i class="fas fa-envelope"></i>
                            </a>
                        </li><!--
                        <li>
                            <a title="Visit me on Keybase" href="https://keybase.io/jsantin" target="_blank">
                                <i class="fab fa-keybase"></i>
                            </a>
                        </li>-->
                    </ul>
                </section>
            </div>
        </div>
    </main>
    <p class="outro hidden"><a class="lk"><?php echo $ip; ?></a><a class="lk" href="/private" target="_blank" style="margin-left:20px;"><i class="fas fa-link"></i> private</a></p>

    <!-- Scripts below -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Matomo -->
    <script type="text/javascript">
        var _paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u = "//www.jry.fr/analytics/";
            _paq.push(['setTrackerUrl', u + 'matomo.php']);
            _paq.push(['setSiteId', '1']);
            var d = document,
                g = d.createElement('script'),
                s = d.getElementsByTagName('script')[0];
            g.type = 'text/javascript';
            g.async = true;
            g.defer = true;
            g.src = u + 'matomo.js';
            s.parentNode.insertBefore(g, s);
        })();

    </script>
    <!-- End Matomo Code -->

    <script>
        console.clear();
    </script>
</body>
</html>