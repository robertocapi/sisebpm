$(document).ready(function($) {

    'use strict';
    $('#preloader').css('display', 'none');

    $.material.init()
    $.Outlay = {};

    /* --------------------
     * - Outlay Options -
     * --------------------
     * Modify these options to suit your implementation
     */
    $.Outlay.options = {

        sidebarToggleSelector: "[data-toggle='offcanvas']",
        sidebarPushMenu: true,
        enableControlSidebar: true,
        controlSidebarOptions: {
            toggleBtnSelector: "[data-toggle='control-sidebar']",
            selector: ".control-sidebar",
            slide: true
        },

        screenSizes: {
            xs: 480,
            sm: 768,
            md: 992,
            lg: 1200
        }
    };



    $("body").removeClass("hold-transition");

    if (typeof OutlayOptions !== "undefined") {
        $.extend(true,
            $.Outlay.options,
            OutlayOptions);
    }

    //Easy access to options
    var o = $.Outlay.options;

    //Set up the object
    _init();

    //Enable sidebar tree view controls
    $.Outlay.tree('.sidebar');

    //Activate sidebar push menu
    if (o.sidebarPushMenu) {
        $.Outlay.pushMenu.activate(o.sidebarToggleSelector);
    }



    /* ----------------------------------
     * - Initialize the Outlay Object -
     * ----------------------------------
     */
    function _init() {


        /* Push Menu
         * ==========
         * Adds the push menu functionality to the sidebar.
         */
        $.Outlay.pushMenu = {
            activate: function(toggleBtn) {
                //Get the screen sizes
                var screenSizes = $.Outlay.options.screenSizes;

                //Enable sidebar toggle
                $(toggleBtn).on('click', function(e) {
                    e.preventDefault();

                    //Enable sidebar push menu
                    if ($(window).width() > (screenSizes.sm - 1)) {
                        if ($("body").hasClass('sidebar-collapse')) {
                            $("body").removeClass('sidebar-collapse').trigger('expanded.pushMenu');
                        } else {
                            $("body").addClass('sidebar-collapse').trigger('collapsed.pushMenu');
                        }
                    }
                    //Handle sidebar push menu for small screens
                    else {
                        if ($("body").hasClass('sidebar-open')) {
                            $("body").removeClass('sidebar-open').removeClass('sidebar-collapse').trigger('collapsed.pushMenu');
                        } else {
                            $("body").addClass('sidebar-open').trigger('expanded.pushMenu');
                        }
                    }
                });
                $('.content-wrapper').on('click', function() {
                    //Enable hide menu when clicking on the content-wrapper on small screens
                    if ($(window).width() <= (screenSizes.sm - 1) && $("body").hasClass("sidebar-open")) {
                        $("body").removeClass('sidebar-open');
                    }
                   
                });

               
            },
            expand: function() {
                $("body").removeClass('sidebar-collapse').addClass('sidebar-expanded-on-hover');
            },
            collapse: function() {
                if ($('body').hasClass('sidebar-expanded-on-hover')) {
                    $('body').removeClass('sidebar-expanded-on-hover').addClass('sidebar-collapse');
                }
            }
        };

        /* Tree menu */

        $.Outlay.tree = function(menu) {
            var _this = this;
            var animationSpeed = $.Outlay.options.animationSpeed;
            $(document).on('click', menu + ' li a', function(e) {
                //Get the clicked link and the next element
                var $this = $(this);
                var checkElement = $this.next();

                //Check if the next element is a menu and is visible
                if ((checkElement.is('.treeview-menu')) && (checkElement.is(':visible'))) {
                    //Close the menu
                    checkElement.slideUp(animationSpeed, function() {
                        checkElement.removeClass('menu-open');
                       
                    });
                    checkElement.parent("li").removeClass("active");
                }
                //If the menu is not visible
                else if ((checkElement.is('.treeview-menu')) && (!checkElement.is(':visible'))) {
                    //Get the parent menu
                    var parent = $this.parents('ul').first();
                    //Close all open menus within the parent
                    var ul = parent.find('ul:visible').slideUp(animationSpeed);
                    //Remove the menu-open class from the parent
                    ul.removeClass('menu-open');
                    //Get the parent li
                    var parent_li = $this.parent("li");

                    //Open the target menu and add the menu-open class
                    checkElement.slideDown(animationSpeed, function() {
                        //Add the class active to the parent li
                        checkElement.addClass('menu-open');
                        parent.find('li.active').removeClass('active');
                        parent_li.addClass('active');
                        $('.treeview.active .fa.fa-angle-right.pull-right').addClass('rotate-icon');
                       
                    });
                }
                //if this isn't a link, prevent the page from being redirected
                if (checkElement.is('.treeview-menu')) {
                    e.preventDefault();
                }
            });
        };

    }

    /* Dropdown Effect with animate js */

    var dropdownSelectors = $('.dropdown, .dropup');

    // Custom function to read dropdown data
    // =========================
    function dropdownEffectData(target) {
        // @todo - page level global?
        var effectInDefault = null,
            effectOutDefault = null;
        var dropdown = $(target),
            dropdownMenu = $('.dropdown-menu', target);
        var parentUl = dropdown.parents('ul.nav');

        // If parent is ul.nav allow global effect settings
        if (parentUl.length > 0) {
            effectInDefault = parentUl.data('dropdown-in') || null;
            effectOutDefault = parentUl.data('dropdown-out') || null;
        }

        return {
            target: target,
            dropdown: dropdown,
            dropdownMenu: dropdownMenu,
            effectIn: dropdownMenu.data('dropdown-in') || effectInDefault,
            effectOut: dropdownMenu.data('dropdown-out') || effectOutDefault,
        };
    }

    // Custom function to start effect (in or out)
    // =========================
    function dropdownEffectStart(data, effectToStart) {
        if (effectToStart) {
            data.dropdown.addClass('dropdown-animating');
            data.dropdownMenu.addClass('animated');
            data.dropdownMenu.addClass(effectToStart);
        }
    }

    // Custom function to read when animation is over
    // =========================
    function dropdownEffectEnd(data, callbackFunc) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        data.dropdown.one(animationEnd, function() {
            data.dropdown.removeClass('dropdown-animating');
            data.dropdownMenu.removeClass('animated');
            data.dropdownMenu.removeClass(data.effectIn);
            data.dropdownMenu.removeClass(data.effectOut);

            // Custom callback option, used to remove open class in out effect
            if (typeof callbackFunc === 'function') {
                callbackFunc();
            }
        });
    }

    // Bootstrap API hooks
    // =========================
    dropdownSelectors.on({
        "show.bs.dropdown": function() {
            // On show, start in effect
            var dropdown = dropdownEffectData(this);
            dropdownEffectStart(dropdown, dropdown.effectIn);
        },
        "shown.bs.dropdown": function() {
            // On shown, remove in effect once complete
            var dropdown = dropdownEffectData(this);
            if (dropdown.effectIn && dropdown.effectOut) {
                dropdownEffectEnd(dropdown, function() {});
            }
        }

    });

    /* fullscreen */

    function toggleFullScreen() {
        if ((document.fullScreenElement && document.fullScreenElement !== null) ||
            (!document.mozFullScreen && !document.webkitIsFullScreen)) {
            if (document.documentElement.requestFullScreen) {
                document.documentElement.requestFullScreen();
            } else if (document.documentElement.mozRequestFullScreen) {
                document.documentElement.mozRequestFullScreen();
            } else if (document.documentElement.webkitRequestFullScreen) {
                document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
            }
        } else {
            if (document.cancelFullScreen) {
                document.cancelFullScreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.webkitCancelFullScreen) {
                document.webkitCancelFullScreen();
            }
        }
    }

    $('.toggle-fullscreen').on('click', function() {
        toggleFullScreen();
        /* Act on the event */
    });


    /*Popover*/
    $('[data-toggle="popover"]').popover();

    /*Slimscroll*/
    $('.notification-menu').slimscroll({ height: '220px', color: '#566fc9', size: '5px' });

});
