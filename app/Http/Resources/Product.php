<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => 'Nom du produit : ' . $this->name,
            'price' => 'Prix : ' . $this->price . '€',
            'productWeight' => 'Poids : ' . $this->productWeight . 'g',
            'quantity' => 'Quantité : ' . $this->quantity,
            'productDescription' => substr($this->productDescription, 0, 20) . '...',
            'productImage' => "URL de l'image : " . $this->productImage,
            'fruitOrVeggie' => "Catégorie : " . $this->fruitOrVeggie,
            'productAvailability' => 'Produit dispo : ' . $this->productAvailability,
            'category_id' => 'Qualité : ' . $this->category_id,
            'season' => 'Saison de récolte : ' . $this->season,
            'ripenessLevel' => 'Degré de maturité : ' . $this->ripenessLevel,
            'origin' => 'Origine : ' . $this->origin,
            'organic' => 'Label Bio : ' . $this->organic
        ];
    }
}
