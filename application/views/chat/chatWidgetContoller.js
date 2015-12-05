angular.module('message.controller', ['services.chat'])
        .controller('chatWidgetContoller', function ($scope, chatService) {
            $scope.chatBoxes = [];
            $scope.miniBoxes = [];
            $scope.chatBoxStartPos = 375;
            $scope.miniBoxesStartPos = 940;
            $scope.chatBoxWidth = 260;
            $scope.chatBoxGap = 15;
            $scope.friend_list = [];
            $scope.chatUserList = [];
            $scope.userInfo = {};

            $scope.userId = "";
            $scope.message = {};

            $scope.getFriendList = function () {
                $scope.friend_list = [
                    {"userId": "u2", "firstName": "Alamgir", "lastName": "Kabir", "genderId": "1"},
                    {"userId": "u3", "firstName": "Nazrul", "lastName": "Islam", "genderId": "1"},
                    {"userId": "u4", "firstName": "Salma", "lastName": "Khatun", "genderId": "2"},
                    {"userId": "u5", "firstName": "Keya", "lastName": "Moni", "genderId": "2"},
                    {"userId": "u6", "firstName": "Sabuj", "lastName": "Gope", "genderId": "1"}
                ];
                $scope.userInfo = {"userId": "u1", "firstName": "Rashida", "lastName": "Sultana", "genderId": "2"};
            };


            $scope.getChatInitialInfo = function (chatUserInfo) {
                var userId = chatUserInfo.userId;
                $scope.chatInfo = {
                    "groupId": "_u1_" + userId + "_",
                    "messages": [
                        {"message": "hello", "senderInfo": {"userId": "u1", "firstName": "Rashida", "lastName": "Sultana"}
                        },
                        {"message": "hi", "senderInfo": {"userId": userId, "firstName": "Alamgir", "lastName": "Kabir"}
                        }
                    ]}

                $scope.chatInfo.userId = chatUserInfo.userId;
                $scope.chatInfo.firstName = chatUserInfo.firstName;
                $scope.chatInfo.lastName = chatUserInfo.lastName;
                var userObject = $scope.chatInfo;
                $scope.addUserToChatUserList(userObject);
                $scope.reOrganizeChatBoxes();
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


            $scope.sendMessage = function (event, chatUserDetails) {
                if (event.keyCode === 13) {
                    chatUserDetails.messages.push({"message": chatUserDetails.writtenMsg, "senderInfo": $scope.userInfo});
                    chatUserDetails.writtenMsg = "";
                }
                ;
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

















        });
