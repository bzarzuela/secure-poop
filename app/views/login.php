<html>
  <?php if (Session::has('message')): ?>
    <?php echo Session::get('message') ?>
  <?php endif ?>
  <form action="" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
  </form>
</html>