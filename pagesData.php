<?php 
$pagesData = [
    'about' => [
            'title' => '<h1>About Us</h1>',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, obcaecati sequi! Sint soluta velit maiores, neque qui accusantium voluptatum veritatis consequatur iste quae reprehenderit inventore facilis. Veniam odit neque odio culpa consequuntur, nemo rem. Cupiditate nemo magni id quibusdam omnis incidunt! Ullam praesentium nam nesciunt repellendus expedita accusamus consequatur. Nemo est ex enim facere fugit dignissimos consequatur adipisci perferendis quibusdam expedita illo, optio labore sunt nisi error laborum consectetur cumque quas magni voluptatem iure deserunt! Autem aut atque ipsum eum velit? Modi voluptatum nisi minus, cum, suscipit, nostrum at obcaecati exercitationem alias maxime maiores blanditiis beatae omnis dicta magni quod.</p>',
            'image' => '<img src="./images/team.jpeg" alt="Team"'
        ],

    'blog' =>
        [
            'title' => '<h1>Our Blog</h1>',
            'body' => [
                'article_1' => [
                    'name' => '<h3>Made With Love In Toronto</h3>',
                    'content' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, iusto doloribus eveniet cumque facere tenetur laborum est perferendis sint, fugit eaque quasi explicabo consequatur, ratione maiores voluptates nemo architecto deleniti deserunt officia numquam pariatur. Quos facilis libero, nisi ut quasi, pariatur consequuntur aut fuga hic vel molestias, distinctio veritatis neque!</p>'
                ],
                'article_2' => [
                    'name' => '<h3>Startup News & Emerging Tech</h3>',
                    'content' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, iusto doloribus eveniet cumque facere tenetur laborum est perferendis sint, fugit eaque quasi explicabo consequatur, ratione maiores voluptates nemo architecto deleniti deserunt officia numquam pariatur. Quos facilis libero, nisi ut quasi, pariatur consequuntur aut fuga hic vel molestias, distinctio veritatis neque!</p>'
                ],
                'article_3' => [
                    'name' => '<h3>Bitcoin Will Soon Rule The World</h3>',
                    'content' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, iusto doloribus eveniet cumque facere tenetur laborum est perferendis sint, fugit eaque quasi explicabo consequatur, ratione maiores voluptates nemo architecto deleniti deserunt officia numquam pariatur. Quos facilis libero, nisi ut quasi, pariatur consequuntur aut fuga hic vel molestias, distinctio veritatis neque!</p>',
                    'image' => '<img src="./images/bitcoin.jpg" alt="Bitcoin">'
                ],
                'article_4' => [
                    'name' => '<h3>Wearable Technology On The Rise</h3>',
                    'content' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, iusto doloribus eveniet cumque facere tenetur laborum est perferendis sint, fugit eaque quasi explicabo consequatur, ratione maiores voluptates nemo architecto deleniti deserunt officia numquam pariatur. Quos facilis libero, nisi ut quasi, pariatur consequuntur aut fuga hic vel molestias, distinctio veritatis neque!</p>'
                ],
                'article_5' => [
                    'name' => '<h3>Learn Web Design In 30 Days!</h3>',
                    'content' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui, iusto doloribus eveniet cumque facere tenetur laborum est perferendis sint, fugit eaque quasi explicabo consequatur, ratione maiores voluptates nemo architecto deleniti deserunt officia numquam pariatur. Quos facilis libero, nisi ut quasi, pariatur consequuntur aut fuga hic vel molestias, distinctio veritatis neque!</p>'
                ],
            ]
        ],

        'portfolio' => [
            'title' => '<h3>Our Portfolio</h3>',
            'body' => [
                'port_1' => [
                    'image' => '<img src="./images/ebony.png" alt="Ebony">',
                    'name' => '<h4>Ebony & Ivory</h4>',
                    'content' => '<p>Branding</p>'
                ],
                'port_2' => [
                    'image' => '<img src="./images/smart.png" alt="Smart">',
                    'name' => '<h4>Smart stationary</h4>',
                    'content' => '<p>Print Design</p>'
                ],
                
                'port_3' => [
                    'image' => '<img src="./images/clever.png" alt="Clever">',
                    'name' => '<h4>Clever Poster</h4>',
                    'content' => '<p>Print Design</p>'
                ],
                
                'port_4' => [
                    'image' => '<img src="./images/vinyl.png" alt="Vinyl">',
                    'name' => '<h4>Vinyl Record</h4>',
                    'content' => '<p>Product Mock-Up</p>'
                ],
                
                'port_5' => [
                    'image' => '<img src="./images/treehouse.png" alt="Treehouse">',
                    'name' => '<h4>Treehouse Template</h4>',
                    'content' => '<p>Web Design</p>'
                ],
                
                'port_6' => [
                    'image' => '<img src="./images/burned.png" alt="Burned">',
                    'name' => '<h4>Burned Logo</h4>',
                    'content' => '<p>Branding</p>'
                ]
            ]
        ],

        'contact' => [
            'title' => '<h3>Contact Us</h3>',
            'body' => [
                'name' => '<input required placeholder="Andrey" type="text" minlength="2" maxlength="50" name="name" />',
                'phone' => '<input required placeholder="+375 (29) 123-45-67" type="tel" name="phone">',
                'email' => '<input required placeholder="info@mail.ru" type="email" name="email">',
                'message' => '<textarea minlength="5" maxlength="250" name="myself" ></textarea>'
            ]
        ]
];    