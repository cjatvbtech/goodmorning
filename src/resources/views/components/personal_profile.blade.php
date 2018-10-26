
            <table class="table table-bordered">
                <thead>
                </thead>
                <tbody>
                <tr>
                    <td style="width:35%">Name</td>
                    <td>{{$client->name}}</td>
                </tr>
                <tr>
                    <td>Celphone Number</td>
                    <td>{{@$client->profile->cellphone_number }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{$client->email}}</td>
                </tr>
                <tr>
                    <td>Home Address</td>
                    <td>{{@$client->profile->home_address}}</td>
                </tr>
                <tr>
                    <td>Office Address</td>
                    <td>{{@$client->profile->office_address}}</td>
                </tr>
                <tr>
                    <td>Date Of Birth</td>
                    <td>{{@$client->profile->dob}}</td>
                </tr>
                <tr>
                    <td>Place Of Birth</td>
                    <td>{{@$client->profile->pob}}</td>
                </tr>
                <tr>
                    <td>SSS / GSIS Number</td>
                    <td>{{@$client->profile->sss_gsis}}</td>
                </tr>
                <tr>
                    <td>TIN Number</td>
                    <td>{{@$client->profile->tin}}</td>
                </tr>
                <tr>
                    <td>Driver's License</td>
                    <td>{{@$client->profile->driver_license}}</td>
                </tr>
                <tr>
                    <td>Passport Number</td>
                    <td>{{@$client->profile->passport_number}}</td>
                </tr>
                <tr>
                    <td>Marital Status</td>
                    <td>{{@$client->profile->marital_status}}</td>
                </tr>
                </tbody>
            </table>
      