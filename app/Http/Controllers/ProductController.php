<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    public function create(Request $request) {
        Log::debug(__FUNCTION__);
        return response(null, Response::HTTP_CREATED);
    }

    public function update($id, Request $request) {
        Log::debug(__FUNCTION__ . ':' . $id);
        return response(null, Response::HTTP_OK);
    }

    public function getAllProducts() {
        Log::debug(__FUNCTION__);
        return response(null, Response::HTTP_OK);
    }

    public function delete($id) {
        Log::debug(__FUNCTION__ . ':' . $id);
        return response(null, Response::HTTP_OK);
    }
}
