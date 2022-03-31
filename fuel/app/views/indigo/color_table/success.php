<div class="center">
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

        
        
        <script type='text/javascript'>
            function print(){
                return(<p>Hello World</p>);
            }
        </script>

        <?php
            echo(print());
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

        <!--FIXME: Only Prints whole page - Needs to only print Logo, Header, Table-->
        <p>
            <button onClick="printDiv()">Print</button>
        </p>

        <script>
        function printDiv() {
            var divContents = document.getElementById("table1").innerHTML;
            var divContents2 = document.getElementById("table2").innerHTML;
            var a = window.open('', '', 'height=1000, width=1000');
            a.document.write('<html>');
            a.document.write('<header> <h1>Team Indigo </h1><br>');
            a.document.write('<?php echo Asset::img('small.png') ?>');
            a.document.write('<br></header>');
            a.document.write(divContents);
            a.document.write('<br>');
            a.document.write(divContents2);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
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
</div>