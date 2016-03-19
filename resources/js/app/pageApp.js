var app = angular.module("app.Page", [
    'controllers.ImageCopper',
    'controllers.BasicProfile',
    'controllers.Header',
    'controllers.Right',
    'controllers.Friend',
    'controllers.Message',
    'controllers.Page',
    'ui.bootstrap'
]);
app.directive("chatBox", function () {
    return {
        restrict: "E",
        replace: true,
        templateUrl: 'http://localhost/muslimand/member/chat_tmpl_load'
    };
});
app.directive('fallbackSrc', function () {
    var fallbackSrc = {
        link: function postLink(scope, iElement, iAttrs) {
            iElement.bind('error', function () {
                angular.element(this).attr("src", iAttrs.fallbackSrc);
            });
        }
    }
    return fallbackSrc;
});
