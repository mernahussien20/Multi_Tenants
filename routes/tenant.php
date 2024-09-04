<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\HrController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/


Route::middleware(['api', 'check.tenant'])->group(function () {
    Route::apiResource('organizations', OrganizationController::class);
    Route::apiResource('hr', HrController::class);
    Route::apiResource('doctors', DoctorController::class);
    Route::apiResource('students', StudentController::class);

    Route::get('organizations/{organization}/hr', [OrganizationController::class, 'showHr']);
    Route::get('organizations/{organization}/doctors', [OrganizationController::class, 'showDoctors']);
    Route::get('organizations/{organization}/students', [OrganizationController::class, 'showStudents']);
});

