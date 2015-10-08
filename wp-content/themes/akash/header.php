<html>
<head>
    <title>Blogs</title>
    <script type="text/javascript">
        var ajax_url = "<?php echo admin_url('admin-ajax.php'); ?>";
    </script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="blog_Header">
<nav class="navbar" role="navigation">
    <div class="container activityShell_Controller">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#activityShell-nav-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand BlogHeader_Icon">Brand</a>
        </div>

        <div class="collapse navbar-collapse navbar-right" id="activityShell-nav-collapse">
            <ul class="nav navbar-nav">
                <li><a href="#" id="blogsNavbarSignup">SUBSCRIBE</a></li>
            </ul>
        </div>
    </div>
</nav>

<?php if(is_front_page()): ?>
    <div class="jumbotron activityShell_HeaderJumbotron" id="activityShell_HeaderJumbotron">
        <div class="container BlogListingHeaderContainer">
            <h1 class="BlogHeaderHeading" id="BlogHeaderHeading_2">TOP 5 REASONS TO TRAVEL WHILE YOU'RE IN YOUR THIRTIES</h1>
        </div> <!-- end container -->
        <button class="btn btn-default" id="blogListingHeaderSignup">READ</button>
    </div> <!-- end jumbotron -->
<?php elseif (is_singular()) : ?>
    <div class="jumbotron activityShell_HeaderJumbotron" id="activityShell_HeaderJumbotron">
        <div class="container">
            <h1 class="BlogHeaderHeading" id="BlogHeaderHeading">TOP 25 BEST PLACES TO SNORKEL DIVE IN INDIA</h1>
            <h3>by Ketan Mehta, on Oct 25, 2015</h3>
        </div> <!-- end container -->
    </div> <!-- end jumbotron -->
<?php endif; ?>

</header>
<!-- End Of Header -->