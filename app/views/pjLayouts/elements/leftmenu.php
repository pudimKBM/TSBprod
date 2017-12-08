<?php
if (pjObject::getPlugin('pjOneAdmin') !== NULL && $controller->isAdmin()) {
    $controller->requestAction(array(
        'controller' => 'pjOneAdmin',
        'action' => 'pjActionMenu'
    ));
}
?>



<div class="dropdown">
  <a class="btn btn-lg btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Menu
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"><font size = "4">
    
	<a
			href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdmin&amp;action=pjActionIndex" class = "dropdown-item"><!--
			class="<?php echo $_GET['controller'] == 'pjAdmin' && $_GET['action'] == 'pjActionIndex' ? 'menu-focus' : NULL; ?> " class = "dropdown-item"><span
				class="menu-dashboard" >&nbsp;</span> --><?php __('menuDashboard'); ?></a>
		<?php
if ($controller->isAdmin()) {
    ?>
			<a
			href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminCalendars&amp;action=pjActionIndex" class = "dropdown-item"><!--
			class="<?php echo $_GET['controller'] == 'pjAdminCalendars' ? 'menu-focus' : NULL; ?>"><span
				class="menu-calendars" class="dropdown-item">&nbsp;</span> --><?php __('menuCalendars'); ?></a>
			<?php
}
?>
		<a
			href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminBookings&amp;action=pjActionSchedule" class = "dropdown-item"><!--
			class="<?php echo ($_GET['controller'] == 'pjAdminBookings' || ($_GET['controller'] == 'pjInvoice' && ($_GET['action'] == 'pjActionUpdate' || $_GET['action'] == 'pjActionInvoices' || $_GET['action'] == 'pjActionCreateInvoice') ) ) ? 'menu-focus' : NULL; ?>"><span
				class="menu-bookings">&nbsp;</span> --><?php __('menuBookings'); ?></a>
		<?php
if ($controller->isAdmin()) {
    ?>
			<a
			href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminTime&amp;action=pjActionIndex" class = "dropdown-item"><!--
			class="<?php echo $_GET['controller'] == 'pjAdminTime' ? 'menu-focus' : NULL; ?>"><span
				class="menu-time">&nbsp;</span> --><?php __('menuTime'); ?></a>
		<a
			href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminOptions&amp;action=pjActionIndex&amp;tab=1" class = "dropdown-item"><!--
			class="<?php echo ($_GET['controller'] == 'pjAdminOptions' && in_array($_GET['action'], array('pjActionIndex'))) || (in_array($_GET['controller'], array('pjAdminLocales', 'pjBackup', 'pjLocale', 'pjSms', 'pjCountry')) || ($_GET['controller'] == 'pjInvoice') && ($_GET['action'] == 'pjActionIndex')) ? 'menu-focus' : NULL; ?>"><span
				class="menu-options">&nbsp;</span> --><?php __('menuOptions'); ?></a>
		<a
			href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminUsers&amp;action=pjActionIndex" class = "dropdown-item"><!--
			class="<?php echo $_GET['controller'] == 'pjAdminUsers' ? 'menu-focus' : NULL; ?>"><span
				class="menu-users">&nbsp;</span> --><?php __('menuUsers'); ?></a>
		<a
			href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminOptions&amp;action=pjActionPreview" class = "dropdown-item"><!--
			class="<?php echo $_GET['controller'] == 'pjAdminOptions' && $_GET['action'] == 'pjActionPreview' ? 'menu-focus' : NULL; ?>"><span
				class="menu-preview">&nbsp;</span> --><?php __('menuPreview'); ?></a>
		<a
			href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminOptions&amp;action=pjActionInstall" class = "dropdown-item"><!--
			class="<?php echo $_GET['controller'] == 'pjAdminOptions' && $_GET['action'] == 'pjActionInstall' ? 'menu-focus' : NULL; ?>"><span
				class="menu-install">&nbsp;</span> --><?php __('menuInstall'); ?></a>
			<?php
}
if ($controller->isEditor()) {
    ?>
			
			
			<a
			href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdminTime&amp;action=pjActionIndex" class = "dropdown-item"><!--
			class="<?php echo $_GET['controller'] == 'pjAdminTime' ? 'menu-focus' : NULL; ?>"><span
				class="menu-time">&nbsp;</span> --><?php __('menuTime'); ?></a>
			<?php
}
if (!$controller->isAdmin()) {
    ?>
		 <a
			href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdmin&amp;action=pjActionProfile" class = "dropdown-item"><!--
			class="<?php echo $_GET['controller'] == 'pjAdmin' && $_GET['action'] == 'pjActionProfile' ? 'menu-focus' : NULL; ?>"><span
				class="menu-profile">&nbsp;</span>--><?php __('menuProfile'); ?></a>
		 <?php }?> 
		<a
			href="<?php echo $_SERVER['PHP_SELF']; ?>?controller=pjAdmin&amp;action=pjActionLogout" class = "dropdown-item"><!-- <span
				class="menu-logout">&nbsp;</span> --><?php __('menuLogout'); ?></a>
				</font>
  </div>
</div>






