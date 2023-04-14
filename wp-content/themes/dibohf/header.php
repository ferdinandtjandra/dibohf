
    <meta charset="UTF-8">
    <?php get_sidebar('favicon'); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/static/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/static/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/static/css/pagination.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
</head>
<script>
$(function(){
    $('.menu_btn').click(function(){
        $('.menu_btn').toggleClass('is-active');
        $('#global_nav').toggleClass('is-active');
    });
});
</script>