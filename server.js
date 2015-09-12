var express = require('express'),
less = require('./my_modules/less'),
fs = require('fs'),
mysql = require('mysql'),
path = require('path'),
i18n = require('i18next'),

app = express();

app.configure( function(){
    app.engine('html', require('ejs').renderFile);
});

less.getLess();

/** Configure mysql connection */
var connection = mysql.createConnection({
    host     : 'localhost',
    user     : 'root',
    port     : '8889',
    password : 'root',
    database : 'movie'
});
connection.connect();

/** app get */
app.get('/', function(req, res){
	connection.query('SELECT * FROM movie', function(err, rows, fields) {      
        res.render('pages/index.html', {
            movies: rows
        });
    })
});
app.get('/movie', function(req, res){
	res.render('pages/movie.html');
});
app.get('/about', function(req, res){
	res.render('pages/about.html');
});

/** app use */
app.use('/static', express.static(__dirname + '/public'));



app.listen(8080);