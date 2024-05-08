<?php
    if(isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
?>
<ul class="pager">
    <?php
        if($page > 1) {
            ?>
            <li class="previous">
                <a href="index.php?page=<?php echo ($page-1); ?>">&larr; Iepriekšējā </a>
            </li><?php
        }
    ?>
    <li>
        <?php pagination($pages); ?>
    </li>
    <?php
        if($page < $pages) {
            ?><li class="next">
                <a href="index.php?page=<?php echo ($page+1); ?>"> Nākamā &rarr;</a>
            </li><?php
        }
    ?>
</ul>