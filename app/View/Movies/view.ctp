<?php

debug($movie);

// h(string $text, string $charset = null) Convenience wrapper for htmlspecialchars(). e(mixed $data) Convenience wrapper for echo()
?>

<h1><?php echo h($movie['Movie']['title'])?></h1>

<p>This movie is currently at position: <?php echo h($movie['Movie']['position']) ?></p>