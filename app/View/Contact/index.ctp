<?php
    $this->Html->addCrumb(__('static.contact.breadcrumb'), array('admin' => false, 'controller' => 'contact', 'action' => 'index'));
?>

<?php
    echo $this->element('/layout/breadcrumbs', array('title' => __('static.contact.breadcrumb')));
?>

<?php
    echo $this->element('/layout/contact');
?>