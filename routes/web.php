<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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

// Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// Bidang IT Page
Route::get('/bidang-it', function () {
    return view('bidang-it');
})->name('bidang-it');

// Wilayah API Proxy (to avoid CORS issues)
Route::get('/api/wilayah/provinces', function () {
    try {
        $response = Http::timeout(10)->withoutVerifying()->get('https://wilayah.jernih.net.id/api/provinces.json');
        return response()->json($response->json() ?? []);
    } catch (\Exception $e) {
        return response()->json([]);
    }
});

Route::get('/api/wilayah/regencies/{provinceId}', function ($provinceId) {
    try {
        $response = Http::timeout(10)->withoutVerifying()->get("https://wilayah.jernih.net.id/api/regencies/{$provinceId}.json");
        return response()->json($response->json() ?? []);
    } catch (\Exception $e) {
        return response()->json([]);
    }
});

Route::get('/api/wilayah/districts/{regencyId}', function ($regencyId) {
    try {
        $response = Http::timeout(10)->withoutVerifying()->get("https://wilayah.jernih.net.id/api/districts/{$regencyId}.json");
        return response()->json($response->json() ?? []);
    } catch (\Exception $e) {
        return response()->json([]);
    }
});

Route::get('/api/wilayah/villages/{districtId}', function ($districtId) {
    try {
        $response = Http::timeout(10)->withoutVerifying()->get("https://wilayah.jernih.net.id/api/villages/{$districtId}.json");
        return response()->json($response->json() ?? []);
    } catch (\Exception $e) {
        return response()->json([]);
    }
});

