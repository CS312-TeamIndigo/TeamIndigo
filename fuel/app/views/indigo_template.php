es (69 sloc)  2.33 KB
   
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
<header>
    <div class="center">


            <?php echo Asset::img($smallPic) ?>
        <div class="grid-container">
        <div class="grid-child right">
            <h1><?php echo $headerTitle; ?> </h1>
        </div>
    </div>
    </div>
</header>
<nav>
    <ul class="navLink">
        <a href="index"><span class="spanNav">Home</span></a></li>  |
        <a href="about"><span class="spanNav">About</span></a></li> |
        <a href="color_table"><span class="spanNav">ColorTable</span></a></li>
    </ul>
</nav>

<br/>
<?php echo $content; ?>
</body>

<footer>
    <?php $thisPage = 'footer'; ?>
    <div class="footerSpan"></div>
    <br>
    <div class="footerLinks">
        <a href="index">Home</a> -
        <a href="about">About</a> -
        <a href="color_table">ColorTable</a>
    </div>
    <br>
    <div class="footerSocial">
        <a href="#"
           target="_blank"
           onClick="return confirm('WARNING! You are now leaving this site. Would you like to continue?')">Linkedin</a>
        |
        <a href="#"
           target="_blank"
           onClick="return confirm('WARNING! You are now leaving this site. Would you like to continue?')">Facebook</a>
        |
        <a href="#" target="_blank"
           onClick="return confirm('WARNING! You are now leaving this site. Would you like to continue?')">Twitch</a>
        |
        <a href="#" target="_blank"
           onClick="return confirm('WARNING! You are now leaving this site. Would you like to continue?')">Github</a>
        |
        <a href="#"
           target="_blank"
           onClick="return confirm('WARNING! You are now leaving this site. Would you like to continue?')">Steam</a>
    </div>
    <br>
    <div>
        Team Indigo | <a class="footerLink" href="#">TeamIndigo@gmail.com</a> |
        Fort Collins, Colorado
        <br>&copy; Copyrighted 2022 Team Indigo | Colorado State University Project
    </div>
    <br>
</footer>