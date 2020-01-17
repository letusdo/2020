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

/* themes/custom/global/templates/static_html/page--node--26.html.twig */
class __TwigTemplate_23f5c6f533c6441b8bb1ca0cab3a3cb782e41d5ab8b7facb059091b7395ae8cd extends \Twig\Template
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
        echo "<div class=\"bg-top navbar-light d-flex flex-column-reverse\">
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
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo "/contact\" class=\"btn-link\">Request A Quote</a>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 54
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
        echo "
<!-- END nav -->
<div class=\"header-class\"></div>

<section class=\"ftco-section ftco-no-pt\">
      <div class=\"container\">
        <div class=\"row justify-content-center mb-5\">
          <div class=\"col-md-8 text-center heading-section ftco-animate fadeInUp ftco-animated\">
            <span class=\"subheading\">Services</span>
            <h2 class=\"mb-4\">Why Choose Us?</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
        <div class=\"row tabulation mt-4 ftco-animate fadeInUp ftco-animated\">
          <div class=\"col-md-4\">
            <ul class=\"nav nav-pills nav-fill d-md-flex d-block flex-column\">
              <li class=\"nav-item text-left\">
                <a class=\"nav-link active py-4\" data-toggle=\"tab\" href=\"#services-1\"><span class=\"flaticon-analysis mr-2\"></span> Business Analysis</a>
              </li>
              <li class=\"nav-item text-left\">
                <a class=\"nav-link py-4\" data-toggle=\"tab\" href=\"#services-2\"><span class=\"flaticon-business mr-2\"></span> Business Consulting</a>
              </li>
              <li class=\"nav-item text-left\">
                <a class=\"nav-link py-4\" data-toggle=\"tab\" href=\"#services-3\"><span class=\"flaticon-insurance mr-2\"></span> Business Insurance</a>
              </li>
              <li class=\"nav-item text-left\">
                <a class=\"nav-link py-4\" data-toggle=\"tab\" href=\"#services-4\"><span class=\"flaticon-money mr-2\"></span> Global Investigation</a>
              </li>
              <li class=\"nav-item text-left\">
                <a class=\"nav-link py-4\" data-toggle=\"tab\" href=\"#services-5\"><span class=\"flaticon-rating mr-2\"></span> Audit &amp; Evaluation</a>
              </li>
              <li class=\"nav-item text-left\">
                <a class=\"nav-link py-4\" data-toggle=\"tab\" href=\"#services-6\"><span class=\"flaticon-search-engine mr-2\"></span> Marketing Strategy</a>
              </li>
            </ul>
          </div>
          <div class=\"col-md-8\">
            <div class=\"tab-content\">
              <div class=\"tab-pane container p-0 active\" id=\"services-1\">
                <div class=\"img\" style=\"background-image: url(images/project-2.jpg);\"></div>
                <h3><a href=\"#\">Business Analysis</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
              <div class=\"tab-pane container p-0 fade\" id=\"services-2\">
                <div class=\"img\" style=\"background-image: url(images/project-3.jpg);\"></div>
                <h3><a href=\"#\">Business Consulting</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
              <div class=\"tab-pane container p-0 fade\" id=\"services-3\">
                <div class=\"img\" style=\"background-image: url(images/project-4.jpg);\"></div>
                <h3><a href=\"#\">Business Insurance</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
              <div class=\"tab-pane container p-0 fade\" id=\"services-4\">
                <div class=\"img\" style=\"background-image: url(images/project-5.jpg);\"></div>
                <h3><a href=\"#\">Global Investigation</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
              <div class=\"tab-pane container p-0 fade\" id=\"services-5\">
                <div class=\"img\" style=\"background-image: url(images/project-6.jpg);\"></div>
                <h3><a href=\"#\">Audit &amp; Evaluation</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
              <div class=\"tab-pane container p-0 fade\" id=\"services-6\">
                <div class=\"img\" style=\"background-image: url(images/project-1.jpg);\"></div>
                <h3><a href=\"#\">Marketing Strategy</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


