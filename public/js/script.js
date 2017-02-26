$(function () {
    $("#myModal").on('hidden.bs.modal', function () {
        $("#myModal iframe").attr("src", $("#myModal iframe").attr("src"));
    });
})
