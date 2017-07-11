<?php
/**
 * Created by PhpStorm.
 * User: 125619
 * Date: 16/6/17
 * Time: 4:06 PM
 */

echo $this->context->renderPartial('_copyright');

// $item is from actionItemDetail
?>

<h2>News Item Detail<h2>
<br />
Title: <b><?php echo $item['title'] ?></b>
<br />
Date: <b><?php echo $item['date'] ?></b>