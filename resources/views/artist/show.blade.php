<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<!-- html -->
<html>
<!-- head -->

@include('files.head')


<!-- //head -->
<!-- body -->
<body >

<!--header-->
@include('files.header')

<!--header-->


<!--//

@include('files.slides')


 Vertical Tab-->

<!-- //Categories -->


<!--phone-->


@include('files.app')



<!--//phone-->


<!-- Support content -->
<div class="w3l-support">
    <div class="container">
        <div class="col-md-5 w3_agile_support_left">
            <img src="app/images/cus.jpg" alt=" " class="img-responsive" />
        </div>
        <div class="col-md-7 w3_agile_support_right">
            <h5>Call Us Now</h5>
            <h3>24/7 Customer Service Support</h3>
            <p>Pellentesque accumsan cursus dui, sodales blandit urna sodales vitae.
                Maecenas placerat eget mi vitae euismod. Duis aliquam efficitur mi,
                et eleifend velit.</p>

            <form class="form-inline has-success">
                <div class="form-group">
                    <label class="sr-only" for="exampleInputEmail3">Email address</label>
                    <input type="name" class="form-control" id="exampleInputEmail3" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="exampleInputPassword3">Phone Number</label>
                    <input type="number" class="form-control" id="exampleInputPassword3" placeholder="0713854231">
                </div>
                </br>
                </br>

            <div class="agile_more">

                <a href="support.html" class="type-4">
                    <span> Send Request </span>
                    <span> Send Request </span>
                    <span> Send Request </span>
                    <span> Send Request </span>
                    <span> Send Request </span>
                    <span> Send Request </span>
                </a>
            </div>
            </form>
        </div>



    </div>
</div>
<!-- //Support content -->


<!--footer-->

<!--footer-->
<footer>
    <div class="container-fluid">
        <div class="w3-agile-footer-top-at"></div>
    </div>
</footer>
<!--//footer-->

<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working --><!-- Responsive-slider -->
<!-- Banner-slider -->
<script src="js/responsiveslides.min.js"></script>
<script>
    $(function () {
        $("#slider").responsiveSlides({
            auto: true,
            speed: 500,
            namespace: "callbacks",
            pager: true,
        });
    });
</script>
<!-- //Banner-slider -->
<!-- //Responsive-slider -->
<!-- Bootstrap select option script -->
<script src="app/js/bootstrap-select.js"></script>
<script>
    $(document).ready(function () {
        var mySelect = $('#first-disabled2');

        $('#special').on('click', function () {
            mySelect.find('option:selected').prop('disabled', true);
            mySelect.selectpicker('refresh');
        });

        $('#special2').on('click', function () {
            mySelect.find('option:disabled').prop('disabled', false);
            mySelect.selectpicker('refresh');
        });

        $('#basic2').selectpicker({
            liveSearch: true,
            maxOptions: 1
        });
    });
</script>
<!-- //Bootstrap select option script -->

<!-- easy-responsive-tabs -->
<link rel="stylesheet" type="text/css" href="app/css/easy-responsive-tabs.css " />
<script src="app/js/easyResponsiveTabs.js"></script>
<!-- //easy-responsive-tabs -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="app/js/move-top.js"></script>
<script type="text/javascript" src="app/js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- //here ends scrolling icon -->
</body>
<!-- //body -->
</html>
<!-- //html -->
