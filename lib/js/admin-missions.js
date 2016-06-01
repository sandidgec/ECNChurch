/**
 * JS for handling the missions part of the dashboard.
 * * * * */

var app = angular.module('mission', []);

app.controller('MissionFormCtrl', ["$scope", "$http",
  function($scope, $http) {

    $scope.sendMission = function() {

      console.log("Called!");

      $http({
        url: "/php/API/missions/index.php",
        method: "POST",
        data: {
          "name": $scope.missionName,
          "address1": $scope.addressOne,
          "address2": $scope.addressTwo,
          "city": $scope.city,
          "state": $scope.state,
          "zipCode": $scope.zip,
          "phone": $scope.phone,
          "email": $scope.email,
          "pic": $scope.pic,
          "serviceTime": $scope.serviceTime
        }
      }).then($scope.refreshTable, $scope.showError);
    }

    $scope.refreshTable = function() {
      alert("It Worked");
    }

    $scope.showError = function() {

    }

}]);
