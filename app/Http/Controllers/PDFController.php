<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Product;
use PDF;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $data = [
            'name' => 'name',
            'detail' => 'detail'
        ];
          
        $pdf = PDF::loadView('myPDF', $data);
        return $pdf->stream();
        //return $pdf->download('itsolutionstuff.pdf');
    }
}