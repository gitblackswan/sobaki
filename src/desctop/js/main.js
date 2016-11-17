var requared = $('input[data-required]');
var modal = '.modal';
var form = $('form');
var yaCounter;
var ga;
$('input[name="phone"]').mask('+7 (999) 999-99-99');
requared.blur(function() {var self = $(this);if($(this).val().length == "") {self.addClass('input_error');setTimeout(function () {self.removeClass('input_error')}, 2000)}});
requared.focus(function() {$(this).removeClass('input_error');});
function getURLParameter(name) {return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search)||[,""])[1].replace(/\+/g, '%20'))||null;}
function run_geo(geo_url){
    $.ajax({type: 'GET',url: geo_url,dataType: 'xml',
        success: function(xml) {$(xml).find('ip').each(function(){
            var city = $(this).find('city').text();
            var region = $(this).find('region').text();
            if(city!=region){var ipg = city+', '+region;}else{var ipg = city;}
            $('<input type="hidden" />').attr({name: 'location', class: 'location', value:ipg}).appendTo("form");
        });}});
}
$.get("http://ipinfo.io", function(response) {geo_url='http://ipgeobase.ru:7020/geo?ip='+response.ip; run_geo(geo_url);}, "jsonp");
utm=[];$.each(["utm_source","utm_medium","utm_campaign","utm_term",'source_type','source','position_type','position','added','creative','matchtype'],function(i,v){$('<input type="hidden" />').attr({name: v, class: v, value: function(){if(getURLParameter(v) == undefined)return '-'; else return getURLParameter(v)}}).appendTo("form")});
$('<input type="hidden" />').attr({name: 'url', value: document.location.href}).appendTo("form");
$('<input type="hidden" />').attr({name: 'title', value: document.title}).appendTo("form");


var close = function () {
    $(modal).addClass('hidden');
    $(modal + '>div:not(.layout)').addClass('hidden');
    $('body').removeClass('menu-active');
};


var open = function () {
    $(modal).removeClass('hidden');
    $($(this).data('modal')).removeClass('hidden')
};


var submit_track_event = function (event) {
    if(yaCounter){
        yaCounter.reachGoal(event);
    }
    if(ga){
        ga('send', 'event', 'submit', event);
    }
};
form.submit(function(e){
    e.preventDefault();
    var self = $(this);
    var requared = true;
    var inputs = self.find('[data-required]');

    for(var i = 0; i < inputs.length; i++){
        if(inputs.eq(i).val() == '') {
            requared = false;
        }
    }
    if(requared){
        var type = self.attr('method');
        var url = self.attr('action');
        var data = self.serialize();
        var track_event = self.find('input[name="event"]').val();

        $.ajax({type: type, url: url, data: data,
            success : function(){
                submit_track_event(track_event);
                $('#success-pop').arcticmodal();
                self.find('input[type="text"]').val('');
                $('.step').addClass('hidden');
                $('[data-step="0"]').removeClass('hidden');
                setTimeout(function () {
                    $.arcticmodal('close');
                }, 2000);
            }
        });
    }
    else{
        $('#error-pop').arcticmodal();
        for(var i = 0; i < inputs.length; i++){
            if(inputs.eq(i).val() == '') {
                inputs.eq(i).addClass('input_error');
                setTimeout(function () {
                    inputs.removeClass('input_error');
                }, 2000);
            }
        }
    }
});


//// скрипт закрывающий форму
$('[data-btn-type="close"]').on('click', close);

//// скрипт открывающий форму
$('[data-modal]').on('click', open);


$('[data-toggle]').on('click', function(){
    var data = $(this).data('toggle');
    $(this).toggleClass(data);
});

$('[data-body-class]').on('click', function(){
    var data = $(this).data('body-class');
    $('body').toggleClass(data);
});

