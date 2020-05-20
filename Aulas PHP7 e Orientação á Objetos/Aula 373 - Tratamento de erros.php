<?php

    try {
        echo '<h3> *** Try *** </h3>';

        //$sql = 'SELECT * FROM clientes';
        //mysql_query($sql);

        if (!file_exists('require_arquivo_a.php')) {
            throw new Exception('O arquivo em questão deveria estar disponivel as ' . date('d/m/y H:i:s') . ' horas mas não estava. Vamos seguir mesmo assim');
        }

    } catch (Error $e){
        echo '<h3> *** Catch Error *** </h3>';
        echo '<p style="color: red;">' . $e . '</p>';
    } catch (Exception $e){
        echo '<h3> *** Catch Exception *** </h3>';
        echo '<p style="color: red;">' . $e . '</p>';
    } finally {
        echo '<h3> *** Finally *** </h3>';
    }

?>