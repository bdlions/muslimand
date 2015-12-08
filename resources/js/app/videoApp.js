angular.module("app.Video", [
    'controllers.Video',
    'controllers.Header',
    'controllers.Right',
    'controllers.Message',
    'ui.bootstrap'
]).directive("chatBox", function () {
    return {
        restrict: "E",
        replace: true,
        templateUrl:'http://localhost/muslimand/member/chat_tmpl_load'
    };
});