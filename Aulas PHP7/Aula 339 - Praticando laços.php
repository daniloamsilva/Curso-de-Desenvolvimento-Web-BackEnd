<!DOCTYPE html>
<html lang="pt br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
        $noticias = [
            $noticia1 = ['titulo' => 'Titulo da noticia 1', 'conteudo' => 'Conteúdo da noticia 1'],
            $noticia2 = ['titulo' => 'Titulo da noticia 2', 'conteudo' => 'Conteúdo da noticia 2'],
            $noticia3 = ['titulo' => 'Titulo da noticia 3', 'conteudo' => 'Conteúdo da noticia 3']
        ];
    ?>

    <h2>Laço while</h2>

    <?php
        $idx = 0;
        while( $idx < count($noticias) ){
            echo '<h3>' . $noticias[$idx]['titulo'] . '</h3>';
            echo '<p>' . $noticias[$idx]['conteudo'] . '</p>';
            $idx++;
        }
    ?>

    <hr>
    <h2>Laço do/while</h2>

    <?php
        $idx = 0;
        do{
            echo '<h3>' . $noticias[$idx]['titulo'] . '</h3>';
            echo '<p>' . $noticias[$idx]['conteudo'] . '</p>';
            $idx++;
        } while( $idx < count($noticias) )
    ?>

    <hr>
    <h2>Laço for</h2>

    <?php
        for($idx = 0; $idx < count($noticias); $idx++){
            echo '<h3>' . $noticias[$idx]['titulo'] . '</h3>';
            echo '<p>' . $noticias[$idx]['conteudo'] . '</p>';
        }
    ?>

</body>
</html>