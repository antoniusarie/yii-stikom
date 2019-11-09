<?php

/*
 * DbMenu Class extend CMenu.
 */

Yii::import('zii.widgets.CMenu', true);

class dbMenu extends CMenu
{
    public function init()
    {
        // Here we define query conditions.
        $criteria = new CDbCriteria;
        $criteria->condition = 'status = 1';
        $criteria->order = 'position ASC';
        $items = Menu::model()->findAll($criteria);

        foreach ($items as $item)
        $this->items[] = array(
            'label'=>'<i class="'.$item->icon.'"></i> '.$item->label, 
            'url'=>'index.php?r='.$item->url,
            'visible'=>!Yii::app()->user->isGuest && Yii::app()->user->checkAccess('user')
        );   
        $this->encodeLabel = false;

        parent::init();
    }
}
