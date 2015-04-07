/**
 * Created by ruchir on 4/6/2015.
 */
app.factory('ModuleService', function ModuleService($http) {

    return {

        getModule: function getModule(id) { return $http.get('/modules/find?id='+ id); },

        deleteModule : function deleteModule(id) { return $http.get('/modules/destroy?id='+ id); },

    }
});
