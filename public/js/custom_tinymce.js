console.log("✅ Script custom_tinymce.js bien chargé !");

function updateEditorToolbar() {
    if (typeof tinymce !== 'undefined' && tinymce.editors && tinymce.editors.length > 0) {
        tinymce.editors.forEach(function (editor) {
            editor.settings.toolbar = 'formatselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | code';
            editor.settings.menubar = 'file edit view insert format tools table help';
            editor.settings.style_formats = [
                { title: 'Titre rouge', inline: 'span', styles: { color: '#ff0000' } },
                { title: 'Petit texte', inline: 'small' },
                { title: 'Texte en gras', inline: 'strong' },
                { title: 'Paragraphe', block: 'p' },
                { title: 'Titre 2', block: 'h2' },
                { title: 'Citation', block: 'blockquote' }
            ];
            editor.render();
        });
    } else {
        setTimeout(updateEditorToolbar, 300);
    }
}

updateEditorToolbar();