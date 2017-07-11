<?php
/**
 * Created by PhpStorm.
 * User: 125619
 * Date: 16/6/17
 * Time: 3:51 PM
 */

echo $this->context->renderPartial('_copyright');

?>
<table>
    <tr>
        <th>Title</th>
        <th>Date</th>
    </tr>
    <?php foreach($newsList as $item) { ?>
        <tr>
            <th><a href="<?php echo Yii::$app->urlManager->createUrl(['news/item-detail' , 'id' => $item['id']]) ?>"><?php echo $item['title'] ?></a></th>
            <th><?php echo Yii::$app->formatter->asDatetime($item['date'], "php:d/m/Y"); ?></th>
        </tr>
    <?php } ?>
</table>