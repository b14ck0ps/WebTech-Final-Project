<?php
require_once('../controllers/pageAccess.php');
require_once('../model/usersmodel.php');
$user = userinfo($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../css/style.css">
  <title>Student Profile</title>
  <script src="../javascript/password-validation.js" defer></script>
</head>

<body>

  <div id="smallScreen"></div>
  <div class="desktop">
    <div class="container">
      <?php include_once('student_navbar.php') ?>
    </div>
    <div class="main">
      <?php include_once('Student_sideNavbar.html') ?>
      <div class="main-body">
        <div class="prfile-flex">
          <div class="info-text">
            <form name="frmChange" method="post" action="../controllers/passwordCheck.php">
              <div style="width:500px;">
                <div class="message">
                  <?php if (isset($message)) {
                    echo $message;
                  } ?>

                </div>
                <table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
                  <tr class="tableheader">
                    <td colspan="2">Change Password</td>
                    <?php
                    if (isset($_GET['msg']) && $_GET['msg'] == 'required') {
                      echo '<p class="error-user">Wrong username or password</p>';
                    }
                    ?>

                  <tr>
                    <td width="40%"><label>Current Password</label></td>
                    <td width="60%"><input type="password" name="currentPassword" class="txtField" /><span id="currentPassword" class="required">required.</span></td>
                  </tr>
                  <tr>
                    <td><label>New Password</label></td>
                    <td>
                      <input type="password" name="newPassword" class="txtField" /><span id="newPassword" class="required">required.</span>
                    </td>
                  </tr>
                  <td><label>Confirm Password</label></td>

                  <td><input type="password" name="confirmPassword" class="txtField" /><span id="confirmPassword" class="required">required.</span>
                  </td>
                  </tr>
                  <tr>
                    <td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
                  </tr>
                </table>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="../javascript/functionality.js"></script>
</body>

</html>