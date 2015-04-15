<div class="bg-light lter b-b wrapper-md">
    <h1 class="m-n font-thin h3">Timezone</h1>
</div>
<div class="row">
    <div class="col-md-9"></div>
    <div class="col-md-3">
        <select ng-model="filter_status" ng-change="filter_data(filter_status)" ng-options="lead.leads_statuses_id as lead.leads_statuses_name for lead in lead_status">
            <option value=''>Select Status</option>
        </select>
        <button type="submit" ng-click="filter_data(filter_status)" class="btn btn-sm btn-primary">Search</button>

        <button type="button" ng-csv="getArray()" csv-header="['ID', 'Owner Name', 'Company Name', 'Website', 'Phone', 'Email', 'Status']" filename="test.csv">Export</button>
    </div>
</div>
<div class="wrapper-md" ng-init="timezone_wise_data()">
    <div flash-message="5000"></div>

    <div class="panel panel-default">

        <div class="panel-heading">
            <!--            Country :-->
        </div>
        <div class="table-responsive">
            <table id="sample_1" ui-jq="dataTable" class="table table-striped m-b-none">
                <thead>
                <tr>
                    <th style="width:5%">ID</th>
                    <th style="width:15%">Owner Name</th>
                    <th style="width:20%">Company Name</th>
                    <th style="width:10%">Website</th>
                    <th style="width:10%">Phone</th>
                    <th style="width:15%">Email</th>
                    <th style="width:10%">Status</th>
                    <th style="width:5%">Note</th>
                    <th style="width:10%">Edit</th>
                </tr>
                </thead>
                <tbody>
                <tr ng-repeat="data12 in data.aaData ">
<!--                <tr ng-repeat="data12 in data.aaData | filter : {leads_statuses_id : filter_status}">-->
                    <td>{{ data12.marketing_datas_id }}</td>
                    <td>{{ data12.owner_name }}</td>
                    <td>{{ data12.company_name }}</td>
                    <td>{{ data12.website }}</td>
                    <td>{{ data12.phone }}</td>
                    <td>{{ data12.email }}</td>
                    <td>
                        <select ng-model="data12.leads_statuses_id" ng-change="changeStatus(data12.marketing_datas_id_encrpt,data12.leads_statuses_id)" ng-options="lead.leads_statuses_id as lead.leads_statuses_name for lead in lead_status">
                            <option value="">Select Status</option>
                        </select>
                    </td>
                    <td>
                        <a href="#/app/sheets/edit/{{ data12.marketing_datas_id_encrpt }}">
                            <button class="btn btn-rounded btn-sm btn-icon btn-primary"><i class="fa fa-search-plus"></i></button>
                        </a>
                    </td>
                    <td>
                        <a href="#/app/sheets/delete/{{ data12.marketing_datas_id_encrpt }}">
                            <button class="btn btn-sm btn-icon btn-danger"><i class="fa fa-edit"></i></button>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>

<script>
    $(window).load(function () {
        TableAdvanced.init();
//        timezone_wise_data();
    });

</script>