<head>
    <title>
        <?php echo $title ?>
    </title>
    <meta charset="UTF-8">
    <meta name="Team Indigo" content="template">
    <meta name="description" content="template">
    <meta name="author" content="Team Indigo">
    <meta name="keywords" content="Indigo, Team Indigo, color, colors, indigo">

    <?php echo Asset::css($css) ?>
</head>
<body>
<nav>
    <div class="navPic">
        <?php echo Asset::img($smallPic) ?>
    </div>
    <ul class="navLink">
        <a href="index"><span class="spanNav">Home</span></a><span class="spanNav" style="font-size: 25px; cursor: pointer"> | </span>
        <a href="about"><span class="spanNav">About</span></a><span class="spanNav" style="font-size: 25px; cursor: pointer"> | </span>
        <a href="color_table"><span class="spanNav">ColorTable</span></a>
    </ul>
</nav>
<div class="sectionSpanSubTitleBar">
    <div style="margin-left: 400px">
    <p class="h1Header"><?php echo $headerTitle; ?> </p>
    </div>
</div>

<?php echo $content; ?>
</body>
<footer>
    <div class="footerSpan">&nbsp;</div>
    <br>
    <div class="footerLinks">
        <a href="index">Home</a> -
        <a href="about">About</a> -
        <a href="color_table">ColorTable</a>
    </div>
    <br>
    <div class="footerSocial">
        Find Us On:
        <a href="#"
           target="_blank"
           onClick="return confirm('WARNING! You are now leaving this site. Would you like to continue?')">Linkedin</a>
        |
        <a href="#"
           target="_blank"
           onClick="return confirm('WARNING! You are now leaving this site. Would you like to continue?')">Facebook</a>
        |
        <a href="#" target="_blank"
           onClick="return confirm('WARNING! You are now leaving this site. Would you like to continue?')">Instagram</a>
        |
        <a href="#" target="_blank"
           onClick="return confirm('WARNING! You are now leaving this site. Would you like to continue?')">YouTube</a>
        |
        <a href="#" target="_blank"
           onClick="return confirm('WARNING! You are now leaving this site. Would you like to continue?')">Github</a>

    </div>
    <br>
    <div>
        Team Indigo | <a class="footerLink" href="#">TeamIndigo@gmail.com</a> |
        Fort Collins, Colorado
        <br>&copy; Copyrighted 2022 Team Indigo | Colorado State University CS312 Project
    </div>
    <br>
</footer>
