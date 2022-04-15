<?php


namespace app\models\rendering;


use const APP;

class RenderRoulette
{
    protected $data;
    protected $tpl;
    private array $prize;
    private array $prizeProducts;
    private array $prizeMore = ['400', '450', '500', '550', '600', '700', '800', '900', '1000', '1500', '2000', '2500', '3000'];

    public function __construct(array $prize, array $prizeProducts)
    {
        $this->tpl = APP . '/views/Roulette/index.php';
        $this->prize = $prize;
        $this->prizeProducts = $prizeProducts;
    }

    public function run(): array
    {
        $prizeArray = $this->prizeProducts;
        shuffle($prizeArray);

        $randElement = rand(10, count($prizeArray) - 3);
        $prizeArray = $this->restructureArray($this->prize['prize'], $randElement, $prizeArray);

        if (is_numeric($this->prize['prize']) && $this->prize['prize'] < 300){
            $prizeArray = $this->restructureArray($this->prizeMore[rand(0, count($this->prizeMore) - 1)], $randElement - rand(1,2), $prizeArray);
            $prizeArray = $this->restructureArray($this->prizeMore[rand(0, count($this->prizeMore) - 1)], $randElement + rand(2,3), $prizeArray);
        }

        $readyArray['prize'] = $this->prize;
        $readyArray['number'] = $randElement;
        $readyArray['str'] = $this->getHtml($prizeArray);

        return $readyArray;
    }

    private function restructureArray(string $searchElement, int $newNumberInArray, array $array): array
    {
        $elementNumber = '';

        foreach ($array as $key => $value){
            if ($value['prize'] == $searchElement){
                $elementNumber = $key;
                break;
            }
        }

        list($array[$elementNumber], $array[$newNumberInArray]) = [$array[$newNumberInArray], $array[$elementNumber]];

        return $array;
    }

    protected function getHtml(array $array): ?string
    {
        $str = '';
        $i = 1;
        foreach($array as $id => $prize){
            $str .= $this->catToTemplate($prize, $id, $i);
            $i++;
        }
        return $str;
    }

    protected function catToTemplate($prize, $id, $i)
    {
        ob_start();
        require $this->tpl;
        return ob_get_clean();
    }
}