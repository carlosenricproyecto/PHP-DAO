<?php
require_once("header.php");
if (isset($arrayList[0])) {
    $class_vars = $arrayList[0]->getVars();
    ?>

    <div> <!--class='panel panel-default'-->
        <div class='text-center'> <h3><?php echo $titleList ?></h3></div>
        <table id="table-cont" class='table table-bordered table-responsive table-hover table-striped'>
            <?php
            $arrayList2Json = array();
            for ($i = 0; $i < count($arrayList); $i++) {
                $aux2 = $arrayList[$i]->toArray();
                array_push($arrayList2Json, $aux2);
            }
            $columnsList = array();
            $colTitle = array();
            for ($i = 0; $i < count($class_vars); $i++) {
                $columnsList[$i]['title'] = key($class_vars);
                next($class_vars);
            }
            //var_dump(json_encode($columnsList));
            //echo json_encode($arrayList2Json);
            //var_dump(json_encode($arrayList));
            ?>
        </table>
        <script type="text/javascript">
            var columns1 = '<?php echo json_encode($columnsList); ?>';
            var columns = JSON.parse(columns1);
            var dataset1 = '<?php echo json_encode($arrayList2Json); ?>';
            var dataset = JSON.parse(dataset1);
            

            $(document).ready(function () {
                $('#table-cont').DataTable({
                    data: dataset,
                    columns: columns
                });
            });
        </script>
    </div>
    <div>
        <form method="post" action="../../PHP-DAO/controller/printPDF.php">
            <input type="hidden" name="title-list" value="<?php echo $titleList; ?>">
            <input type="hidden" name="vars-list" value="<?php echo base64_encode(serialize($class_vars)); ?>">
            <input type="hidden" name="array-list" value="<?php echo base64_encode(serialize($arrayList)); ?>">
            <input type="submit" class="btn btn-primary" value="Print PDF">
        </form>
    </div>

    <?php
} else {
    $error = "There are no Registers";
    require_once("showMessageError.php");
}
?>
