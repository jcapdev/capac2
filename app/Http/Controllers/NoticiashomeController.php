<?php

namespace App\Http\Controllers;

use App\Models\Noticiashome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


/**
 * Class NoticiashomeController
 * @package App\Http\Controllers
 */
class NoticiashomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $noticiashomes = Noticiashome::paginate();

        return view('noticiashome.index', compact('noticiashomes'))
            ->with('i', (request()->input('page', 1) - 1) * $noticiashomes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $noticiashome = new Noticiashome();
        return view('noticiashome.create', compact('noticiashome'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request()->validate(Noticiashome::$rules);
        $imagePath = $request->file('imagen')->store('imagen', 'public');
       
        // Crear una instancia del modelo Image
        $rute = "../storage/app/public/";
        $image = new Noticiashome();
        $image->imagen = $rute . $imagePath ;
        $image->title = $request->input('title');
        $image->autor = $request->input('autor');
        $image->date = $request->input('date');
        $image->time = $request->input('time');
        $image->place = $request->input('place');
        $image->descripcion = $request->input('descripcion');
        $image->save();

        return redirect()->route('noticiashome.index')
            ->with('success', 'Noticiashome created successfully.');


        
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $noticiashome = Noticiashome::find($id);

        return view('noticiashome.show', compact('noticiashome'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $noticiashome = Noticiashome::find($id);

        return view('noticiashome.edit', compact('noticiashome'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Noticiashome $noticiashome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Noticiashome $noticiashome)
    {
        request()->validate(Noticiashome::$rules);

        if ($request->hasFile('imagen')) {
            // // Eliminar la imagen anterior
            Storage::disk('public')->delete($noticiashome->image_path);
    
            // // Subir la nueva imagen
            $rute = "../storage/app/public/";
            $imagePath = $request->file('imagen')->store('imagen', 'public');
            $noticiashome->imagen = $rute . $imagePath ;
            $noticiashome->title = $request->input('title');
            $noticiashome->autor = $request->input('autor');
            $noticiashome->date = $request->input('date');
            $noticiashome->time = $request->input('time');
            $noticiashome->place = $request->input('place');
            $noticiashome->descripcion = $request->input('descripcion');
            

        } 
       

       $noticiashome->save();  

       /* $noticiashome->update($request->all());*/

        return redirect()->route('noticiashome.index')
            ->with('success', 'Noticiashome updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $noticiashome = Noticiashome::find($id)->delete();

        return redirect()->route('noticiashome.index')
            ->with('success', 'Noticiashome deleted successfully');
    }
}
