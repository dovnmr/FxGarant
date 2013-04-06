<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_2212d1c055e34a17ef4b8f09495d7a72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\"/>
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 163,  329 => 154,  320 => 149,  313 => 145,  299 => 137,  256 => 109,  232 => 93,  221 => 86,  213 => 82,  210 => 81,  205 => 78,  179 => 68,  165 => 60,  191 => 74,  178 => 66,  175 => 65,  172 => 64,  134 => 54,  118 => 49,  113 => 48,  344 => 162,  332 => 116,  321 => 112,  318 => 111,  315 => 110,  306 => 141,  300 => 105,  297 => 104,  291 => 102,  288 => 101,  274 => 97,  263 => 113,  243 => 92,  202 => 77,  161 => 58,  104 => 36,  385 => 160,  382 => 159,  376 => 158,  367 => 156,  363 => 155,  359 => 153,  357 => 152,  354 => 151,  351 => 164,  349 => 149,  339 => 161,  336 => 145,  330 => 141,  327 => 153,  324 => 113,  317 => 135,  311 => 131,  308 => 130,  303 => 106,  292 => 133,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 111,  270 => 110,  265 => 96,  261 => 105,  255 => 93,  251 => 101,  249 => 105,  244 => 97,  242 => 101,  237 => 93,  231 => 83,  228 => 88,  225 => 87,  223 => 86,  218 => 85,  212 => 78,  206 => 77,  204 => 76,  190 => 76,  185 => 74,  180 => 63,  174 => 65,  159 => 53,  148 => 46,  100 => 35,  59 => 13,  110 => 22,  102 => 40,  90 => 32,  53 => 11,  127 => 28,  97 => 23,  63 => 18,  23 => 3,  76 => 31,  58 => 14,  20 => 1,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 157,  368 => 112,  365 => 111,  362 => 110,  360 => 167,  355 => 106,  341 => 118,  337 => 160,  322 => 138,  314 => 99,  312 => 109,  309 => 108,  305 => 129,  298 => 125,  294 => 90,  285 => 129,  283 => 100,  278 => 125,  268 => 85,  264 => 84,  258 => 94,  252 => 80,  247 => 78,  241 => 77,  235 => 85,  229 => 92,  224 => 81,  220 => 70,  214 => 69,  208 => 68,  177 => 65,  169 => 60,  143 => 51,  140 => 58,  132 => 48,  128 => 49,  119 => 40,  107 => 27,  71 => 19,  38 => 7,  155 => 56,  135 => 49,  126 => 47,  114 => 42,  84 => 29,  70 => 15,  67 => 24,  61 => 15,  87 => 34,  21 => 2,  28 => 3,  31 => 4,  26 => 9,  25 => 35,  196 => 90,  183 => 82,  171 => 58,  166 => 56,  163 => 70,  158 => 57,  156 => 62,  151 => 59,  142 => 51,  138 => 50,  136 => 48,  121 => 50,  117 => 43,  105 => 18,  91 => 33,  62 => 19,  49 => 14,  94 => 34,  89 => 29,  85 => 24,  75 => 23,  68 => 14,  56 => 11,  24 => 6,  19 => 1,  93 => 31,  88 => 25,  78 => 26,  46 => 13,  44 => 10,  27 => 3,  79 => 21,  72 => 22,  69 => 20,  47 => 11,  40 => 6,  37 => 5,  22 => 2,  246 => 32,  157 => 56,  145 => 52,  139 => 49,  131 => 45,  123 => 45,  120 => 44,  115 => 43,  111 => 40,  108 => 19,  101 => 31,  98 => 30,  96 => 37,  83 => 27,  74 => 27,  66 => 19,  55 => 16,  52 => 12,  50 => 8,  43 => 12,  41 => 8,  35 => 5,  32 => 5,  29 => 3,  209 => 78,  203 => 78,  199 => 76,  193 => 69,  189 => 73,  187 => 75,  182 => 66,  176 => 64,  173 => 74,  168 => 57,  164 => 59,  162 => 54,  154 => 60,  149 => 51,  147 => 53,  144 => 53,  141 => 51,  133 => 55,  130 => 39,  125 => 51,  122 => 41,  116 => 31,  112 => 36,  109 => 35,  106 => 45,  103 => 25,  99 => 30,  95 => 34,  92 => 27,  86 => 28,  82 => 19,  80 => 32,  73 => 16,  64 => 23,  60 => 16,  57 => 16,  54 => 13,  51 => 13,  48 => 11,  45 => 9,  42 => 8,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
