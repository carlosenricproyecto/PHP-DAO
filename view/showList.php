<?php
require_once("header.php");
$class_vars = $arrayList[0]->getVars();
?>

<div class='panel panel-default'>
    <div class='panel-heading text-center'> <?php echo $titleList ?></div>
    <table class='table'><tr>


            <?php
            foreach ($class_vars as $name => $value) {
                echo "<th>" . $name . "</th>";
            }
            ?>

        </tr>

        <?php
        foreach ($arrayList as $row) {
            echo "<tr>";
            $aux = $row->toArray();
            foreach ($aux as $string) {
                echo "<td>" . $string . "</td>";
            }
            echo "</tr>";
        }
        ?>

    </table></div>
