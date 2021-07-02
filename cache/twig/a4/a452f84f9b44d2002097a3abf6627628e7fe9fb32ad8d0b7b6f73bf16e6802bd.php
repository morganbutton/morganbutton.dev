<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* media-list-content.html.twig */
class __TwigTemplate_e7c2036b6d416e411f9e77d6f85902d38fe3db9c0ffa4aa312df8bdde8a2ac98 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["index"] = $this->getAttribute(($context["uri"] ?? null), "param", [0 => "index"], "method");
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? null), "files", [0 => true, 1 => ($context["index"] ?? null)], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 4
            echo "    ";
            $context["the_file"] = $this->getAttribute($context["file"], "file", []);
            // line 5
            echo "
    ";
            // line 6
            if (($this->getAttribute(($context["the_file"] ?? null), "exists", []) &&  !twig_test_empty($this->getAttribute(($context["the_file"] ?? null), "display", [], "method")))) {
                // line 7
                echo "    <div class=\"card-item\">
        <div class=\"admin-media-details\">
            <a href=\"";
                // line 9
                if (($context["is_modal"] ?? null)) {
                    echo "#";
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(("/media-manager/" . $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->base64EncodeFilter($this->getAttribute(($context["the_file"] ?? null), "filepath", [])))), "html", null, true);
                }
                echo "\" class=\"js__media-element\" data-file-url=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["file"], "page_route", []) . "/") . $this->getAttribute($context["file"], "title", [])), "html", null, true);
                echo "\">
                ";
                // line 10
                $context["thumbnail"] = $this->getAttribute(($context["the_file"] ?? null), "display", [0 => ((($this->getAttribute(($context["the_file"] ?? null), "extension", []) == "svg")) ? ("source") : ("thumbnail"))], "method");
                // line 11
                echo "                ";
                if (($context["thumbnail"] ?? null)) {
                    // line 12
                    echo "                <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["thumbnail"] ?? null), "cropZoom", [0 => 250, 1 => 250], "method"), "url", []), "html", null, true);
                    echo "\" />
                <h4 class=\"admin-media-title\">";
                    // line 13
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "title", []), "html", null, true);
                    echo "</h4>
                ";
                }
                // line 15
                echo "            </a>
        </div>
    </div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "media-list-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 15,  71 => 13,  66 => 12,  63 => 11,  61 => 10,  51 => 9,  47 => 7,  45 => 6,  42 => 5,  39 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set index = uri.param('index') %}

{% for file in admin.files(true, index) %}
    {% set the_file = file.file %}

    {% if the_file.exists and the_file.display() is not empty %}
    <div class=\"card-item\">
        <div class=\"admin-media-details\">
            <a href=\"{% if is_modal %}#{% else %}{{ admin_route('/media-manager/' ~ the_file.filepath|base64_encode) }}{% endif %}\" class=\"js__media-element\" data-file-url=\"{{ file.page_route ~ '/' ~ file.title }}\">
                {% set thumbnail = the_file.display(the_file.extension == 'svg' ? 'source' : 'thumbnail') %}
                {% if thumbnail %}
                <img src=\"{{thumbnail.cropZoom(250, 250).url}}\" />
                <h4 class=\"admin-media-title\">{{ file.title }}</h4>
                {% endif %}
            </a>
        </div>
    </div>
    {% endif %}
{% endfor %}
", "media-list-content.html.twig", "C:\\wamp64\\www\\moDev\\user\\plugins\\admin\\themes\\grav\\templates\\media-list-content.html.twig");
    }
}
