angular.module('controllers.Test', []).
        controller('testController', function ($scope) {
            $scope.photos = [
                {"image": "http://localhost/muslimand/resources/images/profile_picture/150x150/7OdqKzxmuakkpRq.jpg", "name": "Cat on Fence"},
                {"image": "http://localhost/muslimand/resources/images/cover_picture/9Ixsx2qFkzWEliG.jpg", "name": "Cat in Sun"},
                {"image": "http://localhost/muslimand/resources/images/photos/albums/user_album/12743937_2380336878651567_1331589904391873430_n1.jpg", "name": "Blue Eyed Cat"},
                {"image": "http://localhost/muslimand/resources/images/photos/albums/user_album/12705447_932543446831073_8553385767911857321_n.jpg", "name": "Blue Eyed Cat"},
                {"image": "http://localhost/muslimand/resources/images/profile_picture/150x150/t87sqMzqcM86ee2.jpg", "name": "Patchy Cat"},
            ];
        });
