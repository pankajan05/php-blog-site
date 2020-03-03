
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="This is php blog site to post the blogs">
    <meta name="author" content="satkunam pankajan">
    <title>Dynamo blog page</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>
    <!-- add template css file -->
    <link rel="stylesheet" href="/css/template.css" />
</head>

<body>
<!-- Page Header -->
<header class="masthead" style="background-image: url('https://picsum.photos/1100/400?grayscale');padding:100px 0px;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading text-light">
                    <h1>Sabi blogger</h1>
                    <span class="subheading">Its all about blogging about farming...</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="/">Sabi Blogs</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <?php
                $menus = menus();
                foreach($menus as $menu) {
                    echo "<li class='nav-item'>";
                    echo "<a class='nav-link' href='" . $menu['url'] . "'>";
                    echo $menu['title'];
                    echo "</a>";
                    echo "</li>";
                }
                ?>
            </ul>
        </div>
    </div>
</nav>


