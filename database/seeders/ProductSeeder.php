<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		$products = [
			// Ring (3)
			[
				'name' => 'Luna Annulus',
				'description' => 'Luna Annulus is meticulously crafted from the finest 14-karat solid white gold, providing a sleek and modern foundation for the celestial design. It is a celestial marvel that graces the hand with ethereal elegance. Luna Annulus captivates with its celestial inspiration, blending luxurious materials to create a ring that transcends traditional beauty.',
				'price' => 11,700,
			],
			[
				'name' => 'Terra Annulus',
				'description' => 'A testament to the union of earths treasures and masterful craftsmanship. It is a celebration of the earths beauty and the pinnacle of refined elegance. Whether worn as a symbol of love, a connection to nature, or as a statement of individual style, Terra Annulus is meticulously finished to perfection, with every detail attended to with the utmost care.',
				'price' => 14,600,
			],
			[
				'name' => 'Caelum Annulus',
				'description' => 'More than just a ring; its a celestial adornment that transcends the ordinary, symbolizing the eternal beauty of the night sky. The sapphire is securely cradled within a meticulously crafted square setting, showcasing the jewelers commitment to precision and detail.',
				'price' => 15,000,
			],
			[
				'name' => 'Sol Annulus',
				'description' => 'Sol Annulus is a luminous masterpiece that celebrates the majesty of the sun. This high-end jewelry piece is an 18kt Solid Gold Ring adorned with an Intricate Sun Symbol Face. Sol Annulus captures the essence of celestial radiance, creating a luxurious and symbolic accessory that seamlessly fuses opulence with celestial inspiration.',
				'price' => 13,500,
			],
			[
				'name' => 'Noctis Annulus',
				'description' => 'Noctis Annulus, a celestial marvel that brings together the beauty of night with the sophistication of high-end jewelry. The foundation of Noctis Annulus is crafted from the finest 14-karat solid white gold, providing a sleek and modern backdrop for the captivating gemstones. The white gold complements the amethyst hues, creating a harmonious and sophisticated design. Noctis Annulus is more than a ring; its a celestial expression of refined taste and a connection to the cosmic wonders above.',
				'price' => 12,500,
			],

			// Necklace (12)
			[
				'name' => 'Astra Monile',
				'description' => 'A necklace with a beautifully cut Opal that takes center stage in a unique star-shaped setting, reflecting the celestial beauty it draws inspiration from. The opals dynamic iridescence evokes a sense of mystery and elegance, making each necklace a one-of-a-kind masterpiece.',
				'price' => 24,000,
			],
			[
				'name' => 'Caelum  Armilla',
				'description' => 'Caelum Armilla is more than just a bracelet; its a celestial adornment that elevates the wearers style with grace and luxury. Whether worn as a standalone statement piece or layered with other fine jewelry, this 18 carat Solid Gold Dual Chain Bracelet is a symbol of refined taste, sophistication, and a timeless connection to the heavens.',
				'price' => 10,000,
			],
		];

		foreach ($products as $product)
			Product::create($product);
    }
}
