<div class="sectionSpanSubTitle"></div>
<div class="center">
<section>
    <!--/---------------Debug Purposes--------------/-->
    <!--<h3>Success! Populating Table of Colors!</h3><br>-->
    <!--/---------------Debug Purposes--------------/-->

    Please Enter The Number of Rows and the Number of Colors:
    <form action="color_table" method="post">
        <p>Number of Rows: <input type="number" name="rows" id="rows" min='1' max='26'/></p>
        <p>Number of Colors: <input type="number" name="colors" id="colors" min='1' max='10'/></p>
        <p><input type="submit"/></p>

        <?php
                   /*-----------------------------Top Table-------------------------------*/
        /*Top Table Variables*/
        $in_color = $_POST['colors'];
        $in_table_height = 1;
        $temp_color = 0;
        $temp_table_height = 0;
        $colors = array("Red", "Orange", "Yellow", "Green", "Blue", "Purple", "Grey", "Brown", "Black", "Teal");


        echo "<br>";
        echo "<div id='table1'>";
        echo "<table style='border: #0f0f0f; border-style: solid; width: 100%'>";
        $count = count($colors);
        for ($temp_color = 0; $temp_color < $in_color; $temp_color++) {
            $color_index = $temp_color;
            for ($temp_table_height = 0; $temp_table_height < $in_table_height; $temp_table_height++) {
                echo "<tr>";
                echo "<td style='background-color: white; width: 20%;'>";
                //Variable for Name of Color
                echo    "<select name='colorIndex' class='colorIndex' onchange='javascript:btnClick(this)'>";
                echo        "<option value = 0 id='Red'> Red </option>";
                echo        "<option value = 1 id='Orange'> Orange </option>";
                echo        "<option value = 2 id='Yellow'> Yellow </option>";
                echo        "<option value = 3 id='Green'> Green </option>";
                echo        "<option value = 4 id='Blue'> Blue </option>";
                echo        "<option value = 5 id='Purple'> Purple </option>";
                echo        "<option value = 6 id='Grey'> Grey </option>";
                echo        "<option value = 7 id='Brown'> Brown </option>";
                echo        "<option value = 8 id='Black'> Black </option>";
                echo        "<option value = 9 id='Teal'> Teal </option>";
                echo    "</select>";
                echo "
                <script type='text/javascript'>
                var new_color_index = '.$color_index.';
                function btnClick(event) {
                    new_color_index = event.value;
                }
                </script>
                    ";
                echo "</td>";
                //  Variable for BG color
                echo "<td id='background_color' style='background-color: $colors[$color_index]; width: 80%'>";
                echo "  &nbsp;";
                echo "</td>";
                echo "</tr>";
            }
        }
        echo "</table>";

        echo "</div>";
        /*-----------------------------End Top Table-------------------------------*/
        ?>

        <?php

        /*-----------------------------Table Variables-------------------------------*/


        /*Bottom Table Variables*/
        $in_height = $_POST['rows'];
        $in_row = $_POST['rows'];
        $counter = 1;
        $temp_row = 0;
        $alphabet = range('A', 'Z');

        /*---------------Debug Purposes--------------*/
        /*echo "<br>";
        echo "<Strong>";
        echo "You entered ";
        echo $in_height;
        echo " rows and ";
        echo $in_color;
        echo " colors:";
        echo "</Strong>";
        echo "<br>";*/
        /*---------------Debug Purposes--------------*/



        echo "<br>";

        /*-----------------------------Bottom Table-------------------------------*/
        /*Bottom Table*/
        echo "<div id= 'table2' style='display: flex; justify-content: center;'>";
        echo "<table style='border: #0f0f0f; border-style: solid;'>";
        /*Counting across the top column*/

        for ($temp_height = 0; $temp_height < $in_height; $temp_height++) {
                echo "<td>";
                echo "<th>";
                echo $alphabet[$temp_height];//FIXME: Variable for counting the Alphabet from A to Z Skipping the first cell
                echo "</th>";
                echo "</td>";
        }
        /*Counting down the left column*/
        for ($temp_row = 0; $temp_row < $in_row; $temp_row++) {
            echo "<tr>";

            echo "<td>$counter</td>";
            echo "</tr>";
            ++$counter;
        }

        echo "</table>";
        echo "</div>";

        /*-----------------------------End Bottom Table-------------------------------*/
        ?>
        <br>

        <!-----------------------------Print Current Table------------------------------->
        <p>
            <button onClick="printDiv()">Print</button>
        </p>

        <script>
        function printDiv() {
            var divContents = document.getElementById("table1").innerHTML;
            var divContents2 = document.getElementById("table2").innerHTML;
            var a = window.open('', '', 'height=1000, width=1000');
            a.document.write('<html><header>');
            a.document.write('<div style="text-align: center;">');
            a.document.write('<?php echo Asset::img('smallPrint.png') ?>');
            a.document.write('</div><h2 style="text-align: center; width: 100%; background: indigo; color: white; font-family: Optima, sans-serif;">Team Indigo</h2>');
            a.document.write('</header><body>');
            a.document.write(divContents);
            a.document.write('<br>');
            a.document.write('<div style="position: relative; right: 30%; left: 25%;">');
            a.document.write(divContents2);
            a.document.write('</div></body></html>');
            a.document.close();
        }
        </script>


        <!-----------------------------End Print Current Table------------------------------->

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
</div>
