<?php


namespace app\models\computation;


class Computation extends AbstractComputation
{
    public function execute(): array
    {
        $arrayProducts = $this->makeArray($this->prizeProducts);
        return $this->getRandomPrize($arrayProducts);
    }

    private function makeArray(array $prizes): array
    {
        $newArray = [];
        foreach ($prizes as $prize){
            $newArray = array_merge($newArray, array_fill(0, $prize['ratio'], ['id' => $prize['id'], 'prize' => $prize['prize'], 'type' => $prize['type'], 'image' => $prize['image'], 'color_name' => $prize['color_name']]));
        }

        return $newArray;
    }

    private function getRandomPrize(array $products): array
    {
        shuffle($products);

        $prize = $products[rand(0, count($products) - 1)];

        $this->checkIsPrizeAvailableToday($prize, $products);

        return $prize;
    }

    private function checkIsPrizeAvailableToday(array $prize, array $products): array
    {
        if (
            !$this->canWeGiveOutBigPrize &&
            $prize['type'] == 'money' &&
            (int) $prize['prize'] > $this->limitPrize
        ){
            return $this->getRandomPrize($products);
        }

        return $prize;
    }
}