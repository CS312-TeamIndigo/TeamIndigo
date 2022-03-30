<body>
    <section>
        This is the page that will contain the color table
        <form action="indigo" method="post">
        <p>Number of Rows: <input type="number" name="rows" id="rows" min='1' max='26'/></p>
        <p>Number of Columns: <input type="number" name="colors" id="colors" min='1' max='10' /></p>
        <p><input type="submit" /></p>

        <p>Rows: <?php echo $rows?></p>
        <p>Colors: <?php echo $colors?></p>

</form>
    </section>
</body>
