<?php 
/*
    Ce script php gere toutes les balise BBCODE trouvable
    a cette adresse : https://www.bbcode.org/reference.php
*/
function bbcode_to_parse(string $text)
{   
        // Titre 
    $text = preg_replace('%\[title\](.+)\[/title\]%isU', '<h1 class="bbcode bbcode-title">${1}</h1>', $text);
    $text = preg_replace('%\[subtitle\](.+)\[/subtitle\]%isU', '<h2 class="bbcode bbcode-subtitle">${1}</h2>', $text);
    
        // Formatage du texte 
    $text = preg_replace('%\[p\](.*)\[/p\]%isU', '<p class="bbcode bbcode-paragraph">${1}</p>', $text);
    $text = preg_replace('%\[b\](.+)\[/b\]%isU', '<strong class="bbcode bbcode-bold">${1}</strong>', $text);
    $text = preg_replace('%\[i\](.+)\[/i\]%isU', '<em class="bbcode bbcode-italic">${1}</em>', $text);
    $text = preg_replace('%\[s\](.+)\[/s\]%isU', '<del class="bbcode bbcode-strikethrough">${1}</del>', $text);
    $text = preg_replace('%\[u\](.+)\[/u\]%isU', '<ins class="bbcode bbcode-underline">${1}</ins>', $text);
    $text = preg_replace('%(\[cr\])%isU', '<br>', $text);

    // Positionnement  
    $text = preg_replace('%\[center\](.*)\[/center\]%isU', '<span class="bbcode bbcode-center">${1}</span>', $text);
    $text = preg_replace('%\[left\](.*)\[/left\]%isU', '<span class="bbcode bbcode-left">${1}</span>', $text);
    $text = preg_replace('%\[right\](.*)\[/right\]%isU', '<span class="bbcode bbcode-right">${1}</p>', $text);
    $text = preg_replace('%\[justify\](.*)\[/justify\]%isU', '<span class="bbcode bbcode-justify">${1}</span>', $text);
     
  
        // Ressource multimedia 
    $text = preg_replace('%\[url\](.*)\[/url\]%isU', '<a class="bbcode bbcode-link" href="${1}">${1}</a>', $text);  
    $text = preg_replace('%\[url url="(.+)"\](.+)\[/url\]%isU', '<a class="bbcode bbcode-link" href="${1}">${2}</a>', $text);  
    $text = preg_replace('%\[img\](.*)\[/img\]%isU', '<img class="bbcode bbcode-image" src="${1}" alt="Impossible to show image !">', $text);
    $text = preg_replace('%\[img=(.+)x(.+)\](.+)\[\/img\]%isU', '<img class="bbcode bbcode-image" src="${3}" width="${1}" height="${2}">', $text);
    $text = preg_replace('%\[quote\](.+)\[/quote\]%isU', '<blockquote class="bbcode bbcode-quote">${1}</blockquote>', $text);
    $text = preg_replace('%\[youtube\](.+)\[/youtube\]%isU', '<iframe class="bbcode bbcode-youtube" width="560" height="315" src="${1}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>', $text);

        // formatage technique
    $text = preg_replace('%\[power\]([a-zA-Z0-9 =]+), ([a-zA-Z0-9 =]+)\[\/power\]%isU', '${1}<sup>${2}</sup>', $text);
    $text = preg_replace('%\[index\]([a-zA-Z0-9 =]+), ([a-zA-Z0-9 =]+)\[\/index\]%isU', '${1}<sub>${2}</sub>', $text);
    $text = preg_replace('%\[keyboard\](.*)\[\/keyboard\]%isU', '<kbd class="bbcode bbcode-keyboard">${1}</kbd>', $text);
    $text = preg_replace('%\[samp\](.*)\[\/samp\]%isU', '<samp class="bbcode bbcode-output-code">${1}</samp>', $text);
    $text = preg_replace('%\[code\](.*)\[\/code\]%isU', '<code class="bbcode bbcode-code"><pre>${1}</pre></code>', $text);
 
        // Formtage code
    $text = preg_replace('%(#include).+(<(.+)>)%isU', '${1} &lt${3}&gt', $text);
 
    return $text;
}