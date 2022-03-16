
<div class="phone" id="mobileappagileits">
    <div class="container">

        <div class="row">

        <div class="col-md-6">
                <div class="well well-sm">

                    <form class="form-horizontal" method="post" action="{{route('stk')}}">
                        @csrf
                        <fieldset>
                            <legend class="text-center header">Vote Online Now</legend>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <input id="fname" name="vote" type="text" placeholder=" Code" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <input id="lname" name="vote" type="number" min="1"  placeholder="Votes" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <input id="phone" name="phone" type="tel" placeholder="enter your phone number" class="form-control" size="12"
                                    required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-success ">Next Step</button>
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
                                    <a href="{{route('artist.create')}}">Add artist</a>
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

                                                    @foreach($artists as $artist)
                                                    <tr>
                                                        <td>
                                                            <a href="/artist/{{$artist->id}}">{{$artist->name}}</a>
                                                        </td>
                                                        <td>{{$artist->code}}</td>
                                                        <td>{{$artist->works->count()}}</td>
                                                    </tr>

                                                    @endforeach

                                                </table>
                                                {{$artists->links()}}
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
