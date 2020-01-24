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

/* __string_template__dbeb7b5ddd2b18bc812d427ad3d4c138dd76cf546ab795396eadae4002c2396b */
class __TwigTemplate_468d262d69aca2351e4fdf48442967d9d636f9aa15b4ad221d63b977de4f3b92 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 3];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"col-md-6 col-lg-4 ftco-animate fadeInUp ftco-animated\">
<div class=\"blog-entry\">
              <a href=\"";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_button_link"] ?? null)), "html", null, true);
        echo "\" class=\"block-20 d-flex align-items-end\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_blog_image"] ?? null)), "html", null, true);
        echo " 
\t\t\t\t\t\t\t\t<div class=\"meta-date text-center p-2\">
                  <span class=\"day\">15</span>
                  <span class=\"mos\">Oct.</span>
                  <span class=\"yr\">2019</span>
                </div>
              </a>
              <div class=\"text p-4\">
                <h3 class=\"heading\"><a href=\"#\">";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo " </a></h3>
                <p>";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true);
        echo " </p>
                <div class=\"d-flex align-items-center mt-4\">
\t                <p class=\"mb-0\"><a href=\"";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_button_link"] ?? null)), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_button_"] ?? null)), "html", null, true);
        echo " <span class=\"ion-ios-arrow-round-forward\"></span></a></p>
\t                <p class=\"ml-auto mb-0\">
\t                \t<a href=\"#\" class=\"mr-2\">Admin</a>
\t                \t<a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a>
\t                </p>
                </div>
              </div>
            </div></div>";
    }

    public function getTemplateName()
    {
        return "__string_template__dbeb7b5ddd2b18bc812d427ad3d4c138dd76cf546ab795396eadae4002c2396b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 14,  76 => 12,  72 => 11,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"col-md-6 col-lg-4 ftco-animate fadeInUp ftco-animated\">
<div class=\"blog-entry\">
              <a href=\"{{ field_button_link }}\" class=\"block-20 d-flex align-items-end\">{{ field_blog_image }} 
\t\t\t\t\t\t\t\t<div class=\"meta-date text-center p-2\">
                  <span class=\"day\">15</span>
                  <span class=\"mos\">Oct.</span>
                  <span class=\"yr\">2019</span>
                </div>
              </a>
              <div class=\"text p-4\">
                <h3 class=\"heading\"><a href=\"#\">{{ title }} </a></h3>
                <p>{{ body }} </p>
                <div class=\"d-flex align-items-center mt-4\">
\t                <p class=\"mb-0\"><a href=\"{{ field_button_link }}\" class=\"btn btn-primary\">{{ field_button_ }} <span class=\"ion-ios-arrow-round-forward\"></span></a></p>
\t                <p class=\"ml-auto mb-0\">
\t                \t<a href=\"#\" class=\"mr-2\">Admin</a>
\t                \t<a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a>
\t                </p>
                </div>
              </div>
            </div></div>", "__string_template__dbeb7b5ddd2b18bc812d427ad3d4c138dd76cf546ab795396eadae4002c2396b", "");
    }
}
