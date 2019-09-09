<?php

namespace App\Http\Controllers;

use App\Entities\PostEntity;
use App\Http\Resources\PostResource;
use Illuminate\Routing\Controller;

class TestApiController extends Controller
{
    public function index()
    {
        return PostResource::collection(PostEntity::all());
    }
}
