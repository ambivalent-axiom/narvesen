<div class="col-md-4">

<!-- Blog Search Well -->
<div class="well">
    <h4>Produktu meklētājs</h4>
    <form action="search.php" method="post">

    <div class="input-group">
        <input name="search" type="text" class="form-control">
        <span class="input-group-btn">
            <button name="submit" class="btn btn-default" type="submit">
                <span class="glyphicon glyphicon-search"></span>
        </button>
        </span>
    </div>
    </form><!-- search form-->

    <!-- /.input-group -->
</div>

<!-- Login Well -->
<div class="well">
    <form action="includes/login.php" method="post">
        <h4>Klients: 
            <?php 
                if(isset($_GET['login'])) {
                    echo $_GET['login'];
                } else if (isset($_SESSION['id'])) {
                    echo $_SESSION['first_nm'] . " " . $_SESSION['last_nm'];
                } else {
                    echo "";
                }
            ?>
        </h4>
        <div class="form-group">
            <div class="form-group">
                <input name="username" type="text" class="form-control" placeholder="Lietotājvārds">
            </div>
            <div class="input-group">
                <input name="pass" type="password" class="form-control" placeholder="Parole">
                <span class="input-group-btn">
                    <button name="login" class="btn btn-primary" type="submit">
                        Ienākt
                    </button>
                </span>
            </div>
        </div>
    </form>
</div>

<!-- Blog Categories Well -->
<div class="well">
    <h4>Tavs grozs</h4>
    <div class="row">
        <div class="col-lg-12">
            <ul class="list-unstyled">
                <?php
                    if(isset($_SESSION['id'])) {
                        $currentCart = getCart($_SESSION['id']);
                        if(count($currentCart) > 0) {
                            $_SESSION['cart'] = showCart($currentCart);
                        } else {
                            echo "Tavs groziņš šobrīd ir tukšs... :(";
                        }
                        
                    } else {
                        echo "Lai paņemtu groziņu, piereģistrējies, vai ieej veikalā ar reģistrētu lietotāju.";
                    }
                ?>
            </ul>
        </div>
    </div>
    <!-- /.row -->
</div>

<!-- Side Widget Well -->
<?php include "widget.php" ?>

</div>