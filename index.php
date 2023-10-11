<!-- Kurt Brown
     Web 182 - September 27, 2023 -->

<?php
//set default values
$name = '';
$email = '';
$phone = '';
$street = '';
$city = '';
$state = '';
$zip = '';
$message = 'Enter some data and click on the Submit button.';
$secondMessage = '';
$thirdMessage = '';

//process
$action = filter_input(INPUT_POST, 'action');

switch ($action) {
    case 'process_data':
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');
        $phone = filter_input(INPUT_POST, 'phone');
        $street = filter_input(INPUT_POST, 'street');
        $city = filter_input(INPUT_POST, 'city');
        $state = filter_input(INPUT_POST, 'state');
        $zip = filter_input(INPUT_POST, 'zip');

        /*************************************************
         * validate and process the name
         ************************************************/
        // 1. make sure the user enters a name
        // 2. display the name with only the first letter capitalized
        $name = trim($name);
        $email = trim($email);
        $phone = trim($phone);
        $street = trim($street);
        $city = trim($city);
        $state = trim($state);
        $zip = trim($zip);

        // validate name
        if (empty($name)) {
            $message = 'You must enter a name.';
            break;
        }

        $name = strtolower($name);
        $name = ucwords($name);

        $i = strpos($name, ' ');
        if ($i === FALSE) {
            $first_name = $name;
        } else {
            $first_name = substr($name, 0, $i);
        }
        /*************************************************
         * validate and process the email address
         ************************************************/
        // 1. make sure the user enters an email
        // 2. make sure the email address has at least one @ sign and one dot character
        if (empty($email)) {
            $message = 'You must enter an email address.';
            break;
        } else if(!str_contains($email, '@')) {
            $message = 'The email address must contain an @ sign.';
            break;
        } else if(!str_contains($email, '.')) {
            $message = 'The email address must contain a dot character.';
            break;
        }



        /*************************************************
         * validate and process the phone number
         ************************************************/
        // 1. make sure the user enters at least seven digits, not including formatting characters
        // 2. format the phone number like this 123-4567 or this 123-456-7890
        if (strlen($phone) < 7) {
            $message = 'The phone number must contain at least seven digits.';
            break;
        }
        if (strlen($phone) == 7) {
            $part1 = substr($phone, 0, 3);
            $part2 = substr($phone, 3);
            $phone = $part1 . '-' . $part2;
        } else {
            $part1 = substr($phone, 0, 3);
            $part2 = substr($phone, 3, 3);
            $part3 = substr($phone, 6);
            $phone = $part1 . '-' . $part2 . '-' . $part3;
        }

        //Validates the street -- Must contain a house number
        if(!is_numeric($street)){
            $message = "Error: Must contain a house number";
            break;
        }else{
            $street = (int)$street;
        }
        
        //Validating the state -- Must be 2 characters
        if(empty($state)){
            $message = 'Error: Enter a 2 Character State';
            break;
        }
        else{
            $state = substr($state, 0, 2);
        }

        //Validates the zip code -- Must be 5 digits

        if(empty($zip)){
            $message = "Error: Enter a 5 digit zip code";
            break;
        }elseif(!is_numeric($zip) || (strlen($zip) != 5)){
            $message = 'Error: Enter a valid 5 digit zip code';
            break;
        }else{
            $zip = (int)$zip;
        }

        /*************************************************
         * Display the validation message
         ************************************************/
        $message =
            "Hello $first_name,\n\n" .
            "Thank you for entering this data:\n\n" .
            "Name: $name\n" .
            "Email: $email\n" .
            "Phone: $phone\n" .
            "Street: $street\n" .
            "City: $city\n" .
            "State: $state\n" .
            "Zip: $zip\n";
       

        //Second Message
        $christmasDate = strtotime((string)date("Y")."-12-25");
        $dateDifference = date_diff(date_create(date('M j, Y', $christmasDate)), date_create(date("M j Y")));
        $secondMessage = "BTW " . $first_name . " did you know it is only" . $dateDifference->format(' %a '). "days until Christmas?";

        //Third Message
        $addThousandMinutes = date("Y/m/d H:i:s", strtotime("+1000 minutes"));
        $thirdMessage = "Also, in 1,000 minutes from now it will be " .$addThousandMinutes.".";
        break;

}


include 'string_tester.php';
?>