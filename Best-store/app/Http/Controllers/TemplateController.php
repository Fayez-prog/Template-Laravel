<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class TemplateController extends Controller
{
public function index()
{
return view('template.index');
}
public function login()
{
return view('template.login');
}
public function mail()
{
return view('template.mail');
}
public function products()
{
return view('template.products');
}
public function furniture()
{
return view('template.furniture');
}
public function checkout()
{
return view('template.checkout');
}
public function register()
{
return view('template.register');
}
public function short()
{
return view('template.short-codes');
}
public function single()
{
return view('template.single');
}
}