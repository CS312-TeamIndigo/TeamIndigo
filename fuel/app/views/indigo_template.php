<head>
    <title>
        <?php echo $title ?>
    </title>
    <meta charset="UTF-8">
    <meta name="Team Indigo" content="template">
    <meta name="description" content="template">
    <meta name="author" content="Team Indigo">
    <meta name="keywords" content="hip-hop, rap, best, legends, Kendrick Lamar, Biggie Smalls, Notorious B.I.G.">

    <!-- <?php echo Asset::css($css) ?> putting this here has no effect -->
    <?php echo Asset::css($css) ?>
</head>
<div id="wrapper">
    <body>
        <header>
            <br/>
            <div class="nav">
                <a href="index">Home</a>
                <?php echo '<a href="https://cs.colostate.edu:4444/~cwquick1/cs312/Group1/index.php/indigo/'.$direction.'">About</a>' ?> 
                <?php echo '<a href="https://cs.colostate.edu:4444/~cwquick1/cs312/Group1/index.php/indigo/'.$direction2.'">Biggie</a>' ?>             
                <a href="east?direction=east">East</a>
                <a href="west?direction=west">West</a>
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
