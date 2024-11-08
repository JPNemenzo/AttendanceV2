<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Auth\Login;
use App\Livewire\Dashboard;
use App\Livewire\EmployeeRecord;
use App\Livewire\Addemployee;
use App\Livewire\AttendanceRecord;
use App\Livewire\HR\Dashboardhr;

use Illuminate\Http\Request;


Route::get('/', function() {
    return redirect('/login');
});
Route::get('/login', Login::class)->name('login');


Route::middleware('auth')->group(function () {

    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/hr/dashboard', \App\Livewire\HR\Dashboardhr::class)->name('hr.dashboard');
    Route::get('/employee', EmployeeRecord::class)->name('employee-record');
    Route::get('/addemployee', Addemployee::class)->name('add-employee');
    Route::get('/attendance', AttendanceRecord::class)->name('attendance-records');
    
});
