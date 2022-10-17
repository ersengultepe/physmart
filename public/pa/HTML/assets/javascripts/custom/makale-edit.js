$('document').ready(function () {
    // alert($('.note-editable').text());
});

   $('.btn-primary').click(function () {
       $('.note-codable').html($('.note-editable').html());
   });

   $('input[type=reset]').click(function () {
       $('.note-codable').html('');
       $('.note-editable').html('');
       $('#title').val();
   });