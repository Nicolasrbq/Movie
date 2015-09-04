var express = require('express'),
lessMiddleware = require('less-middleware'),
path = require('path'),
app = express();

app.set('view engine', 'ejs');

app.get('/', function(req, res){
	res.render('pages/index');
});

app.get('/about', function(req, res){
	res.render('pages/about');
});



app.use(express.static(__dirname + '/public'));

app.listen(8080);