<?php


namespace app\models\computation;


abstract class AbstractComputation
{
    protected array $prizeProducts;
    protected int $limitPrize = LIMIT_PRIZE_FOR_DAY;
    protected bool $canWeGiveOutBigPrize = true;

    abstract public function execute(): array;

    public function setPrize(array $prizeProducts): void
    {
        $this->prizeProducts = $prizeProducts;
    }

    public function setLimitPrize(int $limitPrize): void
    {
        $this->limitPrize = $limitPrize;
    }

    public function setCanWeGiveOutBigPrize(bool $canWeGiveOutBigPrize): void
    {
        $this->canWeGiveOutBigPrize = $canWeGiveOutBigPrize;
    }
}