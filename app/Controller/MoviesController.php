<?php
class MoviesController extends AppController {
	var $name = 'Movies';
	//var $scaffold;
	public $helpers = array('Html', 'Form');
	public $components = array('Session');
	
	
	public function index() {
		//grab all movies and pass them to the view:
		$movies = $this->Movie->find('all', array(
			'order' => array('Movie.position')
		));
	   $this->set('movies', $movies);
		
		$total = $this->Movie->find('count'); // repeated below in add()
		$this->set('total', $total);
	}
	
	public function view($id = null) {
		$this->Movie->id = $id;
		$this->set('movie', $this->Movie->read());
	}
	
	public function add() {
		if ($this->request->is('post')) {
			
			$total = $this->Movie->find('count');
			// manually set the position to the $total movies + 1
			$this->request->data['Movie']['position'] = $total + 1;
			
			if ($this->Movie->save($this->request->data)) {
				$this->Session->setFlash('Your movie has been added');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to add your movie');
			}
		}
	}
	
	public function edit($id = null) {
	    $this->Movie->id = $id;
	    if ($this->request->is('get')) {
	        $this->request->data = $this->Movie->read();
	    } else {
	        if ($this->Movie->save($this->request->data)) {
	            $this->Session->setFlash('Your movie has been edited');
	            $this->redirect(array('action' => 'index'));
	        } else {
	            $this->Session->setFlash('Unable to update your movie');
	        }
	    }
	}
	
	public function delete($id) {
	    if ($this->request->is('get')) {
	        throw new MethodNotAllowedException();
	    }
	    if ($this->Movie->delete($id)) {
	        $this->Session->setFlash('The movie with id: ' . $id . ' has been deleted.');
	        $this->redirect(array('action' => 'index'));
	    }
	}
	
	
	
	// we need functions to increment and decrement the position integer - but do they sit in here?
	
	
	
}


?>