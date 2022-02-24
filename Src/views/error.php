<?php include "base.php" ?>

<!-- Background image -->
<div
  class="bg-image d-flex justify-content-center align-items-center"
  style="
    background-image: url('https://mdbcdn.b-cdn.net/img/new/fluid/nature/015.webp');
    height: 100vh;
  "
>
  <h1 class="text-white">OOOPS.....!!!! <br> Looks like the page <br> you are loooking for <br> does not exist !!!</h1>
</div>
<!-- Background image -->

<?php
http_response_code(404, 500, 501);
include('error.php'); // provide your own HTML for the error page
die();