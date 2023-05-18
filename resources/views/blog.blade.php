@extends('layouts.landing')

@section('container')
  {{-- <div class="container">
    <div class="mt-150 mb-150">
      <div class="row">
        <div class="text-center">
          @if(Session::has('status'))
            <div class="alert alert-success mt-3 font-weight-bold" style="margin-left: 112px; margin-right: 112px;" role="alert">
                <i class="fa fa-check-circle" aria-hidden="true"></i>
                {{Session::get('message')}}
            </div>
            @endif
            <div class="section-title">	
              <h3><span class="orange-text">My</span> Blog ?</h3>
            </div>
            <div class="col-sm-10 mx-auto mb-3" style="flex:1;">
            <div class="d-flex justify-content-end mb-3">
                <a class="btn btn-primary mt-2 me-2" href="/blog-add">Add Blog</a>
                <form action="/blog-delete" method="POST">
                @csrf
                <button class="btn btn-danger mt-2" type="submit">Delete Blog</button>
            </div>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                @foreach ($blogList as $item)
                    <tbody>
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                @if ($item->image != null)
                                    <img src="{{ asset('storage/' . $item->image) }}" width="50px" height="50px" alt="{{ $item->title }}">
                                @else
                                    <img src="{{ asset('images/lospollos.jpg') }}" width="50px" height="50px" alt="{{ $item->title }}">
                                @endif    
                            </td>
                            <td>{{ $item->title }}</td>
                            <td>
                                @if ($item->status === 'active')
                                    <p style="color: green;">Active</p>
                                @else
                                    <p style="color: red;">Non-Active</p>
                                @endif
                            </td>
                            <td>
                                <a href="/blog-detail/{{$item->id}}" class="btn btn-outline-primary btn-sm mx-1 my-2">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a href="/blog-update/{{$item->id}}" class="btn btn-outline-warning btn-sm mx-1 my-2">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>
                                @if ($item->status === 'active')
                                    <a href="/blog-non-active/{{$item->id}}" class="btn btn-outline-danger btn-sm mx-1 my-2">
                                        <i class="fa-solid fa-x"></i>
                                    </a>
                                @else
                                    <a href="/blog-active/{{$item->id}}" class="btn btn-outline-success btn-sm mx-1 my-2">
                                        <i class="fa-solid fa-check"></i>
                                    </a>
                                @endif
                            </td>
                            <td class="text-center">
                                <input type="checkbox" name="ids[{{$item->id}}]" id="delete" value="{{$item->id}}">
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            <div class="my-3 d-flex justify-content-center">
                {!! $blogList->links('pagination::bootstrap-4') !!}
            </div>
            </form>
        </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  <div class="cart-section mt-150 mb-150">
		<div class="container text-center">
      <div class="section-title">	
        <h3><span class="orange-text">My</span> Blog ?</h3>
      </div>
      @if(Session::has('status'))
      <div class="alert alert-success mt-3 font-weight-bold" style="margin-left: 112px; margin-right: 112px;" role="alert">
          <i class="fa fa-check-circle" aria-hidden="true"></i>
          {{Session::get('message')}}
      </div>
      @endif
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="cart-table-wrap">
            <div class="d-flex justify-content-end mb-3">
              <a class="btn btn-primary mt-2 me-2" href="/blog-add">Add Blog</a>
              <form action="/blog-delete" method="POST">
              @csrf
              <button class="btn btn-danger mt-2" type="submit">Delete Blog</button>
            </div>
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove">No</th>
									<th class="product-image">Blog Image</th>
									<th class="product-name">Blog Title</th>
									<th class="product-price">Blog Status</th>
									<th class="product-quantity">Blog Action</th>
									<th class="product-total">Delete</th>
								</tr>
							</thead>
              @foreach ($blogList as $item)
              <tbody>
								<tr class="table-body-row">
									<td>{{ $loop->iteration }}</td>
									<td class="product-image">
                    @if ($item->image != null)
                    <img src="{{ asset('storage/' . $item->image) }}" width="50px" height="50px" alt="{{ $item->title }}">
                  @else
                    <img src="{{ asset('images/lospollos.jpg') }}" width="50px" height="50px" alt="{{ $item->title }}">
                  @endif 
                  </td>
									<td class="product-name">
                    {{ $item->title }}
                  </td>
									<td class="product-price">
                    @if ($item->status === 'active')
                    <p style="color: green;">Active</p>
                    @else
                    <p style="color: red;">Non-Active</p>
                    @endif
                  </td>
									<td class="product-quantity">
                    <a href="/blog-detail/{{$item->id}}" class="btn btn-outline-primary btn-sm mx-1 my-2">
                      <i class="fa-solid fa-eye"></i>
                  </a>
                  <a href="/blog-update/{{$item->id}}" class="btn btn-outline-warning btn-sm mx-1 my-2">
                      <i class="fa-solid fa-pencil"></i>
                  </a>
                  @if ($item->status === 'active')
                      <a href="/blog-non-active/{{$item->id}}" class="btn btn-outline-danger btn-sm mx-1 my-2">
                          <i class="fa-solid fa-x"></i>
                      </a>
                  @else
                      <a href="/blog-active/{{$item->id}}" class="btn btn-outline-success btn-sm mx-1 my-2">
                          <i class="fa-solid fa-check"></i>
                      </a>
                  @endif
                  </td>
									<td class="product-total">
                    <input type="checkbox" name="ids[{{$item->id}}]" id="delete" value="{{$item->id}}">
                  </td>
								</tr>
							</tbody>
              @endforeach
						</table>
            <div class="my-3 d-flex justify-content-center">
              {!! $blogList->links('pagination::bootstrap-4') !!}
          </div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection