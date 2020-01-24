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

/* themes/custom/global/templates/content/node--projects--full.html.twig */
class __TwigTemplate_44b5869f40c2291c00f3a76345623e898ec6c602409f121b7fa55a6f0e72e156 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 73];
        $functions = ["file_url" => 73];

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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/global/templates/content/node--projects--full.html.twig"));

        // line 73
        echo "<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_background_image", []), "entity", []), "fileuri", []))]), "html", null, true);
        echo "');\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
      <div class=\"col-md-9 ftco-animate text-center fadeInUp ftco-animated\">
        <h1 class=\"mb-2 bread\">Projects</h1>
        <h5 class=\"bread mb-20\">";
        // line 79
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
        echo "</h5>
        <p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"./\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span> <span><a href=\"";
        // line 80
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo "\">Projects <i class=\"ion-ios-arrow-forward\"></i></a></span></p>
      </div>
    </div>
  </div>
</section>
<section class=\"ftco-section\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 ftco-animate fadeInUp ftco-animated\">
        <div class=\"img-responsive\">";
        // line 89
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_project_image", [])), "html", null, true);
        echo "</div>
        <h2 class=\"mt-20 mb-10\">";
        // line 90
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
        echo "</h2>
        ";
        // line 91
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
        echo "
      </div>
      <div class=\"col-lg-4 sidebar ftco-animate fadeInUp ftco-animated\">
        <div class=\"sidebar-box ftco-animate fadeInUp ftco-animated\">
          ";
        // line 95
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar", [])), "html", null, true);
        echo "
          <h3>Category</h3>
          <ul class=\"categories\">
            <li><a href=\"#\">Business <span>(6)</span></a></li>
            <li><a href=\"#\">Finance <span>(8)</span></a></li>
            <li><a href=\"#\">Auto loan <span>(2)</span></a></li>
            <li><a href=\"#\">Real Estate <span>(2)</span></a></li>
            <li><a href=\"#\">Businessman <span>(2)</span></a></li>
          </ul>
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
        return "themes/custom/global/templates/content/node--projects--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 95,  92 => 91,  88 => 90,  84 => 89,  72 => 80,  68 => 79,  58 => 73,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 *
 * @todo Remove the id attribute (or make it a class), because if that gets
 *   rendered twice on a page this is invalid CSS for example: two lists
 *   in different view modes.
 */
#}
<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ file_url(node.field_background_image.entity.fileuri) }}');\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
      <div class=\"col-md-9 ftco-animate text-center fadeInUp ftco-animated\">
        <h1 class=\"mb-2 bread\">Projects</h1>
        <h5 class=\"bread mb-20\">{{ label }}</h5>
        <p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"./\">Home <i class=\"ion-ios-arrow-forward\"></i></a></span> <span><a href=\"{{ base_path }}\">Projects <i class=\"ion-ios-arrow-forward\"></i></a></span></p>
      </div>
    </div>
  </div>
</section>
<section class=\"ftco-section\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 ftco-animate fadeInUp ftco-animated\">
        <div class=\"img-responsive\">{{ content.field_project_image }}</div>
        <h2 class=\"mt-20 mb-10\">{{ label }}</h2>
        {{ content.body }}
      </div>
      <div class=\"col-lg-4 sidebar ftco-animate fadeInUp ftco-animated\">
        <div class=\"sidebar-box ftco-animate fadeInUp ftco-animated\">
          {{ page.sidebar }}
          <h3>Category</h3>
          <ul class=\"categories\">
            <li><a href=\"#\">Business <span>(6)</span></a></li>
            <li><a href=\"#\">Finance <span>(8)</span></a></li>
            <li><a href=\"#\">Auto loan <span>(2)</span></a></li>
            <li><a href=\"#\">Real Estate <span>(2)</span></a></li>
            <li><a href=\"#\">Businessman <span>(2)</span></a></li>
          </ul>
        </div>
      </div>
    </div>


  </div>
</section>

", "themes/custom/global/templates/content/node--projects--full.html.twig", "/var/www/html/test/2020/web/themes/custom/global/templates/content/node--projects--full.html.twig");
    }
}
