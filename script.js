
function addStudentData() {
    var name = $('#name').val();
    var email = $('#email').val();
    var depertment = $('#depertment').val();

    $.ajax({
        url:"insert.php",
        method:"post",
        data: {
            stName: name,
            stEmail: email,
            stDept: depertment,
        },
        success: function(data){
            console.log(data);
            
        }
    })
}