<?php

use Illuminate\Support\Facades\Route;

/*
*/

Route::get('/', function () {
    return view('index');});

Route::get('/index', function () {
    return view('components.index');});

Route::get('/servicios', function () {
    return view('components.servicios');});

Route::get('/nosotros', function () {
    return view('components.nosotros');});

Route::get('/planes', function () {
    return view('components.planes');});

Route::get('/portafolio', function () {
    return view('components.portafolio');});

Route::get('/tienda', function () {
    return view('components.tienda');});

Route::get('/blog', function () {
    return view('components.blog');});