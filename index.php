






<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
    <link rel="styleSheet" href="home.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
<script src="appfile/route.js"></script>
<script src="appfile/controller/PostController.js"></script>


  </head>

  <body class="body" ng-app="myApp">
      <a href="#!/zzz">click here to route to post.html 1</a>
      <div ng-view></div>
    <div class="jumbotron text-center">
      <h1>SignUp</h1>
    </div>
    <div  class="formParent" ng-controller="myCtrl">
      <form action="home.php" method="post" class="form">
        <input placeholder="username" type="text" name="username" ng-model="username"/>
        <input placeholder="phone number" type="text" name="phone" ng-model="phone" />
        <input placeholder="password" type="text" name="password" ng-model="password" />
        <br>
        username:<p>{{username}}</p>
        <br>
         phone:<p>{{phone}}</p>
         <br> 
         password:<p>{{password}}</p>
        <button type="submit" name="submit">SignUp</button>
      </form>
    </div>
  </body>
</html>