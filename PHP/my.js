$(document).ready(function(){
    $("#addex").click(function(){
        $('.contain')
        .append('<input type="checkbox" name="check" class="check">')
        .append('<input type="text" class="example" id="txt2">')
        .append('<button id="remove">-</button>')
        .append('<br> <br>'); 
         
        $("#remove").click(function(){
            $(this).parent().remove();
        })
    
        $('.check').click(function() {
            $('.check').not(this).prop('checked', false);
        });
}) 

$('.check').click(function() {
    $('.check').not(this).prop('checked', false);
    
});
    var loginAdmin = $("#loginAdmin");
    var passAdmin = $("#passAdmin");
    var txt1=$("#txt1");
    var txt2=$("#txt2");
    var txt3=$("#txt3");
    var send=$("#send");
    var empty=$("#empty");
    var question=$("#question");
    var send__user = $("#send__user");
    var check1 = $("#check1");
    var check2 = $("#check2");
    var check3 = $("#check3");
    var inp__name = $("#inp__name");
    var inp__sirname = $("#inp__sirname");
    var for__question = $("#for__question");
    var answer1 = $("#answer1");
    var answer2 = $("#answer2");
    var answer3 = $("#answer3");   
    var login = $("#login");       
    console.log(for__question.val());

    send__user.click(function(event){
// alert("thanks");
        if(check1.is(':checked')) { 
        // event.preventDefault();

            }
            else{
        // event.preventDefault();

            }

    })

login.submit(function(event){
    if(loginAdmin.val()=="Admin" && passAdmin.val()=="1234"){
        
    }
    else{
        event.preventDefault();
        alert('Валидация не пройдена!');
    }
});
    send.click(function(){
        if(txt1.val()=="" || txt2.val()=="" || txt3.val()=="" || question.val()==""){
            console.log('errrrrrrrrr');
             return;
        }
        else{
        
        }

  
});

});