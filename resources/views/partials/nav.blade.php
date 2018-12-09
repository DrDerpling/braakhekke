<div class="row">
    <div class="col m-1">
        <a class="navbar-brand" href="/"><img src="{{ asset('/images/logo.png') }}"></a>
    </div>
</div>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ons werk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Foto's</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Partners</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Referenties</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
    </div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide bg-black" data-ride="carousel">
    <div class="carousel-inner w-90">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('/images/headers/header1.jpg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('/images/headers/header2.jpg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('/images/headers/header3.jpg') }}" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>