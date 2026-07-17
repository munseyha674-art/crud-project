<?php

use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| These routes give you full CRUD for Product (JSON responses):
|   GET    /api/products        -> index   (read all)
|   POST   /api/products        -> store   (create)
|   GET    /api/products/{id}   -> show    (read one)
|   PUT    /api/products/{id}   -> update  (update)
|   DELETE /api/products/{id}   -> destroy (delete)
|
| Named with an "api." prefix so they don't clash with the
| "products.*" route names used by the visual pages in web.php
*/

Route::apiResource('products', ProductController::class)->names('api.products');
