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

/* themes/custom/global/templates/content/inner-pages/node--blogs--full.html.twig */
class __TwigTemplate_59a4808971b1a694093ea854b7f8722fc8ecea7b9773f18cd8f311392951de7e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 74];
        $functions = ["file_url" => 74];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['file_url']
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/global/templates/content/inner-pages/node--blogs--full.html.twig"));

        // line 73
        echo "
<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        // line 74
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_banner_image", []), "entity", []), "fileuri", []))]), "html", null, true);
        echo "');\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
      <div class=\"col-md-9 ftco-animate text-center\">
        <h1 class=\"mb-2 bread\">Blog</h1>
        <h5 class=\"bread mb-20\">";
        // line 80
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
        echo "</h5>
        <p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"..\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span> <span class=\"mr-2\"><a href=\"";
        // line 81
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo "\">Blog <i class=\"ion-ios-arrow-forward\"></i></a></span></p>
      </div>
    </div>
  </div>
</section>

<section class=\"ftco-section\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 ftco-animate fadeInUp ftco-animated\">
        <div class=\"img-responsive\">";
        // line 91
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_blog_image", [])), "html", null, true);
        echo "</div>
        <h2 class=\"mt-20 mb-10\">";
        // line 92
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
        echo "</h2>
        ";
        // line 93
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
        echo "
      </div>
      <div class=\"col-lg-4 sidebar ftco-animate fadeInUp ftco-animated\">
        <div class=\"sidebar-box ftco-animate fadeInUp ftco-animated\">
          <h3>Category</h3>
          <ul class=\"categories\">
            <li><a href=\"#\">Business <span>(6)</span></a></li>
            <li><a href=\"#\">Finance <span>(8)</span></a></li>
            <li><a href=\"#\">Auto loan <span>(2)</span></a></li>
            <li><a href=\"#\">Real Estate <span>(2)</span></a></li>
            <li><a href=\"#\">Businessman <span>(2)</span></a></li>
          </ul>
        </div>
        <div class=\"sidebar-box ftco-animate fadeInUp ftco-animated\">
          <h3>Popular Articles</h3>
          <div class=\"block-21 mb-4 d-flex\">
            <a class=\"blog-img mr-4\" style=\"background-image: url(images/image_1.jpg);\"></a>
            <div class=\"text\">
              <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              <div class=\"meta\">
                <div><a href=\"#\"><span class=\"icon-calendar\"></span> Oct. 15, 2019</a></div>
                <div><a href=\"#\"><span class=\"icon-person\"></span> Dave Lewis</a></div>
                <div><a href=\"#\"><span class=\"icon-chat\"></span> 19</a></div>
              </div>
            </div>
          </div>
          <div class=\"block-21 mb-4 d-flex\">
            <a class=\"blog-img mr-4\" style=\"background-image: url(images/image_2.jpg);\"></a>
            <div class=\"text\">
              <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              <div class=\"meta\">
                <div><a href=\"#\"><span class=\"icon-calendar\"></span> Oct. 15, 2019</a></div>
                <div><a href=\"#\"><span class=\"icon-person\"></span> Dave Lewis</a></div>
                <div><a href=\"#\"><span class=\"icon-chat\"></span> 19</a></div>
              </div>
            </div>
          </div>
          <div class=\"block-21 mb-4 d-flex\">
            <a class=\"blog-img mr-4\" style=\"background-image: url(images/image_3.jpg);\"></a>
            <div class=\"text\">
              <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              <div class=\"meta\">
                <div><a href=\"#\"><span class=\"icon-calendar\"></span> Oct. 15, 2019</a></div>
                <div><a href=\"#\"><span class=\"icon-person\"></span> Dave Lewis</a></div>
                <div><a href=\"#\"><span class=\"icon-chat\"></span> 19</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
</section>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/global/templates/content/inner-pages/node--blogs--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 93,  91 => 92,  87 => 91,  74 => 81,  70 => 80,  61 => 74,  58 => 73,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/global/templates/content/inner-pages/node--blogs--full.html.twig", "/var/www/html/demos/2020/web/themes/custom/global/templates/content/inner-pages/node--blogs--full.html.twig");
    }
}
