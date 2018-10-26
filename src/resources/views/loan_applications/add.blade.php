@extends('layouts.app')

@section('page-title', 'CREDIT APPLICATION')

@section('page-id', 'loanApplication')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        Add/Modify Loan Application
    </div>

    <div class="panel-body">
                
        <form action="{{ url('/loan_applications'.( isset($model) ? "/" . $model->id : "")) }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            @if (isset($model))
                <input type="hidden" name="_method" value="PATCH">
            @endif

            <div class="form-group">
                <label for="brand_new" class="col-sm-3 control-label">Brand New</label>
                <div class="col-sm-2">
                    <input type="number" name="brand_new" id="brand_new" class="form-control" value="{{$model['brand_new'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" name="email" id="email" class="form-control" value="{{$model['email'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="brand" class="col-sm-3 control-label">Brand</label>
                <div class="col-sm-6">
                    <input type="text" name="brand" id="brand" class="form-control" value="{{$model['brand'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="type" class="col-sm-3 control-label">Type</label>
                <div class="col-sm-6">
                    <input type="text" name="type" id="type" class="form-control" value="{{$model['type'] or ''}}">
                </div>
            </div>
            <div class="form-group">
                <label for="year" class="col-sm-3 control-label">Year</label>
                <div class="col-sm-6">
                    <input type="text" name="year" id="year" class="form-control" value="{{$model['year'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="model" class="col-sm-3 control-label">Model</label>
                <div class="col-sm-6">
                    <input type="text" name="model" id="model" class="form-control" value="{{$model['model'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="cash_price" class="col-sm-3 control-label">Cash Price</label>
                <div class="col-sm-6">
                    <input type="text" name="cash_price" id="cash_price" class="form-control" value="{{$model['cash_price'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="down_payment" class="col-sm-3 control-label">Down Payment</label>
                <div class="col-sm-6">
                    <input type="text" name="down_payment" id="down_payment" class="form-control" value="{{$model['down_payment'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="amount_finance" class="col-sm-3 control-label">Amount Finance</label>
                <div class="col-sm-6">
                    <input type="text" name="amount_finance" id="amount_finance" class="form-control" value="{{$model['amount_finance'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="term" class="col-sm-3 control-label">Term</label>
                <div class="col-sm-6">
                    <input type="text" name="term" id="term" class="form-control" value="{{$model['term'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="accessories_attachment" class="col-sm-3 control-label">Accessories Attachment</label>
                <div class="col-sm-6">
                    <input type="text" name="accessories_attachment" id="accessories_attachment" class="form-control" value="{{$model['accessories_attachment'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="borrower_name" class="col-sm-3 control-label">Borrower Name</label>
                <div class="col-sm-6">
                    <input type="text" name="borrower_name" id="borrower_name" class="form-control" value="{{$model['borrower_name'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="cellphone_number" class="col-sm-3 control-label">Cellphone Number</label>
                <div class="col-sm-6">
                    <input type="text" name="cellphone_number" id="cellphone_number" class="form-control" value="{{$model['cellphone_number'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="marital_status" class="col-sm-3 control-label">Marital Status</label>
                <div class="col-sm-6">
                    <input type="text" name="marital_status" id="marital_status" class="form-control" value="{{$model['marital_status'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="highest_education" class="col-sm-3 control-label">Highest Education</label>
                <div class="col-sm-6">
                    <input type="text" name="highest_education" id="highest_education" class="form-control" value="{{$model['highest_education'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="home_address" class="col-sm-3 control-label">Home Address</label>
                <div class="col-sm-6">
                    <input type="text" name="home_address" id="home_address" class="form-control" value="{{$model['home_address'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="telephone_bumber" class="col-sm-3 control-label">Telephone Bumber</label>
                <div class="col-sm-6">
                    <input type="text" name="telephone_number" id="telephone_number" class="form-control" value="{{$model['telephone_number'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="years_in_above_address" class="col-sm-3 control-label">Years In Above Address</label>
                <div class="col-sm-6">
                    <input type="text" name="years_in_above_address" id="years_in_above_address" class="form-control" value="{{$model['years_in_above_address'] or ''}}">
                </div>
            </div>
                                                                                                            <div class="form-group">
                <label for="own" class="col-sm-3 control-label">Own</label>
                <div class="col-sm-2">
                    <input type="number" name="own" id="own" class="form-control" value="{{$model['own'] or ''}}">
                </div>
            </div>
                                                                                    <div class="form-group">
                <label for="monthly_amortization" class="col-sm-3 control-label">Monthly Amortization</label>
                <div class="col-sm-6">
                    <input type="text" name="monthly_amortization" id="monthly_amortization" class="form-control" value="{{$model['monthly_amortization'] or ''}}">
                </div>
            </div>
                                                                                                            <div class="form-group">
                <label for="rent" class="col-sm-3 control-label">Rent</label>
                <div class="col-sm-2">
                    <input type="number" name="rent" id="rent" class="form-control" value="{{$model['rent'] or ''}}">
                </div>
            </div>
                                                                                    <div class="form-group">
                <label for="monthly_rental" class="col-sm-3 control-label">Monthly Rental</label>
                <div class="col-sm-6">
                    <input type="text" name="monthly_rental" id="monthly_rental" class="form-control" value="{{$model['monthly_rental'] or ''}}">
                </div>
            </div>
                                                                                                            <div class="form-group">
                <label for="living_with_relative" class="col-sm-3 control-label">Living With Relative</label>
                <div class="col-sm-2">
                    <input type="number" name="living_with_relative" id="living_with_relative" class="form-control" value="{{$model['living_with_relative'] or ''}}">
                </div>
            </div>
                                                                                    <div class="form-group">
                <label for="previous_address" class="col-sm-3 control-label">Previous Address</label>
                <div class="col-sm-6">
                    <input type="text" name="previous_address" id="previous_address" class="form-control" value="{{$model['previous_address'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="office_address" class="col-sm-3 control-label">Office Address</label>
                <div class="col-sm-6">
                    <input type="text" name="office_address" id="office_address" class="form-control" value="{{$model['office_address'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="position" class="col-sm-3 control-label">Position</label>
                <div class="col-sm-6">
                    <input type="text" name="position" id="position" class="form-control" value="{{$model['position'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="length_of_stay" class="col-sm-3 control-label">Length Of Stay</label>
                <div class="col-sm-6">
                    <input type="text" name="length_of_stay" id="length_of_stay" class="form-control" value="{{$model['length_of_stay'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="acr_no" class="col-sm-3 control-label">Acr No</label>
                <div class="col-sm-6">
                    <input type="text" name="acr_no" id="acr_no" class="form-control" value="{{$model['acr_no'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="nationality" class="col-sm-3 control-label">Nationality</label>
                <div class="col-sm-6">
                    <input type="text" name="nationality" id="nationality" class="form-control" value="{{$model['nationality'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="sss_gsis" class="col-sm-3 control-label">Sss Gsis</label>
                <div class="col-sm-6">
                    <input type="text" name="sss_gsis" id="sss_gsis" class="form-control" value="{{$model['sss_gsis'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="tin" class="col-sm-3 control-label">Tin</label>
                <div class="col-sm-6">
                    <input type="text" name="tin" id="tin" class="form-control" value="{{$model['tin'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="passport" class="col-sm-3 control-label">Passport</label>
                <div class="col-sm-6">
                    <input type="text" name="passport" id="passport" class="form-control" value="{{$model['passport'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="res_cert" class="col-sm-3 control-label">Res Cert</label>
                <div class="col-sm-6">
                    <input type="text" name="res_cert" id="res_cert" class="form-control" value="{{$model['res_cert'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="driver_license" class="col-sm-3 control-label">Driver License</label>
                <div class="col-sm-6">
                    <input type="text" name="driver_license" id="driver_license" class="form-control" value="{{$model['driver_license'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="number_of_dependents" class="col-sm-3 control-label">Number Of Dependents</label>
                <div class="col-sm-6">
                    <input type="text" name="number_of_dependents" id="number_of_dependents" class="form-control" value="{{$model['number_of_dependents'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="dependents_ages" class="col-sm-3 control-label">Dependents Ages</label>
                <div class="col-sm-6">
                    <input type="text" name="dependents_ages" id="dependents_ages" class="form-control" value="{{$model['dependents_ages'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="how_many_in_elem" class="col-sm-3 control-label">How Many In Elem</label>
                <div class="col-sm-6">
                    <input type="text" name="how_many_in_elem" id="how_many_in_elem" class="form-control" value="{{$model['how_many_in_elem'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="how_many_in_high_school" class="col-sm-3 control-label">How Many In High School</label>
                <div class="col-sm-6">
                    <input type="text" name="how_many_in_high_school" id="how_many_in_high_school" class="form-control" value="{{$model['how_many_in_high_school'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="how_many_in_college" class="col-sm-3 control-label">How Many In College</label>
                <div class="col-sm-6">
                    <input type="text" name="how_many_in_college" id="how_many_in_college" class="form-control" value="{{$model['how_many_in_college'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="expenses" class="col-sm-3 control-label">Expenses</label>
                <div class="col-sm-6">
                    <input type="text" name="expenses" id="expenses" class="form-control" value="{{$model['expenses'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="name_of_spouse_or_co_maker" class="col-sm-3 control-label">Name Of Spouse Or Co Maker</label>
                <div class="col-sm-6">
                    <input type="text" name="name_of_spouse_or_co_maker" id="name_of_spouse_or_co_maker" class="form-control" value="{{$model['name_of_spouse_or_co_maker'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="cellphone_of_spouse_or_co_maker" class="col-sm-3 control-label">Cellphone Of Spouse Or Co Maker</label>
                <div class="col-sm-6">
                    <input type="text" name="cellphone_of_spouse_or_co_maker" id="cellphone_of_spouse_or_co_maker" class="form-control" value="{{$model['cellphone_of_spouse_or_co_maker'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="place_of_birth_of_spouse_or_co_maker" class="col-sm-3 control-label">Place Of Birth Of Spouse Or Co Maker</label>
                <div class="col-sm-6">
                    <input type="text" name="place_of_birth_of_spouse_or_co_maker" id="place_of_birth_of_spouse_or_co_maker" class="form-control" value="{{$model['place_of_birth_of_spouse_or_co_maker'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="dob_of_spouse_or_co_maker" class="col-sm-3 control-label">Dob Of Spouse Or Co Maker</label>
                <div class="col-sm-6">
                    <input type="text" name="dob_of_spouse_or_co_maker" id="dob_of_spouse_or_co_maker" class="form-control" value="{{$model['dob_of_spouse_or_co_maker'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="age_of_spouse_or_co_maker" class="col-sm-3 control-label">Age Of Spouse Or Co Maker</label>
                <div class="col-sm-6">
                    <input type="text" name="age_of_spouse_or_co_maker" id="age_of_spouse_or_co_maker" class="form-control" value="{{$model['age_of_spouse_or_co_maker'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="employer_of_spouse_or_co_maker" class="col-sm-3 control-label">Employer Of Spouse Or Co Maker</label>
                <div class="col-sm-6">
                    <input type="text" name="employer_of_spouse_or_co_maker" id="employer_of_spouse_or_co_maker" class="form-control" value="{{$model['employer_of_spouse_or_co_maker'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="position_of_spouse_or_co_maker" class="col-sm-3 control-label">Position Of Spouse Or Co Maker</label>
                <div class="col-sm-6">
                    <input type="text" name="position_of_spouse_or_co_maker" id="position_of_spouse_or_co_maker" class="form-control" value="{{$model['position_of_spouse_or_co_maker'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="office_address_of_spouse_or_co_maker" class="col-sm-3 control-label">Office Address Of Spouse Or Co Maker</label>
                <div class="col-sm-6">
                    <input type="text" name="office_address_of_spouse_or_co_maker" id="office_address_of_spouse_or_co_maker" class="form-control" value="{{$model['office_address_of_spouse_or_co_maker'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="office_phone_of_spouse_or_co_maker" class="col-sm-3 control-label">Office Phone Of Spouse Or Co Maker</label>
                <div class="col-sm-6">
                    <input type="text" name="office_phone_of_spouse_or_co_maker" id="office_phone_of_spouse_or_co_maker" class="form-control" value="{{$model['office_phone_of_spouse_or_co_maker'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="length_service_of_spouse_or_co_maker" class="col-sm-3 control-label">Length Service Of Spouse Or Co Maker</label>
                <div class="col-sm-6">
                    <input type="text" name="length_service_of_spouse_or_co_maker" id="length_service_of_spouse_or_co_maker" class="form-control" value="{{$model['length_service_of_spouse_or_co_maker'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="other_source_of_income" class="col-sm-3 control-label">Other Source Of Income</label>
                <div class="col-sm-6">
                    <input type="text" name="other_source_of_income" id="other_source_of_income" class="form-control" value="{{$model['other_source_of_income'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="other_source_of_income2" class="col-sm-3 control-label">Other Source Of Income2</label>
                <div class="col-sm-6">
                    <input type="text" name="other_source_of_income2" id="other_source_of_income2" class="form-control" value="{{$model['other_source_of_income2'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="own_car" class="col-sm-3 control-label">Own Car</label>
                <div class="col-sm-6">
                    <input type="text" name="own_car" id="own_car" class="form-control" value="{{$model['own_car'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="car_mortgaged" class="col-sm-3 control-label">Car Mortgaged</label>
                <div class="col-sm-6">
                    <input type="text" name="car_mortgaged" id="car_mortgaged" class="form-control" value="{{$model['car_mortgaged'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="own_real_estate" class="col-sm-3 control-label">Own Real Estate</label>
                <div class="col-sm-6">
                    <input type="text" name="own_real_estate" id="own_real_estate" class="form-control" value="{{$model['own_real_estate'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="real_estate_mortgage" class="col-sm-3 control-label">Real Estate Mortgage</label>
                <div class="col-sm-6">
                    <input type="text" name="real_estate_mortgage" id="real_estate_mortgage" class="form-control" value="{{$model['real_estate_mortgage'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="creditor" class="col-sm-3 control-label">Creditor</label>
                <div class="col-sm-6">
                    <input type="text" name="creditor" id="creditor" class="form-control" value="{{$model['creditor'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="creditor_address" class="col-sm-3 control-label">Creditor Address</label>
                <div class="col-sm-6">
                    <input type="text" name="creditor_address" id="creditor_address" class="form-control" value="{{$model['creditor_address'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="credit_security" class="col-sm-3 control-label">Credit Security</label>
                <div class="col-sm-6">
                    <input type="text" name="credit_security" id="credit_security" class="form-control" value="{{$model['credit_security'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="credit_maturity_date" class="col-sm-3 control-label">Credit Maturity Date</label>
                <div class="col-sm-6">
                    <input type="text" name="credit_maturity_date" id="credit_maturity_date" class="form-control" value="{{$model['credit_maturity_date'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="credit_original_amount" class="col-sm-3 control-label">Credit Original Amount</label>
                <div class="col-sm-6">
                    <input type="text" name="credit_original_amount" id="credit_original_amount" class="form-control" value="{{$model['credit_original_amount'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="credit_outstanding_balance" class="col-sm-3 control-label">Credit Outstanding Balance</label>
                <div class="col-sm-6">
                    <input type="text" name="credit_outstanding_balance" id="credit_outstanding_balance" class="form-control" value="{{$model['credit_outstanding_balance'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="credit_monthly_amortization" class="col-sm-3 control-label">Credit Monthly Amortization</label>
                <div class="col-sm-6">
                    <input type="text" name="credit_monthly_amortization" id="credit_monthly_amortization" class="form-control" value="{{$model['credit_monthly_amortization'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="cc_company" class="col-sm-3 control-label">Cc Company</label>
                <div class="col-sm-6">
                    <input type="text" name="cc_company" id="cc_company" class="form-control" value="{{$model['cc_company'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="cc_number" class="col-sm-3 control-label">Cc Number</label>
                <div class="col-sm-6">
                    <input type="text" name="cc_number" id="cc_number" class="form-control" value="{{$model['cc_number'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="cc_member_since" class="col-sm-3 control-label">Cc Member Since</label>
                <div class="col-sm-6">
                    <input type="text" name="cc_member_since" id="cc_member_since" class="form-control" value="{{$model['cc_member_since'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="cc_expiry_date" class="col-sm-3 control-label">Cc Expiry Date</label>
                <div class="col-sm-6">
                    <input type="text" name="cc_expiry_date" id="cc_expiry_date" class="form-control" value="{{$model['cc_expiry_date'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="cc_limit" class="col-sm-3 control-label">Cc Limit</label>
                <div class="col-sm-6">
                    <input type="text" name="cc_limit" id="cc_limit" class="form-control" value="{{$model['cc_limit'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="cc_outstanding_bal" class="col-sm-3 control-label">Cc Outstanding Bal</label>
                <div class="col-sm-6">
                    <input type="text" name="cc_outstanding_bal" id="cc_outstanding_bal" class="form-control" value="{{$model['cc_outstanding_bal'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="cc_monthly_amortization" class="col-sm-3 control-label">Cc Monthly Amortization</label>
                <div class="col-sm-6">
                    <input type="text" name="cc_monthly_amortization" id="cc_monthly_amortization" class="form-control" value="{{$model['cc_monthly_amortization'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="saving_account_name" class="col-sm-3 control-label">Saving Account Name</label>
                <div class="col-sm-6">
                    <input type="text" name="saving_account_name" id="saving_account_name" class="form-control" value="{{$model['saving_account_name'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="saving_account_branch" class="col-sm-3 control-label">Saving Account Branch</label>
                <div class="col-sm-6">
                    <input type="text" name="saving_account_branch" id="saving_account_branch" class="form-control" value="{{$model['saving_account_branch'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="saving_account_number" class="col-sm-3 control-label">Saving Account Number</label>
                <div class="col-sm-6">
                    <input type="text" name="saving_account_number" id="saving_account_number" class="form-control" value="{{$model['saving_account_number'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="current_account_name" class="col-sm-3 control-label">Current Account Name</label>
                <div class="col-sm-6">
                    <input type="text" name="current_account_name" id="current_account_name" class="form-control" value="{{$model['current_account_name'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="current_account_branch" class="col-sm-3 control-label">Current Account Branch</label>
                <div class="col-sm-6">
                    <input type="text" name="current_account_branch" id="current_account_branch" class="form-control" value="{{$model['current_account_branch'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="current_account_number" class="col-sm-3 control-label">Current Account Number</label>
                <div class="col-sm-6">
                    <input type="text" name="current_account_number" id="current_account_number" class="form-control" value="{{$model['current_account_number'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="cc_name_other" class="col-sm-3 control-label">Cc Name Other</label>
                <div class="col-sm-6">
                    <input type="text" name="cc_name_other" id="cc_name_other" class="form-control" value="{{$model['cc_name_other'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="cc_number_other" class="col-sm-3 control-label">Cc Number Other</label>
                <div class="col-sm-6">
                    <input type="text" name="cc_number_other" id="cc_number_other" class="form-control" value="{{$model['cc_number_other'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="client_or_supplier_name" class="col-sm-3 control-label">Client Or Supplier Name</label>
                <div class="col-sm-6">
                    <input type="text" name="client_or_supplier_name" id="client_or_supplier_name" class="form-control" value="{{$model['client_or_supplier_name'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="client_or_supplier_contact_person" class="col-sm-3 control-label">Client Or Supplier Contact Person</label>
                <div class="col-sm-6">
                    <input type="text" name="client_or_supplier_contact_person" id="client_or_supplier_contact_person" class="form-control" value="{{$model['client_or_supplier_contact_person'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="client_or_supplier_contact_number" class="col-sm-3 control-label">Client Or Supplier Contact Number</label>
                <div class="col-sm-6">
                    <input type="text" name="client_or_supplier_contact_number" id="client_or_supplier_contact_number" class="form-control" value="{{$model['client_or_supplier_contact_number'] or ''}}">
                </div>
            </div>
                                                                                                                                   
                        
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-plus"></i> Save
                    </button> 
                    <a class="btn btn-default" href="{{ url('/loan_applications') }}"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
                </div>
            </div>
        </form>

    </div>
</div>






@endsection