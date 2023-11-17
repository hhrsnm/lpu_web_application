$(document).ready(function () {
    $("#save").click(function (e) {
      e.preventDefault();
  
      var formData = {};
      $(".form-control").each(function () {
        var fieldName = $(this).attr("id");
        var fieldValue = $(this).val();
        formData[fieldName] = fieldValue;
      });
      console.log(formData)
  
      $.ajax({
        type: "POST",
        url: "process/herson_empreg_save.php",
        data: formData,
        dataType: "json",
        success: function (result) {
          if (result.ok) {
            alert("Data successfully added!");
            $("#fname").val("");
            $("#mname").val("");
            $("#lname").val("");
            $("#suffix").val("");
            $("#birth_date").val("");
            $("#gender").val("");
            $("#nationality").val("");
            $("#civil_status").val("");
            $("#department").val("");
            $("#designation").val("");
            $("#qualified_dependent_status").val("");
            $("#employee_status").val("");
            $("#pay_date").val("");
            $("#employee_number").val("");
            $("#contact_number").val("");
            $("#email_address").val("");
            $("#social_media").val("");
            $("#social_media_account_id").val("");
            $("#address_line1").val("");
            $("#address_line2").val("");
            $("#municipality").val("");
            $("#state_province").val("");
            $("#country").val("");
            $("#zip_code").val("");
            $("#picpath").val("");
            $('#pic-box').html("");
            $('#uploadfile').val("");
          }
        },
      });
    });
    $("#uploadfile").change(function(e){
        var formData = new FormData($("#pic-upload")[0])
        console.log('e')
        $.ajax({
            type:"POST",
            url:'process/herson_uploadpic_save.php',
            data :formData,
            contentType:false,
            processData:false,
            dataType:'json',
            success: function(result){
                if(result.ok){
                    $('#pic-box').html('')
                    $('#pic-box').append("<img src='" + result.temp_path + "' style='width:100%;height:100%'/>")
                    $('#picpath').val(result.temp_path)
                }else{
                    alert('Error occured')
                }
            }
        })
    })
  });