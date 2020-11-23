 <!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script type="application/x-javascript">
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!-- Custom Theme files -->
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <!-- //Custom Theme files -->
  <!-- web font -->
  <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
  <!-- //web font -->
</head>

<body>



  <!-- main -->
  <div class="main-w3layouts wrapper">
    <div class="main-agileinfo">
      <div class="agileits-top">




        <form class="form-horizontal" method="POST" action="register.php" enctype="multipart/form-data">
          <input class="text" type="text" name="name" placeholder="Name" required="">
          <input class="text email" type="email" name="email" placeholder="Email" required="">
          <input class="text email" type="text" name="contact" placeholder="Contact" required="">
          <input class="text email" type="text" name="address" placeholder="Street Address" required="">
          <input class="text email" type="text" name="city" placeholder="City" required="">
          <input class="text email" type="text" name="pin" placeholder="Pincode" required="">
          <input class="text email" type="text" name="state" placeholder="State" required="">
          <input class="text email" type="text" name="country" placeholder="Country" required="">

            <input type="file" id="photo" name="fileToUpload" accept="application/pdf">
      



      <input type="submit" value="SIGNUP">
      </form>
    </div>
  </div>
  </div>
  <!-- //main -->
  <script>
    function validateForm() {
      const form = document.forms["myForm"];
      const phonenoReg = /^\d{10}$/;
      const pinReg = /^(?=[0-9]*$)(?:.{4}|.{6})$/;



      if (!form['contact'].value.match(phonenoReg)) {
        form['contact'].style.border = "1px solid red";
        return false;
      } else {
        form['contact'].style.border = "";
      }


      if (!form['pin'].value.match(pinReg)) {
        form['pin'].style.border = "1px solid red";
        return false;
      } else {
        form['pin'].style.border = "";
      }

      const obj = {};
      Object.keys(form).forEach((i) => {
        obj[i] = form[i].value;
      })


    }
  </script>
</body>

</html>