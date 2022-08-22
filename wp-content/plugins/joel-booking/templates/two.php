<?php
    global $wpdb;
    if (!empty($_POST)) {
        try {
            $jt_form = 'jt_form';

            if (empty($_GET)) {
                $wpdb->insert('wp_quotes',
                array(
                    'created_at' => current_time( 'mysql' ),
                ));
                $jt_form_id = $wpdb->insert_id;
            } else {
                print_r($_GET);
                $jt_form_id = $_GET['form'];
            }

            if(!isset($_COOKIE[$jt_form])) {
                echo "The cookie: '" . $jt_form . "' is not set.";
                setcookie( $jt_form, $jt_form_id, 30 * DAY_IN_SECONDS);

            } else {
                echo "The cookie '" . $jt_form . "' is set.";
                echo "Cookie is:  " . $_COOKIE[$jt_form];
            }

            // Check if active form with user email exists
            $response = $wpdb->insert('wp_moving_details',
                array(
                    'created_at' => current_time( 'mysql' ),
                    'move_type' => $_POST['move_type'],
                    'move_size' => $_POST['move_size'],
                    'move_date' => current_time( 'mysql' ),
                    'loading_street_address' => $_POST['loading_street_address'],
                    'loading_complex_name' => $_POST['loading_complex_name'],
                    'loading_city' => $_POST['loading_city'],
                    'loading_postcode' => $_POST['loading_postcode'],
                    'loading_country' => $_POST['loading_country'],
                    'delivery_street_address' => $_POST['delivery_street_address'],
                    'delivery_complex_name' => $_POST['delivery_complex_name'],
                    'delivery_city' => $_POST['delivery_city'],
                    'delivery_postcode' => $_POST['delivery_postcode'],
                    'delivery_country' => $_POST['delivery_country'],
                    'form' => $jt_form_id
                )
            );

        } catch(Exception $e) {
            print_r($e->getMessage());
        }
    }
?>
<div class="container jt-booking">
<h3>Inventory Items</h3>
<p>It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element.
    These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
    You can modify any of this with custom CSS or overriding our default variables.
</p>
<form action="/quote?step=3&form=<?php echo $jt_form_id; ?>" method="POST">
<div class="jt-booking-inner">
    <div class="accordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#lounge" aria-expanded="true" aria-controls="lounge">
                    LOUNGE (x items)
                </button>
            </h2>
            <div id="lounge" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body inventory">
                    <div class="row selected">
                        <div class="col-6">
                            <input type="checkbox" name="lounge__3-sit" />
                            <label for="">3 SIT/SETTEE</label>
                        </div>
                        <div class="col-3">
                            <select name="size_lounge__3-sit" class="d-none">
                                <option value="0">Select Size</option>
                                <option value="s">Small</option>
                                <option value="m">Medium</option>
                                <option value="l">Large</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <div class="counter">

                                <button type="button" class="count" name="sub#3-sit">-</button>

                                <input type="number" name="count_3-sit" value="0" min="0"/>

                                <button type="button" class="count" name="add#3-sit">+</button>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <input type="checkbox"  name="lounge__2-sit" />
                            <label for="">2 SIT/SETTEE</label>
                        </div>
                        <div class="col-3">
                            <select name="size_lounge__2-sit">
                                <option value="0">Select Size</option>
                                <option value="s">Small</option>
                                <option value="m">Medium</option>
                                <option value="l">Large</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <div class="counter">

                                <button type="button" class="count" name="sub#2-sit">-</button>

                                <input type="number" name="count_2-sit" value="0" min="0"/>

                                <button type="button" class="count" name="add#2-sit">+</button>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <input type="checkbox" name="lounge__armchair" />
                            <label for="">ARMCHAIR</label>
                            </div>
                        <div class="col-3">
                            <select name="size_lounge__armchair">
                                <option value="0">Select Size</option>
                                <option value="s">Small</option>
                                <option value="m">Medium</option>
                                <option value="l">Large</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <div class="counter">

                                    <button type="button" class="count" name="sub#armchair">-</button>

                                    <input type="number" name="count_armchair" value="0" min="0"/>

                                    <button type="button" class="count" name="add#armchair">+</button>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <input type="checkbox" name="lounge__rocker-chair" />
                            <label for="">ROCKER CHAIR</label>
                        </div>
                        <div class="col-3">
                            <select name="size_lounge__rocker-chair">
                                <option value="0">Select Size</option>
                                <option value="s">Small</option>
                                <option value="m">Medium</option>
                                <option value="l">Large</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <div class="counter">
                                    <button type="button" class="count" name="sub#rocker-chair">-</button>

                                    <input type="number" name="count_rocker-chair" value="0" min="0"/>

                                    <button type="button" class="count" name="add#rocker-chair">+</button>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <input type="checkbox" name="lounge__lazy-boy" />
                            <label for="">LAZY BOY</label>
                        </div>
                        <div class="col-3">
                            <select name="size_lounge__lazy-boy">
                                <option value="0">Select Size</option>
                                <option value="s">Small</option>
                                <option value="m">Medium</option>
                                <option value="l">Large</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <div class="counter">
                                    <button type="button" class="count" name="sub#lazy-boy">-</button>

                                    <input type="number" name="count_lazy-boy" value="0" min="0"/>

                                    <button type="button" class="count" name="add#lazy-boy">+</button>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <input type="checkbox" name="lounge__coffee-table" />
                            <label for="">COFFEE TABLE</label>
                        </div>
                        <div class="col-3">
                            <select name="size_lounge__coffee-table">
                                <option value="0">Select Size</option>
                                <option value="s">Small</option>
                                <option value="m">Medium</option>
                                <option value="l">Large</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <div class="counter">

                                    <button type="button" class="count" name="sub#coffee-table">-</button>

                                    <input type="number" name="count_coffee-table" value="0" min="0"/>

                                    <button type="button" class="count" name="add#coffee-table">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#dining" aria-expanded="true" aria-controls="dining">
                    DINING ROOM (x items)
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
                    BEDROOMS (x items)
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
                    KITCHEN (x items)
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
                    LAUNDRY (x items)
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
                    GARAGE (x items)
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
                    GARDEN (x items)
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
                    POT PLANTS (x items)
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
                    SERVANTS QUARTERS (x items)
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
                    OTHER ITEMS (x items)
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
        <input type="hidden" name="form" value="<?php echo $jt_form_id ?>" />
        <div class="col-6"><a href="/quote?step=1&form=<?php echo $jt_form_id ?>" class="btn btn-primary">Back</a></div>
        <div class="col-6"><button type="submit" class="btn btn-primary">Next</button></div>
    </div>
</div>
</form>
</div>
