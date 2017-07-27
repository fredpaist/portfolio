/**
 * Created by fredp on 5/30/2017.
 */

var JsLocation = 'http://portfolio.dev/public/assets/js/';

var js = [
    'bootstrap.min.js',
    'bootstrap-checkbox-radio.js',
    'demo.js',
    'custom.js'
];

loadJs(js);

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