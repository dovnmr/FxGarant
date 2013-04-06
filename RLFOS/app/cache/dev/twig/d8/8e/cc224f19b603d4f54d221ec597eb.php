<?php

/* WebProfilerBundle:Profiler:toolbar.html.twig */
class __TwigTemplate_d88ecc224f19b603d4f54d221ec597eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- START of Symfony2 Web Debug Toolbar -->
";
        // line 2
        if (("normal" != $this->getContext($context, "position"))) {
            // line 3
            echo "    <style type=\"text/css\">
        ";
            // line 4
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar.css.twig")->display(array_merge($context, array("position" => $this->getContext($context, "position"), "floatable" => true)));
            // line 5
            echo "    </style>
    <div id=\"sfMiniToolbar-";
            // line 6
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "\" class=\"sf-minitoolbar\">
        <a href=\"javascript:void(0);\" title=\"Show Symfony toolbar\" onclick=\"
            var elem = this.parentNode;
            if (elem.style.display == 'none') {
                document.getElementById('sfToolbarMainContent-";
            // line 10
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "').style.display = 'none';
                document.getElementById('sfToolbarClearer-";
            // line 11
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "').style.display = 'none';
                elem.style.display = 'block';
            } else {
                document.getElementById('sfToolbarMainContent-";
            // line 14
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "').style.display = 'block';
                document.getElementById('sfToolbarClearer-";
            // line 15
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "').style.display = 'block';
                elem.style.display = 'none'
            }

            Sfjs.setPreference('toolbar/displayState', 'block');
        \">
            <img width=\"26\" height=\"28\" alt=\"Symfony\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAMAAABIzV/hAAACZFBMVEUwLjL///////////////////////////////////////////////////////////////////+Eg4b///+Ni46Xlpj///////////+op6n///////////////////////////////////////////////////////////9ZWFv///////9qaWz///////+mpaf///////////////9ZWFv///////////////9PTVH///91dHb////////////////////g4OD///9NTE+Ih4r///////+Ni47///////92dHeRkJLk5OTLy8xlY2b///////+cm53///////+5ubr////o6Oj////////U1NT///9DQURsa22rq6ysq61hX2L///+LioxTUVVBP0NEQkZpZ2rGxsf///9ram3////s7O2SkZNfXmFxcHKmpae4uLnKysuXlpiop6l3dXiIh4pYVlmrq6ycm52trK7Nzc48Oj5dW158e36dnJ49Oz/Pz9BiYGPAv8BDQUTQz9BVU1aioaNHRUnBwcJXVVk6ODxJR0t3dnmko6U8Oj6lpKY9Oz+0tLXDwsRQTlF7en1QTlHi4eJhX2LFxcZTUVViYGNwb3J+fX83NTlFQ0dUUlW4t7icm524uLk8Oj5YVlmPjpBLSU2enZ9aWVw/PkFBP0NdW153dnk0MjZQTlE1MzdQT1JdXF9ram15eHqGhYdDQkV5eHo2NThEQkZRUFNFQ0dta244NjpGREhTUVU5NztUUlVhX2JubG9HRUlVU1ZiYGM7OTxIRkk7OT1IR0o8Oj4wLjI9Oz8YdG13AAAAynRSTlMAAAEDBAUGCgsMDQ4QEhMUGRobGx0gISIkJiYnKCktLi8wMjM0NTk6Ozw+P0NFSEpLTE5PUFBTWlteXmBiZGVmaWxtcHBxc3R0dnl5fX+BgoOGi46Pj5CRmZqanZ6eoKeoq6ytsLCwsrO0tbe5urq8vL+/wsTFx8jJycvLy8vM0NHR0tLU1NfX2NnZ2trc3N3d3eHh4uLl5ebm5ubn5+fo6urt7e3u7vDx8/Pz9PT19fX19fX29vf39/j4+fn5+vr6+vv7+/z8/f3+yR5EtwAAAbVJREFUeNpl0mVXVFEYhuF3zhkOFqMjYmCi2MUYYKGIYiJ2YCd2t4IBFqgoKjZ2jg3igI2KyO2f8sTMngGvj/te71r7wyMuk4jofZccAihcMzJKXDYnuYcVotyeYKiktV5LA0faaE7S4s7TyMsBupnMcoH/vO6gmanJaiLV1Py+Xwn5zc0fjCbSi2LI2QdkGdLyFBG+rHwMzz4BD7wyGEfFk8pfsD2TkGmyFNvFHfDj55v02VD6DcteOYylatY8oG7boA2QV4vlklzB8tU3/DIwo+dWv58guY5tRcLMtwSGdi1DkTvAn9Jqsgbu4kafRBqlV4sDFCWuIjdhMsp7yQU49rB28/QPLOu2DuWqLMfmfw6M716GskdGVRMSGDKRsEzpvZ+Qs0lFKDd94s2oArh2F7K3oNQt6ChGr5x6+Dx3J7d2E3Ygqam4PCkngRNnngYIO5cWq4lLb5t+vJ6GiifFR1nbMNqP3fSOCN8PZnQynEW5W/nmHy0PXv79eHpRSjsjtEOtWZcRc9YXlNx7VFKwceGYHjG6s0Ob3iK+X3LqlKnjkvt39rjD6w3W6BhvrCdaVw//ADrWicJIvtkmAAAAAElFTkSuQmCC\"/>
        </a>
    </div>
    <div id=\"sfToolbarClearer-";
            // line 24
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "\" style=\"clear: both; height: 38px;\"></div>
";
        }
        // line 26
        echo "
<div id=\"sfToolbarMainContent-";
        // line 27
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" class=\"sf-toolbarreset\">
    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "templates"));
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 29
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "template"), "renderblock", array(0 => "toolbar", 1 => array("collector" => $this->getAttribute($this->getContext($context, "profile"), "getcollector", array(0 => $this->getContext($context, "name")), "method"), "profiler_url" => $this->getContext($context, "profiler_url"), "token" => $this->getAttribute($this->getContext($context, "profile"), "token"), "name" => $this->getContext($context, "name"))), "method"), "html", null, true);
            // line 35
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 37
        echo "
    ";
        // line 38
        if (("normal" != $this->getContext($context, "position"))) {
            // line 39
            echo "        <a class=\"hide-button\" title=\"Close Toolbar\" onclick=\"
            var p = this.parentNode;
            p.style.display = 'none';
            (p.previousElementSibling || p.previousSibling).style.display = 'none';
            document.getElementById('sfMiniToolbar-";
            // line 43
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "').style.display = 'block';
            Sfjs.setPreference('toolbar/displayState', 'none');
        \"></a>
    ";
        }
        // line 47
        echo "</div>
<!-- END of Symfony2 Web Debug Toolbar -->
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 29,  77 => 28,  65 => 24,  348 => 322,  346 => 321,  343 => 320,  796 => 475,  793 => 474,  782 => 472,  778 => 471,  774 => 469,  761 => 468,  735 => 463,  732 => 462,  713 => 460,  696 => 459,  692 => 457,  688 => 456,  684 => 455,  680 => 454,  676 => 453,  672 => 452,  668 => 451,  665 => 450,  663 => 449,  646 => 448,  635 => 447,  620 => 442,  615 => 440,  611 => 439,  608 => 438,  606 => 437,  592 => 436,  555 => 401,  537 => 398,  520 => 397,  517 => 396,  515 => 395,  510 => 393,  505 => 391,  201 => 94,  181 => 88,  170 => 85,  160 => 81,  153 => 77,  347 => 163,  329 => 154,  320 => 149,  313 => 145,  299 => 278,  256 => 109,  232 => 93,  221 => 86,  213 => 82,  210 => 81,  205 => 78,  179 => 68,  165 => 60,  191 => 74,  178 => 87,  175 => 86,  172 => 64,  134 => 54,  118 => 49,  113 => 48,  344 => 162,  332 => 116,  321 => 112,  318 => 111,  315 => 110,  306 => 141,  300 => 105,  297 => 277,  291 => 102,  288 => 101,  274 => 97,  263 => 113,  243 => 92,  202 => 77,  161 => 58,  104 => 36,  385 => 160,  382 => 159,  376 => 158,  367 => 156,  363 => 155,  359 => 153,  357 => 152,  354 => 151,  351 => 164,  349 => 149,  339 => 161,  336 => 145,  330 => 141,  327 => 153,  324 => 113,  317 => 135,  311 => 131,  308 => 130,  303 => 106,  292 => 133,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 111,  270 => 110,  265 => 96,  261 => 105,  255 => 93,  251 => 101,  249 => 138,  244 => 97,  242 => 101,  237 => 93,  231 => 83,  228 => 88,  225 => 87,  223 => 86,  218 => 85,  212 => 78,  206 => 77,  204 => 95,  190 => 76,  185 => 74,  180 => 63,  174 => 65,  159 => 53,  148 => 46,  100 => 35,  59 => 13,  110 => 22,  102 => 43,  90 => 42,  53 => 15,  127 => 28,  97 => 23,  63 => 21,  23 => 3,  76 => 34,  58 => 25,  20 => 1,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 157,  368 => 112,  365 => 111,  362 => 110,  360 => 332,  355 => 106,  341 => 118,  337 => 160,  322 => 138,  314 => 99,  312 => 109,  309 => 108,  305 => 129,  298 => 125,  294 => 90,  285 => 129,  283 => 100,  278 => 125,  268 => 85,  264 => 84,  258 => 94,  252 => 80,  247 => 78,  241 => 77,  235 => 85,  229 => 92,  224 => 81,  220 => 70,  214 => 69,  208 => 68,  177 => 65,  169 => 60,  143 => 51,  140 => 58,  132 => 48,  128 => 49,  119 => 40,  107 => 27,  71 => 23,  38 => 6,  155 => 56,  135 => 49,  126 => 47,  114 => 42,  84 => 35,  70 => 26,  67 => 22,  61 => 15,  87 => 41,  21 => 2,  28 => 3,  31 => 4,  26 => 3,  25 => 35,  196 => 90,  183 => 82,  171 => 58,  166 => 56,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 51,  138 => 50,  136 => 71,  121 => 50,  117 => 43,  105 => 18,  91 => 37,  62 => 24,  49 => 14,  94 => 38,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 11,  24 => 3,  19 => 1,  93 => 31,  88 => 25,  78 => 18,  46 => 34,  44 => 11,  27 => 4,  79 => 29,  72 => 22,  69 => 20,  47 => 21,  40 => 8,  37 => 7,  22 => 2,  246 => 32,  157 => 56,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 44,  115 => 43,  111 => 40,  108 => 19,  101 => 31,  98 => 45,  96 => 39,  83 => 30,  74 => 27,  66 => 25,  55 => 38,  52 => 12,  50 => 18,  43 => 11,  41 => 19,  35 => 6,  32 => 6,  29 => 5,  209 => 78,  203 => 78,  199 => 76,  193 => 92,  189 => 73,  187 => 89,  182 => 66,  176 => 64,  173 => 74,  168 => 84,  164 => 59,  162 => 54,  154 => 60,  149 => 51,  147 => 75,  144 => 53,  141 => 73,  133 => 55,  130 => 39,  125 => 51,  122 => 41,  116 => 57,  112 => 36,  109 => 47,  106 => 51,  103 => 25,  99 => 30,  95 => 34,  92 => 28,  86 => 28,  82 => 19,  80 => 32,  73 => 27,  64 => 23,  60 => 16,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 9,  42 => 8,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
