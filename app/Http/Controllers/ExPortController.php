<?php

namespace App\Http\Controllers;
use App\Models\Candidature;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ExPortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function detail_candidature_pdf($id) {

        $details_pdf =  Candidature::where('id',  $id)->get();

        $pdf = Pdf::loadView('export.candidature.detailscandidature', [
            'details' =>$details_pdf,
        ]);
        return $pdf->download('candidature.pdf');

    }

    public function detail_admin_cand($id) {
        $admin_detail =  Candidature::where('id',  $id)->get();

        $pdf = Pdf::loadView('export.candidature.detailsexportadmin', [
            'detail' =>$admin_detail,
        ]);

        return $pdf->download('candidatureadmin.pdf');

    }

    public function  export_pdf_option() {

        $candidature_option = Candidature::all();

        return view('export.candidature.pdfchampsexport', compact('candidature_option')) ;
    }

    public function candidature_pdf() {

        $candidature = Candidature::all();

        $pdf = Pdf::loadView('export.candidature.pdfrender', [
            'candidature' =>$candidature
        ])->setOptions(['defaultFont' => 'Poppins'])->setPaper('A4', 'landscape');

        return $pdf->download('candidatureadmin.pdf');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
