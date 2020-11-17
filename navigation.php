<?php 

    $categories = Category::getAll();
?>
<div class="sub-nav nav-hidden" id="shop">
    <div class="sub-nav-content">
        <a class="sub-nav-link" href="shop.php">All</a>
        <?php 
            foreach($categories as $category) {
                echo '<a class="sub-nav-link" href="shop.php?category_id=' . $category['id'] . '">' . $category['title'] . '</a>';
            }
        ?>
    </div>
</div>
<div class="sub-nav nav-hidden" id="profile">
    <div class="sub-nav-content">
        <?php if ($user): ?>
            <a class="sub-nav-link" href="overview.php">Overview</a>
            <a class="sub-nav-link" href="sell.php">Sell</a>
        <?php endif ?>
        <?php if (!$user): ?>
            <a class="sub-nav-link" href="signup.php">Sign Up</a>
            <a class="sub-nav-link" href="signin.php">Sign In</a>        
        <?php endif ?>
    </div>
</div>