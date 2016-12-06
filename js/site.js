function backOn(){
  if(!$("div").is(".back")){
  $("body").prepend("<div class='back' onclick='backOff()' style='position:fixed;width:100%;height:1000px;background:black;opacity:0.7;z-index:1000;'></div>");
  }
}

function backOff(){
  if($("div").is(".back")){
    $('html, body').animate({ scrollTop: 0 }, 500); // анимируем скроолинг к элементу scroll_el
  $(".ResultWrap").slideUp('slow');
  $(".back").remove();
  }
}
$(document).ready(function(){

$(".HideCalc").click(function(){

    backOff();
});



var cleanTypePrice = {
        1 : {50 : 75, 60 : 73, 70 : 71, 80 : 69, 90 : 67, 100 : 65},
        2 : {50 : 82, 60 : 80, 70 : 78, 80 : 76, 90 : 74, 100 : 70},
        3 : {50 : 87, 60 : 85, 70 : 83, 80 : 81, 90 : 79, 100 : 75},
}

var cleanTypeTranscript = {
    1 : "Генеральная уборка помещений",
    2 : "Уборка после ремонта",
    3 : "Эко-уборка",
}

$(".clean").change(function(){
    var cleanType = $(".calcSelectorType").val();
    var cleanSq = $(".calcSelectorSq").val();

    $(".CalcResult").html("");
    $(".calcInputSq").val("");
    $(".CleaningContent-1").css("display","none");
    $(".CleaningContent-2").css("display","none");
    $(".CleaningContent-3").css("display","none");
    $(".danger-text").html("");
    $(".alert-danger").css("display","none");
    $(".alert-success").css("display","none");

    cleanSq == 100 ? $(".calcInputSq").css("display","block") : $(".calcInputSq").css("display","none");

});

$(".btn-calc").click(function(){
    $(".alert-danger").css("display","none");
    $(".alert-success").css("display","none");


    var cleanType = $(".calcSelectorType").val();
    var cleanSq = $(".calcSelectorSq").val();
    console.log(cleanSq);
    if(cleanType!=='0' & cleanSq!=='0'){
      $('html, body').animate({ scrollTop: $(".btn-calc").offset().top }, 500); // анимируем скроолинг к элементу scroll_el
      //backOn();
        if(cleanType==1 || cleanType==2 || cleanType==3){



            if(cleanSq == 100){


                    cleanSq = $(".calcInputSq").val();
                    if(cleanSq > 90){
                    var cleanSum = cleanTypePrice[cleanType][100]*cleanSq;
                    cleanSum ? $(".CalcResult").html(cleanSum+" руб.*") : $(".CalcResult").html("");

                        if(cleanType == 1){
                            $(".CleaningContent-1").show();
                            $(".ResultWrap").slideDown();
                        }
                        else if (cleanType == 2){
                            $(".CleaningContent-2").show();
                             $(".ResultWrap").slideDown();
                        }
                        else if(cleanType == 3){
                          $(".CleaningContent-3").show();
                           $(".ResultWrap").slideDown();
                        }

                    }else{
                        $(".danger-text").html("Введите значение более 90 кв.м.");
                        $(".alert-danger").show();
                        $(".ResultWrap").slideDown();
                        //alert("введите больше 90");
                    }

            }else{
                var cleanSum = cleanTypePrice[cleanType][cleanSq]*cleanSq;
                $(".calcInputSq").css("display","none");
                 cleanSum ? $(".CalcResult").html(cleanSum+" руб.*") : $(".CalcResult").html("");

                        if(cleanType == 1){
                            $(".CleaningContent-1").show();
                             $(".ResultWrap").slideDown();
                        }
                        else if (cleanType == 2){
                            $(".CleaningContent-2").show();
                             $(".ResultWrap").slideDown();
                        }
                        else if (cleanType == 3){
                            $(".CleaningContent-3").show();
                             $(".ResultWrap").slideDown();
                        }
            }

        }
      }

});

$(".btn-zakaz").click(function(){

    var cleanType = cleanTypeTranscript[$(".calcSelectorType").val()];
    $(".calcSelectorSq").val() == 100 ? cleanSq = $(".calcInputSq").val() : cleanSq = $(".calcSelectorSq").val();
    var calcResult = $(".CalcResult").html();
    var phone = $(".phone").val();
    var name = $(".name").val();
    if(phone == "" || name == ""){
        $(".danger-text").html("Введите номер телефона и имя");
        $(".alert-danger").slideDown('slow');
    }
    else{
      $(this).html("Подождите");
      $(this).addClass("disabled");
        $(".danger-text").html("");
        $(".alert-danger").slideUp('slow');
        $.post("/zakaz",{phone : phone, name : name, type : cleanType, square : cleanSq, money : calcResult}).done(function(data){
           if(data == "true"){
                $(".danger-text").html("");
                $(".alert-danger").slideUp('slow');
                $(".CleaningContent-1").slideUp('slow');
                $(".CleaningContent-2").slideUp('slow');
                $(".zakaz-wrap").slideUp("");
                $(".phone").val("");
                $(".name").val("");
                $(".alert-success").slideDown('slow');
                $(".success-text").html("Спасибо за обращение в компанию «РусУборка», в ближайшее время с Вами свяжутся наши менеджеры для подтверждения заказа.");

           }
           else{
                $(".danger-text").html("Произошла неизвестная ошибка");
                $(".alert-danger").slideDown('slow');
           }
           $(".btn-zakaz").removeClass("disabled");
           $(".btn-zakaz").html("Заказать уборку");
        })

    }
});


});
