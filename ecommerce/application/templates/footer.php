<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/script.js"></script>


 <script type="text/javascript">
            jQuery(document).ready(function() {
                $('#produto').modally('produto', {max_width: 950, min_height:500});
                 $('#login').modally('login', {max_width: 400, fontSize:30});
                 $('#carrinho').modally('carrinho', {max_width: 400});
                  $('#mapa').modally('mapa', {max_width: 900, min_height:1500});
                $('#lorem').modally();
                $('#dolor').modally();
                modally('video-modal', {video: true, max_width: 400});
            });
        </script>