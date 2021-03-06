/**
 * Colio - jQuery Portfolio Content Expander Plugin
 * http://plugins.gravitysign.com/colio
 * Copyright (c) 2013 Roman Yurchuk
 * Version 1.5
 */
!function (t, i) {
  'use strict';
  function s(s, e) {
    this.list = t(s), this.items = this.list.children(), this.settings = e, this.position = 0, this.active_id = i, this.lock = !1;
    var o = this;
    this.items.addClass('colio-item'), this.markup = t('<div class="colio"></div>'), this.markup.append('<div class="colio-container"></div>'), this.settings.navigation && (this.markup.addClass('colio-has-navigation'), t('<div class="colio-navigation"></div>').append('<a class="colio-prev" href="#">' + this.settings.prevText + '</a>').append('<a class="colio-next" href="#">' + this.settings.nextText + '</a>').appendTo(this.markup)), this.markup.append('<a class="colio-close" href="#">' + this.settings.closeText + '</a>'), 'after' === this.settings.placement ? this.list.after(this.markup) : 'inside' === this.settings.placement ? (this.markup.css({
      position: 'absolute',
      top: 0,
      left: 0
    }), t('body').append(this.markup)) : /^#\w/.test(this.settings.placement) ? (t(this.settings.placement).append(this.markup), this.settings.placement = 'element') : (this.list.before(this.markup), this.settings.placement = 'before'), this.settings.id && this.markup.attr('id', this.settings.id), this.markup.addClass('colio-placement-' + this.settings.placement), this.settings.theme && this.markup.addClass('colio-theme-' + this.settings.theme), this.items.find(this.settings.expandLink).click(function () {
      o.page_scroll = t(window).scrollTop();
      var i = t(this).closest('.colio-item');
      return o.expand(i), !1;
    }), this.markup.find('.colio-close').click(function () {
      return o.collapse(), !1;
    }), this.markup.find('.colio-prev').click(function () {
      return !o.lock && o.position > 0 && (o.position--, o.expand(o.items.eq(o.position))), !1;
    }).end().find('.colio-next').click(function () {
      return !o.lock && o.position < o.items.length - 1 && (o.position++, o.expand(o.items.eq(o.position))), !1;
    }), t(window).bind('resize orientationchange', function (t) {
      t.target === o.markup.get(0) && t.stopImmediatePropagation(), 'inside' === o.settings.placement && /^(smart)?resize$/.test(t.type) && o.insideHideViewport(), o.temp || (o.temp = [
        o.settings.syncScroll,
        o.settings.scrollPage
      ]), o.settings.syncScroll = !0, o.settings.scrollPage = !1, clearTimeout(o.resize_timer), o.resize_timer = setTimeout(function () {
        o.expandViewport(o.active_id, !0), o.settings.syncScroll = o.temp[0], o.settings.scrollPage = o.temp[1], delete o.temp;
      }, 200);
    }), this.api = {
      expand: function (t) {
        o.expand(o.items.eq(t));
      },
      collapse: function () {
        o.collapse();
      },
      excludeHidden: function () {
        o.items = o.list.children(':not(' + o.settings.hiddenItems + ')'), o.position = o.items.index(o.list.find('.colio-active-item')), 'inside' === o.settings.placement && o.insideHideViewport();
      }
    }, this.list.data('colio', this.api), this.list.bind('colio', function (t, i, s) {
      o.api.hasOwnProperty(i) && o.api[i](s);
    });
  }
  s.prototype.expand = function (t) {
    var i = t.data('content');
    if (!this.lock && i) {
      this.lock = !0, this.position = this.items.index(t), 'inside' === this.settings.placement && this.insidePositionViewport(t);
      var s = t.data('colio-content-id');
      s ? this.expandViewport(s) : this.loadContent(i, function (i) {
        t.data('colio-content-id', i), this.expandViewport(i);
      }), this.markup.find('.colio-navigation a').removeClass('colio-no-prev colio-no-next'), 0 === this.position && this.markup.find('.colio-prev').addClass('colio-no-prev'), this.position === this.items.length - 1 && this.markup.find('.colio-next').addClass('colio-no-next'), this.items.removeClass('colio-active-item'), t.addClass('colio-active-item');
    }
  }, s.prototype.loadContent = function (i, s) {
    var e = this, o = function (i) {
        if (e.settings.contentFilter) {
          var s = t('<div>').html(i);
          i = s.find(e.settings.contentFilter);
        }
        var o = 'colio_' + Math.floor(100000 * Math.random());
        return t('<div id="' + o + '" class="colio-content"></div>').append(i).appendTo(e.markup.find('.colio-container')), 'function' === typeof e.settings.onContent && e.settings.onContent.call(e.markup.get(0), e.markup.find('#' + o).get(0)), o;
      };
    if (/^#\w/.test(i)) {
      var n = t(i).html(), a = o(n);
      setTimeout(function () {
        s.call(e, a);
      }, 20);
    } else if (/(^\.{0,2}\/+\w)|(^https?:\/\/\w)/.test(i)) {
      var l = this.settings.contentFilter;
      /#\w/.test(i) && (this.settings.contentFilter = i.substr(i.indexOf('#')) + ' ' + l), this.items.eq(this.position).addClass('colio-item-loading'), t.get(i, function (t) {
        s.call(e, o(t)), e.settings.contentFilter = l, e.items.eq(e.position).removeClass('colio-item-loading');
      });
    } else {
      var a = o(i);
      setTimeout(function () {
        s.call(e, a);
      }, 20);
    }
  }, s.prototype.expandViewport = function (i, s) {
    var e = this.settings.expandDuration, o = this.settings.expandEasing, n = this.settings.syncScroll, a = this.markup.offset().top - parseInt(this.settings.scrollOffset, 10), l = this.getViewportHeight(i);
    return 0 === l || !s && i === this.active_id ? void (this.lock = !1) : ('inside' === this.settings.placement && this.insideMakeGap(this.items.eq(this.position)), this.switchContent(i), this.markup.stop().animate({ height: l }, e, o, t.proxy(function () {
      this.markup.addClass('colio-expanded'), this.scroll(a, !n), this.lock = !1, 'function' === typeof this.settings.onExpand && this.settings.onExpand.call(this.markup.get(0), i);
    }, this)), void this.scroll(a, n));
  }, s.prototype.switchContent = function (i) {
    var s = this.markup.find('#' + this.active_id), e = this.markup.find('#' + i);
    this.active_id !== i && (s.length ? s.stop().fadeOut(this.settings.contentFadeOut, t.proxy(function () {
      e.fadeIn(this.settings.contentFadeIn);
    }, this)) : e.delay(this.settings.contentDelay).fadeIn(this.settings.contentFadeIn), this.active_id = i);
  }, s.prototype.getViewportHeight = function (t) {
    var i = this.markup.find('.colio-container'), s = i.width(), e = i.outerHeight() - i.height(), o = this.markup.find('#' + t), n = 0;
    return o.is(':visible') ? n = o.height() : (o.css({
      display: 'block',
      position: 'absolute',
      visibility: 'hidden',
      width: s
    }), n = o.height(), o.css({
      display: '',
      position: '',
      visibility: '',
      width: ''
    })), n > 0 ? n + e : 0;
  }, s.prototype.scroll = function (i, s) {
    var e = this.settings.scrollDuration, o = this.settings.scrollEasing;
    this.settings.scrollPage && s && t('body, html').stop().animate({ scrollTop: i }, e, o);
  }, s.prototype.collapse = function () {
    var s = this.settings.collapseDuration, e = this.settings.collapseEasing, o = this.settings.syncScroll;
    this.position = i, this.markup.stop().animate({ height: 0 }, s, e, t.proxy(function () {
      this.markup.find('.colio-content:visible').hide(), this.items.removeClass('colio-active-item'), this.scroll(this.page_scroll, !o), 'function' === typeof this.settings.onCollapse && this.settings.onCollapse.call(this.markup.get(0), this.active_id), this.active_id = i;
    }, this)), this.markup.removeClass('colio-expanded'), 'inside' === this.settings.placement && this.insideJoinGap(), this.scroll(this.page_scroll, o);
  }, s.prototype.insideBottomItems = function (t) {
    var i = Math.round(this.list.width() / t.outerWidth(!0));
    i = Math.max(1, i);
    var s = Math.ceil(this.items.length / i), e = Math.floor(this.items.index(t) / i);
    return this.settings.beforeLastRow ? e = s - 1 > e ? e + 1 : e : e += 1, this.items.slice(e * i);
  }, s.prototype.insideMakeGap = function (s) {
    var e = this.settings.expandDuration, o = this.settings.expandEasing, n = s.data('colio-content-id'), a = this.getViewportHeight(n);
    a += parseFloat(this.markup.css('margin-bottom')), t.each(this.insideBottomItems(s), function () {
      var s = t(this).data('colio-item-top');
      s === i && (s = parseFloat(t(this).css('top')) || 0, t(this).data('colio-item-top', s)), t(this).addClass('colio-bottom-item'), t(this).stop().animate({ top: s + a }, e, o);
    });
    var l = this.list.data('colio-list-height');
    l === i && (l = this.list.height(), this.list.data('colio-list-height', l)), this.list.height(l + a);
  }, s.prototype.insideJoinGap = function (i) {
    var s = this.settings.collapseDuration, e = this.settings.collapseEasing;
    this.items.filter('.colio-bottom-item').each(function () {
      var o = t(this).data('colio-item-top') || 0;
      i ? t(this).css('top', o) : t(this).stop().animate({ top: o }, s, e), t(this).removeData('colio-item-top').removeClass('colio-bottom-item');
    });
    var o = this.list.data('colio-list-height');
    this.list.addClass('no-transition').height(o), this.list.get(0).offsetHeight, this.list.removeClass('no-transition').removeData('colio-list-height');
  }, s.prototype.insidePositionViewport = function (t) {
    var i = this.insideBottomItems(t);
    if (this.active_id) {
      var s = this.items.filter('.colio-bottom-item');
      s.length !== i.length && (this.insideHideViewport(), this.insidePositionViewport(t));
    } else {
      /absolute|relative/.test(this.items.eq(0).css('position')) === !1 && this.items.css({
        position: 'relative',
        top: 0,
        left: 0
      });
      var e = parseFloat(this.markup.css('margin-left')), o = parseFloat(this.markup.css('margin-right')), n = 0, a = this.list.offset().left + e, l = this.list.width() - (e + o);
      n = i.length > 0 ? i.offset().top : this.list.offset().top + this.list.height(), this.markup.css({
        top: n,
        left: a,
        width: l
      });
    }
  }, s.prototype.insideHideViewport = function () {
    this.active_id !== i && (this.insideJoinGap(!0), this.markup.height(0).find('.colio-content:visible').hide(), this.items.removeClass('colio-active-item'), this.markup.removeClass('colio-expanded'), 'function' === typeof this.settings.onCollapse && this.settings.onCollapse.call(this.markup.get(0), this.active_id), this.active_id = i);
  }, t.fn.colio = function (i) {
    var e = t.extend({
      id: 'colio',
      theme: '',
      placement: 'before',
      beforeLastRow: !1,
      expandLink: '.colio-link',
      expandDuration: 500,
      expandEasing: 'swing',
      collapseDuration: 300,
      collapseEasing: 'swing',
      scrollPage: !0,
      syncScroll: !1,
      scrollDuration: 300,
      scrollEasing: 'swing',
      scrollOffset: 10,
      contentFadeIn: 500,
      contentFadeOut: 200,
      contentDelay: 200,
      navigation: !0,
      closeText: '<span>Close</span>',
      nextText: '<span>Next</span>',
      prevText: '<span>Prev</span>',
      contentFilter: '',
      hiddenItems: '.hidden',
      onExpand: function () {
      },
      onCollapse: function () {
      },
      onContent: function () {
      }
    }, i);
    return this.each(function () {
      new s(this, e);
    });
  };
}(jQuery);