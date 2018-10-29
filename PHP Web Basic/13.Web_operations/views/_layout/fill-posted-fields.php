<script>
    <?php
        foreach ($_POST as $fieldName => $fieldValue){
            $filedJson = json_encode($fieldName);
            $valueJson = json_encode($fieldValue);
            echo "setFieldValue($filedJson, $valueJson);\n";
        }
    ?>
</script>
