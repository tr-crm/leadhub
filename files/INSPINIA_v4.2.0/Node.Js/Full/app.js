const express = require('express');
const app = express();
const path = require('path');
const route = require('./routes/route');
const expressLayouts = require('express-ejs-layouts');
const session = require('express-session');
const cookieParser = require('cookie-parser');
const upload = require('express-fileupload');

app.set('views', path.join(__dirname, '/views'));
app.set('view engine', 'ejs');
app.use(upload());

app.use(express.json());
app.use(session({ resave: false, saveUninitialized: true, secret: 'nodedemo' }));
app.use(cookieParser());

app.set('layout', 'partials/vertical-layout');
app.use(expressLayouts);

app.use(express.static(__dirname + '/public'));

app.use('/', route);

const http = require("http").createServer(app);

const port = 3000

http.listen(port, () => {
    console.log(`Server running on port ${port}`)
    console.log(`http://localhost:${port}`)
});