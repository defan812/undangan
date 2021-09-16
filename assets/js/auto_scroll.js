$(document).ready(function(){
    $('body,html').animate({scrollTop: 0},500); 
});

$(document).ready(function() {
    $("#btn").click(function(e){
        var jsonData = {};
        
        var formData = $("#myform").serializeArray();
        // console.log(formData);
        
        $.each(formData, function() {
                if (jsonData[this.name]) {
                if (!jsonData[this.name].push) {
                    jsonData[this.name] = [jsonData[this.name]];
                }
                jsonData[this.name].push(this.value || '');
            } else {
                jsonData[this.name] = this.value || '';
            }
                
            
        });
        console.log(jsonData);
            $.ajax(
            {
                url : "index.html",
                type: "POST",
                data : jsonData,
                
            });
            e.preventDefault();	
    });
});

function myFunction() {
    var copyText = "1530476321";
    copyText.select();
    document.execCommand("copy");

    var tooltip = document.getElementById("myTooltip");
    tooltip.innerHTML = "Tersalin" + copyText.value;
}

function outFunc(){
    var tooltip = document.getElementById("myTooltip");
    tooltip.innerHTML = "Salin Rekening" + copyText.value;
}
