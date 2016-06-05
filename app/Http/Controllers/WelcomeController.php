<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
class WelcomeController extends Controller{
	public function index(){
		$items = [
				 'items' => [
				 'Pack luggage',
				 'Go to airport',
				 'Arrive in San Juan'
				 ]
				 ];

				 //dd($items);
				 \Log::debug($items);

				 return view('welcome');
	}
}