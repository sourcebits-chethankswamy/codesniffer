$(function(){
    var upload_options = {
        dataType: 'json',
        beforeSend: function() {
            $("#output-blk h5, .output").html('');
            $("#output-blk").hide();
            $(".loading").show();
        },
        success: function(data) {
            $(".loading").hide();
            if(data.error == 0) {
                $("#output-blk h5").html('Uploaded file: '+data.uploaded_file_name + ' <u><a target="_blank" href="'+data.full_report_link+'">Download full report</a></u> -- <u><a target="_blank" href="'+data.summary_report_link+'">Download summary report</a></u>');
                $(".output").html('<div class="report_full">'+data.full_report+'</div>');
                $('.output').append('<div class="report_summary">'+data.summary_report+'</div>');
                $("#output-blk").show();
            } 
            if(data.error == 1){
                $(".output").html('<div class="report_error">ERROR: '+data.message+'</div>');
                $("#output-blk").show();
            }
        },
        error: function() {
            $(".loading").hide();
            $(".output").html("<font color='red'>ERROR: unable to upload files</font>");
            $("#output-blk").show();
        }
    };
    $("#checkform").ajaxForm(upload_options);
});