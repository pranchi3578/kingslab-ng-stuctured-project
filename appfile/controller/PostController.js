var app = angular.module("myApp", []);
console.log("in past controller");
app.controller("myCtrl", function ($scope, $http) {
  $scope.insert = function () {
    $http
      .post("api/add.php", {
        username: $scope.username,
        phone: $scope.phone,
        password: $scope.password,
        time: $scope.time,
      })
      .success(function (data) {
        $scope.username = null;
        $scope.phone = null;
        $scope.password = null;
        $scope.time = null;
      });
  };
});

function getResultsPage() {
  $http({
    url: URL + "/api/add.php",
    method: "POST",
  }).then(function (res) {
    $scope.data = res.data.data;
  });
}
