
window.addEventListener('load', function(){
    studentDetailsDisplay();
})
// Data insert
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
            studentDetailsDisplay();
            
        }
    })
}

// Data Showing
function studentDetailsDisplay(){
  $.ajax({
    url:"display.php",
    method: 'post',
    success: function(data){

        $("#student-tbody").html(data);
    }
  })
}

// Data Delete
function studentDelete(id){
    $.ajax({
        url: 'delete.php',
        method: 'get',
        data: {id:id},
        success: function(data){
            console.log(data);
            
        }
    })
}