<div class="center">
    <h3>Please Enter A Vaild Number!</h3><br>
    Please Enter The Number of Rows and the Number of Colors:
    <form action="color_table" method="post">
        <p>Number of Rows: <input type="number" name="rows" id="rows" min='1' max='26' /></p>
        <p>Number of Colors: <input type="number" name="colors" id="colors" min='1' max='10' /></p>
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
</div>
