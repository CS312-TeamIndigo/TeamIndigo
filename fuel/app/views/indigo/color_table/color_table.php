<body>
    <section>
        This is the page that will contain the color table
        <form action="color_table.php" method="get">
        <p>Number of Rows/ Columns: <input type="number" name="rows" min='0' max='26'/></p>
        <p>Number of Colors: <input type="number" name="colors" min='0' max='10' /></p>
        <p><input type="submit" /></p>

        <p> Rows/ Columns Entered : <?php echo $_GET["rows"]; ?> <br>
        Number of Colors Entered : <?php echo $_GET["colors"]; ?> </p>

        <p>Rows/ Columns: none</p>
        <p>Colors: none</p>

</form>
    </section>
</body>
