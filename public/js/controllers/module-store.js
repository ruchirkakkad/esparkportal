'use strict';

/* Controllers */
// signin controller
app.controller('ModuleCreateFormController', ['$scope', '$http', '$state',
    function ($scope, $http, $state) {

        $scope.module_name = '';
        $scope.parent_id = '';
        $scope.module_url = '';
        $scope.is_active = 1;
        $scope.is_inmenu = 1;


        $scope.parent_modules;

        $http.post('modules/parentdata', {module_name: $scope.module_name, parent_id: $scope.parent_id, module_url: $scope.module_url, is_active: $scope.is_active, is_inmenu: $scope.is_inmenu})
            .success(function (data) {
                $scope.parent_modules = (data);
         });


        $scope.create = function(){
            if($scope.parent_id == '')
            {
                $scope.parent_id = 0;
            }
            $http.post('modules/store', {module_name: $scope.module_name, parent_id: $scope.parent_id, module_url: $scope.module_url, is_active: $scope.is_active, is_inmenu: $scope.is_inmenu})
                    .success(function (data) {

                    var data = (data);
                    console.log(data);
                    if (data.code == '200')
                    {
                        $state.go('app.modules.index');
                    }
                    if (data.code == '403') {
                        alert(data.msg)
                    }
                    }, function (x) {
                    alert('Server Error');
                        //$scope.authError = 'Server Error';
                    });
        };




        //$scope.user = {};
        //$scope.authError = null;
        //$scope.login = function () {
        //    $scope.authError = null;
        //
        //    // Try to login
        //    $http.post('checklogin', {email: $scope.user.email, password: $scope.user.password})
        //        .success(function (data) {
        //
        //            if (data == '0') {
        //                $scope.authError = 'Email or Password not right';
        //            } else {
        //                $state.go('app.dashboard');
        //            }
        //        }, function (x) {
        //            $scope.authError = 'Server Error';
        //        });
        //};
    }]);