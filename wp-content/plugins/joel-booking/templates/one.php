<?php
    $jt_form = 'jt_form';
    if(isset($_COOKIE[$jt_form])) {
        echo "The cookie '" . $jt_form . "' is set.";
        echo "Cookie is:  " . $_COOKIE[$jt_form];
    }

?>

<div class="container jt-booking">
    <?php if (!$_GET['form']): ?>
        <form action="/quote?step=2" method="POST">
    <?php else: ?>
        <form action="/quote?step=2&form=<?php echo $_GET['form'] ?>" method="POST">
    <?php endif; ?>
        <div class="jt-booking-inner">
            <div class="row">
                <h4>MOVE DETAILS</h4>
                <p>
                    lorem ipsum dolor sit amet, consectet, sed do eiusmod tempor incididunt ut labore et dol
                    sed do eiusmod tempor incididunt ut labore et dol sed do eiusmod tempor incididunt ut labore et dol
                </p>
            </div>
            <div class="row mb-3">
                <h4>Type of Move</h4>
                <div class="col-6">
                    <label>
                        <input type="radio" class="" name="move_type" value="domestic" class="form-control"/>
                        <span>Domestic move</span>
                    </label>
                </div>
                <div class="col-6">
                    <label>
                        <input type="radio" class="" name="move_type" value="international" class="form-control"/>
                        <span>International move</span>
                    </label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-6">
                    <h4>Size of Move</h4>
                    <label>
                        <input type="radio" class="" name="move_size" value="1 bed"/>
                        <span>1 bed</span>
                    </label>

                    <label>
                        <input type="radio" class="" name="move_size" value="2 bed"/>
                        <span>2 bed</span>
                    </label>

                    <label>
                        <input type="radio" class="" name="move_size" value="3 bed+"/>
                        <span>3 bed+</span>
                    </label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-4">
                    <h4>Date of move</h4>
                    <input type="date" name="move_date" class="form-control" />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-6">
                    <h4>Loading Address</h4>
                    <div class="form-group mb-2">
                        <input type="text" name="loading_street_address" class="form-control" placeholder="Street Address" />
                    </div>
                    <div class="form-group mb-2">
                        <input type="text" name="loading_complex_name" class="form-control" placeholder="Building/Complex Name & Unit No." />
                    </div>
                    <div class="form-group mb-2">
                        <input type="text" name="loading_city" class="form-control" placeholder="Suburb/City" />
                    </div>
                    <div class="form-group mb-2">
                        <input type="text" name="loading_postcode" class="form-control" placeholder="Code" />
                    </div>
                    <div class="form-group mb-2">
                        <input type="text" name="loading_country" class="form-control" placeholder="Country" />
                    </div>
                </div>
                <div class="col-6 mb-3">
                    <h4>Delivery Address</h4>
                    <div class="form-group mb-2">
                        <input type="text" name="delivery_street_address" class="form-control" placeholder="Street Address" />
                    </div>
                    <div class="form-group mb-2">
                        <input type="text" name="delivery_complex_name" class="form-control" placeholder="Building/Complex Name & Unit No." />
                    </div>
                    <div class="form-group mb-2">
                        <input type="text" name="delivery_city" class="form-control" placeholder="Suburb/City" />
                    </div>
                    <div class="form-group mb-2">
                        <input type="text" name="delivery_postcode" class="form-control" placeholder="Code" />
                    </div>
                    <div class="form-group mb-2">
                        <input type="text" name="delivery_country" class="form-control" placeholder="Country" />
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-11"></div>
                <div class="col-1"><button type="submit" class="btn btn-primary">Next</button></div>
            </div>
        </div>
    </form>
</div>
