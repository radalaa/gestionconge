<?php
namespace RADFram;

class NotNullValidator extends Validator
{
  public function isValid($value)
  {
    return $value != '';
  }
}