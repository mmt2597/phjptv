@extends('layout.app')

@section('title', 'Contact Us')

@section('after_styles')

<style>
    
    html, body {
        background-color: #ecf0f5;
    }

    .contact-form-container {
        background-color: #FFF;
    }

</style>
@endsection


@section('content')
    
    <form class="my-5" action="{{ route('contact-us.submit-form') }}" method="post">
        
        <div class="col-sm-10 mx-auto p-5 shadow-sm contact-form-container">

            <h3 class="text-center">Inquiry Form</h3>

            <div class="alert alert-dismissible alert-warning">
                <p class="mb-0">If there is a defect in the content, the answer may not be received. Please make sure to check for errors before sending. "*"It is a required field.</p>
            </div>
            
            <div class="row mt-5">
                
                <div class="form-group col-md-6">
                    <fieldset>
                        <legend>Type *</legend>
                        <div class="form-check-inline custom-control custom-radio">
                            <input type="radio" id="type1" name="type" class="custom-control-input" checked="">
                            <label class="custom-control-label" for="type1">Contact Us</label>
                        </div>
                        <div class="form-check-inline custom-control custom-radio">
                            <input type="radio" id="type2" name="type" class="custom-control-input">
                            <label class="custom-control-label" for="type2">Apply For Free Viewing</label>
                        </div>
                    </fieldset>
                </div>

                <div class="form-group col-md-6">
                    <label for="email"><b>Email Address</b> *</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>

            </div>

            <div class="row">
                
                <div class="form-group col-md-6">
                    <label for="surname"><b>Surname</b> *</label>
                    <input type="text" id="surname" name="surname" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="fullName"><b>Full Name</b> *</label>
                    <input type="text" id="fullName" name="full_name" class="form-control" required>
                </div>

            </div>

            <div class="row">
                
                <div class="form-group col-md-6">
                    <label for="phoneNumber"><b>Phone Number</b> *</label>
                    <input type="text" id="phoneNumber" name="phone_number" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="postalCode"><b>Postal Code</b> *</label>
                    <input type="text" id="postalCode" name="postal_code" class="form-control" required>
                </div>

            </div>

            <div class="row">
                <div class="form-group col-md-12">
                    <label for="address"><b>Address</b> *</label>
                    <textarea name="address" id="address" class="form-control"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-12">
                    <label for="problem"><b>Problem</b> *</label>
                    <textarea name="problem" id="problem" class="form-control"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-12">
                    
                    <div class="row">
                        <div class="col-sm-3">
                            <label for="confirmation"><b>Transmission confirmation</b> *</label>
                        </div>

                        <div class="col-sm-9">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="confirmation" class="custom-control-input" id="confirmation">
                                <label class="custom-control-label" for="confirmation">Please check if you confirm the above transmission contents</label>
                            </div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-primary btn-block">SUBMIT</button>
                </div>
            </div>
        </div>

    </form>

@endsection