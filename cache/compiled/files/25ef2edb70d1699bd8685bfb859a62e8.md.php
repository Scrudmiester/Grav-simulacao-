<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/grav-admin/user/pages/05.terceirizacao-de-ti/blog.md',
    'modified' => 1715620112,
    'size' => 304,
    'data' => [
        'storage_key' => '05.terceirizacao-de-ti',
        'header' => [
            'title' => 'Terceirização de TI V2',
            'content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'limit' => 5,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'pagination' => true,
                'url_taxonomy_filters' => true
            ],
            'hero_classes' => 'text-light titleh1h2 overlay-dark hero-medium',
            'hero_image' => 'gahaha.jpg',
            'menu' => 'Blog'
        ],
        'root' => false,
        'frontmatter' => 'title: \'Terceirização de TI V2\'
content:
    items:
        - \'@self.children\'
    limit: 5
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true
hero_classes: \'text-light titleh1h2 overlay-dark hero-medium\'
hero_image: gahaha.jpg
menu: Blog',
        'markdown' => '# Blog
',
        'slug' => 'terceirizacao-de-ti',
        'name' => 'blog.md',
        'ordering' => true
    ]
];
