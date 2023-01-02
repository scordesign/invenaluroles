<?php

namespace App\Http\Controllers;

use App\Models\Parejacontedo;
use Illuminate\Http\Request;

/**
 * Class ParejacontedoController
 * @package App\Http\Controllers
 */
class ParejacontedoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parejacontedos = Parejacontedo::paginate();

        return view('parejacontedo.index', compact('parejacontedos'))
            ->with('i', (request()->input('page', 1) - 1) * $parejacontedos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parejacontedo = new Parejacontedo();
        return view('parejacontedo.create', compact('parejacontedo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Parejacontedo::$rules);

        $parejacontedo = Parejacontedo::create($request->all());

        return redirect()->route('parejacontedos.index')
            ->with('success', 'Parejacontedo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parejacontedo = Parejacontedo::find($id);

        return view('parejacontedo.show', compact('parejacontedo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parejacontedo = Parejacontedo::find($id);

        return view('parejacontedo.edit', compact('parejacontedo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Parejacontedo $parejacontedo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parejacontedo $parejacontedo)
    {
        request()->validate(Parejacontedo::$rules);

        $parejacontedo->update($request->all());

        return redirect()->route('parejacontedos.index')
            ->with('success', 'Parejacontedo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $parejacontedo = Parejacontedo::find($id)->delete();

        return redirect()->route('parejacontedos.index')
            ->with('success', 'Parejacontedo deleted successfully');
    }
}
