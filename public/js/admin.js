document.addEventListener("DOMContentLoaded", function(event){
    textReader()
})

function textReader() {
    tinymce.init({
    selector: '.tinyeditor',
    deprecation_warnings: false,
    plugins: ['quickbars', 'textcolor', 'lists', 'table', 'link', 'image', 'autoresize', 'code', 'fontfamily'],
    menubar: true,
    toolbar: 'undo redo | code | fontfamily | link bullist image | table tableprops tablerowprops tablecellprops | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol' ,
    // font_family_formats: 'Verdana=verdana',
    // font_family_formats: 'Webdings=webdings',
    branding: false,
    contextmenu: 'link table',
    // inline: true,
    quickbars_insert_toolbar: false,
    quickbars_selection_toolbar: 'bold italic underline | forecolor backcolor | fontfamily | fontsizeselect',
    min_height: 240,
    autoresize: true,
    skin: 'oxide-dark',
    file_picker_types: 'image media',
    file_picker_callback: function(cb, value, meta) {
        var input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');

        input.onchange = function () {
            var file = this.files[0];

            var reader = new FileReader();
            reader.onload = function () {
                var id = 'blobid' + (new Date()).getTime();
                var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                var base64 = reader.result.split(',')[1];
                var blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);

                /* call the callback and populate the Title field with the file name */
                cb(blobInfo.blobUri(), { title: file.name });
            };
            reader.readAsDataURL(file);
        };

        input.click();
        },
        images_upload_handler: function(blobInfo, success, failure) {
            var xhr, formData;
            xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', '/admin/uploadImg');
            xhr.onload = function() {
                var json;
                if (xhr.status != 200) {
                    failure('HTTP Error: ' + xhr.status);
                    return;
                }
                json = JSON.parse(xhr.responseText);

                if (!json || typeof json.location != 'string') {
                    failure('Invalid JSON: ' + xhr.responseText);
                    return;
                }
                success(json.location);
            };
            formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());
            var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            formData.append('_token', token)
            xhr.send(formData);
            },
            automatic_uploads: true,
        });
    }
