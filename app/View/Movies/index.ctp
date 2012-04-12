<h1>Movies</h1>
<hr>
<?php //debug($movies); ?>

<p>Current movie count = <?php echo $total; ?></p>

<table>
	<tr>
		<th>ID</th>
		<th>Title</th>
		<th>Rank</th>
		<th></th>
	</tr>	
<?php foreach ( $movies as $movie ) : ?>
	<tr>
		<td><?php echo $movie['Movie']['id']; ?></td>
		<td><?php echo $this->Html->link($movie['Movie']['title'],
		array('controller' => 'movies', 'action' => 'view', $movie['Movie']['id'])); ?></td>
		<td><?php echo $movie['Movie']['position']; ?></td>
		<td>
			<?php echo $this->Html->link(
				'Edit', 
				array('controller' => 'movies', 'action' => 'edit', $movie['Movie']['id'])
				); 
			?> 
			<?php echo $this->Form->postLink(
		   	'Delete',
		      array('action' => 'delete', $movie['Movie']['id']),
		      array('confirm' => 'Are you sure?')
				);
		   ?>
		</td>
	</tr>
<?php endforeach; ?>	
</table>	

<?php echo $this->Html->link('Add Movie', array('controller' => 'movies', 'action' => 'add')); ?>
	