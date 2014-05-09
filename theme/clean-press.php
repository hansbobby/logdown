<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript" src="//use.typekit.net/axj3cfp.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<meta charset="utf-8">
<meta name="author" content="{{blog.author_display_name}}">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href="http://cdn-theme.logdown.io/cleanpress/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css">

<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<script type='text/x-mathjax-config'>
MathJax.Hub.Config({
    "HTML-CSS": { scale: 84 },
    TeX: {
        Macros: {
            phi: '{\\varphi}',
            epsilon: '{\\varepsilon}'
            /* [Ref]: http://newsgroups.derkeiler.com/Archive/Comp/comp.text.tex/2009-08/msg00162.html
             * "\let\old@varepsilon\varepsilon" Better suggestion but need \let
             */
        }
    }
});
</script>
<script type="text/javascript">
$(document).ready(
    function() {
        (function($) {
            $(".fancybox[data-content-id]").each(function() {
                this.href = $(this).data('content-id');
            });
            $(".fancybox").fancybox({
                beforeLoad: function() {
                    var el,
                        id = $(this.element).data('title-id');

                    if (id) {
                        el = $('#' + id);

                        if (el.length) {
                            this.title = el.html();
                        }
                    }
                    if ($(this).data('content')) {
                        this.content = $(this).data('content');
                    }
                },
                    helpers: {
                        title: {
                            type: 'inside'
                        }
                    }
            });
        })(jQuery);
    }
);
</script>

<style type='text/css'>
    sup > a[rel='footnote']:before { content: '[' }
    sup > a[rel='footnote']:after  { content: ']' }
    sup > a[rel='footnote'] { margin-right: .1em; }
    img {
        -webkit-border-radius: 0 !important;
        -moz-border-radius: 0 !important;
        border-radius: 0 !important;
        -webkit-box-shadow: 0 0 2px rgba(0,0,0,0.35) !important;
        -moz-box-shadow: 0 0 2px rgba(0,0,0,0.35) !important;
        box-shadow: 0 0 2px rgba(0,0,0,0.35) !important;
    }
    #header h1 {  line-height: 1em; }
    #main-nav > ul > li > a::after { padding-left: 0 !important; }
    #main-nav > ul > li { margin-left: 0 !important; }
    #main-nav > ul > li:not(:last-of-type) { margin-right: 50px !important; }

    body { font-size: 18px; }
    h5 { font-size: 1em; }
    @media screen and (max-width: 620px) {
      h3 { font-size: 20px; }
      article h2.title { font-size: 36px; }
    }
    @media screen and (max-width: 600px) {
      body { font-size: 18px; }
      article h2.title { font-size: 24px; }
      .post .entry-content { margin: auto 40px; }
    }
    @media screen and (max-width: 480px) {
      .post .entry-content { margin: auto; }
    }
    @media screen and (max-device-width: 480px), screen and (-webkit-min-device-pixel-ratio: 2, screen and (device-width: 768px)) {
      body{ -webkit-text-size-adjust: 100%; }
    }

    span.MathJax { font-weight: 300; }
    .MathJax span[style*="font-family: STIXGeneral-Italic;"][class] {
      font-family: "Helvetica Neue", Helvetica, STIXGeneral-Italic, 'Hiragino Kaku Gothic Pro', 'Hiragino Sans GB', 'Lantinghei TC', 'Lantinghei SC' !important;
      font-style: italic;
    }
    .MathJax span[style*="font-family: STIXGeneral-Regular;"][class] {
      font-family: "Helvetica Neue", Helvetica, STIXGeneral-Regular, 'Hiragino Kaku Gothic Pro', 'Hiragino Sans GB', 'Lantinghei TC', 'Lantinghei SC' !important;
    }
    .MathJax span[style*="font-family: STIXGeneral;"][class],
    .MathJax span[style*="font-family: STIXGeneral,"] {
      font-family: "Helvetica Neue", Helvetica, STIXGeneral, 'Hiragino Kaku Gothic Pro', 'Hiragino Sans GB', 'Lantinghei TC', 'Lantinghei SC' !important;
    }
    .MathJax span[style*="font-family: MathJax_Main;"][class] {
      font-family: "Helvetica Neue", Helvetica, MathJax_Main, 'Hiragino Kaku Gothic Pro', 'Hiragino Sans GB', 'Lantinghei TC', 'Lantinghei SC' !important;
    }
    .MathJax span[style*="font-family: MathJax_Math;"][class] {
      font-family: "Helvetica Neue", Helvetica, MathJax_Math, 'Hiragino Kaku Gothic Pro', 'Hiragino Sans GB', 'Lantinghei TC', 'Lantinghei SC' !important;
    }
    .MathJax .mtext span,
    .MathJax .mspace span,
    .MathJax .mn span,
    .MathJax .mo span,
    .MathJax .mi span,
    .MathJax .ms span {
      font-size: 100% !important;
    }
    .MathJax img {
        -webkit-border-radius: 0 !important;
        -moz-border-radius: 0 !important;
        border-radius: 0 !important;
        -webkit-box-shadow: none !important;
        -moz-box-shadow: none !important;
        box-shadow: none !important;
    }
