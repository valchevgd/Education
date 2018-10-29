<script>
    <?php
        foreach (array_reverse($this->validationErrors) as $filedName => $errorMsg){
            $filedJson = json_encode($filedName);
            $errorMsgJson = json_encode($errorMsg);
            echo "showValidationError($filedJson, $errorMsgJson);\n";
        }
    ?>
</script>