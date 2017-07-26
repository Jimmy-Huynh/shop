<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo SITE_ROOT; ?>index.php">MY Shop</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo SITE_ROOT; ?>index.php">Home</a></li>
                <li><a href="<?php echo SITE_ROOT; ?>About">About</a></li>
                <li><a href="<?php echo SITE_ROOT; ?>Contact">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right" style="margin-right: 16px;">
                <li>
                    <?php
                    if (isset($_SESSION["loined"])) {
                        ?>
                        <a href="<?php echo SITE_ROOT; ?>Logout">Logout</a>
                        <?php
                    } else {
                        ?>
                        <a href="<?php echo SITE_ROOT; ?>Login">Login</a>
                        <?php
                    }
                    ?>

                </li>
                <li><a href="<?php echo SITE_ROOT; ?>SignUp">Sign Up</a></li>
                <li style="line-height:48px;">
                    <button class="btn btn-info btn-sm" onclick="location.href = '<?php echo SITE_ROOT; ?>cart';">
                        <i class="glyphicon glyphicon-shopping-cart"><span></span></i>
                    </button>
                    <span class="cart-number"><?php
                        if (isset($_SESSION['myCart'])) {
                            echo count($_SESSION['myCart']);
                        } else {
                            echo 0;
                        };
                        ?></span>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>