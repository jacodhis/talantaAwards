
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

<html>
<!-- head -->
<head>
<!-- Online Voting -->
    <title>@yield('title')</title>
  @include('includes.links')

</head>


<!-- //head -->
<!-- body -->
<body >

<!--header-->
<header>
    <div class="container">
        <!--logo-->
        <div class="logo">
            <h1><a href="index.html">Nifunze Vote</a></h1>
        </div>
        <!--//logo
       
        <div class="w3layouts-login">
            <a data-toggle="modal" data-target="#myModal" href="#"><i class="glyphicon glyphicon-user"> </i>Login/Register</a>
        </div>

        <div class="w3layouts-login">
            <a href="#"><i class="glyphicon glyphicon-user"> </i>VOTE NOW</a>
        </div>

        <div class="clearfix"> </div>

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
             aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            &times;</button>
                        <h4 class="modal-title" id="myModalLabel">
                            Nifunze Voter</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-8 extra-w3layouts" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">

                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
                                    <li><a href="#Registration" data-toggle="tab">Register</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="Login">
                                        <form  class="form-horizontal" action="#" method="get">
                                            <div class="form-group">
                                                <label for="email" class="col-sm-2 control-label">
                                                    Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="email1" placeholder="Email" required="required" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                                    Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password" required="required" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                </div>
                                                <div class="col-sm-10">
                                                    <button type="submit" class="submit btn btn-primary btn-sm">
                                                        Submit</button>
                                                    <a href="javascript:;" class="agileits-forgot">Forgot your password?</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="Registration">
                                        <form  class="form-horizontal" action="#" method="get">
                                            <div class="form-group">
                                                <label for="email" class="col-sm-2 control-label">
                                                    Name</label>
                                                <div class="col-sm-10">
                                                    <div class="row">
                                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                                            <select class="form-control">
                                                                <option>Mr.</option>
                                                                <option>Ms.</option>
                                                                <option>Mrs.</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                                            <input type="text" class="form-control" placeholder="Name" required="required" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="col-sm-2 control-label">
                                                    Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="email" placeholder="Email" required="required" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="mobile" class="col-sm-2 control-label">
                                                    Mobile</label>
                                                <div class="col-sm-10">
                                                    <input type="tel" class="form-control" id="mobile" placeholder="Mobile" required="required" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="password" class="col-sm-2 control-label">
                                                    Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" id="password" placeholder="Password" required="required" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-2">
                                                </div>
                                                <div class="col-sm-10">
                                                    <button type="submit" class="submit btn btn-primary btn-sm">
                                                        Save & Continue</button>
                                                    <button type="reset" class="submit btn btn-default btn-sm">
                                                        Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div id="OR" >
                                    OR</div>
                            </div>
                            <div class="col-md-4 extra-agileits">
                                <div class="row text-center sign-with">
                                    <div class="col-md-12">
                                        <h3 class="other-nw">
                                            Sign in with</h3>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="btn-group btn-group-justified">
                                            <a href="#" class="btn btn-primary">Facebook</a> <a href="#" class="btn btn-danger">
                                                Google +</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        -->
        <!--//Login modal-->
    </div>
</header>
<!--header-->


<!--//

<div class=" header-right">
    <div class="banner">
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides" id="slider">
                    <li>
                        <div class="banner1">
                            <div class="caption">
                                <h3><span>Get a</span> coupon voucher on Mobile Recharge</h3>
                                <p><a href="#mobilew3layouts" class="scroll">Recharge now</a></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="banner2">
                            <div class="caption">
                                <h3><span>50% off</span> on train Tickets</h3>
                                <p><a href="train.html">Book now</a></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="banner3">
                            <div class="caption">
                                <h3><span>Flat Rs.200 Cash back</span>  on Movie Tickets</h3>
                                <p><a href="movies.html">Book now</a></p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="banner4">
                            <div class="caption">
                                <h3><span>Upto Rs.125 Discount </span> & Flat 100% Money Back</h3>
                                <p><a href="bus.html">Book now</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

 Vertical Tab-->

<!-- //Categories -->


<!--phone-->


