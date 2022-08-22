<?php
function startsWith ($string, $startString) {
    $len = strlen($startString);
    return (substr($string, 0, $len) === $startString);
}

global $wpdb;
if (!empty($_POST)) {
    // print_r($_REQUEST);
    $form = $_POST['form'];

    try {
        foreach($_POST as $key => $value) {
            if ($key != 'form') {
                $category_title = explode('__', $key);
                $category = $category_title[0];

                if(in_array($category.'__notes', array_keys($_POST))) {
                    $notes = $_POST[$category.'__notes'];
                } else {
                    $notes = "";
                }

                $wpdb->insert('wp_contact_details', array(
                    'title' => $_POST['title'],
                    'first_name' => $_POST['first_name'],
                    'last_name' => $_POST['last_name'],
                    'primary_contact_number' => $_POST['primary_contact_number'],
                    'alternative_contact_number' => $_POST['alternative_contact_number'],
                    'email' => $_POST['email'],
                    'referal_source' => $_POST['referal_source'],
                    'referal_description' => $_POST['referal_description'],
                    'paid_by_company' => $_POST['__alternate_date'],
                    'email' => $_POST['__alternate_date'],
                    'email' => $_POST['__alternate_date'],
                    'email' => $_POST['__alternate_date'],
                    'form' => $form,
                    'created_at' => current_time('mysql')
                ));

            }
        }
    } catch(Exception $e) {
        print_r($e->getMessage());
    }
}

?>

<div class="container jt-booking">
<h1>Confirmation</h1>
</div>