function stabilize(){
    $('section:not(.menu)').each(function(index, el) {
        var self = $(this);
        var eTop = self.offset().top;
        var posTop = eTop - $(window).scrollTop();
        if(posTop>-$(window).height()/2&&posTop<$(window).height()/2){
            $("html, body").animate({ scrollTop: $(this).offset().top}, 250);
        }
    });
}

function menuColor(){
    $('section:not(.menu)').each(function(index, el) {
        var self = $(this);
        var sectionClass = self.data('block-color');
        var eTop = self.offset().top;
        var posTop = eTop - $(window).scrollTop();
        if($(window).scrollTop() >= self.offset().top){
            $('body').removeClass('dark-block');
            $('body').addClass(sectionClass);
        }
    });
}

$(window).scroll(function(){
    if($(window).outerWidth() > 319){
        menuColor();
    }
    if(!isMobile && $(window).outerWidth() > 980 && $(window).outerHeight() > 600){
        clearTimeout($.data(this, 'scrollTimer'));
        $.data(this, 'scrollTimer',setTimeout(stabilize,1500));
    }
});

$('.play').on('click', function (e) {
    e.preventDefault();
    var videoId = $(this).attr('href');
    var videoTpl = '<iframe width="100%" height="100%" src="https://www.youtube.com/embed/'+ videoId +'?autoplay=1" frameborder="0"  allowfullscreen></iframe>';
    var container = $(this).parent().find('.video-container');
    container.addClass('active');
    container.html(videoTpl);
});


var construct = function () {
    var resolveStep = false;

    var nextStep = function () {
        $('.step').addClass('hidden');
        step++;
        $('[data-step="'+ step +'"]').removeClass('hidden');
    };

    var prevStep = function () {
        $('.step').addClass('hidden');
        step--;
        $('[data-step="'+ step +'"]').removeClass('hidden');
    };

    var step = 0;
    var result = [];
    $('[data-step-item]').on('click', function () {
        resolveStep = true;
        $('[data-step-item]').removeClass('active');
        $(this).addClass('active');
        result[step] = $(this).data('step-item');

        $('.step [name="result"]').val(result);

        nextStep();
    });

    $('.step .btn-prev').on('click', prevStep);
};

construct();

var prevBtnTpl = '<button class="slick-prev"><img src="img/prev.png"><img src="img/prev-hover.png"></button>';
var nextBtnTpl = '<button class="slick-next"><img src="img/next.png"><img src="img/next-hover.png"></button>';

$('.s4-slider').slick({
    prevArrow: prevBtnTpl,
    nextArrow: nextBtnTpl,
    responsive: [
        {
            breakpoint: 960,
            settings: {
                arrows: false,
                dots: true
            }
        }
    ]
});
$('.s4-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    $('.video-container').removeClass('active').html('');
});

setTimeout(function () {
    $('.s5-slider').slick({
        slidesToShow: 3,
        prevArrow: prevBtnTpl,
        nextArrow: nextBtnTpl,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 980,
                settings: {
                    arrows: false,
                    dots: true,
                    slidesToShow: 1,
                }
            }
        ]
    });
    $('.s5-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        $('.video-container').removeClass('active').html('');
    });
}, 100);

$('[data-bg-pic]').each(function () {
    var pic = $(this).data('bg-pic');
    $(this).css({backgroundImage: 'url('+ pic +')'});
});

var picCounter = 1;
setInterval(function () {
    if(picCounter > $('.s3 .pic').length/2){
        picCounter = 1;
    }

    $('.s3 .pic-wrap .pic').removeClass('active');
    $('.s3 .pic-wrap .pic:nth-of-type('+ picCounter +')').addClass('active');
    picCounter++;
}, 1500);

var navList = $('.menu__list-item a');

navList.on('click', function(e){
    var href = $(this).attr('href');
    e.preventDefault();
    $('body, html').animate({
        scrollTop: $(href).offset().top
    },600, close);

});

$('[data-scroll]').on('click', function () {
    var data = $(this).data('scroll');

    $('body, html').animate({
        scrollTop: $(data).offset().top
    },600);
});