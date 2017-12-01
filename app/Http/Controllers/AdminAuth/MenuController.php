<?php

namespace App\Http\Controllers\AdminAuth;

use App\Menu;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class MenuController extends Controller
{

    protected function guard()
    {
        return Auth::guard('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menus = Menu::all();
        return view('admin.menus', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('admin.add_menu', compact('categories'));
      //  echo "Ok";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        //Setting up imamge saving path
        $destinationPath = storage_path('app/public/images');

        $extension = $request->file('image')->getClientOriginalExtension();

        //Setting up image name while saving
        $fileName = $request->name.".".$extension;
        

        $this->validate($request, [
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        //upload the image to the path
        $request->file('image')->move($destinationPath, $fileName);
        
        
        $menu = new Menu;
        $menu->name = $request->name;
        $menu->price = $request->price;
        $menu->description = $request->description;
        $menu->category = $request->category;
        $menu->image = $fileName;
        $menu->save();

        return redirect('/menus/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //
        
        $categories = Category::all();
        return view('admin.update_menu', compact('menu', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {

        //
        $req = $request->all();
        
$menu = Menu::where('id', $request->id);
        

       //dd($req);
        //dd($menu);
      //  break;
        

         if($request->hasFile('image')) {

           Storage::delete($menu->image);


            //Setting up imamge saving path
        $destinationPath = storage_path('app/public/images');

        $extension = $request->file('image')->getClientOriginalExtension();

        //Setting up image name while saving
        $fileName = $request->name.".".$extension;
        

        $this->validate($request, [
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        //upload the image to the path
        $request->file('image')->move($destinationPath, $fileName);

        $menu->image = $fileName;
        }


        
        

        
        
        
        //$menu = new Menu;
        $menu->name = $request->name;
        $menu->price = $request->price;
        $menu->description = $request->description;
        $menu->category = $request->category;
        
        $menu->save();
        return redirect('/menus/update/{$menu->id}');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //deleting the image of menu from directory
       // if(file_exists(storage_path('app/public/images/').$menu->image)
             Storage::delete('public/images/'.$menu->image);   
            
        
        //delete the menu from database
        Menu::destroy($menu->id);
        return redirect('/menus');

    }
}
