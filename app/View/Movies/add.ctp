<h1>Add Movie</h1>
<?php
echo $this->Form->create('Movie');
echo $this->Form->input('title');
//echo $this->Form->input('position');
echo $this->Form->end('Save');
?>