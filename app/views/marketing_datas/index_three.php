<div class="bg-light lter b-b wrapper-md">
    <h1 class="m-n font-thin h3">Timezone</h1>
</div>
<div class="row">
    <div class="col-md-9"></div>
    <div class="col-md-3">
        <select ng-model="filter_status" ng-change="filter_data(filter_status)" ng-options="lead.leads_statuses_id as lead.leads_statuses_name for lead in lead_status">
            <option value=''>Select Status</option>
        </select>
        <button type="submit" ng-click="changeStatus()" class="btn btn-sm btn-primary">Search</button>

        <button type="button" ng-csv="getArray()" csv-header="['ID', 'Owner Name', 'Company Name', 'Website', 'Phone', 'Email', 'Status']" filename="test.csv">Export</button>
        <a ng-click="changeStatus()">sdfsf</a>
    </div>
</div>
<div class="wrapper-md" ng-init="timezone_wise_data()">
    <div flash-message="5000"></div>

    <div class="panel panel-default">

        <div class="panel-heading">
            <!--Country :-->
        </div>
        <div class="table-responsive">
            <table id="sample_1" ui-jq="dataTable" ui-options="data.options" class="table table-striped m-b-none">
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
                </tbody>
            </table>

        </div>
    </div>


    <div ng-controller="WithOptionsCtrl as app">
        <table datatable="" dt-options="app.dtOptions" dt-column-defs="app.dtColumnDefs" class="table table-striped m-b-none ">
            <thead>
            <tr>
                <th>ID</th>
                <th>First name</th>
                <th>Last name</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Foo</td>
                <td>Bar</td>
            </tr>
            <tr>
                <td>123</td>
                <td>Someone</td>
                <td>Youknow</td>
            </tr>
            <tr>
                <td>987</td>
                <td>Iamout</td>
                <td ng-click="changeStatus()">Ofinspiration</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>



<script>
    $(document).ready(function () {
        TableAdvanced.init();
    });
    app.controller('WithOptionsCtrl', WithOptionsCtrl);

    function WithOptionsCtrl(DTOptionsBuilder, DTColumnDefBuilder) {
        var vm = this;
        vm.dtOptions = DTOptionsBuilder.newOptions()
            .withPaginationType('full_numbers')
            .withDisplayLength(3);
//            .withDOM('pitrfl');
        vm.dtColumnDefs = [
            DTColumnDefBuilder.newColumnDef(0),
            DTColumnDefBuilder.newColumnDef(1),
            DTColumnDefBuilder.newColumnDef(2).notSortable()
        ];
    }

</script>