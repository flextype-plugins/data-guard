<?php

namespace Flextype;

$flextype['emitter']->addListener('onThemeTail', function() {
    
    // Load jQuery if it is not loaded yet
    echo ('<script>window.jQuery || document.write(\'<script src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"><\/script>\')</script>');

    // Disable cut copy paste
    // Disable mouse right click
    echo ('<script type="text/javascript">
                $(document).ready(function () {
                    $("body").bind("cut copy paste", function (e) {
                        e.preventDefault();
                    });
                    $("body").on("contextmenu",function(e){
                        return false;
                    });
                });
          </script>');
});
