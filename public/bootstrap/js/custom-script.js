$('[name="thumbnail"]').on('change', function() {
    $('img.preview').prop('src', this.value);
   });