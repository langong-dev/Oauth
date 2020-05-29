<?php require( 'gitauth/git.php' ); ?>
 <html>
  <head>
  </head>
  <body>
    <p>
		Please Wait...
      <?php $url=$git->git_authorize_url(); echo "<script>window.location.href='$url'</script>"; ?>
    </p>
  </body>
</html>
