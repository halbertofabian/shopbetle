<!DOCTYPE html>
<html lang="en">
<?php $app->loadComponent('head'); ?>

<body>
  <div class="urlApp" urlApp="<?= HTTP_HOST ?>"></div>
  <?php if (isset($_SESSION['session_start']) && $_SESSION['session_start']) : ?>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->

    <!-- page-wrapper Start       -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <?php $app->loadComponent('top-navbar'); ?>
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        <?php $app->loadComponent('header'); ?>
        <?php

        if ($rute) {
          $app->loadView($rute[0]);
        } else {
          $app->loadView2('appframework/views/principal');
        }
        ?>
        <!-- footer start-->
        <?php $app->loadComponent('footer'); ?>
      </div>
    </div>
  <?php else :
    $app->loadView2('users/views/login/login');
  ?>

  <?php endif; ?>
  <?php $app->loadComponent('scripts'); ?>

</body>

</html>