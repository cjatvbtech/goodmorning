@extends('layouts.dashboard')

@section('content')



<!-- <h2 class="page-header">Corp_credit_application</h2> -->

<div class="panel panel-default">
<!--     <div class="panel-heading">
        View Corp_credit_application    </div>
    <div class="panel-body"> -->
                

        <form action="{{ url('/corp_credit_applications') }}" method="POST" class="form-horizontal">


                
        <div class="form-group">
            <label for="id" class="col-sm-3 control-label">Id</label>
            <div class="col-sm-6">
                <input type="text" name="id" id="id" class="form-control" value="{{$model['id'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="brand_new" class="col-sm-3 control-label">Brand New</label>
            <div class="col-sm-6">
                <input type="text" name="brand_new" id="brand_new" class="form-control" value="{{$model['brand_new'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="name_of_business" class="col-sm-3 control-label">Name Of Business</label>
            <div class="col-sm-6">
                <input type="text" name="name_of_business" id="name_of_business" class="form-control" value="{{$model['name_of_business'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="financing_for" class="col-sm-3 control-label">Financing For</label>
            <div class="col-sm-6">
                <input type="text" name="financing_for" id="financing_for" class="form-control" value="{{$model['financing_for'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="purpose" class="col-sm-3 control-label">Purpose</label>
            <div class="col-sm-6">
                <input type="text" name="purpose" id="purpose" class="form-control" value="{{$model['purpose'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="dealer_name" class="col-sm-3 control-label">Dealer Name</label>
            <div class="col-sm-6">
                <input type="text" name="dealer_name" id="dealer_name" class="form-control" value="{{$model['dealer_name'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="cash_price" class="col-sm-3 control-label">Cash Price</label>
            <div class="col-sm-6">
                <input type="text" name="cash_price" id="cash_price" class="form-control" value="{{$model['cash_price'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="sales_discount" class="col-sm-3 control-label">Sales Discount</label>
            <div class="col-sm-6">
                <input type="text" name="sales_discount" id="sales_discount" class="form-control" value="{{$model['sales_discount'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="name_of_user" class="col-sm-3 control-label">Name Of User</label>
            <div class="col-sm-6">
                <input type="text" name="name_of_user" id="name_of_user" class="form-control" value="{{$model['name_of_user'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="downpayment" class="col-sm-3 control-label">Downpayment</label>
            <div class="col-sm-6">
                <input type="text" name="downpayment" id="downpayment" class="form-control" value="{{$model['downpayment'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="amount_finance" class="col-sm-3 control-label">Amount Finance</label>
            <div class="col-sm-6">
                <input type="text" name="amount_finance" id="amount_finance" class="form-control" value="{{$model['amount_finance'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="item_description" class="col-sm-3 control-label">Item Description</label>
            <div class="col-sm-6">
                <input type="text" name="item_description" id="item_description" class="form-control" value="{{$model['item_description'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="terms" class="col-sm-3 control-label">Terms</label>
            <div class="col-sm-6">
                <input type="text" name="terms" id="terms" class="form-control" value="{{$model['terms'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="biz_main_address" class="col-sm-3 control-label">Biz Main Address</label>
            <div class="col-sm-6">
                <input type="text" name="biz_main_address" id="biz_main_address" class="form-control" value="{{$model['biz_main_address'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="biz_telephone_1" class="col-sm-3 control-label">Biz Telephone 1</label>
            <div class="col-sm-6">
                <input type="text" name="biz_telephone_1" id="biz_telephone_1" class="form-control" value="{{$model['biz_telephone_1'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="biz_telephone_2" class="col-sm-3 control-label">Biz Telephone 2</label>
            <div class="col-sm-6">
                <input type="text" name="biz_telephone_2" id="biz_telephone_2" class="form-control" value="{{$model['biz_telephone_2'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="biz_year_of_stay" class="col-sm-3 control-label">Biz Year Of Stay</label>
            <div class="col-sm-6">
                <input type="text" name="biz_year_of_stay" id="biz_year_of_stay" class="form-control" value="{{$model['biz_year_of_stay'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="factory_branch" class="col-sm-3 control-label">Factory Branch</label>
            <div class="col-sm-6">
                <input type="text" name="factory_branch" id="factory_branch" class="form-control" value="{{$model['factory_branch'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="factory_branch_contact_psn_1" class="col-sm-3 control-label">Factory Branch Contact Psn 1</label>
            <div class="col-sm-6">
                <input type="text" name="factory_branch_contact_psn_1" id="factory_branch_contact_psn_1" class="form-control" value="{{$model['factory_branch_contact_psn_1'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="factory_branch_contact_psn_2" class="col-sm-3 control-label">Factory Branch Contact Psn 2</label>
            <div class="col-sm-6">
                <input type="text" name="factory_branch_contact_psn_2" id="factory_branch_contact_psn_2" class="form-control" value="{{$model['factory_branch_contact_psn_2'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="factory_branch_contact_psn_1_pos" class="col-sm-3 control-label">Factory Branch Contact Psn 1 Pos</label>
            <div class="col-sm-6">
                <input type="text" name="factory_branch_contact_psn_1_pos" id="factory_branch_contact_psn_1_pos" class="form-control" value="{{$model['factory_branch_contact_psn_1_pos'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="factory_branch_contact_psn_2_pos" class="col-sm-3 control-label">Factory Branch Contact Psn 2 Pos</label>
            <div class="col-sm-6">
                <input type="text" name="factory_branch_contact_psn_2_pos" id="factory_branch_contact_psn_2_pos" class="form-control" value="{{$model['factory_branch_contact_psn_2_pos'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="type_of_biz" class="col-sm-3 control-label">Type Of Biz</label>
            <div class="col-sm-6">
                <input type="text" name="type_of_biz" id="type_of_biz" class="form-control" value="{{$model['type_of_biz'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="biz_year_of_operation" class="col-sm-3 control-label">Biz Year Of Operation</label>
            <div class="col-sm-6">
                <input type="text" name="biz_year_of_operation" id="biz_year_of_operation" class="form-control" value="{{$model['biz_year_of_operation'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="form_of_biz_operation" class="col-sm-3 control-label">Form Of Biz Operation</label>
            <div class="col-sm-6">
                <input type="text" name="form_of_biz_operation" id="form_of_biz_operation" class="form-control" value="{{$model['form_of_biz_operation'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="biz_years_incorporated" class="col-sm-3 control-label">Biz Years Incorporated</label>
            <div class="col-sm-6">
                <input type="text" name="biz_years_incorporated" id="biz_years_incorporated" class="form-control" value="{{$model['biz_years_incorporated'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="biz_net_total_income_yr" class="col-sm-3 control-label">Biz Net Total Income Yr</label>
            <div class="col-sm-6">
                <input type="text" name="biz_net_total_income_yr" id="biz_net_total_income_yr" class="form-control" value="{{$model['biz_net_total_income_yr'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="biz_net_total_income_mo" class="col-sm-3 control-label">Biz Net Total Income Mo</label>
            <div class="col-sm-6">
                <input type="text" name="biz_net_total_income_mo" id="biz_net_total_income_mo" class="form-control" value="{{$model['biz_net_total_income_mo'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="biz_gross_revenue" class="col-sm-3 control-label">Biz Gross Revenue</label>
            <div class="col-sm-6">
                <input type="text" name="biz_gross_revenue" id="biz_gross_revenue" class="form-control" value="{{$model['biz_gross_revenue'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="biz_net_income" class="col-sm-3 control-label">Biz Net Income</label>
            <div class="col-sm-6">
                <input type="text" name="biz_net_income" id="biz_net_income" class="form-control" value="{{$model['biz_net_income'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="biz_total_assets" class="col-sm-3 control-label">Biz Total Assets</label>
            <div class="col-sm-6">
                <input type="text" name="biz_total_assets" id="biz_total_assets" class="form-control" value="{{$model['biz_total_assets'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="biz_equity" class="col-sm-3 control-label">Biz Equity</label>
            <div class="col-sm-6">
                <input type="text" name="biz_equity" id="biz_equity" class="form-control" value="{{$model['biz_equity'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="created_at" class="col-sm-3 control-label">Created At</label>
            <div class="col-sm-6">
                <input type="text" name="created_at" id="created_at" class="form-control" value="{{$model['created_at'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="updated_at" class="col-sm-3 control-label">Updated At</label>
            <div class="col-sm-6">
                <input type="text" name="updated_at" id="updated_at" class="form-control" value="{{$model['updated_at'] or ''}}" readonly="readonly">
            </div>
        </div>
        
        
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <a class="btn btn-default" href="{{ url('/corp_credit_applications') }}"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
            </div>
        </div>


        </form>

    </div>
</div>







@endsection