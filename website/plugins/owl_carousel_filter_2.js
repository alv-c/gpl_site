// !function(o,e){"object"==typeof exports?module.exports=e(o.jQuery):o.owlcarousel2_filter=e(o.jQuery)}(window,function(o,e){"use strict";o.fn.owlcarousel2_filter=function(o,e){var t=this.data("owl.carousel").options;this.trigger("destroy.owl.carousel"),this.oc2_filter_clone||(this.oc2_filter_clone=this.clone());var l=this.oc2_filter_clone.children(o).clone();this.empty().append(l).owlCarousel(t)}});

!function (o, e) {
    "object" == typeof exports ? module.exports = e(o.jQuery) : o.owlcarousel2_filter = e(o.jQuery)
}(window, function (o, e) {
    "use strict";
    o.fn.owlcarousel2_filter = function (array_filter, e) {
        var t = this.data("owl.carousel").options;
        this.trigger("destroy.owl.carousel"), this.oc2_filter_clone || (this.oc2_filter_clone = this.clone());
        let l;
        if (array_filter[1] != null) {
            l = this.oc2_filter_clone.children(array_filter[0]).filter(array_filter[1]).clone();
        } else {
            l = this.oc2_filter_clone.children(array_filter[0]).clone();
        }
        this.empty().append(l).owlCarousel(t);
    }
});