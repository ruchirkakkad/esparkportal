/**
 * Created by ruchir on 4/7/2015.
 */

app.controller('MarketingDatasController', ['$scope', '$http', '$state', 'Flash', '$stateParams', '$rootScope',
    function ($scope, $http, $state, Flash, $stateParams, $rootScope) {

        $scope.data = {
            'marketing_datas_id': null,
            'owner_name': '',
            'company_name': null,
            'website': null,
            'phone': null,
            'email': null,
            'marketing_states_id': null,
            'marketing_categories_id': null,
            'user_id': null,
            'leads_statuses_id': null
        };

        $scope.resetData = function() {
            $scope.data = {
                'marketing_datas_id': null,
                'owner_name': '',
                'company_name': null,
                'website': null,
                'phone': null,
                'email': '',
                'marketing_states_id': null,
                'marketing_categories_id': null,
                'user_id': null,
                'leads_statuses_id': null
            };


            $http.post('marketing_datas/states-categories-add/'+ $stateParams.id, {}).success(function (data) {
                $scope.data.states = data.states;
                $scope.data.categories = data.categories;
            }, function (x) {
                Flash.create('danger', 'Server Error');
            });

        };

        $scope.create = function () {
            console.log($scope.data);
            $scope.errors = [];
            $http.post('marketing_datas/store-add', {
                owner_name : $scope.data.owner_name,
                company_name : $scope.data.company_name,
                website : $scope.data.website,
                phone : $scope.data.phone,
                email : $scope.data.email,
                marketing_states_id : $scope.data.marketing_states_id,
                marketing_categories_id : $scope.data.marketing_categories_id
            }).success(function (data) {

                var data = (data);

                if (data.code == '200') {

                    Flash.create('success', data.msg);
                    //$state.go('app.marketing_datas.index');
                }
                if (data.code == '403') {
                    $scope.errors = data.result;
                    //Flash.create('danger', data.msg);
                }
            }, function (x) {
                Flash.create('danger', 'Server Error');
            });
        };

        $scope.getcountries = function () {
            console.log($scope.data);
            $http.post('marketing_datas/countries-add', {}).success(function (data) {
                $scope.data.countries = data.countries;
                $scope.data.categories = data.categories;
            }, function (x) {
                Flash.create('danger', 'Server Error');
            });
        };


        $scope.country_sheetsdata = function () {
            $scope.data.options = {
                    sAjaxSource: 'sheets/country-sheetsdata-view/' + $stateParams.id,
                    aoColumns: [
                        { mData: 'id' },
                        { mData: 'name' },
                        { mData: 'marketing_countries_name' },
                        { mData: 'marketing_categories_name' },
                        { mData: 'edit' },
                        { mData: 'delete' }
                    ]
            };
        };

        $scope.editData = function () {
            $http.post('sheets/find-edit/' + $stateParams.id, {})
                .success(function (data) {
                    $scope.data.sheets_name = data.sheets_name;
                    $scope.data.sheets_id = data.sheets_id;
                });
        };


        $scope.update = function () {


            $http.post('sheets/update-edit/' + $scope.data.sheets_id, {
                sheets_name: $scope.data.sheets_name
            }).success(function (data) {

                var data = (data);

                if (data.code == '200') {

                    Flash.create('success', data.msg);
                    $state.go('app.sheets.index');
                }
                if (data.code == '403') {
                    Flash.create('danger', data.msg);
                }
            }, function (x) {
                Flash.create('danger', 'Server Error');
            });
        };

    }]);
