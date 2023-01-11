$('#changeButton').click(function (e) {
    title = $('#title').val();
    subtitle = $('#subtitle').val();
    color = $('#color').val();
    content = $('#txtarea').val();
    id = $('#id').val();
    console.log(title);
    console.log(subtitle);
    console.log(color);
    console.log(content);
    $.ajax({
        type: "post",
        url: "./changePage.php",
        data: { title: title, subtitle: subtitle, color: color, content: content, id: id }
    })
        .done(function(response) {
            console.log(response)
    });
    location.reload();
});