<?php
class Movie extends AppModel {
	var $name = 'Movie';
	
	public $validate = array(
	        'title' => array(
	            'rule' => 'notEmpty'
	        ),
	        /*'position' => array(
	            'rule' => 'notEmpty'
	        )*/
	    );
}


?>