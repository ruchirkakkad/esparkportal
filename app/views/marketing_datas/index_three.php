<div class="bg-light lter b-b wrapper-md">
    <h1 class="m-n font-thin h3" >Timezone</h1>
</div>

<div class="wrapper-md" ng-init="timezone_wise_data()">
    <div flash-message="5000" ></div>

    <div class="panel panel-default">

        <div class="panel-heading">
<!--            Country :-->
        </div>
        <div class="table-responsive">
            <table ui-jq="dataTable" ui-options="data.options" class="table table-striped m-b-none">
                <thead>
                <tr>
                    <th  style="width:5%">ID</th>
                    <th  style="width:15%">Owner Name</th>
                    <th  style="width:20%">Company Name</th>
                    <th  style="width:10%">Website</th>
                    <th  style="width:10%">Phone</th>
                    <th  style="width:15%">Email</th>
                    <th  style="width:10%">Status</th>
                    <th  style="width:5%">View</th>
                    <th  style="width:10%">Delete</th>
                </tr>
                </thead>
                <tbody>
                <tr role="row" class="odd"><td class="sorting_1">1</td><td>First</td><td>First</td><td>www.first.com</td><td>123123123</td><td>First@First.com</td><td>No Action Yet</td><td><a href="#/app/sheets/edit/OHRkZHY5andBMXNT"><button class="btn m-b-xs btn-sm btn-primary"><i class="fa fa-edit"></i></button></a></td><td><a href="#/app/sheets/delete/OHRkZHY5andBMXNT"><button class="btn btn-sm btn-icon btn-danger"><i class="fa fa-trash-o"></i></button></a></td></tr><tr role="row" class="even"><td class="sorting_1">2</td><td>Second</td><td>second</td><td>http://www.company.co</td><td>9998999845654</td><td>ruchir.kakkad@esparkinfo.com</td><td>No Action Yet</td><td><a href="#/app/sheets/edit/Slc2bUhZMDNWdy9N"><button class="btn m-b-xs btn-sm btn-primary"><i class="fa fa-edit"></i></button></a></td><td><a href="#/app/sheets/delete/Slc2bUhZMDNWdy9N"><button class="btn btn-sm btn-icon btn-danger"><i class="fa fa-trash-o"></i></button></a></td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>