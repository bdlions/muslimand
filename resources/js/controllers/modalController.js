angular.module('controllers.Modal', ['ngAnimate', 'ui.bootstrap']);
angular.module('controllers.Modal').controller('ModalController', function ($scope, $modal, $log) {
//
//  $scope.items = [];
//
//  $scope.animationsEnabled = true;
//
//  $scope.open = function (size) {
//
//    var modalInstance = $modal.open({
//      animation: $scope.animationsEnabled,
//      templateUrl: 'myModalContentId',
//      controller: 'ModalInstanceCtrl',
//      size: size,
//      resolve: {
//        items: function () {
//          return $scope.items;
//        }
//	
//      }
//	  
//    });
//
//    modalInstance.result.then(function (selectedItem) {
//      $scope.selected = selectedItem;
//	  alert($scope.selected);
//    }, function () {
//      $log.info('Modal dismissed at: ' + new Date());
//    });
//  };
//
//});
//
//// Please note that $modalInstance represents a modal window (instance) dependency.
//// It is not the same as the $modal service used above.
//
//angular.module('controllers.Modal').controller('ModalInstanceCtrl', function ($scope, $modalInstance, items) {
//
//  $scope.items = items;
//  $scope.selected = {
//    item: 1
//  };
//
//  $scope.ok = function () {
//  $modalInstance.close($scope.selected.item);
//  };
//
//  $scope.cancel = function () {
//    $modalInstance.dismiss('cancel');
//  };
});