const contentBlock = document.getElementById("content")

$('#exampleModal').on('click','#createButton', function (e) {
    title = $('#title').val();
    subtitle = $('#subtitle').val();
    color = $('#color').val();
    console.log(title);
    console.log(subtitle);
    console.log(color);
    $.ajax({
        type: "post",
        url: "./addPage.php",
        data: { title: title, subtitle: subtitle, color: color}
    })
        .done(function(response) {
            console.log(response)
    });
    location.reload();
});