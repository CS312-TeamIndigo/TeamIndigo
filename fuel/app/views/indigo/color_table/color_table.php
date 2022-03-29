<body>
    <section>
        This is the page that will contain the color table
        <form action="color_table.php" method="get">
        <p>Number of Rows: <input type="number" name="rows" min='1' max='26'/></p>
        <p>Number of Columns: <input type="number" name="columns" min='1' max='10' /></p>
        <p><input type="submit" /></p>

        <p>Rows: <?php if($_GET["rows"]){ echo $_GET[["rows"]; } 
        else{ echo "none"; } ?><br></p>
        <p>Columns: <?php if($_GET["columns"]){ echo $_GET["columns"]; } 
        else{ echo "none"; }?></p>

</form>
    </section>
</body>
