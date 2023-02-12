<div class="date-container">
    <div class="choose-date">
        <?
        $href=(isset($_GET['id'])) ? "?id=".$_GET['id']."&date=" : "?date=";
        
        ?>
        <a href="<?=$href.date('Y-m-d') ?>"><?= date('F j') ?></a>
        <a href="<?=$href.date('Y-m-d', strtotime('+1 day')) ?>"><?= date('F j', strtotime('+1 day')) ?></a>
        <a href="<?=$href.date('Y-m-d', strtotime('+2 day')) ?>"><?= date('F j', strtotime('+2 day')) ?></a>
    </div>
</div>