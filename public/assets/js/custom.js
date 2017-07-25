/**
 * Created by fred.paist on 16.05.2017.
 */
$(document).ready(function () {

    $('.menu-1 ul li').click(function(e){
        e.preventDefault();
        var view = $(this).data('view');
        sessionStorage.view = view;
        $('.menu-1 ul li').removeClass('active');
        $(this).addClass('active');
        loadView(view);
    });

    $(document).on('click', '.job-list div a', function(e){
        e.preventDefault();
        var id = $(this).attr('href').replace('#', '');
        loadProject(id);
    });

    $( document ).on('keyup', '.search input', function() {
        findFile($(this).val());
    });

    if(sessionStorage.view){
        $('.menu-1 ul li[data-view="'+sessionStorage.view+'"]').click();
    }else {
        loadView('home');
    }


});

function loadView(view)
{
    data = {
        'view' : view,
        'set' : true,
        'action' : 'output',
    };

    $.post('public/ajax-content.php', data, function (data) {
        $('.view-place').html(data);
        if(view == 'home')sirkl('.first-sirkl');
        if(view == 'portfolio')$('.job-list div:first-child').find('a').click();
    });
}


function sirkl(el){
    $(el).circleProgress({fill: {color: '#1682EF'}})
        .on('circle-animation-progress', function(event, progress, stepValue){
            $(this).find('.score').text(String(stepValue.toFixed(2)).substr(2));
        });
}

function loadProject(name)
{
    data = {
        'view' : name,
        'set' : true,
        'action' : 'project'
    };

    $.post('public/ajax-content.php', data, function (data) {
        $('.project').html(data);
    });
}

function findFile(input){
    $.each($('.files .file-item'), function(k, v){
        var filename = $(v).find('a').children('.name').html();
        if(input){
            if(filename.toLowerCase().indexOf(input.toLowerCase()) == -1){
                $(v).hide();
            }else{$(v).show();}
        }else {
            $(v).show();
        }

    });
}