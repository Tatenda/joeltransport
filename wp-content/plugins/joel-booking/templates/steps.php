<?php
    if (!empty($_REQUEST['step'])) {
        $active_class = 'active';
    }

?>
<div class="container steps p-3">
    <ul>
        <li class="step">
            <div class="title">Move details</div>
            <div class="number <?php $active_class ?>">1</div>
        </li>
        <li class="step">
            <div class="title">Inventory</div>
            <div class="number">2</div>
        </li>
        <li class="step">
            <div class="title">Optional Services</div>
            <div class="number">3</div>
        </li>
        <li class="step">
            <div class="title">Specialized Services</div>
            <div class="number">4</div>
        </li>
        <li class="step">
            <div class="title">Contact details</div>
            <div class="number">5</div>
        </li>
    </ul>
</div>
