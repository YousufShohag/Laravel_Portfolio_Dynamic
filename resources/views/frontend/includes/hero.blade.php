<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
        @foreach ($home as $home)
        <h1>{{$home->name}}</h1>
        @endforeach
     
      <p>I'm <span class="typed" data-typed-items="Full Stack Web Devloper,Laravel Devloper, Graphics Design, Freelancer, Remote worker, Full Time Worker"></span></p>
    </div>
  </section><!-- End Hero -->