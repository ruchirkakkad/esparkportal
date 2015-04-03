<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3" >Modules</h1>
</div>

<div class="wrapper-md" ng-init="">
      <a href="#/app/modules/create">
      <button class="btn btn-sm btn-primary btn-addon pull-right m-xs">
      <i class="fa fa-plus"></i>Add
      </button>
      </a>

  <div class="panel panel-default">

    <div class="panel-heading">
      Modules
    </div>
    <div class="table-responsive">
      <table ui-jq="dataTable" ui-options="{
          sAjaxSource: 'modules/indexdata',
          aoColumns: [
            { mData: 'module_id' },
            { mData: 'module_name' },
            { mData: 'parent_id' },
            { mData: 'module_url' },
            { mData: 'is_active' },
            { mData: 'is_inmenu' }
          ]
        }" class="table table-striped m-b-none">
        <thead>
          <tr>
            <th  style="width:20%">ID</th>
            <th  style="width:25%">Name</th>
            <th  style="width:25%">Parent Id</th>
            <th  style="width:15%">Module URL</th>
            <th  style="width:15%">Is Active?</th>
            <th  style="width:15%">Is in Menu?</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>
</div>