angular.module('controllers.Message', ['services.Message']).
        controller('messageController', function ($scope, messageService) {

            //<chat >
            $scope.chatBoxes = [];
            $scope.miniBoxes = [];
            $scope.chatBoxStartPos = 225;
            $scope.miniBoxesStartPos = 940;
            $scope.chatBoxWidth = 260;
            $scope.chatBoxGap = 10;
            $scope.friendList = [];
            $scope.chatUserList = [];
            $scope.userInfo = {};
            $scope.messageHistory = {};
            $scope.userId = "";
            $scope.message = {};

            $scope.getFriendList = function () {
                messageService.getFriendList().
                        success(function (data, status, headers, config) {
                            $scope.friendList = data.friend_list;
                            $scope.userInfo = data.user_info;
                        });
            };


            $scope.getChatInitialInfo = function (chatUserInfo) {
                var userId = chatUserInfo.userId;
                messageService.getMessagehistory(userId).
                        success(function (data, status, headers, config) {
                            if (typeof data.message_history != "undefined") {
                                $scope.messageHistory = data.message_history;
                                console.log(data.message_history);

                                $scope.messageHistory.userId = chatUserInfo.userId;
                                $scope.messageHistory.firstName = chatUserInfo.firstName;
                                $scope.messageHistory.lastName = chatUserInfo.lastName;
                                var userObject = $scope.messageHistory;
                                $scope.addUserToChatUserList(userObject);
                                $scope.reOrganizeChatBoxes();
                            }
                        });
            };


            $scope.addUserToChatUserList = function (userObject) {
                var userExistStatus = 0;
                angular.forEach($scope.chatUserList, function (chatUser, key) {
                    if (chatUser.userId === userObject.userId) {
                        userExistStatus = 1;
                    }
                });
                if (userExistStatus != 1) {
                    $scope.chatUserList.push(userObject);
                }
                console.log($scope.chatUserList);
            };

            $scope.getChatBoxes = function () {
                $scope.reOrganizeChatBoxes();
            };
            $scope.reOrganizeChatBoxes = function () {
                var tempChatBoxes = [];
                var tempMiniBoxes = [];
                for (var i = 0; i < $scope.chatUserList.length; i++) {
                    if (i > 2) {
                        var friendChatInfo = $scope.chatUserList[ i ];
                        tempMiniBoxes.push(friendChatInfo);
                    } else {
                        var friendChatInfo = $scope.chatUserList[ i ];
                        friendChatInfo.rightPos = $scope.chatBoxStartPos + (i * ($scope.chatBoxWidth + $scope.chatBoxGap));
                        tempChatBoxes.push(friendChatInfo);
                    }
                }
                $scope.chatBoxes = tempChatBoxes;
                $scope.miniBoxes = tempMiniBoxes;
                console.log($scope.chatBoxes);
            };


            $scope.sendMessage = function (chatUserDetails) {
                var messageSize = chatUserDetails.messages.length;
                if (messageSize > 0) {
                    $scope.userMessage.groupId = chatUserDetails.groupId;
                } else {
                    $scope.userMessage.rUserId = chatUserDetails.userId;
                }
                $scope.userMessage.message = chatUserDetails.writtenMsg;
                messageService.addMessage($scope.userMessage).
                        success(function (data, status, headers, config) {
                            chatUserDetails.messages.push({"message": chatUserDetails.writtenMsg, "senderInfo": $scope.userInfo});
                            chatUserDetails.writtenMsg = "";
                        });
            };

            $scope.removeUser = function (userObject) {
                var chatBoxUserIndex = $scope.chatBoxes.indexOf(userObject);
                $scope.chatBoxes.splice(chatBoxUserIndex, 1);
                var chatUserIndex = $scope.chatUserList.indexOf(userObject);
                $scope.chatUserList.splice(chatUserIndex, 1);
                $scope.removeUserFromWatingStack();
                $scope.reOrganizeChatBoxes();

            };

            $scope.removeUserFromWatingStack = function () {
                var watingChatBoxLength = $scope.miniBoxes.length;
                if (watingChatBoxLength > 0) {
                    watingChatBoxLength = watingChatBoxLength - 1;
                    var watingChatUser = $scope.miniBoxes.pop(watingChatBoxLength);
                    $scope.addUserToChatBoxStack(watingChatUser);
                }
            };
            $scope.addUserToChatBoxStack = function (watingChatUser) {
                $scope.chatBoxes.push(watingChatUser);
            };




            $scope.removeMiniBoxesUser = function (item) {
                var index = $scope.miniBoxes.indexOf(item);
                $scope.miniBoxes.splice(index, 1);
            };


            $scope.openMiniBoxesUser = function (clickMiniBoxesUser) {
                var chatBoxInfo = $scope.chatBoxes.pop();
                $scope.chatBoxes.push(clickMiniBoxesUser);

                var miniBoxesIndex = $scope.miniBoxes.indexOf(clickMiniBoxesUser);
                $scope.miniBoxes[miniBoxesIndex] = chatBoxInfo;
                for (var i = 0; i < $scope.chatBoxes.length; i++) {
                    var friendChatInfo = $scope.chatBoxes[ i ];
                    friendChatInfo.rightPos = $scope.chatBoxStartPos + (i * ($scope.chatBoxWidth + $scope.chatBoxGap));
                }
            };






            $scope.getAllChatBoxes = function () {
                $scope.chatBoxes;
            }
            $scope.getChatBoxByUserObject = function (userObject) {
                var index = $scope.chatBoxes.indexOf(userObject);
                $scope.chatBoxes.pop(index);
                $scope.chatBoxes;
            }
























            // message 


            $scope.messageSummeryList = [];
            $scope.messageInformation = {};
            $scope.messageInformation.message = [];
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
//                            console.log(data);
                        });
            };






        });
