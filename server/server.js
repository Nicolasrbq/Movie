var express = require('express'),
less = require('less'),
fs = require('fs'),
path = require('path'),
i18n = require('i18next'),
app = express();

var cssPath = 'public/css/';

app.set('view engine', 'ejs');

app.get('/', function(req, res){
	res.render('pages/index');
});

app.get('/about', function(req, res){
	res.render('pages/about');
});

(function() {
    var src = cssPath + 'styles.less';
    less.render(fs.readFileSync(src).toString(), {
        filename: path.resolve(src),
    }, function(e, output) {
		fs.writeFileSync(cssPath + 'styles.css', output.css, 'utf8');
    });
})();

app.use('/static', express.static(__dirname + '/public'));
app.use('/client', express.static(__dirname + '/../client'));

app.listen(8080);