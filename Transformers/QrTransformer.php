<?php

namespace Modules\Iqreable\Transformers;

use Modules\Core\Icrud\Transformers\CrudResource;

class QrTransformer extends CrudResource
{
  /**
  * Method to merge values with response
  *
  * @return array
  */
  public function modelAttributes($request)
  {
    return [];
  }
}
