






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
   
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
<script src="appfile/route.js"></script>
<script src="appfile/controller/postController.js"></script>


  </head>

  <body class="body" ng-app="myApp">
      <a href="api/edit.php">click here to route and get data</a>
      <div ng-view></div>
    <div class="jumbotron text-center">
      <h1>SignUp</h1>
    </div>
    <div  class="formParent" ng-controller="myCtrl" >
    
        <input placeholder="username" type="text" name="username" ng-model="username"/>
        <input placeholder="phone number" type="text" name="phone" ng-model="phone" />
        <input placeholder="password" type="text" name="password" ng-model="password" />
        <input type="time" name="time" ng-model="time">
        <br>
        username:<p>{{username}}</p>
        <br>
         phone:<p>{{phone}}</p>
         <br> 
         password:<p>{{password}}</p>
         <br>
         {{time}}

        <input  type="submit" name="insert" ng-click="insert()" value="submit" class="btn btn-success">
      
    </div>
  </body>
</html>