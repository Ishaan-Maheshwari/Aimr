<h2><?php echo $title; ?></h2>
<?php foreach ($categories as $category): ?>

<hr>
<?php echo $category['Categ_id']+"  "+$category['Category_name']+"  "+$category['SubCategory_name']+"  "+$category['Item_count']; ?>
<hr>

<?php endforeach; ?>