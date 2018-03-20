<br><br>
<hr>
<div class="footer-bottom">
    <div class="container-fluid">

        <!--<hr> -->
        <div class="text-center center-block">
            <!-- <p class="txt-railway">- Bootsnipp.com -</p> -->
            <!-- <br /> -->
            <a href="https://www.facebook.com/bootsnipp"><i id="social-fb"
                                                            class="fa fa-facebook-square fa-3x social"></i></a>
            <a href="https://twitter.com/bootsnipp"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
            <a href="https://plus.google.com/+Bootsnipp-page"><i id="social-gp"
                                                                 class="fa fa-google-plus-square fa-3x social"></i></a>
            <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
        </div>
        <!--<hr> -->
        <div class="bottom">

            <div class="container">

                <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                        <div class="copyright">

                            © 2017, All rights reserved

                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                        <div class="design">

                            <a href="#">Cool!! </a> | <a target="_blank" href="#">Web Design & Development by Team ASK</a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>


<!-- Latest compiled and minified JavaScript
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.appear.js"></script>
-->
<!--<script type="text/javascript" src="../scripts/another.js"></script>-->
<!-- jQuery library -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->

<script src="../lib/jquery-3.2.1.min.js"></script>
<script src="../lib/bootstrap.min.js"></script>

<script>
    (function($) {
        /**
         * attaches a character counter to each textarea element in the jQuery object
         * usage: $("#myTextArea").charCounter(max, settings);
         */

        $.fn.charCounter = function (max, settings) {
            max = max || 100;
            settings = $.extend({
                container: "<span></span>",
                classname: "charcounter",
                format: "(%1 characters remaining)",
                pulse: true,
                delay: 0
            }, settings);
            var p, timeout;

            function count(el, container) {
                el = $(el);
                if (el.val().length > max) {
                    el.val(el.val().substring(0, max));
                    if (settings.pulse && !p) {
                        pulse(container, true);
                    };
                };
                if (settings.delay > 0) {
                    if (timeout) {
                        window.clearTimeout(timeout);
                    }
                    timeout = window.setTimeout(function () {
                        container.html(settings.format.replace(/%1/, (max - el.val().length)));
                    }, settings.delay);
                } else {
                    container.html(settings.format.replace(/%1/, (max - el.val().length)));
                }
            };

            function pulse(el, again) {
                if (p) {
                    window.clearTimeout(p);
                    p = null;
                };
                el.animate({ opacity: 0.1 }, 100, function () {
                    $(this).animate({ opacity: 1.0 }, 100);
                });
                if (again) {
                    p = window.setTimeout(function () { pulse(el) }, 200);
                };
            };

            return this.each(function () {
                var container;
                if (!settings.container.match(/^<.+>$/)) {
                    // use existing element to hold counter message
                    container = $(settings.container);
                } else {
                    // append element to hold counter message (clean up old element first)
                    $(this).next("." + settings.classname).remove();
                    container = $(settings.container)
                        .insertAfter(this)
                        .addClass(settings.classname);
                }
                $(this)
                    .unbind(".charCounter")
                    .bind("keydown.charCounter", function () { count(this, container); })
                    .bind("keypress.charCounter", function () { count(this, container); })
                    .bind("keyup.charCounter", function () { count(this, container); })
                    .bind("focus.charCounter", function () { count(this, container); })
                    .bind("mouseover.charCounter", function () { count(this, container); })
                    .bind("mouseout.charCounter", function () { count(this, container); })
                    .bind("paste.charCounter", function () {
                        var me = this;
                        setTimeout(function () { count(me, container); }, 10);
                    });
                if (this.addEventListener) {
                    this.addEventListener('input', function () { count(this, container); }, false);
                };
                count(this, container);
            });
        };

    })(jQuery);

    $(function() {
        $(".counted").charCounter(500,{container: "#counter"});
    });
</script>
<!-- Latest compiled JavaScript -->


</body>
</html>