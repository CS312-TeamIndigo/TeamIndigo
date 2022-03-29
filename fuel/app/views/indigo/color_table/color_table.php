<body>
    <section>
        This is the page that will contain the color table
        <form action="color_table.php" method="post">
        <p>Number of Rows: <input type="number" name="rows" min='1' max='26'/></p>
        <p>Number of Columns: <input type="number" name="columns" min='1' max='10' /></p>
        <p><input type="submit" /></p>

        <p>Rows: <?php if($_POST["rows"]){ echo $_POST["rows"]; } ?><br></p>
        <p>Columns: <?php if($_POST["columns"]){ echo $_POST["columns"]; } ?></p>

</form>
    </section>
</body>
