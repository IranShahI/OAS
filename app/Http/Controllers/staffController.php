<?php

namespace App\Http\Controllers;

use App\access;
use App\car;
use App\carBrandLookup;
use App\carNameLookup;
use App\customer;
use App\Http\Requests;
use App\payment;
use App\postLookup;
use App\sale;
use App\saleTypeLookup;
use App\termOfSale;
use App\userModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Session;
class staffController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $postID = Auth::user()->postLookups_postID;
        $access = access::where('postID',$postID)->first();
        $accessArray=explode(" ",$access->accessUnits);
        return view('staff.index')->with('accessArray',$accessArray);
    }


    public function salesSummery()
    {
        $sales = sale::latest();
        return view('staff.salesSummery');

    }

    public function transactions()
    {
        $sales = payment::latest();
        return view('staff.transactions');
    }

        public function parkingRemains()
    {
        $car = car::all();
//        $carsBrand = carBrandLookup::all();
//        $carsNae = carNameLookup::all();
//        $carRemainsArray = [];
//        for ($i=0;$i=$cars->count();$i--)
//        {
//            $carRemainsArray[$i] = [$carsBrand->carBrand,$carsName->$cars->carStock];
//        }
        return view('staff.parkingRemains')->with('cars',$car);
    }


        public function usersManager(){
        $posts = postLookup::all();
        $users = userModel::all();
        return view('staff.usersManager')->with('posts',$posts)->with('users',$users);
    }

    public function createUser(Request $request)
    {
//        href={{url('user/delete',$user->personalcode)}}->
        // route::get('user/delete/{id});
        // public function deleteuser($id)
        //User::destroy($id)
        // redirect()


        //get -> form -> user/edit/{id}
        // $user = User::find($id);

        // form -> valu={{$user->name}}


        //post
        //user/edit/{id}
        //public function deleteuser($id,Request $request)
        // $user= User::find($id);
        //$user->update($request->all());
        //redirect()



        $user = new User($request->all());
        $user->password =bcrypt($request->password);
        $user->save();
        Session::flash('success_message','کاربر جدید با موفقیت ثبت شد !');
        return redirect()->back();
    }

    public function deleteUser($id)
    {
        $user = User::all()->find($id);
        $user->delete();
        Session::flash('success_message','کاربر با موفقیت حذف شد !');
        return redirect()->back();
    }
    public function GETeditUser($id)
    {
        $user=User::find($id);
        $posts = postLookup::all();
        return view('staff.userEdit')->with('user',$user)->with('posts',$posts);
    }
    public function POSTeditUser($id,Request $request)
    {
        $user=User::find($id);
        $user->name = $request->name;
        $user->personalCode = $request->personalCode;
        $user->postLookups_postID = $request->postLookups_postID;
        $user->email = $request->email;
        if($request->password != null){
            $user->password = bcrypt($request->password);
        }
        $user->update();
        Session::flash('success_message','کاربر با موفقیت ویرایش شد');
        return redirect('staff/usersManager');
    }

    public function termsOfsale()
    {
        $termsOfSale=termOfSale::all();
        $saleTypes=saleTypeLookup::all();
        $cars=car::all();

        return view('staff.termsOfSale')->with('termsOfSale',$termsOfSale)->with('cars',$cars)->with('saleTypes',$saleTypes);
    }

    public function POSTtermsOfsale(Request $request)
    {
        $newTermOfSale=new termOfSale($request->all());
        $newTermOfSale->save();
        Session::flash('success_message','شرایط فروش مورد نظر با موفقیت اضافه گردید !');

        return redirect()->back();
    }

    public function deleteTermsOfsale($id)
    {
        $termOfsale=termOfSale::find($id);
        $termOfsale->delete();
        Session::flash('success_message','شرایط فروش مورد نظر با موفقیت حذف گردید !');
        return redirect()->back();
    }

    public function GETeditTermsOfsale($id)
    {
        $saleTypes=saleTypeLookup::all();
        $cars=car::all();
        $termOfsale=termOfSale::find($id);
        return view('staff.editTermOfSale')->with('termOfSale',$termOfsale)->with('cars',$cars)->with('saleTypes',$saleTypes);
    }

    public function POSTeditTermsOfsale($id,Request $request)
    {
        $termOfSale=termOfSale::find($id);
        $termOfSale->update($request->all());
        Session::flash('success_message','شرایط فروش مورد نظر با موفقیت ویرایش گردید !');
        return redirect('/staff/termsOfSale');
    }

    public function carsManager()
    {
        $cars=car::all();
        $brands=carBrandLookup::all();
        return view('staff.carsManager')->with('cars',$cars)->with('brands',$brands);
        
    }
    public function POSTcarsManager(Request $request)
    {
        $car=new car();
        $car->carStock=$request->carStock;
        $car->carBrandLookups_brandNo=$request->carBrandLookups_brandNo;
        $nameLookup=new carNameLookup();
        $nameLookup->name=$request->carName;
        $nameLookup->save();
        $car->carNameLookups_nameNo=$nameLookup->nameNo;
        $car->carModel=$request->carModel;
        $car->save();
        $fileName= $car->carNo .'.png';
        $destinationPath= base_path().'/public/img/cars/';
//        dd($request->file);

        if ($request->file('carImage')->isValid()) {
            $request->file('carImage')->move($destinationPath, $fileName);
        }
        Session::flash('success_message','خودرو مورد نظر با موفقیت اضافه گردید !');
        return redirect()->back();
    }
    public function deleteCarsManager($id)
    {
        $car=car::find($id);
        $car->delete();
        Session::flash('success_message','خودرو مورد نظر با موفقیت حذف گردید !');
        return redirect()->back();
    }

    public function GETeditCarsManager($id)
    {
        $car=car::find($id);
        $brands=carBrandLookup::all();
        return view('staff.editCarsManager')->with('car',$car)->with('brands',$brands);
        
    }

    public function POSTeditCarsManager($id,Request $request)
    {
        $car=car::find($id);
        $car->update($request->all());
        $fileName= $car->carNo .'.png';
        $destinationPath= base_path().'/public/img/cars/';
        if ($request->hasFile('carImage')) {
            $request->file('carImage')->move($destinationPath, $fileName);
        }
        Session::flash('success_message','خودرو مورد نظر با موفقیت ویرایش گردید !');
        return redirect('/staff/carsManager');
    }


    public function salesReport()
    {
        $reports=sale::all();
        return view('staff.salesReport')->with('reports',$reports);
    }
    
    public function deleteSalesReport($id)
    {
        $reports=sale::find($id);
        $reports->delete();
        Session::flash('success_message','خودرو مورد نظر با موفقیت حذف گردید !');
        return redirect()->back();
    }

    public function confirmation()
    {
        $sales=sale::all();
        return view('staff.confirmation')->with('reports',$sales);
    }

    public function editConfirmation($id)
    {
        $customer=customer::find($id);
        return view('staff.editConfirmation')->with('cust',$customer);
    }

    public function POSTeditConfirmation($id,Request $request)
    {
        $customer = customer::find($id);
        $customer->name=$request->name;
        $customer->family=$request->family;
        $customer->id=$request->id;
        $customer->nationalCode=$request->nationalCode;
        $customer->address=$request->address;
        $customer->city=$request->city;
        $customer->phoneNo=$request->phoneNo;
        $customer->mobileNo=$request->mobileNo;
        $customer->update();
        $fileName= $request->nationalCode .'.jpg';
        $destinationPath= base_path().'/public/img/nationalCard/';

        $request->file('nationalCard')->move($destinationPath, $fileName);
        return redirect('/staff/confirmation');
    }

    public function GETconfirm($id)
    {
        $sale=sale::find($id);
        $sale->isConfirmed = '1';
        $sale->update();

        return redirect('/staff/confirmation');
    }
    public function GETunConfirm($id)
    {
        $sale=sale::find($id);
        $sale->isConfirmed = '0';
        $sale->update();
        return redirect('/staff/confirmation');

    }

    public function summary()
    {
        $salesCount=sale::all()->count();
        $sales=sale::all();
        $incomes=0;
        for($i=0;$i<$salesCount;$i++){
            $incomes=$sales[$i]->termOfSale->initialPrice + $incomes;
        }
        $carsCount=car::all()->count();
        $cars=car::all();
        $remains=0;
        for($i=0;$i<$carsCount;$i++){
           $remains=$cars[$i]->carStock + $remains;
        }
        $termsOfSale=termOfSale::all()->count();
        return view('staff.summary')->with('salesCount',$salesCount)->with('remains',$remains)->with('incomes',$incomes)->with('termsOfSale',$termsOfSale);
    }
}
