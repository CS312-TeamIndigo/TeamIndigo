<head>
    <title>
        <?php echo $title ?>
    </title>
    <meta charset="UTF-8">
    <meta name="Connor Quick" content="template">
    <meta name="description" content="template">
    <meta name="author" content="Connor Quick">
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
                <?php echo '<a href="https://cs.colostate.edu:4444/~cwquick1/cs312/fuelviews/index.php/eastwest/'.$direction.'">Kendrick</a>' ?> 
                <?php echo '<a href="https://cs.colostate.edu:4444/~cwquick1/cs312/fuelviews/index.php/eastwest/'.$direction2.'">Biggie</a>' ?>             
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
            Author: Connor Quick ---- EID: cwquick1 ---- Last Modified: 3/11/2022
       </footer>
    </body>
</div>
