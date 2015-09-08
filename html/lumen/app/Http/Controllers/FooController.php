<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class FooController extends BaseController
{
    public function get($id)
    {
        return $this->respondWithData(Foo::find($id)->get()->toArray());
    }
}
