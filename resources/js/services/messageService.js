angular.module('services.Message', []).
        factory('messageService', function ($http, $location) {
            var messageService = {};
            var $app_name = "/muslimand";



            messageService.getFriendList = function () {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name +'/friend/get_chat_friend_list',
                    data: {
                    }
                });
            };
         
            messageService.getMessagehistory = function (userId) {
                return $http({
                    method: 'post',
                    url: $location.path() + $app_name +'/message/get_message_history',
                    data: {
                        userId : userId
                    }
                });
            };






            messageService.addMessage = function (userMessage) {
                return $http({
                    method: 'post',
                    url: '../message/add_mesage',
                    data: {
                        userMessage: userMessage
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
                    url: '../message/get_message_list',
                    data: {
                        groupId: groupId
                    }
                });
            };
            return messageService;
        });