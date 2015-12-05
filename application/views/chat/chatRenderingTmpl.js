var app = angular.module("Message.app", ['message.controller']);

app.directive("chatBox", function() {
  return {
    restrict: "E",
    replace: true,
    templateUrl: "friend_ticker.html"
  };
});


