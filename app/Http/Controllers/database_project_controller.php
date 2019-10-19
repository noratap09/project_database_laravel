<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use App\employees;
use App\customers;
use App\orders;

class database_project_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		if($id=="products")
		{
			$colum = ["productCode","productName","buyPrice","quantityInStock","productVendor"];
			$data = products::all($colum);
		}
		else if($id=="orders")
		{
			$colum = ["orderNumber","customerNumber","orderDate","comments","status"];
			$data = orders::all($colum);
		}
		else if($id=="customers")
		{
			$colum = ["customerNumber","customerName","phone","salesRepEmployeeNumber","creditLimit"];
			$data = customers::all($colum);
		}
		else if($id=="employees")
		{
			$colum = ["employeeNumber","firstName","lastName","officeCode","jobTitle"];
			$data = employees::all($colum);
		}
		else
		{
			abort(404);
		}
		
        return view("1",["data"=>$data,"colum"=>$colum]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
	
	public function products_fillter($colum,$fillter)
    {
		if($colum == "productVendor")
		{
			$colum = ["productCode","productName","buyPrice","quantityInStock","productVendor"];
			$data = products::where('productVendor', '=', $fillter)->get($colum);
		}
		else if($colum == "productScale")
		{
			$colum = ["productCode","productName","buyPrice","quantityInStock","productVendor"];
			$data = products::where('productScale', '=', $fillter)->get($colum);
		}
        return view("1",["data"=>$data,"colum"=>$colum]);
    }
	
	public static function display_catelog()
	{	
		echo 	"<ul class=\"ul-menu-list\">
				<li class=\"li-menu-list\"><a class=\"main-catelog\" href=\"#home\">Catelog</a></li>
				<li class=\"li-menu-list\"><a class=\"sub-catelog\" href=\"#news\">Product Vendor</a></li>";

		$result = products::distinct()->get("productVendor");
		foreach($result as $data)
		{
			echo "<li class='li-menu-list'><a href='http://localhost:8000/project/products/fillter/productVendor/".$data['productVendor']."'>".$data['productVendor']."</a></li>";
		}
		
		echo "<li class=\"li-menu-list\"><a class=\"sub-catelog\" href=\"#news\">Product Scale</a></li>";

		$result =  products::distinct()->get("productScale");
		foreach($result as $data)
		{
			echo "<li class='li-menu-list'><a href='http://localhost:8000/project/products/fillter/productScale/".$data['productScale']."'>".$data['productScale']."</a></li>";
		}
				
		echo "</ul>";
	}
}
