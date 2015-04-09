/**
 * Created by ruchir on 4/7/2015.
 */

app.controller('SheetsController', ['$scope', '$http', '$state', 'Flash', '$stateParams', '$rootScope',
    function ($scope, $http, $state, Flash, $stateParams, $rootScope) {

        $scope.data = {
            'input_date': null,
            'sheets_id': '',
            'marketing_countries_id': null,
            'marketing_categories_id': null,
            'user_id': ''
        };

        $scope.resetData = function() {
            $scope.data = {
                'input_date': null,
                'sheets_id': '',
                'marketing_countries_id': null,
                'marketing_categories_id': null,
                'user_id': ''
            };


            $http.post('sheets/countries-categories-add', {}).success(function (data) {
                $scope.data.countries = data.countries;
                $scope.data.categories = data.categories;
            }, function (x) {
                Flash.create('danger', 'Server Error');
            });

        };

        $scope.create = function () {
            console.log($scope.data);
            $http.post('sheets/store-add', {
                input_date : $scope.data.input_date,
                marketing_countries_id : $scope.data.marketing_countries_id,
                marketing_categories_id : $scope.data.marketing_categories_id
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

        $scope.getcountries = function () {
            console.log($scope.data);
            $http.post('sheets/countries-categories-view', {}).success(function (data) {
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
