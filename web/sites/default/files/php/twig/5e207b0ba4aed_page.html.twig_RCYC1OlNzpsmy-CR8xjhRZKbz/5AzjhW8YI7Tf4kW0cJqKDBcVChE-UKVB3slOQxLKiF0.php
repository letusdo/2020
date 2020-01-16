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

/* themes/custom/global/templates/page.html.twig */
class __TwigTemplate_2f78db73f511189366edf2beda18943517175873ec30c8f348e1f150eafb6cd7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 5];
        $functions = ["url" => 48];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['url']
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
        echo " <div class=\"bg-top navbar-light d-flex flex-column-reverse\">
      <div class=\"container py-3\">
        <div class=\"row no-gutters d-flex align-items-center align-items-stretch\">
          <div class=\"col-md-4 d-flex align-items-center py-4\">
            ";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "brand", [])), "html", null, true);
        echo "
          </div>
          <div class=\"col-lg-8 d-block\">
            <div class=\"row d-flex\">
              <div class=\"col-md d-flex topper align-items-center align-items-stretch py-md-4\">
                <div class=\"icon d-flex justify-content-center align-items-center\"><span class=\"ion-ios-paper-plane\"></span></div>
                <div class=\"text\">
                  <span>Email</span>
                    <span>";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["global_contact_email"] ?? null)), "html", null, true);
        echo "</span>
                </div>
              </div>
              <div class=\"col-md d-flex topper align-items-center align-items-stretch py-md-4\">
                <div class=\"icon d-flex justify-content-center align-items-center\"><span class=\"ion-ios-call\"></span></div>
                <div class=\"text\">
                  <span>Call</span>
                  <span>";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["global_contact_phone"] ?? null)), "html", null, true);
        echo "</span>
                </div>
              </div>
              <div class=\"col-md d-flex topper align-items-center align-items-stretch py-md-4\">
                <div class=\"icon d-flex justify-content-center align-items-center\"><span class=\"ion-ios-time\"></span></div>
                <div class=\"text\">
                  <span>Working Hours</span>
                  <span>";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["global_open_hours"] ?? null)), "html", null, true);
        echo "</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class=\"top-social-menu py-2 bg-light\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col\">
              <p class=\"social mb-0\">
                <a href=\"";
        // line 40
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["global_facebook"] ?? null)), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"ion-logo-facebook\"></i><span class=\"sr-only\">Facebook</span></a>
                <a href=\"";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["global_twitter"] ?? null)), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"ion-logo-twitter\"></i><span class=\"sr-only\">Twitter</span></a>
                <a href=\"";
        // line 42
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["global_youtube"] ?? null)), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"ion-logo-youtube\"></i><span class=\"sr-only\">Youtube</span></a>
                <a href=\"";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["global_instagram"] ?? null)), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"ion-logo-instagram\"></i><span class=\"sr-only\">Instagram</span></a>
                <a href=\"";
        // line 44
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["global_github"] ?? null)), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"ion-logo-github\"></i><span class=\"sr-only\">Github</span></a>
              </p>
            </div>
            <div class=\"col text-right\">
              <a href=\"";
        // line 48
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "contact\" class=\"btn-link\">Request A Quote</a>
            </div>
          </div>
        </div>
      </div>
    </div>

 ";
        // line 55
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
        echo "
 <!-- END nav -->
 ";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_banner_content", [])), "html", null, true);
        echo "

    <footer class=\"ftco-footer ftco-bg-dark ftco-section\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-md-6 col-lg-4\">
            <div class=\"ftco-footer-widget mb-5\">
              <h2 class=\"ftco-heading-2\">Have a Questions?</h2>
              <div class=\"block-23 mb-3\">
                <ul>
                  <li><span class=\"icon icon-map-marker\"></span><span class=\"text\">";
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["global_address"] ?? null)), "html", null, true);
        echo "</span></li>
                  <li><a href=\"tel:";
        // line 68
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["global_contact_phone"] ?? null)), "html", null, true);
        echo "\"><span class=\"icon icon-phone\"></span><span class=\"text\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["global_contact_phone"] ?? null)), "html", null, true);
        echo "</span></a></li>
                  <li><a href=\"mailto:";
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["global_contact_email"] ?? null)), "html", null, true);
        echo "\"><span class=\"icon icon-envelope\"></span><span class=\"text\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["global_contact_email"] ?? null)), "html", null, true);
        echo "</span></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-3\">
            <div class=\"ftco-footer-widget mb-5 ml-md-4\">
              <h2 class=\"ftco-heading-2\">Links</h2>
                 ";
        // line 77
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_menu", [])), "html", null, true);
        echo "
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4\">
            <div class=\"ftco-footer-widget mb-5\">
              ";
        // line 82
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_blog", [])), "html", null, true);
        echo "
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-12 text-center\">
            ";
        // line 88
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "copyright", [])), "html", null, true);
        echo "
          </div>
        </div>
      </div>
    </footer>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/global/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 88,  190 => 82,  182 => 77,  169 => 69,  163 => 68,  159 => 67,  146 => 57,  141 => 55,  131 => 48,  124 => 44,  120 => 43,  116 => 42,  112 => 41,  108 => 40,  92 => 27,  82 => 20,  72 => 13,  61 => 5,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source(" <div class=\"bg-top navbar-light d-flex flex-column-reverse\">
      <div class=\"container py-3\">
        <div class=\"row no-gutters d-flex align-items-center align-items-stretch\">
          <div class=\"col-md-4 d-flex align-items-center py-4\">
            {{ page.brand }}
          </div>
          <div class=\"col-lg-8 d-block\">
            <div class=\"row d-flex\">
              <div class=\"col-md d-flex topper align-items-center align-items-stretch py-md-4\">
                <div class=\"icon d-flex justify-content-center align-items-center\"><span class=\"ion-ios-paper-plane\"></span></div>
                <div class=\"text\">
                  <span>Email</span>
                    <span>{{ global_contact_email }}</span>
                </div>
              </div>
              <div class=\"col-md d-flex topper align-items-center align-items-stretch py-md-4\">
                <div class=\"icon d-flex justify-content-center align-items-center\"><span class=\"ion-ios-call\"></span></div>
                <div class=\"text\">
                  <span>Call</span>
                  <span>{{ global_contact_phone }}</span>
                </div>
              </div>
              <div class=\"col-md d-flex topper align-items-center align-items-stretch py-md-4\">
                <div class=\"icon d-flex justify-content-center align-items-center\"><span class=\"ion-ios-time\"></span></div>
                <div class=\"text\">
                  <span>Working Hours</span>
                  <span>{{ global_open_hours }}</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class=\"top-social-menu py-2 bg-light\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col\">
              <p class=\"social mb-0\">
                <a href=\"{{ global_facebook }}\" target=\"_blank\"><i class=\"ion-logo-facebook\"></i><span class=\"sr-only\">Facebook</span></a>
                <a href=\"{{ global_twitter }}\" target=\"_blank\"><i class=\"ion-logo-twitter\"></i><span class=\"sr-only\">Twitter</span></a>
                <a href=\"{{ global_youtube }}\" target=\"_blank\"><i class=\"ion-logo-youtube\"></i><span class=\"sr-only\">Youtube</span></a>
                <a href=\"{{ global_instagram }}\" target=\"_blank\"><i class=\"ion-logo-instagram\"></i><span class=\"sr-only\">Instagram</span></a>
                <a href=\"{{ global_github }}\" target=\"_blank\"><i class=\"ion-logo-github\"></i><span class=\"sr-only\">Github</span></a>
              </p>
            </div>
            <div class=\"col text-right\">
              <a href=\"{{ url('<front>') }}contact\" class=\"btn-link\">Request A Quote</a>
            </div>
          </div>
        </div>
      </div>
    </div>

 {{ page.navigation }}
 <!-- END nav -->
 {{ page.top_banner_content }}

    <footer class=\"ftco-footer ftco-bg-dark ftco-section\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-md-6 col-lg-4\">
            <div class=\"ftco-footer-widget mb-5\">
              <h2 class=\"ftco-heading-2\">Have a Questions?</h2>
              <div class=\"block-23 mb-3\">
                <ul>
                  <li><span class=\"icon icon-map-marker\"></span><span class=\"text\">{{ global_address }}</span></li>
                  <li><a href=\"tel:{{ global_contact_phone }}\"><span class=\"icon icon-phone\"></span><span class=\"text\">{{ global_contact_phone }}</span></a></li>
                  <li><a href=\"mailto:{{ global_contact_email }}\"><span class=\"icon icon-envelope\"></span><span class=\"text\">{{ global_contact_email }}</span></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-3\">
            <div class=\"ftco-footer-widget mb-5 ml-md-4\">
              <h2 class=\"ftco-heading-2\">Links</h2>
                 {{ page.footer_menu }}
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4\">
            <div class=\"ftco-footer-widget mb-5\">
              {{ page.footer_blog }}
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-12 text-center\">
            {{ page.copyright }}
          </div>
        </div>
      </div>
    </footer>

", "themes/custom/global/templates/page.html.twig", "/var/www/html/2020/web/themes/custom/global/templates/page.html.twig");
    }
}
