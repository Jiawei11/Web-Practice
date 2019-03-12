let worker = new Worker('workers.js');
document.getElementById('test').addEventListener('click', function () {
    worker.postMessage('start');
});
$(function(){        
    $('#ChatMain>div').on('contextmenu',function(){
        if($('#box').attr('Check') == undefined){
            $('#box').css('display','block');
            $('#box').attr('Check',false);
        }else{
            $('#box').css('display','none');
            $('#box').removeAttr('Check');
        }
        return false;
    })

    $('#SendTexTBtn').click(function(){
        $('#ChatMain').append('<div align="right" >'+ $('#SendText').val() +'</div>');
        $('#SendText').val('');
    })
})