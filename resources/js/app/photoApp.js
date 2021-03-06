var app = angular.module("app.Photo", [
    'controllers.ImageCopper',
    'controllers.Header',
    'controllers.Right',
    'controllers.Friend',
    'controllers.Message',
    'controllers.Photo',
    'controllers.Image',
    'ui.bootstrap'
]);
app.directive("chatBox", function() {
    return {
        restrict: "E",
        replace: true,
        templateUrl: 'http://localhost/muslimand/member/chat_tmpl_load'
    };
});
app.directive('fallbackSrc', function() {
    var fallbackSrc = {
        link: function postLink(scope, iElement, iAttrs) {
            iElement.bind('error', function() {
                angular.element(this).attr("src", iAttrs.fallbackSrc);
            });
        }
    }
    return fallbackSrc;
});
app.directive('ngEnter', function () {
    return function (scope, element, attrs) {
        element.bind("keydown keypress", function (event) {
            if (event.which === 13) {
                scope.$apply(function () {
                    scope.$eval(attrs.ngEnter);
                });
                event.preventDefault();
            }
        });
    };
});