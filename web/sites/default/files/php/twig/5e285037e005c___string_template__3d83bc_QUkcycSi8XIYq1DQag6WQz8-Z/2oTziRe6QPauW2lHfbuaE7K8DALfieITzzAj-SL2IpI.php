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

/* __string_template__3d83bc445e6937bd7d64ca5bb9024488f5cb626b80c4af090d11f457008a8f42 */
class __TwigTemplate_b1e409a70353ac05d796aa6088d79e08144a228101e821d578b84ecf973210e8 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__3d83bc445e6937bd7d64ca5bb9024488f5cb626b80c4af090d11f457008a8f42"));

        // line 1
        echo "<div class=\"col-md-6 col-lg-4 ftco-animate fadeInUp ftco-animated\">
<div class=\"blog-entry\">
              <a href=\"";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_button_link"] ?? null)), "html", null, true);
        echo "\" class=\"block-20 d-flex align-items-end\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_blog_image"] ?? null)), "html", null, true);
        echo " 
<div class=\"meta-date text-center p-2\">
                  <span class=\"day\">15</span>
                  <span class=\"mos\">Oct.</span>
                  <span class=\"yr\">2019</span>
                </div>\t\t\t\t\t\t\t
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
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__3d83bc445e6937bd7d64ca5bb9024488f5cb626b80c4af090d11f457008a8f42";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 14,  79 => 12,  75 => 11,  62 => 3,  58 => 1,);
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
<div class=\"meta-date text-center p-2\">
                  <span class=\"day\">15</span>
                  <span class=\"mos\">Oct.</span>
                  <span class=\"yr\">2019</span>
                </div>\t\t\t\t\t\t\t
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
            </div></div>", "__string_template__3d83bc445e6937bd7d64ca5bb9024488f5cb626b80c4af090d11f457008a8f42", "");
    }
}
