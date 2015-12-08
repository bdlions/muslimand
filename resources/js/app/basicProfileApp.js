angular.module("app.BasicProfile", [
    'controllers.ImageCopper',
    'controllers.BasicProfile',
    'controllers.Header',
    'controllers.Right',
    'controllers.Friend',
    'controllers.Message',
    'ui.bootstrap'
]).directive("chatBox", function () {
    return {
        restrict: "E",
        replace: true,
        templateUrl:'http://localhost/muslimand/member/chat_tmpl_load'
    };
});
