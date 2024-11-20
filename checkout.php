<?php require_once('header.php'); ?>

<?php
if(!isset($_SESSION['cart_p_id'])) {
    header('location: cart.php');
    exit;
}
?>

<div class="page-banner">
    <div class="overlay"></div>
    <div class="page-banner-inner">
        <h1><?php echo LANG_VALUE_22; ?></h1>
    </div>
</div>

<div class="page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h3 class="special"><?php echo LANG_VALUE_26; ?></h3>
                <div class="cart">
                    <table class="table table-responsive table-hover table-bordered">
                        <tr>
                            <th><?php echo '#'; ?></th>
                            <th><?php echo LANG_VALUE_8; ?></th>
                            <th><?php echo LANG_VALUE_47; ?></th>
                            <th><?php echo LANG_VALUE_157; ?></th>
                            <th><?php echo LANG_VALUE_158; ?></th>
                            <th><?php echo LANG_VALUE_159; ?></th>
                            <th><?php echo LANG_VALUE_55; ?></th>
                            <th class="text-right"><?php echo LANG_VALUE_82; ?></th>
                        </tr>

                        <?php
                        $table_total_price = 0;
                        $i = 0;
                        foreach ($_SESSION['cart_p_id'] as $key => $value) {
                            $i++;
                            $row_total_price = $_SESSION['cart_p_current_price'][$key] * $_SESSION['cart_p_qty'][$key];
                            $table_total_price += $row_total_price;
                        ?>

                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><img src="assets/uploads/<?php echo $_SESSION['cart_p_featured_photo'][$key]; ?>" alt=""></td>
                            <td><?php echo $_SESSION['cart_p_name'][$key]; ?></td>
                            <td><?php echo $_SESSION['cart_size_name'][$key]; ?></td>
                            <td><?php echo $_SESSION['cart_color_name'][$key]; ?></td>
                            <td><?php echo LANG_VALUE_1 . $_SESSION['cart_p_current_price'][$key]; ?></td>
                            <td><?php echo $_SESSION['cart_p_qty'][$key]; ?></td>
                            <td class="text-right"><?php echo LANG_VALUE_1 . $row_total_price; ?></td>
                        </tr>
                        <?php } ?>

                        <tr>
                            <th colspan="7" class="total-text"><?php echo LANG_VALUE_81; ?></th>
                            <th class="total-amount"><?php echo LANG_VALUE_1 . $table_total_price; ?></th>
                        </tr>
                        <tr>
                            <td colspan="7" class="total-text"><?php echo LANG_VALUE_84; ?></td>
                            <td class="total-amount"><?php echo LANG_VALUE_1 . '0.00'; ?></td>
                        </tr>
                        <tr>
                            <th colspan="7" class="total-text"><?php echo LANG_VALUE_82; ?></th>
                            <th class="total-amount"><?php echo LANG_VALUE_1 . $table_total_price; ?></th>
                        </tr>
                    </table>
                </div>

                <div class="billing-address">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="special"><?php echo LANG_VALUE_161; ?></h3>
                            <table class="table table-responsive table-bordered table-hover table-striped bill-address">
                                <tr>
                                    <td><?php echo LANG_VALUE_102; ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><?php echo LANG_VALUE_103; ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><?php echo LANG_VALUE_104; ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><?php echo LANG_VALUE_105; ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><?php echo LANG_VALUE_106; ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><?php echo LANG_VALUE_107; ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><?php echo LANG_VALUE_108; ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><?php echo LANG_VALUE_109; ?></td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h3 class="special"><?php echo LANG_VALUE_162; ?></h3>
                            <table class="table table-responsive table-bordered table-hover table-striped bill-address">
                                <tr>
                                    <td><?php echo LANG_VALUE_102; ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><?php echo LANG_VALUE_103; ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><?php echo LANG_VALUE_104; ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><?php echo LANG_VALUE_105; ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><?php echo LANG_VALUE_106; ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><?php echo LANG_VALUE_107; ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><?php echo LANG_VALUE_108; ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><?php echo LANG_VALUE_109; ?></td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="cart-buttons">
                    <ul>
                        <li><a href="cart.php" class="btn btn-primary"><?php echo LANG_VALUE_21; ?></a></li>
                    </ul>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <h3 class="special"><?php echo LANG_VALUE_33; ?></h3>
                        <form>
                            <div class="col-md-4">
                                <label><?php echo LANG_VALUE_34; ?></label>
                                <select class="form-control">
                                    <option value=""><?php echo LANG_VALUE_35; ?></option>
                                    <option value="PayPal"><?php echo LANG_VALUE_36; ?></option>
                                    <option value="Bank Deposit"><?php echo LANG_VALUE_38; ?></option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="submit" class="btn btn-primary" value="<?php echo LANG_VALUE_46; ?>" disabled>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>
