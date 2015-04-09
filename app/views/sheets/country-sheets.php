<div class="bg-light lter b-b wrapper-md">
    <h1 class="m-n font-thin h3" >Sheets</h1>
</div>

<div class="wrapper-md" ng-init="country_sheetsdata()">
    <div flash-message="5000" ></div>
<!--    <a href="#/app/marketing_states/create">-->
<!--        <button class="btn btn-sm btn-primary btn-addon pull-right m-xs">-->
<!--            <i class="fa fa-plus"></i>Add-->
<!--        </button>-->
<!--    </a>-->

    <div class="panel panel-default">

        <div class="panel-heading">
            Country :
        </div>
        <div class="table-responsive">
            <table ui-jq="dataTable" ui-options="data.options" class="table table-striped m-b-none">
                <thead>
                <tr>
                    <th  style="width:10%">ID</th>
                    <th  style="width:20%">Name</th>
                    <th  style="width:20%">Country</th>
                    <th  style="width:20%">Category</th>
                    <th  style="width:15%">View</th>
                    <th  style="width:15%">Delete</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>