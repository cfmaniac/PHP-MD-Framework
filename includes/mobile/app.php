<?php
//APP.PHP
$edition = "Mobile Phone Edition";

//This one may become a bit more complex than the other APP.PHP files, as the Mobile App extensitons Expand
$run_app = $_SERVER['SERVER_NAME'];

?>
<script type="text/javascript">
  function touch_start(touch_obj) {
   touch_obj.style.backgroundColor = "green";
  }

  function touch_end(touch_obj) {
   touch_obj.style.backgroundColor = "orange";
  }
</script>
