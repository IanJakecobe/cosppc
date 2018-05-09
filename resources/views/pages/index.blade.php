@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">
    <h1>Chair of Saint Peter Parish Church</h1>
    <h3>Santa Rosa Laguna</h3>
    <hr>
    <a class="btn btn-default btn-lg" role="button" href="/"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Get Started</a>
</div>
<div class="container text-center">
    <h2>Gallery</h2>
    <div class="row">
        <div class="col-sm-4">
            <img src="">
            <h4>Santa Claus 1</h4>
        </div>
        <div class="col-sm-4">
            <img src="">
            <h4>Santa Claus 2</h4>
        </div>
            <div class="col-sm-4">
            <img src="">
            <h4>Santa Claus 3</h4>
        </div>
    </div>
</div>

<div class="container text-center">
    <h2>Mass Schedules</h2>
    <div class="row">
        <div class="col-lg-12">
            <img src="" class="img-responsive">
        </div>
    </div>
</div>

<div class="container">
    <h2 id="h2Services">Services</h2>
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <h4>Baptism</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-md-6 col-xs-12">
            <img src="" class="img-responsive"> <br>
        </div>
        <div class="col-md-6 col-xs-12">
            <h4>Wedding</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-md-6 col-xs-12">
            <img src="" class="img-responsive"><br>
        </div>
    </div>
</div>

<div class="container">
    <h2 id="h2Services">About us</h2><br>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <h4>Father</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <img src="img/au1.jpg" class="img-responsive"> <br>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <h4>Mother</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <img src="img/au2.jpg" class="img-responsive">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <h4><a href="#hidden" data-toggle="collapse">Tell more click here ?</a></h4>
        <div id="hidden" class="collapse">
            <h4>Brother</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
	<div class="row">
		<div class="col-sm-4">
			<h3>Contact us</h3>
			<h4>Address:</h4>
			<h5>Brgy. Balibago, Santa Rosa City, Laguna </h5>
		</div>
		<div class="col-sm-4">
			<h3>Connect</h3>
			<a href="" class="icon fa fa-facebook"></a>
			<a href="" class="icon fa fa-twitter"></a>
			<a href="" class="icon fa fa-youtube"></a>
			<a href="" class="icon fa fa-google"></a>
			<a href="" class="icon fa fa-amazon"></a>
		</div>
		<div class="col-sm-4">
			<img src="img/fo2.png" class="icon" id="fo">
		</div>
	</div>
</footer>

@endsection