<?php

namespace Modules\Cinema\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Cinema\Entities\Cinema;
use Modules\Cinema\Repository\Eloquent\CinemaRepository;

class CinemaController extends Controller
{

    protected $model;

    public function __construct(Cinema $cinema)
    {
        $this->model = new CinemaRepository($cinema);
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        //
        return view('cinema::index', ["cinemas" => $this->model->all()]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('cinema::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('cinema::show', ["cinema" => $this->model->show($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('cinema::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
