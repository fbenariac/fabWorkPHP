<?php

/**
 * app/core/Controller.php
 */

class Controller {

  /**
   * Controller.model
   * @params $model
   * @return instance of $model
   */
	protected function model($model) {
		require_once '../app/models/' . $model . '.php';
		return new $model();
	}

	/**
   * Controller.view
   * @params $view
   * @params $data (not mandatory)
	 */
	protected function view($view, $data = []) {
		require_once '../app/views/' . $view . '.php';
	}

}
