@extends('layouts.landing')
@section('container')
<div class="abt-section mb-150 mt-150">
    <div class="container">
        <div class="col-lg-8 offset-lg-2 text-center">
			<div class="section-title">	
				<h3><span class="orange-text">Detail</span> Blogs</h3>
			</div>
		</div>
        <div class="row">
            @if ($blog->image != null)
            <div class="col-lg-5 col-md-3 text-center">
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="" width="700">
            </div>
            @endif
            <div class="col-lg-6 col-md-12">
                <div class="abt-text">
                    <p class="top-sub">Jember, {{$blog->created_at}}</p>
                    <h2><span class="orange-text">{{ $blog->title }}</span></h2>
                    <p class="top-sub">Author : {{$blog->user->name}}</p>
                    <p>{{ $blog->content }}</p>
                    <a href="/home" class="boxed-btn mt-4">Back to home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection