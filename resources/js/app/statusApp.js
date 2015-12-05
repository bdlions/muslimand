angular.module("app.Status", [
    'controllers.Header',
    'controllers.Right',
    'controllers.Status',
    'controllers.Message',
    'controllers.Image',
    'ui.bootstrap'
]).directive("chatBox", function () {
    return {
        restrict: "E",
        replace: true,
        templateUrl:'http://localhost/muslimand/member/chat_tmpl_load'
    };
});