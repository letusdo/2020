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

/* __string_template__706084c784544b263c4dc82718668b162de1765f196f9caf6150baf6cf2d5f46 */
class __TwigTemplate_01f85ea94cfa0b0f8b14a613c5d7c74b52f5e492d027a8e2f7b3442726de0316 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__706084c784544b263c4dc82718668b162de1765f196f9caf6150baf6cf2d5f46"));

        // line 1
        echo "   <div class=\"staff border\">
      <div class=\"img-wrap d-flex align-items-stretch\">
         <div class=\"img align-self-stretch img-responsive\">";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_feature_image"] ?? null)), "html", null, true);
        echo "</div>
      </div>
      <div class=\"text pt-3 px-3 pb-4 text-center\">
         <h3>";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</h3>
         <span class=\"position mb-2\">";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_designation"] ?? null)), "html", null, true);
        echo "</span>
         <div class=\"faded\">
            <p>";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true);
        echo "</p>
            <ul class=\"ftco-social text-center\">
               <li class=\"ftco-animate fadeInUp ftco-animated\"><a href=\"";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_twitter"] ?? null)), "html", null, true);
        echo "\" class=\"d-flex align-items-center justify-content-center\" target=\"_blank\"><span class=\"icon-twitter\"></span></a></li>
               <li class=\"ftco-animate fadeInUp ftco-animated\"><a href=\"";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_facebook"] ?? null)), "html", null, true);
        echo "\" class=\"d-flex align-items-center justify-content-center\" target=\"_blank\"><span class=\"icon-facebook\"></span></a></li>
               <li class=\"ftco-animate fadeInUp ftco-animated\"><a href=\"";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_google_plus"] ?? null)), "html", null, true);
        echo "\" class=\"d-flex align-items-center justify-content-center\" target=\"_blank\"><span class=\"icon-google-plus\"></span></a></li>
               <li class=\"ftco-animate fadeInUp ftco-animated\"><a href=\"";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_instagram"] ?? null)), "html", null, true);
        echo "\" class=\"d-flex align-items-center justify-content-center\" target=\"_blank\"><span class=\"icon-instagram\"></span></a></li>
            </ul>
         </div>
      </div>
   </div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__706084c784544b263c4dc82718668b162de1765f196f9caf6150baf6cf2d5f46";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 14,  90 => 13,  86 => 12,  82 => 11,  77 => 9,  72 => 7,  68 => 6,  62 => 3,  58 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}   <div class=\"staff border\">
      <div class=\"img-wrap d-flex align-items-stretch\">
         <div class=\"img align-self-stretch img-responsive\">{{ field_feature_image }}</div>
      </div>
      <div class=\"text pt-3 px-3 pb-4 text-center\">
         <h3>{{ title }}</h3>
         <span class=\"position mb-2\">{{ field_designation }}</span>
         <div class=\"faded\">
            <p>{{ body }}</p>
            <ul class=\"ftco-social text-center\">
               <li class=\"ftco-animate fadeInUp ftco-animated\"><a href=\"{{ field_twitter }}\" class=\"d-flex align-items-center justify-content-center\" target=\"_blank\"><span class=\"icon-twitter\"></span></a></li>
               <li class=\"ftco-animate fadeInUp ftco-animated\"><a href=\"{{ field_facebook }}\" class=\"d-flex align-items-center justify-content-center\" target=\"_blank\"><span class=\"icon-facebook\"></span></a></li>
               <li class=\"ftco-animate fadeInUp ftco-animated\"><a href=\"{{ field_google_plus }}\" class=\"d-flex align-items-center justify-content-center\" target=\"_blank\"><span class=\"icon-google-plus\"></span></a></li>
               <li class=\"ftco-animate fadeInUp ftco-animated\"><a href=\"{{ field_instagram }}\" class=\"d-flex align-items-center justify-content-center\" target=\"_blank\"><span class=\"icon-instagram\"></span></a></li>
            </ul>
         </div>
      </div>
   </div>
", "__string_template__706084c784544b263c4dc82718668b162de1765f196f9caf6150baf6cf2d5f46", "");
    }
}
