<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
{
    public function run(): void
    {
        // Create categories
        $electronics = Category::create([
            'name' => 'Electronics',
            'description' => 'Electronic devices and accessories'
        ]);

        $clothing = Category::create([
            'name' => 'Clothing',
            'description' => 'Apparel and fashion items'
        ]);

        $books = Category::create([
            'name' => 'Books',
            'description' => 'Books and educational materials'
        ]);

        // Create products
        Product::create([
            'name' => 'Smartphone',
            'description' => 'Latest smartphone model',
            'price' => 699.99,
            'quantity' => 50,
            'category_id' => $electronics->id,
            'sku' => 'ELEC-SMART-001'
        ]);

        Product::create([
            'name' => 'Laptop',
            'description' => 'High-performance laptop',
            'price' => 1299.99,
            'quantity' => 25,
            'category_id' => $electronics->id,
            'sku' => 'ELEC-LAP-002'
        ]);

        Product::create([
            'name' => 'T-Shirt',
            'description' => 'Cotton t-shirt',
            'price' => 19.99,
            'quantity' => 100,
            'category_id' => $clothing->id,
            'sku' => 'CLOTH-TS-003'
        ]);

        Product::create([
            'name' => 'Programming Book',
            'description' => 'Learn programming basics',
            'price' => 39.99,
            'quantity' => 75,
            'category_id' => $books->id,
            'sku' => 'BOOK-PROG-004'
        ]);
    }
}