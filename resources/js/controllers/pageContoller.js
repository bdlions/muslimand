angular.module('controllers.Page', ['services.Page', 'services.Timezone']).
        controller('pageController', function ($scope, pageService, utilsTimezone) {
            $scope.categoryList = [];
            $scope.brandSubCategoryList = [];
            $scope.communitySubCategoryList = [];
            $scope.PageInfo = {};

            $scope.setCategoryList = function (categoryList) {
                $scope.categoryList = JSON.parse(categoryList);
                  console.log($scope.categoryList);
            }
            $scope.setBrandSubcategoryList = function (subcategoryList) {
                $scope.brandSubCategoryList = JSON.parse(subcategoryList);
                console.log($scope.brandSubCategoryList);
            }
            $scope.setCommunitySubcategoryList = function (subcategoryList) {
                $scope.communitySubCategoryList = JSON.parse(subcategoryList);
            }

            $scope.addPage = function (category) {
                var pageInfo = {};
                pageInfo.categoryTitle = category.title;
                pageInfo.categoryId = category.categoryId;
                pageInfo.title = $scope.PageInfo.title;
                if (typeof $scope.PageInfo.subCategory != "undefined" && $scope.PageInfo.subCategory != "") {
                    var subCategoryInfo = $scope.PageInfo.subCategory;
                    pageInfo.subCategoryId = subCategoryInfo.subCategoryId;
                    pageInfo.subCategoryTitle = subCategoryInfo.title;
                }
                pageService.addPage(pageInfo).
                        success(function (data, status, headers, config) {
                            console.log(data);
                        });
            }
        });
