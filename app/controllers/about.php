<?php

$post = '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita, earum aliquam magnam corrupti maiores est praesentium quam in dolore quidem quo culpa cupiditate hic? Voluptatum culpa eos eligendi veniam rem?</p>
<p>Ducimus maxime ad repellendus corrupti placeat. Accusantium fugit animi commodi. Rem illum quia reiciendis? Dignissimos veniam, distinctio alias sapiente iste laudantium eos ipsa dolor. Dolorum ratione facere possimus voluptas veniam.</p>
<p>Eligendi doloremque, itaque, consequuntur impedit hic earum vel maxime modi deleniti molestiae ad adipisci, nesciunt voluptates! Perspiciatis cupiditate delectus blanditiis eum ducimus, in, similique sequi sapiente assumenda laudantium vel illo!</p>
<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos.</p>';


$resent_posts = [
    1 => [
        'title' => 'An item',
        'slug' => lcfirst(str_replace(' ', '-', 'An item')),
    ],
    2 => [
        'title' => 'A second item',
        'slug' => lcfirst(str_replace(' ', '-', 'A second item')),
    ],
    3 => [
        'title' => 'A third item',
        'slug' => lcfirst(str_replace(' ', '-', 'A third item')),
    ],
    4 => [
        'title' => 'A fourth item',
        'slug' => lcfirst(str_replace(' ', '-', 'A fourth item')),
    ],
    5 => [
        'title' => 'A fifth item',
        'slug' => lcfirst(str_replace(' ', '-', 'A fifth item')),
    ],
];

require_once VIEWS . '/about.tpl.php';