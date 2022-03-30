<head>
    <title>
        <?php echo $title ?>
    </title>
    <meta charset="UTF-8">
    <meta name="Team Indigo" content="template">
    <meta name="description" content="template">
    <meta name="author" content="Team Indigo">
    <meta name="keywords" content="Indigo, Team Indigo, color, colors, indigo">

    <!-- <?php echo Asset::css($css) ?> putting this here has no effect -->
    <?php echo Asset::css($css) ?>
</head>
<div id="wrapper">
    <body>
        <header>
            <br/>
            <div class="nav">
                <a href="index">Home</a>
                <a href="about">About</a>
                <a href="color_table">Color Table</a>
            </div>
            <br/>
            <img class="center">
            <?php echo  Asset::img($filename) ?> 
            </img>
        </header>
        <section>
            <h1><?php echo $title?></h1>
            <?php echo $content ?>
        </section>
        <footer>
            <br />
            <br />
            <br />
            <br />
            Author: Team Indigo -------- Last Modified: 3/26/2022
       </footer>
    </body>
</div>
