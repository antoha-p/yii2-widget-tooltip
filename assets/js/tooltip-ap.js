/*!
 * @copyright Copyright &copy; Anton Puzanov, 2018
 * @version 1.0.0
 *
 * Built for Yii Framework 2.0
 * Author: Anton Puzanov
 */
var initTooltip = function () {
};

(function ($) {
    "use strict";
    initTooltip = function (id, size) {
        var $el = $('#' + id);
        var title = $el.attr('title');

        if (title && title !== '') {
            $el.attr('title', '').append('<div>' + title + '</div>');
            $el.find('div').width(size + 'px');

            var width = $el.find('div').width() + 20;
            var height = $el.find('div').height() + 20;

            $el.hover(
                function() {
                    $el.find('div')
                        .clearQueue()
                        .delay(200)
                        .animate({width: width + 20, height: height + 20}, 200).show(200)
                        .animate({width: width, height: height}, 200);
                },
                function() {
                    $el.find('div')
                        .animate({width: width + 20, height: height + 20}, 150)
                        .animate({width: 'hide', height: 'hide'}, 150);
                }
            ).mouseleave(function() {
                if ($el.children().is(':hidden')){
                    $el.find('div').clearQueue();
                }
            });
        }
    };
})(window.jQuery);