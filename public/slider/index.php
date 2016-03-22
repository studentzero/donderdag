<html>
<head>
    <title>My Now Amazing Webpage</title>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>

<?php
    $images = glob("img/*.*");
?>

<div class="your-class">
    <?php foreach ($images as $image) {
            echo ("<div>" . "<img src=" . $image . ">" . "</div>");
        } ?>
</div>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.your-class').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true
    });
    });
</script>

</body>
</html>