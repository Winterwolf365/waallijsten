<?php

use App\Mail\ContactSend;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/over-ons', function () {
    return view('over-ons');
});

Route::get('/inlijsten', function () {
    return view('inlijsten');
});

Route::get('/materialen', function () {
    return view('materialen');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', function (Request $request) {
    $validatedData = $request->validate([
        'first_name' => ['required', 'max:255'],
        'last_name' => ['required', 'max:255'],
        'email' => ['required', 'email', 'max:255'],
        'tel' => ['required', 'numeric', 'min:10'],
        'message' => ['required', 'max:2048'],
    ]);

    $contact = new Contact;
    $contact->fill($validatedData);

    Mail::to('info@dewaallijsten.nl')->send(new ContactSend($contact));

    // send email

    return view('index');
});
