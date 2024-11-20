<?php require_once('header.php'); ?>

<div class="page-banner" style="background-color:#444;background-image: url(assets/uploads/default-banner.jpg);">
    <div class="inner">
        <h1>Register</h1>
    </div>
</div>

<div class="page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="user-content">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">

                                <div class="col-md-6 form-group">
                                    <label for="">Name *</label>
                                    <input type="text" class="form-control" name="cust_name">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Company Name</label>
                                    <input type="text" class="form-control" name="cust_cname">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Email *</label>
                                    <input type="email" class="form-control" name="cust_email">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Phone *</label>
                                    <input type="text" class="form-control" name="cust_phone">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="">Address *</label>
                                    <textarea name="cust_address" class="form-control" cols="30" rows="10" style="height:70px;"></textarea>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Country *</label>
                                    <select name="cust_country" class="form-control select2">
                                        <option value="">Select country</option>
                                        <option value="1">Country 1</option>
                                        <option value="2">Country 2</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">City *</label>
                                    <input type="text" class="form-control" name="cust_city">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">State *</label>
                                    <input type="text" class="form-control" name="cust_state">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Zip Code *</label>
                                    <input type="text" class="form-control" name="cust_zip">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Password *</label>
                                    <input type="password" class="form-control" name="cust_password">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="">Confirm Password *</label>
                                    <input type="password" class="form-control" name="cust_re_password">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for=""></label>
                                    <input type="submit" class="btn btn-danger" value="Register" name="form1">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>                
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>
