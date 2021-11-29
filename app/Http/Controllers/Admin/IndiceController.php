<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\IndiceRequest;
use App\Models\Indice\Indice;
use Barryvdh\DomPDF\Facade as PDF;

class IndiceController extends Controller
{
    private $indice;
    public function __construct(Indice $indice)
    {
        $this->indice = $indice;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->indice->orderby('id', 'desc')->paginate(150);
        return view('panel.admin.pages.indice.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.admin.pages.indice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IndiceRequest $request)
    {
        // dd($request->all());
        $this->indice->create($request->all());
        return redirect()->back()->with('success', 'Cadastrado com sucesso!');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->indice->find($id);
        return view('panel.admin.pages.indice.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IndiceRequest $request, $id)
    {
        $indice = $this->indice->find($id);
        $indice->update($request->all());
        return redirect()->back()->with('success', 'Editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $this->indice->destroy($id);
        return redirect()->back()->with('success', 'Deletado com sucesso!');
    }

    public function pesquisar(Request $request)
    {
        $data = $this->indice->where('outorgado', 'LIKE', '%' . $request->get('value') . '%')->paginate(100);
        return view('panel.admin.pages.indice.index', compact('data'));
    }

    public function report(Request $request)
    {
        return view('panel.admin.pages.indice.report');
    }

    public function result(Request $request)
    {
        $date_start = date('Y-m-d', strtotime($request->get('date_start')));
        $date_end = date('Y-m-d', strtotime($request->get('date_end')));
        $data = $this->indice->whereBetween('data', [$date_start, $date_end])->orderby('outorgado', 'asc')->get();
        //Print
        $pdf = PDF::loadView('panel.admin.pages.indice.print', compact('data', 'date_start', 'date_end'));
        return $pdf->stream();
    }
}
