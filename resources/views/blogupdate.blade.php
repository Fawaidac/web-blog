@extends('layouts.landing')

@section('container')
{{-- <div class="mt-150 mb-150">
    <div class="container">
    <div class="col-lg-8 offset-lg-2 text-center">
            <div class="section-title">	
                <h3><span class="orange-text">Edit</span> Blogs</h3>
            </div>
        </div>
        <div class="col-sm-10 mx-auto my-3"  style="flex:1;">
            <form action="/blog/{{$blog->id}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="form-group col-6">
                        <label for="title" class="mb-1">Blog Title</label>
                        
                        <input type="text" class="form-control" id="title" placeholder="Blog Title" name="title" value="{{$blog->title}}">
                    </div>
                    
                    <div class="form-group col-6">
                        <label for="image" class="mb-1">Image</label><br>
                        <input type="file" class="form-control-file" id="image" name="image" value="">
                    </div>
                </div>
                <div class="form-group my-3">
                    <label for="content" class="mb-1">Content</label>
                    <textarea class="form-control" id="content" rows="3" name="content">{{$blog->content}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-danger" href="/blog">Cancel</a>
            </form>
        </div>
    </div>
</div> --}}
<div class="contact-from-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mb-5 mb-lg-0">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">	
                        <h3><span class="orange-text">Edit</span> Blogs</h3>
                    </div>
                </div>
                <div id="form_status"></div>
                <div class="contact-form">
                    <form action="/blog/{{ $blog->id }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <p>
                            <input type="text" class="form-control" id="title" placeholder="Blog Title" name="title" value="{{$blog->title}}">
                        </p>
                        <p>
                            <input type="file" class="form-control-file" id="image" name="image" value="">
                        </p>
                        <p>
                            <textarea class="form-control" id="content" cols="30" rows="10" placeholder="Content" name="content">{{$blog->content}}</textarea>
                        </p>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a class="btn btn-danger" href="/blog">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection