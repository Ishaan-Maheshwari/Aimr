<div class="sidebar">
    <h1><span class="material-icons-outlined">&#xe886;</span>AIMR</h1>
    <ul id="uplist">
        <li>Guest</li>
        <li><span class="material-icons-outlined">&#xe574;</span>Categories</li>
        <div id="category-list">
        <?php foreach ($categories as $category): ?>

<li>
<?php $category['SubCateg_name']; ?>
        </li>

<?php endforeach; ?>
        <!--
            <li>category</li>
            <li>category</li>
            <li>category</li>
            <li>category</li>
            <li>category</li>
            <li>category</li>
            <li>category</li>
            <li>category</li>
            <li>category</li>
            <li>category</li>
            <li>category</li>
            <li>category</li>
            <li>category</li>
            <li>category</li>
            <li>category</li>
            <li>category</li>
            <li>category</li>
            <li>category</li>
            <li>category</li>
            <li>category</li>
            <li>category</li>
            <li>category</li>
            <li>category</li>
            <li>category</li>

-->

        
        </div>
    </ul>
    <ul id="downlist">
        <li><span class="material-icons-outlined">&#xe0c8;</span>Location</li>
        <li><span class="material-icons-outlined">&#xe87d;</span><?php echo anchor('donate','Donate');?></li>
        <li><span class="material-icons-outlined">&#xe0cd;</span><?php echo anchor('contact','Contact Us');?></li>
        <li><span class="material-icons-outlined">&#xe88e;</span><?php echo anchor('about','About Us');?></li>
    </ul>
</div>