angular.module("app.Photo", [
    'controllers.Header',
    'controllers.Right',
    'controllers.Photo',
    'controllers.Image',
    'controllers.Message',
    'ui.bootstrap'
]).directive("chatBox", function () {
    return {
        restrict: "E",
        replace: true,
        templateUrl:'http://localhost/muslimand/member/chat_tmpl_load'
    };
});