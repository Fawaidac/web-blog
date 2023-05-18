@extends('layouts.landing')
@section('container')
<div class="mt-150 mb-150">
  <div class="container">
    <div class="col-lg-8 offset-lg-2 text-center">
			<div class="section-title">	
				<h3><span class="orange-text">Add</span> Blogs</h3>
			</div>
		</div>
    <div class="col-sm-10 mx-auto my-3 billing-address-form" style="flex:1;">
      <form action="blog" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row mb-3">
              <p><input type="text" name="title" placeholder="Title" id="title" class="form-controller" required></p>
              <p><input type="file" name="image" id="image" class="form-controller-file" required></p>
              <p><input name="content" rows="4" id="content" placeholder="Contents" class="form-controller" required></p>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <a class="btn btn-danger" href="/blog">Cancel</a>
      </form>
  </div>
  </div>
</div>
@endsection
