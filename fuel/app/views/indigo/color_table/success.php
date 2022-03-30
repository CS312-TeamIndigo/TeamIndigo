<body>
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

        /*-----------------------------Table Variables-------------------------------*/

        /*Top Table Variables*/
        $in_color = $_POST['colors'];
        $in_table_height = 1;
        $temp_color = 0;
        $temp_table_height = 0;
        $colors = array("Red", "Orange", "Yellow", "Green", "Blue", "Purple", "Grey", "Brown", "Black", "Teal");
        $color_index = 0;
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

                /*-----------------------------Top Table-------------------------------*/
        echo "<br>";
        echo "<table style='border: #0f0f0f; border-style: solid; width: 100%'>";
        $count = count($colors);
        for ($temp_color = 0; $temp_color < $in_color; $temp_color++) {
            for ($temp_table_height = 0; $temp_table_height < $in_table_height; $temp_table_height++) {
                echo "<tr>";
                echo "<td style='background-color: white; width: 20%;'>";
                //Variable for Name of Color
                echo    "<select name='colorList' id='colorList' onchange=>this.form.submit()";
                echo        "<option value=0> Red </option>";
                echo        "<option value=1> Orange </option>";
                echo        "<option value=2> Yellow </option>";
                echo        "<option value=3> Green </option>";
                echo        "<option value=4> Blue </option>";
                echo        "<option value=5> Purple  </option>";
                echo        "<option value=6> Grey </option>";
                echo        "<option value=7> Brown </option>";
                echo        "<option value=8> Black </option>";
                echo        "<option value=9> Teal </option>";
                echo    "</select>";
                if(isset($_POST['colorList'])){
                    $color_index=$_POST['colorList'];
                }
                echo "</td>";
                //  Variable for BG color
                echo "<td style='background-color: $colors($color_index); width: 80%'>"; 
                echo "  &nbsp;";
                echo "</td>";
                echo "</tr>";
            }
        }
        echo "</table>";
        /*-----------------------------End Top Table-------------------------------*/

        echo "<br>";

        /*-----------------------------Bottom Table-------------------------------*/
        /*Bottom Table*/
        echo "<div style='display: flex; justify-content: center;'>";
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

        <!--FIXME: Only Prints whole page - Needs to only print Logo, Header, Table-->
        <p>
            <button onClick="window.print()">Print</button>
        </p>


        <!-----------------------------End Print Current Table------------------------------->

        <?php
        echo Form::open(array(
            "action" => "index/indigo",
            "method" => "post",
            "id" => "fuel_form"
        ));

        echo Form::close();
        ?>

        <!----------------------------EXAMPLE FOR END GOAL--------------------------->
        <!--Debugging Example:

        <table style="width:100%">
            <tbody>
            <tr>
                <td style="background-color: white; width: 20%; ">Red</td>
                <td style="background-color: red; width: 80%">&nbsp;</td>
            </tr>
            <tr>
                <td style="background-color: white; width: 20%">Orange</td>
                <td style="background-color: Orange; width: 80%">&nbsp;</td>
            </tr>
            <tr>
                <td style="background-color: white; width: 20%; ">Yellow</td>
                <td style="background-color: yellow; width: 80%">&nbsp;</td>
            </tr>
            <tr>
                <td style="background-color: white; width: 20%; ">Green</td>
                <td style="background-color: green; width: 80%">&nbsp;</td>
            </tr>
            <tr>
                <td style="background-color: white; width: 20%">Blue</td>
                <td style="background-color: blue; width: 80%">&nbsp;</td>
            </tr>
            <tr>
                <td style="background-color: white; width: 20%; ">Purple</td>
                <td style="background-color: purple; width: 80%">&nbsp;</td>
            </tr>
            <tr>
                <td style="background-color: white; width: 20%">Grey</td>
                <td style="background-color: grey; width: 80%">&nbsp;</td>
            </tr>
            <tr>
                <td style="background-color: white; width: 20%; ">Brown</td>
                <td style="background-color: brown; width: 80%">&nbsp;</td>
            </tr>
            <tr>
                <td style="background-color: white; width: 20%">Black</td>
                <td style="background-color: black; width: 80%">&nbsp;</td>
            </tr>
            <tr>
                <td style="background-color: white; width: 20%">Teal</td>
                <td style="background-color: teal; width: 80%">&nbsp;</td>
            </tr>
            </tbody>
        </table>

        <br>

        <table style='border: #0f0f0f; border-style: solid'>
            <tr>
                <th>&nbsp;</th>
                <th>A</th>
                <th>B</th>
                <th>C</th>
                <th>D</th>
                <th>E</th>
                <th>F</th>
                <th>G</th>
                <th>H</th>
                <th>I</th>
            </tr>

            <tr>
                <td>1</td>
            </tr>
            <tr>
                <td>2</td>
            </tr>
            <tr>
                <td>3</td>
            </tr>
            <tr>
                <td>4</td>
            </tr>
            <tr>
                <td>5</td>
            </tr>
            <tr>
                <td>6</td>
            </tr>
            <tr>
                <td>7</td>
            </tr>
            <tr>
                <td>8</td>
            </tr>
            <tr>
                <td>9</td>
            </tr>
            <tr>
                <td>10</td>
            </tr>
        </table>-->


    </form>
</section>
</body>