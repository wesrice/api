<?php

namespace Dingo\Api\Tests\Stubs;

use Illuminate\Http\Request;
use Dingo\Api\Contract\Http\Validation\Validator;

class HttpValidatorStub implements Validator
{
    public function validate(Request $request)
    {
        return $request->getMethod() === 'POST';
    }
}
