<?php
require_once('../util/main.php');

require_once('model/customer_db.php');
require_once('model/address_db.php');
require_once('model/order_db.php');
require_once('model/product_db.php');

require_once('model/fields.php');
require_once('model/validate.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {        
        $action = 'view_login';
        if (isset($_SESSION['user'])) {
            $action = 'view_account';
        }
    }
}

// Set up all possible fields to validate
$validate = new Validate();
$fields = $validate->getFields();

// for the Registration page and other pages
$fields->addField('email');
$fields->addField('password_1');
$fields->addField('password_2');
$fields->addField('first_name');
$fields->addField('last_name');

// for the Login page
$fields->addField('password');


switch ($action) {
    case 'view_register':
        // Clear user data
        $email = '';
        $first_name = '';
        $last_name = '';
        $ship_line1 = '';
        $ship_line2 = '';
        $ship_city = '';
        $ship_state = '';
        $ship_zip = '';
        $ship_phone = '';
        $use_shipping = '';
        $bill_line1 = '';
        $bill_line2 = '';
        $bill_city = '';
        $bill_state = '';
        $bill_zip = '';
        $bill_phone = '';
        
        include 'account_register_view.php';
        break;
    case 'register':
        // Store user data in local variables
        $email = filter_input(INPUT_POST, 'email');
        $password_1 = filter_input(INPUT_POST, 'password_1');
        $password_2 = filter_input(INPUT_POST, 'password_2');
        $first_name = filter_input(INPUT_POST, 'first_name');
        $last_name = filter_input(INPUT_POST, 'last_name');
        
        // Validate user data       
        $validate->email('email', $email);
        $validate->text('password_1', $password_1, true, 6, 30);
        $validate->text('password_2', $password_2, true, 6, 30);        
        $validate->text('first_name', $first_name, false);
        $validate->text('last_name', $last_name, false);    
        

        // If validation errors, redisplay Register page and exit controller
        if ($fields->hasErrors()) {
            include 'account/account_register_view.php';
            break;
        }

        // If passwords don't match, redisplay Register page and exit controller
        if ($password_1 !== $password_2) {
            $password_message = 'Mật khẩu không trùng khớp.';
            include 'account/account_register_view.php';
            break;
        }

        // Validate the data for the customer
        if (is_valid_customer_email($email)) {
            $password_message = 'Địa chỉ email '.$email.' đã được sử dụng.';
            include 'account/account_register_view.php';
            break;
        }
        
        // Add the customer data to the database
        $customer_id = add_customer($email, $first_name,
                                    $last_name, $password_1);


        // Store user data in session
        $_SESSION['user'] = get_customer($customer_id);
        
        // Redirect to the Checkout application if necessary
        redirect($app_path);
        break;
    case 'view_login':
        // Clear login data
        $email = '';
        $password = '';
        $password_message = '';
        
        include 'account_login_view.php';
        break;
    case 'login':
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        
        // Validate user data
        $validate->email('email', $email);
        $validate->text('password', $password, true, 6, 30);        

        // If validation errors, redisplay Login page and exit controller
        if ($fields->hasErrors()) {
            include 'account/account_login_view.php';
            break;
        }
        
        // Check email and password in database
        if (is_valid_customer_login($email, $password)) {
            $_SESSION['user'] = get_customer_by_email($email);
        } else {
            $password_message = 'Đăng nhập thất bại. Không đúng email hoặc mật khẩu.';
            include 'account/account_login_view.php';
            break;
        }

        // If necessary, redirect to the Checkout app
        // Redirect to the Checkout application
        if (isset($_SESSION['checkout'])) {
            unset($_SESSION['checkout']);
            redirect('../checkout');
        } else {
            redirect($app_path);
        }        
        break;
    case 'logout':
        unset($_SESSION['user']);
        redirect($app_path);
        break;
    default:
        display_error("Unknown account action: " . $action);
        break;
}
?>