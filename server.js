var express = require('express'),
less = require('./my_modules/less'),
grunt = require('./my_modules/gruntfiles'),
fs = require('fs'),
mysql = require('mysql'),
path = require('path'),
i18n = require('i18next'),
grunt = require('grunt'),
app = express();

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

/** app set */
app.set('view engine', 'ejs');

/** app get */
app.get('/', function(req, res){
    connection.query('SELECT * FROM movie, author, gender GROUP BY id_movie', function(err, rows, fields) {
        //console.log(rows);
        res.render('pages/index', {
            movies: rows
        });
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

app.listen(8080);