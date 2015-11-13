<!DOCTYPE HTML>
<!--
        Retrospect by TEMPLATED
        templated.co @templatedco
        Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
    <head>
        <title>Retrospect by TEMPLATED</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="{{ asset('/css/main.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/jquery.pwstabs.css') }}" />
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <style>
            .container {
                padding: 20px;
                width: 550px;
                text-align: center;
                border: 1px solid silver;
                border-radius: 10px; 
            }
            #order-form label.label-for-input{
                text-align: left;
                margin-left: 28px;
                margin-bottom: 0px;
                margin-top: 5px
            }
            #order-form label.error {
                color:#D4909F !important;
                font-weight:bold;
                text-align: left;
                padding-left: 29px;
            }
            #order-form input[type="text"],textarea{
                width: 500px;
                margin: 0 auto;
                height: 40px;
            }
            #order-form textarea {
                height: 60px;
            } 
                
            input[type="checkbox"] + label:before, input[type="radio"] + label:before {
                height: 2em !important;
                width: 2em !important;
                float: left;
            }   
            #submit {
                margin-top: 15px;
            }
            label.label-for-input {
                float: left;
            }
            label.require-class {
                color: red;
                width: 120px;
                position: relative;
                top: 5px;
            }
            .checkbox-input {
                text-align: left !important;
                padding-left: 29px;
                padding-top: 12px;
            }
        </style>
    </head>
    <body class="landing">

        <!-- Header -->
        <header id="header" class="alt">
            <h1><a href="index.html">musical</a></h1>
            <a href="#nav">Menu</a>
        </header>

        <!-- Nav -->
        <nav id="nav">
            <ul class="links">
                <li><a href="index.html">Home</a></li>
                <li><a href="generic.html">Generic</a></li>
                <li><a href="elements.html">Elements</a></li>
            </ul>
        </nav>

        <!-- Banner -->
        <section id="banner">
            <i class="icon fa-diamond"></i>
            <h2>Rikkeisoft family</h2>
            <p>listen the beat of life </p>
            <ul class="actions">
                <li><a href="#" class="button big special">Order</a></li>
            </ul>
        </section>

        <!-- One -->
        @yield('content')
        <div id = 'order-music' style="position:absolute; display: none;"><div class="content"></div></div>
<!--                <form method="post" action="#" style="background-color: white;">
                    <div class="row uniform 50%">
                        <div class="6u 12u$(xsmall)">
                            <input type="text" name="name" id="name" value="" placeholder="Name" />
                        </div>
                        <div class="6u$ 12u$(xsmall)">
                            <input type="email" name="email" id="email" value="" placeholder="Email" />
                        </div>
                        <div class="12u$">
                            <div class="select-wrapper">
                                <select name="category" id="category">
                                    <option value="">- Category -</option>
                                    <option value="1">Manufacturing</option>
                                    <option value="1">Shipping</option>
                                    <option value="1">Administration</option>
                                    <option value="1">Human Resources</option>
                                </select>
                            </div>
                        </div>
                        <div class="4u 12u$(xsmall)">
                            <input type="radio" id="priority-low" name="priority" checked>
                            <label for="priority-low">Low Priority</label>
                        </div>
                        <div class="4u 12u$(xsmall)">
                            <input type="radio" id="priority-normal" name="priority">
                            <label for="priority-normal">Normal Priority</label>
                        </div>
                        <div class="4u$ 12u$(xsmall)">
                            <input type="radio" id="priority-high" name="priority">
                            <label for="priority-high">High Priority</label>
                        </div>
                        <div class="6u 12u$(small)">
                            <input type="checkbox" id="copy" name="copy">
                            <label for="copy">Email me a copy of this message</label>
                        </div>
                        <div class="6u$ 12u$(small)">
                            <input type="checkbox" id="human" name="human" checked>
                            <label for="human">I am a human and not a robot</label>
                        </div>
                        <div class="12u$">
                            <textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
                        </div>
                        <div class="12u$">
                            <ul class="actions">
                                <li><input type="submit" value="Send Message" class="special" /></li>
                                <li><input type="reset" value="Reset" /></li>
                            </ul>
                        </div>
                    </div>
                </form>
            <span class="button b-close"><span>X</span></span></div>-->



        <!-- Footer -->
        <footer id="footer">
         <!--<span class="button b-close"><span>X</span></span>-->
            <div class="inner">

                <ul class="copyright">
                    <li>&copy; Rikkeisoft 2015.</li>

                </ul>
            </div>
        </footer>

        <!-- Scripts -->
        <!--<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>-->
        <script src="{{ asset('/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/js/skel.min.js') }}"></script>
        <script src="{{ asset('/js/util.js') }}"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="{{ asset('/js/main.js') }}"></script>
        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="{{ asset('/js/jquery.pwstabs.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.bpopup.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.fancybox.js') }}"></script>
        <script src="{{ asset('/js/jquery.validate.min.js') }}"></script>
        

        <script>
            jQuery(document).ready(function() {
                
             $('.tabset10').pwstabs({
                 effect: 'none',
                 containerWidth: '100%'
             });
             
             //load form order
             $('.special').click(function() {
                 $('#order-music').bPopup({
                     contentContainer:'.content',
                     loadUrl: 'user/order' //Uses jQuery.load()
                 });
             });
             
             //load form update
             $('.update').click(function() {
                 var userid = $('#userid').text();
                 $('#order-music').bPopup({
                     contentContainer:'.content',
                     loadUrl: 'admin/update/'+ userid //Uses jQuery.load()
                 });
             });
             
             $('.random-am').click(function() {
                 $('#order-music').bPopup({
                     contentContainer:'.content',
                     loadUrl: 'admin/random/'+ 'am' //Uses jQuery.load()
                 });
             });
             
             $('.random-am').click(function() {
                 $('#order-music').bPopup({
                     contentContainer:'.content',
                     loadUrl: 'admin/random/'+ 'pm' //Uses jQuery.load()
                 });
             });
             
             
            });
        </script>

    </body>
</html>