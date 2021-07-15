var height = $(window).height();
$('.main').height(height);

getPrice();

setInterval(getPrice, 10000);

function getPrice(){
    $.get("https://apibitcoin.herokuapp.com/getBTCPrice", {}, function(data){

        addTextColor(data);
            
        $('#price').text(data['last'] + ' ' + 'US$');
        $('#average').text(data['averages']['day'] + ' ' + 'US$');
        $('#percentage').text(data['percentage'] + ' ' + '%');

    });
}

function addTextColor(data){

    var actualPrice = $("#price").text().replace(' US$', '');
    var actualAverage = $("#average").text().replace(' US$', '');    

    if(actualPrice < data['last'] && $('#price').hasClass('minus')){
        $('#price').removeClass('minus');
        $('#price').addClass('plus')
    }else if(actualPrice > data['last'] && $('#price').hasClass('plus')){
        $('#price').removeClass('plus');
        $('#price').addClass('minus')
    }

    if(actualAverage < data['averages']['day'] && $('#average').hasClass('minus')){
        $('#average').removeClass('minus');
        $('#average').addClass('plus')
    }else if(actualAverage > data['averages']['day'] && $('#average').hasClass('plus')){
        $('#average').removeClass('plus');
        $('#average').addClass('minus')
    }
    
}