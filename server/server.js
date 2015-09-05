var express = require('express'),
less = require('less'),
fs = require('fs'),
mysql = require('mysql'),
path = require('path'),
i18n = require('i18next'),
app = express();

var cssPath = 'public/css/';
var movies = [];


/** Configure LESS CSS */
(function() {
    var src = cssPath + 'styles.less';
    less.render(fs.readFileSync(src).toString(), {
        filename: path.resolve(src),
    }, function(e, output) {
		fs.writeFileSync(cssPath + 'styles.css', output.css, 'utf8');
    });
})();

/** Configure mysql connection */
var connection = mysql.createConnection({
    host     : 'localhost',
    user     : 'root',
    port     : '8889',
    password : 'root',
    database : 'movie'
});
connection.connect();


/** app set */
app.set('view engine', 'ejs');

/** app get */
app.get('/', function(req, res){
    res.render('pages/index');
    connection.query('SELECT * FROM movie', function(err, rows, fields) { 
        //res.end(JSON.stringify(rows));
        res.json(rows);
    });
});
app.get('/movie', function(req, res){
	res.render('pages/movie');
});
app.get('/about', function(req, res){
	res.render('pages/about');
});

/** app use */
app.use('/static', express.static(__dirname + '/public'));
app.use('/client', express.static(__dirname + '/../client'));



app.listen(8080);