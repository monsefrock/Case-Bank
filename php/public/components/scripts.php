<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function showToast(){
    const t = document.getElementById('clipbords');
    t.classList.remove('hidden');
    setTimeout(()=>{ t.classList.add('hidden'); }, 2000);
}
$(document).on('click','#liveToastBtn_mon', function (){
    var difficulty = $("[name='difficulty']:enabled").val();
    if(difficulty){
        var diff = $("[name='difficulty']:checked").val();
    }
    var type = $("[name='type']:enabled").val();
    var cat = $("[name='cat']:enabled").val();
    var sub = $("[name='sub']:enabled").val();
    $.post('/logCase',{difficulty: diff,cat: cat,sub: sub,type: type},function (){
        showToast();
    });
});
function copyToClipboard(element){
    $(element).text().replace(/^\s+|\s+$/g, '');
    let x = $(element).text().concat(" | ", "جميع الحقوق محفوظة مؤسسة الحوار والمناظرة");
    x.replace(/^\s+|\s+$/g, '');
    var sampleTextarea = document.createElement('textarea');
    document.body.appendChild(sampleTextarea);
    sampleTextarea.value = x;
    sampleTextarea.select();
    document.execCommand('copy');
    document.body.removeChild(sampleTextarea);
}
$(document).on('click','#getCase', function (){
    var difficulty = $("[name='difficulty']:enabled").val();
    if(difficulty){
        var diff = $("[name='difficulty']:checked").val();
    }
    var type = $("[name='type']:enabled").val();
    var cat = $("[name='cat']:enabled").val();
    var sub = $("[name='sub']:enabled").val();
    $.post('/getCase',{difficulty: diff,cat: cat,sub: sub,type: type},function (data){
        $('#message').html(data);
    });
});
</script>
