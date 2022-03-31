<!DOCTYPE html>

<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
       @include('includes.votes.links')
    </head>
    <body>
        <div id="wrapper"  >

            <div class="top_wrapper">
            </div>
            <div class="loading-container">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
            <div class="content-wrapper hide-until-loading"><div class="top-title-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                               @include('includes.votes.navigation')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="body-wrapper">
                    <div class="container">


                              @yield('content')


                    </div>
                </div>
            </div>
          @include('includes.votes.footer')

        </div>
       @include('includes.votes.scripts')
    </body>
</html>
