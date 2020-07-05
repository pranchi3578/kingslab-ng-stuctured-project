var app = angular.module("myApp", ["ngRoute"]);
app.config(function ($routeProvider) {
  $routeProvider.when("/api/edit.php", {
    templateUrl: "api/edit.php",
  });
});

function getResultsPage() {
  $http({
    url: URL + "/api/edit.php",
    method: "GET",
  }).then(function (res) {
    $scope.data = res.data.data;
  });
}
