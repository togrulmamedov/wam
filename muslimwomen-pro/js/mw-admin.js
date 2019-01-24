$(document).ready(function() {

    var mediaUploader;

    $('#upload-announcement').on('click', function(e){
        e.preventDefault();

        if (mediaUploader){
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose image',
            button: {
                text: 'Choose image'
            },
            multiple: false
        });

        mediaUploader.on('select', function(){
            attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#image-announcement').val(attachment.url);
            $('#mw-admin--announcementPreview').attr('src', attachment.url);
        });

        mediaUploader.open();
    });

    $('#delete-announcement').on('click', function(e){
        e.preventDefault();

        var answer = confirm("Delete announcement image?");

        if (answer == true){
            $('#image-announcement').val('');
            $('.announcement-form').submit();
        }

        return;
    });
})