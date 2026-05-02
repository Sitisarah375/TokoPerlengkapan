<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Data;
use Illuminate\Support\Facades\Auth;

class TokoController extends Controller
{
    public function user()
    {
        $data = Data::all();
        $category = Category::all(); // WAJIB

        return view('beranda.beranda', compact('data','category'));
    }

    public function filterKategori($id)
    {
        $data = Data::where('kategori', $id)->get();
        $category = Category::all();

        return view('beranda.beranda', compact('data','category'));
    }

    public function detail($id)
    {
        $produk = Data::where('tokoID', $id)->first();

        return view('beranda.detail', compact('produk'));
    }

    public function login()
    {
        return View('login');
    }

    public function admin()
    {
        $data = User::all();
        return View('admin.admin', compact('data'));
    }

    public function auth(Request $request)
    {
        $request->validate([
            'username' => 'required|exists:users,username',
            'password' => 'required',
        ],[
            'username.exists' => "This username doesn't exists"
        ]);

        $user = $request->only('username', 'password');
        if (Auth::attempt($user)){
            if(Auth::user()->role == '1') {
                return redirect('/admin');
            }else{
            return redirect('/');
            }
        }else{
            return back();
        }; 
    }

    public function add(Request $request)
    {
        // @dd($request->all());
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'image' => 'required',
        ]);

        $input = $request->all();
            if($image = $request->file('image')) {
                $destinationPath = 'img/';
                $coverImage = date('YmdHis').'.'. $image->getCLientOriginalExtension();
                $image->move($destinationPath, $coverImage);
                $input['image'] = "$coverImage";
            }

            Data::create($input);

        return redirect('/new-katalog')->with('success', 'berhasil membuat !');
    }

    public function newKatalog(){
        $data = Data::all(); 
        $category = Category::all(); 
        return view ('admin.katalog', compact('data', 'category'));
    }

        public function edit(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
        ]);

        $data = Data::where('tokoID', $id)->first();

        $input = $request->all();

        if($image = $request->file('image')) {
            $destinationPath = 'img/';
            $coverImage = date('YmdHis').'.'.$image->getClientOriginalExtension();
            $image->move($destinationPath, $coverImage);
            $input['image'] = "$coverImage";
        } else {
            $input['image'] = $data->image;
        }

        $data->update($input);

        return redirect('/new-katalog')->with('success', 'berhasil update!');
    }

    public function editKatalog($id)
    {
        $edit = Data::where('tokoID', $id)->first();
        $category = Category::all();

        return view('admin.edit', compact('edit', 'category'));
    }

    public function destroyKatalog(Data $data, $id)
    {
        //
        $data = Data::where('tokoID', $id);
        $data->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus');
    }

    public function category(){
        $category = Category::all(); 
        return view ('admin.category', compact('category'));
    }

    public function destroyCategory(Category $category, $id)
    {
        //
        $data = Category::where($id);
        $data->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus');
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'category_name'   => 'required',
        ]);

        Category::create([
            'category_name' => $request->category_name,
        ]);

        return redirect('/category');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}