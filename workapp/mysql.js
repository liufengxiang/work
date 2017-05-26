var mysql=require("mysql");
var con=mysql.createConnection({
    host:"localhost",
    port:"",
    user:"root",
    password:"",
    database:"pachong"
})
module.exports=con;