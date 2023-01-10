const contentBlock = document.getElementById("content")

$('#delete').click(function (e) {
    deleteVal = $('#delete').val();
    console.log(deleteVal);
    $.ajax({
        type: "post",
        url: "./deleteWebsite.php",
        data: { id: deleteVal}
    })
        .done(function(response) {
            console.log(response)
    });
    location.replace("./index.php");
});