<?php

return collect([
    // Food & Snacks
    'Chips' => [
        'attributes' => [
            'Size' => ['S', 'M', 'L', 'XL'],
            'Flavor' => ['Salty', 'Cheese', 'Barbecue', 'Sour Cream', 'Spicy'],
            'Packaging' => ['Bag', 'Tube', 'Box'],
        ],
        'brands' => ['Lays', 'Pringles', 'Doritos', 'Cheetos', 'Kettle'],
        'price_range' => [1500, 5000],
        'stock_range' => [10, 100],
        'products' => [
            [
                'name' => 'Lays Classic Chips',
                'brand' => 'Lays',
                'images' => ['path/to/image1.jpg'],
            ],
            [
                'name' => 'Pringles Original',
                'brand' => 'Pringles',
                'images' => ['path/to/image2.jpg'],
            ],
            [
                'name' => 'Doritos Nacho Cheese',
                'brand' => 'Doritos',
                'images' => ['path/to/image3.jpg'],
            ],
            [
                'name' => 'Cheetos Crunchy',
                'brand' => 'Cheetos',
                'images' => ['path/to/image4.jpg'],
            ],
            [
                'name' => 'Kettle Chips Sea Salt',
                'brand' => 'Kettle',
                'images' => ['path/to/image5.jpg'],
            ],
            [
                'name' => 'Lays Barbecue Chips',
                'brand' => 'Lays',
                'images' => ['path/to/image6.jpg'],
            ],
            [
                'name' => 'Pringles Sour Cream & Onion',
                'brand' => 'Pringles',
                'images' => ['path/to/image7.jpg'],
            ],
            [
                'name' => 'Doritos Cool Ranch',
                'brand' => 'Doritos',
                'images' => ['path/to/image8.jpg'],
            ],
            [
                'name' => 'Cheetos Flamin\' Hot',
                'brand' => 'Cheetos',
                'images' => ['path/to/image9.jpg'],
            ],
            [
                'name' => 'Kettle Chips Jalapeno',
                'brand' => 'Kettle',
                'images' => ['path/to/image10.jpg'],
            ],
            [
                'name' => 'Lays Sour Cream & Onion',
                'brand' => 'Lays',
                'images' => ['path/to/image11.jpg'],
            ],
            [
                'name' => 'Pringles BBQ',
                'brand' => 'Pringles',
                'images' => ['path/to/image12.jpg'],
            ],
        ],
    ],

    'Candy' => [
        'attributes' => [
            'Size' => ['S', 'M', 'L', 'XL'],
            'Flavor' => ['Chocolate', 'Fruit', 'Caramel', 'Mint', 'Mixed'],
            'Packaging' => ['Pack', 'Box', 'Bag'],
        ],
        'brands' => ['Hershey\'s', 'Mars', 'Nestlé', 'Cadbury', 'Toblerone'],
        'price_range' => [1500, 5000],
        'stock_range' => [10, 100],
        'products' => [
            [
                'name' => 'Hershey\'s Milk Chocolate Bar',
                'brand' => 'Hershey\'s',
                'images' => ['path/to/image1.jpg'],
            ],
            [
                'name' => 'Mars Chocolate Bar',
                'brand' => 'Mars',
                'images' => ['path/to/image2.jpg'],
            ],
            [
                'name' => 'Nestlé Kit Kat',
                'brand' => 'Nestlé',
                'images' => ['path/to/image3.jpg'],
            ],
            [
                'name' => 'Cadbury Dairy Milk',
                'brand' => 'Cadbury',
                'images' => ['path/to/image4.jpg'],
            ],
            [
                'name' => 'Toblerone Swiss Chocolate',
                'brand' => 'Toblerone',
                'images' => ['path/to/image5.jpg'],
            ],
            [
                'name' => 'Hershey\'s Kisses',
                'brand' => 'Hershey\'s',
                'images' => ['path/to/image6.jpg'],
            ],
            [
                'name' => 'Mars M&M\'s Chocolate Candies',
                'brand' => 'Mars',
                'images' => ['path/to/image7.jpg'],
            ],
            [
                'name' => 'Nestlé Crunch',
                'brand' => 'Nestlé',
                'images' => ['path/to/image8.jpg'],
            ],
            [
                'name' => 'Cadbury Bournville Dark Chocolate',
                'brand' => 'Cadbury',
                'images' => ['path/to/image9.jpg'],
            ],
            [
                'name' => 'Toblerone Dark Chocolate',
                'brand' => 'Toblerone',
                'images' => ['path/to/image10.jpg'],
            ],
            [
                'name' => 'Hershey\'s Cookies & Cream',
                'brand' => 'Hershey\'s',
                'images' => ['path/to/image11.jpg'],
            ],
            [
                'name' => 'Mars Snickers Bar',
                'brand' => 'Mars',
                'images' => ['path/to/image12.jpg'],
            ],
        ],
    ],

    'Cookies' => [
        'attributes' => [
            'Size' => ['S', 'M', 'L'],
            'Flavor' => ['Chocolate Chip', 'Oatmeal', 'Peanut Butter', 'Sugar', 'Double Chocolate'],
            'Packaging' => ['Pack', 'Box', 'Bag'],
        ],
        'brands' => ['Oreo', 'Chips Ahoy!', 'Pepperidge Farm', 'Nestlé', 'Lays'],
        'price_range' => [1500, 5000],
        'stock_range' => [10, 100],
        'products' => [
            [
                'name' => 'Oreo Chocolate Sandwich Cookies',
                'brand' => 'Oreo',
                'images' => ['path/to/image1.jpg'],
            ],
            [
                'name' => 'Chips Ahoy! Chocolate Chip Cookies',
                'brand' => 'Chips Ahoy!',
                'images' => ['path/to/image2.jpg'],
            ],
            [
                'name' => 'Pepperidge Farm Milano Cookies',
                'brand' => 'Pepperidge Farm',
                'images' => ['path/to/image3.jpg'],
            ],
            [
                'name' => 'Nestlé Toll House Chocolate Chip Cookies',
                'brand' => 'Nestlé',
                'images' => ['path/to/image4.jpg'],
            ],
            [
                'name' => 'Lays Cookies Original',
                'brand' => 'Lays',
                'images' => ['path/to/image5.jpg'],
            ],
            [
                'name' => 'Oreo Golden Sandwich Cookies',
                'brand' => 'Oreo',
                'images' => ['path/to/image6.jpg'],
            ],
            [
                'name' => 'Chips Ahoy! Chewy Chocolate Chip Cookies',
                'brand' => 'Chips Ahoy!',
                'images' => ['path/to/image7.jpg'],
            ],
            [
                'name' => 'Pepperidge Farm Chessmen Cookies',
                'brand' => 'Pepperidge Farm',
                'images' => ['path/to/image8.jpg'],
            ],
            [
                'name' => 'Nestlé Butterfinger Peanut Butter Cups Cookies',
                'brand' => 'Nestlé',
                'images' => ['path/to/image9.jpg'],
            ],
            [
                'name' => 'Oreo Thins Crisps',
                'brand' => 'Oreo',
                'images' => ['path/to/image10.jpg'],
            ],
            [
                'name' => 'Chips Ahoy! Red Velvet Cookies',
                'brand' => 'Chips Ahoy!',
                'images' => ['path/to/image11.jpg'],
            ],
            [
                'name' => 'Pepperidge Farm Soft Baked Cookies',
                'brand' => 'Pepperidge Farm',
                'images' => ['path/to/image12.jpg'],
            ],
        ],
    ],

    'Instant Noodles' => [
        'attributes' => [
            'Size' => ['S', 'M', 'L'],
            'Flavor' => ['Chicken', 'Beef', 'Vegetable', 'Seafood', 'Pork'],
            'Packaging' => ['Pack', 'Cup', 'Bag'],
        ],
        'brands' => ['Indomie', 'Maggi', 'Nissin', 'Mama', 'Knorr'],
        'price_range' => [1000, 3000],
        'stock_range' => [10, 100],
        'products' => [
            [
                'name' => 'Indomie Mi Goreng',
                'brand' => 'Indomie',
                'images' => ['path/to/image1.jpg'],
            ],
            [
                'name' => 'Maggi Instant Noodles',
                'brand' => 'Maggi',
                'images' => ['path/to/image2.jpg'],
            ],
            [
                'name' => 'Nissin Cup Noodles',
                'brand' => 'Nissin',
                'images' => ['path/to/image3.jpg'],
            ],
            [
                'name' => 'Mama Instant Noodles',
                'brand' => 'Mama',
                'images' => ['path/to/image4.jpg'],
            ],
            [
                'name' => 'Knorr Chicken Instant Noodles',
                'brand' => 'Knorr',
                'images' => ['path/to/image5.jpg'],
            ],
            [
                'name' => 'Indomie Soto Noodles',
                'brand' => 'Indomie',
                'images' => ['path/to/image6.jpg'],
            ],
            [
                'name' => 'Maggi Hot & Spicy Instant Noodles',
                'brand' => 'Maggi',
                'images' => ['path/to/image7.jpg'],
            ],
            [
                'name' => 'Nissin Ramen Noodles',
                'brand' => 'Nissin',
                'images' => ['path/to/image8.jpg'],
            ],
            [
                'name' => 'Mama Shrimp Flavor Noodles',
                'brand' => 'Mama',
                'images' => ['path/to/image9.jpg'],
            ],
            [
                'name' => 'Knorr Vegetable Instant Noodles',
                'brand' => 'Knorr',
                'images' => ['path/to/image10.jpg'],
            ],
            [
                'name' => 'Indomie Chicken Curry Noodles',
                'brand' => 'Indomie',
                'images' => ['path/to/image11.jpg'],
            ],
            [
                'name' => 'Maggi Instant Noodles Curry',
                'brand' => 'Maggi',
                'images' => ['path/to/image12.jpg'],
            ],
        ],
    ],

    'Bread & Bakery' => [
        'attributes' => [
            'Size' => ['S', 'M', 'L'],
            'Type' => ['Bread', 'Cake', 'Pastry', 'Croissant', 'Biscuit'],
            'Packaging' => ['Pack', 'Box'],
        ],
        'brands' => ['Gardenia', 'McVitie\'s', 'English Bakery', 'Wonder Bread', 'Buttercup'],
        'price_range' => [1000, 5000],
        'stock_range' => [10, 100],
        'products' => [
            [
                'name' => 'Gardenia White Bread',
                'brand' => 'Gardenia',
                'images' => ['path/to/image1.jpg'],
            ],
            [
                'name' => 'McVitie\'s Digestive Biscuits',
                'brand' => 'McVitie\'s',
                'images' => ['path/to/image2.jpg'],
            ],
            [
                'name' => 'English Bakery Croissants',
                'brand' => 'English Bakery',
                'images' => ['path/to/image3.jpg'],
            ],
            [
                'name' => 'Wonder Bread',
                'brand' => 'Wonder Bread',
                'images' => ['path/to/image4.jpg'],
            ],
            [
                'name' => 'Buttercup Chocolate Cake',
                'brand' => 'Buttercup',
                'images' => ['path/to/image5.jpg'],
            ],
            [
                'name' => 'Gardenia Wholemeal Bread',
                'brand' => 'Gardenia',
                'images' => ['path/to/image6.jpg'],
            ],
            [
                'name' => 'McVitie\'s Rich Tea Biscuits',
                'brand' => 'McVitie\'s',
                'images' => ['path/to/image7.jpg'],
            ],
            [
                'name' => 'English Bakery Danish Pastry',
                'brand' => 'English Bakery',
                'images' => ['path/to/image8.jpg'],
            ],
            [
                'name' => 'Wonder Bread Multi-Grain',
                'brand' => 'Wonder Bread',
                'images' => ['path/to/image9.jpg'],
            ],
            [
                'name' => 'Buttercup Vanilla Cake',
                'brand' => 'Buttercup',
                'images' => ['path/to/image10.jpg'],
            ],
            [
                'name' => 'Gardenia Raisin Bread',
                'brand' => 'Gardenia',
                'images' => ['path/to/image11.jpg'],
            ],
            [
                'name' => 'McVitie\'s Chocolate Digestives',
                'brand' => 'McVitie\'s',
                'images' => ['path/to/image12.jpg'],
            ],
        ],
    ],

    // Beverages
    'Soda' => [
        'attributes' => [
            'Size' => ['330ml', '500ml', '1L', '2L'],
            'Flavor' => ['Cola', 'Orange', 'Lemon', 'Grape', 'Root Beer'],
            'Packaging' => ['Can', 'Bottle'],
        ],
        'brands' => ['Coca-Cola', 'Pepsi', 'Sprite', 'Fanta', '7Up'],
        'price_range' => [500, 2000],
        'stock_range' => [10, 100],
        'products' => [
            [
                'name' => 'Coca-Cola Original',
                'brand' => 'Coca-Cola',
                'images' => ['path/to/image1.jpg'],
            ],
            [
                'name' => 'Pepsi Cola',
                'brand' => 'Pepsi',
                'images' => ['path/to/image2.jpg'],
            ],
            [
                'name' => 'Sprite Lemon-Lime Soda',
                'brand' => 'Sprite',
                'images' => ['path/to/image3.jpg'],
            ],
            [
                'name' => 'Fanta Orange Soda',
                'brand' => 'Fanta',
                'images' => ['path/to/image4.jpg'],
            ],
            [
                'name' => '7Up Lemon-Lime Soda',
                'brand' => '7Up',
                'images' => ['path/to/image5.jpg'],
            ],
            [
                'name' => 'Coca-Cola Zero Sugar',
                'brand' => 'Coca-Cola',
                'images' => ['path/to/image6.jpg'],
            ],
            [
                'name' => 'Pepsi Max',
                'brand' => 'Pepsi',
                'images' => ['path/to/image7.jpg'],
            ],
            [
                'name' => 'Sprite Cranberry',
                'brand' => 'Sprite',
                'images' => ['path/to/image8.jpg'],
            ],
            [
                'name' => 'Fanta Grape Soda',
                'brand' => 'Fanta',
                'images' => ['path/to/image9.jpg'],
            ],
            [
                'name' => '7Up Cherry Soda',
                'brand' => '7Up',
                'images' => ['path/to/image10.jpg'],
            ],
            [
                'name' => 'Coca-Cola Cherry',
                'brand' => 'Coca-Cola',
                'images' => ['path/to/image11.jpg'],
            ],
            [
                'name' => 'Pepsi Wild Cherry',
                'brand' => 'Pepsi',
                'images' => ['path/to/image12.jpg'],
            ],
        ],
    ],

    'Juices' => [
        'attributes' => [
            'Size' => ['250ml', '500ml', '1L'],
            'Flavor' => ['Orange', 'Apple', 'Grape', 'Pineapple', 'Mango'],
            'Packaging' => ['Box', 'Bottle'],
        ],
        'brands' => ['Tropicana', 'Minute Maid', 'Del Monte', 'Naked', 'Simply'],
        'price_range' => [800, 3000],
        'stock_range' => [10, 100],
        'products' => [
            [
                'name' => 'Tropicana 100% Orange Juice',
                'brand' => 'Tropicana',
                'images' => ['path/to/image1.jpg'],
            ],
            [
                'name' => 'Minute Maid Apple Juice',
                'brand' => 'Minute Maid',
                'images' => ['path/to/image2.jpg'],
            ],
            [
                'name' => 'Del Monte Grape Juice',
                'brand' => 'Del Monte',
                'images' => ['path/to/image3.jpg'],
            ],
            [
                'name' => 'Naked Mango Juice',
                'brand' => 'Naked',
                'images' => ['path/to/image4.jpg'],
            ],
            [
                'name' => 'Simply Orange Juice',
                'brand' => 'Simply',
                'images' => ['path/to/image5.jpg'],
            ],
            [
                'name' => 'Tropicana Pineapple Juice',
                'brand' => 'Tropicana',
                'images' => ['path/to/image6.jpg'],
            ],
            [
                'name' => 'Minute Maid Grape Juice',
                'brand' => 'Minute Maid',
                'images' => ['path/to/image7.jpg'],
            ],
            [
                'name' => 'Del Monte Apple Juice',
                'brand' => 'Del Monte',
                'images' => ['path/to/image8.jpg'],
            ],
            [
                'name' => 'Naked Pomegranate Juice',
                'brand' => 'Naked',
                'images' => ['path/to/image9.jpg'],
            ],
            [
                'name' => 'Simply Pineapple Juice',
                'brand' => 'Simply',
                'images' => ['path/to/image10.jpg'],
            ],
            [
                'name' => 'Tropicana Mango Juice',
                'brand' => 'Tropicana',
                'images' => ['path/to/image11.jpg'],
            ],
            [
                'name' => 'Minute Maid Orange Juice',
                'brand' => 'Minute Maid',
                'images' => ['path/to/image12.jpg'],
            ],
        ],
    ],

    'Energy Drink' => [
        'attributes' => [
            'Size' => ['250ml', '500ml', '1L'],
            'Flavor' => ['Original', 'Tropical', 'Berry', 'Lime', 'Orange'],
            'Packaging' => ['Can', 'Bottle'],
        ],
        'brands' => ['Red Bull', 'Monster', 'Rockstar', '5-hour Energy', 'Burn'],
        'price_range' => [1500, 5000],
        'stock_range' => [10, 100],
        'products' => [
            [
                'name' => 'Red Bull Energy Drink',
                'brand' => 'Red Bull',
                'images' => ['path/to/image1.jpg'],
            ],
            [
                'name' => 'Monster Energy Original',
                'brand' => 'Monster',
                'images' => ['path/to/image2.jpg'],
            ],
            [
                'name' => 'Rockstar Energy Drink',
                'brand' => 'Rockstar',
                'images' => ['path/to/image3.jpg'],
            ],
            [
                'name' => '5-hour Energy Shot',
                'brand' => '5-hour Energy',
                'images' => ['path/to/image4.jpg'],
            ],
            [
                'name' => 'Burn Energy Drink',
                'brand' => 'Burn',
                'images' => ['path/to/image5.jpg'],
            ],
            [
                'name' => 'Red Bull Sugarfree',
                'brand' => 'Red Bull',
                'images' => ['path/to/image6.jpg'],
            ],
            [
                'name' => 'Monster Energy Zero Ultra',
                'brand' => 'Monster',
                'images' => ['path/to/image7.jpg'],
            ],
            [
                'name' => 'Rockstar Energy Fruit Punch',
                'brand' => 'Rockstar',
                'images' => ['path/to/image8.jpg'],
            ],
            [
                'name' => '5-hour Energy Extra Strength',
                'brand' => '5-hour Energy',
                'images' => ['path/to/image9.jpg'],
            ],
            [
                'name' => 'Burn Tropical Energy Drink',
                'brand' => 'Burn',
                'images' => ['path/to/image10.jpg'],
            ],
            [
                'name' => 'Red Bull Editions Tropical',
                'brand' => 'Red Bull',
                'images' => ['path/to/image11.jpg'],
            ],
            [
                'name' => 'Monster Ultra Violet',
                'brand' => 'Monster',
                'images' => ['path/to/image12.jpg'],
            ],
        ],
    ],

    'Water' => [
        'attributes' => [
            'Size' => ['500ml', '1L', '1.5L', '5L'],
            'Flavor' => ['Plain', 'Lemon', 'Cucumber', 'Mint', 'Berry'],
            'Packaging' => ['Bottle'],
        ],
        'brands' => ['Evian', 'Nestlé Pure Life', 'Aquafina', 'San Pellegrino', 'Smartwater'],
        'price_range' => [500, 2000],
        'stock_range' => [10, 100],
        'products' => [
            [
                'name' => 'Evian Natural Spring Water',
                'brand' => 'Evian',
                'images' => ['path/to/image1.jpg'],
            ],
            [
                'name' => 'Nestlé Pure Life Water',
                'brand' => 'Nestlé Pure Life',
                'images' => ['path/to/image2.jpg'],
            ],
            [
                'name' => 'Aquafina Purified Water',
                'brand' => 'Aquafina',
                'images' => ['path/to/image3.jpg'],
            ],
            [
                'name' => 'San Pellegrino Sparkling Water',
                'brand' => 'San Pellegrino',
                'images' => ['path/to/image4.jpg'],
            ],
            [
                'name' => 'Smartwater Vapor Distilled Water',
                'brand' => 'Smartwater',
                'images' => ['path/to/image5.jpg'],
            ],
            [
                'name' => 'Evian Mineral Water',
                'brand' => 'Evian',
                'images' => ['path/to/image6.jpg'],
            ],
            [
                'name' => 'Nestlé Pure Life Lemon Water',
                'brand' => 'Nestlé Pure Life',
                'images' => ['path/to/image7.jpg'],
            ],
            [
                'name' => 'Aquafina Flavored Water',
                'brand' => 'Aquafina',
                'images' => ['path/to/image8.jpg'],
            ],
            [
                'name' => 'San Pellegrino Sparkling Lemon',
                'brand' => 'San Pellegrino',
                'images' => ['path/to/image9.jpg'],
            ],
            [
                'name' => 'Smartwater Alkaline Water',
                'brand' => 'Smartwater',
                'images' => ['path/to/image10.jpg'],
            ],
            [
                'name' => 'Evian Water with Cucumber',
                'brand' => 'Evian',
                'images' => ['path/to/image11.jpg'],
            ],
            [
                'name' => 'Nestlé Pure Life Berry Water',
                'brand' => 'Nestlé Pure Life',
                'images' => ['path/to/image12.jpg'],
            ],
        ],
    ],

    'Coffee & Tea' => [
        'attributes' => [
            'Size' => ['250ml', '500ml', '1L'],
            'Flavor' => ['Espresso', 'Latte', 'Cappuccino', 'Green Tea', 'Black Tea'],
            'Packaging' => ['Can', 'Bottle', 'Box'],
        ],
        'brands' => ['Starbucks', 'Nescafé', 'Lipton', 'Twinings', 'Peet\'s Coffee'],
        'price_range' => [1000, 4000],
        'stock_range' => [10, 100],
        'products' => [
            [
                'name' => 'Starbucks Espresso',
                'brand' => 'Starbucks',
                'images' => ['path/to/image1.jpg'],
            ],
            [
                'name' => 'Nescafé Classic Coffee',
                'brand' => 'Nescafé',
                'images' => ['path/to/image2.jpg'],
            ],
            [
                'name' => 'Lipton Green Tea',
                'brand' => 'Lipton',
                'images' => ['path/to/image3.jpg'],
            ],
            [
                'name' => 'Twinings Earl Grey Tea',
                'brand' => 'Twinings',
                'images' => ['path/to/image4.jpg'],
            ],
            [
                'name' => 'Peet\'s Coffee Major Dickason\'s Blend',
                'brand' => 'Peet\'s Coffee',
                'images' => ['path/to/image5.jpg'],
            ],
            [
                'name' => 'Starbucks Iced Latte',
                'brand' => 'Starbucks',
                'images' => ['path/to/image6.jpg'],
            ],
            [
                'name' => 'Nescafé Taster\'s Choice',
                'brand' => 'Nescafé',
                'images' => ['path/to/image7.jpg'],
            ],
            [
                'name' => 'Lipton Black Tea',
                'brand' => 'Lipton',
                'images' => ['path/to/image8.jpg'],
            ],
            [
                'name' => 'Twinings Chamomile Tea',
                'brand' => 'Twinings',
                'images' => ['path/to/image9.jpg'],
            ],
            [
                'name' => 'Peet\'s Coffee Espresso Roast',
                'brand' => 'Peet\'s Coffee',
                'images' => ['path/to/image10.jpg'],
            ],
            [
                'name' => 'Starbucks Cold Brew Coffee',
                'brand' => 'Starbucks',
                'images' => ['path/to/image11.jpg'],
            ],
            [
                'name' => 'Nescafé Instant Coffee',
                'brand' => 'Nescafé',
                'images' => ['path/to/image12.jpg'],
            ],
        ],
    ],

    // Health & Beauty
    'Personal Care' => [
        'attributes' => [
            'Size' => ['100ml', '200ml', '500ml'],
        ],
        'brands' => ['Dove', 'Nivea', 'Colgate', 'Old Spice'],
        'price_range' => [2000, 5000],
        'stock_range' => [10, 100],
        'products' => [
            [
                'name' => 'Dove Body Wash',
                'brand' => 'Dove',
                'images' => ['path/to/image1.jpg'],
            ],
            [
                'name' => 'Nivea Men Deodorant',
                'brand' => 'Nivea',
                'images' => ['path/to/image2.jpg'],
            ],
            [
                'name' => 'Colgate Toothpaste',
                'brand' => 'Colgate',
                'images' => ['path/to/image3.jpg'],
            ],
            [
                'name' => 'Old Spice Shampoo',
                'brand' => 'Old Spice',
                'images' => ['path/to/image4.jpg'],
            ],
            [
                'name' => 'Dove Soap Bar',
                'brand' => 'Dove',
                'images' => ['path/to/image5.jpg'],
            ],
            [
                'name' => 'Nivea Soft Cream',
                'brand' => 'Nivea',
                'images' => ['path/to/image6.jpg'],
            ],
            [
                'name' => 'Old Spice After Shave',
                'brand' => 'Old Spice',
                'images' => ['path/to/image7.jpg'],
            ],
            [
                'name' => 'Colgate Sensitive Toothpaste',
                'brand' => 'Colgate',
                'images' => ['path/to/image8.jpg'],
            ],
            [
                'name' => 'Dove Men Care Shampoo',
                'brand' => 'Dove',
                'images' => ['path/to/image9.jpg'],
            ],
            [
                'name' => 'Nivea Lip Balm',
                'brand' => 'Nivea',
                'images' => ['path/to/image10.jpg'],
            ],
            [
                'name' => 'Old Spice Body Wash',
                'brand' => 'Old Spice',
                'images' => ['path/to/image11.jpg'],
            ],
            [
                'name' => 'Colgate Charcoal Toothbrush',
                'brand' => 'Colgate',
                'images' => ['path/to/image12.jpg'],
            ],
        ],
    ],

    'First Aid' => [
        'attributes' => [
            'Size' => ['10ml', '50ml', '100ml'],
        ],
        'brands' => ['Band-Aid', 'Dettol', 'Tiger Balm', 'Johnson & Johnson'],
        'price_range' => [500, 3000],
        'stock_range' => [10, 100],
        'products' => [
            [
                'name' => 'Band-Aid Adhesive Bandages',
                'brand' => 'Band-Aid',
                'images' => ['path/to/image1.jpg'],
            ],
            [
                'name' => 'Dettol Antiseptic Liquid',
                'brand' => 'Dettol',
                'images' => ['path/to/image2.jpg'],
            ],
            [
                'name' => 'Tiger Balm Pain Relief',
                'brand' => 'Tiger Balm',
                'images' => ['path/to/image3.jpg'],
            ],
            [
                'name' => 'Johnson & Johnson Band-Aid',
                'brand' => 'Johnson & Johnson',
                'images' => ['path/to/image4.jpg'],
            ],
            [
                'name' => 'Bactine First Aid Antiseptic Spray',
                'brand' => 'Bactine',
                'images' => ['path/to/image5.jpg'],
            ],
            [
                'name' => 'Neosporin Antibiotic Ointment',
                'brand' => 'Neosporin',
                'images' => ['path/to/image6.jpg'],
            ],
            [
                'name' => 'Curad Antiseptic Spray',
                'brand' => 'Curad',
                'images' => ['path/to/image7.jpg'],
            ],
            [
                'name' => 'Band-Aid Hydrocolloid Dressing',
                'brand' => 'Band-Aid',
                'images' => ['path/to/image8.jpg'],
            ],
            [
                'name' => 'Dettol Antiseptic Wipes',
                'brand' => 'Dettol',
                'images' => ['path/to/image9.jpg'],
            ],
            [
                'name' => 'Tiger Balm Red Ointment',
                'brand' => 'Tiger Balm',
                'images' => ['path/to/image10.jpg'],
            ],
            [
                'name' => 'Johnson & Johnson Antiseptic Spray',
                'brand' => 'Johnson & Johnson',
                'images' => ['path/to/image11.jpg'],
            ],
            [
                'name' => 'Bandaid Flex fabric Bandages',
                'brand' => 'Bandaid',
                'images' => ['path/to/image12.jpg'],
            ],
        ],
    ],

    'Vitamins & Supplements' => [
        'attributes' => [
            'Size' => ['30 Capsules', '60 Capsules', '120 Capsules'],
        ],
        'brands' => ['Nature Made', 'Centrum', 'Garden of Life', 'Optimum Nutrition'],
        'price_range' => [500, 5000],
        'stock_range' => [10, 100],
        'products' => [
            [
                'name' => 'Nature Made Vitamin D3',
                'brand' => 'Nature Made',
                'images' => ['path/to/image1.jpg'],
            ],
            [
                'name' => 'Centrum Adult Multivitamins',
                'brand' => 'Centrum',
                'images' => ['path/to/image2.jpg'],
            ],
            [
                'name' => 'Garden of Life Probiotic',
                'brand' => 'Garden of Life',
                'images' => ['path/to/image3.jpg'],
            ],
            [
                'name' => 'Optimum Nutrition Omega-3 Fish Oil',
                'brand' => 'Optimum Nutrition',
                'images' => ['path/to/image4.jpg'],
            ],
            [
                'name' => 'Nature Made Iron Tablets',
                'brand' => 'Nature Made',
                'images' => ['path/to/image5.jpg'],
            ],
            [
                'name' => 'Centrum Kids Multivitamins',
                'brand' => 'Centrum',
                'images' => ['path/to/image6.jpg'],
            ],
            [
                'name' => 'Garden of Life Vitamin C',
                'brand' => 'Garden of Life',
                'images' => ['path/to/image7.jpg'],
            ],
            [
                'name' => 'Optimum Nutrition Whey Protein',
                'brand' => 'Optimum Nutrition',
                'images' => ['path/to/image8.jpg'],
            ],
            [
                'name' => 'Nature Made Calcium',
                'brand' => 'Nature Made',
                'images' => ['path/to/image9.jpg'],
            ],
            [
                'name' => 'Centrum Silver Multivitamins',
                'brand' => 'Centrum',
                'images' => ['path/to/image10.jpg'],
            ],
            [
                'name' => 'Garden of Life Vitamin B12',
                'brand' => 'Garden of Life',
                'images' => ['path/to/image11.jpg'],
            ],
            [
                'name' => 'Optimum Nutrition Creatine',
                'brand' => 'Optimum Nutrition',
                'images' => ['path/to/image12.jpg'],
            ],
        ],
    ],

    'Skin Care' => [
        'attributes' => [
            'Size' => ['50ml', '100ml', '200ml'],
        ],
        'brands' => ['Olay', 'Neutrogena', 'Aveeno', 'The Ordinary'],
        'price_range' => [1000, 6000],
        'stock_range' => [10, 100],
        'products' => [
            [
                'name' => 'Olay Regenerist Moisturizer',
                'brand' => 'Olay',
                'images' => ['path/to/image1.jpg'],
            ],
            [
                'name' => 'Neutrogena Hydro Boost Water Gel',
                'brand' => 'Neutrogena',
                'images' => ['path/to/image2.jpg'],
            ],
            [
                'name' => 'Aveeno Daily Moisturizing Lotion',
                'brand' => 'Aveeno',
                'images' => ['path/to/image3.jpg'],
            ],
            [
                'name' => 'The Ordinary Niacinamide Serum',
                'brand' => 'The Ordinary',
                'images' => ['path/to/image4.jpg'],
            ],
            [
                'name' => 'Olay Complete All Day Moisturizer SPF 15',
                'brand' => 'Olay',
                'images' => ['path/to/image5.jpg'],
            ],
            [
                'name' => 'Neutrogena Ultra Sheer Dry-Touch Sunscreen SPF 100',
                'brand' => 'Neutrogena',
                'images' => ['path/to/image6.jpg'],
            ],
            [
                'name' => 'Aveeno Calm + Restore Nourishing Oat Cleanser',
                'brand' => 'Aveeno',
                'images' => ['path/to/image7.jpg'],
            ],
            [
                'name' => 'The Ordinary Hyaluronic Acid',
                'brand' => 'The Ordinary',
                'images' => ['path/to/image8.jpg'],
            ],
            [
                'name' => 'Olay Retinol 24 Night Moisturizer',
                'brand' => 'Olay',
                'images' => ['path/to/image9.jpg'],
            ],
            [
                'name' => 'Neutrogena Fresh Foaming Cleanser',
                'brand' => 'Neutrogena',
                'images' => ['path/to/image10.jpg'],
            ],
            [
                'name' => 'Aveeno Positively Radiant Daily Facial Moisturizer',
                'brand' => 'Aveeno',
                'images' => ['path/to/image11.jpg'],
            ],
            [
                'name' => 'The Ordinary AHA 30% + BHA 2% Peeling Solution',
                'brand' => 'The Ordinary',
                'images' => ['path/to/image12.jpg'],
            ],
        ],
    ],

    // Household Essentials
    'Paper Products' => [
        'attributes' => [
            'Type' => ['Toilet Paper', 'Paper Towels', 'Facial Tissues'],
            'Ply' => ['1-ply', '2-ply', '3-ply'],
            'Packaging' => ['Pack of 6', 'Pack of 12', 'Pack of 24'],
        ],
        'brands' => ['Charmin', 'Scott', 'Bounty', 'Kleenex', 'Angel Soft'],
        'price_range' => [500, 3000],
        'stock_range' => [10, 100],
        'products' => [
            [
                'name' => 'Charmin Ultra Soft Toilet Paper',
                'brand' => 'Charmin',
                'images' => ['path/to/image1.jpg'],
            ],
            [
                'name' => 'Scott 1000 Toilet Paper',
                'brand' => 'Scott',
                'images' => ['path/to/image2.jpg'],
            ],
            [
                'name' => 'Bounty Paper Towels',
                'brand' => 'Bounty',
                'images' => ['path/to/image3.jpg'],
            ],
            [
                'name' => 'Kleenex Facial Tissues',
                'brand' => 'Kleenex',
                'images' => ['path/to/image4.jpg'],
            ],
            [
                'name' => 'Angel Soft Toilet Paper',
                'brand' => 'Angel Soft',
                'images' => ['path/to/image5.jpg'],
            ],
            [
                'name' => 'Charmin Ultra Strong Toilet Paper',
                'brand' => 'Charmin',
                'images' => ['path/to/image6.jpg'],
            ],
            [
                'name' => 'Scott Extra Soft Toilet Paper',
                'brand' => 'Scott',
                'images' => ['path/to/image7.jpg'],
            ],
            [
                'name' => 'Bounty Select-A-Size Paper Towels',
                'brand' => 'Bounty',
                'images' => ['path/to/image8.jpg'],
            ],
            [
                'name' => 'Kleenex Ultra Soft Facial Tissues',
                'brand' => 'Kleenex',
                'images' => ['path/to/image9.jpg'],
            ],
            [
                'name' => 'Angel Soft 2-Ply Toilet Paper',
                'brand' => 'Angel Soft',
                'images' => ['path/to/image10.jpg'],
            ],
            [
                'name' => 'Charmin Basic Toilet Paper',
                'brand' => 'Charmin',
                'images' => ['path/to/image11.jpg'],
            ],
            [
                'name' => 'Bounty Quick-Size Paper Towels',
                'brand' => 'Bounty',
                'images' => ['path/to/image12.jpg'],
            ],
        ],
    ],

    'Laundry Detergent' => [
        'attributes' => [
            'Type' => ['Liquid', 'Powder', 'Pods'],
            'Scent' => ['Fresh', 'Lavender', 'Unscented', 'Citrus'],
            'Packaging' => ['Bottle', 'Box', 'Pouch'],
        ],
        'brands' => ['Tide', 'Persil', 'Arm & Hammer', 'Gain', 'Seventh Generation'],
        'price_range' => [500, 5000],
        'stock_range' => [10, 100],
        'products' => [
            [
                'name' => 'Tide Original Liquid Laundry Detergent',
                'brand' => 'Tide',
                'images' => ['path/to/image1.jpg'],
            ],
            [
                'name' => 'Persil ProClean Liquid Detergent',
                'brand' => 'Persil',
                'images' => ['path/to/image2.jpg'],
            ],
            [
                'name' => 'Arm & Hammer Clean Burst Laundry Detergent',
                'brand' => 'Arm & Hammer',
                'images' => ['path/to/image3.jpg'],
            ],
            [
                'name' => 'Gain Original Liquid Laundry Detergent',
                'brand' => 'Gain',
                'images' => ['path/to/image4.jpg'],
            ],
            [
                'name' => 'Seventh Generation Free & Clear Laundry Detergent',
                'brand' => 'Seventh Generation',
                'images' => ['path/to/image5.jpg'],
            ],
            [
                'name' => 'Tide Pods Laundry Detergent',
                'brand' => 'Tide',
                'images' => ['path/to/image6.jpg'],
            ],
            [
                'name' => 'Persil Power-Pearls Detergent',
                'brand' => 'Persil',
                'images' => ['path/to/image7.jpg'],
            ],
            [
                'name' => 'Arm & Hammer Sensitive Skin Liquid Detergent',
                'brand' => 'Arm & Hammer',
                'images' => ['path/to/image8.jpg'],
            ],
            [
                'name' => 'Gain Flings Laundry Pods',
                'brand' => 'Gain',
                'images' => ['path/to/image9.jpg'],
            ],
            [
                'name' => 'Seventh Generation Lavender Laundry Detergent',
                'brand' => 'Seventh Generation',
                'images' => ['path/to/image10.jpg'],
            ],
            [
                'name' => 'Tide Plus Febreze Sport Liquid Detergent',
                'brand' => 'Tide',
                'images' => ['path/to/image11.jpg'],
            ],
            [
                'name' => 'Persil Liquid Detergent with Oxi',
                'brand' => 'Persil',
                'images' => ['path/to/image12.jpg'],
            ],
        ],
    ],

    'Kitchen Essentials' => [
        'attributes' => [
            'Type' => ['Cookware', 'Utensils', 'Cutlery', 'Storage Containers'],
            'Material' => ['Stainless Steel', 'Non-stick', 'Wood', 'Glass'],
            'Packaging' => ['Single', 'Set'],
        ],
        'brands' => ['T-fal', 'Cuisinart', 'OXO', 'Pyrex', 'Lodge'],
        'price_range' => [500, 5000],
        'stock_range' => [10, 100],
        'products' => [
            [
                'name' => 'T-fal Nonstick Frying Pan',
                'brand' => 'T-fal',
                'images' => ['path/to/image1.jpg'],
            ],
            [
                'name' => 'Cuisinart 12-Piece Cookware Set',
                'brand' => 'Cuisinart',
                'images' => ['path/to/image2.jpg'],
            ],
            [
                'name' => 'OXO Good Grips Kitchen Utensil Set',
                'brand' => 'OXO',
                'images' => ['path/to/image3.jpg'],
            ],
            [
                'name' => 'Pyrex Glass Storage Containers',
                'brand' => 'Pyrex',
                'images' => ['path/to/image4.jpg'],
            ],
            [
                'name' => 'Lodge Cast Iron Skillet',
                'brand' => 'Lodge',
                'images' => ['path/to/image5.jpg'],
            ],
            [
                'name' => 'T-fal Stainless Steel Cookware Set',
                'brand' => 'T-fal',
                'images' => ['path/to/image6.jpg'],
            ],
            [
                'name' => 'Cuisinart Knife Set',
                'brand' => 'Cuisinart',
                'images' => ['path/to/image7.jpg'],
            ],
            [
                'name' => 'OXO Salad Spinner',
                'brand' => 'OXO',
                'images' => ['path/to/image8.jpg'],
            ],
            [
                'name' => 'Pyrex Mixing Bowl Set',
                'brand' => 'Pyrex',
                'images' => ['path/to/image9.jpg'],
            ],
            [
                'name' => 'Lodge Dutch Oven',
                'brand' => 'Lodge',
                'images' => ['path/to/image10.jpg'],
            ],
            [
                'name' => 'T-fal Cookware Set with Lids',
                'brand' => 'T-fal',
                'images' => ['path/to/image11.jpg'],
            ],
            [
                'name' => 'Cuisinart Electric Knife',
                'brand' => 'Cuisinart',
                'images' => ['path/to/image12.jpg'],
            ],
        ],
    ],

    'Cleaning Supplies' => [
        'attributes' => [
            'Type' => ['All-purpose Cleaner', 'Glass Cleaner', 'Disinfectant', 'Floor Cleaner'],
            'Packaging' => ['Bottle', 'Spray', 'Wipes', 'Refill'],
            'Scent' => ['Lemon', 'Lavender', 'Unscented', 'Fresh', 'Citrus'],
        ],
        'brands' => ['Clorox', 'Lysol', 'Mr. Clean', 'Seventh Generation', 'Method'],
        'price_range' => [500, 3000],
        'stock_range' => [10, 100],
        'products' => [
            [
                'name' => 'Clorox All-Purpose Cleaner',
                'brand' => 'Clorox',
                'images' => ['path/to/image1.jpg'],
            ],
            [
                'name' => 'Lysol Disinfectant Spray',
                'brand' => 'Lysol',
                'images' => ['path/to/image2.jpg'],
            ],
            [
                'name' => 'Mr. Clean Multi-Surface Cleaner',
                'brand' => 'Mr. Clean',
                'images' => ['path/to/image3.jpg'],
            ],
            [
                'name' => 'Seventh Generation Disinfecting Wipes',
                'brand' => 'Seventh Generation',
                'images' => ['path/to/image4.jpg'],
            ],
            [
                'name' => 'Method Glass Cleaner',
                'brand' => 'Method',
                'images' => ['path/to/image5.jpg'],
            ],
            [
                'name' => 'Clorox Floor Cleaner',
                'brand' => 'Clorox',
                'images' => ['path/to/image6.jpg'],
            ],
            [
                'name' => 'Lysol Kitchen Cleaner',
                'brand' => 'Lysol',
                'images' => ['path/to/image7.jpg'],
            ],
            [
                'name' => 'Mr. Clean Magic Eraser',
                'brand' => 'Mr. Clean',
                'images' => ['path/to/image8.jpg'],
            ],
            [
                'name' => 'Seventh Generation All-Purpose Cleaner',
                'brand' => 'Seventh Generation',
                'images' => ['path/to/image9.jpg'],
            ],
            [
                'name' => 'Method Toilet Bowl Cleaner',
                'brand' => 'Method',
                'images' => ['path/to/image10.jpg'],
            ],
            [
                'name' => 'Clorox Bleach',
                'brand' => 'Clorox',
                'images' => ['path/to/image11.jpg'],
            ],
            [
                'name' => 'Lysol Bathroom Cleaner',
                'brand' => 'Lysol',
                'images' => ['path/to/image12.jpg'],
            ],
        ],
    ],

    // Frozen Foods
    'Ice Cream' => [
        'attributes' => [
            'Size' => ['500ml', '1L', '2L'],
            'Flavor' => ['Vanilla', 'Chocolate', 'Strawberry', 'Mint', 'Coffee', 'Cookies & Cream'],
            'Packaging' => ['Tub', 'Cone', 'Bar'],
        ],
        'brands' => ['Haagen-Dazs', 'Ben & Jerry\'s', 'Magnum', 'Breyers', 'Nestlé'],
        'price_range' => [2000, 6000],
        'stock_range' => [10, 100],
        'products' => [
            [
                'name' => 'Haagen-Dazs Vanilla Bean',
                'brand' => 'Haagen-Dazs',
                'images' => ['path/to/image1.jpg'],
            ],
            [
                'name' => 'Ben & Jerry\'s Chocolate Fudge Brownie',
                'brand' => 'Ben & Jerry\'s',
                'images' => ['path/to/image2.jpg'],
            ],
            [
                'name' => 'Magnum Double Chocolate',
                'brand' => 'Magnum',
                'images' => ['path/to/image3.jpg'],
            ],
            [
                'name' => 'Breyers Vanilla',
                'brand' => 'Breyers',
                'images' => ['path/to/image4.jpg'],
            ],
            [
                'name' => 'Nestlé Drumstick Cone',
                'brand' => 'Nestlé',
                'images' => ['path/to/image5.jpg'],
            ],
            [
                'name' => 'Haagen-Dazs Coffee',
                'brand' => 'Haagen-Dazs',
                'images' => ['path/to/image6.jpg'],
            ],
            [
                'name' => 'Ben & Jerry\'s Cookies Dough',
                'brand' => 'Ben & Jerry\'s',
                'images' => ['path/to/image7.jpg'],
            ],
            [
                'name' => 'Magnum Almond',
                'brand' => 'Magnum',
                'images' => ['path/to/image8.jpg'],
            ],
            [
                'name' => 'Breyers Chocolate',
                'brand' => 'Breyers',
                'images' => ['path/to/image9.jpg'],
            ],
            [
                'name' => 'Nestlé Crunch Bar',
                'brand' => 'Nestlé',
                'images' => ['path/to/image10.jpg'],
            ],
            [
                'name' => 'Haagen-Dazs Strawberry',
                'brand' => 'Haagen-Dazs',
                'images' => ['path/to/image11.jpg'],
            ],
            [
                'name' => 'Ben & Jerry\'s The Tonight Dough',
                'brand' => 'Ben & Jerry\'s',
                'images' => ['path/to/image12.jpg'],
            ],
        ],
    ],

    'Frozen Meals' => [
        'attributes' => [
            'Size' => ['250g', '500g', '1kg'],
            'Cuisine' => ['Italian', 'Mexican', 'Asian', 'Indian', 'American'],
            'Packaging' => ['Tray', 'Bag', 'Box'],
        ],
        'brands' => ['Lean Cuisine', 'Marie Callender\'s', 'Stouffer\'s', 'Banquet', 'Healthy Choice'],
        'price_range' => [1000, 5000],
        'stock_range' => [10, 100],
        'products' => [
            [
                'name' => 'Lean Cuisine Chicken Alfredo',
                'brand' => 'Lean Cuisine',
                'images' => ['path/to/image1.jpg'],
            ],
            [
                'name' => 'Marie Callender\'s Beef Pot Roast',
                'brand' => 'Marie Callender\'s',
                'images' => ['path/to/image2.jpg'],
            ],
            [
                'name' => 'Stouffer\'s Lasagna with Meat & Sauce',
                'brand' => 'Stouffer\'s',
                'images' => ['path/to/image3.jpg'],
            ],
            [
                'name' => 'Banquet Chicken Fried Chicken',
                'brand' => 'Banquet',
                'images' => ['path/to/image4.jpg'],
            ],
            [
                'name' => 'Healthy Choice Grilled Chicken',
                'brand' => 'Healthy Choice',
                'images' => ['path/to/image5.jpg'],
            ],
            [
                'name' => 'Lean Cuisine Spaghetti with Meatballs',
                'brand' => 'Lean Cuisine',
                'images' => ['path/to/image6.jpg'],
            ],
            [
                'name' => 'Marie Callender\'s Chicken Pot Pie',
                'brand' => 'Marie Callender\'s',
                'images' => ['path/to/image7.jpg'],
            ],
            [
                'name' => 'Stouffer\'s Mac & Cheese',
                'brand' => 'Stouffer\'s',
                'images' => ['path/to/image8.jpg'],
            ],
            [
                'name' => 'Banquet Salisbury Steak',
                'brand' => 'Banquet',
                'images' => ['path/to/image9.jpg'],
            ],
            [
                'name' => 'Healthy Choice Frozen Pizza',
                'brand' => 'Healthy Choice',
                'images' => ['path/to/image10.jpg'],
            ],
            [
                'name' => 'Lean Cuisine Lemon Herb Chicken',
                'brand' => 'Lean Cuisine',
                'images' => ['path/to/image11.jpg'],
            ],
            [
                'name' => 'Marie Callender\'s Beef Enchiladas',
                'brand' => 'Marie Callender\'s',
                'images' => ['path/to/image12.jpg'],
            ],
        ],
    ],

    'Frozen Vegetables' => [
        'attributes' => [
            'Size' => ['500g', '1kg', '2kg'],
            'Type' => ['Broccoli', 'Peas', 'Carrots', 'Spinach', 'Corn'],
            'Packaging' => ['Bag', 'Box'],
        ],
        'brands' => ['Birds Eye', 'Green Giant', 'Healthy Choice', 'Organic Valley', 'Del Monte'],
        'price_range' => [500, 3000],
        'stock_range' => [10, 100],
        'products' => [
            [
                'name' => 'Birds Eye Broccoli Florets',
                'brand' => 'Birds Eye',
                'images' => ['path/to/image1.jpg'],
            ],
            [
                'name' => 'Green Giant Sweet Peas',
                'brand' => 'Green Giant',
                'images' => ['path/to/image2.jpg'],
            ],
            [
                'name' => 'Healthy Choice Carrots',
                'brand' => 'Healthy Choice',
                'images' => ['path/to/image3.jpg'],
            ],
            [
                'name' => 'Organic Valley Spinach',
                'brand' => 'Organic Valley',
                'images' => ['path/to/image4.jpg'],
            ],
            [
                'name' => 'Del Monte Sweet Corn',
                'brand' => 'Del Monte',
                'images' => ['path/to/image5.jpg'],
            ],
            [
                'name' => 'Birds Eye Mixed Vegetables',
                'brand' => 'Birds Eye',
                'images' => ['path/to/image6.jpg'],
            ],
            [
                'name' => 'Green Giant Broccoli & Cauliflower',
                'brand' => 'Green Giant',
                'images' => ['path/to/image7.jpg'],
            ],
            [
                'name' => 'Healthy Choice Spinach',
                'brand' => 'Healthy Choice',
                'images' => ['path/to/image8.jpg'],
            ],
            [
                'name' => 'Organic Valley Kale',
                'brand' => 'Organic Valley',
                'images' => ['path/to/image9.jpg'],
            ],
            [
                'name' => 'Del Monte Green Beans',
                'brand' => 'Del Monte',
                'images' => ['path/to/image10.jpg'],
            ],
            [
                'name' => 'Birds Eye Peas & Carrots',
                'brand' => 'Birds Eye',
                'images' => ['path/to/image11.jpg'],
            ],
            [
                'name' => 'Green Giant Brussel Sprouts',
                'brand' => 'Green Giant',
                'images' => ['path/to/image12.jpg'],
            ],
        ],
    ],

    // Electronics & Accessories
    'Cables' => [
        'attributes' => [
            'Type' => ['USB-C', 'Lightning', 'Micro USB', 'HDMI', 'DisplayPort'],
            'Length' => ['1m', '2m', '3m', '5m'],
            'Purpose' => ['Charging', 'Data Transfer', 'Audio/Video'],
        ],
        'brands' => ['Anker', 'Belkin', 'UGREEN', 'Aukey', 'AmazonBasics'],
        'price_range' => [500, 3000],
        'stock_range' => [10, 100],
        'products' => [
            [
                'name' => 'Anker PowerLine+ USB-C to USB-C Cable',
                'brand' => 'Anker',
                'images' => ['path/to/image1.jpg'],
            ],
            [
                'name' => 'Belkin BoostCharge Lightning Cable',
                'brand' => 'Belkin',
                'images' => ['path/to/image2.jpg'],
            ],
            [
                'name' => 'UGREEN USB-C to HDMI Cable',
                'brand' => 'UGREEN',
                'images' => ['path/to/image3.jpg'],
            ],
            [
                'name' => 'Aukey Micro USB Charging Cable',
                'brand' => 'Aukey',
                'images' => ['path/to/image4.jpg'],
            ],
            [
                'name' => 'AmazonBasics HDMI Cable',
                'brand' => 'AmazonBasics',
                'images' => ['path/to/image5.jpg'],
            ],
            [
                'name' => 'Anker PowerLine USB-C to Lightning Cable',
                'brand' => 'Anker',
                'images' => ['path/to/image6.jpg'],
            ],
            [
                'name' => 'Belkin USB-C to Lightning Cable',
                'brand' => 'Belkin',
                'images' => ['path/to/image7.jpg'],
            ],
            [
                'name' => 'UGREEN USB-C to Micro USB Cable',
                'brand' => 'UGREEN',
                'images' => ['path/to/image8.jpg'],
            ],
            [
                'name' => 'Aukey 3-in-1 Charging Cable',
                'brand' => 'Aukey',
                'images' => ['path/to/image9.jpg'],
            ],
            [
                'name' => 'AmazonBasics USB-C to USB-C Cable',
                'brand' => 'AmazonBasics',
                'images' => ['path/to/image10.jpg'],
            ],
            [
                'name' => 'Anker PowerLine Micro USB Cable',
                'brand' => 'Anker',
                'images' => ['path/to/image11.jpg'],
            ],
            [
                'name' => 'Belkin USB-C to DisplayPort Cable',
                'brand' => 'Belkin',
                'images' => ['path/to/image12.jpg'],
            ],
        ],
    ],

    'Chargers' => [
        'attributes' => [
            'Type' => ['Wall Charger', 'Car Charger', 'Wireless Charger', 'Power Bank'],
            'Compatibility' => ['USB-C', 'Lightning', 'Micro USB'],
            'Power' => ['5W', '10W', '15W', '20W'],
        ],
        'brands' => ['Anker', 'Samsung', 'Belkin', 'Apple', 'RAVPower'],
        'price_range' => [1000, 5000],
        'stock_range' => [10, 100],
        'products' => [
            [
                'name' => 'Anker PowerPort 5 USB Charger',
                'brand' => 'Anker',
                'images' => ['path/to/image1.jpg'],
            ],
            [
                'name' => 'Samsung 15W Wireless Charger',
                'brand' => 'Samsung',
                'images' => ['path/to/image2.jpg'],
            ],
            [
                'name' => 'Belkin 20W USB-C Wall Charger',
                'brand' => 'Belkin',
                'images' => ['path/to/image3.jpg'],
            ],
            [
                'name' => 'Apple 18W USB-C Power Adapter',
                'brand' => 'Apple',
                'images' => ['path/to/image4.jpg'],
            ],
            [
                'name' => 'RAVPower 10W Wireless Charger',
                'brand' => 'RAVPower',
                'images' => ['path/to/image5.jpg'],
            ],
            [
                'name' => 'Anker PowerCore 10000 Power Bank',
                'brand' => 'Anker',
                'images' => ['path/to/image6.jpg'],
            ],
            [
                'name' => 'Samsung 25W USB-C Fast Charger',
                'brand' => 'Samsung',
                'images' => ['path/to/image7.jpg'],
            ],
            [
                'name' => 'Belkin BoostCharge Wireless Charger',
                'brand' => 'Belkin',
                'images' => ['path/to/image8.jpg'],
            ],
            [
                'name' => 'Apple MagSafe Charger',
                'brand' => 'Apple',
                'images' => ['path/to/image9.jpg'],
            ],
            [
                'name' => 'RAVPower 30W USB-C Charger',
                'brand' => 'RAVPower',
                'images' => ['path/to/image10.jpg'],
            ],
            [
                'name' => 'Anker PowerPort 6 USB Charger',
                'brand' => 'Anker',
                'images' => ['path/to/image11.jpg'],
            ],
            [
                'name' => 'Samsung 9W Wireless Charger Pad',
                'brand' => 'Samsung',
                'images' => ['path/to/image12.jpg'],
            ],
        ],
    ],

    'Batteries' => [
        'attributes' => [
            'Size' => ['AA', 'AAA', 'C', 'D', '9V'],
            'Type' => ['Alkaline', 'Lithium', 'Rechargeable', 'NiMH'],
            'Packaging' => ['Single', 'Pack of 2', 'Pack of 4', 'Pack of 8'],
        ],
        'brands' => ['Duracell', 'Energizer', 'Panasonic', 'Sony', 'Rayovac'],
        'price_range' => [500, 2000],
        'stock_range' => [10, 100],
        'products' => [
            [
                'name' => 'Duracell AA Alkaline Battery',
                'brand' => 'Duracell',
                'images' => ['path/to/image1.jpg'],
            ],
            [
                'name' => 'Energizer AAA Lithium Battery',
                'brand' => 'Energizer',
                'images' => ['path/to/image2.jpg'],
            ],
            [
                'name' => 'Panasonic D Alkaline Battery',
                'brand' => 'Panasonic',
                'images' => ['path/to/image3.jpg'],
            ],
            [
                'name' => 'Sony 9V Rechargeable Battery',
                'brand' => 'Sony',
                'images' => ['path/to/image4.jpg'],
            ],
            [
                'name' => 'Rayovac AA Rechargeable Battery',
                'brand' => 'Rayovac',
                'images' => ['path/to/image5.jpg'],
            ],
            [
                'name' => 'Duracell AAA Alkaline Battery',
                'brand' => 'Duracell',
                'images' => ['path/to/image6.jpg'],
            ],
            [
                'name' => 'Energizer 9V Lithium Battery',
                'brand' => 'Energizer',
                'images' => ['path/to/image7.jpg'],
            ],
            [
                'name' => 'Panasonic AA NiMH Battery',
                'brand' => 'Panasonic',
                'images' => ['path/to/image8.jpg'],
            ],
            [
                'name' => 'Sony AAA Lithium Battery',
                'brand' => 'Sony',
                'images' => ['path/to/image9.jpg'],
            ],
            [
                'name' => 'Rayovac D Alkaline Battery',
                'brand' => 'Rayovac',
                'images' => ['path/to/image10.jpg'],
            ],
            [
                'name' => 'Duracell AA Rechargeable Battery',
                'brand' => 'Duracell',
                'images' => ['path/to/image11.jpg'],
            ],
            [
                'name' => 'Energizer AA Alkaline Battery',
                'brand' => 'Energizer',
                'images' => ['path/to/image12.jpg'],
            ],
        ],
    ],
]);
