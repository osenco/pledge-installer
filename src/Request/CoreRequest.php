<?php

namespace Pledge\Install\Request;

use Illuminate\Foundation\Http\FormRequest;
use Pledge\Install\Helpers\Reply;

class CoreRequest extends FormRequest
{

 protected function formatErrors(\Illuminate\Contracts\Validation\Validator$validator)
 {
  return Reply::formErrors($validator);
 }

}
