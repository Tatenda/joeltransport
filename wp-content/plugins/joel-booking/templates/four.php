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
                if(in_array($category.'__notes', array_keys($_POST))) {
                    $notes = $_POST[$category.'__notes'];
                } else {
                    $notes = "";
                }

                $wpdb->insert('wp_optional_services', array(
                    'field' => $key,
                    'category' => $category,
                    'value' => $value,
                    'description' => $notes,
                    'preferred_date' => $_POST[$category.'__preferred_date'],
                    'alternate_date' => $_POST[$category.'__alternate_date'],
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
<h3>SPECIALIZED SERVICES</h3>
<p>It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element.
    These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
    You can modify any of this with custom CSS or overriding our default variables.
</p>
    <form action="/quote?step=5" method="POST">
        <div class="jt-booking-inner">
            <div class="accordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#lounge" aria-expanded="true" aria-controls="lounge">
                            PET RELOCATION
                        </button>
                    </h2>
                    <div id="lounge" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element.
                                These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
                            </p>
                            <div class="row">
                                <h5>Do you require pet relocation services?</h5>
                                <div class="col-3">
                                    <input type="radio" value="yes" name="specialized__relocation_services" class="" /> Yes
                                </div>
                                <div class="col-3">
                                    <input type="radio" value="no" name="specialized__relocation_services" class="" /> No
                                </div>
                            </div>

                            <div class="row">
                                <h5>Provide detailed description</h5>
                                <div class="col-6">
                                    <textarea class="form-control" name="specialized__description"></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#dining" aria-expanded="true" aria-controls="dining">
                            VEHICLE TRANSPORTATION
                        </button>
                    </h2>
                    <div id="dining" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the first item's accordion body.</strong>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bedrooms" aria-expanded="true" aria-controls="bedrooms">
                            FINE ART
                        </button>
                    </h2>
                    <div id="bedrooms" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the first item's accordion body.</strong>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#kitchen" aria-expanded="true" aria-controls="kitchen">
                            DANGEROUS GOODS
                        </button>
                    </h2>
                    <div id="kitchen" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the first item's accordion body.</strong>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#otherItems" aria-expanded="true" aria-controls="otherItems">
                            OTHER SERVICES
                        </button>
                    </h2>
                    <div id="otherItems" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the first item's accordion body.</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <input type="hidden" name="form" value="<?php echo $form ?>" />
                <div class="col-6"><a href="/quote?step=3" class="btn btn-primary">Back</a></div>
                <div class="col-6"><button type="submit" class="btn btn-primary">Next</button></div>
            </div>
        </div>
    </form>
</div>
