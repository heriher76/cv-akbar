<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>

    <!-- My CSS -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <!-- End of My CSS -->

    <title>My Portfolio</title>
  </head>
  <body class="mt-5">
    
    <!-- navbar code -->
    <nav class="navbar fixed-top navbar-light" style="background-color: #e3f2fd;">
      <div class="container">
        <a class="navbar-brand" href="#">Navigation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarAltMarkup" aria-expanded="false" aria label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Home<span class="sr-only">(current)</span>
              <a class="nav-item nav-link" href="#about">About</a>
              <a class="nav-item nav-link" href="#Education">Education</a>
              <a class="nav-item nav-link" href="#Port">Portfolio</a>
              <a class="nav-item nav-link" href="#gallery">Gallery</a>
              <a class="nav-item nav-link" href="#contact" tabindex="-1" aria disabled="true">Contact</a>
              <a class="nav-item nav-link" href="#">Login</a>
            </a>
          </div>
        </div>
      </div>
    </nav>
    <!-- navbar end --> 

    <!-- jumbotron code -->
    <div class="jumbotron jumbotron-fluid" style="background-image: url({{ url('mybio/'.$myBio->photo_background) }})">
      <div class="container text-center">
      <img src="{{ url('mybio/'.$myBio->photo_profile) }}" class="rounded-circle img-thumbnail" style="max-width: 50vw; max-height: 50vh;">
      <h1>Muhammad Akbar Hadiq</h1>
      <p>{{ $myBio->study }} || {{ $myBio->hobby }}</p>
      </div>
    </div>
    <!-- end of jumbotron code -->

    <!-- container (about) code -->
    <section id="about" class="about">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h2 class="mb-4">About</h2>
        
        </div> 
      </div>
      <div class="row justify-content-center">
        <div class="col-md-5 text-center">
          <p>{!! $myAbout->paragraf_one !!}</p>
        </div>
        <div class="col-md-5 text-center">
          <p>{!! $myAbout->paragraf_two !!}</p>
        </div>
      </div> 
    </div>
  </section>
    <!-- container(about) end of code -->

    <!--container(Education) code start -->
    <section id="Education" class="portfolio text-light pb-5" style="background-image: url({{ url('img/board.jpg') }} ); background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="text-center mb-5 pt-5 text-dark">Riwayat Pendidikan</h2>
      	</div>
      </div>
      @foreach($myEducations as $myEducation)
      <div class="media mb-5">
	      <img src="{{ url('education/'.$myEducation->thumbnail) }}" widht="100px" height="100px" class="align-self-center mr-3" alt="...">
	      <div class="media-body">
		      <h5 class="mt-0 ">{{ $myEducation->name }}</h5>
		      <h6>{{ $myEducation->from }} || {{ $myEducation->until }}</h6>
		      <p>{!! $myEducation->description !!}</p>
		      <p class="mb-0">{{ $myEducation->address }}</p>
		  </div>
	  </div>
	  @endforeach
    </div>
    </section>
     <!-- Container(Education) end -->
     
     <!-- Container(Portfolio) -->
     <section id="Port" style="background-image: url({{ url('front/img/portfolio.png') }}); background-size: cover;" class="Port pb-4">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Portfolio</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          @foreach($myPortfolios as $portfolio)
          <div class="col-lg-4">
            <div class="card">
              <div class="card-header">
                {{ $portfolio->from }} || {{ $portfolio->until }} 
              </div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p>{!! $portfolio->description !!} </p>
                  <footer class="blockquote-footer">Dengan posisi bidang<cite title="Source Title"> {{ $portfolio->position }} </cite></footer>
                </blockquote>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </section>
      <!-- Container(Portfolio end) -->

      <!-- Container (Skill) -->
      <section id="skill" class="skill" style="background-image: url({{ url('front/img/backgrounds/code.jpg') }} ); background-size: cover;">
      <div class="container">
        <h2 class="text-center pt-4 pb-5">Skill</h2>
        <div class="row lg-4">
          <div class="col">
			@foreach($mySkills as $skill)
            <h3 class="text-lg-left text-center {{ $skill->color }}">{{ $skill->name }}</h3>
            <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{ $skill->percentage }}" aria-valuemin="0" aria-valuemax="100" style="width: 35%">{{ $skill->percentage }} %</div>
            </div>
			@endforeach
          </div>
        </div>
      </div>
    </section>
      <!-- Container (SKill end) -->

      <!--Container (gallery) start -->
      <section id="gallery" class="gallery bg-light" style="background-image: url({{ url('front/img/backgrounds/camera.jpg') }} ); background-size: cover;">
        <div class="container">

  <h1 class="text-center mb-0 pt-4 pb-5">Gallery</h1>

  <div class="row text-center text-lg-left">
	@foreach($myGalleries as $gallery)
      <div class="col-lg-3 col-md-4 col-6">
        <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="{{ url('gallery/'. $gallery->name) }}" alt="">
          </a>
      </div>
      @endforeach
    </div>
  </div>
      </section>
      <!--Container (gallery) end --> 

     <!-- Container(contact) start -->
     <section id="contact" class="contact bg-light" style="background-image: url({{ url('front/img/backgrounds/message.jpg') }} ); background-size: cover;">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Contact Me</h2>

      </div>
    </div>
    <div class="row justify-content-center pb-3">
      <div class="col-lg-4">
        <div class="card border-dark mb-3 text-white bg-primary">
          <div class="card-body text-white">
            <h5 class="card-title text-center">Contact Me</h5>
            <p class="card-text text-center">Tak kenal maka tak sayang, maka harus kenalan dulu biar bisa sayang, or if u just want to just say Hello.</p>
          </div>
        </div>

        <ul class="list-group">
          <h2 class="list-group-item">Home</h2>
          <li class="list-group-item">{{ $myAddress->line_one }}</li>
          <li class="list-group-item">{{ $myAddress->line_two }}</li>
          <li class="list-group-item">{{ $myAddress->line_three }}</li>
          <li class="list-group-item">{{ $myAddress->line_four }}</li>
        </ul>
      </div>

      <div class="col-lg-6">
        <form action="{{ url('send-message') }}" method="POST">
        	{{csrf_field()}}
        <div class="form-group">
          <label for="Nama">Nama</label>
          <input type="text" name="name" class="form-control" id="Nama">
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" id="email">
        </div>

        <div class="form-group">
          <label for="phone">Nomor Telepon</label>
          <input type="text" name="hp" class="form-control" id="phone">
        </div>
        
        <div class="form-group">
          <label for="pesan">Pesan</label>
          <textarea class="form-control" name="message" id="pesan" rows="3"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Kirim Pesan!</button>
        </div>
      </form>


        
      </div>
    </div>
    
   
    </div>
   </section>
     <!-- Container (contact) end -->

     <!-- footer start -->
     <footer class="bg-dark text-white text-center pt-2">
      <div class="container">
        <div class="row">
          <a href="{{ $myBio->twitter }}"><i class="fa fa-twitter"></i></a>
           <a href="{{ $myBio->ig }}"><i class="fa fa-instagram"></i></a>
          <div class="col">
            <p>Muhammad Akbar Hadiq © 2019</p>
          </div>
        </div>
      </div>
       
     </footer>
     <!-- footer end -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>