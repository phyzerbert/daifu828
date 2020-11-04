$(function(){
    var lang = $("html").attr('lang');
    // $("input[data-type=timestamp]").datetimepicker({
    //     dateFormat: "dd-mm-yy",
    //     timeInput: true,
    //     timeFormat: "HH:mm",
    //     showHour: true,
    //     showMinute: true
    // });
    $("#header-deposit_form .btn-submit").click(function(){
        let amount = parseFloat($("#header-deposit_form .amount").val().trim());
        let point = parseFloat($("#header-deposit_form .point").val().trim());
        let game_point = parseFloat($("#header-deposit_form .game option:selected").data('value'));
        let selected_game = $("#header-deposit_form .game").val();
        if(amount > point){alert("You have to set point larger than amount."); return false;}
        if(game_point < point && selected_game != "10"){alert("Insufficient master credit point."); return false;}

        let attachment = $("#header-deposit_form .attachment")[0].files[0];
        let form_data = new FormData($("#header-deposit_form")[0]);
        form_data.append('attachment', attachment);
        let url = $("#header-deposit_form").attr('action');
        $("#ajax-loading").show();
        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'json', 
            cache: false,                   
            processData: false,
            contentType: false,
            data: form_data,
            success : function(data) {
                $("#ajax-loading").hide();
                
                if(data == 'success') {
                    // $("#depositModal").modal('hide');
                    if(lang == 'zh'){
                        alert('Deposit successfully.');   
                    }else{
                        alert('Deposit successfully.');
                    }
                                               
                    window.location.reload();
                }
                else if(data.message == 'The given data was invalid.') {
                    alert(data.message);
                }
            },
            error: function(data) {
                $("#ajax-loading").hide();
                console.log(data.responseJSON);
                if(data.responseJSON.message == 'The given data was invalid.') {
                    let messages = data.responseJSON.errors;
                    if(messages.transaction_code) {
                        $('#header-deposit_form .tran-error strong').text(data.responseJSON.errors.transaction_code[0]);
                        $('#header-deposit_form .tran-error').show();
                        $('#header-deposit_form .tran-code').focus();
                    }

                    if(messages.bank) {
                        $('#header-deposit_form .bank-error strong').text(data.responseJSON.errors.bank[0]);
                        $('#header-deposit_form .bank-error').show();
                        $('#header-deposit_form .bank_id').focus();
                    }

                    if(messages.game) {
                        $('#header-deposit_form .game-error strong').text(data.responseJSON.errors.game[0]);
                        $('#header-deposit_form .game-error').show();
                        $('#header-deposit_form .game_id').focus();
                    }

                    if(messages.date) {
                        $('#header-deposit_form .date-error strong').text(data.responseJSON.errors.date[0]);
                        $('#header-deposit_form .date-error').show();
                        $('#header-deposit_form .date').focus();
                    }

                    if(messages.hour) {
                        $('#header-deposit_form .time-error strong').text(data.responseJSON.errors.hour[0]);
                        $('#header-deposit_form .time-error').show();
                        $('#header-deposit_form .time').focus();
                    }

                    if(messages.minute) {
                        $('#header-deposit_form .time-error strong').text(data.responseJSON.errors.minute[0]);
                        $('#header-deposit_form .time-error').show();
                        $('#header-deposit_form .time').focus();
                    }

                    if(messages.amount) {
                        $('#header-deposit_form .amount-error strong').text(data.responseJSON.errors.amount[0]);
                        $('#header-deposit_form .amount-error').show();
                        $('#header-deposit_form .amount').focus();
                    }             

                }
            }
        });
    });

    $("#header-withdraw_form .btn-submit").click(function(){
        let url = $("#header-withdraw_form").attr('action');
        $("#ajax-loading").show();
        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: $('#header-withdraw_form').serialize(),
            success : function(data) {
                $("#ajax-loading").hide();
                
                if(data == 'success') {                    
                    if(lang == 'zh'){
                        alert('Withdraw successfully.');   
                    }else{
                        alert('Withdraw successfully.');
                    }                         
                    window.location.reload();
                }else if(data == 'error'){
                    alert('Insufficient balance.'); 
                }else if(data.message == 'The given data was invalid.') {
                    alert(data.message);
                }
            },
            error: function(data) {
                $("#ajax-loading").hide();
                console.log(data.responseJSON);
                if(data.responseJSON.message == 'The given data was invalid.') {
                    let messages = data.responseJSON.errors;
                    if(messages.transaction_code) {
                        $('#header-withdraw_form .tran-error strong').text(data.responseJSON.errors.transaction_code[0]);
                        $('#header-withdraw_form .tran-error').show();
                        $('#header-withdraw_form .tran_code').focus();
                    }

                    if(messages.bank) {
                        $('#header-withdraw_form .bank-error strong').text(data.responseJSON.errors.bank[0]);
                        $('#header-withdraw_form .bank-error').show();
                        $('#header-withdraw_form .bank_id').focus();
                    }

                    if(messages.game) {
                        $('#header-withdraw_form .game-error strong').text(data.responseJSON.errors.game[0]);
                        $('#header-withdraw_form .game-error').show();
                        $('#header-withdraw_form .game_id').focus();
                    }

                    if(messages.date) {
                        $('#header-withdraw_form .date-error strong').text(data.responseJSON.errors.date[0]);
                        $('#header-withdraw_form .date-error').show();
                        $('#header-withdraw_form .date').focus();
                    }
                    
                    if(messages.hour) {
                        $('#header-withdraw_form .time-error strong').text(data.responseJSON.errors.hour[0]);
                        $('#header-withdraw_form .time-error').show();
                        $('#header-withdraw_form .time').focus();
                    } 

                    if(messages.minute) {
                        $('#header-withdraw_form .time-error strong').text(data.responseJSON.errors.minute[0]);
                        $('#header-withdraw_form .time-error').show();
                        $('#header-withdraw_form .time').focus();
                    }

                    if(messages.amount) {
                        $('#header-withdraw_form .amount-error strong').text(data.responseJSON.errors.amount[0]);
                        $('#header-withdraw_form .amount-error').show();
                        $('#header-withdraw_form .amount').focus();
                    }
                }
            }
        });
    });

    $("#header-transfer_form .btn-submit").click(function(){
        let url = $("#header-transfer_form").attr('action');
        $("#ajax-loading").show();
        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: $('#header-transfer_form').serialize(),
            success : function(data) {
                $("#ajax-loading").hide();
                
                if(data == 'success') {                    
                    if(lang == 'zh'){
                        alert('Transfer successfully.');   
                    }else{
                        alert('Transfer successfully.');
                    }                          
                    window.location.reload();
                }else if(data == 'error'){
                    alert('Your game points is insufficient.'); 
                }else if(data.message == 'The given data was invalid.') {
                    alert(data.message);
                }
            },
            error: function(data) {
                $("#ajax-loading").hide();
                console.log(data.responseJSON);
                if(data.responseJSON.message == 'The given data was invalid.') {
                    let messages = data.responseJSON.errors;
                    
                    if(messages.from_id) {
                        $('#header-transfer_form .from-error strong').text(data.responseJSON.errors.from_id[0]);
                        $('#header-transfer_form .from-error').show();
                        $('#header-transfer_form .bank_id').focus();
                    }

                    if(messages.to_id) {
                        $('#header-transfer_form .to-error strong').text(data.responseJSON.errors.to_id[0]);
                        $('#header-transfer_form .to-error').show();
                        $('#header-transfer_form .game_id').focus();
                    }

                    if(messages.amount) {
                        $('#header-transfer_form .amount-error strong').text(data.responseJSON.errors.amount[0]);
                        $('#header-transfer_form .amount-error').show();
                        $('#header-transfer_form .amount').focus();
                    }
                }
            }
        });
    });

    $(".customer_id").change(function(){
        let customer_id = $(this).val();
        let parent_form = $(this).parents('form').attr('id');
        $.ajax({
            url: "/get_customer_data",
            type: "POST",
            data: {customer_id: customer_id},
            dataType: "JSON",
            success: function(data){
                $("#"+parent_form+" .game").html("<option value=''>Select a game</option>");
                for (let i = 0; i < data.length; i++) {
                    const element = data[i];
                    $("#"+parent_form+" .game").append(`
                        <option value="${element.id}" data-value="${element.point}">${element.name}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Points :  ${element.point})</option>
                    `);
                }
            },
            error: function(errors){
                console.log(errors);
            }
        });
    });
});