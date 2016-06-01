<!DOCTYPE html>
<html>
  <head>
    <title>Missions</title>

    <link rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
      integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
      crossorigin="anonymous">

  </head>

  <body ng-app="mission">

    <div class="modal fade" tabindex="-1" role="dialog" id="newMissionModal"
      ng-controller="MissionFormCtrl">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Add New Mission</h4>
          </div>

          <form ng-submit="sendMission()">

            <div class="modal-body">

              <div class="form-group">
                <label for="#inputName">Mission Name</label>
                <input type="text" class="form-control" id="inputName" name="name"
                  ng-model="missionName">
              </div>

              <div class="form-group">
                <label for="#inputAddr1">Address 1</label>
                <input type="text" class="form-control" id="inputAddr1"
                  name="address_1" ng-model="addressOne">
              </div>

              <div class="form-group">
                <label for="#inputAddr2">Address 2 (Optional)</label>
                <input type="text" class="form-control" id="inputAddr2"
                  name="address_2" ng-model="addressTwo">
              </div>

              <div class="form-group">
                <label for="#inputCity">City</label>
                <input type="text" class="form-control" id="inputCity"
                  name="city" ng-model="city">
              </div>

              <div class="form-group">
                <label for="#inputState">State</label>
                <input type="text" class="form-control" id="inputState"
                  name="state" ng-model="state">
              </div>

              <div class="form-group">
                <label for="#inputZip">Zipcode</label>
                <input type="text" class="form-control" id="inputZip"
                  name="zip" ng-model="zip">
              </div>

              <div class="form-group">
                <label for="#inputPhone">Phone</label>
                <input type="text" class="form-control" id="inputPhone"
                  name="phone" ng-model="phone">
              </div>

              <div class="form-group">
                <label for="#inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail"
                  name="email" ng-model="email">
              </div>

              <div class="form-group">
                <label for="#inputPIC">Person in Charge</label>
                <input type="text" class="form-control" id="inputPIC" name="pic"
                  ng-model="pic">
              </div>

              <div class="form-group">
                <label for="#inputService">Service Time</label>
                <input type="text" class="form-control" id="inputService"
                  name="service_time" ng-model="serviceTime">
              </div>

            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>

          </form>

        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="container">

      <div class="page-header">
        <h1>Mission Admin</h1>
        <p class="lead"><a href="#newMissionModal" data-toggle="modal">Add New Mission</a></p>
      </div>

      <div class="row">

      </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
      integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
      crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.6/angular.min.js"></script>
    <script src="/lib/js/admin-missions.js"></script>

  </body>
</html>
