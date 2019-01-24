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
})