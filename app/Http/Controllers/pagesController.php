<?php

namespace App\Http\Controllers;

use App\car;
use App\customer;
use App\sale;
use App\termOfSale;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Support\Facades\Response;

class pagesController extends Controller
{

        
//        $car = new car;
//        $car->name = $request->name;
//        $lookup = lookup::where('brand',$request->brand);
//        $id=$lookup->id;
//        $car->brand = $id;
//        $car->save();
//        
//        $car = car::find($id);
//        
//        $car->delete();


    public function index()
    {
        $cars=car::all();
        $termsOfSale=termOfSale::all();
        return view('startCustomer')->with('cars',$cars)->with('termsOfSale',$termsOfSale);
    }

    public function saleFormPost(Request $request)
    {
        $sale=new sale();
        $sale->date=Carbon::now();
        $sale->termOfSale_termOfSaleNo=$request->termOfSale_termOfSaleNo;
        $sale->cars_carNo=termOfSale::find($request->termOfSale_termOfSaleNo)->car_carNo;
        $trackingCode = strval(rand( 1000000 , 9000000 ));
        $sale->saleTrackingCode=$trackingCode;
        $sale->save();
        $customer=new customer();
        $customer->name=$request->name;
        $customer->family=$request->family;
        $customer->id=$request->id;
        $customer->nationalCode=$request->nationalCode;
        $customer->address=$request->address;
        $customer->city=$request->city;
        $customer->phoneNo=$request->phoneNo;
        $customer->mobileNo=$request->mobileNo;
        $customer->sale_id=$sale->id;

        $fileName= $request->nationalCode .'.'. $request->file("nationalCard")->getClientOriginalExtension();
        $destinationPath= base_path().'/public/img/nationalCard/';
//        dd($request->file);

        $request->file('nationalCard')->move($destinationPath, $fileName);

        $customer->save();

        return redirect('successPage/'.$sale->id);


    }

    /**
     * @return string
     */
    public function successPage($id)
    {
        $sale=sale::find($id);
        return view('successPage')->with('sale',$sale);
    }

    /**
     * @return string
     */
//    public function AJAXtermsOfsale($id)
//    {
//        $termsOfSale= termOfSale::where('car_carNo',$id)->get();
////        dd(Response::json($termsOfSale));
//        return Response::json($termsOfSale);
//    }
    public function showLogin()
    {
        
    }

    public function doLogin()
    {
        
    }
}
