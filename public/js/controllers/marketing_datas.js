/**
 * Created by ruchir on 4/7/2015.
 */

app.controller('MarketingDatasController', ['$scope', '$http', '$state', 'Flash', '$stateParams', '$rootScope', '$interval',
    function ($scope, $http, $state, Flash, $stateParams, $rootScope, $interval) {

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

        $scope.date = new Date();

        $scope.resetData = function () {
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


            $http.post('marketing_datas/states-categories-add/' + $stateParams.id, {}).success(function (data) {
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
                owner_name: $scope.data.owner_name,
                company_name: $scope.data.company_name,
                website: $scope.data.website,
                phone: $scope.data.phone,
                email: $scope.data.email,
                marketing_states_id: $scope.data.marketing_states_id,
                marketing_categories_id: $scope.data.marketing_categories_id
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

        $scope.getcountriesview = function () {
            $http.post('marketing_datas/countries-view', {}).success(function (data) {
                $scope.data.countries = data.countries;
                $scope.data.categories = data.categories;
            }, function (x) {
                Flash.create('danger', 'Server Error');
            });
        };
        var timer;
        $scope.gettimezonesview = function () {
            $http.post('marketing_datas/timezones-view/' + $stateParams.id, {}).success(function (data) {
                $scope.data.timezones = data.timezones;
                //$scope.data.categories = data.categories;

                $interval.cancel(timer);
                timer = $interval(function () {
                    angular.forEach($scope.data.timezones, function(value, key) {
                        $scope.data.timezones[key].timezones_time++;
                        $scope.data.timezones[key].timezones_time1 = new Date($scope.data.timezones[key].timezones_time *1000);
                    });
                    $scope.date = new Date();
                }, 1000);

                angular.forEach($scope.data.timezones, function(value, key) {
                    $scope.data.timezones[key].timezones_time1 = new Date($scope.data.timezones[key].timezones_time *1000);
                });



            }, function (x) {
                Flash.create('danger', 'Server Error');
            });
        };


        $scope.timezone_wise_data = function () {
            $scope.data.options = {
                sAjaxSource: 'marketing_datas/timezone-wise-data-view/' + $stateParams.id,
                aoColumns: [
                    {mData: 'marketing_datas_id'},
                    {mData: 'owner_name'},
                    {mData: 'company_name'},
                    {mData: 'website'},
                    {mData: 'phone'},
                    {mData: 'email'},
                    {mData: 'leads_statuses_id'},
                    {mData: 'edit'},
                    {mData: 'delete'}
                ]
            };
        };

        //$scope.editData = function () {
        //    $http.post('sheets/find-edit/' + $stateParams.id, {})
        //        .success(function (data) {
        //            $scope.data.sheets_name = data.sheets_name;
        //            $scope.data.sheets_id = data.sheets_id;
        //        });
        //};
        //
        //
        //$scope.update = function () {
        //
        //
        //    $http.post('sheets/update-edit/' + $scope.data.sheets_id, {
        //        sheets_name: $scope.data.sheets_name
        //    }).success(function (data) {
        //
        //        var data = (data);
        //
        //        if (data.code == '200') {
        //
        //            Flash.create('success', data.msg);
        //            $state.go('app.sheets.index');
        //        }
        //        if (data.code == '403') {
        //            Flash.create('danger', data.msg);
        //        }
        //    }, function (x) {
        //        Flash.create('danger', 'Server Error');
        //    });
        //};

    }]);