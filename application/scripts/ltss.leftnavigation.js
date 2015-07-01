
function showHideSubLinks(header) {

    var body = $(header).next('ul');
    var arrow = $(header).next('.arrow');
    if (body.is(":hidden")) {
        $('[collapsible="true"]').each(function() {
            $(this).slideUp();
            $(this).prev().children('.arrow').removeClass('expand').addClass('collapse');
        });

        body.slideDown();
        $(header).children('.arrow').removeClass('collapse').addClass('expand');
    }
    else {
        body.slideUp();
        $(header).children('.arrow').removeClass('expand').addClass('collapse');
    }
}

$(document).ready(function () {
    $('.hideIfNoLinks').not(':has(a)').hide();
    $('.js-accordion li ul li').not(':has(a)').hide();
    
    $('.js-accordion').each(function(idx, el) {
        var panels = $(el).children('li:visible');
        var panel, header, body, headerLink;

        if (panels.length == 1) {
            panel = $(panels[0]);
            header = panel.children().not('a').first();
            body = header.next();
            headerLink = panel.children('a').first();
            body.attr('collapsible', 'true');

            header.prepend('<span class="arrow expand"></span>');
            headerLink.append('<span role="presentation" class="ltss-icon-container icon-arrow"></span>');
        }
        else {
            panels.each(function(idx, el) {
                panel = $(el);
                header = panel.children().not('a').first();
                body = header.next();
                headerLink = panel.children('a').first();

                header.prepend('<span class="arrow collapse"></span>');
                headerLink.append('<span role="presentation" class="ltss-icon-container icon-arrow"></span>');
                body.attr('collapsible', 'true');
                body.hide();
                header.click(function() {
                    showHideSubLinks(this);
                });
            });
        }
    });
    
    if ($(".js-selected-menu-item").length > 0) {
        var selectedMenu = $(".js-selected-menu-item").parents('[collapsible="true"]').first();
        if (selectedMenu.length > 0) {
            selectedMenu.show();
            $(".left-side-nav .js-selected-menu-item").parents('li').first().parentsUntil('.left-side-nav', 'li').addClass('active-node');
            selectedMenu.prev().find('.arrow').removeClass('collapse').addClass('expand');
        }
    }
})