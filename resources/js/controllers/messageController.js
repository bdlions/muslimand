angular.module('controllers.Message', ['services.Message']).
        controller('messageController', function ($scope, messageService) {
         $scope.messageSummeryList = [];
         $scope.messageInformation = {};
         $scope.message = {};

            $scope.setMessageSummery = function (messageSummeryList) {
                $scope.messageSummeryList = JSON.parse(messageSummeryList);
                console.log($scope.messageSummeryList);
            };

            $scope.addMessage = function (groupId) {
                console.log($scope.message);
                
                messageService.addMessage().
                        success(function (data, status, headers, config) {
                        });
            };
            $scope.getMessageList = function (groupId) {
                messageService.getMessageList(groupId).
                        success(function (data, status, headers, config) {
                            $scope.messageInformation = data;
                            console.log(data);
                        });
            };



        });
