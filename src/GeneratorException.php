<?php namespace xfscaffold;

class GeneratorException extends \Exception {
  protected $message = 'Could not determine what you are trying to do. Sorry! Check your migration name.';
}