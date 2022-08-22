<?php
function startsWith ($string, $startString)
{
    $len = strlen($startString);
    return (substr($string, 0, $len) === $startString);
}

    global $wpdb;
    if (!empty($_POST)) {
        $form = $_POST['form'];
        try {
            foreach($_POST as $key => $value) {
                if ($key != 'form') {
                    if (startsWith($key, 'size_') ) {
                        $the_key = explode('size_', $key)[1];
                        $room_key = explode('__', $the_key);
                        $size = $value;
                        $title = $room_key[1];
                        $room = $room_key[0];
                        $required = $value;


                        if(in_array('count_'.$title, array_keys($_POST))) {
                            $count = $_POST['count_'.$title];
                        } else {
                            $count = 0;
                        }

                        $wpdb->insert('wp_inventory', array(
                            'title' => $title,
                            'room' => $room,
                            'size' => $size,
                            'count' => $count,
                            'created_at' => current_time('mysql'),
                            'form' => $form
                        ));
                    }
                }
            }
            // Check if active form with user email exists


        } catch(Exception $e) {
            print_r($e->getMessage());
        }
    }
?>
<div class="container jt-booking">
<h3>OPTIONAL SERVICES</h3>
<p>It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element.
    These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
    You can modify any of this with custom CSS or overriding our default variables.
</p>
<form action="/quote?step=4&form=<?php echo $form ?>" method="POST">
    <div class="jt-booking-inner">
    <div class="accordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#lounge" aria-expanded="true" aria-controls="lounge">
                    MOVING SURVEYS <span class="small">Service has been selected</span>
                </button>
            </h2>
            <div id="lounge" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>
                        It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element.
                        These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
                    </p>
                    <div class="row">
                        <h5>Do you require a survey?</h5>
                        <div class="col-3">
                            <input type="radio" value="yes" name="survey__required" class="" /> Yes
                        </div>
                        <div class="col-3">
                            <input type="radio" value="no" name="survey__required" class="" /> No
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <h5>Preferred date & time</h5>
                            <input type="date" name="survey__preferred_date" placeholder="Remove date"/>
                        </div>
                        <div class="col-6">
                            <h5>Alternative date & time</h5>
                            <input type="date" name="survey__alternate_date" placeholder="Remove date"/>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#dining" aria-expanded="true" aria-controls="dining">
                    PACKING MATERIAL
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
                    PACKING
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
                    REMOVAL OF PACKAGING DEBRIS
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
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#laundry" aria-expanded="true" aria-controls="laundry">
                    TRANSIT STORAGE
                </button>
            </h2>
            <div id="laundry" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the first item's accordion body.</strong>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#garage" aria-expanded="true" aria-controls="garage">
                    INSURANCE
                </button>
            </h2>
            <div id="garage" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the first item's accordion body.</strong>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#garden" aria-expanded="true" aria-controls="garden">
                    CONTAINER HAULAGE
                </button>
            </h2>
            <div id="garden" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the first item's accordion body.</strong>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#potplants" aria-expanded="true" aria-controls="potplants">
                    CUSTOMS CLEARING
                </button>
            </h2>
            <div id="potplants" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the first item's accordion body.</strong>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#servantsQuarters" aria-expanded="true" aria-controls="servantsQuarters">
                    CRATNG
                </button>
            </h2>
            <div id="servantsQuarters" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
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
        <div class="col-6"><a href="/quote?step=2&form=<?php echo $form ?>" class="btn btn-primary">Back</a></div>
        <div class="col-6"><button type="submit" class="btn btn-primary">Next</button></div>
    </div>
    </div>
</form>
</div>
