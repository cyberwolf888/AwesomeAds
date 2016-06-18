/* 22. _form_contact.min.js
 -----------------------------------------------------------------------------------------------*/
var THEMEREX_validateForm=null;
function userSubmitForm(e,c,d){
    var b=false;
    var a=e.data("formtype")=="custom";
    if(!a){
        b=formValidate(e,{
            error_message_show:true,
            error_message_time:5000,
            error_message_class:"sc_infobox sc_infobox_style_error",
            error_fields_class:"error_fields_class",
            exit_after_first_error:false,
            rules:[
                {
                    field:"type",
                    min_length:{value:1,message:"Ads Type can't be empty"}
                },
                {
                    field:"name",
                    min_length:{value:1,message:THEMEREX_NAME_EMPTY},
                    max_length:{value:100,message:THEMEREX_NAME_LONG}
                },
                {
                    field:"email",
                    min_length:{value:7,message:THEMEREX_EMAIL_EMPTY},
                    max_length:{value:60,message:THEMEREX_EMAIL_LONG},
                    mask:{value:THEMEREX_EMAIL_MASK,message:THEMEREX_EMAIL_NOT_VALID}
                },
                {
                    field:"phone",
                    min_length:{value:1,message:"Your phone number is too short"},
                    max_length:{value:15,message:"Your phone number is too long"}
                },
                {
                    field:"payment",
                    min_length:{value:1,message:"Ads Type can't be empty"}
                },
                {
                    field:"content",
                    min_length:{value:1,message:"The content can't be empty"}
                }
            ]
        })
    }
    if(!b&&c!="#"){
        document.getElementById("adsForm").submit();
    }
}

function userSubmitFormResponse(b){
    var c=JSON.parse(b);
    var a=THEMEREX_validateForm.find(".result").toggleClass("sc_infobox_style_error",false).toggleClass("sc_infobox_style_success",false);
    if(c.error==""){
        a.addClass("sc_infobox_style_success").html(THEMEREX_SEND_COMPLETE);
        setTimeout(function(){a.fadeOut();THEMEREX_validateForm.get(0).reset()},3000)
    }else{
        a.addClass("sc_infobox_style_error").html(THEMEREX_SEND_ERROR+" "+c.error)
    }
    a.fadeIn()
};