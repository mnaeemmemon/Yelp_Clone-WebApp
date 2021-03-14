<?php
    include_once 'send_api_request.php';
?>
<?php
    // if the request is of post type
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['go'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $zip = $_POST['zip'];
            $phone = $_POST['phone'];
            $interest = explode(',', $_POST['interest']);

            $address = urlencode($address . "," . $city);

            $response_array = array('name' => $name, 'email' => $email, 'phone' => $phone, 'tags' => $interest);

            foreach($interest as $tag){
                array_push($response_array, array($tag => send_request($address, trim($tag))));
            }

            require_once 'display_buisness.php';
        }
    }
?>