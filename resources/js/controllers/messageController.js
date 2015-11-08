angular.module('controllers.Message', ['services.Message']).
        controller('messageController', function ($scope, messageService) {
            $scope.messageSummeryList = [];
            $scope.messageInformation = {};
            $scope.userMessage = {};

            $scope.setMessageSummery = function (messageSummeryList) {
                $scope.messageSummeryList = JSON.parse(messageSummeryList);
                console.log($scope.messageSummeryList);
            };

            $scope.addMessage = function (groupId) {
                $scope.userMessage.groupId = groupId;
                messageService.addMessage($scope.userMessage).
                        success(function (data, status, headers, config) {
                            $scope.messageInformation.messages.push(data.message_info);
                            $scope.userMessage.message = "";
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
