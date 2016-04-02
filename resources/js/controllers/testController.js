var myApp = angular.module('myApp', ['infinite-scroll']);

myApp.controller('DemoController', function ($scope, infinitiService) {
    $scope.reddit = new infinitiService();
});

// Reddit constructor function to encapsulate HTTP and pagination logic
myApp.factory('infinitiService', function ($http) {
    var infinitiService = function () {
        this.items = [];
        this.busy = false;
    };

    infinitiService.prototype.nextPage = function () {
        if (this.busy)
            return;
        this.busy = true;
        var offset = this.items.length - 1;
        var request = $http({
            method: 'post',
            url: 'http://localhost/shadhiin/welcome/infinity_call_test',
            data: {
                offset : offset
            }
        });
        request.success(function (data) {
            console.log(data);
//            var items = data;
            this.items = data;
            this.busy = false;
        }.bind(this));
    };

    return infinitiService;
});