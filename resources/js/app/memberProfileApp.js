angular.module("app.MemberProfile", [
    'controllers.ImageCopper',
    'controllers.Header',
    'controllers.BasicProfile',
    'controllers.Message',
    'controllers.Right',
    'controllers.Status',
    'controllers.Friend',
    'controllers.Photo',
    'controllers.Image',
    'ui.bootstrap'
]).directive("chatBox", function () {
    return {
        restrict: "E",
        replace: true,
        templateUrl:'http://localhost/muslimand/member/chat_tmpl_load'
    };
});