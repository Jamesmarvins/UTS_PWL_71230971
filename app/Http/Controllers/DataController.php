<?php
 
namespace App\Http\Controllers;
 
use App\Models\Company;
use App\Models\Customer;
use App\Models\Item;
use App\Models\Sale;
 
class DataController extends Controller
{
    public function customers()
    {
        return response()->json(Customer::all());
    }
 
    public function companies()
    {
        return response()->json(Company::all());
    }
 
    public function items()
    {
        return response()->json(Item::with('company')->get());
    }
 
    public function sales()
    {
        return response()->json(
            Sale::with(['customer', 'item'])->get()
        );
    }
}