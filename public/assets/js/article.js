$(function(){
    $('button[name=add-comment-form]').on('click', function(){
        $('.comment-form.hidden').before(function(){
            var new_form = $(this).clone(true);

            var key = $(this).attr('data-key');

            var author_id = 'form_comments[' + key + '][author]';
            var author_name = 'comments[' + key + '][author]';
            var contents_id = 'form_comments[' + key + '][contents]';
            var contents_name = 'comments[' + key + '][contents]';

            key++;
            $(this).attr('data-key', key);

            new_form.find('.author label').attr('for', author_id);
            new_form.find('.author input').attr('id', author_id);
            new_form.find('.author input').attr('name', author_name);
            new_form.find('.contents label').attr('for', contents_id);
            new_form.find('.contents input').attr('id', contents_id);
            new_form.find('.contents input').attr('name', contents_name);
            new_form.removeAttr('data-key');
            new_form.find('input').prop('disabled', false);

            return new_form.removeClass('hidden');
        });
    });

    $('button[name=remove-comment-form]').on('click', function(){
        $(this).closest('.comment-form').remove();
    });
});
