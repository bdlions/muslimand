angular.module('controllers.Message', ['services.Message', 'ngWebSocket']).
        controller('messageController', function ($scope, messageService, $websocket, utilsTimezone) {



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
            $scope.userCurrentTimeStamp = new Date().getTime() / 1000;
            $scope.messageHistory = {};
            $scope.messageNotification = [];
            $scope.userId = "";
            $scope.message = {};
            $scope.webSocketMessage = {};
            $scope.ws;
            $scope.setUserId = function (userId) {
                $scope.userId = userId;
                $scope.ws = $websocket("ws://localhost:2020/" + $scope.userId);
                $scope.ws.onMessage(function (event) {
                    var userMessage = {};
                    var userExistStatus = 0;
                    userMessage = JSON.parse(event.data);
                    if ($scope.messageNotification.length > 0) {
                        angular.forEach($scope.messageNotification, function (notification, key) {
                            if (notification != userMessage.groupId) {
                                $("#message_counter_div").show();
                                var messageNotificationCounter = $("#message_counter_div").val();
                                messageNotificationCounter = +messageNotificationCounter + +1;
                                $("#message_counter_div").val(messageNotificationCounter);
                                $("#message_counter_div").html(messageNotificationCounter);
                                $scope.messageNotification.push(userMessage.groupId);
                            }
                        });
                    } else {
                        $("#message_counter_div").show();
                        var messageNotificationCounter = $("#message_counter_div").val();
                        messageNotificationCounter = +messageNotificationCounter + +1;
                        $("#message_counter_div").val(messageNotificationCounter);
                        $("#message_counter_div").html(messageNotificationCounter);
                        $scope.messageNotification.push(userMessage.groupId);
                    }


                    userMessage.senderInfo = JSON.parse(userMessage.senderInfo);
                    userMessage.sentTime = utilsTimezone.getUnixTimeToHumanTimeWithAMPM(userMessage.sentTime);
                    var message = {"message": userMessage.message, "senderInfo": userMessage.senderInfo, "sentTime": userMessage.sentTime};
                    userMessage.message = message;
                    var userExistStatus = 0;
                    angular.forEach($scope.chatUserList, function (chatUser, key) {
                        if (chatUser.groupId === userMessage.groupId) {
                            chatUser.messages.push(message);
                            userExistStatus = 1;
                        }
                    });
                    if (userExistStatus != 1) {
                        userMessage.userId = userMessage.senderInfo.userId;
                        userMessage.firstName = userMessage.senderInfo.firstName;
                        userMessage.lastName = userMessage.senderInfo.lastName;
                        userMessage.genderId = userMessage.senderInfo.genderId;
                        $scope.getChatInitialInfo(userMessage);
                    }
                });
                $scope.ws.onError(function (event) {

                    console.log('connection Error', event);
                });
                $scope.ws.onClose(function (event) {

                    console.log('connection closed', event);
                });
            };
            $scope.sendMessage = function (chatUserDetails) {
                var messageSize = chatUserDetails.messages.length;
                if (messageSize > 0) {
                    $scope.userMessage.groupId = chatUserDetails.groupId;
                } else {
                    $scope.userMessage.rUserId = chatUserDetails.userId;
                }
                $scope.userMessage.genderId = $scope.userInfo.genderId;
                $scope.userMessage.message = chatUserDetails.writtenMsg;
                if ($scope.userMessage.message == null || $scope.userMessage.message == "" || chatUserDetails.writtenMsg == null || chatUserDetails.writtenMsg == "") {
                    return;
                }
                messageService.addMessage($scope.userMessage).
                        success(function (data, status, headers, config) {
                            var sentTime = utilsTimezone.getUnixTimeToHumanTimeWithAMPM($scope.userCurrentTimeStamp);
                            var message = {"message": chatUserDetails.writtenMsg, "senderInfo": $scope.userInfo, "sentTime": sentTime};
                            $scope.webSocketMessage.message = chatUserDetails.writtenMsg;
                            $scope.webSocketMessage.receiverId = chatUserDetails.userId;
                            $scope.webSocketMessage.senderInfo = JSON.stringify($scope.userInfo);
                            $scope.webSocketMessage.groupId = chatUserDetails.groupId;
                            $scope.ws.send(JSON.stringify($scope.webSocketMessage));
                            chatUserDetails.messages.push(message);
                            chatUserDetails.writtenMsg = "";
                            $scope.userMessage.message = "";
                        });
            };
            $scope.getFriendList = function () {
                messageService.getFriendList().
                        success(function (data, status, headers, config) {
                            $scope.friendList = data.friend_list;
                            angular.forEach($scope.friendList, function (friendInfo, key) {
                                if (typeof friendInfo.lastLogin != "undefined") {
                                    friendInfo.lastLogin = utilsTimezone.convertOnlineTime($scope.userCurrentTimeStamp, friendInfo.lastLogin);
                                }
                            }, $scope.friendList);
                            $scope.userInfo = data.user_info;
                            $scope.userId = $scope.userInfo.userId;
                        });
            };
            $scope.getChatInitialFromMessage = function (userInformation) {
                var chatUserInfo = {}
                var userInfo = JSON.parse(userInformation);
                chatUserInfo.userId = userInfo.user_id;
                chatUserInfo.firstName = userInfo.profile_first_name;
                chatUserInfo.lastName = userInfo.profile_last_name;
                chatUserInfo.genderId = userInfo.gender_id;
                $scope.getChatInitialInfo(chatUserInfo);
            }

            $scope.getChatInitialInfo = function (chatUserInfo) {
                var userId = chatUserInfo.userId;
                messageService.getMessagehistory(userId).
                        success(function (data, status, headers, config) {
                            if (typeof data.message_history != "undefined") {
                                $scope.messageHistory = data.message_history;
                                $scope.messageHistory.userId = chatUserInfo.userId;
                                $scope.messageHistory.firstName = chatUserInfo.firstName;
                                $scope.messageHistory.lastName = chatUserInfo.lastName;
                                $scope.messageHistory.genderId = chatUserInfo.genderId;
                                if (typeof $scope.messageHistory.messages != "undefined") {
                                    angular.forEach($scope.messageHistory.messages, function (message, key) {
                                        message.sentTime = utilsTimezone.getUnixTimeToHumanTimeWithAMPM(message.sentTime);
                                    }, $scope.messageHistory.messages);
                                }
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
//                console.log($scope.chatUserList);
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
                var chatUserIndex = $scope.chatUserList.indexOf(item);
                $scope.chatUserList.splice(chatUserIndex, 1);
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
//            $scope.messageInformation.message = [];
            $scope.userMessage = {};
            $scope.setUserCurrentTime = function (userCurrentTimeStamp) {
                $scope.userCurrentTimeStamp = userCurrentTimeStamp;
            };
            $scope.setMessageSummery = function (messageSummeryList) {
                $scope.messageSummeryList = JSON.parse(messageSummeryList);

            };

            $scope.setRecentMessageInfo = function (recentMessageInfo) {
                $scope.messageInformation = JSON.parse(recentMessageInfo)
                console.log($scope.messageInformation);
                if (typeof $scope.messageInformation.messages != "undefined") {
                    angular.forEach($scope.messageInformation.messages, function (message, key) {
                        message.sentTime = utilsTimezone.getUnixTimeToHumanTimeWithAMPM(message.sentTime);
                    });
                }
                if (typeof $scope.messageSummeryList[0] != "undefined") {
                    $scope.messageInformation.userList = $scope.messageSummeryList[0].userList;
                }
            };
            $scope.addMessage = function (groupId) {
                $scope.userMessage.groupId = groupId;
                $scope.userMessage.genderId = $scope.userInfo.genderId;
                messageService.addMessage($scope.userMessage).
                        success(function (data, status, headers, config) {
                            if (typeof $scope.messageInformation.messages == "undefined") {
                                $scope.messageInformation.messages = new Array();
                            }
                            $scope.messageInformation.messages.push(data.message_info);
                            $scope.userMessage.message = "";
                        });
            };
            $scope.getMessageList = function (messageSummery) {
                var groupId = messageSummery.groupId;
                messageService.getMessageList(groupId).
                        success(function (data, status, headers, config) {
                            $scope.messageInformation = data;
                            if (typeof $scope.messageInformation.messages != "undefined") {
                                angular.forEach($scope.messageInformation.messages, function (message, key) {
                                    message.sentTime = utilsTimezone.getUnixTimeToHumanTimeWithAMPM(message.sentTime);
                                });
                            }
                            $scope.messageInformation.userList = messageSummery.userList;
                        });
            };
        });
