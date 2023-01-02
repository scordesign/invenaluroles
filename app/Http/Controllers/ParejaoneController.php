<?php

namespace App\Http\Controllers;

use App\Models\Parejaone;
use Illuminate\Http\Request;

/**
 * Class ParejaoneController
 * @package App\Http\Controllers
 */
class ParejaoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parejaones = Parejaone::paginate();

        return view('parejaone.index', compact('parejaones'))
            ->with('i', (request()->input('page', 1) - 1) * $parejaones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parejaone = new Parejaone();
        return view('parejaone.create', compact('parejaone'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Parejaone::$rules);

        $parejaone = Parejaone::create($request->all());

        return redirect()->route('parejaones.index')
            ->with('success', 'Parejaone created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parejaone = Parejaone::find($id);

        return view('parejaone.show', compact('parejaone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parejaone = Parejaone::find($id);

        return view('parejaone.edit', compact('parejaone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Parejaone $parejaone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parejaone $parejaone)
    {
        request()->validate(Parejaone::$rules);

        $parejaone->update($request->all());

        return redirect()->route('parejaones.index')
            ->with('success', 'Parejaone updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $parejaone = Parejaone::find($id)->delete();

        return redirect()->route('parejaones.index')
            ->with('success', 'Parejaone deleted successfully');
    }
}
