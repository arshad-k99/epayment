<?php

namespace App\Http\Controllers;

    use App\Models\TdsDiscription;
use Illuminate\Support\Facades\Session;
use PDF;
use App\Models\TaxPayment;

use Illuminate\Http\Request;

class TaxDataController extends Controller
{

    public function getData(Request $request)
    {
        session()->forget(['payment_through', 'choosed_type','bank_name', 'tax_type','words', 'total','section', 'penalty','interest', 'cess','surcharge', 'tax']);

        $query = $request->get('query');

        $perPage = 10;

        $data = TdsDiscription::when($query, function ($q) use ($query) {
            $q->where('Description', 'like', "%$query%");
        })->paginate($perPage);

        $pan_number = Session::get('pan_number');

        return view('Part1-Taxpay06', compact('data', 'query','pan_number'));

    }

    public function yearUpdate(Request $request){

        $data = $request->input('data');

        foreach ($data as $key => $value) {
            
            session([$key => $value]);
        }

        $allSessionData = Session::all();

        return response()->json(['status' => 'success']);


    }

    public function PanUpdate(Request $request){

        $data = $request->input('data');

        foreach ($data as $key => $value) {
            
            session([$key => $value]);
        }

        $allSessionData = Session::all();

        return response()->json(['status' => 'success']);


    }

    public function paymentType(Request $request){


        $data = $request->input('data');

 

        session(['payment_type' => $data]);

         return response()->json(['status' => 'success']);

    }

    public function amountUpdate(Request $request){

        $data = $request->input('data');

        foreach ($data as $key => $value) {
            
            session([$key => $value]);
        }

        return response()->json(['status' => 'success']);

    }

    public function paymentMethod(Request $request){

        $data = $request->input('data');



        foreach ($data as $key => $value) {
            
            session([$key => $value]);
        }

        $session = Session::all();

        return response()->json(['status' => 'success']);

    }

    public function paymentSubmit(Request $request){

        $session = Session::all();

        

        $dataSet = [
            'pan_number' => isset($session['pan_number']) ? $session['pan_number'] : null,
            'assessment_year' => isset($session['assessment_year']) ? $session['assessment_year'] : null,
            'financial_year' => isset($session['financial_year']) ? $session['financial_year'] : null,
            'major_head' => isset($session['tax_type']) ? $session['tax_type'] : null,
            'minor_head' => 'TDS/TCS Payable by Taxpayer (200)',
            'amount' => isset($session['total']) ? $session['total'] : 0,
            'amount_in_words' => isset($session['words']) ? $session['words'] : null,
            'bank_name' => isset($session['bank_name']) ? $session['bank_name'] : null,
            'model_of_payment' => isset($session['choosed_type']) ? $session['choosed_type'] : null,
            'payment_through' => isset($session['payment_through']) ? $session['payment_through'] : null,
            'tax' => isset($session['tax']) ? $session['tax'] : 0,
            'surcharge' => isset($session['surcharge']) ? $session['surcharge'] : 0,
            'cess' => isset($session['cess']) ? $session['cess'] : 0,
            'penalty' => isset($session['penalty']) ? $session['penalty'] : 0,
            'section' => isset($session['section']) ? $session['section'] : 0,
            'total' => isset($session['total']) ? $session['total'] : 0,
            'total_in_words' => isset($session['words']) ? $session['words'] : null,

        ];

        $data = [];

        if (session()->has('pan_number') && session('pan_number') !== null) {


            $data = TaxPayment::create($dataSet);



        }

        $customPaper = array(0,0,987.00,683.80);
        $pdf = PDF::loadView('pdf-2', compact('data'))->setPaper($customPaper, 'portrait');
            return $pdf->download('tax-payment.pdf');

       


    }

}
