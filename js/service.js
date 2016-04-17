(function (angular) {
    angular.module('starter')
    .service('starter.UserService', [addService]);


    function addService() {

        var Users = [];
        var Userid=0;
        var count = 0;
        this.insertUser = insertUser;
        this.GetUsers = getUsers;
       
        //this.EditFlag = editflag;
        //this.GetCount = getcount;
        this.GetsUserID = getUserid;
        //this.EditUser = editUser;
//to add new user
        function insertUser(user) {
            Userid++;
            user.id = Userid;
            Users.push(user);
           
        }
        //to get all users
        function getUsers() {

            return Users;
        }
      
        //function editflag(id) {
        //    Userid = id;
        //    count = 1;
        //    return count;
        //}
        //function getcount() {
        //    return count;

        //}
        //to verify that user present in it or not
        function getUserid(logindata) {
            var ans="";
            for (var i = 0; i < Users.length; i++) {
                if (logindata.username == Users[i].username && logindata.password==Users[i].password) {
                     ans= Users[i].id;
                }


            }
            return ans;
        }
        ////to edit the password of the user
        //function editUser(user) {
        //    for (var i = 0; i < Users.length; i++) {
        //        if (user.ID == Users[i].ID) {
        //            Users[i].Name = user.Name;
        //            Users[i].password = user.password;
                   

        //            count = 0;
        //        }


        //    }



        //}

    }
    //function showService() {

    //  var a = addService.getUsers();

    //    }

})(angular);