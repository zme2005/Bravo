    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/main.js"></script>

    <script>
$(".view-btn").click(function() {
    
    let row = $(this).closest("tr");

    row.find(".ts").html(
        "<span class='badge badge-soft-primary'> read </span>"
    );

    let id = $(this).attr("msg");

    $.post("../contactFunctions/edit.php", { id }, function() {
        
    });

});
</script>

</body>
</html>

