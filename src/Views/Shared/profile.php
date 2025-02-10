<h1>Profile</h1>

<?php echo $_SESSION['user']->getFirstname() . ' '; ?>
<?php echo $_SESSION['user']->getLastname(). '<br>';?>

<a href="/auth/logout">Logout</a>