/**
 * Created by ruchir on 4/7/2015.
 */

app.controller('MarketingDatasController', ['$scope', '$http', '$state', 'Flash', '$stateParams', '$rootScope', '$interval', '$filter',
    function ($scope, $http, $state, Flash, $stateParams, $rootScope, $interval, $filter) {

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
            'leads_statuses_id': null,
            'lead_status': [
                {
                    'leads_statuses_name': 'asdf',
                    'leads_statuses_id': 2
                }
            ]
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
                'leads_statuses_id': null,
                'lead_status': []
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
                    angular.forEach($scope.data.timezones, function (value, key) {
                        $scope.data.timezones[key].timezones_time++;
                        $scope.data.timezones[key].timezones_time1 = new Date($scope.data.timezones[key].timezones_time * 1000);
                    });
                    $scope.date = new Date();
                }, 1000);

                angular.forEach($scope.data.timezones, function (value, key) {
                    $scope.data.timezones[key].timezones_time1 = new Date($scope.data.timezones[key].timezones_time * 1000);
                });


            }, function (x) {
                Flash.create('danger', 'Server Error');
            });
        };

        $scope.filter_data = function (id) {

                $scope.data.aaData = [];
                console.log($scope.data.aaData);
                $http.post('marketing_datas/timezone-wise-data-filtered-view/' + $stateParams.id, {
                    leads_statuses_id: id
                }).success(function (data) {
                    $scope.data.aaData = data.aaData;
                    console.log($scope.data.aaData);
                }, function (x) {
                    Flash.create('danger', 'Server Error');
                });
        };

        $scope.getArray = function(){
          return   $scope.data.aaData;
        };
        $scope.timezone_wise_data = function () {
            $http.post('marketing_datas/timezone-wise-data-view/' + $stateParams.id, {}).success(function (data) {
                $scope.lead_status = data.lead_status;
                $scope.data.aaData = data.aaData;
                setTimeout(function () {
                    var e = {
                        sPaginationType: "full_numbers",
                        "fnDrawCallback": function (oSettings) {

                        },
                        oLanguage: {
                            sSearch: "<span>Search:</span> ",
                            sInfo: "Showing <span>_START_</span> to <span>_END_</span> of <span>_TOTAL_</span> entries",
                            sLengthMenu: "_MENU_ <span>entries per page</span>"
                        },
                        //sDom: "CTlfrtip",
                        "dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable
                        //aoColumnDefs: [{bSortable: !1, aTargets: [1]}],
                        "aoColumns": [
                            {"bSortable": false}, {"bSortable": false}, {"bSortable": false}, null, {"bSortable": false}, {"bSortable": false}, {"bSortable": false}, {"bSortable": false}, {"bSortable": false}
                        ],
                        //oColVis: {buttonText: "Change columns <i class='icon-angle-down'></i>"},
                        //oTableTools: {
                        //    sSwfPath: "vendor/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
                        //},
                        "bDestroy": true
                    }, t = $("#sample_1").dataTable(e);
                    $(".dataTables_filter input").attr("placeholder", "Search here...");
                    //$(".dataTables_length select").wrap("<div class='input-mini'></div>").chosen({disable_search_threshold: 9999999});
                    //t.columnFilter({
                    //    sPlaceHolder: "head:after",
                    //    aoColumns: [, , , , , , {
                    //        type: "select",
                    //        bCaseSensitive: !0,
                    //        values: [
                    //            "No Action Yet",
                    //            "Interested",
                    //            "Not Interested",
                    //            "Voice Message",
                    //            "For Future Reference",
                    //            "Call me Back",
                    //            "Engaged",
                    //            "Take A Message",
                    //            "Call Closed"
                    //        ]
                    //    },
                    //        null]
                    //});

                    $("#sample_1").css("width", "100%")
                }, 1000);

            }, function (x) {
                Flash.create('danger', 'Server Error');
            });
        };

        $scope.changeStatus = function (id, leadstatus) {
            $http.post('marketing_datas/status-update-edit/' + id, {
                leadstatus: leadstatus
            }).success(function (data) {

                if (data.code == '200') {
                    //Flash.create('success', data.msg);
                }
                if (data.code == '403') {
                    Flash.create('danger', data.msg);
                }
            }, function (x) {
                Flash.create('danger', 'Server Error');
            });
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


var TableAdvanced = function () {

    var initTable1 = function () {

        if ($("#sample_1").length > 0) {
            //var e = {
            //    sPaginationType: "full_numbers",
            //    "fnDrawCallback": function (oSettings) {
            //
            //    },
            //    oLanguage: {
            //        sSearch: "<span>Search:</span> ",
            //        sInfo: "Showing <span>_START_</span> to <span>_END_</span> of <span>_TOTAL_</span> entries",
            //        sLengthMenu: "_MENU_ <span>entries per page</span>"
            //    },
            //    //sDom: "CTlfrtip",
            //    "dom": "<'row' <'col-md-12'T>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable
            //    //aoColumnDefs: [{bSortable: !1, aTargets: [1]}],
            //    "aoColumns": [
            //        {"bSortable": false}, {"bSortable": false}, {"bSortable": false}, null, {"bSortable": false}, {"bSortable": false}, {"bSortable": false}, {"bSortable": false}, {"bSortable": false}
            //    ],
            //    //oColVis: {buttonText: "Change columns <i class='icon-angle-down'></i>"},
            //    oTableTools: {
            //        sSwfPath: "vendor/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
            //    },
            //    "bDestroy": true
            //}, t = $("#sample_1").dataTable(e);
            //$(".dataTables_filter input").attr("placeholder", "Search here...");
            ////$(".dataTables_length select").wrap("<div class='input-mini'></div>").chosen({disable_search_threshold: 9999999});
            //t.columnFilter({
            //    sPlaceHolder: "head:after",
            //    aoColumns: [, , , , , , {
            //        type: "select",
            //        bCaseSensitive: !0,
            //        values: [
            //            "No Action Yet",
            //            "Interested",
            //            "Not Interested",
            //            "Voice Message",
            //            "For Future Reference",
            //            "Call me Back",
            //            "Engaged",
            //            "Take A Message",
            //            "Call Closed"
            //        ]
            //    },
            //        null]
            //});
            //
            //$("#sample_1").css("width", "100%")
        }
    }

    return {

        //main function to initiate the module
        init: function () {

            if (!jQuery().dataTable) {
                return;
            }

            console.log('me 1');


            console.log('me 2');
        }

    };

}();