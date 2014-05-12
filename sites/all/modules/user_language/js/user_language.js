(function($) {

    Drupal.behaviors.userLanguage = {
        attach: function(context, settings) {
            if(Drupal.settings.userLanguage) {

                $('#block-locale-language').append('<a href="'+Drupal.settings.userLanguage.link+'">Перейти на свой язык</a>');

            }
        }
    };

})(jQuery);