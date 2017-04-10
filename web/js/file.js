$('#w0').on('keyup', function(){
    fitToText();
});

function fitToText(){
    $("#w0").height($("#w0").val().split("\n").length * 30);
}
