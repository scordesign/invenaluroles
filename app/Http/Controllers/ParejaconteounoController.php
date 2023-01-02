<?php

namespace App\Http\Controllers;

use App\Models\Parejaconteouno;
use Illuminate\Http\Request;

/**
 * Class ParejaconteounoController
 * @package App\Http\Controllers
 */
class ParejaconteounoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parejaconteounos = Parejaconteouno::paginate();

        return view('parejaconteouno.index', compact('parejaconteounos'))
            ->with('i', (request()->input('page', 1) - 1) * $parejaconteounos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parejaconteouno = new Parejaconteouno();
        return view('parejaconteouno.create', compact('parejaconteouno'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Parejaconteouno::$rules);

        $parejaconteouno = Parejaconteouno::create($request->all());

        return redirect()->route('parejaconteounos.index')
            ->with('success', 'Parejaconteouno created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parejaconteouno = Parejaconteouno::find($id);

        return view('parejaconteouno.show', compact('parejaconteouno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parejaconteouno = Parejaconteouno::find($id);

        return view('parejaconteouno.edit', compact('parejaconteouno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Parejaconteouno $parejaconteouno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parejaconteouno $parejaconteouno)
    {
        request()->validate(Parejaconteouno::$rules);

        $parejaconteouno->update($request->all());

        return redirect()->route('parejaconteounos.index')
            ->with('success', 'Parejaconteouno updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $parejaconteouno = Parejaconteouno::find($id)->delete();

        return redirect()->route('parejaconteounos.index')
            ->with('success', 'Parejaconteouno deleted successfully');
    }
}
