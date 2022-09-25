<section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <h2>About</h2>
        @foreach ($about as $about)
        <p>{{$about->about_long_description}}</p>
        @endforeach
        
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="{{asset('backend/about/'.$about->image)}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>{{$about->title}}</h3>
          <p class="fst-italic">
            {{$about->about_short_description}}
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{$about->birthday}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>{{$about->website}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{$about->phone}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{$about->city}}</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{$about->age}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{$about->degree}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{$about->email}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>{{$about->freelance}}</span></li>
              </ul>
            </div>
          </div>
          <p>
           
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->