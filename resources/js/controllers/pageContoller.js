angular.module('controllers.Page', ['services.Page', 'services.Timezone']).
        controller('pageController', function ($scope, pageService, utilsTimezone) {
            $scope.categoryList = [];
            $scope.brandSubCategoryList = [];
            $scope.communitySubCategoryList = [];
            $scope.ageRangeList = [];
            $scope.genderList = [];
            $scope.PageInfo = {};
            $scope.PageBasicInfo = {};

            $scope.setCategoryList = function (categoryList) {
                $scope.categoryList = JSON.parse(categoryList);
            }
            $scope.setBrandSubcategoryList = function (subcategoryList) {
                $scope.brandSubCategoryList = JSON.parse(subcategoryList);
            }
            $scope.setCommunitySubcategoryList = function (subcategoryList) {
                $scope.communitySubCategoryList = JSON.parse(subcategoryList);

            }
            $scope.SetAgeRange = function (ageList) {
                $scope.ageRangeList = JSON.parse(ageList);
            }
            $scope.SetGenderList = function (genderList) {
                $scope.genderList = JSON.parse(genderList);
            }
            $scope.setPageInfo = function (pageInfo) {
                $scope.PageBasicInfo = JSON.parse(pageInfo);
                console.log($scope.PageBasicInfo);
            }
            $scope.updatePage = function (pageId, requestFunction) {
                $scope.PageInfo.pageId = pageId;
                pageService.updatePage($scope.PageInfo).
                        success(function (data, status, headers, config) {
                            
                            requestFunction(data);
                        });
            }

            $scope.addPage = function (category, requestFunction) {
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
                            requestFunction(data);
                        });
            }
        });
