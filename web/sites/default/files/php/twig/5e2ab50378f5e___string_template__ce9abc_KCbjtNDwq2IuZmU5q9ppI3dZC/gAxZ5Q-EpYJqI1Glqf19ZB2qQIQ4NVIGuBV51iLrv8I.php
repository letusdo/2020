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

/* __string_template__ce9abca0f8c35370781f3f37d158c560102b43300c1e777c67f826d616c74307 */
class __TwigTemplate_a642c3837d9fbe1fb60d0b9868db403897cafd9f517547132beabb39220c9ffd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 2];
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__ce9abca0f8c35370781f3f37d158c560102b43300c1e777c67f826d616c74307"));

        // line 1
        echo "<div class=\"services-2 border rounded text-center ftco-animate fadeInUp ftco-animated\">
\t\t\t\t\t\t\t<div class=\"icon mt-2 d-flex justify-content-center align-items-center\"><span class=\"";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_icons"] ?? null)), "html", null, true);
        echo "\"></span></div>
\t\t\t\t\t\t\t<div class=\"text media-body\">
\t\t\t\t\t\t\t\t<h3>";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t\t<p>";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__ce9abca0f8c35370781f3f37d158c560102b43300c1e777c67f826d616c74307";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 5,  66 => 4,  61 => 2,  58 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"services-2 border rounded text-center ftco-animate fadeInUp ftco-animated\">
\t\t\t\t\t\t\t<div class=\"icon mt-2 d-flex justify-content-center align-items-center\"><span class=\"{{ field_icons }}\"></span></div>
\t\t\t\t\t\t\t<div class=\"text media-body\">
\t\t\t\t\t\t\t\t<h3>{{ title }}</h3>
\t\t\t\t\t\t\t\t<p>{{ body }}</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>", "__string_template__ce9abca0f8c35370781f3f37d158c560102b43300c1e777c67f826d616c74307", "");
    }
}
