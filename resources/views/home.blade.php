@extends('layouts.landing')

@section('container')

	<!-- end hero area -->

	<!-- features list section -->
  <section id="pleasure">
    <div class="list-section pt-80 pb-80">
      <div class="container">
        <div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">My</span> Pleasure</h3>
					</div>
				</div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="list-box d-flex align-items-center">
              <div class="list-icon">
                <img src="assets/img/code.png" alt="" height="50" class="mr-4">
              </div>
              <div class="content">
                <h3>Coding</h3>
                <p>My obsession, and source of joy</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="list-box d-flex align-items-center">
              <div class="list-icon">
                <img src="assets/img/console.png" alt="" height="50" class="mr-4">
              </div>
              <div class="content">
                <h3>Playing Games</h3>
                <p>Addictive escape from reality</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="list-box d-flex justify-content-start align-items-center">
              <div class="list-icon">
                <img src="assets/img/sleeping.png" alt="" height="50" class="mr-4">
              </div>
              <div class="content">
                <h3>Sleeping</h3>
                <p>Fighting also needs rest</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
	<!-- end features list section -->

	<!-- product section -->
  <section class="pt-20" id="about">
  	<div class="product-section mt-150 mb-150">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 text-center">
            <div class="section-title">	
              <h3><span class="orange-text">About</span> Me ?</h3>
              <p>My name is Achmad Fawaid and I am a lazy person who is tired of trying to understand love. If I have a girlfriend, it means I am acting out of character,and as astudent of information technology at Politeknik Negeri Jember,I have a lot of responsibilities. I come from Jember and I'm not the type to get angry easily. Kalo kadang awkward atau little annoying yagapapa emang gitu si</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
	<!-- end product section -->
	<!-- testimonail-section -->
	<div class="testimonail-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/fawaid.jpg" alt="">
							</div>
							<div class="client-meta">
								<h3>Fawaidac_<span>Quote Of The Day</span></h3>
								<p class="testimonial-body">
									" Never give up to always try and never try to give up "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/fawaid2.jpg" alt="">
							</div>
							<div class="client-meta">
								<h3>Fawaidac_<span>Quote Of The Day</span></h3>
								<p class="testimonial-body">
									" Meskipun terkadang mimpimu adalah sebuah misteri, jangan pernah mencoba untuk berhenti, Karena Tidak ada mimpi yang terlalu tinggi untuk dicapai, yang ada hanya niat yang terlalu rendah untuk melangkah "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonail-section -->

	<!-- latest news -->
	<div class="latest-news mt-150 mb-150">
  <div class="container">
		<div class="col-lg-8 offset-lg-2 text-center">
			<div class="section-title">	
				<h3><span class="orange-text">My</span> Blogs</h3>
			</div>
		</div>
    <div class="row">
      @foreach ($blogList as $item)
      <div class="col-lg-4 col-md-6">
        <div class="single-latest-news">
          @if ($item->image != null)
									<img src="{{ asset('storage/' . $item->image) }}" width="370px" height="370px" alt="{{ $item->title }}">
							@else
									<img src="{{ asset('assets/img/fawaid.jpg') }}" width="370px" height="370px" alt="{{ $item->title }}">
							@endif
          <div class="news-text-box">
            <h3><a href="https://www.google.com/search?q={{ $item->title }}">{{ $item->title }}</a></h3>
            <p class="blog-meta">
              <span class="author"><i class="fas fa-user"></i>{{ $item->user->name }}</span>
              <span class="date"><i class="fas fa-calendar"></i> {{ $item->updated_at->format('d F, Y') }}</span>
            </p>
            <p class="excerpt text-truncate">{{ $item->content }}</p>
            <a href="/blog-detail/{{$item->id}}" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection