<?php
    $this->Html->addCrumb('kontakt', array('admin' => false, 'controller' => 'contact', 'action' => 'index'));
?>

<?php
    echo $this->element('/layout/breadcrumbs', array('title' => 'kontakt'));
?>

<?php
    echo $this->element('/layout/contact');
?>