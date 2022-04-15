<?php


namespace app\models\rendering;


use const APP;

class RenderWinBlock
{
    protected $tpl;
    private array $prize;

    public function __construct(array $prize)
    {
        $this->tpl = APP . '/views/Roulette/win.php';
        $this->prize = $prize;
    }

    public function run()
    {
        return $this->catToTemplate($this->prize);
    }

    protected function catToTemplate($prize)
    {
        ob_start();
        require $this->tpl;
        return ob_get_clean();
    }
}