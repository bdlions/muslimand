angular.module('controllers.Message', ['services.Message', 'ngWebSocket']).
        controller('messageController', function ($scope, messageService, $websocket, $timeout) {



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
            $scope.messageNotification = [];
            $scope.userId = "";
            $scope.message = {};
            $scope.webSocketMessage = {};
            $scope.ws;
            $scope.setUserId = function (userId) {
                $scope.userId = userId;
                console.log($scope.userId);
                $scope.ws = $websocket("ws://localhost:8089/" + $scope.userId);
                $scope.ws.onMessage(function (event) {
                    var userMessage = {};
                    var userExistStatus = 0;
                    userMessage = JSON.parse(event.data);
                    console.log(userMessage);
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
                    var message = {"message": userMessage.message, "senderInfo": userMessage.senderInfo};
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
//            console.log($scope.userId);
//            ws = $websocket("ws://localhost:8089/" + "9Ixsx2qFkzWEliG");
//            //ws = $websocket("ws://localhost:8089/" + $scope.userId);
//            ws.onMessage(function (event) {
//                var userMessage = {};
//                var userExistStatus = 0;
//                userMessage = JSON.parse(event.data);
//                console.log(userMessage);
//                if ($scope.messageNotification.length > 0) {
//                    angular.forEach($scope.messageNotification, function (notification, key) {
//                        if (notification != userMessage.groupId) {
//                            $("#message_counter_div").show();
//                            var messageNotificationCounter = $("#message_counter_div").val();
//                            messageNotificationCounter = +messageNotificationCounter + +1;
//                            $("#message_counter_div").val(messageNotificationCounter);
//                            $("#message_counter_div").html(messageNotificationCounter);
//                            $scope.messageNotification.push(userMessage.groupId);
//                        }
//                    });
//                } else {
//                    $("#message_counter_div").show();
//                    var messageNotificationCounter = $("#message_counter_div").val();
//                    messageNotificationCounter = +messageNotificationCounter + +1;
//                    $("#message_counter_div").val(messageNotificationCounter);
//                    $("#message_counter_div").html(messageNotificationCounter);
//                    $scope.messageNotification.push(userMessage.groupId);
//
//                }
//
//
//                userMessage.senderInfo = JSON.parse(userMessage.senderInfo);
//                var message = {"message": userMessage.message, "senderInfo": userMessage.senderInfo};
//                userMessage.message = message;
//                angular.forEach($scope.chatUserList, function (chatUser, key) {
//                    if (chatUser.groupId === userMessage.groupId) {
//                        chatUser.messages.push(message);
//                        userExistStatus = 1;
//                    }
//                });
//                if (userExistStatus != 1) {
//                    userMessage.userId = userMessage.senderInfo.userId;
//                    userMessage.firstName = userMessage.senderInfo.firstName;
//                    userMessage.lastName = userMessage.senderInfo.lastName;
//                    userMessage.genderId = userMessage.senderInfo.genderId;
//                    $scope.getChatInitialInfo(userMessage);
//                }
//            });
//
//            ws.onError(function (event) {
//
//                console.log('connection Error', event);
//            });
//            ws.onClose(function (event) {
//
//                console.log('connection closed', event);
//            });

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
                            var message = {"message": chatUserDetails.writtenMsg, "senderInfo": $scope.userInfo};
                            $scope.webSocketMessage.message = chatUserDetails.writtenMsg;
                            $scope.webSocketMessage.receiverId = chatUserDetails.userId;
                            $scope.webSocketMessage.senderInfo = JSON.stringify($scope.userInfo);
                            console.log($scope.webSocketMessage);
                            $scope.webSocketMessage.groupId = chatUserDetails.groupId;
                            $scope.ws.send(JSON.stringify($scope.webSocketMessage));

                            chatUserDetails.messages.push(message);
                            chatUserDetails.writtenMsg = "";
                        });
            };




            $scope.onMessage = function (event) {
                var userMessage = JSON.parse(event);
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
                var message = {"message": userMessage.message, "senderInfo": userMessage.senderInfo};
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
            };







            $scope.getFriendList = function () {
//                var ws = $websocket("ws://localhost:8089/" + $scope.userId);
                messageService.getFriendList().
                        success(function (data, status, headers, config) {
                            $scope.friendList = data.friend_list;
                            $scope.userInfo = data.user_info;
                            $scope.userId = $scope.userInfo.userId;
//                            ws = $websocket("ws://localhost:8089/" + $scope.userId);
//                            console.log($scope.ws);
//                            console.log($scope.userInfo);
                        });
            };
            $scope.getChatInitialInfo = function (chatUserInfo) {
                var userId = chatUserInfo.userId;
                messageService.getMessagehistory(userId).
                        success(function (data, status, headers, config) {
                            if (typeof data.message_history != "undefined") {
                                console.log(data.message_history);
                                $scope.messageHistory = data.message_history;
                                $scope.messageHistory.userId = chatUserInfo.userId;
                                $scope.messageHistory.firstName = chatUserInfo.firstName;
                                $scope.messageHistory.lastName = chatUserInfo.lastName;
                                $scope.messageHistory.genderId = chatUserInfo.genderId;
                                
//                                if (typeof chatUserInfo.message == "undefined") {
//                                    $scope.messageHistory.messages.push(chatUserInfo.message);
//                                }
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
            $scope.setMessageSummery = function (messageSummeryList) {
                $scope.messageSummeryList = JSON.parse(messageSummeryList);
//                console.log($scope.messageSummeryList[0].userList);
            };
            $scope.setRecentMessageInfo = function (recentMessageInfo) {
                $scope.messageInformation = JSON.parse(recentMessageInfo);
                if (typeof $scope.messageSummeryList[0] != "undefined") {
                    $scope.messageInformation.userList = $scope.messageSummeryList[0].userList;
                }
            };
            $scope.addMessage = function (groupId) {
                $scope.userMessage.groupId = groupId;
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
                            $scope.messageInformation.userList = messageSummery.userList;
                        });
            };
        });
