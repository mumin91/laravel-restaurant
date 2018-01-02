<?php

namespace App\Http\Controllers\AdminAuth;

use App\Menu;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\AdminAuth\Session;
use Illuminate\Database\Query\Builder;
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
        return view('admin.menu.menus', compact('menus'));
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
        return view('admin.menu.add_menu', compact('categories'));
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
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'name' => 'unique:menus'
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
       // Session::flash('success', 'Event delete successfully!');
        return redirect('/menus/create')->with('status', 'Menu successfully created');
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

        $categories = Category::pluck('name');
        return view('admin.menu.update_menu', compact('menu', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $menu = Menu::find($id);


        if($request->hasFile('image')) {



            //Setting up imamge saving path
            $destinationPath = storage_path('app/public/images');

            $extension = $request->file('image')->getClientOriginalExtension();

        //Setting up image name while saving
            $fileName = $request->name.".".$extension;


            $this->validate($request, [
                'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                'name' => 'unique:menus'
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
        return redirect('/menus/update/'.$id)->with('status', 'Menu Updated');
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
       return redirect('/all_menus');

   }
}
