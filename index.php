<?php include "includes/header.php" ?>
<?php $offset = calcOffset(); ?>
<body>
    <!-- Navigation -->
    <?php include "includes/navigation.php" ?>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
        <!-- Blog Entries Column -->
            <?php include "includes/db.php" ?>
            <div class="col-md-8">
                <!-- First Blog Post -->
                <?php
                    if(isset($_GET['filter'])){
                        switch($_GET['filter']){
                            case 'categorized';
                                $pages = showPostsPaginated('post_category_id', $_GET['cat_id'], $offset);
                                break;

                            case 'by_author';
                                $pages = showPostsPaginated('post_author', $_GET["u_id"], $offset);
                                break;
                        }
                    } else {
                        $pages = showPostsPaginated("", '', $offset);
                    }
                    //adding products to cart
                    if(isset($_GET['to_cart']) && isset($_SESSION['id'])) {
                        $product = escape($_GET['to_cart']);
                        $user = $_SESSION['id'];
                        addToCart($product, $user);
                    }
                    //removing products from cart
                    if(isset($_GET['remove']) && isset($_SESSION['id'])) {
                        $product = escape($_GET['remove']);
                        $user = $_SESSION['id'];
                        removeFromCart($product, $user);
                    }
                    //checkout
                    if(isset($_GET['checkout']) && isset($_SESSION['id'])) {
                        $user = $_SESSION['id'];
                        subtractUserBalance($user, $_SESSION['cart']);
                        clearCart($user);
                    }
                ?>
            </div>
            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php" ?>
        </div>
                        <!-- Pager -->
        <?php
            if(isset($pages)) {
                if($pages > 1) {
                    include "pager.php";
                }
            }
        ?>
        <!-- /.row -->
<!-- Footer -->
 <?php include "includes/footer.php" ?>