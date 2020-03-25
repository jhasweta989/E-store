<footer class="page-footer font-small blue pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

      <div class="footer-copyright text-center py-3">Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</div>
  </div>
</footer>

 $user_registration_query = "DELETE FROM user_items where user_id= '$user_id' AND item_id= '$user_id'";
 mysqli_query($con, $user_registration_query);