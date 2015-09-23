angular.module('controllers.FileUpload', ['services.FileUpload']).
        controller('imageUploadController', ['$scope', 'Upload', function ($scope, Upload) {
                // upload later on form submit or something similar
                $scope.submit = function () {
                    if (form.file.$valid && $scope.file && !$scope.file.$error) {
                        $scope.upload($scope.file);
                    }
                };
            }]);