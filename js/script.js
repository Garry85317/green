// JavaScript Document
$(function(){
	setSpinner();
    validateCharging_amount();
    validateCharging_time();
});
function setSpinner(){
    setTimeout(function(){
        $('.spinner').addClass('disappear');
    },500);
	
}
function validateCharging_amount(){
    if($('#charging_amount').length>0){
        $('#charging_amount').change(function(){
            if(!$.isNumeric($('#charging_amount').val())){
                $('#charging_amount').val('');
                alert('請輪入正確數值');
            }else if(Number($('#charging_amount').val())<=0 || Number($('#charging_amount').val())>100){
                $('#charging_amount').val('');
                alert('請輪入數值不可超過 100 且大於 0值');
            }
        });
    }
}
function validateCharging_time(){
    if($('#charging_time').length>0){
        $('#charging_time').change(function(){
            if(!$.isNumeric($('#charging_time').val())){
                $('#charging_time').val('');
                alert('請輪入正確數值');
            }else if(Number($('#charging_time').val())<=0 ){
                $('#charging_time').val('');
                alert('數值需大於 0');
            }
        });
    }
}