
<!DOCTYPE html>
<html lang="ru-RU" prefix="og: https://ogp.me/ns#">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="robots" content="index,follow">
    <script src="/cdn-cgi/apps/head/an_8J_6KDHLIg_G7K2C3ftg6sDI.js"></script><script> !(function () {
            window.googletag = window.googletag || {};
            window.vmpbjs = window.vmpbjs || {};
            window.vpb = window.vpb || {};
            vpb.fastLoad = true;
            googletag.cmd = googletag.cmd || [];
            vmpbjs.cmd = vmpbjs.cmd || [];
            var cmds = [];
            var ready = false;

            function exec(cb) {
                return cb.call(googletag);
            }

            googletag.cmd.push(function () {
                googletag.cmd.unshift = function (cb) {
                    if (ready) {
                        return exec(cb);
                    }
                    cmds.unshift(cb);
                    if (cb._startgpt) {
                        ready = true;
                        cmds.forEach(cb => {
                            exec(cb);
                        });
                    }
                };
                googletag.cmd.push = function (cb) {
                    if (ready) {
                        return exec(cb);
                    }
                    cmds.push(cb);
                };
            });
            googletag.cmd.push = function (cb) {
                cmds.push(cb)
            };
            googletag.cmd.unshift = function (cb) {
                cmds.unshift(cb);
                if (cb._startgpt) {
                    ready = true;
                    if (googletag.apiReady) {
                        cmds.forEach(function (cb) {
                            googletag.cmd.push(cb);
                        })
                    } else {
                        googletag.cmd = cmds;
                    }
                }
            };
            var dayMs = 864e5, cb = parseInt(Date.now() / dayMs),
                vpbSrc = '//player.adtelligent.com/prebid/wrapper_hb_266844_676.js?cb=' + cb,
                pbSrc = vpbSrc.replace('wrapper_hb', 'hb'), gptSrc = '//securepubads.g.doubleclick.net/tag/js/gpt.js',
                c = document.head || document.body || document.documentElement;

            function loadScript(src, cb) {
                var s = document.createElement('script');
                s.src = src;
                s.defer = true;
                c.appendChild(s);
                s.onload = cb;
                s.onerror = cb;
                return s;
            }

            loadScript(pbSrc);
            loadScript(gptSrc);
            loadScript(vpbSrc);
        })() </script>
    <script>
        var googletag = googletag || {};
        googletag.cmd = googletag.cmd || [];
    </script>
    <script async type='text/javascript'>
        var list, index;
        var slot_bgrnd, stick_left, stick_right, slot_content, slot_bgrnd_main;
        var background_status;
        googletag.cmd.push(function () {
            var slotStickMapping = googletag.sizeMapping().addSize([0, 0], []).addSize([1340, 600], [160, 600]).addSize([1500, 600], [240, 600]).addSize([1620, 600], [300, 600]).build();
            var mapping_catfish = googletag.sizeMapping().addSize([2048, 1536], [1440, 180]).addSize([1920, 1440], [1440, 180]).addSize([1920, 1280], [1440, 180]).addSize([2048, 1152], [1440, 180]).addSize([1920, 1200], [1440, 180]).addSize([2048, 1080], [1440, 180]).addSize([1920, 1080], [1440, 180]).addSize([1600, 1200], [1440, 180]).addSize([1680, 1050], [1440, 180]).addSize([1600, 1024], [1440, 180]).addSize([1440, 1080], [1440, 180]).addSize([1400, 1050], [1440, 180]).addSize([1600, 900], [1440, 180]).addSize([1440, 960], [1440, 180]).addSize([1536, 864], [1440, 180]).addSize([1280, 1024], [1440, 180]).addSize([1440, 900], [1440, 180]).addSize([1600, 768], [1440, 180]).addSize([1280, 960], [1440, 180]).addSize([1280, 854], [1440, 180]).addSize([1366, 768], [1440, 180]).addSize([1152, 900], [1440, 180]).addSize([1280, 800], [1440, 180]).addSize([1152, 864], [1440, 180]).addSize([1280, 768], [1440, 180]).addSize([1120, 832], [1440, 180]).addSize([1280, 720], [1440, 180]).addSize([1152, 768], [1440, 180]).addSize([1200, 720], [1440, 180]).addSize([1028, 768], [1440, 180]).addSize([1152, 648], [1440, 180]).addSize([1028, 600], [1440, 180]).addSize([1028, 576], [1440, 180]).addSize([960, 640], [728, 90]).addSize([960, 540], [728, 90]).addSize([800, 640], [728, 90]).addSize([784, 640], [728, 90]).addSize([800, 600], [728, 90]).addSize([854, 480], [728, 90]).addSize([854, 466], [728, 90]).addSize([800, 480], [728, 90]).addSize([728, 728], [728, 90]).addSize([468, 288], [468, 60]).addSize([640, 350], [468, 60]).addSize([640, 288], [468, 60]).addSize([640, 272], [468, 60]).addSize([640, 200], [468, 60]).addSize([720, 360], [468, 60]).addSize([640, 400], [468, 60]).addSize([720, 350], [468, 60]).addSize([720, 348], [468, 60]).addSize([640, 512], [468, 60]).addSize([640, 480], [468, 60]).addSize([512, 384], [468, 60]).addSize([512, 342], [468, 60]).addSize([512, 256], [468, 60]).addSize([480, 320], [468, 60]).addSize([480, 272], [468, 60]).addSize([468, 272], [468, 60]).addSize([320, 256], [320, 50]).addSize([400, 288], [320, 50]).addSize([400, 240], [320, 50]).addSize([320, 240], [320, 50]).addSize([320, 200], [320, 50]).addSize([256, 192], [320, 50]).addSize([160, 200], [320, 50]).build();
            var mapping_top = googletag.sizeMapping().addSize([2048, 1536], [728, 90]).addSize([1920, 1440], [728, 90]).addSize([1920, 1280], [728, 90]).addSize([2048, 1152], [728, 90]).addSize([1920, 1200], [728, 90]).addSize([2048, 1080], [728, 90]).addSize([1920, 1080], [728, 90]).addSize([1600, 1200], [728, 90]).addSize([1680, 1050], [728, 90]).addSize([1600, 1024], [728, 90]).addSize([1440, 1080], [728, 90]).addSize([1400, 1050], [728, 90]).addSize([1600, 900], [728, 90]).addSize([1440, 960], [728, 90]).addSize([1536, 864], [728, 90]).addSize([1280, 1024], [728, 90]).addSize([1440, 900], [728, 90]).addSize([1600, 768], [728, 90]).addSize([1280, 960], [728, 90]).addSize([1280, 854], [728, 90]).addSize([1366, 768], [728, 90]).addSize([1152, 900], [728, 90]).addSize([1280, 800], [728, 90]).addSize([1152, 864], [728, 90]).addSize([1280, 768], [728, 900]).addSize([1120, 832], [728, 90]).addSize([1280, 720], [728, 90]).addSize([1152, 768], [728, 90]).addSize([1200, 720], [728, 90]).addSize([1028, 768], [728, 90]).addSize([1152, 648], [728, 90]).addSize([1028, 600], [728, 90]).addSize([1028, 576], [728, 90]).addSize([960, 640], [728, 90]).addSize([960, 540], [728, 90]).addSize([800, 640], [728, 90]).addSize([784, 640], [728, 90]).addSize([800, 600], [728, 90]).addSize([854, 480], [728, 90]).addSize([854, 466], [728, 90]).addSize([800, 480], [728, 90]).addSize([728, 728], [728, 90]).addSize([468, 288], [468, 60]).addSize([640, 350], [468, 60]).addSize([640, 288], [468, 60]).addSize([640, 272], [468, 60]).addSize([640, 200], [468, 60]).addSize([720, 360], [468, 60]).addSize([640, 400], [468, 60]).addSize([720, 350], [468, 60]).addSize([720, 348], [468, 60]).addSize([640, 512], [468, 60]).addSize([640, 480], [468, 60]).addSize([512, 384], [468, 60]).addSize([512, 342], [468, 60]).addSize([512, 256], [468, 60]).addSize([480, 320], [468, 60]).addSize([480, 272], [468, 60]).addSize([468, 272], [468, 60]).addSize([320, 256], [320, 50]).addSize([400, 288], [320, 50]).addSize([400, 240], [320, 50]).addSize([320, 240], [320, 50]).addSize([320, 200], [320, 50]).addSize([256, 192], [320, 50]).addSize([160, 200], [320, 50]).build();

            if (window.innerWidth > 1219) {
                slot_bgrnd = googletag.defineSlot('/58302844/SLDS_STB_background', [2000, 1300], 'div-gpt-ad-1496150538111-3').addService(googletag.pubads()).setTargeting("masterchef138160", "3c708d8a35c95ece08caf15ec518a695").setTargeting("masterchef_stb_ua", "masterchef.stb.ua").setTargeting("url", "3c708d8a35c95ece08caf15ec518a695");
            }

            if (window.innerWidth <= 769) {
                googletag.defineSlot('/58302844/SLDS_STB_M_Premium1', [300, 250], 'div-gpt-ad-1493020093692-1').addService(googletag.pubads()).setTargeting("masterchef138160", "3c708d8a35c95ece08caf15ec518a695").setTargeting("masterchef_stb_ua", "masterchef.stb.ua").setTargeting("url", "3c708d8a35c95ece08caf15ec518a695");
                googletag.defineSlot('/58302844/SLDS_STB_Premium_M_ContentBanner', [[240, 350], [336, 280], [300, 250]], 'div-gpt-ad-1519210094390-2').addService(googletag.pubads()).setTargeting("masterchef138160", "3c708d8a35c95ece08caf15ec518a695").setTargeting("masterchef_stb_ua", "masterchef.stb.ua").setTargeting("url", "3c708d8a35c95ece08caf15ec518a695");
                googletag.defineSlot('/58302844/SLDS_STB_M_premium2', [300, 250], 'div-gpt-ad-1493020093692-0').addService(googletag.pubads()).setTargeting("masterchef138160", "3c708d8a35c95ece08caf15ec518a695").setTargeting("masterchef_stb_ua", "masterchef.stb.ua").setTargeting("url", "3c708d8a35c95ece08caf15ec518a695");
                googletag.defineSlot('/58302844/SLDS_STB_Mobile_320_50', [320, 50], 'div-gpt-ad-1532517704137-0').addService(googletag.pubads()).setTargeting("masterchef138160", "3c708d8a35c95ece08caf15ec518a695").setTargeting("masterchef_stb_ua", "masterchef.stb.ua").setTargeting("url", "3c708d8a35c95ece08caf15ec518a695");
            } else {
                googletag.defineSlot('/58302844/SLDS_STB_Premium1_300_250', [[240, 400], [240, 350], [300, 600], [240, 600], [300, 250]], 'div-gpt-ad-1472564131701-0').addService(googletag.pubads()).setTargeting("masterchef138160", "3c708d8a35c95ece08caf15ec518a695").setTargeting("masterchef_stb_ua", "masterchef.stb.ua").setTargeting("url", "3c708d8a35c95ece08caf15ec518a695");
                googletag.defineSlot('/58302844/SLDS_STB_Premium2_300_250', [[240, 400], [240, 350], [300, 600], [240, 600], [300, 250]], 'div-gpt-ad-1472564131701-1').addService(googletag.pubads()).setTargeting("masterchef138160", "3c708d8a35c95ece08caf15ec518a695").setTargeting("masterchef_stb_ua", "masterchef.stb.ua").setTargeting("url", "3c708d8a35c95ece08caf15ec518a695");
                googletag.defineSlot('/58302844/SLDS_STB_premium3', [[240, 600], [300, 250], [300, 600], [240, 400], [240, 350]], 'div-gpt-ad-1499165868253-3').addService(googletag.pubads()).setTargeting("masterchef138160", "3c708d8a35c95ece08caf15ec518a695").setTargeting("masterchef_stb_ua", "masterchef.stb.ua").setTargeting("url", "3c708d8a35c95ece08caf15ec518a695");
                googletag.defineSlot('/58302844/SLDS_STB_Footer', [728, 90], 'div-gpt-ad-1474453955686-0').addService(googletag.pubads()).setTargeting("masterchef138160", "3c708d8a35c95ece08caf15ec518a695").setTargeting("masterchef_stb_ua", "masterchef.stb.ua").setTargeting("url", "3c708d8a35c95ece08caf15ec518a695");

                slot_content = googletag.defineSlot('/58302844/SLDS_STB_content_banner', [[580, 400], [336, 280]], 'div-gpt-ad-1482485987174-0').addService(googletag.pubads()).setTargeting("masterchef138160", "3c708d8a35c95ece08caf15ec518a695").setTargeting("masterchef_stb_ua", "masterchef.stb.ua").setTargeting("url", "3c708d8a35c95ece08caf15ec518a695");
            }

            googletag.defineSlot('/58302844/SLDS_STB_Pop_UP', [[600, 600], [300, 300]], 'div-gpt-ad-1480929596159-4').addService(googletag.pubads()).setTargeting("masterchef138160", "3c708d8a35c95ece08caf15ec518a695").setTargeting("masterchef_stb_ua", "masterchef.stb.ua").setTargeting("url", "3c708d8a35c95ece08caf15ec518a695");

            googletag.defineSlot('/58302844/SLDS_STB_Catfish', [[1440, 180], [728, 90], [468, 60], [320, 50]], 'div-gpt-ad-1480931426542-5').defineSizeMapping(mapping_catfish).addService(googletag.pubads()).setTargeting("masterchef138160", "3c708d8a35c95ece08caf15ec518a695").setTargeting("masterchef_stb_ua", "masterchef.stb.ua").setTargeting("url", "3c708d8a35c95ece08caf15ec518a695");
            var arr_premium = [
                'div-gpt-ad-1472564131701-0',
                'div-gpt-ad-1472564131701-1',
                'div-gpt-ad-1499165868253-3'
            ];
            var m_arr_premium = [
                'div-gpt-ad-1493020093692-0',
                'div-gpt-ad-1493020093692-1'
            ];
            $marketing_popup = true;
            googletag.pubads().addEventListener('slotRenderEnded', function (e) {
                var mc_parent_div, mc_iframe, close_position_left = 0, close_position_top = 0;
                var slotElementId = e.slot.getSlotElementId();
                if (slotElementId == "div-gpt-ad-1496150538111-3") {
                    if (e.isEmpty) {
                        if (jQuery('#div-gpt-ad-1496150538111-3').css('display') == 'none') {
                            stick_right = googletag.defineSlot('/58302844/SLDS_STB_Sticky_Right', [[240, 600], [300, 600], [160, 600]], 'div-gpt-ad-1541675824848-0').defineSizeMapping(slotStickMapping).addService(googletag.pubads()).addService(googletag.pubads()).setTargeting("masterchef138160", "3c708d8a35c95ece08caf15ec518a695").setTargeting("masterchef_stb_ua", "masterchef.stb.ua").setTargeting("url", "3c708d8a35c95ece08caf15ec518a695");
                            stick_left = googletag.defineSlot('/58302844/SLDS_STB_Sticky_Left', [[300, 600], [240, 600], [160, 600]], 'div-gpt-ad-1541676247776-0').defineSizeMapping(slotStickMapping).addService(googletag.pubads()).addService(googletag.pubads()).setTargeting("masterchef138160", "3c708d8a35c95ece08caf15ec518a695").setTargeting("masterchef_stb_ua", "masterchef.stb.ua").setTargeting("url", "3c708d8a35c95ece08caf15ec518a695");
                            googletag.pubads().refresh([stick_right, stick_left]);
                            console.log('%c Sticky is starting! ', 'background: red; color: #fff');
                        }
                    } else {
                        console.log('%c background is starting! ', 'background: #222; color: #bada55');

                    }
                }

                if (document.getElementById('div-gpt-ad-1552304755629-0') && slotElementId == "div-gpt-ad-1552304755629-0" && !e.isEmpty && document.getElementById('div-gpt-ad-1552304755629-0').style.display != 'none') {
                    list = document.getElementsByClassName("fullscreen_logic_container");
                    for (index = 0; index < list.length; ++index) {
                        list[index].setAttribute('fs-open', '1');
                    }

                    document.getElementById('catfish-close-btn').style.display = "block";
                    document.getElementById('catfish-close-btn').style.visibility = "visible";
                    document.getElementById('catfish-wrapper').style.display = "block";
                    document.getElementById('catfish-wrapper').style.visibility = "visible";
                    document.getElementById('div-gpt-ad-1552304755629-0').style.display = "block";
                    mc_parent_div = document.getElementById("div-gpt-ad-1552304755629-0");
                    if (typeof mc_parent_div !== "undefined") {
                        mc_iframe = mc_parent_div.getElementsByTagName("iframe")[0];
                        if (typeof mc_iframe !== "undefined") {
                            if (window.innerWidth < 321) {
                                close_position_left = mc_iframe.offsetLeft;
                            } else {
                                close_position_left = mc_iframe.offsetLeft - 10;
                            }
                            close_position_top = mc_iframe.offsetTop - 10;
                            document.getElementById('catfish-close-btn').style.left = close_position_left + "px";
                            document.getElementById('catfish-close-btn').style.top = close_position_top + "px";
                        }
                    }
                }

                var home_widgets = document.getElementsByClassName('default-widgets__home')[0];
                var constructor_projects_bootstrap_widget = document.getElementsByClassName('constructor_projects_bootstrap_widget')[0];
                if (home_widgets && !constructor_projects_bootstrap_widget) {
                    arr_premium.forEach(function (premium, i, arr) {
                        if (slotElementId == premium) {
                            if (window.innerWidth >= 768) {
                                if (!e.isEmpty) {
                                    // var count_preview_item = jQuery('#' + premium).parent().parent().children('.preview-item').length;
                                    var count_preview_item = jQuery('.default-widgets__home').find('#' + premium).parents('.preview-wrap').children('.preview-item').length;
                                    console.log(count_preview_item);
                                    console.log(e.size[1]);
                                    if (e.size[1] > '250') {
                                        if (count_preview_item == 6) {
                                            console.log(jQuery('#' + premium));
                                            jQuery('#' + premium).parent().parent().children('.preview-item').last().addClass('no-active no-active__content');
                                            jQuery('#' + premium).parent().parent().children('.preview-item').last().prev().addClass('no-active no-active__prev');
                                        } else if (count_preview_item == 5) {
                                            jQuery('#' + premium).parent().parent().children('.preview-item').last().addClass('no-active');
                                        }
                                        document.getElementById(premium).parentElement.parentElement.classList.add("preview__ads-big");
                                    } else {
                                        if (count_preview_item == 6) {
                                            jQuery('#' + premium).parent().parent().children('.preview-item').last().addClass('no-active');
                                        }
                                        document.getElementById(premium).parentElement.parentElement.classList.add("preview__ads-small");
                                    }
                                }
                            }
                        }

                    });

                    m_arr_premium.forEach(function (premium, i, arr) {
                        if (slotElementId == premium && slotElementId == 'div-gpt-ad-1493020093692-0') {
                            if (window.innerWidth >= 768) {
                                if (!e.isEmpty) {
                                    // var count_preview_item = jQuery('#' + premium).parent().parent().children('.preview-item').length;
                                    var count_preview_item = jQuery('.default-widgets__home').find('#' + premium).parents('.preview-wrap').children('.preview-item').length;
                                    console.log(count_preview_item);
                                    console.log(e.size[1]);
                                    if (e.size[1] > '250') {
                                        if (count_preview_item == 6) {
                                            jQuery('#' + premium).parent().parent().children('.preview-item').last().addClass('no-active no-active__content');
                                            jQuery('#' + premium).parent().parent().children('.preview-item').last().prev().addClass('no-active no-active__prev');
                                        } else if (count_preview_item == 5) {
                                            jQuery('#' + premium).parent().parent().children('.preview-item').last().addClass('no-active');
                                        } else jQuery('.default-widget__constructor .show-more').remove();
                                        document.getElementById(premium).parentElement.parentElement.classList.add("preview__ads-big");
                                    } else {
                                        if (count_preview_item == 6) {
                                            jQuery('#' + premium).parent().parent().children('.preview-item').last().addClass('no-active');
                                        } else jQuery('.default-widget__constructor .show-more').remove();
                                        document.getElementById(premium).parentElement.parentElement.classList.add("preview__ads-small");
                                    }
                                }
                            }
                        }

                    });
                }
                setTimeout(function () {
                    if (document.getElementById(slotElementId) && document.getElementById(slotElementId).style.display == 'none') {
                        jQuery('#' + slotElementId).parent().addClass('no-active');
                    }
                }, 1000);
                /* Catfish */

                if (document.getElementById('div-gpt-ad-1480931426542-5') && slotElementId == "div-gpt-ad-1480931426542-5" && !e.isEmpty && document.getElementById('div-gpt-ad-1480931426542-5').style.display != 'none') {
                    list = document.getElementsByClassName("fullscreen_logic_container");
                    for (index = 0; index < list.length; ++index) {
                        list[index].setAttribute('fs-open', '1');
                    }

                    document.getElementById('catfish-close-btn').style.display = "block";
                    document.getElementById('catfish-close-btn').style.visibility = "visible";
                    document.getElementById('catfish-wrapper').style.display = "block";
                    document.getElementById('catfish-wrapper').style.visibility = "visible";
                    document.getElementById('div-gpt-ad-1480931426542-5').style.display = "block";
                    mc_parent_div = document.getElementById("div-gpt-ad-1480931426542-5");
                    if (typeof mc_parent_div !== "undefined") {
                        mc_iframe = mc_parent_div.getElementsByTagName("iframe")[0];
                        if (typeof mc_iframe !== "undefined") {
                            if (window.innerWidth < 321) {
                                close_position_left = mc_iframe.offsetLeft;
                            } else {
                                close_position_left = mc_iframe.offsetLeft - 10;
                            }
                            close_position_top = mc_iframe.offsetTop - 10;
                            document.getElementById('catfish-close-btn').style.left = close_position_left + "px";
                            document.getElementById('catfish-close-btn').style.top = close_position_top + "px";
                        }
                    }
                }


                var projects_document = document.getElementsByClassName('stb-grid-projects__list')[0];
                if (projects_document) {
                    arr_premium.forEach(function (premium, i, arr) {
                        var ads_block = document.getElementById(premium).parentElement
                        if (slotElementId == premium && !e.isEmpty) {
                            if (e.size[1] > '250') {
                                ads_block.classList.add("big")
                            } else {
                                ads_block.classList.add("small")
                            }
                        } else if (slotElementId == premium && e.isEmpty) {
                            ads_block.classList.add("no-active")
                        } else {

                        }
                    });
                }

                var other_document = document.getElementsByClassName('stb-grid-other__list')[0];
                if (other_document) {
                    arr_premium.forEach(function (premium) {
                        var ads_block = document.getElementById(premium).parentElement
                        if (ads_block) {
                            if (slotElementId == premium && !e.isEmpty) {
                                if (e.size[1] > '250') {
                                    ads_block.classList.add("big")
                                    ads_block.nextElementSibling.nextElementSibling.classList.add("no-active")
                                    ads_block.nextElementSibling.classList.add("no-active")
                                } else {
                                    ads_block.classList.add("small")
                                    ads_block.nextElementSibling.classList.add("is-active")
                                    ads_block.nextElementSibling.nextElementSibling.classList.add("no-active")
                                }
                            } else if (slotElementId == premium && e.isEmpty) {
                                ads_block.classList.add("no-active")
                            } else {
                            }
                        }
                    });
                }

                /* Popup */
                if (slotElementId == "div-gpt-ad-1480929596159-4" && !e.isEmpty) {
                    list = document.getElementsByClassName("fullscreen_logic_container");
                    for (index = 0; index < list.length; ++index) {
                        list[index].setAttribute('fs-open', '1');
                    }
                }


            });


            googletag.companionAds().setRefreshUnfilledSlots(true);
            googletag.pubads().enableSingleRequest();
            googletag.pubads().enableAsyncRendering();
            googletag.pubads().collapseEmptyDivs();
            googletag.pubads().setCentering(true);
            googletag.enableServices();

        });
    </script>
    <meta name="google-site-verification" content="xKkSAME1AnKOM_MWwN31RKOc7alYKCcXynoSd3fJutM" />

    <meta property="fb:app_id" content="499063380209704" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="МастерШеф" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@TVchannelSTB" />
    <meta name="twitter:url" content="https://masterchef.stb.ua/ru/issue/master-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn/" />
    <meta name="twitter:title" content="Мастер Шеф 9 сезон. Выпуск 13 от 22.11.2019" />
    <meta name="twitter:description" content=" " />
    <meta name="twitter:image" content="https://masterchef.stb.ua/wp-content/uploads/sites/6/2019/11/22/thumb_4_1574431557.jpg" />
    <link rel="profile" href="//gmpg.org/xfn/11" />
    <link rel="shortcut icon" href="https://masterchef.stb.ua/wp-content/themes/STB_New/images/favicon.ico" type="image/x-icon" />

    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NGNC56');</script>

    <meta name="msvalidate.01" content="4A493EF6BC04C87372E1445DF2F7427D" />
    <title>Мастер Шеф 9 сезон 13 выпуск от 22 ноября 2019 - смотреть онлайн на СТБ - шоу Мастер Шеф</title>

    <meta name="description" content="Смотрите онлайн Мастер Шеф 9 сезон 13 выпуск от 22 ноября 2019. Новый выпуск Мастер Шеф 9 выпуск 13 (эфир от 22.11.2019) на сайте СТБ" />
    <meta name="keywords" content="мастер шеф,мастер шеф 9,мастер шеф 9 сезон,мастер шеф 9 выпуск 13,мастер шеф 9 сезон выпуск 13,мастер шеф 9 сезон 13 выпуск,мастер шеф 9 смотреть онлайн выпуск 13,мастер шеф смотреть онлайн выпуск 13,мастер шеф 22.11.2019,мастер шеф сезон 9,мастершеф,мастершеф 2019,мастершеф-9,Сезон 9,Сезон 9 Выпуск 13" />
    <script type="application/ld+json" class="aioseop-schema">{}</script>
    <link rel="canonical" href="https://masterchef.stb.ua/ru/issue/master-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn/" />
    <meta property="og:type" content="tv_show" />
    <meta property="og:title" content="Мастер Шеф 9 сезон 13 выпуск от 22 ноября 2019 - смотреть онлайн на СТБ - шоу Мастер Шеф" />
    <meta property="og:description" content="Смотрите онлайн Мастер Шеф 9 сезон 13 выпуск от 22 ноября 2019. Новый выпуск Мастер Шеф 9 выпуск 13 (эфир от 22.11.2019) на сайте СТБ" />
    <meta property="og:url" content="https://masterchef.stb.ua/ru/issue/master-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn/" />
    <meta property="og:site_name" content="МастерШеф " />
    <meta property="og:image" content="https://masterchef.stb.ua/wp-content/uploads/sites/6/2019/11/22/thumb_4_1574431557-1024x576.jpg" />
    <meta property="og:image:width" content="640" />
    <meta property="og:image:height" content="400" />
    <meta property="og:image:secure_url" content="https://masterchef.stb.ua/wp-content/uploads/sites/6/2019/11/22/thumb_4_1574431557-1024x576.jpg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Мастер Шеф 9 сезон 13 выпуск от 22 ноября 2019 - смотреть онлайн на СТБ - шоу Мастер Шеф" />
    <meta name="twitter:description" content="Смотрите онлайн Мастер Шеф 9 сезон 13 выпуск от 22 ноября 2019. Новый выпуск Мастер Шеф 9 выпуск 13 (эфир от 22.11.2019) на сайте СТБ" />
    <meta name="twitter:image" content="https://masterchef.stb.ua/wp-content/uploads/sites/6/2019/11/22/thumb_4_1574431557-1024x576.jpg" />

    <link rel='dns-prefetch' href='//masterchef.stb.ua' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="alternate" type="application/rss+xml" title="МастерШеф &raquo; Лента" href="https://masterchef.stb.ua/ru/feed/" />
    <link rel="alternate" type="application/rss+xml" title="МастерШеф &raquo; Лента комментариев" href="https://masterchef.stb.ua/ru/comments/feed/" />
    <script type="text/javascript">
        window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/masterchef.stb.ua\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.2.4"}};
        !function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style type="text/css">
        .mistape-test, .mistape_mistake_inner {color: #b5121b !important;}
        #mistape_dialog h2::before, #mistape_dialog .mistape_action, .mistape-letter-back {background-color: #b5121b !important; }
        #mistape_reported_text:before, #mistape_reported_text:after {border-color: #b5121b !important;}
        .mistape-letter-front .front-left {border-left-color: #b5121b !important;}
        .mistape-letter-front .front-right {border-right-color: #b5121b !important;}
        .mistape-letter-front .front-bottom, .mistape-letter-back > .mistape-letter-back-top, .mistape-letter-top {border-bottom-color: #b5121b !important;}
        .mistape-logo svg {fill: #b5121b !important;}
    </style>
    <link rel='stylesheet' id='dashicons-css' href='https://masterchef.stb.ua/wp-includes/css/dashicons.min.css?v=1570701599' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-block-library-css' href='https://masterchef.stb.ua/wp-includes/css/dist/block-library/style.min.css?v=1570701599' type='text/css' media='all' />
    <link rel='stylesheet' id='decovote-css' href='https://masterchef.stb.ua/wp-content/plugins/decovote/public/assets/css/screen.css?v=1570701598' type='text/css' media='all' />
    <link rel='stylesheet' id='VandT-vantd-fr-css-bootstrap-material-design-css' href='https://masterchef.stb.ua/wp-content/plugins/vandt/assets/css/frontend/bootstrap-material-design.min.css?v=1570701599' type='text/css' media='all' />
    <link rel='stylesheet' id='VandT-vantd-fr-css-ripples-css' href='https://masterchef.stb.ua/wp-content/plugins/vandt/assets/css/frontend/ripples.min.css?v=1570701599' type='text/css' media='all' />
    <link rel='stylesheet' id='VandT-vantd-fr-css-fonts-css' href='https://masterchef.stb.ua/wp-content/plugins/vandt/assets/css/frontend/material-icons.min.css?v=1570701599' type='text/css' media='all' />
    <link rel='stylesheet' id='VandT-vantd-fr-css-main-css' href='https://masterchef.stb.ua/wp-content/plugins/vandt/assets/css/frontend/main.min.css?v=1570701599' type='text/css' media='all' />
    <link rel='stylesheet' id='wpProQuiz_front_style-css' href='https://masterchef.stb.ua/wp-content/plugins/wp-pro-quiz/css/wpProQuiz_front.min.css?v=1570701599' type='text/css' media='all' />
    <link rel='stylesheet' id='constructor-person-widget-bootstrap-icons-css' href='https://masterchef.stb.ua/wp-content/plugins/constructor-persons-widget-bootstrap/css/style.css?v=1570701598' type='text/css' media='all' />
    <link rel='stylesheet' id='constructor_color_picker_bootstrap_icons-css' href='https://masterchef.stb.ua/wp-content/plugins/constructor_grid_widget_bootstrap/css/style.css?v=1570701598' type='text/css' media='all' />
    <link rel='stylesheet' id='mistape-front-css' href='https://masterchef.stb.ua/wp-content/plugins/mistape/assets/css/mistape-front.css?v=1570701599' type='text/css' media='all' />
    <link rel='stylesheet' id='app-css-css' href='https://masterchef.stb.ua/wp-content/themes/STB_New/assets/css/app.css?v=1570701599' type='text/css' media='all' />
    <link rel='stylesheet' id='app-css-main-css' href='https://masterchef.stb.ua/wp-content/themes/STB_New/assets/css/main.css?v=1570701599' type='text/css' media='all' />
    <link rel='stylesheet' id='amrusers-css' href='https://masterchef.stb.ua/wp-content/plugins/amr-users/css/amrusersfront.css?v=1573637563' type='text/css' media='all' />
    <script>var vandt = {"ajaxurl":"https:\/\/masterchef.stb.ua\/wp-admin\/admin-ajax.php"};</script><script>var decoMistape = {"ajaxurl":"https:\/\/masterchef.stb.ua\/wp-admin\/admin-ajax.php"};</script><script>var SliderSettings = {"pause":"5","speed":"5","slides":"0"};
        var LoaderErrors = {"size":"\u0421\u043b\u0438\u0448\u043a\u043e\u043c \u0431\u043e\u043b\u044c\u0448\u043e\u0439 \u0444\u0430\u0439\u043b. \u041c\u0430\u043a\u0441\u0438\u043c\u0430\u043b\u044c\u043d\u044b\u0439 \u0440\u0430\u0437\u043c\u0435\u0440 - 5 \u043a\u0411.","type":"\u041d\u0435\u043f\u0440\u0430\u0432\u0438\u043b\u044c\u043d\u044b\u0439 \u0442\u0438\u043f \u0444\u0430\u0439\u043b\u0430. \u0414\u043e\u043f\u0443\u0441\u0442\u0438\u043c\u044b\u0435 \u0442\u0438\u043f\u044b: '.jpg', '.jpeg' or '.png'."};
        var blogInfo = {"blogid":"6"};
        var QueryVars = {"perpage":"10"};
        var AjaxData = {"ajaxurl":"https:\/\/masterchef.stb.ua\/wp-admin\/admin-ajax.php","permalink":"https:\/\/masterchef.stb.ua\/ru\/issue\/master-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn\/","site_url":"https:\/\/masterchef.stb.ua","posts":"{\"page\":0,\"issue\":\"master-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn\",\"post_type\":\"issue\",\"name\":\"master-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn\",\"error\":\"\",\"m\":\"\",\"p\":0,\"post_parent\":\"\",\"subpost\":\"\",\"subpost_id\":\"\",\"attachment\":\"\",\"attachment_id\":0,\"pagename\":\"\",\"page_id\":0,\"second\":\"\",\"minute\":\"\",\"hour\":\"\",\"day\":0,\"monthnum\":0,\"year\":0,\"w\":0,\"category_name\":\"\",\"tag\":\"\",\"cat\":\"\",\"tag_id\":\"\",\"author\":\"\",\"author_name\":\"\",\"feed\":\"\",\"tb\":\"\",\"paged\":0,\"meta_key\":\"\",\"meta_value\":\"\",\"preview\":\"\",\"s\":\"\",\"sentence\":\"\",\"title\":\"\",\"fields\":\"\",\"menu_order\":\"\",\"embed\":\"\",\"category__in\":[],\"category__not_in\":[],\"category__and\":[],\"post__in\":[],\"post__not_in\":[],\"post_name__in\":[],\"tag__in\":[],\"tag__not_in\":[],\"tag__and\":[],\"tag_slug__in\":[],\"tag_slug__and\":[],\"post_parent__in\":[],\"post_parent__not_in\":[],\"author__in\":[],\"author__not_in\":[],\"suppress_filters\":false,\"ignore_sticky_posts\":false,\"cache_results\":false,\"update_post_term_cache\":true,\"lazy_load_term_meta\":true,\"update_post_meta_cache\":true,\"posts_per_page\":10,\"nopaging\":false,\"comments_per_page\":\"50\",\"no_found_rows\":false,\"order\":\"DESC\"}","post_id":"138160","more_btn":"\u0411\u043e\u043b\u044c\u0448\u0435","loading_btn":"Load","current_page":"1","max_page":"0"};</script><script>var stb = {"ajaxurl":"https:\/\/masterchef.stb.ua\/wp-admin\/admin-ajax.php","nonce":"11fa00cf71","post_id":"138160","lang":"ru","stb_auth":"1fff6d8f76"};</script><script type='text/javascript' src='https://masterchef.stb.ua/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-content/themes/STB_New/old/includes/js/ads.js'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-content/plugins/vandt/assets/js/frontend/bootstrap.min.js?v=1570701599'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-content/plugins/vandt/assets/js/frontend/circle-progress.js?v=1570701599'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-content/plugins/vandt/assets/js/frontend/ripples.min.js?v=1570701599'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-content/plugins/vandt/assets/js/frontend/material.min.js?v=1570701599'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-content/plugins/vandt/assets/js/frontend/main.min.js?v=1570701599'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-content/themes/STB_New/old/includes/js/fullscreen-logic.js?v=1570701599'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-content/themes/STB_New/old/includes/js/adriver.core.2.js?v=1570701599'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-includes/js/comment-reply.min.js?v=1570701599'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-includes/js/jquery/ui/datepicker.min.js?v=1570701599'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-includes/js/jquery/ui/mouse.min.js?ver=1.11.4'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-includes/js/jquery/ui/draggable.min.js?ver=1.11.4'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-includes/js/jquery/ui/droppable.min.js?ver=1.11.4'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-includes/js/plupload/moxie.min.js?ver=1.3.5'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-includes/js/plupload/plupload.min.js?ver=2.1.9'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-content/themes/STB_New/old/includes/js/form-builder-shortcode.js?v=1570701599'></script>
    <link rel='https://api.w.org/' href='https://masterchef.stb.ua/ru/wp-json/' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://masterchef.stb.ua/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://masterchef.stb.ua/wp-includes/wlwmanifest.xml" />
    <link rel='prev' title='Мастер Шеф 9 сезон. Выпуск 12 от 15.11.2019' href='https://masterchef.stb.ua/ru/issue/master-shef-9-sezon-vypusk-12-ot-15-11-2019-smotret-onlayn/' />
    <meta name="generator" content="WordPress 5.2.4" />
    <link rel='shortlink' href='https://masterchef.stb.ua/ru/?p=138160' />
    <link rel="alternate" type="application/json+oembed" href="https://masterchef.stb.ua/ru/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmasterchef.stb.ua%2Fru%2Fissue%2Fmaster-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://masterchef.stb.ua/ru/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmasterchef.stb.ua%2Fru%2Fissue%2Fmaster-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn%2F&#038;format=xml" />
    <style type="text/css">
        .qtranxs_flag_ru {background-image: url(https://masterchef.stb.ua/wp-content/plugins/qtranslate-x/flags/ru.png); background-repeat: no-repeat;}
        .qtranxs_flag_ua {background-image: url(https://masterchef.stb.ua/wp-content/plugins/qtranslate-x/flags/ua.png); background-repeat: no-repeat;}
    </style>
    <link hreflang="ru" href="https://masterchef.stb.ua/ru/issue/master-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn/" rel="alternate" />
    <link hreflang="uk" href="https://masterchef.stb.ua/ua/issue/master-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn/" rel="alternate" />
    <link hreflang="x-default" href="https://masterchef.stb.ua/ru/issue/master-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn/" rel="alternate" />
    <meta name="generator" content="qTranslate-XT 3.7.1" />
    <link rel="amphtml" href="https://masterchef.stb.ua/ru/issue/master-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn/amp/" /><style type="text/css" id="custom-background-css">
        body.custom-background { background-color: #e4e4e5; }
    </style>
    <script>
        window._io_config = window._io_config || {};
        window._io_config['0.2.0'] = window._io_config['0.2.0'] || [];
        window._io_config['0.2.0'].push({"page_language":"ru","page_type":"default","page_url_canonical":"https:\/\/masterchef.stb.ua\/ua\/issue\/master-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn\/","page_title":"\u041c\u0430\u0441\u0442\u0435\u0440 \u0428\u0435\u0444 9 \u0441\u0435\u0437\u043e\u043d. \u0412\u0438\u043f\u0443\u0441\u043a 13 \u0432\u0456\u0434 22.11.2019","page_url":"https:\/\/masterchef.stb.ua\/ru\/issue\/master-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn\/","article_publication_date":"Fri, 22 Nov 2019 16:00:00 +0200"});

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id; js.async = true;
            js.src = 'https://cdn.onthe.io/io.js/pT2IkoB9CSBk';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'io-cdnjs'));
    </script>
    <script type="text/javascript" src="//service.maxymiser.net/api/eu/stb.ua/4f1bcd/mmapi.js"></script>
</head>
<body class="issue-template-default single single-issue postid-138160 custom-background">

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NGNC56"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>


<div class='shadow-box'></div>
<div class="sticky_logic_containers">
    <style>
        .example_responsive_4 { width: 160px; height: 600px; position:fixed; left:0; }
        @media(min-width: 1340px) { .example_responsive_4 { width: 160px; height: 600px;  position:fixed; left:0;}}
        @media(min-width: 1500px) { .example_responsive_4 { width: 240px; height: 600px;  position:fixed; left:0;}}
        @media(min-width: 1620px) { .example_responsive_4 { width: 300px; height: 600px;  position:fixed; left:0;}}
    </style>
    <div id='div-gpt-ad-1541676247776-0' class="example_responsive_4">
        <script>
            googletag.cmd.push(function() { googletag.display('div-gpt-ad-1541676247776-0'); });
        </script>
    </div>
    <style>
        .example_responsive_2 { width: 160px; height: 600px; position:fixed; right:0; }
        @media(min-width: 1340px) { .example_responsive_2 { width: 160px; height: 600px;  position:fixed; right:0;}}
        @media(min-width: 1500px) { .example_responsive_2 { width: 240px; height: 600px;  position:fixed; right:0;}}
        @media(min-width: 1620px) { .example_responsive_2 { width: 300px; height: 600px;  position:fixed; right:0;}}
    </style>
    <div id='div-gpt-ad-1541675824848-0' class="example_responsive_2">
        <script>
            googletag.cmd.push(function() { googletag.display('div-gpt-ad-1541675824848-0'); });
        </script>
    </div></div><div class="stb_br_box">

    <div id='div-gpt-ad-1496150538111-3' style='height:1300px; width:2000px;position:fixed;left:50%;margin-left: -1000px; top:0; z-index: 0;'>
        <script>
            googletag.cmd.push(function() { googletag.display('div-gpt-ad-1496150538111-3'); });
        </script>
    </div><div class="top_b_container" style="position: relative;z-index: 99998;"> <div class="cookie-pop closed">
            <div class="cookie-wrap">
                <div class="cookie-text">
                    <div class="cookie-text-inner">Ми використовуємо cookies, щоб проаналізувати та покращити роботу нашого сайту, персоналізувати рекламу.
                    </div>
                    <div class="cookie-text-inner cookie-text-inner_confid">
                        <div class="cookie-text-inner_wrap">
                            Продовжуючи відвідування сайту, ви надаєте згоду на використання cookies та погоджуєтесь з
                            <a href="https://masterchef.stb.ua/ru/privacy_policy/" target="_blank" id="privacyPolicy" class="cookie__link">Політикою конфіденційності.</a>
                        </div>
                    </div>
                </div>
                <a href="#" class="cookie-agree">
                    <span class="cookie-agree__text">Погоджуюсь</span>
                </a>
            </div>
        </div>
        <center>
            <div id='div-gpt-ad-1508836010642-0' style="display:none;">
                <script>
                    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1508836010642-0'); });
                </script>
            </div>
        </center></div>
    <style>
        #catfish-wrapper {
            display:none;
            left:0;
            right:0;
            bottom:0;
            margin:auto;
            position:fixed;
            bottom:0;
            z-index:100000;
            text-align:center !important;
            width: 100% !important;
            height:auto;
        }
        #catfish-wrapper div{
            width: 100% !important;
            text-align:center !important;
        }
        #catfish-wrapper iframe{
            display: inline-block !important;
            float: none !important;
        }
        #catfish-close-btn{
            margin:0;
            display:none;
            width:28px !important;
            position: absolute;
            top: 0;
            left: 0;
            height: 28px;
            background-image:url(https://s0.2mdn.net/ads/richmedia/studio/21515482/23079102_1358876393903_closebutton.png);
            background-size:100%;
            z-index: 110000;
            cursor: pointer;
        }
    </style>
    <script type='text/javascript'>
        function hideCatfishAd() {
            document.getElementById('catfish-wrapper').style.display="none";
            document.getElementById('catfish-wrapper').style.visibility="hidden";
        }
    </script>
    <div id='catfish-wrapper'>
        <div style="position: relative">
            <span id="catfish-close-btn" onclick="hideCatfishAd()"></span>

            <div id='div-gpt-ad-1480931426542-5'>
                <script>
                    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1480931426542-5'); });
                </script>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        <!--//--><![CDATA[//><!--
        var pp_gemius_identifier = 'zaA6tmLYE4pxmevJaiNfm5cgP4NgAodo.6v_E4_wHSz.n7';
        // lines below shouldn't be edited
        function gemius_pending(i) { window[i] = window[i] || function() {var x = window[i+'_pdata'] = window[i+'_pdata'] || []; x[x.length]=arguments;};};
        gemius_pending('gemius_hit'); gemius_pending('gemius_event'); gemius_pending('pp_gemius_hit'); gemius_pending('pp_gemius_event');
        (function(d,t) {try {var gt=d.createElement(t),s=d.getElementsByTagName(t)[0],l='http'+((location.protocol=='https:')?'s':''); gt.setAttribute('async','async');
            gt.setAttribute('defer','defer'); gt.src=l+'://gaua.hit.gemius.pl/xgemius.js'; s.parentNode.insertBefore(gt,s);} catch (e) {}})(document,'script');
        //--><!]]>
    </script></div>
<main class="outer-wrapp">
    <header id="header">
        <div class="grid-container">
            <div class="grid-x ">
                <div class="large-12 cell">
                    <div class="main-menu-block">
                        <div class="main-logo-wrapper">
                            <a href="https://www.stb.ua/" class="main-logo"></a>
                        </div>
                        <nav class="main-menu-wrapper">
                            <ul class="main-menu">
                                <ul class="projects-btn_mob-list">
                                    <li class="search_btn search_mob"></li>
                                    <li class="lang-switch ua-ru"><a href="https://masterchef.stb.ua/ua/issue/master-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn"></a>
                                    </li>
                                </ul>
                                <li class="projects-btn">
                                    <a class="st_nav_button_menu" href="https://www.stb.ua/projects">Проекты</a>
                                    <main class="popup-overlay">
                                        <div class="grid-container projects-popup-wrapper">
                                            <div class="projects-popup grid-padding-x">
                                                <div class="grid-x  posters-wrapper">
                                                </div>
                                            </div>
                                        </div>
                                    </main>
                                </li>
                                <li>
                                    <a class="st_nav_button_menu" href="https://www.stb.ua/tv">ТВ-программа</a>
                                </li>
                                <li><a href="https://www.stb.ua/video/" class="st_nav_button_menu" itemprop="url">Видео</a></li>
                                <li><a href="https://www.stb.ua/casting_stb/" class="st_nav_button_menu" itemprop="url">Кастинги</a></li>
                                <li><a href="https://www.stb.ua/konkursy/" class="st_nav_button_menu" itemprop="url">Конкурсы</a></li>
                            </ul>
                            <div class="menu-icon-group">
                                <ul>
                                    <li class="search_btn"></li>
                                    <li class="hide-show-menu"></li>
                                    <li class="close-search-form"></li>
                                    <li class="lang-switch ua-ru"><a href="https://masterchef.stb.ua/ua/issue/master-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn"></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <div class="hamburger"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="search" class="popup-overlay">
        <div class="grid-container">
            <div class="grid-x">
                <form action="https://masterchef.stb.ua">
                    <input type="text" name="s" placeholder="Поиск" name="search">
                    <button type="submit"></button>
                </form>
            </div>
        </div>
    </section>
    <section id="regLog" class="popup-overlay full-page">
        <div class="close">
            <button></button>
        </div>
        <div class="grid-container">
            <div class="grid-x">
                <div class="registration-form">

                    <ul class="tabs" data-tabs id="regLog-tabs">
                        <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Логин</a></li>
                        <li class="tabs-title"><a data-tabs-target="panel2" href="#panel2">Регистрация</a></li>
                    </ul>

                    <div class="tabs-content" data-tabs-content="regLog-tabs">
                        <div class="tabs-panel is-active" id="panel1">
                            <form action="login" id="stb-login-form" class="stb-auth-form">
                                <input type="hidden" id="nonce_code" name="nonce_code" value="77678a39c4" /><input type="hidden" name="_wp_http_referer" value="/ru/issue/master-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn/" /> <span class="auth__message"></span>
                                <input type="text" name="action" value="login" style="display:none">
                                <input type="email" name="email" placeholder="Email">
                                <input type="password" name="pass" placeholder="Пароль">
                                <label class="checkbox-container">
                                    Запомнить меня <input type="checkbox" name="remember">
                                    <span class="checkmark"></span>
                                </label>
                                <button type="submit">Логин</button>
                            </form>
                            <button class="password-reset">Восстановление пароля</button>
                        </div>
                        <div class="tabs-panel" id="panel2">
                            <form action="register" id="stb-register-form" class="stb-auth-form">
                                <span class="auth__message"></span>
                                <input type="text" name="action" value="register" style="display:none">
                                <input type="text" name="name" placeholder="Имя">
                                <input type="email" name="email" placeholder="Email">
                                <input type="password" name="password" placeholder="Создать пароль">
                                <input type="password" name="password-repeat" placeholder="Повторите пароль">
                                <label class="checkbox-container">
                                    Принять <a target="_blank" href="https://www.stb.ua/ru/privacy_policy/">политику конфиденциальности</a> <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <button type="submit">Регистрация</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>.grid-container.project-menu{ background: url(https://masterchef.stb.ua/wp-content/uploads/sites/6/2018/12/21/MC_bg-1.png) }</style>
    <div class="grid-container project-menu">
        <div class="grid-x ">
            <div class="large-12 cell">
                <nav>
                    <ul>
                        <li><a href="https://masterchef.stb.ua/ru">МастерШеф</a></li>
                        <li><span class="show-submenu"></span>
                            <ul id="menu-glavnoe" class=""><li><a href="https://masterchef.stb.ua/ru/video-2/" itemprop="url">Все сезоны</a></li>
                                <li><a href="https://masterchef.stb.ua/ru/uchastniki/" itemprop="url">Участники</a></li>
                                <li><a href="https://masterchef.stb.ua/ru/zhyuri/" itemprop="url">Жюри</a></li>
                                <li><a href="https://masterchef.stb.ua/ru/anketa-uchastnika/" itemprop="url">Анкета</a></li>
                            </ul> </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <section class="menu-up">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class=" video-stream">
                    <div itemprop="video" itemscope itemtype="http://schema.org/VideoObject"><h2 style="display: none;">Video: <span itemprop="name">Мастер Шеф 9 сезон. Выпуск 13 от 22.11.2019</span></h2><meta itemprop="thumbnailURL" content="https://masterchef.stb.ua/wp-content/uploads/sites/6/2019/11/22/thumb_4_1574431557-1024x576.jpg" /><meta itemprop="height" content="670" /><meta itemprop="width" content="390" /><meta itemprop="uploadDate" content="2019-11-22T18:00:00+02:00" /><meta itemprop="embedURL" content="https://player.starlight.digital/vplayer/?hash=844932a35451fce1c486c28265a9b2283f48523a8cdd7da6dbd6d07580ba5af1&referer=" /><iframe class="adaptive_16_9" width="640" height="360" src="https://player.starlight.digital/vplayer/?hash=844932a35451fce1c486c28265a9b2283f48523a8cdd7da6dbd6d07580ba5af1&referer=" allowfullscreen="allowfullscreen"></iframe><span style="display: none;" itemprop="description">Смотрите онлайн Мастер Шеф 9 сезон 13 выпуск от 22 ноября 2019. Новый выпуск Мастер Шеф 9 выпуск 13 (эфир от 22.11.2019) на сайте СТБ</span></div> </div>
            </div>
        </div>
    </section>
    <section>
        <div class="grid-container section-gray">
            <div class="grid-x video-page-about">
                <div class="medium-8 cell">
                    <ul class="breadcrumbs">
                        <li><a href="https://masterchef.stb.ua/ru" title="МастерШеф">МастерШеф</a></li><li><a href="https://masterchef.stb.ua/ru/tax_season/sezon-9/" title="Сезон 9">Сезон 9</a></li><li>Мастер Шеф 9 сезон. Выпуск 13 от 22.11.2019</li> </ul>
                    <div class="pseudo-breadcrumbs"><span>Выпуск 13</span> | <span>22.11.2019</span> | <span>Сезон 9</span></div>
                    <div style="padding: 10px 0 10px 0;">
                        <div class="center"><div id="div-gpt-ad-1532517704137-0"><script>googletag.cmd.push(function(){googletag.display('div-gpt-ad-1532517704137-0');});</script></div></div> </div>
                    <div class="about">
                        <p dir="ltr">В программе <a href="https://masterchef.stb.ua/ru/" target="_blank" rel="noopener noreferrer"><strong>Мастер Шеф</strong></a> 9 сезон 13 выпуск от 22.11.2019 осталось 10 сильнейших кулинаров-аматоров. Они уже прошли через много испытаний, но самое сложное – впереди. Сегодня они будут бороться с собственной жадностью и медлительностью, а еще испытают дружбу на прочность.</p>
                        <p dir="ltr">В первом конкурсе команды станут участниками аукциона. Им придется выставлять на продажу продукты, чтобы получить необходимые девайсы. Чей разум затуманит азарт? А кто сможет сохранить холодную голову и получить все необходимое с минимальными затратами? Узнайте прямо сейчас!</p>
                        <p dir="ltr">Многие участники Мастер Шеф 9 успели завести на проекте друзей. Но можно ли на них положиться? Покажет битва черных! Верный товарищ прикроет спину, поможет найти выход из сложной ситуации и подбодрить в трудную минуту. Кто сможет спасти своего друга от вылета из проекта? Смотрите в шоу Мастер Шеф 9 сезон 13 выпуск от 22.11.2019!</p>
                        <p dir="ltr">Смотреть онлайн <strong><a href="https://masterchef.stb.ua/ru/issue/master-shef-9-sezon-vypusk-12-ot-15-11-2019-smotret-onlayn/" target="_self" rel="noopener noreferrer">Мастер Шеф 9 сезон 12 выпуск от 15.11.2019</a></strong></p>
                        <div class="mistape_caption"><span class="mistape-link-wrap"><a href="https://mistape.com" target="_blank" rel="nofollow" class="mistape-link mistape-logo"><svg width="64" version="1.1" xmlns="http://www.w3.org/2000/svg" height="64" viewBox="0 0 64 64" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 64 64"><g><g><path d="m62.463,1.543c-1.017-1.017-2.403-1.542-3.83-1.543-1.43,0.021-2.778,0.591-3.801,1.609l-2.446,2.443c-0.01,0.012-0.015,0.025-0.024,0.035l-31.909,31.819c-0.104,0.104-0.158,0.233-0.234,0.353-0.131,0.152-0.245,0.317-0.327,0.505l-3.254,7.5c-0.324,0.75-0.169,1.62 0.397,2.211 0.392,0.41 0.927,0.631 1.476,0.631 0.241,0 0.486-0.043 0.719-0.131l7.824-2.943c0.217-0.081 0.406-0.209 0.579-0.352 0.126-0.08 0.262-0.14 0.367-0.245l32.035-31.945c0.006-0.006 0.008-0.014 0.015-0.02l2.341-2.33c2.118-2.111 2.15-5.52 0.072-7.597zm-35.905,37.576l-1.777-1.773 29.151-29.069 1.776,1.773-29.15,29.069zm32.95-32.857l-.916,.912-1.784-1.779 .911-.91c0.265-0.264 0.609-0.411 0.972-0.416 0.344-0.008 0.653,0.119 0.883,0.348 0.491,0.49 0.459,1.319-0.066,1.845z" /><path d="M58.454,22.253c-1.128,0-2.04,0.911-2.04,2.034v33.611c0,1.121-0.915,2.033-2.04,2.033H6.12    c-1.126,0-2.04-0.912-2.04-2.033V9.787c0-1.121,0.914-2.034,2.04-2.034h33.403c1.127,0,2.04-0.911,2.04-2.034    s-0.913-2.034-2.04-2.034H6.12C2.745,3.685,0,6.422,0,9.787v48.111C0,61.263,2.745,64,6.12,64h48.254    c3.374,0,6.12-2.737,6.12-6.102V24.287C60.494,23.164,59.581,22.253,58.454,22.253z" /></g></g></svg></a></span></p>
                            <p>Если вы нашли ошибку, пожалуйста, выделите фрагмент текста и нажмите <em>Ctrl+Enter</em>.</p>
                        </div>
                    </div>
                    <div class="video_content_banner">
                        <div class="top_b_container_mobile">
                            <div id='div-gpt-ad-1519210094390-2'>
                                <script>
                                    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1519210094390-2'); });
                                </script>
                            </div></div>  </div>
                </div>
                <div class="medium-4 cell sidebar-right-post">
                    <div class="adv">
                        <div id='div-gpt-ad-1472564131701-0'>
                            <script>
                                googletag.cmd.push(function() { googletag.display('div-gpt-ad-1472564131701-0'); });
                            </script>
                        </div></div><div class="adv">
                        <div id='div-gpt-ad-1472564131701-1'>
                            <script>
                                googletag.cmd.push(function() { googletag.display('div-gpt-ad-1472564131701-1'); });
                            </script>
                        </div></div><div class="adv">
                        <div id='div-gpt-ad-1499165868253-3'>
                            <script>
                                googletag.cmd.push(function() { googletag.display('div-gpt-ad-1499165868253-3'); });
                            </script>
                        </div></div> </div>
            </div>
        </div>
    </section>
    <section>
        <div class="footer__banner grid-container">
            <div style="padding: 20px 0 0 0; justify-content: center;display: flex;">
                <div id='div-gpt-ad-1474453955686-0'>
                    <script>
                        googletag.cmd.push(function() { googletag.display('div-gpt-ad-1474453955686-0'); });
                    </script>
                </div></div>
        </div>
    </section>
    <section>
        <div class="grid-container section-gray">
            <div class="grid-x">
                <div class="large-12 cell text-center endemol-license">
                    <div><p><img class="alignnone size-full wp-image-125564" src="https://masterchef.stb.ua/wp-content/uploads/sites/6/2018/12/05/endemol.png" alt="Image00001итьбю" /></p>
                        Licensor’s website <a href="https://www.endemolshinegroup.com/">www.endemolshmine.com</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
    <div class="grid-container footer-social">
        <div class="grid-x">
            <div class="large-12 cell text-center">
                <ul class="social-links">
                    <li><a target="_blank" href="https://twitter.com/TVchannelSTB" class="soc-link tw"></a></li>
                    <li><a target="_blank" href="https://t.me/stbua" class="soc-link tel"></a></li>
                    <li><a target="_blank" href="https://facebook.com/TVchannelSTB/" class="soc-link fb"></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/stbua/" class="soc-link ins"></a></li>
                    <li><a target="_blank" href="https://invite.viber.com/?g2=AQAEyTKlm%2BFr7EkXH3XqNq6Fq5YMfDXXGFuMoFZyx8P99870orQOxD5pN7G51IsF" class="soc-link vib"></a></li>
                    <li><a target="_blank" href="https://www.youtube.com/user/MasterChefUA" class="soc-link you"></a></li>
                    <li><a target="_blank" href="https://plus.google.com/+StbUa" class="soc-link gp"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="grid-container footer-content">
        <div class="grid-x">
            <div class="small-10 small-offset-1 large-10 large-offset-1 cell">
                <div class="footer-nav">
                    <nav>
                        <ul id="menu-futer"><li><a href="https://www.stb.ua/pro-kanal/" itemprop="url">СТБ: информация о телеканале</a></li>
                            <li><a href="https://www.stb.ua/reklama/" itemprop="url">Реклама</a></li>
                            <li><a href="https://www.stb.ua/rabota-na-stb/" itemprop="url">Работа на СТБ</a></li>
                            <li><a href="https://www.stb.ua/zvorotnij-zvyazok/" itemprop="url">Обратная связь</a></li>
                            <li><a href="https://www.stb.ua/useragreement/" itemprop="url">Пользовательское соглашение</a></li>
                            <li><a href="https://www.stb.ua/privacy_policy/" itemprop="url">Политика конфиденциальности</a></li>
                            <li><a href="https://www.stb.ua/set-veshhaniya/" itemprop="url">Сеть вещания</a></li>
                            <li><a href="https://www.stb.ua/struktura-vlasnosti/" itemprop="url">Структура собственности</a></li>
                        </ul> </nav>
                </div>
                <div class="grid-x ">
                    <div class="medium-6 cell footer-copyright">
                        СТБ входит в группу <a target="_blank" href="https://slm.ua/">StarLightMedia</a>, которая
                        объединяет 16 компаний.
                        Использование материалов данного сайта возможно
                        исключительно путем размещения гиперссылки
                        на перво-источник без изменения содержания.
                    </div>
                    <div class="medium-6 cell footer-copyright">
                        СТБ является участником инициативы «Чистое небо» по защите прав интеллектуальной собственности в
                        сети Интернет. Подробную информацию и контакты для переговоров по получению прав на размещение
                        видео можно найти на сайте инициативы <a href="">legalcontentua.com</a>
                    </div>
                    <div class="large-12 cell text-center footer-copyright">©
                        1997—2019 ООО «Телеканал СТБ»</div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript">
    ;!function () {
        window.NewzmateConfig = {id: 294};
        var e = document.createElement("script");
        e.setAttribute("id", "tqlucidsdksel"), e.type = "text/javascript", e.src = "//api.traq.li/public/sdk/v04/sdk.js?v=" + (localStorage && localStorage.lucidsdkver || "xxx"), e.async = !0, document.getElementsByTagName("script")[0].parentNode.appendChild(e);
    }();
</script>
<div id="wrapfabtest">
    <div class="adBanner">
    </div>
</div>
<div id="current_uname" data-current="quest_user"></div>
<div id="current_author" data-current="Dmytro Kovalchuk"></div>
<div id="current_date" data-current="18:00"></div>

<script type="text/javascript">
    function getCookie(name) {
        var matches = document.cookie.match(new RegExp(
            "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\/\+^])/g, "\$1") + "=([^;]*)"
        ));
        return matches ? decodeURIComponent(matches[1]) : undefined;
    }


    jQuery(document).ready(function() {
        if(getCookie("env") && getCookie("env") != ""){
            jQuery("#server-env").html(getCookie("env"));
            jQuery("#server-env").addClass("is-active");
        }

    })
</script>
<style>
    #server-env{
        display:none;
        position:fixed;
        right: 0;
        top: 0;
        z-index: 9;
        background: #B4D6C6;
        height: 30px;
        width: 200px;
        color: #41848F;
        text-align: center;
    }
    #server-env span{
        vertical-align:  middle;
        display: table-cell;
    }
    #server-env.is-active{
        display: table;
    }
</style><div id="server-env"><span></span></div><script type='text/javascript' src='https://masterchef.stb.ua/wp-content/plugins/decovote/public/assets/js/script.js?v=1570701598'></script>
<script type='text/javascript' src='https://masterchef.stb.ua/wp-content/plugins/decovote/public/assets/js/cookie.js?v=1570701598'></script>
<script type='text/javascript' src='https://masterchef.stb.ua/wp-content/plugins/constructor-persons-widget-bootstrap/js/constructor-person-widget-bootstrap-front-ajax-loader.js?v=1570701598'></script>
<script type='text/javascript' src='https://masterchef.stb.ua/wp-content/plugins/constructor_grid_widget_bootstrap/js/constructor-front-ajax-loader.js?v=1570701598'></script>
<script type='text/javascript' src='https://masterchef.stb.ua/wp-content/plugins/mistape/assets/js/modernizr.custom.js?v=1570701599'></script>
<script type='text/javascript' src='https://masterchef.stb.ua/wp-content/plugins/mistape/assets/js/mistape-front.js?v=1570701599'></script>
<script type='text/javascript' src='https://masterchef.stb.ua/wp-content/themes/STB_New/old/includes/js/main.js?v=1570701599'></script>
<script type='text/javascript' src='https://masterchef.stb.ua/wp-content/themes/STB_New/assets/js/what-input.min.js?v=1570701599'></script>
<script type='text/javascript' src='https://masterchef.stb.ua/wp-content/themes/STB_New/assets/js/slick.min.js?v=1570701599'></script>
<script type='text/javascript' src='https://masterchef.stb.ua/wp-content/themes/STB_New/assets/js/foundation.min.js?v=1570701599'></script>
<script type='text/javascript' src='https://masterchef.stb.ua/wp-content/themes/STB_New/assets/js/app.js?v=1573129386'></script>
<script type='text/javascript' src='https://masterchef.stb.ua/wp-content/themes/STB_New/assets/js/slick-carousel.js?v=1573203619'></script>
<script type='text/javascript' src='https://masterchef.stb.ua/wp-content/themes/STB_New/assets/js/main.js?v=1573129386'></script>
<script type='text/javascript' src='https://masterchef.stb.ua/wp-includes/js/wp-embed.min.js?ver=5.2.4'></script>
<div id="mistape_dialog" data-mode="comment" data-dry-run="0">
    <div class="dialog__overlay"></div><div class="dialog__content"><div id="mistape_confirm_dialog" class="mistape_dialog_screen">
            <div class="dialog-wrap">
                <div class="dialog-wrap-top">
                    <h2>Сообщить об опечатке</h2>
                    <div class="mistape_dialog_block">
                        <h3>Текст, который будет отправлен нашим редакторам:</h3>
                        <div id="mistape_reported_text"></div>
                    </div>
                </div>
                <div class="dialog-wrap-bottom"><div class="mistape_dialog_block comment">
                        <h3><label for="mistape_comment">Ваш комментарий (необязательно):</label></h3>
                        <textarea id="mistape_comment" cols="60" rows="3" maxlength="1000"></textarea>
                    </div><div class="pos-relative">
                    </div>
                </div>
            </div>
            <div class="mistape_dialog_block">
                <a class="mistape_action" data-action="send" data-id="138160" role="button">Отправить</a>
                <a class="mistape_action" data-dialog-close role="button" style="display:none">Отмена</a>
            </div>
            <div class="mistape-letter-front letter-part">
                <div class="front-left"></div>
                <div class="front-right"></div>
                <div class="front-bottom"></div>
            </div>
            <div class="mistape-letter-back letter-part">
                <div class="mistape-letter-back-top"></div>
            </div>
            <div class="mistape-letter-top letter-part"></div>
        </div></div></div> <script>
    jQuery(document).ready(function ($) {
        function waitAndStartAutorefresh() {
            if (globalStartAutorefresh) {
                globalStartAutorefresh();
            } else {
                setTimeout(waitAndStartAutorefresh, 200);
            }
        }
        waitAndStartAutorefresh();
    });
</script></body>
</html>

<!DOCTYPE html>
<html lang="ru-RU" prefix="og: https://ogp.me/ns#">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="robots" content="index,follow">
    <script src="/cdn-cgi/apps/head/an_8J_6KDHLIg_G7K2C3ftg6sDI.js"></script><script> !(function () {
            window.googletag = window.googletag || {};
            window.vmpbjs = window.vmpbjs || {};
            window.vpb = window.vpb || {};
            vpb.fastLoad = true;
            googletag.cmd = googletag.cmd || [];
            vmpbjs.cmd = vmpbjs.cmd || [];
            var cmds = [];
            var ready = false;

            function exec(cb) {
                return cb.call(googletag);
            }

            googletag.cmd.push(function () {
                googletag.cmd.unshift = function (cb) {
                    if (ready) {
                        return exec(cb);
                    }
                    cmds.unshift(cb);
                    if (cb._startgpt) {
                        ready = true;
                        cmds.forEach(cb => {
                            exec(cb);
                        });
                    }
                };
                googletag.cmd.push = function (cb) {
                    if (ready) {
                        return exec(cb);
                    }
                    cmds.push(cb);
                };
            });
            googletag.cmd.push = function (cb) {
                cmds.push(cb)
            };
            googletag.cmd.unshift = function (cb) {
                cmds.unshift(cb);
                if (cb._startgpt) {
                    ready = true;
                    if (googletag.apiReady) {
                        cmds.forEach(function (cb) {
                            googletag.cmd.push(cb);
                        })
                    } else {
                        googletag.cmd = cmds;
                    }
                }
            };
            var dayMs = 864e5, cb = parseInt(Date.now() / dayMs),
                vpbSrc = '//player.adtelligent.com/prebid/wrapper_hb_266844_676.js?cb=' + cb,
                pbSrc = vpbSrc.replace('wrapper_hb', 'hb'), gptSrc = '//securepubads.g.doubleclick.net/tag/js/gpt.js',
                c = document.head || document.body || document.documentElement;

            function loadScript(src, cb) {
                var s = document.createElement('script');
                s.src = src;
                s.defer = true;
                c.appendChild(s);
                s.onload = cb;
                s.onerror = cb;
                return s;
            }

            loadScript(pbSrc);
            loadScript(gptSrc);
            loadScript(vpbSrc);
        })() </script>
    <script>
        var googletag = googletag || {};
        googletag.cmd = googletag.cmd || [];
    </script>
    <script async type='text/javascript'>
        var list, index;
        var slot_bgrnd, stick_left, stick_right, slot_content, slot_bgrnd_main;
        var background_status;
        googletag.cmd.push(function () {
            var slotStickMapping = googletag.sizeMapping().addSize([0, 0], []).addSize([1340, 600], [160, 600]).addSize([1500, 600], [240, 600]).addSize([1620, 600], [300, 600]).build();
            var mapping_catfish = googletag.sizeMapping().addSize([2048, 1536], [1440, 180]).addSize([1920, 1440], [1440, 180]).addSize([1920, 1280], [1440, 180]).addSize([2048, 1152], [1440, 180]).addSize([1920, 1200], [1440, 180]).addSize([2048, 1080], [1440, 180]).addSize([1920, 1080], [1440, 180]).addSize([1600, 1200], [1440, 180]).addSize([1680, 1050], [1440, 180]).addSize([1600, 1024], [1440, 180]).addSize([1440, 1080], [1440, 180]).addSize([1400, 1050], [1440, 180]).addSize([1600, 900], [1440, 180]).addSize([1440, 960], [1440, 180]).addSize([1536, 864], [1440, 180]).addSize([1280, 1024], [1440, 180]).addSize([1440, 900], [1440, 180]).addSize([1600, 768], [1440, 180]).addSize([1280, 960], [1440, 180]).addSize([1280, 854], [1440, 180]).addSize([1366, 768], [1440, 180]).addSize([1152, 900], [1440, 180]).addSize([1280, 800], [1440, 180]).addSize([1152, 864], [1440, 180]).addSize([1280, 768], [1440, 180]).addSize([1120, 832], [1440, 180]).addSize([1280, 720], [1440, 180]).addSize([1152, 768], [1440, 180]).addSize([1200, 720], [1440, 180]).addSize([1028, 768], [1440, 180]).addSize([1152, 648], [1440, 180]).addSize([1028, 600], [1440, 180]).addSize([1028, 576], [1440, 180]).addSize([960, 640], [728, 90]).addSize([960, 540], [728, 90]).addSize([800, 640], [728, 90]).addSize([784, 640], [728, 90]).addSize([800, 600], [728, 90]).addSize([854, 480], [728, 90]).addSize([854, 466], [728, 90]).addSize([800, 480], [728, 90]).addSize([728, 728], [728, 90]).addSize([468, 288], [468, 60]).addSize([640, 350], [468, 60]).addSize([640, 288], [468, 60]).addSize([640, 272], [468, 60]).addSize([640, 200], [468, 60]).addSize([720, 360], [468, 60]).addSize([640, 400], [468, 60]).addSize([720, 350], [468, 60]).addSize([720, 348], [468, 60]).addSize([640, 512], [468, 60]).addSize([640, 480], [468, 60]).addSize([512, 384], [468, 60]).addSize([512, 342], [468, 60]).addSize([512, 256], [468, 60]).addSize([480, 320], [468, 60]).addSize([480, 272], [468, 60]).addSize([468, 272], [468, 60]).addSize([320, 256], [320, 50]).addSize([400, 288], [320, 50]).addSize([400, 240], [320, 50]).addSize([320, 240], [320, 50]).addSize([320, 200], [320, 50]).addSize([256, 192], [320, 50]).addSize([160, 200], [320, 50]).build();
            var mapping_top = googletag.sizeMapping().addSize([2048, 1536], [728, 90]).addSize([1920, 1440], [728, 90]).addSize([1920, 1280], [728, 90]).addSize([2048, 1152], [728, 90]).addSize([1920, 1200], [728, 90]).addSize([2048, 1080], [728, 90]).addSize([1920, 1080], [728, 90]).addSize([1600, 1200], [728, 90]).addSize([1680, 1050], [728, 90]).addSize([1600, 1024], [728, 90]).addSize([1440, 1080], [728, 90]).addSize([1400, 1050], [728, 90]).addSize([1600, 900], [728, 90]).addSize([1440, 960], [728, 90]).addSize([1536, 864], [728, 90]).addSize([1280, 1024], [728, 90]).addSize([1440, 900], [728, 90]).addSize([1600, 768], [728, 90]).addSize([1280, 960], [728, 90]).addSize([1280, 854], [728, 90]).addSize([1366, 768], [728, 90]).addSize([1152, 900], [728, 90]).addSize([1280, 800], [728, 90]).addSize([1152, 864], [728, 90]).addSize([1280, 768], [728, 900]).addSize([1120, 832], [728, 90]).addSize([1280, 720], [728, 90]).addSize([1152, 768], [728, 90]).addSize([1200, 720], [728, 90]).addSize([1028, 768], [728, 90]).addSize([1152, 648], [728, 90]).addSize([1028, 600], [728, 90]).addSize([1028, 576], [728, 90]).addSize([960, 640], [728, 90]).addSize([960, 540], [728, 90]).addSize([800, 640], [728, 90]).addSize([784, 640], [728, 90]).addSize([800, 600], [728, 90]).addSize([854, 480], [728, 90]).addSize([854, 466], [728, 90]).addSize([800, 480], [728, 90]).addSize([728, 728], [728, 90]).addSize([468, 288], [468, 60]).addSize([640, 350], [468, 60]).addSize([640, 288], [468, 60]).addSize([640, 272], [468, 60]).addSize([640, 200], [468, 60]).addSize([720, 360], [468, 60]).addSize([640, 400], [468, 60]).addSize([720, 350], [468, 60]).addSize([720, 348], [468, 60]).addSize([640, 512], [468, 60]).addSize([640, 480], [468, 60]).addSize([512, 384], [468, 60]).addSize([512, 342], [468, 60]).addSize([512, 256], [468, 60]).addSize([480, 320], [468, 60]).addSize([480, 272], [468, 60]).addSize([468, 272], [468, 60]).addSize([320, 256], [320, 50]).addSize([400, 288], [320, 50]).addSize([400, 240], [320, 50]).addSize([320, 240], [320, 50]).addSize([320, 200], [320, 50]).addSize([256, 192], [320, 50]).addSize([160, 200], [320, 50]).build();

            if (window.innerWidth > 1219) {
                slot_bgrnd = googletag.defineSlot('/58302844/SLDS_STB_background', [2000, 1300], 'div-gpt-ad-1496150538111-3').addService(googletag.pubads()).setTargeting("masterchef138160", "3c708d8a35c95ece08caf15ec518a695").setTargeting("masterchef_stb_ua", "masterchef.stb.ua").setTargeting("url", "3c708d8a35c95ece08caf15ec518a695");
            }

            if (window.innerWidth <= 769) {
                googletag.defineSlot('/58302844/SLDS_STB_M_Premium1', [300, 250], 'div-gpt-ad-1493020093692-1').addService(googletag.pubads()).setTargeting("masterchef138160", "3c708d8a35c95ece08caf15ec518a695").setTargeting("masterchef_stb_ua", "masterchef.stb.ua").setTargeting("url", "3c708d8a35c95ece08caf15ec518a695");
                googletag.defineSlot('/58302844/SLDS_STB_Premium_M_ContentBanner', [[240, 350], [336, 280], [300, 250]], 'div-gpt-ad-1519210094390-2').addService(googletag.pubads()).setTargeting("masterchef138160", "3c708d8a35c95ece08caf15ec518a695").setTargeting("masterchef_stb_ua", "masterchef.stb.ua").setTargeting("url", "3c708d8a35c95ece08caf15ec518a695");
                googletag.defineSlot('/58302844/SLDS_STB_M_premium2', [300, 250], 'div-gpt-ad-1493020093692-0').addService(googletag.pubads()).setTargeting("masterchef138160", "3c708d8a35c95ece08caf15ec518a695").setTargeting("masterchef_stb_ua", "masterchef.stb.ua").setTargeting("url", "3c708d8a35c95ece08caf15ec518a695");
                googletag.defineSlot('/58302844/SLDS_STB_Mobile_320_50', [320, 50], 'div-gpt-ad-1532517704137-0').addService(googletag.pubads()).setTargeting("masterchef138160", "3c708d8a35c95ece08caf15ec518a695").setTargeting("masterchef_stb_ua", "masterchef.stb.ua").setTargeting("url", "3c708d8a35c95ece08caf15ec518a695");
            } else {
                googletag.defineSlot('/58302844/SLDS_STB_Premium1_300_250', [[240, 400], [240, 350], [300, 600], [240, 600], [300, 250]], 'div-gpt-ad-1472564131701-0').addService(googletag.pubads()).setTargeting("masterchef138160", "3c708d8a35c95ece08caf15ec518a695").setTargeting("masterchef_stb_ua", "masterchef.stb.ua").setTargeting("url", "3c708d8a35c95ece08caf15ec518a695");
                googletag.defineSlot('/58302844/SLDS_STB_Premium2_300_250', [[240, 400], [240, 350], [300, 600], [240, 600], [300, 250]], 'div-gpt-ad-1472564131701-1').addService(googletag.pubads()).setTargeting("masterchef138160", "3c708d8a35c95ece08caf15ec518a695").setTargeting("masterchef_stb_ua", "masterchef.stb.ua").setTargeting("url", "3c708d8a35c95ece08caf15ec518a695");
                googletag.defineSlot('/58302844/SLDS_STB_premium3', [[240, 600], [300, 250], [300, 600], [240, 400], [240, 350]], 'div-gpt-ad-1499165868253-3').addService(googletag.pubads()).setTargeting("masterchef138160", "3c708d8a35c95ece08caf15ec518a695").setTargeting("masterchef_stb_ua", "masterchef.stb.ua").setTargeting("url", "3c708d8a35c95ece08caf15ec518a695");
                googletag.defineSlot('/58302844/SLDS_STB_Footer', [728, 90], 'div-gpt-ad-1474453955686-0').addService(googletag.pubads()).setTargeting("masterchef138160", "3c708d8a35c95ece08caf15ec518a695").setTargeting("masterchef_stb_ua", "masterchef.stb.ua").setTargeting("url", "3c708d8a35c95ece08caf15ec518a695");

                slot_content = googletag.defineSlot('/58302844/SLDS_STB_content_banner', [[580, 400], [336, 280]], 'div-gpt-ad-1482485987174-0').addService(googletag.pubads()).setTargeting("masterchef138160", "3c708d8a35c95ece08caf15ec518a695").setTargeting("masterchef_stb_ua", "masterchef.stb.ua").setTargeting("url", "3c708d8a35c95ece08caf15ec518a695");
            }

            googletag.defineSlot('/58302844/SLDS_STB_Pop_UP', [[600, 600], [300, 300]], 'div-gpt-ad-1480929596159-4').addService(googletag.pubads()).setTargeting("masterchef138160", "3c708d8a35c95ece08caf15ec518a695").setTargeting("masterchef_stb_ua", "masterchef.stb.ua").setTargeting("url", "3c708d8a35c95ece08caf15ec518a695");

            googletag.defineSlot('/58302844/SLDS_STB_Catfish', [[1440, 180], [728, 90], [468, 60], [320, 50]], 'div-gpt-ad-1480931426542-5').defineSizeMapping(mapping_catfish).addService(googletag.pubads()).setTargeting("masterchef138160", "3c708d8a35c95ece08caf15ec518a695").setTargeting("masterchef_stb_ua", "masterchef.stb.ua").setTargeting("url", "3c708d8a35c95ece08caf15ec518a695");
            var arr_premium = [
                'div-gpt-ad-1472564131701-0',
                'div-gpt-ad-1472564131701-1',
                'div-gpt-ad-1499165868253-3'
            ];
            var m_arr_premium = [
                'div-gpt-ad-1493020093692-0',
                'div-gpt-ad-1493020093692-1'
            ];
            $marketing_popup = true;
            googletag.pubads().addEventListener('slotRenderEnded', function (e) {
                var mc_parent_div, mc_iframe, close_position_left = 0, close_position_top = 0;
                var slotElementId = e.slot.getSlotElementId();
                if (slotElementId == "div-gpt-ad-1496150538111-3") {
                    if (e.isEmpty) {
                        if (jQuery('#div-gpt-ad-1496150538111-3').css('display') == 'none') {
                            stick_right = googletag.defineSlot('/58302844/SLDS_STB_Sticky_Right', [[240, 600], [300, 600], [160, 600]], 'div-gpt-ad-1541675824848-0').defineSizeMapping(slotStickMapping).addService(googletag.pubads()).addService(googletag.pubads()).setTargeting("masterchef138160", "3c708d8a35c95ece08caf15ec518a695").setTargeting("masterchef_stb_ua", "masterchef.stb.ua").setTargeting("url", "3c708d8a35c95ece08caf15ec518a695");
                            stick_left = googletag.defineSlot('/58302844/SLDS_STB_Sticky_Left', [[300, 600], [240, 600], [160, 600]], 'div-gpt-ad-1541676247776-0').defineSizeMapping(slotStickMapping).addService(googletag.pubads()).addService(googletag.pubads()).setTargeting("masterchef138160", "3c708d8a35c95ece08caf15ec518a695").setTargeting("masterchef_stb_ua", "masterchef.stb.ua").setTargeting("url", "3c708d8a35c95ece08caf15ec518a695");
                            googletag.pubads().refresh([stick_right, stick_left]);
                            console.log('%c Sticky is starting! ', 'background: red; color: #fff');
                        }
                    } else {
                        console.log('%c background is starting! ', 'background: #222; color: #bada55');

                    }
                }

                if (document.getElementById('div-gpt-ad-1552304755629-0') && slotElementId == "div-gpt-ad-1552304755629-0" && !e.isEmpty && document.getElementById('div-gpt-ad-1552304755629-0').style.display != 'none') {
                    list = document.getElementsByClassName("fullscreen_logic_container");
                    for (index = 0; index < list.length; ++index) {
                        list[index].setAttribute('fs-open', '1');
                    }

                    document.getElementById('catfish-close-btn').style.display = "block";
                    document.getElementById('catfish-close-btn').style.visibility = "visible";
                    document.getElementById('catfish-wrapper').style.display = "block";
                    document.getElementById('catfish-wrapper').style.visibility = "visible";
                    document.getElementById('div-gpt-ad-1552304755629-0').style.display = "block";
                    mc_parent_div = document.getElementById("div-gpt-ad-1552304755629-0");
                    if (typeof mc_parent_div !== "undefined") {
                        mc_iframe = mc_parent_div.getElementsByTagName("iframe")[0];
                        if (typeof mc_iframe !== "undefined") {
                            if (window.innerWidth < 321) {
                                close_position_left = mc_iframe.offsetLeft;
                            } else {
                                close_position_left = mc_iframe.offsetLeft - 10;
                            }
                            close_position_top = mc_iframe.offsetTop - 10;
                            document.getElementById('catfish-close-btn').style.left = close_position_left + "px";
                            document.getElementById('catfish-close-btn').style.top = close_position_top + "px";
                        }
                    }
                }

                var home_widgets = document.getElementsByClassName('default-widgets__home')[0];
                var constructor_projects_bootstrap_widget = document.getElementsByClassName('constructor_projects_bootstrap_widget')[0];
                if (home_widgets && !constructor_projects_bootstrap_widget) {
                    arr_premium.forEach(function (premium, i, arr) {
                        if (slotElementId == premium) {
                            if (window.innerWidth >= 768) {
                                if (!e.isEmpty) {
                                    // var count_preview_item = jQuery('#' + premium).parent().parent().children('.preview-item').length;
                                    var count_preview_item = jQuery('.default-widgets__home').find('#' + premium).parents('.preview-wrap').children('.preview-item').length;
                                    console.log(count_preview_item);
                                    console.log(e.size[1]);
                                    if (e.size[1] > '250') {
                                        if (count_preview_item == 6) {
                                            console.log(jQuery('#' + premium));
                                            jQuery('#' + premium).parent().parent().children('.preview-item').last().addClass('no-active no-active__content');
                                            jQuery('#' + premium).parent().parent().children('.preview-item').last().prev().addClass('no-active no-active__prev');
                                        } else if (count_preview_item == 5) {
                                            jQuery('#' + premium).parent().parent().children('.preview-item').last().addClass('no-active');
                                        }
                                        document.getElementById(premium).parentElement.parentElement.classList.add("preview__ads-big");
                                    } else {
                                        if (count_preview_item == 6) {
                                            jQuery('#' + premium).parent().parent().children('.preview-item').last().addClass('no-active');
                                        }
                                        document.getElementById(premium).parentElement.parentElement.classList.add("preview__ads-small");
                                    }
                                }
                            }
                        }

                    });

                    m_arr_premium.forEach(function (premium, i, arr) {
                        if (slotElementId == premium && slotElementId == 'div-gpt-ad-1493020093692-0') {
                            if (window.innerWidth >= 768) {
                                if (!e.isEmpty) {
                                    // var count_preview_item = jQuery('#' + premium).parent().parent().children('.preview-item').length;
                                    var count_preview_item = jQuery('.default-widgets__home').find('#' + premium).parents('.preview-wrap').children('.preview-item').length;
                                    console.log(count_preview_item);
                                    console.log(e.size[1]);
                                    if (e.size[1] > '250') {
                                        if (count_preview_item == 6) {
                                            jQuery('#' + premium).parent().parent().children('.preview-item').last().addClass('no-active no-active__content');
                                            jQuery('#' + premium).parent().parent().children('.preview-item').last().prev().addClass('no-active no-active__prev');
                                        } else if (count_preview_item == 5) {
                                            jQuery('#' + premium).parent().parent().children('.preview-item').last().addClass('no-active');
                                        } else jQuery('.default-widget__constructor .show-more').remove();
                                        document.getElementById(premium).parentElement.parentElement.classList.add("preview__ads-big");
                                    } else {
                                        if (count_preview_item == 6) {
                                            jQuery('#' + premium).parent().parent().children('.preview-item').last().addClass('no-active');
                                        } else jQuery('.default-widget__constructor .show-more').remove();
                                        document.getElementById(premium).parentElement.parentElement.classList.add("preview__ads-small");
                                    }
                                }
                            }
                        }

                    });
                }
                setTimeout(function () {
                    if (document.getElementById(slotElementId) && document.getElementById(slotElementId).style.display == 'none') {
                        jQuery('#' + slotElementId).parent().addClass('no-active');
                    }
                }, 1000);
                /* Catfish */

                if (document.getElementById('div-gpt-ad-1480931426542-5') && slotElementId == "div-gpt-ad-1480931426542-5" && !e.isEmpty && document.getElementById('div-gpt-ad-1480931426542-5').style.display != 'none') {
                    list = document.getElementsByClassName("fullscreen_logic_container");
                    for (index = 0; index < list.length; ++index) {
                        list[index].setAttribute('fs-open', '1');
                    }

                    document.getElementById('catfish-close-btn').style.display = "block";
                    document.getElementById('catfish-close-btn').style.visibility = "visible";
                    document.getElementById('catfish-wrapper').style.display = "block";
                    document.getElementById('catfish-wrapper').style.visibility = "visible";
                    document.getElementById('div-gpt-ad-1480931426542-5').style.display = "block";
                    mc_parent_div = document.getElementById("div-gpt-ad-1480931426542-5");
                    if (typeof mc_parent_div !== "undefined") {
                        mc_iframe = mc_parent_div.getElementsByTagName("iframe")[0];
                        if (typeof mc_iframe !== "undefined") {
                            if (window.innerWidth < 321) {
                                close_position_left = mc_iframe.offsetLeft;
                            } else {
                                close_position_left = mc_iframe.offsetLeft - 10;
                            }
                            close_position_top = mc_iframe.offsetTop - 10;
                            document.getElementById('catfish-close-btn').style.left = close_position_left + "px";
                            document.getElementById('catfish-close-btn').style.top = close_position_top + "px";
                        }
                    }
                }


                var projects_document = document.getElementsByClassName('stb-grid-projects__list')[0];
                if (projects_document) {
                    arr_premium.forEach(function (premium, i, arr) {
                        var ads_block = document.getElementById(premium).parentElement
                        if (slotElementId == premium && !e.isEmpty) {
                            if (e.size[1] > '250') {
                                ads_block.classList.add("big")
                            } else {
                                ads_block.classList.add("small")
                            }
                        } else if (slotElementId == premium && e.isEmpty) {
                            ads_block.classList.add("no-active")
                        } else {

                        }
                    });
                }

                var other_document = document.getElementsByClassName('stb-grid-other__list')[0];
                if (other_document) {
                    arr_premium.forEach(function (premium) {
                        var ads_block = document.getElementById(premium).parentElement
                        if (ads_block) {
                            if (slotElementId == premium && !e.isEmpty) {
                                if (e.size[1] > '250') {
                                    ads_block.classList.add("big")
                                    ads_block.nextElementSibling.nextElementSibling.classList.add("no-active")
                                    ads_block.nextElementSibling.classList.add("no-active")
                                } else {
                                    ads_block.classList.add("small")
                                    ads_block.nextElementSibling.classList.add("is-active")
                                    ads_block.nextElementSibling.nextElementSibling.classList.add("no-active")
                                }
                            } else if (slotElementId == premium && e.isEmpty) {
                                ads_block.classList.add("no-active")
                            } else {
                            }
                        }
                    });
                }

                /* Popup */
                if (slotElementId == "div-gpt-ad-1480929596159-4" && !e.isEmpty) {
                    list = document.getElementsByClassName("fullscreen_logic_container");
                    for (index = 0; index < list.length; ++index) {
                        list[index].setAttribute('fs-open', '1');
                    }
                }


            });


            googletag.companionAds().setRefreshUnfilledSlots(true);
            googletag.pubads().enableSingleRequest();
            googletag.pubads().enableAsyncRendering();
            googletag.pubads().collapseEmptyDivs();
            googletag.pubads().setCentering(true);
            googletag.enableServices();

        });
    </script>
    <meta name="google-site-verification" content="xKkSAME1AnKOM_MWwN31RKOc7alYKCcXynoSd3fJutM" />

    <meta property="fb:app_id" content="499063380209704" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="МастерШеф" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@TVchannelSTB" />
    <meta name="twitter:url" content="https://masterchef.stb.ua/ru/issue/master-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn/" />
    <meta name="twitter:title" content="Мастер Шеф 9 сезон. Выпуск 13 от 22.11.2019" />
    <meta name="twitter:description" content=" " />
    <meta name="twitter:image" content="https://masterchef.stb.ua/wp-content/uploads/sites/6/2019/11/22/thumb_4_1574431557.jpg" />
    <link rel="profile" href="//gmpg.org/xfn/11" />
    <link rel="shortcut icon" href="https://masterchef.stb.ua/wp-content/themes/STB_New/images/favicon.ico" type="image/x-icon" />

    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NGNC56');</script>

    <meta name="msvalidate.01" content="4A493EF6BC04C87372E1445DF2F7427D" />
    <title>Мастер Шеф 9 сезон 13 выпуск от 22 ноября 2019 - смотреть онлайн на СТБ - шоу Мастер Шеф</title>

    <meta name="description" content="Смотрите онлайн Мастер Шеф 9 сезон 13 выпуск от 22 ноября 2019. Новый выпуск Мастер Шеф 9 выпуск 13 (эфир от 22.11.2019) на сайте СТБ" />
    <meta name="keywords" content="мастер шеф,мастер шеф 9,мастер шеф 9 сезон,мастер шеф 9 выпуск 13,мастер шеф 9 сезон выпуск 13,мастер шеф 9 сезон 13 выпуск,мастер шеф 9 смотреть онлайн выпуск 13,мастер шеф смотреть онлайн выпуск 13,мастер шеф 22.11.2019,мастер шеф сезон 9,мастершеф,мастершеф 2019,мастершеф-9,Сезон 9,Сезон 9 Выпуск 13" />
    <script type="application/ld+json" class="aioseop-schema">{}</script>
    <link rel="canonical" href="https://masterchef.stb.ua/ru/issue/master-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn/" />
    <meta property="og:type" content="tv_show" />
    <meta property="og:title" content="Мастер Шеф 9 сезон 13 выпуск от 22 ноября 2019 - смотреть онлайн на СТБ - шоу Мастер Шеф" />
    <meta property="og:description" content="Смотрите онлайн Мастер Шеф 9 сезон 13 выпуск от 22 ноября 2019. Новый выпуск Мастер Шеф 9 выпуск 13 (эфир от 22.11.2019) на сайте СТБ" />
    <meta property="og:url" content="https://masterchef.stb.ua/ru/issue/master-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn/" />
    <meta property="og:site_name" content="МастерШеф " />
    <meta property="og:image" content="https://masterchef.stb.ua/wp-content/uploads/sites/6/2019/11/22/thumb_4_1574431557-1024x576.jpg" />
    <meta property="og:image:width" content="640" />
    <meta property="og:image:height" content="400" />
    <meta property="og:image:secure_url" content="https://masterchef.stb.ua/wp-content/uploads/sites/6/2019/11/22/thumb_4_1574431557-1024x576.jpg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Мастер Шеф 9 сезон 13 выпуск от 22 ноября 2019 - смотреть онлайн на СТБ - шоу Мастер Шеф" />
    <meta name="twitter:description" content="Смотрите онлайн Мастер Шеф 9 сезон 13 выпуск от 22 ноября 2019. Новый выпуск Мастер Шеф 9 выпуск 13 (эфир от 22.11.2019) на сайте СТБ" />
    <meta name="twitter:image" content="https://masterchef.stb.ua/wp-content/uploads/sites/6/2019/11/22/thumb_4_1574431557-1024x576.jpg" />

    <link rel='dns-prefetch' href='//masterchef.stb.ua' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="alternate" type="application/rss+xml" title="МастерШеф &raquo; Лента" href="https://masterchef.stb.ua/ru/feed/" />
    <link rel="alternate" type="application/rss+xml" title="МастерШеф &raquo; Лента комментариев" href="https://masterchef.stb.ua/ru/comments/feed/" />
    <script type="text/javascript">
        window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/masterchef.stb.ua\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.2.4"}};
        !function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style type="text/css">
        .mistape-test, .mistape_mistake_inner {color: #b5121b !important;}
        #mistape_dialog h2::before, #mistape_dialog .mistape_action, .mistape-letter-back {background-color: #b5121b !important; }
        #mistape_reported_text:before, #mistape_reported_text:after {border-color: #b5121b !important;}
        .mistape-letter-front .front-left {border-left-color: #b5121b !important;}
        .mistape-letter-front .front-right {border-right-color: #b5121b !important;}
        .mistape-letter-front .front-bottom, .mistape-letter-back > .mistape-letter-back-top, .mistape-letter-top {border-bottom-color: #b5121b !important;}
        .mistape-logo svg {fill: #b5121b !important;}
    </style>
    <link rel='stylesheet' id='dashicons-css' href='https://masterchef.stb.ua/wp-includes/css/dashicons.min.css?v=1570701599' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-block-library-css' href='https://masterchef.stb.ua/wp-includes/css/dist/block-library/style.min.css?v=1570701599' type='text/css' media='all' />
    <link rel='stylesheet' id='decovote-css' href='https://masterchef.stb.ua/wp-content/plugins/decovote/public/assets/css/screen.css?v=1570701598' type='text/css' media='all' />
    <link rel='stylesheet' id='VandT-vantd-fr-css-bootstrap-material-design-css' href='https://masterchef.stb.ua/wp-content/plugins/vandt/assets/css/frontend/bootstrap-material-design.min.css?v=1570701599' type='text/css' media='all' />
    <link rel='stylesheet' id='VandT-vantd-fr-css-ripples-css' href='https://masterchef.stb.ua/wp-content/plugins/vandt/assets/css/frontend/ripples.min.css?v=1570701599' type='text/css' media='all' />
    <link rel='stylesheet' id='VandT-vantd-fr-css-fonts-css' href='https://masterchef.stb.ua/wp-content/plugins/vandt/assets/css/frontend/material-icons.min.css?v=1570701599' type='text/css' media='all' />
    <link rel='stylesheet' id='VandT-vantd-fr-css-main-css' href='https://masterchef.stb.ua/wp-content/plugins/vandt/assets/css/frontend/main.min.css?v=1570701599' type='text/css' media='all' />
    <link rel='stylesheet' id='wpProQuiz_front_style-css' href='https://masterchef.stb.ua/wp-content/plugins/wp-pro-quiz/css/wpProQuiz_front.min.css?v=1570701599' type='text/css' media='all' />
    <link rel='stylesheet' id='constructor-person-widget-bootstrap-icons-css' href='https://masterchef.stb.ua/wp-content/plugins/constructor-persons-widget-bootstrap/css/style.css?v=1570701598' type='text/css' media='all' />
    <link rel='stylesheet' id='constructor_color_picker_bootstrap_icons-css' href='https://masterchef.stb.ua/wp-content/plugins/constructor_grid_widget_bootstrap/css/style.css?v=1570701598' type='text/css' media='all' />
    <link rel='stylesheet' id='mistape-front-css' href='https://masterchef.stb.ua/wp-content/plugins/mistape/assets/css/mistape-front.css?v=1570701599' type='text/css' media='all' />
    <link rel='stylesheet' id='app-css-css' href='https://masterchef.stb.ua/wp-content/themes/STB_New/assets/css/app.css?v=1570701599' type='text/css' media='all' />
    <link rel='stylesheet' id='app-css-main-css' href='https://masterchef.stb.ua/wp-content/themes/STB_New/assets/css/main.css?v=1570701599' type='text/css' media='all' />
    <link rel='stylesheet' id='amrusers-css' href='https://masterchef.stb.ua/wp-content/plugins/amr-users/css/amrusersfront.css?v=1573637563' type='text/css' media='all' />
    <script>var vandt = {"ajaxurl":"https:\/\/masterchef.stb.ua\/wp-admin\/admin-ajax.php"};</script><script>var decoMistape = {"ajaxurl":"https:\/\/masterchef.stb.ua\/wp-admin\/admin-ajax.php"};</script><script>var SliderSettings = {"pause":"5","speed":"5","slides":"0"};
        var LoaderErrors = {"size":"\u0421\u043b\u0438\u0448\u043a\u043e\u043c \u0431\u043e\u043b\u044c\u0448\u043e\u0439 \u0444\u0430\u0439\u043b. \u041c\u0430\u043a\u0441\u0438\u043c\u0430\u043b\u044c\u043d\u044b\u0439 \u0440\u0430\u0437\u043c\u0435\u0440 - 5 \u043a\u0411.","type":"\u041d\u0435\u043f\u0440\u0430\u0432\u0438\u043b\u044c\u043d\u044b\u0439 \u0442\u0438\u043f \u0444\u0430\u0439\u043b\u0430. \u0414\u043e\u043f\u0443\u0441\u0442\u0438\u043c\u044b\u0435 \u0442\u0438\u043f\u044b: '.jpg', '.jpeg' or '.png'."};
        var blogInfo = {"blogid":"6"};
        var QueryVars = {"perpage":"10"};
        var AjaxData = {"ajaxurl":"https:\/\/masterchef.stb.ua\/wp-admin\/admin-ajax.php","permalink":"https:\/\/masterchef.stb.ua\/ru\/issue\/master-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn\/","site_url":"https:\/\/masterchef.stb.ua","posts":"{\"page\":0,\"issue\":\"master-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn\",\"post_type\":\"issue\",\"name\":\"master-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn\",\"error\":\"\",\"m\":\"\",\"p\":0,\"post_parent\":\"\",\"subpost\":\"\",\"subpost_id\":\"\",\"attachment\":\"\",\"attachment_id\":0,\"pagename\":\"\",\"page_id\":0,\"second\":\"\",\"minute\":\"\",\"hour\":\"\",\"day\":0,\"monthnum\":0,\"year\":0,\"w\":0,\"category_name\":\"\",\"tag\":\"\",\"cat\":\"\",\"tag_id\":\"\",\"author\":\"\",\"author_name\":\"\",\"feed\":\"\",\"tb\":\"\",\"paged\":0,\"meta_key\":\"\",\"meta_value\":\"\",\"preview\":\"\",\"s\":\"\",\"sentence\":\"\",\"title\":\"\",\"fields\":\"\",\"menu_order\":\"\",\"embed\":\"\",\"category__in\":[],\"category__not_in\":[],\"category__and\":[],\"post__in\":[],\"post__not_in\":[],\"post_name__in\":[],\"tag__in\":[],\"tag__not_in\":[],\"tag__and\":[],\"tag_slug__in\":[],\"tag_slug__and\":[],\"post_parent__in\":[],\"post_parent__not_in\":[],\"author__in\":[],\"author__not_in\":[],\"suppress_filters\":false,\"ignore_sticky_posts\":false,\"cache_results\":false,\"update_post_term_cache\":true,\"lazy_load_term_meta\":true,\"update_post_meta_cache\":true,\"posts_per_page\":10,\"nopaging\":false,\"comments_per_page\":\"50\",\"no_found_rows\":false,\"order\":\"DESC\"}","post_id":"138160","more_btn":"\u0411\u043e\u043b\u044c\u0448\u0435","loading_btn":"Load","current_page":"1","max_page":"0"};</script><script>var stb = {"ajaxurl":"https:\/\/masterchef.stb.ua\/wp-admin\/admin-ajax.php","nonce":"11fa00cf71","post_id":"138160","lang":"ru","stb_auth":"1fff6d8f76"};</script><script type='text/javascript' src='https://masterchef.stb.ua/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-content/themes/STB_New/old/includes/js/ads.js'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-content/plugins/vandt/assets/js/frontend/bootstrap.min.js?v=1570701599'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-content/plugins/vandt/assets/js/frontend/circle-progress.js?v=1570701599'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-content/plugins/vandt/assets/js/frontend/ripples.min.js?v=1570701599'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-content/plugins/vandt/assets/js/frontend/material.min.js?v=1570701599'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-content/plugins/vandt/assets/js/frontend/main.min.js?v=1570701599'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-content/themes/STB_New/old/includes/js/fullscreen-logic.js?v=1570701599'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-content/themes/STB_New/old/includes/js/adriver.core.2.js?v=1570701599'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-includes/js/comment-reply.min.js?v=1570701599'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-includes/js/jquery/ui/datepicker.min.js?v=1570701599'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-includes/js/jquery/ui/mouse.min.js?ver=1.11.4'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-includes/js/jquery/ui/draggable.min.js?ver=1.11.4'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-includes/js/jquery/ui/droppable.min.js?ver=1.11.4'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-includes/js/plupload/moxie.min.js?ver=1.3.5'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-includes/js/plupload/plupload.min.js?ver=2.1.9'></script>
    <script type='text/javascript' src='https://masterchef.stb.ua/wp-content/themes/STB_New/old/includes/js/form-builder-shortcode.js?v=1570701599'></script>
    <link rel='https://api.w.org/' href='https://masterchef.stb.ua/ru/wp-json/' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://masterchef.stb.ua/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://masterchef.stb.ua/wp-includes/wlwmanifest.xml" />
    <link rel='prev' title='Мастер Шеф 9 сезон. Выпуск 12 от 15.11.2019' href='https://masterchef.stb.ua/ru/issue/master-shef-9-sezon-vypusk-12-ot-15-11-2019-smotret-onlayn/' />
    <meta name="generator" content="WordPress 5.2.4" />
    <link rel='shortlink' href='https://masterchef.stb.ua/ru/?p=138160' />
    <link rel="alternate" type="application/json+oembed" href="https://masterchef.stb.ua/ru/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmasterchef.stb.ua%2Fru%2Fissue%2Fmaster-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://masterchef.stb.ua/ru/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmasterchef.stb.ua%2Fru%2Fissue%2Fmaster-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn%2F&#038;format=xml" />
    <style type="text/css">
        .qtranxs_flag_ru {background-image: url(https://masterchef.stb.ua/wp-content/plugins/qtranslate-x/flags/ru.png); background-repeat: no-repeat;}
        .qtranxs_flag_ua {background-image: url(https://masterchef.stb.ua/wp-content/plugins/qtranslate-x/flags/ua.png); background-repeat: no-repeat;}
    </style>
    <link hreflang="ru" href="https://masterchef.stb.ua/ru/issue/master-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn/" rel="alternate" />
    <link hreflang="uk" href="https://masterchef.stb.ua/ua/issue/master-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn/" rel="alternate" />
    <link hreflang="x-default" href="https://masterchef.stb.ua/ru/issue/master-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn/" rel="alternate" />
    <meta name="generator" content="qTranslate-XT 3.7.1" />
    <link rel="amphtml" href="https://masterchef.stb.ua/ru/issue/master-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn/amp/" /><style type="text/css" id="custom-background-css">
        body.custom-background { background-color: #e4e4e5; }
    </style>
    <script>
        window._io_config = window._io_config || {};
        window._io_config['0.2.0'] = window._io_config['0.2.0'] || [];
        window._io_config['0.2.0'].push({"page_language":"ru","page_type":"default","page_url_canonical":"https:\/\/masterchef.stb.ua\/ua\/issue\/master-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn\/","page_title":"\u041c\u0430\u0441\u0442\u0435\u0440 \u0428\u0435\u0444 9 \u0441\u0435\u0437\u043e\u043d. \u0412\u0438\u043f\u0443\u0441\u043a 13 \u0432\u0456\u0434 22.11.2019","page_url":"https:\/\/masterchef.stb.ua\/ru\/issue\/master-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn\/","article_publication_date":"Fri, 22 Nov 2019 16:00:00 +0200"});

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id; js.async = true;
            js.src = 'https://cdn.onthe.io/io.js/pT2IkoB9CSBk';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'io-cdnjs'));
    </script>
    <script type="text/javascript" src="//service.maxymiser.net/api/eu/stb.ua/4f1bcd/mmapi.js"></script>
</head>
<body class="issue-template-default single single-issue postid-138160 custom-background">

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NGNC56"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>


<div class='shadow-box'></div>
<div class="sticky_logic_containers">
    <style>
        .example_responsive_4 { width: 160px; height: 600px; position:fixed; left:0; }
        @media(min-width: 1340px) { .example_responsive_4 { width: 160px; height: 600px;  position:fixed; left:0;}}
        @media(min-width: 1500px) { .example_responsive_4 { width: 240px; height: 600px;  position:fixed; left:0;}}
        @media(min-width: 1620px) { .example_responsive_4 { width: 300px; height: 600px;  position:fixed; left:0;}}
    </style>
    <div id='div-gpt-ad-1541676247776-0' class="example_responsive_4">
        <script>
            googletag.cmd.push(function() { googletag.display('div-gpt-ad-1541676247776-0'); });
        </script>
    </div>
    <style>
        .example_responsive_2 { width: 160px; height: 600px; position:fixed; right:0; }
        @media(min-width: 1340px) { .example_responsive_2 { width: 160px; height: 600px;  position:fixed; right:0;}}
        @media(min-width: 1500px) { .example_responsive_2 { width: 240px; height: 600px;  position:fixed; right:0;}}
        @media(min-width: 1620px) { .example_responsive_2 { width: 300px; height: 600px;  position:fixed; right:0;}}
    </style>
    <div id='div-gpt-ad-1541675824848-0' class="example_responsive_2">
        <script>
            googletag.cmd.push(function() { googletag.display('div-gpt-ad-1541675824848-0'); });
        </script>
    </div></div><div class="stb_br_box">

    <div id='div-gpt-ad-1496150538111-3' style='height:1300px; width:2000px;position:fixed;left:50%;margin-left: -1000px; top:0; z-index: 0;'>
        <script>
            googletag.cmd.push(function() { googletag.display('div-gpt-ad-1496150538111-3'); });
        </script>
    </div><div class="top_b_container" style="position: relative;z-index: 99998;"> <div class="cookie-pop closed">
            <div class="cookie-wrap">
                <div class="cookie-text">
                    <div class="cookie-text-inner">Ми використовуємо cookies, щоб проаналізувати та покращити роботу нашого сайту, персоналізувати рекламу.
                    </div>
                    <div class="cookie-text-inner cookie-text-inner_confid">
                        <div class="cookie-text-inner_wrap">
                            Продовжуючи відвідування сайту, ви надаєте згоду на використання cookies та погоджуєтесь з
                            <a href="https://masterchef.stb.ua/ru/privacy_policy/" target="_blank" id="privacyPolicy" class="cookie__link">Політикою конфіденційності.</a>
                        </div>
                    </div>
                </div>
                <a href="#" class="cookie-agree">
                    <span class="cookie-agree__text">Погоджуюсь</span>
                </a>
            </div>
        </div>
        <center>
            <div id='div-gpt-ad-1508836010642-0' style="display:none;">
                <script>
                    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1508836010642-0'); });
                </script>
            </div>
        </center></div>
    <style>
        #catfish-wrapper {
            display:none;
            left:0;
            right:0;
            bottom:0;
            margin:auto;
            position:fixed;
            bottom:0;
            z-index:100000;
            text-align:center !important;
            width: 100% !important;
            height:auto;
        }
        #catfish-wrapper div{
            width: 100% !important;
            text-align:center !important;
        }
        #catfish-wrapper iframe{
            display: inline-block !important;
            float: none !important;
        }
        #catfish-close-btn{
            margin:0;
            display:none;
            width:28px !important;
            position: absolute;
            top: 0;
            left: 0;
            height: 28px;
            background-image:url(https://s0.2mdn.net/ads/richmedia/studio/21515482/23079102_1358876393903_closebutton.png);
            background-size:100%;
            z-index: 110000;
            cursor: pointer;
        }
    </style>
    <script type='text/javascript'>
        function hideCatfishAd() {
            document.getElementById('catfish-wrapper').style.display="none";
            document.getElementById('catfish-wrapper').style.visibility="hidden";
        }
    </script>
    <div id='catfish-wrapper'>
        <div style="position: relative">
            <span id="catfish-close-btn" onclick="hideCatfishAd()"></span>

            <div id='div-gpt-ad-1480931426542-5'>
                <script>
                    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1480931426542-5'); });
                </script>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        <!--//--><![CDATA[//><!--
        var pp_gemius_identifier = 'zaA6tmLYE4pxmevJaiNfm5cgP4NgAodo.6v_E4_wHSz.n7';
        // lines below shouldn't be edited
        function gemius_pending(i) { window[i] = window[i] || function() {var x = window[i+'_pdata'] = window[i+'_pdata'] || []; x[x.length]=arguments;};};
        gemius_pending('gemius_hit'); gemius_pending('gemius_event'); gemius_pending('pp_gemius_hit'); gemius_pending('pp_gemius_event');
        (function(d,t) {try {var gt=d.createElement(t),s=d.getElementsByTagName(t)[0],l='http'+((location.protocol=='https:')?'s':''); gt.setAttribute('async','async');
            gt.setAttribute('defer','defer'); gt.src=l+'://gaua.hit.gemius.pl/xgemius.js'; s.parentNode.insertBefore(gt,s);} catch (e) {}})(document,'script');
        //--><!]]>
    </script></div>
<main class="outer-wrapp">
    <header id="header">
        <div class="grid-container">
            <div class="grid-x ">
                <div class="large-12 cell">
                    <div class="main-menu-block">
                        <div class="main-logo-wrapper">
                            <a href="https://www.stb.ua/" class="main-logo"></a>
                        </div>
                        <nav class="main-menu-wrapper">
                            <ul class="main-menu">
                                <ul class="projects-btn_mob-list">
                                    <li class="search_btn search_mob"></li>
                                    <li class="lang-switch ua-ru"><a href="https://masterchef.stb.ua/ua/issue/master-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn"></a>
                                    </li>
                                </ul>
                                <li class="projects-btn">
                                    <a class="st_nav_button_menu" href="https://www.stb.ua/projects">Проекты</a>
                                    <main class="popup-overlay">
                                        <div class="grid-container projects-popup-wrapper">
                                            <div class="projects-popup grid-padding-x">
                                                <div class="grid-x  posters-wrapper">
                                                </div>
                                            </div>
                                        </div>
                                    </main>
                                </li>
                                <li>
                                    <a class="st_nav_button_menu" href="https://www.stb.ua/tv">ТВ-программа</a>
                                </li>
                                <li><a href="https://www.stb.ua/video/" class="st_nav_button_menu" itemprop="url">Видео</a></li>
                                <li><a href="https://www.stb.ua/casting_stb/" class="st_nav_button_menu" itemprop="url">Кастинги</a></li>
                                <li><a href="https://www.stb.ua/konkursy/" class="st_nav_button_menu" itemprop="url">Конкурсы</a></li>
                            </ul>
                            <div class="menu-icon-group">
                                <ul>
                                    <li class="search_btn"></li>
                                    <li class="hide-show-menu"></li>
                                    <li class="close-search-form"></li>
                                    <li class="lang-switch ua-ru"><a href="https://masterchef.stb.ua/ua/issue/master-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn"></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <div class="hamburger"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="search" class="popup-overlay">
        <div class="grid-container">
            <div class="grid-x">
                <form action="https://masterchef.stb.ua">
                    <input type="text" name="s" placeholder="Поиск" name="search">
                    <button type="submit"></button>
                </form>
            </div>
        </div>
    </section>
    <section id="regLog" class="popup-overlay full-page">
        <div class="close">
            <button></button>
        </div>
        <div class="grid-container">
            <div class="grid-x">
                <div class="registration-form">

                    <ul class="tabs" data-tabs id="regLog-tabs">
                        <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Логин</a></li>
                        <li class="tabs-title"><a data-tabs-target="panel2" href="#panel2">Регистрация</a></li>
                    </ul>

                    <div class="tabs-content" data-tabs-content="regLog-tabs">
                        <div class="tabs-panel is-active" id="panel1">
                            <form action="login" id="stb-login-form" class="stb-auth-form">
                                <input type="hidden" id="nonce_code" name="nonce_code" value="77678a39c4" /><input type="hidden" name="_wp_http_referer" value="/ru/issue/master-shef-9-sezon-vypusk-13-ot-22-11-2019-smotret-onlayn/" /> <span class="auth__message"></span>
                                <input type="text" name="action" value="login" style="display:none">
                                <input type="email" name="email" placeholder="Email">
                                <input type="password" name="pass" placeholder="Пароль">
                                <label class="checkbox-container">
                                    Запомнить меня <input type="checkbox" name="remember">
                                    <span class="checkmark"></span>
                                </label>
                                <button type="submit">Логин</button>
                            </form>
                            <button class="password-reset">Восстановление пароля</button>
                        </div>
                        <div class="tabs-panel" id="panel2">
                            <form action="register" id="stb-register-form" class="stb-auth-form">
                                <span class="auth__message"></span>
                                <input type="text" name="action" value="register" style="display:none">
                                <input type="text" name="name" placeholder="Имя">
                                <input type="email" name="email" placeholder="Email">
                                <input type="password" name="password" placeholder="Создать пароль">
                                <input type="password" name="password-repeat" placeholder="Повторите пароль">
                                <label class="checkbox-container">
                                    Принять <a target="_blank" href="https://www.stb.ua/ru/privacy_policy/">политику конфиденциальности</a> <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <button type="submit">Регистрация</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>.grid-container.project-menu{ background: url(https://masterchef.stb.ua/wp-content/uploads/sites/6/2018/12/21/MC_bg-1.png) }</style>
    <div class="grid-container project-menu">
        <div class="grid-x ">
            <div class="large-12 cell">
                <nav>
                    <ul>
                        <li><a href="https://masterchef.stb.ua/ru">МастерШеф</a></li>
                        <li><span class="show-submenu"></span>
                            <ul id="menu-glavnoe" class=""><li><a href="https://masterchef.stb.ua/ru/video-2/" itemprop="url">Все сезоны</a></li>
                                <li><a href="https://masterchef.stb.ua/ru/uchastniki/" itemprop="url">Участники</a></li>
                                <li><a href="https://masterchef.stb.ua/ru/zhyuri/" itemprop="url">Жюри</a></li>
                                <li><a href="https://masterchef.stb.ua/ru/anketa-uchastnika/" itemprop="url">Анкета</a></li>
                            </ul> </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <section class="menu-up">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class=" video-stream">
                    <div itemprop="video" itemscope itemtype="http://schema.org/VideoObject"><h2 style="display: none;">Video: <span itemprop="name">Мастер Шеф 9 сезон. Выпуск 13 от 22.11.2019</span></h2><meta itemprop="thumbnailURL" content="https://masterchef.stb.ua/wp-content/uploads/sites/6/2019/11/22/thumb_4_1574431557-1024x576.jpg" /><meta itemprop="height" content="670" /><meta itemprop="width" content="390" /><meta itemprop="uploadDate" content="2019-11-22T18:00:00+02:00" /><meta itemprop="embedURL" content="https://player.starlight.digital/vplayer/?hash=844932a35451fce1c486c28265a9b2283f48523a8cdd7da6dbd6d07580ba5af1&referer=" /><iframe class="adaptive_16_9" width="640" height="360" src="https://player.starlight.digital/vplayer/?hash=844932a35451fce1c486c28265a9b2283f48523a8cdd7da6dbd6d07580ba5af1&referer=" allowfullscreen="allowfullscreen"></iframe><span style="display: none;" itemprop="description">Смотрите онлайн Мастер Шеф 9 сезон 13 выпуск от 22 ноября 2019. Новый выпуск Мастер Шеф 9 выпуск 13 (эфир от 22.11.2019) на сайте СТБ</span></div> </div>
            </div>
        </div>
    </section>
    <section>
        <div class="grid-container section-gray">
            <div class="grid-x video-page-about">
                <div class="medium-8 cell">
                    <ul class="breadcrumbs">
                        <li><a href="https://masterchef.stb.ua/ru" title="МастерШеф">МастерШеф</a></li><li><a href="https://masterchef.stb.ua/ru/tax_season/sezon-9/" title="Сезон 9">Сезон 9</a></li><li>Мастер Шеф 9 сезон. Выпуск 13 от 22.11.2019</li> </ul>
                    <div class="pseudo-breadcrumbs"><span>Выпуск 13</span> | <span>22.11.2019</span> | <span>Сезон 9</span></div>
                    <div style="padding: 10px 0 10px 0;">
                        <div class="center"><div id="div-gpt-ad-1532517704137-0"><script>googletag.cmd.push(function(){googletag.display('div-gpt-ad-1532517704137-0');});</script></div></div> </div>
                    <div class="about">
                        <p dir="ltr">В программе <a href="https://masterchef.stb.ua/ru/" target="_blank" rel="noopener noreferrer"><strong>Мастер Шеф</strong></a> 9 сезон 13 выпуск от 22.11.2019 осталось 10 сильнейших кулинаров-аматоров. Они уже прошли через много испытаний, но самое сложное – впереди. Сегодня они будут бороться с собственной жадностью и медлительностью, а еще испытают дружбу на прочность.</p>
                        <p dir="ltr">В первом конкурсе команды станут участниками аукциона. Им придется выставлять на продажу продукты, чтобы получить необходимые девайсы. Чей разум затуманит азарт? А кто сможет сохранить холодную голову и получить все необходимое с минимальными затратами? Узнайте прямо сейчас!</p>
                        <p dir="ltr">Многие участники Мастер Шеф 9 успели завести на проекте друзей. Но можно ли на них положиться? Покажет битва черных! Верный товарищ прикроет спину, поможет найти выход из сложной ситуации и подбодрить в трудную минуту. Кто сможет спасти своего друга от вылета из проекта? Смотрите в шоу Мастер Шеф 9 сезон 13 выпуск от 22.11.2019!</p>
                        <p dir="ltr">Смотреть онлайн <strong><a href="https://masterchef.stb.ua/ru/issue/master-shef-9-sezon-vypusk-12-ot-15-11-2019-smotret-onlayn/" target="_self" rel="noopener noreferrer">Мастер Шеф 9 сезон 12 выпуск от 15.11.2019</a></strong></p>
                        <div class="mistape_caption"><span class="mistape-link-wrap"><a href="https://mistape.com" target="_blank" rel="nofollow" class="mistape-link mistape-logo"><svg width="64" version="1.1" xmlns="http://www.w3.org/2000/svg" height="64" viewBox="0 0 64 64" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 64 64"><g><g><path d="m62.463,1.543c-1.017-1.017-2.403-1.542-3.83-1.543-1.43,0.021-2.778,0.591-3.801,1.609l-2.446,2.443c-0.01,0.012-0.015,0.025-0.024,0.035l-31.909,31.819c-0.104,0.104-0.158,0.233-0.234,0.353-0.131,0.152-0.245,0.317-0.327,0.505l-3.254,7.5c-0.324,0.75-0.169,1.62 0.397,2.211 0.392,0.41 0.927,0.631 1.476,0.631 0.241,0 0.486-0.043 0.719-0.131l7.824-2.943c0.217-0.081 0.406-0.209 0.579-0.352 0.126-0.08 0.262-0.14 0.367-0.245l32.035-31.945c0.006-0.006 0.008-0.014 0.015-0.02l2.341-2.33c2.118-2.111 2.15-5.52 0.072-7.597zm-35.905,37.576l-1.777-1.773 29.151-29.069 1.776,1.773-29.15,29.069zm32.95-32.857l-.916,.912-1.784-1.779 .911-.91c0.265-0.264 0.609-0.411 0.972-0.416 0.344-0.008 0.653,0.119 0.883,0.348 0.491,0.49 0.459,1.319-0.066,1.845z" /><path d="M58.454,22.253c-1.128,0-2.04,0.911-2.04,2.034v33.611c0,1.121-0.915,2.033-2.04,2.033H6.12    c-1.126,0-2.04-0.912-2.04-2.033V9.787c0-1.121,0.914-2.034,2.04-2.034h33.403c1.127,0,2.04-0.911,2.04-2.034    s-0.913-2.034-2.04-2.034H6.12C2.745,3.685,0,6.422,0,9.787v48.111C0,61.263,2.745,64,6.12,64h48.254    c3.374,0,6.12-2.737,6.12-6.102V24.287C60.494,23.164,59.581,22.253,58.454,22.253z" /></g></g></svg></a></span></p>
                            <p>Если вы нашли ошибку, пожалуйста, выделите фрагмент текста и нажмите <em>Ctrl+Enter</em>.</p>
                        </div>
                    </div>
                    <div class="video_content_banner">
                        <div class="top_b_container_mobile">
                            <div id='div-gpt-ad-1519210094390-2'>
                                <script>
                                    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1519210094390-2'); });
                                </script>
                            </div></div>  </div>
                </div>
                <div class="medium-4 cell sidebar-right-post">
                    <div class="adv">
                        <div id='div-gpt-ad-1472564131701-0'>
                            <script>
                                googletag.cmd.push(function() { googletag.display('div-gpt-ad-1472564131701-0'); });
                            </script>
                        </div></div><div class="adv">
                        <div id='div-gpt-ad-1472564131701-1'>
                            <script>
                                googletag.cmd.push(function() { googletag.display('div-gpt-ad-1472564131701-1'); });
                            </script>
                        </div></div><div class="adv">
                        <div id='div-gpt-ad-1499165868253-3'>
                            <script>
                                googletag.cmd.push(function() { googletag.display('div-gpt-ad-1499165868253-3'); });
                            </script>
                        </div></div> </div>
            </div>
        </div>
    </section>
    <section>
        <div class="footer__banner grid-container">
            <div style="padding: 20px 0 0 0; justify-content: center;display: flex;">
                <div id='div-gpt-ad-1474453955686-0'>
                    <script>
                        googletag.cmd.push(function() { googletag.display('div-gpt-ad-1474453955686-0'); });
                    </script>
                </div></div>
        </div>
    </section>
    <section>
        <div class="grid-container section-gray">
            <div class="grid-x">
                <div class="large-12 cell text-center endemol-license">
                    <div><p><img class="alignnone size-full wp-image-125564" src="https://masterchef.stb.ua/wp-content/uploads/sites/6/2018/12/05/endemol.png" alt="Image00001итьбю" /></p>
                        Licensor’s website <a href="https://www.endemolshinegroup.com/">www.endemolshmine.com</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
    <div class="grid-container footer-social">
        <div class="grid-x">
            <div class="large-12 cell text-center">
                <ul class="social-links">
                    <li><a target="_blank" href="https://twitter.com/TVchannelSTB" class="soc-link tw"></a></li>
                    <li><a target="_blank" href="https://t.me/stbua" class="soc-link tel"></a></li>
                    <li><a target="_blank" href="https://facebook.com/TVchannelSTB/" class="soc-link fb"></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/stbua/" class="soc-link ins"></a></li>
                    <li><a target="_blank" href="https://invite.viber.com/?g2=AQAEyTKlm%2BFr7EkXH3XqNq6Fq5YMfDXXGFuMoFZyx8P99870orQOxD5pN7G51IsF" class="soc-link vib"></a></li>
                    <li><a target="_blank" href="https://www.youtube.com/user/MasterChefUA" class="soc-link you"></a></li>
                    <li><a target="_blank" href="https://plus.google.com/+StbUa" class="soc-link gp"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="grid-container footer-content">
        <div class="grid-x">
            <div class="small-10 small-offset-1 large-10 large-offset-1 cell">
                <div class="footer-nav">
                    <nav>
                        <ul id="menu-futer"><li><a href="https://www.stb.ua/pro-kanal/" itemprop="url">СТБ: информация о телеканале</a></li>
                            <li><a href="https://www.stb.ua/reklama/" itemprop="url">Реклама</a></li>
                            <li><a href="https://www.stb.ua/rabota-na-stb/" itemprop="url">Работа на СТБ</a></li>
                            <li><a href="https://www.stb.ua/zvorotnij-zvyazok/" itemprop="url">Обратная связь</a></li>
                            <li><a href="https://www.stb.ua/useragreement/" itemprop="url">Пользовательское соглашение</a></li>
                            <li><a href="https://www.stb.ua/privacy_policy/" itemprop="url">Политика конфиденциальности</a></li>
                            <li><a href="https://www.stb.ua/set-veshhaniya/" itemprop="url">Сеть вещания</a></li>
                            <li><a href="https://www.stb.ua/struktura-vlasnosti/" itemprop="url">Структура собственности</a></li>
                        </ul> </nav>
                </div>
                <div class="grid-x ">
                    <div class="medium-6 cell footer-copyright">
                        СТБ входит в группу <a target="_blank" href="https://slm.ua/">StarLightMedia</a>, которая
                        объединяет 16 компаний.
                        Использование материалов данного сайта возможно
                        исключительно путем размещения гиперссылки
                        на перво-источник без изменения содержания.
                    </div>
                    <div class="medium-6 cell footer-copyright">
                        СТБ является участником инициативы «Чистое небо» по защите прав интеллектуальной собственности в
                        сети Интернет. Подробную информацию и контакты для переговоров по получению прав на размещение
                        видео можно найти на сайте инициативы <a href="">legalcontentua.com</a>
                    </div>
                    <div class="large-12 cell text-center footer-copyright">©
                        1997—2019 ООО «Телеканал СТБ»</div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript">
    ;!function () {
        window.NewzmateConfig = {id: 294};
        var e = document.createElement("script");
        e.setAttribute("id", "tqlucidsdksel"), e.type = "text/javascript", e.src = "//api.traq.li/public/sdk/v04/sdk.js?v=" + (localStorage && localStorage.lucidsdkver || "xxx"), e.async = !0, document.getElementsByTagName("script")[0].parentNode.appendChild(e);
    }();
</script>
<div id="wrapfabtest">
    <div class="adBanner">
    </div>
</div>
<div id="current_uname" data-current="quest_user"></div>
<div id="current_author" data-current="Dmytro Kovalchuk"></div>
<div id="current_date" data-current="18:00"></div>

<script type="text/javascript">
    function getCookie(name) {
        var matches = document.cookie.match(new RegExp(
            "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\/\+^])/g, "\$1") + "=([^;]*)"
        ));
        return matches ? decodeURIComponent(matches[1]) : undefined;
    }


    jQuery(document).ready(function() {
        if(getCookie("env") && getCookie("env") != ""){
            jQuery("#server-env").html(getCookie("env"));
            jQuery("#server-env").addClass("is-active");
        }

    })
</script>
<style>
    #server-env{
        display:none;
        position:fixed;
        right: 0;
        top: 0;
        z-index: 9;
        background: #B4D6C6;
        height: 30px;
        width: 200px;
        color: #41848F;
        text-align: center;
    }
    #server-env span{
        vertical-align:  middle;
        display: table-cell;
    }
    #server-env.is-active{
        display: table;
    }
</style><div id="server-env"><span></span></div><script type='text/javascript' src='https://masterchef.stb.ua/wp-content/plugins/decovote/public/assets/js/script.js?v=1570701598'></script>
<script type='text/javascript' src='https://masterchef.stb.ua/wp-content/plugins/decovote/public/assets/js/cookie.js?v=1570701598'></script>
<script type='text/javascript' src='https://masterchef.stb.ua/wp-content/plugins/constructor-persons-widget-bootstrap/js/constructor-person-widget-bootstrap-front-ajax-loader.js?v=1570701598'></script>
<script type='text/javascript' src='https://masterchef.stb.ua/wp-content/plugins/constructor_grid_widget_bootstrap/js/constructor-front-ajax-loader.js?v=1570701598'></script>
<script type='text/javascript' src='https://masterchef.stb.ua/wp-content/plugins/mistape/assets/js/modernizr.custom.js?v=1570701599'></script>
<script type='text/javascript' src='https://masterchef.stb.ua/wp-content/plugins/mistape/assets/js/mistape-front.js?v=1570701599'></script>
<script type='text/javascript' src='https://masterchef.stb.ua/wp-content/themes/STB_New/old/includes/js/main.js?v=1570701599'></script>
<script type='text/javascript' src='https://masterchef.stb.ua/wp-content/themes/STB_New/assets/js/what-input.min.js?v=1570701599'></script>
<script type='text/javascript' src='https://masterchef.stb.ua/wp-content/themes/STB_New/assets/js/slick.min.js?v=1570701599'></script>
<script type='text/javascript' src='https://masterchef.stb.ua/wp-content/themes/STB_New/assets/js/foundation.min.js?v=1570701599'></script>
<script type='text/javascript' src='https://masterchef.stb.ua/wp-content/themes/STB_New/assets/js/app.js?v=1573129386'></script>
<script type='text/javascript' src='https://masterchef.stb.ua/wp-content/themes/STB_New/assets/js/slick-carousel.js?v=1573203619'></script>
<script type='text/javascript' src='https://masterchef.stb.ua/wp-content/themes/STB_New/assets/js/main.js?v=1573129386'></script>
<script type='text/javascript' src='https://masterchef.stb.ua/wp-includes/js/wp-embed.min.js?ver=5.2.4'></script>
<div id="mistape_dialog" data-mode="comment" data-dry-run="0">
    <div class="dialog__overlay"></div><div class="dialog__content"><div id="mistape_confirm_dialog" class="mistape_dialog_screen">
            <div class="dialog-wrap">
                <div class="dialog-wrap-top">
                    <h2>Сообщить об опечатке</h2>
                    <div class="mistape_dialog_block">
                        <h3>Текст, который будет отправлен нашим редакторам:</h3>
                        <div id="mistape_reported_text"></div>
                    </div>
                </div>
                <div class="dialog-wrap-bottom"><div class="mistape_dialog_block comment">
                        <h3><label for="mistape_comment">Ваш комментарий (необязательно):</label></h3>
                        <textarea id="mistape_comment" cols="60" rows="3" maxlength="1000"></textarea>
                    </div><div class="pos-relative">
                    </div>
                </div>
            </div>
            <div class="mistape_dialog_block">
                <a class="mistape_action" data-action="send" data-id="138160" role="button">Отправить</a>
                <a class="mistape_action" data-dialog-close role="button" style="display:none">Отмена</a>
            </div>
            <div class="mistape-letter-front letter-part">
                <div class="front-left"></div>
                <div class="front-right"></div>
                <div class="front-bottom"></div>
            </div>
            <div class="mistape-letter-back letter-part">
                <div class="mistape-letter-back-top"></div>
            </div>
            <div class="mistape-letter-top letter-part"></div>
        </div></div></div> <script>
    jQuery(document).ready(function ($) {
        function waitAndStartAutorefresh() {
            if (globalStartAutorefresh) {
                globalStartAutorefresh();
            } else {
                setTimeout(waitAndStartAutorefresh, 200);
            }
        }
        waitAndStartAutorefresh();
    });
</script></body>
</html>
