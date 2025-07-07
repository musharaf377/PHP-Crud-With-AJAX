
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
    });
    $("#exampleModal").modal('hide');
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
    if(!confirm('Are you sure?')){
        return;
    }
    // alert(id);
    $.ajax({
        url: 'delete.php',
        method: 'get',
        data: {
            studentId:id,
        },
        success: function(data){
            studentDetailsDisplay();
            
        }
    })
}

// update data
function studentEdit(id){
    $("#update-modal").modal('show');
    var hiddenId = $("#hiddenId").val(id);
    $.ajax({
        url: 'edit.php',
        method: 'get',
        data: {
            id: id,
        },
        success: function(data){
            var userInfo = JSON.parse(data);
            $('#upname').val(userInfo.name);
            $('#upemail').val(userInfo.email);
            $('#updepertment').val(userInfo.department);
      
            
        }
    })
}

// Data Update
function updateStudentData(){
    var hiddenId = $("#hiddenId").val();
    var name = $('#upname').val();
    var email = $('#upemail').val();
    var depertment = $('#updepertment').val();
     
     $.ajax({
        url:"updateStudent.php",
        method: "post",
        data: {
            id : hiddenId,
            name: name,
            email: email,
            depertment: depertment,
        },
        success: function(data){
            studentDetailsDisplay();
            
        }

     });
     $("#update-modal").modal('hide');
}