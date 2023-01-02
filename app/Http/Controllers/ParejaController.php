<?php

namespace App\Http\Controllers;

use App\Models\Pareja;
use Illuminate\Http\Request;

/**
 * Class ParejaController
 * @package App\Http\Controllers
 */
class ParejaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parejas = Pareja::paginate();

        return view('pareja.index', compact('parejas'))
            ->with('i', (request()->input('page', 1) - 1) * $parejas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pareja = new Pareja();
        return view('pareja.create', compact('pareja'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Pareja::$rules);

        $pareja = Pareja::create($request->all());

        return redirect()->route('parejas.index')
            ->with('success', 'Pareja created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pareja = Pareja::find($id);

        return view('pareja.show', compact('pareja'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pareja = Pareja::find($id);

        return view('pareja.edit', compact('pareja'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Pareja $pareja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pareja $pareja)
    {
        request()->validate(Pareja::$rules);

        $pareja->update($request->all());

        return redirect()->route('parejas.index')
            ->with('success', 'Pareja updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pareja = Pareja::find($id)->delete();

        return redirect()->route('parejas.index')
            ->with('success', 'Pareja deleted successfully');
    }
}
