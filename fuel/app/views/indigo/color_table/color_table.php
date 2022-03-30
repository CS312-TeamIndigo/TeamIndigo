<body>
    <section>
        This is the page that will contain the color table
        <form action="color_table/color_table" method="post">
        <p>Number of Rows: <input type="number" name="rows" id="rows" min='1' max='26'/></p>
        <p>Number of Columns: <input type="number" name="colors" id="colors" min='1' max='10' /></p>
        <p><input type="submit" /></p>

        <?php
   
            echo Form::open(array(
                "action" => "index/indigo",
                "method" => "post",
                "id" => "fuel_form"
            ));

            echo Form::close();
        ?>

</form>
    </section>
</body>
