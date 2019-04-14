(function (w, d, s, l, i) {
w[l] = w[l] || []; w[l].push({
    'gtm.start':
        new Date().getTime(), event: 'gtm.js'
}); var f = d.getElementsByTagName(s)[0],
    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-K4TZPHD');


$(document).ready(function () {
    $('form.VUS').submit(function (e) {
        var obj = {};
        //$( "#" + e.target.id + " [class*='o2o-']").each(function (index, value) {
        $(e.target).find("[class*='o2o-']").each(function (index, value) {
            var name = geto2oname(value.classList);
            if ($(value).is('select') == true) {
                obj[name] = $(value).val();
                obj[name + '_text'] = $(value).find('option:selected').text();
            }
            else {
                obj[name] = $(value).val();
            }
        });
        obj.tid = dataLayer[0].trackingId;
        obj.cid = getcid();
        obj.url = window.location.href;
        $.post(dataLayer[0].hostName + "/api/GTMFormSubmit", obj, function (data) {
        });
        //e.preventDefault();
        //return false;
    });
})
function geto2oname(arr) {
    try {
        if (arr.length > 0) {
            for (var i = 0; i < arr.length; i++) {
                if (arr[i].indexOf('o2o') > -1) {
                    return arr[i].split('-')[1];
                }
            }
        }
    }
    catch {

    }
    return '';
}
function getcid() {
    try {
        var trackers = ga.getAll();
        var i, len;
        for (i = 0, len = trackers.length; i < len; i += 1) {
            if (trackers[i].get('trackingId') === dataLayer[0].trackingId) {
                return trackers[i].get('clientId');
            }
        }
    } catch (e) { }
    return 'false';
}