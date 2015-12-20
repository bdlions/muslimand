var app = angular.module("app.Status", [
    'controllers.Header',
    'controllers.Right',
    'controllers.Status',
    'controllers.Message',
    'controllers.Image',
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

