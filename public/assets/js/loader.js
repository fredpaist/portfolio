/**
 * Created by fredp on 5/30/2017.
 */

var CssLocation = 'http://online.dev/public/assets/css/';
var JsLocation = 'http://online.dev/public/assets/js/';

var css = [
    'bootstrap.min.css',
    'animate.min.css',
    'paper-dashboard.css',
    'demo.css',
    'http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css',
    'https://fonts.googleapis.com/css?family=Muli:400,300',
    'themify-icons.css',
    'custom.css'
];

var js = [
    'bootstrap.min.js',
    'bootstrap-checkbox-radio.js',
    'demo.js',
    'custom.js'
];

loadCss(css);

loadJs(js);

function loadCss(files)
{
    for(var i = 0; i < files.length; i++){
        if(files[i].search('http')){
            $('head').append('<link href="'+CssLocation+files[i]+'" rel="stylesheet"/>');
        }else {
            $('head').append('<link href="'+files[i]+'" rel="stylesheet"/>');
        }
    }
}

function loadJs(files)
{
    for(var i = 0; i < files.length; i++){
        if(files[i].search('http')){
            $('body').append('<script src="'+JsLocation+files[i]+'" type="text/javascript"></script>');
        }else {
            $('body').append('<script src="'+files[i]+'" type="text/javascript"></script>');
        }
    }
}