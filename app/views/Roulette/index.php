<div class="prize-item prize-item--teal <?=$prize['color_name']?>-color">
    <div class="img">
        <img src="/public/images/case/<?=$prize['image']?>.png" alt="">
    </div>
    <div class="info-case">
        <div class="name"><?=$prize['prize']?> <?php if ($prize['type'] == 'money') echo 'руб.'?></div>
        <?php if($prize['type'] == 'money'):?>
            <div class="desc">На игровой счет</div>
        <?php else:?>
            <div class="desc">Подзарядка</div>
        <?php endif;?>
    </div>
</div>