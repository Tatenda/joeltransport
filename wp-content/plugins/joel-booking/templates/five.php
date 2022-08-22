<?php
function startsWith ($string, $startString)
{
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
                if(in_array($category.'__description', array_keys($_POST))) {
                    $notes = $_POST[$category.'__description'];
                } else {
                    $notes = "";
                }

                $wpdb->insert('wp_specialized_services', array(
                    'field' => $key,
                    'category' => $category,
                    'value' => $value,
                    'description' => $notes,
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
<form action="/quote?step=done" method="POST">
    <div class="jt-booking-inner">
        <div class="row">
            <h3>CONTACT DETAILS</h3>
            <p>
                lorem ipsum dolor sit amet, consectet, sed do eiusmod tempor incididunt ut labore et dol
                sed do eiusmod tempor incididunt ut labore et dol sed do eiusmod tempor incididunt ut labore et dol
            </p>
        </div>
        <div class="row">
            <h4>Details of person moving</h4>
            <div class="form-group">
                <input type="text" name="title" placeholder="Title" class="form-control"/>
                <input type="text" name="first_name" placeholder="First name" class="form-control"/>
                <input type="text" name="last_name" placeholder="Last name" class="form-control"/>
            </div>
        </div>

        <div class="row">

            <div class="col-6">
                <h4>Primary contact number</h4>
                <input type="text" class="form-control" name="primary_contact" placeholder="Contact Number"/>
            </div>

            <div class="col-6">
                <h4>Alternative contact number</h4>
                <input type="text" class="form-control" name="alternative_contact" placeholder="Contact Number"/>
            </div>
        </div>

        <div class="row">
            <h4>Email address</h4>
            <input type="text" class="form-control" name="email" placeholder="email address" />
        </div>

        <div class="row">
            <div class="col-6 form-group">
                <select name="referal_source" class="form-control">
                    <option value="0">How did you find out about us?</option>
                </select>
            </div>
            <div class="col-6 form-group">
                <input type="text" name="street_address" class="form-control" placeholder="Describe" />
            </div>
        </div>

        <div class="row">
            <label>
                <input type="checkbox" class="" name="company_payment" />
                Paid for by company?
            </label>
        </div>

        <div class="row">
            <h4>Company Details</h4>
            <div class="col-6 form-group">
                <input type="text" name="company_name" class="form-control" placeholder="Company name" />
            </div>
            <div class="col-6 form-group">
                <input type="text" name="contact_person" class="form-control" placeholder="Contact person" />
            </div>
            <div class="col-6 form-group">
                <input type="text" name="contact_number" class="form-control" placeholder="Contact number" />
            </div>
            <div class="col-6 form-group">
                <input type="text" name="email_address" class="form-control" placeholder="Email address" />
            </div>
        </div>

        <div class="row">
            <h5>Billing Address</h5>
            <div class="col-4">
                <input type="radio" value="" name="billing_address" class="" /> Use loading address
            </div>
            <div class="col-4">
                <input type="radio" value="" name="billing_address" class="" /> Use delivery address
            </div>
            <div class="col-6">
                <div class="form-group">
                    <input type="text" name="street_address" class="form-control" placeholder="Street Address" />
                </div>
                <div class="form-group">
                    <input type="text" name="complex_name" class="form-control" placeholder="Building/Complex Name & Unit No." />
                </div>
                <div class="form-group">
                    <input type="text" name="city" class="form-control" placeholder="Suburb/City" />
                </div>
                <div class="form-group">
                    <input type="text" name="postcode" class="form-control" placeholder="Code" />
                </div>
                <div class="form-group">
                    <input type="text" name="country" class="form-control" placeholder="Country" />
                </div>
            </div>
        </div>



        <div class="row">
            <input type="hidden" name="form" value="<?php echo $form ?>" />
            <div class="col-6"><a href="/quote?step=4" class="btn btn-primary">Back</a></div>
            <div class="col-6"><button type="submit" class="btn btn-primary">Next</button></div>
        </div>
    </div>
    </form>
</div>
