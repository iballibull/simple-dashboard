<?php

namespace Database\Seeders;

use App\Models\SaleDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class SaleDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SaleDetail::factory()->create([
            'product_name' => 'Product A',
            'quantity' => 2,
            'price' => 50000,
            'created_at' => \Carbon\Carbon::createFromFormat('Y-m-d', '2025-01-01'),
        ]);
        SaleDetail::factory()->create([
            'product_name' => 'Product B',
            'quantity' => 1,
            'price' => 75000,
            'created_at' => \Carbon\Carbon::createFromFormat('Y-m-d', '2025-01-02'),
        ]);
        SaleDetail::factory()->create([
            'product_name' => 'Product C',
            'quantity' => 2,
            'price' => 60000,
            'created_at' => \Carbon\Carbon::createFromFormat('Y-m-d', '2025-01-03'),
        ]);
        SaleDetail::factory()->create([
            'product_name' => 'Product D',
            'quantity' => 2,
            'price' => 61000,
            'created_at' => \Carbon\Carbon::createFromFormat('Y-m-d', '2025-01-02'),
        ]);
        SaleDetail::factory()->create([
            'product_name' => 'Product E',
            'quantity' => 1,
            'price' => 25000,
            'created_at' => \Carbon\Carbon::createFromFormat('Y-m-d', '2025-01-04'),
        ]);
    }
}
