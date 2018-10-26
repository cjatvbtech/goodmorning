@extends('layouts.app')
@section('content')
    <div style="margin-bottom: 20px">
        <a href="{{route('clients-index')}}" class="btn btn-default">Back To Client List</a>
    </div>
    <div class="" id="v-app">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Personal Information</h3>
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <tr>
                        <td width="200px" nowrap>Name</td>
                        <td>@{{client.user.name}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>@{{client.user.email}}</td>
                    </tr>
                    <tr>
                        <td>Home Address</td>
                        <td>@{{client.profile.home_address}}</td>
                    </tr>
                    <tr>
                        <td>Office Address</td>
                        <td>@{{client.profile.office_address}}</td>
                    </tr>
                    <tr>
                        <td>Cellphone</td>
                        <td>@{{client.profile.cellphone_number}}</td>
                    </tr>
                    <tr>
                        <td>Date of birth</td>
                        <td>@{{client.profile.dob}}</td>
                    </tr>
                    <tr>
                        <td>Place of birth</td>
                        <td>@{{client.profile.pob}}</td>
                    </tr>
                    <tr>
                        <td>SSS / GSIS</td>
                        <td>@{{client.profile.sss_gsis}}</td>
                    </tr>
                    <tr>
                        <td>TIN</td>
                        <td>@{{client.profile.tin}}</td>
                    </tr>
                    <tr>
                        <td>Driver's License</td>
                        <td>@{{client.profile.driver_license}}</td>
                    </tr>
                    <tr>
                        <td>Passport</td>
                        <td>@{{client.profile.passport}}</td>
                    </tr>
                    <tr>
                        <td>Marital Status</td>
                        <td>@{{client.profile.marital_status}}</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Spouse or Co-Maker Information</h3>
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <tr>
                        <td width="200px" nowrap>Name</td>
                        <td>@{{client.profile.comakers.name}}</td>
                    </tr>
                    <tr>
                        <td>Relationship</td>
                        <td>@{{client.profile.comakers.relationship}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>@{{client.profile.comakers.email}}</td>
                    </tr>
                    <tr>
                        <td>Date of Brith</td>
                        <td>@{{client.profile.comakers.dob}}</td>
                    </tr>
                    <tr>
                        <td>Place of Brith</td>
                        <td>@{{client.profile.comakers.pob}}</td>
                    </tr>
                    <tr>
                        <td>Cellphone</td>
                        <td>@{{client.profile.comakers.cellphone}}</td>
                    </tr>
                    <tr>
                        <td>Spouse/Co-Maker's job position</td>
                        <td>@{{client.profile.comakers.position}}</td>
                    </tr>
                    <tr>
                        <td>Spouse/Co-Maker's length of service</td>
                        <td>@{{client.profile.comakers.length_of_service}}</td>
                    </tr>
                    <tr>
                        <td>Employer</td>
                        <td>@{{client.profile.comakers.employer}}</td>
                    </tr>
                    <tr>
                        <td>Employer's Address</td>
                        <td>@{{client.profile.comakers.employer_address}}</td>
                    </tr>
                    <tr>
                        <td>Employer's Phone</td>
                        <td>@{{client.profile.comakers.employer_phone}}</td>
                    </tr>

                </table>
            </div>

        </div>


        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Bank Accounts</h3>
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <th>Account Type</th>
                    <th>Bank Name</th>
                    <th>Account Number</th>

                    <tr v-for="account in client.profile.bank_accounts">
                        <td>@{{account.type}}</td>
                        <td>@{{account.bank}}</td>
                        <td>@{{account.account_number}}</td>
                    </tr>

                </table>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Trade References</h3>
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <th>Client or Supplier</th>
                    <th>Contact Person</th>
                    <th>Contact Numberr</th>

                    <tr v-for="ref in client.profile.trade_references">
                        <td>@{{ref.client_name}}</td>
                        <td>@{{ref.contact_person}}</td>
                        <td>@{{ref.contact_number}}</td>
                    </tr>

                </table>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Uploaded Requirements</h3>
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <th>Type</th>
                    <th>Preview</th>

                    <tr v-for="req in client.profile.uploaded_requirements">
                        <td>@{{req.type}}</td>
                        <td><img v-bind:src="'/'+req.path"></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Other Source Of Income</h3>
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <th>Source</th>
                    <tr v-for="income in client.profile.source_of_income">
                        <td>@{{income.source}}</td>
                    </tr>
                </table>
            </div>
        </div>
        @{{client.profile.source_of_income}}
    </div>
@endsection

@section('otherJSLibrary')
    <script src="{{asset('/js/vendor/vue.js')}}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        var app = new Vue({
            el: '#v-app',
            data: {
                client: {}
            },
            mounted: function () {

                axios.get('{{route('api-client-show',['id'=>$client->id])}}')
                    .then(function (response) {
                        console.log(response.data);
                        app.client = response.data;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        });
    </script>
@endsection