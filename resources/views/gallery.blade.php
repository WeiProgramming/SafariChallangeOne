@extends('layouts/main')
@include('_partials/search-nav ')
@section('style')
    <link href="css/gallery.css" rel="stylesheet"/>
@section('content')
    <div class="container gallery-content">
        <div class ="row">
            <div class="sidenav col-md-3">
                <h1>Sidenav</h1>
            </div>
            <div class="gallery col-md-9">
                <div class = "row">
                    <div class ="col-md-3 pic">
                        <img data-toggle="modal" data-target=".redParrotModal" class ="img-fluid" src="images/red-parrot.png">
                    </div>
                    <div class ="col-md-3 pic">
                        <img class ="img-fluid" src="images/blue-parrot.png">
                    </div>
                    <div class ="col-md-3 pic">
                        <img class ="img-fluid" src="images/aqua-parrot.png">
                    </div>
                    <div class ="col-md-3 pic">
                        <img class ="img-fluid" src="images/green-parrot.png">
                    </div>
                </div>
                <div class = "row">
                    <div class ="col-md-3 pic">
                        <img class ="img-fluid" src="images/light-blue-parrot.png">
                    </div>
                    <div class ="col-md-3 pic">
                        <img class ="img-fluid" src="images/dirty-yellow-parrot.png">
                    </div>
                    <div class ="col-md-3 pic">
                        <img class ="img-fluid" src="images/red-green-parrot.png">
                    </div>
                    <div class ="col-md-3 pic">
                        <img class ="img-fluid" src="images/yellow-parrot.png">
                    </div>
                </div>
                <div class = "row">
                    <div class ="col-md-3 pic">
                        <img class ="img-fluid" src="images/black-parrot.png">
                    </div>
                    <div class ="col-md-3 pic">
                        <img class ="img-fluid" src="images/yellow-green-parrot.png">
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    <!-- Modal -->
    <div class="modal fade redParrotModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">RED PARROT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class = "container-fluid">
                        <div class = "row">
                            <div class = "col-md-6">
                                <img class ="img-fluid" src="images/red-parrot.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class = container-fluid>
                        <div class ="row">
                            <div class="col-md-6">
                                <div class="btn-group">
                                    <button class ="btn btn-outline-secondary">NE</button>
                                    <button class ="btn btn-outline-secondary">DD</button>

                                    <button class ="btn btn-outline-success">LC</button>
                                    <button class ="btn btn-outline-warning">NT</button>

                                    <button class ="btn btn-outline-warning">VU</button>
                                    <button class ="btn btn-outline-danger">EN</button>

                                    <button class ="btn btn-outline-danger">CN</button>
                                    <button class ="btn btn-outline-dark">EW</button>

                                    <button class ="btn btn-outline-dark">EX</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="redParrotModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection