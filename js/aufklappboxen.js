    function Aufklapper() {
        var $klapper = $('.aufklapp-boxen h3');
        var $content = $('.aufklapp-boxen .content');
        $klapper.on('click', function (e) {
            $(this).toggleClass('active').next().slideToggle();
        });
    }
    Aufklapper();