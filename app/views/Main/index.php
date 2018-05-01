<h1>hello index</h1>
<p><?php echo $name;?></p>
<p><?php echo $age;?></p>

<?php foreach ($posts as $post): ?>
    <h3><?php echo $post['title'];?></h3>
<?php endforeach; ?>
