angular.module('controllers.Page', ['services.Page', 'services.Timezone']).
        controller('pageController', function($scope, pageService, utilsTimezone) {
            $scope.categoryList = [];
            $scope.brandSubCategoryList = [];
            $scope.productSubCategoryList = [];
            $scope.groupSubCategoryList = [];
            $scope.communitySubCategoryList = [];
            $scope.businessSubCategoryList = [];
            $scope.placeSubCategoryList = [];
            $scope.entertainmentSubCategoryList = [];
            $scope.companySubCategoryList = [];
            $scope.organizationSubCategoryList = [];
            $scope.institutionSubCategoryList = [];
            $scope.artistOrBandSubCategoryList = [];
            $scope.publicFigureSubCategoryList = [];
            $scope.ageRangeList = [];
            $scope.genderList = [];
            $scope.PageInfo = {};
            $scope.PageBasicInfo = {};

            $scope.setCategoryList = function(categoryList) {
                $scope.categoryList = JSON.parse(categoryList);
            }
            $scope.setBrandSubcategoryList = function(subcategoryList) {
                $scope.brandSubCategoryList = JSON.parse(subcategoryList);
            }
            $scope.setProductSubcategoryList = function(subcategoryList) {
                $scope.productSubCategoryList = JSON.parse(subcategoryList);
            }
            $scope.setGroupSubcategoryList = function(subcategoryList) {
                $scope.groupSubCategoryList = JSON.parse(subcategoryList);
            }
            $scope.setCommunitySubcategoryList = function(subcategoryList) {
                $scope.communitySubCategoryList = JSON.parse(subcategoryList);
            }
            $scope.setBusinessSubcategoryList = function(subcategoryList) {
                $scope.businessSubCategoryList = JSON.parse(subcategoryList);
            }
            $scope.setPlaceSubcategoryList = function(subcategoryList) {
                $scope.placeSubCategoryList = JSON.parse(subcategoryList);
            }
            $scope.setEntertainmentSubcategoryList = function(subcategoryList) {
                $scope.entertainmentSubCategoryList = JSON.parse(subcategoryList);
            }
            $scope.setCompanySubcategoryList = function(subcategoryList) {
                $scope.companySubCategoryList = JSON.parse(subcategoryList);
            }
            $scope.setOrganizationSubcategoryList = function(subcategoryList) {
                $scope.organizationSubCategoryList = JSON.parse(subcategoryList);
            }
            $scope.setInstitutionSubcategoryList = function(subcategoryList) {
                $scope.institutionSubCategoryList = JSON.parse(subcategoryList);
            }
            $scope.setArtistOrBandSubcategoryList = function(subcategoryList) {
                $scope.artistOrBandSubCategoryList = JSON.parse(subcategoryList);
            }
            $scope.setPublicFigureSubcategoryList = function(subcategoryList) {
                $scope.publicFigureSubCategoryList = JSON.parse(subcategoryList);
            }
            $scope.SetAgeRange = function(ageList) {
                $scope.ageRangeList = JSON.parse(ageList);
            }
            $scope.SetGenderList = function(genderList) {
                $scope.genderList = JSON.parse(genderList);
            }
            $scope.setPageInfo = function(pageInfo) {
                $scope.PageBasicInfo = JSON.parse(pageInfo);
                console.log($scope.PageBasicInfo);
            }
            $scope.updatePage = function(pageId, requestFunction) {
                $scope.PageInfo.pageId = pageId;
                pageService.updatePage($scope.PageInfo).
                        success(function(data, status, headers, config) {

                            requestFunction(data);
                        });
            }

            $scope.addPage = function(category, requestFunction) {
                var pageInfo = {};
                pageInfo.categoryTitle = category.title;
                pageInfo.categoryId = category.categoryId;
                pageInfo.title = $scope.PageInfo.title;
                if (typeof $scope.PageInfo.subCategory != "undefined" && $scope.PageInfo.subCategory != "") {
                    var subCategoryInfo = $scope.PageInfo.subCategory;
                    pageInfo.subCategoryId = subCategoryInfo.subCategoryId;
                    pageInfo.subCategoryTitle = subCategoryInfo.title;
                }
                if (typeof $scope.PageInfo.street != "undefined" && $scope.PageInfo.street != "") {
                    pageInfo.street = $scope.PageInfo.street;
                }
                if (typeof $scope.PageInfo.city != "undefined" && $scope.PageInfo.city != "") {
                    pageInfo.city = $scope.PageInfo.city;
                }
                if (typeof $scope.PageInfo.zipCode != "undefined" && $scope.PageInfo.zipCode != "") {
                    pageInfo.zipCode = $scope.PageInfo.zipCode;
                }
                if (typeof $scope.PageInfo.phone != "undefined" && $scope.PageInfo.phone != "") {
                    pageInfo.phone = $scope.PageInfo.phone;
                }
                pageService.addPage(pageInfo).
                        success(function(data, status, headers, config) {
                            requestFunction(data);
                        });
            }
        });
