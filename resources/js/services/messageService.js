angular.module('services.Message', []).
        factory('messageService', function ($http) {
            var messageService = {};

            messageService.addMessage = function (userMessage) {
                return $http({
                    method: 'post',
                    url: '../message/add_mesage',
                    data: {
                      userMessage:userMessage  
                    }
                });
            };


            messageService.getMessageSummaryList = function () {
                return $http({
                    method: 'post',
                    url: '../message/get_message_summary_list',
                    data: {
                    }
                });
            };
            messageService.getMessageList = function (groupId) {
                return $http({
                    method: 'post',
                    url:  '../message/get_message_list',
                    data: {
                        groupId:groupId
                    }
                });
            };
            return messageService;
        });