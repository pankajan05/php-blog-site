<?php
include("helper.php");
include("header.php");
?>

<div class="content">
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <?php
                $posts = posts();
                foreach($posts as $post) {
                    ?>
                    <div class="post-preview">
                        <a href="">
                            <h2>
                                <?php
                                echo $post['title'];
                                ?>
                            </h2>
                        </a>
                        <div class="intro">
                            <div class="clearfix">
                                <p>
                                    <?php
                                    echo $post['intro'];
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <hr>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <hr>
</div>

<?php
include('footer.php');