<h1>Edit Post</h1>
<?php
    echo $this->Form->create('Movie', array('action' => 'edit'));
    echo $this->Form->input('title');
    echo $this->Form->input('position');
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Save');
?>