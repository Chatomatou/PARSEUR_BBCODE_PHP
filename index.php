<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>BBCODE : Parser</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="bbcode.css">

        <style>
            html
            {
                overflow: auto;
            }
            body {
                position: absolute;
                top: 20px;
                left: 20px;
                bottom: 20px;
                right: 20px;
                padding: 30px; 
                overflow-y: scroll;
                overflow-x: hidden;
            }
        </style>
    </head>
    <body>
<?php 
    include 'bbcode.php';
    $text = '

    [title]Je suis un titre[/title]
    [title]Je suis un sous titre[/title]

    [center][p]
        Je suis un paragraphe ![cr]
        [b]Je suis du texte en gras[/b][cr]
        [i]Je suis un texte en italique[/i][cr]
        [s]Je suis un texte barrée[/s][cr]
         [u]Je suis un texte souligné[/u] 
    [/p][/center] 

    
    
    [url]https://github.com/GuerrierNumerique/BBCODE_PARSEUR_PHP[/url][cr]
    [url url="https://github.com/GuerrierNumerique/BBCODE_PARSEUR_PHP"]Acceder a cette URL (c\'est mon github)[/url]
    [cr][cr]
    [img]https://c402277.ssl.cf1.rackcdn.com/photos/11552/images/hero_small/rsz_namibia_will_burrard_lucas_wwf_us_1.jpg?1462219623[/img]
    [img=120x120]https://c402277.ssl.cf1.rackcdn.com/photos/11552/images/hero_small/rsz_namibia_will_burrard_lucas_wwf_us_1.jpg?1462219623[/img]
    
    [quote]Je suis une superbe citation[/quote]
    [youtube]https://www.youtube.com/embed/eWX73LqwHxg[/youtube]

    [p]Notation scientifique de la puissance : [power]2, 16[/power][/p]
    [p]Le dioxygène dangereux pour la planête : [index]CO, 2[/index][/p]
    [p]Appuyer sur [keyboard]ctr+s[/keyboard] pour enregistrer[/p]

    [code]
    #include <iostream>

    int main()
    {
        std::cout << "Hello, World!" << std::endl;
        return 0;
    }
    [/code]
    [samp]g++ main.cpp -o programme && ./programme Hello, World[/samp]
 ';

    $text = bbcode_to_parse($text);

    echo $text;
 ?>
    </body>
</html>