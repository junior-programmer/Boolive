<?php
$list = $v['view'];//->arrays(\Boolive\values\Rule::string());
?>
<div class="post">
    <?php //echo $list['title']->string(); ?>
    <?php echo $list['text']->string(); ?>
</div>
<?php echo $v->NextPrevNavigation->string(); ?>
<?php
unset(/*$list['title'], */$list['text']);
foreach ($list as $item) {
    echo '<div>' . $item->string() . '</div>';
}