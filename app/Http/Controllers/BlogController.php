<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::paginate(10);

        return view('blog', ['blogList' => $blog]);
    }
    public function show($id)
    {
        $blog = Blog::with('user')->findOrFail($id);

        return view('blogdetail', ['blog' => $blog]);
    }

    public function storeView()
    {
        return view('blogadd');
    }

    public function store(Request $request)
    {
        $blog = new Blog();

        if ($request->image) {
            $blog->image = $request->image->store('blog_image', 'public');
        }

        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->user_id = 7;
        $blog->save();

        if ($blog) {
            Session::flash('status', 'success');
            Session::flash('message', 'add new blog success!');
        }
        return redirect('/blog');
    }

    public function updateView($id)
    {
        $blog = Blog::with('user')->findOrFail($id);
        return view('blogupdate', ['blog' => $blog]);
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        if ($request->image) {
            File::delete(storage_path('app/public/' . Blog::find($id)->image));
            $blog->image = $request->image->store('blog_image', 'public');
        }

        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->user_id = 7;
        $blog->update();

        if ($blog) {
            Session::flash('status', 'success');
            Session::flash('message', 'edit blog success!');
        }
        return redirect('/blog-detail/' . $blog->id);
    }

    public function destroy(Request $request)
    {
        $ids = $request->ids;

        if($ids != null) {
            $blog = Blog::whereIn('id', $ids);
            $blog->delete();

            if($blog) {
                Session::flash('status', 'success');
                Session::flash('message', 'delete blog success!');
            }

            return redirect('/blog');
        } else {
            Session::flash('status', 'failed');
            Session::flash('message', 'no data has been selected!');

            return redirect('/blog');
        }
    }

    public function active($id)
    {
        $blog = Blog::findOrFail($id);

        $blog->status = 'active';
        $blog->update();

        if($blog) {
            Session::flash('status', 'success');
            Session::flash('message', 'action success!');
        }

        return redirect()->back();
    }

    public function nonactive($id)
    {
        $blog = Blog::findOrFail($id);

        $blog->status = 'non-active';
        $blog->update();

        if($blog) {
            Session::flash('status', 'success');
            Session::flash('message', 'action success!');
        }

        return redirect()->back();
    }
}
