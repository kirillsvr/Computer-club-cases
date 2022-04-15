<?php


namespace app\models;


use app\models\curl\SenetConnectGet;

class PrizeGoods
{
    private array $products;
    private array $productsPrize;

    public function __construct(array $products, string $token)
    {
        $this->products = $products;
        $this->productsPrize = (new SenetConnectGet('/api/v2/shop/entity_office/?dic_office_id=1&limit=150', $token))->execute();
    }

    public function run(): array
    {
        $newArray = [];
        foreach ($this->products as $product){
            if (is_numeric($product['prize'])) {
                $newArray[] = $product;
                continue;
            }

            foreach ($this->productsPrize['results'] as $value){
                if($product['id'] == $value['id'] && $value['quantity'] > 0){
                    $newArray[] = $product;
                }
            }
        }

        return $newArray;
    }

}