<div class="phone" id="mobileappagileits">
    <div class="container">

        <div class="row">

        <div class="col-md-6">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Vote Online Now</legend>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="fname" name="name" type="text" placeholder=" Code" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="lname" name="name" type="text" placeholder="Votes" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="button" class="btn btn-success ">Next Step</button>
                            </div>
                        </div>
                    </fieldset>

                </form>
            </div>
        </div>

        <div class="col-md-6">
        <div>

                    <div class="panel panel-default">

                        <div class="panel-body text-center success">
                            <h4 class="success">Select Category to view Nominees Codes</h4>
                            <hr />
                            <!-- //Place Data Here -->

                            <div class="panel-group" id="accordion">

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapseOne">Is account registration required?</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">

                                            <!-- //Place Table Data Here -->

                                            <div class="table-responsive table-bordered">
                                                <table class="table">
                                                    <thead class="success">
                                                    <tr class="success">
                                                        <th>Name</th>
                                                        <th>Code</th>
                                                        <th>count </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                                                                        <tr>
                                                        <td>
                                                            <a href="/artist/1"> artist one</a>
                                                        </td>
                                                        <td>123456</td>
                                                        <td>4</td>
                                                    </tr>

                                                                                                        <tr>
                                                        <td>
                                                            <a href="/artist/2"> artist two</a>
                                                        </td>
                                                        <td>789106</td>
                                                        <td>6</td>
                                                    </tr>

                                                                                                        <tr>
                                                        <td>
                                                            <a href="/artist/3"> artist three</a>
                                                        </td>
                                                        <td>131415</td>
                                                        <td>2</td>
                                                    </tr>

                                                                                                        <tr>
                                                        <td>
                                                            <a href="/artist/4"> artist four</a>
                                                        </td>
                                                        <td>161718</td>
                                                        <td>1</td>
                                                    </tr>

                                                                                                        <tr>
                                                        <td>
                                                            <a href="/artist/5"> artist five</a>
                                                        </td>
                                                        <td>192021</td>
                                                        <td>2</td>
                                                    </tr>

                                                                                                       
                                                </table>
                                                <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">
        <div class="flex justify-between flex-1 sm:hidden">
                            <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                    &laquo; Previous
                </span>
            
                            <a href="http://127.0.0.1:8000/vote-for-artist?page=2" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    Next &raquo;
                </a>
                    </div>

        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-gray-700 leading-5">
                    Showing
                                            <span class="font-medium">1</span>
                        to
                        <span class="font-medium">5</span>
                                        of
                    <span class="font-medium">12</span>
                    results
                </p>
            </div>

            <div>
                <span class="relative z-0 inline-flex shadow-sm rounded-md">
                    
                                            <span aria-disabled="true" aria-label="&amp;laquo; Previous">
                            <span class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default rounded-l-md leading-5" aria-hidden="true">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </span>
                    
                    
                                            
                        
                        
                                                                                                                        <span aria-current="page">
                                        <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5">1</span>
                                    </span>
                                                                                                                                <a href="http://127.0.0.1:8000/vote-for-artist?page=2" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="Go to page 2">
                                        2
                                    </a>
                                                                                                                                <a href="http://127.0.0.1:8000/vote-for-artist?page=3" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="Go to page 3">
                                        3
                                    </a>
                                                                                                        
                    
                                            <a href="http://127.0.0.1:8000/vote-for-artist?page=2" rel="next" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-r-md leading-5 hover:text-gray-400 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150" aria-label="Next &amp;raquo;">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                                    </span>
            </div>
        </div>
    </nav>

                                            </div>

                                            <!-- //Place Table Data Here -->

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">Can I submit my own Bootstrap templates or themes?</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTen" class="panel-collapse collapse">

                                        <div class="panel-body">

                                            <!-- //Place Table Data Here -->
                                            <!-- //Place Table Data Here -->

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">What is the currency used for all transactions?</a>
                                        </h4>
                                    </div>
                                    <div id="collapseEleven" class="panel-collapse collapse">
                                        <div class="panel-body">

                                            <!-- //Place Table Data Here -->
                                            <!-- //Place Table Data Here -->

                                        </div>
                                    </div>
                                </div>



                            </div>

                            <!-- //Place Data Here -->

                            <div id="map1" class="map">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           
        </div>
    </div>
</div>


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

          @include('includes.contactUs')
        </div>



    </div>
</div>
<!-- //Support content -->


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
