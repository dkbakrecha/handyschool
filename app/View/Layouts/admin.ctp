<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = __d('cake_dev', 'ROOM247.in: New Room Listing Concept');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $cakeDescription ?>:
            <?php echo $this->fetch('title'); ?>
        </title>

        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css(array(
            '/bower_components/bootstrap/dist/css/bootstrap.min.css',
            '/bower_components/font-awesome/css/font-awesome.min.css',
            '/bower_components/Ionicons/css/ionicons.min.css',
            '/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css',
            '/adminlte/css/AdminLTE.min.css',
            '/adminlte/css/skins/_all-skins.min.css'
        ));

        echo $this->Html->script(array(
            '/bower_components/jquery/dist/jquery.min.js',
            '/bower_components/bootstrap/dist/js/bootstrap.min.js',
            '/bower_components/jquery-slimscroll/jquery.slimscroll.min.js',
            '/bower_components/fastclick/lib/fastclick.js',
            '/bower_components/datatables.net/js/jquery.dataTables.min.js',
            '/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js',
            '/adminlte/js/adminlte.min.js',
            '/adminlte/js/demo.js'
        ));

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body class="hold-transition skin-purple sidebar-mini">
        <!-- Site wrapper -->
<div class="wrapper">

        <?php echo $this->element('admin/header'); ?>

        <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $this->fetch('title'); ?>
      </h1>
    </section>

    <section class="content">
            <?php //echo $this->element('admin/topNav'); ?>
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    <?php echo $this->element('admin/footer'); ?>
    <?php //echo $this->element('_admin_common_js'); ?>
        
        </div>
    </body>
</html>