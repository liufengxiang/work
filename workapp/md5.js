var crypto = require('crypto');
function md5(str){
    var hmac = crypto.createHash('md5');
    hmac.update('str');
    return (hmac.digest('hex'));
}
module.exports=md5;