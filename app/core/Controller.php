<?php

/**
 * app/core/Controller.php
 */

class Controller {

  /**
   *
   */
	protected function model($model) {
		require_once '../app/models/' . $model . '.php';
		return new $model();
	}
	
}