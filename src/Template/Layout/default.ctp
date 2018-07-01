<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Debug: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <!-- css -->
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.8/angular-material.min.css">

    <!-- js -->
   <?= $this->Html->script('/components/jquery/dist/jquery.js') ?>
   <!-- Angular Material requires Angular.js Libraries -->
   <?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js') ?>
   <?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-animate.min.js') ?>
   <?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-aria.min.js') ?>
   <?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-messages.min.js') ?>

   <!-- Angular Material Library -->
   <?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/angular_material/1.1.8/angular-material.min.js') ?>

   <?= $this->Html->script('scripts.js') ?>

    <!-- bloks -->
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

</head>
<body>

    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
        <div class="container clearfix" flex layout="column" layout-wrap >
            <?= $this->fetch('content') ?>
    </div>
    <footer layout-padding class="footer"  >
        <small>made by carlosvelasco@gmail.com</small>
    </footer>

</body>
</html>
