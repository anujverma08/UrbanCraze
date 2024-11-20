<?php require_once('header.php'); ?>

<!-- Banner Section -->
<div class="page-banner" style="background-color:#444;background-image: url(assets/uploads/banner-login.jpg);">
    <div class="inner">
        <h1><?php echo LANG_VALUE_10; ?></h1>
    </div>
</div>

<!-- Login Form Section -->
<div class="page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="user-content">
                    <form action="" method="post">                  

                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <!-- Error and Success Messages (displayed if set) -->
                                <div id="error-message" style="padding: 10px;background:#f1f1f1;margin-bottom:20px;display:none;">
                                    <!-- Error message will be inserted here -->
                                </div>
                                <div id="success-message" style="padding: 10px;background:#f1f1f1;margin-bottom:20px;display:none;">
                                    <!-- Success message will be inserted here -->
                                </div>
                                
                                <!-- Email Input -->
                                <div class="form-group">
                                    <label for=""><?php echo LANG_VALUE_94; ?> *</label>
                                    <input type="email" class="form-control" name="cust_email">
                                </div>

                                <!-- Password Input -->
                                <div class="form-group">
                                    <label for=""><?php echo LANG_VALUE_96; ?> *</label>
                                    <input type="password" class="form-control" name="cust_password">
                                </div>

                                <!-- Submit Button -->
                                <div class="form-group">
                                    <label for=""></label>
                                    <input type="submit" class="btn btn-success" value="<?php echo LANG_VALUE_4; ?>" name="form1">
                                </div>

                                <!-- Forgot Password Link -->
                                <a href="forget-password.php" style="color:#e4144d;"><?php echo LANG_VALUE_97; ?>?</a>
                            </div>
                        </div>                        
                    </form>
                </div>                
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>
