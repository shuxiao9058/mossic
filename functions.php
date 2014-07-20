<?php

function themeConfig($form) {

    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowTagClouds' => _t('显示标签云'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowLinks' => _t('显示友链'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowTagClouds', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowLinks', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
}