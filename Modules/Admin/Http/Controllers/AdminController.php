<?php
namespace Modules\Admin\Http\Controllers;
use App\Models\Rating;
use App\Models\Contact;
use App\Models\Transaction;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    
    public function index()
    {
        $ratings =Rating::with('user:id,name','product:id,pro_name')
                 ->limit(10)->get();

         $contacts =Contact::limit(10)->get();
         //doanh thu theo ngày
         $moneyDay =Transaction::whereDay('updated_at',date('d'))
         ->where('tr_status',Transaction::STATUS_DONE)
         ->sum('tr_total');

          //doanh thu theo ngày
         $moneyMonth =Transaction::whereMonth('updated_at',date('m'))
         ->where('tr_status',Transaction::STATUS_DONE)
         ->sum('tr_total');
         //doanh thu theo năm
         $moneyYear =Transaction::whereYear('updated_at',date('Y'))
         ->where('tr_status',Transaction::STATUS_DONE)
         ->sum('tr_total');
        $products =Product::count('id');
        $users = \DB::table('Users')->count();
         $dataMoney=[
            [
                "name" =>"Doanh thu ngày",
                "y"    =>(int)$moneyDay
            ],
            
            [
                "name" =>"Doanh thu tháng",
                "y"    =>(int)$moneyMonth
            ],
            [
                "name" =>"Doanh thu năm",
                "y"    =>(int)$moneyYear
            ]

        ];
//doanh sách đơn hàng mới
        $transactionNews = Transaction::with('user:id,name')->orderByDesc('id')->limit(10)->get();

         $viewData =[
            'ratings' =>$ratings,
            'contacts' =>$contacts,
            'moneyDay' =>$moneyDay,
            'moneyMonth' =>$moneyMonth,
            'moneyYear'=>$moneyYear,
            'dataMoney' =>json_encode($dataMoney),
            'transactionNews'=>$transactionNews,
            'products' =>$products,
            'users'    =>$users
             
        ];
        return view('admin::index',$viewData);
    }
 
}
