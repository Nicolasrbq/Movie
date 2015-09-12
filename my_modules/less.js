var less = require('less'),
path = require('path'),
fs = require('fs');

var cssPath = 'public/css/';

function getLess(){
    var src = cssPath + 'styles.less';
    less.render(fs.readFileSync(src).toString(), {
        filename: path.resolve(src),
    }, function(e, output) {
		fs.writeFileSync(cssPath + 'styles.css', output.css, 'utf8');
    });
}

exports.getLess = getLess;