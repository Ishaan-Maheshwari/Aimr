<div class="main">
<h2><?php echo $title; ?></h2>
<?php foreach ($categories as $category): ?>

<hr>
<?php echo $category['Categ_id']+"  "+$category['Categ_name']+"  "+$category['SubCateg_name']+"  "+$category['Item_count']; ?>
<hr>

<?php endforeach; ?>

</div>