</style>
</head>

<body>
  <header id="header" class="inner">
    <hgroup>
      <h1><a href="{{blog.absolute_url}}">{{ blog.title }}</a></h1>
      <h4>{{ blog.tagline }}</h4>
    </hgroup>

    <nav id="main-nav">
      <ul>
        <li><a href="{{blog.absolute_url}}">Blog</a></li>
        <li><a href="{{ blog.archives_url }}">Archive</a></li>
        <li><a href="{{ blog.rss_url }}" target="_blank">RSS</a></li>

        {% block static_page_list %}
          {% block static_pages %}
            <li><a href="{{ static_page.absolute_url }}">{{static_page.title}}</a></li>
          {% endblock %}
        {% endblock %}

      </ul>
    </nav>

    <nav id="mobile-nav">
      <div class="alignleft menu">
        <a class="button">Menu</a>
        <div class="container">
          <ul>
            <li><a href="/">Blog</a></li>
            <li><a href="{{ blog.archives_url }}">Archive</a></li>
            <li><a href="{{ blog.rss_url }}" target="_blank">RSS</a></li>

            {% block static_page_list %}
              {% block static_pages %}
                <li><a href="{{ static_page.absolute_url }}">{{static_page.title}}</a></li>
              {% endblock %}
            {% endblock %}

          </ul>
        </div>
      </div>

      <div class="alignright search">
        <a class="button"></a>
        <div class="container">
          <form action="{{ blog.search_posts_url }}" method="get">
            <input type="text" name="q" results="0">
          </form>
        </div>
      </div>
    </nav>
  </header>

  <div id="content" class="inner">
    {% block search_page %}
      <p class="search-result-meta">
        Your search for <strong>“ {{ query_string }} ”</strong> matches <strong> {{ results_count }} </strong> results:
      </p>
    {% endblock %}

    {% block tags_page %}
      <p class="search-result-meta">
        Your posts match <strong>“ {{ tag_name }} ”</strong> tag:
      </p>
    {% endblock %}


    {% block static_page %}
      <article class="post">
        <h2 class="title"><a href="{{static_page.absolute_url}}">{{static_page.title}}</a></h2>

        <div class="entry-content">
          {{static_page.content}}
        </div>
      </article>
    {% endblock %}



    {% block posts %}
    <article class="post">
      <h2 class="title"><a href="{{post.absolute_url}}">
        {% block tags_page|index_page|show_page %}
          {{post.title}}
        {% endblock %}

        {% block search_page %}
          {{ post.title | highlight: query_string }}
        {% endblock %}
      </a></h2>

      <div class="entry-content">
        {% block search_page %}
          {{ post.content | search_content: query_string }}
        {% endblock %}

        {% block index_page|tags_page %}
          {{ post.excerpt_content }}

          {% block readmore %}
            <a href="{{post.absolute_url}}" class="more">Read on →</a>
          {% endblock %}
        {% endblock %}

        {% block show_page %}
          {{ post.content }}
        {% endblock %}
      </div>

      <div class="meta">
        <div class="date">
          <time datetime="{{post.published_at.utc}}" pubdate data-updated="true">{{post.published_at.date}}</time>
        </div>

        {% block tag_list %}
        <div class="tags">
          {% block tags %}
            <a class='category' href='{{tag.url}}'>{{tag.name}}</a>
          {% endblock %}
        </div>
        {% endblock %}
      </div>
    </article>

    <div class="share">
      {% block twitter_sharing %}
        <a href="https://twitter.com/share?" class="twitter-share-button">Tweet</a>
      {% endblock %}

      {% block google_plus_sharing %}
         <div class="g-plusone" data-size="medium"></div>
      {% endblock %}

      {% block facebook_sharing %}
        <div class="fb-like" data-href="{{post.absolute_url}}" data-layout="button_count" data-send="false" data-show-faces="false" data-width="90"></div>
      {% endblock %}
    </div>

    {% block show_page %}

      {% block disqus %}
        <section id="comment">
          <h2 class="title">Comments</h2>
          {% disqus %}
        </section>
      {% endblock %}

      <nav id="pagenavi">
        {% block next_post %}
          <a href="{{next_post_url}}" class="next"> {{next_post_title}}</a>
        {% endblock %}

        {% block previous_post %}
          <a href="{{previous_post_url}}" class="prev"> {{previous_post_title}}</a>
        {% endblock %}

        <div class="center"><a href="{{ blog.archives_url }}">Blog Archives</a></div>
      </nav>

    {% endblock %}

    {% endblock %}

    {% block archives_page|category_page %}
      {% block category_list %}
        <div class="category-dropdown">
          <div class="dropdown-toggle" role="button">
            {% block archives_page %} All Categories {% endblock %}
            {% block category_page %} Category: {{category.name}} {% endblock %}
            <i class="icon-caret-down">
          </div>

          <div class="dropdown-menu category-list" role="menu">
            <ul role="list">
              {% block categories %}
                <li class="category">
                  <a href="{{ category.url }}">{{category.name}}  ({{category.count}})</a>
                </li>
              {% endblock %}
              <li class="category">
                <a href="{{ blog.archives_url }}">All categories</a>
              </li>
            </ul>
          </div>
        </div>
      {% endblock %}

      {% block archives %}
      <section class="archives">
        <h1 class="year">2013</h1>

        {% block posts %}
        <article>
          <h2 class="title">
            <a href="{{post.absolute_url}}">{{post.title}}</a>
          </h2>
          <div class="meta">
            <span class="date">{{post.published_at}}</span>

            {% block tag_list %}
            <span class="tags">
              {% block tags %}
                <a class='category' href='{{tag.url}}'>{{tag.name}}</a>
              {% endblock %}
            </span>
            {% endblock %}
          </div>
        </article>
        {% endblock %}

      </section>
      {% endblock %}
    {% endblock %}


    {% block pagination %}
      <nav id="pagenavi">
        {% block previous_page %}
          <a href="{{previous_page_url}}" class="prev">Prev</a>
        {% endblock %}

        {% block next_page %}
          <a href="{{next_page_url}}" class="next">Next</a>
        {% endblock %}

        <div class="center">
          <a href="{{ blog.archives_url }}">Blog Archives</a>
        </div>
      </nav>
    {% endblock %}
  </div>

  <footer id="footer" class="inner">
    <!-- Social Links
    <a href="{{blog.author_twitter_link}}">Twitter</a> •
    <a href="{{blog.author_github_profile_link}}">Github</a> •
    <a href="{{blog.author_facebook_profile_link}}">Facebook</a> •
    <a href="{{blog.author_google_plus_link}}">Google+</a> •
    <a href="{{blog.author_about_me_link}}">About Me</a>
    <br>
    -->
    Copyright &copy; {{blog.author_display_name}}
    <br>
    Powered by <a href="http://logdown.com/">Logdown</a>.
  </footer>

  <script src="http://cdn-theme.logdown.io/cleanpress/javascripts/slash.js" type="text/javascript"></script>
  <script src="http://cdn-theme.logdown.io/cleanpress/javascripts/jquery.fancybox.pack.js" type="text/javascript"></script>
  <script src="http://cdn-theme.logdown.io/utils/javascripts/logdown_blog.js"></script>

<script type="text/javascript">
(function($){
    $('.fancybox').fancybox();
})(jQuery);
</script>

</body>
</html>
