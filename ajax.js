$(document).ready(function(){
    // alert('jquery cnnected')
    function display(){
        $.ajax({
            url:"Classes/Process.php",
            method:"POST",
            data:{
                action: "show"
            },
            success:function(response){
                // alert(response);
                $('tbody').html(response)
            }
        })
        
    }
    display()

    jQuery('#addAccount').click(function(){

        var name = $('#name').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var id = $('#idToEdit').val();
        console.log(id);
        $.ajax({
            url:"Classes/Process.php",
            method:"POST",
            data:{
                accountId: id,
                accountName: name,
                accountEmail: email,
                accountPassword: password,
                action: id == "" ? "insert" : "update"
            },
            success:function(response){
                // console.log(responce);
                alert(response);
                display()
                $('#name').val("");
                $('#email').val("");
                $('#password').val("");
                $('#idToEdit').val("");
                $('#buttonName').text("Add Account");
            }
        })
    })

    $('tbody').on('click','.deleteAccount',function(){
        var idToDelete = $(this).attr('delete_id');
        console.log(idToDelete);
        $.ajax({
            url:"Classes/Process.php",
            method:"POST",
            data:{
                action: "delete",
                id:idToDelete
            },
            success:function(response){
                display()
                alert(response);
            }
        })
    })

    $('tbody').on('click','.editAccount',function(){
        var idToEdit = $(this).attr('edit_id');
        $('#buttonName').text("Update Account")
        console.log(idToEdit);
        $.ajax({
            url:"Classes/Process.php",
            method:"POST",
            data:{
                action: "edit",
                id:idToEdit
            },
            success:function(response){
                // display()
                // alert(JSON.parse(response).password);
                $dataToEdit = JSON.parse(response);
                $('#name').val($dataToEdit.name);
                $('#email').val($dataToEdit.email);
                $('#password').val($dataToEdit.password);
                $('#idToEdit').val($dataToEdit.id);
            }
        })
    })

    

    

})