<footer class=\"ftco-footer ftco-bg-dark ftco-section\">
  <div class=\"container\">
    <div class=\"row mb-5\">
      <div class=\"col-md-6 col-lg-4\">
        <div class=\"ftco-footer-widget mb-5\">
          <h2 class=\"ftco-heading-2\">Have a Questions?</h2>
          <div class=\"block-23 mb-3\">
            <ul>
              <li><span class=\"icon icon-map-marker\"></span><span class=\"text\">";
        // line 137
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["global_address"] ?? null)), "html", null, true);
        echo "</span></li>
              <li><a href=\"tel:";
        // line 138
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["global_contact_phone"] ?? null)), "html", null, true);
        echo "\"><span class=\"icon icon-phone\"></span><span class=\"text\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["global_contact_phone"] ?? null)), "html", null, true);
        echo "</span></a></li>
              <li><a href=\"mailto:";
        // line 139
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
        // line 147
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_menu", [])), "html", null, true);
        echo "
        </div>
      </div>
      <div class=\"col-md-6 col-lg-4\">
        <div class=\"ftco-footer-widget mb-5\">
          ";
        // line 152
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_blog", [])), "html", null, true);
        echo "
        </div>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-md-12 text-center\">
        ";
        // line 158
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
        return "themes/custom/global/templates/static_html/page--node--26.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 158,  257 => 152,  249 => 147,  236 => 139,  230 => 138,  226 => 137,  140 => 54,  131 => 48,  124 => 44,  120 => 43,  116 => 42,  112 => 41,  108 => 40,  92 => 27,  82 => 20,  72 => 13,  61 => 5,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"bg-top navbar-light d-flex flex-column-reverse\">
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
          <a href=\"{{ base_path }}/contact\" class=\"btn-link\">Request A Quote</a>
        </div>
      </div>
    </div>
  </div>
</div>
{{ page.navigation }}
<!-- END nav -->
<div class=\"header-class\"></div>

<section class=\"ftco-section ftco-no-pt\">
      <div class=\"container\">
        <div class=\"row justify-content-center mb-5\">
          <div class=\"col-md-8 text-center heading-section ftco-animate fadeInUp ftco-animated\">
            <span class=\"subheading\">Services</span>
            <h2 class=\"mb-4\">Why Choose Us?</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
        <div class=\"row tabulation mt-4 ftco-animate fadeInUp ftco-animated\">
          <div class=\"col-md-4\">
            <ul class=\"nav nav-pills nav-fill d-md-flex d-block flex-column\">
              <li class=\"nav-item text-left\">
                <a class=\"nav-link active py-4\" data-toggle=\"tab\" href=\"#services-1\"><span class=\"flaticon-analysis mr-2\"></span> Business Analysis</a>
              </li>
              <li class=\"nav-item text-left\">
                <a class=\"nav-link py-4\" data-toggle=\"tab\" href=\"#services-2\"><span class=\"flaticon-business mr-2\"></span> Business Consulting</a>
              </li>
              <li class=\"nav-item text-left\">
                <a class=\"nav-link py-4\" data-toggle=\"tab\" href=\"#services-3\"><span class=\"flaticon-insurance mr-2\"></span> Business Insurance</a>
              </li>
              <li class=\"nav-item text-left\">
                <a class=\"nav-link py-4\" data-toggle=\"tab\" href=\"#services-4\"><span class=\"flaticon-money mr-2\"></span> Global Investigation</a>
              </li>
              <li class=\"nav-item text-left\">
                <a class=\"nav-link py-4\" data-toggle=\"tab\" href=\"#services-5\"><span class=\"flaticon-rating mr-2\"></span> Audit &amp; Evaluation</a>
              </li>
              <li class=\"nav-item text-left\">
                <a class=\"nav-link py-4\" data-toggle=\"tab\" href=\"#services-6\"><span class=\"flaticon-search-engine mr-2\"></span> Marketing Strategy</a>
              </li>
            </ul>
          </div>
          <div class=\"col-md-8\">
            <div class=\"tab-content\">
              <div class=\"tab-pane container p-0 active\" id=\"services-1\">
                <div class=\"img\" style=\"background-image: url(images/project-2.jpg);\"></div>
                <h3><a href=\"#\">Business Analysis</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
              <div class=\"tab-pane container p-0 fade\" id=\"services-2\">
                <div class=\"img\" style=\"background-image: url(images/project-3.jpg);\"></div>
                <h3><a href=\"#\">Business Consulting</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
              <div class=\"tab-pane container p-0 fade\" id=\"services-3\">
                <div class=\"img\" style=\"background-image: url(images/project-4.jpg);\"></div>
                <h3><a href=\"#\">Business Insurance</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
              <div class=\"tab-pane container p-0 fade\" id=\"services-4\">
                <div class=\"img\" style=\"background-image: url(images/project-5.jpg);\"></div>
                <h3><a href=\"#\">Global Investigation</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
              <div class=\"tab-pane container p-0 fade\" id=\"services-5\">
                <div class=\"img\" style=\"background-image: url(images/project-6.jpg);\"></div>
                <h3><a href=\"#\">Audit &amp; Evaluation</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
              <div class=\"tab-pane container p-0 fade\" id=\"services-6\">
                <div class=\"img\" style=\"background-image: url(images/project-1.jpg);\"></div>
                <h3><a href=\"#\">Marketing Strategy</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


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
", "themes/custom/global/templates/static_html/page--node--26.html.twig", "/var/www/html/2020/web/themes/custom/global/templates/static_html/page--node--26.html.twig");
    }
}
