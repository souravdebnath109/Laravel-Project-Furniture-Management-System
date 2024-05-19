<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use App\Models\About;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        return view('dashboard.admin.admin_dashboard');
    }

    public function add_furniture()
    {
        return view('dashboard.admin.add_furniture');
    }
    public function view_furniture()
    {
        $data['getFurniture'] = Furniture::all();
        return view('dashboard.admin.view_furniture', $data);
    }
    public function post_add_furniture(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'photo_path' => 'required|mimes:png,jpg,jpeg,bmp',
            'price' => 'required'
        ]);

        $imageName = '';
        if ($image = $request->file('photo_path')) {
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            //into public folder
            $image->move('Furnixure/Furniture', $imageName);
        }

        $furniture = new Furniture();
        $furniture->title = $request->input('title');
        $furniture->photo_path = $imageName;
        $furniture->price = $request->input('price');
        $furniture->save();
        return redirect('/_admin/add_furniture')->with('success', 'Furniture added successfully');
    }
    public function edit_furniture($id)
    {
        $data['getFurniture'] = Furniture::find($id);
        return view('dashboard.admin.edit_furniture', $data);
    }

    public function post_edit_furniture($id, Request $request)
    {

        $furniture = Furniture::find($id);

        $request->validate([
            'title' => 'required',
            'price' => 'required',
        ]);

        $imageName = '';
        $deleteOldImage = 'Furnixure/Furniture/' . $furniture->photo_path;

        if ($image = $request->file('photo_path')) {
            if (file_exists($deleteOldImage)) {
                File::delete($deleteOldImage);
            }
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            //into public folder
            $image->move('Furnixure/Furniture/', $imageName);
        } else {
            $imageName = $furniture->photo_path;
        }

        $furniture->title = $request->input('title');
        $furniture->photo_path = $imageName;
        $furniture->price = $request->input('price');
        $furniture->save();
        return redirect('/_admin/view_furniture')->with('success', 'Furniture Updated successfully');
    }

    public function delete_furniture($id)
    {
        $furniture = Furniture::find($id);
        $deleteOldImage = 'Furnixure/Furniture/' . $furniture->photo_path;
        if (file_exists($deleteOldImage)) {
            File::delete($deleteOldImage);
        }
        $furniture->delete();

        return redirect('/_admin/view_furniture')->with('error', 'Furniture Deleted successfully');
    }




    //================amar  kora for blog

    // public function dashboard(){
    //     return view('dashboard.admin.admin_dashboard');
    // }


    public function create()
    {
        return view('dashboard.admin.blog.create');
    }

    public function view_blog()
    {
        $dataa['getblog'] = About::all();
        return view('dashboard.admin.blog.view_blog', $dataa);
    }



    public function post_add_blog(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'photo_path' => 'required|mimes:png,jpg,jpeg,bmp',
            'description' => 'required',
            'website_link' => 'required|url|max:255'
        ]);

        $imageName = '';
        if ($image = $request->file('photo_path')) {
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            // Move the image to the public folder
            $image->move('Blogs', $imageName);
        }

         $blog=new About();
  
        $blog->title = $request->input('title');
        $blog->photo_path = $imageName;
        $blog->description = $request->input('description');
        $blog->website_link = $request->input('website_link');
        $blog->save();

        return redirect('/_admin/add_blog')->with('success', 'Blog added successfully');
    }


    public function edit_blog($id)
    {
        $dataa['getblog'] = About::find($id);
        return view('dashboard.admin.blog.edit_blog', $dataa);
    }


    public function post_edit_blog($id, Request $request)
    {
        $blog = About::find($id);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'website_link' => 'required|url|max:255',
            'photo_path' => 'nullable|mimes:png,jpg,jpeg,bmp'
        ]);

        $imageName = $blog->photo_path;

        if ($image = $request->file('photo_path')) {
            // Delete old image if exists
            if (file_exists(public_path('Blogs/' . $blog->photo_path))) {
                unlink(public_path('Blogs/' . $blog->photo_path));
            }
            $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            // Store new image
            $image->move('Blogs', $imageName);
        }

        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        $blog->website_link = $request->input('website_link');
        $blog->photo_path = $imageName;
        $blog->save();

        return redirect('/_admin/view_blogs')->with('success', 'Blog updated successfully');
    }



    public function delete_blog($id)
{
    $blog = About::find($id);
    $deleteOldImage = public_path('Blogs/' . $blog->photo_path);

    if (file_exists($deleteOldImage)) {
        unlink($deleteOldImage);
    }

    $blog->delete();

    return redirect('/_admin/view_blogs')->with('error', 'Blog deleted successfully');
}

}
