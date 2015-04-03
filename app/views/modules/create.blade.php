<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Add Module</h1>
</div>
<div class="wrapper-md">
  <div ng-controller="ModuleCreateFormController">
    <div class="row">
      <div class="col-sm-6">
        <form name="formValidate" class="form-horizontal form-validation">
          <div class="panel panel-default">
            <div class="panel-heading">
              <strong>Add Module</strong>
            </div>
            <div class="panel-body">                    
              <div class="form-group">
                <label class="col-sm-3 control-label">Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" placeholder="required field" ng-model="module_name" required >
                </div>
              </div>
              <div class="line line-dashed b-b line-lg pull-in"></div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Parent Module</label>
                <div class="col-sm-9">

                  <select class="form-control m-t" ng-init="" ng-model="parent_id" ng-options="key as value for (key , value) in parent_modules">
                        <option value="">Select Parent</option>
                        <?php foreach($modules as $key => $value) { ?>
                            <option value="<?= $key; ?>"><?= $value; ?></option>
                        <?php } ?>
                    </select>
                </div>
              </div>
              <div class="line line-dashed b-b line-lg pull-in"></div>
              <div class="form-group">
                  <label class="col-sm-3 control-label">Module Url</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="required field" ng-model="module_url" required >
                  </div>
              </div>
              <div class="line line-dashed b-b line-lg pull-in"></div>
              <div class="form-group">
                  <label class="col-sm-3 control-label i-checks"></label>
                  <div class="col-sm-9">
                  <label class="checkbox i-checks">
                      <input type="checkbox" ng-true-value="1" ng-false-value="0" ng-model="is_active" checklist-vakue="is_active"><i></i> Is Active?
                  </label>
                  <label class="checkbox i-checks">
                      <input type="checkbox" ng-model="is_inmenu" ng-true-value="1" ng-false-value="0" checklist-vakue="is_inmenu"><i></i> Is in Menu?
                  </label>
                  </div>
                </div>
            <footer class="panel-footer text-right bg-light lter">
              <button type="submit" class="btn btn-success" ng-click="create()">Submit</button>
            </footer>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>