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
class __TwigTemplate_20ce21e31f71191728d2f4e5d5e65c4e4d03e1e85e7ad089ca469bc8d3433c02 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 78];
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
        echo " <div class=\"bg-top navbar-light d-flex flex-column-reverse\">
      <div class=\"container py-3\">
        <div class=\"row no-gutters d-flex align-items-center align-items-stretch\">
          <div class=\"col-md-4 d-flex align-items-center py-4\">
            <a class=\"navbar-brand\" href=\"index.html\">Negotiate <span>Consulting Agency</span></a>
          </div>
          <div class=\"col-lg-8 d-block\">
            <div class=\"row d-flex\">
              <div class=\"col-md d-flex topper align-items-center align-items-stretch py-md-4\">
                <div class=\"icon d-flex justify-content-center align-items-center\"><span class=\"ion-ios-paper-plane\"></span></div>
                <div class=\"text\">
                  <span>Email</span>
                  <span>youremail@email.com</span>
                </div>
              </div>
              <div class=\"col-md d-flex topper align-items-center align-items-stretch py-md-4\">
                <div class=\"icon d-flex justify-content-center align-items-center\"><span class=\"ion-ios-call\"></span></div>
                <div class=\"text\">
                  <span>Call</span>
                  <span>+123 523 5598</span>
                </div>
              </div>
              <div class=\"col-md d-flex topper align-items-center align-items-stretch py-md-4\">
                <div class=\"icon d-flex justify-content-center align-items-center\"><span class=\"ion-ios-time\"></span></div>
                <div class=\"text\">
                  <span>Working Hours</span>
                  <span>Mon - Sat 8am - 5pm</span>
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
                <a href=\"#\"><i class=\"ion-logo-facebook\"></i><span class=\"sr-only\">Facebook</span></a>
                <a href=\"#\"><i class=\"ion-logo-twitter\"></i><span class=\"sr-only\">Twitter</span></a>
                <a href=\"#\"><i class=\"ion-logo-googleplus\"></i><span class=\"sr-only\">Googleplus</span></a>
              </p>
            </div>
            <div class=\"col text-right\">
              <a href=\"#\" class=\"btn-link\">Request A Quote</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
      <div class=\"container d-flex align-items-center\">
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"oi oi-menu\"></span> Menu
        </button>
        <form action=\"#\" class=\"searchform order-lg-last\">
          <div class=\"form-group d-flex\">
            <input type=\"text\" class=\"form-control pl-3\" placeholder=\"Search\">
            <button type=\"submit\" placeholder=\"\" class=\"form-control search\"><span class=\"ion-ios-search\"></span></button>
          </div>
        </form>
        <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
          <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\"><a href=\"index.html\" class=\"nav-link\">Home</a></li>
            <li class=\"nav-item\"><a href=\"about.html\" class=\"nav-link\">About</a></li>
            <li class=\"nav-item\"><a href=\"team.html\" class=\"nav-link\">Team</a></li>
            <li class=\"nav-item\"><a href=\"project.html\" class=\"nav-link\">Case Studies</a></li>
            <li class=\"nav-item\"><a href=\"services.html\" class=\"nav-link\">Services</a></li>
            <li class=\"nav-item\"><a href=\"blog.html\" class=\"nav-link\">Blog</a></li>
            <li class=\"nav-item\"><a href=\"contact.html\" class=\"nav-link\">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class=\"home-slider owl-carousel\">
      <div class=\"slider-item\" style=\"background-image:url(";
        // line 78
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/bg_1.jpg);\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
          <div class=\"row no-gutters slider-text align-items-center justify-content-end\" data-scrollax-parent=\"true\">
          <div class=\"col-md-7 ftco-animate mb-md-5\">
            <span class=\"subheading\">Negotiate Consulting</span>
            <h1 class=\"mb-4\">We Are The Best Consulting Agency</h1>
            <p><a href=\"#\" class=\"btn btn-primary px-4 py-3 mt-3\">Our Services</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class=\"slider-item\" style=\"background-image:url(";
        // line 91
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/bg_2.jpg);\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
          <div class=\"row no-gutters slider-text align-items-center justify-content-end\" data-scrollax-parent=\"true\">
          <div class=\"col-md-7 ftco-animate mb-md-5\">
            <span class=\"subheading\">Negotiate Consulting</span>
            <h1 class=\"mb-4\">We Help to Grow Your Business</h1>
            <p><a href=\"#\" class=\"btn btn-primary px-4 py-3 mt-3\">Our Services</a></p>
          </div>
        </div>
        </div>
      </div>
    </section>


    
    <section class=\"ftco-intro ftco-no-pb img\" style=\"background-image: url(";
        // line 107
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/bg_3.jpg);\">
      <div class=\"container\">
        <div class=\"row justify-content-center\">
          <div class=\"col-md-10 text-center heading-section heading-section-white ftco-animate\">
            <h2 class=\"mb-0\">You Always Get the Best Guidance</h2>
          </div>
        </div>  
      </div>
    </section>



    <section class=\"ftco-section\">
      <div class=\"container\">
        <div class=\"row justify-content-center mb-5\">
          <div class=\"col-md-8 text-center heading-section ftco-animate\">
            <span class=\"subheading\">Services</span>
            <h2 class=\"mb-4\">Why Choose Us?</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
        <div class=\"row tabulation mt-4 ftco-animate\">
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
                <div class=\"img\" style=\"background-image: url(";
        // line 154
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/project-2.jpg);\"></div>
                <h3><a href=\"#\">Business Analysis</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
              <div class=\"tab-pane container p-0 fade\" id=\"services-2\">
                <div class=\"img\" style=\"background-image: url(";
        // line 159
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/project-3.jpg);\"></div>
                <h3><a href=\"#\">Business Consulting</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
              <div class=\"tab-pane container p-0 fade\" id=\"services-3\">
                <div class=\"img\" style=\"background-image: url(";
        // line 164
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/project-4.jpg);\"></div>
                <h3><a href=\"#\">Business Insurance</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
              <div class=\"tab-pane container p-0 fade\" id=\"services-4\">
                <div class=\"img\" style=\"background-image: url(";
        // line 169
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/project-5.jpg);\"></div>
                <h3><a href=\"#\">Global Investigation</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
              <div class=\"tab-pane container p-0 fade\" id=\"services-5\">
                <div class=\"img\" style=\"background-image: url(";
        // line 174
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/project-6.jpg);\"></div>
                <h3><a href=\"#\">Audit &amp; Evaluation</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
              <div class=\"tab-pane container p-0 fade\" id=\"services-6\">
                <div class=\"img\" style=\"background-image: url(";
        // line 179
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/project-1.jpg);\"></div>
                <h3><a href=\"#\">Marketing Strategy</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class=\"ftco-section\">
      <div class=\"container\">
        <div class=\"row no-gutters justify-content-center mb-5\">
          <div class=\"col-md-6 text-center heading-section ftco-animate\">
            <span class=\"subheading\">Projects Done</span>
            <h2 class=\"mb-4\">Case Studies</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            <p></p>
          </div>
        </div>
        <div class=\"row\">

          <div class=\"col-md-4\">
            <div class=\"project\">
              <div class=\"img rounded mb-4\" style=\"background-image: url(";
        // line 203
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/project-4.jpg);\"></div>
              <div class=\"text w-100 text-center\">
                <span class=\"cat\">Audit &amp; Taxes</span>
                <h3><a href=\"#\">Consultacy Solutions</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
              </div>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"project\">
              <div class=\"img rounded mb-4\" style=\"background-image: url(";
        // line 213
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/project-5.jpg);\"></div>
              <div class=\"text w-100 text-center\">
                <span class=\"cat\">Financing</span>
                <h3><a href=\"#\">Consultacy Solutions</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
              </div>
            </div>
          </div>
          <div class=\"col-md-4\">
            <div class=\"project\">
              <div class=\"img rounded mb-4\" style=\"background-image: url(";
        // line 223
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/project-6.jpg);\"></div>
              <div class=\"text w-100 text-center\">
                <span class=\"cat\">Real Estate</span>
                <h3><a href=\"#\">Consultacy Solutions</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class=\"ftco-intro ftco-no-pb img\" style=\"background-image: url(";
        // line 235
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/bg_1.jpg);\">
      <div class=\"container\">
        <div class=\"row justify-content-center\">
          <div class=\"col-lg-9 col-md-8 d-flex align-items-center heading-section heading-section-white ftco-animate\">
            <h2 class=\"mb-3 mb-md-0\">You Always Get the Best Guidance</h2>
          </div>
          <div class=\"col-lg-3 col-md-4 ftco-animate\">
            <p class=\"mb-0\"><a href=\"#\" class=\"btn btn-secondary py-3 px-4\">Request Quote</a></p>
          </div>
        </div>  
      </div>
    </section>

    <section class=\"ftco-section testimony-section\">
      <div class=\"container-fluid px-md-5\">
        <div class=\"row justify-content-center mb-5\">
          <div class=\"col-md-8 text-center heading-section ftco-animate\">
            <span class=\"subheading\">Testimonies</span>
            <h2 class=\"mb-4\">Our Clients Says</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
        <div class=\"row ftco-animate justify-content-center\">
          <div class=\"col-md-12\">
            <div class=\"carousel-testimony owl-carousel\">
              <div class=\"item\">
                <div class=\"testimony-wrap d-flex\">
                  <div class=\"user-img\" style=\"background-image: url(";
        // line 262
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/person_1.jpg)\">
                  </div>
                  <div class=\"text pl-4\">
                    <span class=\"quote d-flex align-items-center justify-content-center\">
                      <i class=\"icon-quote-left\"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class=\"name\">Racky Henderson</p>
                    <span class=\"position\">Father</span>
                  </div>
                </div>
              </div>
              <div class=\"item\">
                <div class=\"testimony-wrap d-flex\">
                  <div class=\"user-img\" style=\"background-image: url(";
        // line 276
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/person_2.jpg)\">
                  </div>
                  <div class=\"text pl-4\">
                    <span class=\"quote d-flex align-items-center justify-content-center\">
                      <i class=\"icon-quote-left\"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class=\"name\">Henry Dee</p>
                    <span class=\"position\">Businesswoman</span>
                  </div>
                </div>
              </div>
              <div class=\"item\">
                <div class=\"testimony-wrap d-flex\">
                  <div class=\"user-img\" style=\"background-image: url(";
        // line 290
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/person_3.jpg)\">
                  </div>
                  <div class=\"text pl-4\">
                    <span class=\"quote d-flex align-items-center justify-content-center\">
                      <i class=\"icon-quote-left\"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class=\"name\">Mark Huff</p>
                    <span class=\"position\">Businesswoman</span>
                  </div>
                </div>
              </div>
              <div class=\"item\">
                <div class=\"testimony-wrap d-flex\">
                  <div class=\"user-img\" style=\"background-image: url(";
        // line 304
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/person_4.jpg)\">
                  </div>
                  <div class=\"text pl-4\">
                    <span class=\"quote d-flex align-items-center justify-content-center\">
                      <i class=\"icon-quote-left\"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class=\"name\">Rodel Golez</p>
                    <span class=\"position\">Businesswoman</span>
                  </div>
                </div>
              </div>
              <div class=\"item\">
                <div class=\"testimony-wrap d-flex\">
                  <div class=\"user-img\" style=\"background-image: url(";
        // line 318
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/person_1.jpg)\">
                  </div>
                  <div class=\"text pl-4\">
                    <span class=\"quote d-flex align-items-center justify-content-center\">
                      <i class=\"icon-quote-left\"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class=\"name\">Ken Bosh</p>
                    <span class=\"position\">Businesswoman</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <hr>

    <section class=\"ftco-section\">
      <div class=\"container\">
        <div class=\"row justify-content-center mb-5 pb-2\">
          <div class=\"col-md-8 text-center heading-section ftco-animate\">
            <span class=\"subheading\">Blog Posts</span>
            <h2 class=\"mb-4\">Recent Blog</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-6 col-lg-4 ftco-animate\">
            <div class=\"blog-entry\">
              <a href=\"blog-single.html\" class=\"block-20 d-flex align-items-end\" style=\"background-image: url('";
        // line 350
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/image_1.jpg');\">
                <div class=\"meta-date text-center p-2\">
                  <span class=\"day\">15</span>
                  <span class=\"mos\">Oct.</span>
                  <span class=\"yr\">2019</span>
                </div>
              </a>
              <div class=\"text p-4\">
                <h3 class=\"heading\"><a href=\"#\">Finance And Legal Working Streams Occur Throughout</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class=\"d-flex align-items-center mt-4\">
                  <p class=\"mb-0\"><a href=\"#\" class=\"btn btn-primary\">Read More <span class=\"ion-ios-arrow-round-forward\"></span></a></p>
                  <p class=\"ml-auto mb-0\">
                    <a href=\"#\" class=\"mr-2\">Admin</a>
                    <a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4 ftco-animate\">
            <div class=\"blog-entry\">
              <a href=\"blog-single.html\" class=\"block-20 d-flex align-items-end\" style=\"background-image: url('";
        // line 372
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/image_2.jpg');\">
                <div class=\"meta-date text-center p-2\">
                  <span class=\"day\">15</span>
                  <span class=\"mos\">Oct.</span>
                  <span class=\"yr\">2019</span>
                </div>
              </a>
              <div class=\"text p-4\">
                <h3 class=\"heading\"><a href=\"#\">Finance And Legal Working Streams Occur Throughout</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class=\"d-flex align-items-center mt-4\">
                  <p class=\"mb-0\"><a href=\"#\" class=\"btn btn-primary\">Read More <span class=\"ion-ios-arrow-round-forward\"></span></a></p>
                  <p class=\"ml-auto mb-0\">
                    <a href=\"#\" class=\"mr-2\">Admin</a>
                    <a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4 ftco-animate\">
            <div class=\"blog-entry\">
              <a href=\"blog-single.html\" class=\"block-20 d-flex align-items-end\" style=\"background-image: url('";
        // line 394
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/image_3.jpg');\">
                <div class=\"meta-date text-center p-2\">
                  <span class=\"day\">15</span>
                  <span class=\"mos\">Oct.</span>
                  <span class=\"yr\">2019</span>
                </div>
              </a>
              <div class=\"text p-4\">
                <h3 class=\"heading\"><a href=\"#\">Finance And Legal Working Streams Occur Throughout</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class=\"d-flex align-items-center mt-4\">
                  <p class=\"mb-0\"><a href=\"#\" class=\"btn btn-primary\">Read More <span class=\"ion-ios-arrow-round-forward\"></span></a></p>
                  <p class=\"ml-auto mb-0\">
                    <a href=\"#\" class=\"mr-2\">Admin</a>
                    <a href=\"#\" class=\"meta-chat\"><span class=\"icon-chat\"></span> 3</a>
                  </p>
                </div>
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
                  <li><span class=\"icon icon-map-marker\"></span><span class=\"text\">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                  <li><a href=\"#\"><span class=\"icon icon-phone\"></span><span class=\"text\">+2 392 3929 210</span></a></li>
                  <li><a href=\"#\"><span class=\"icon icon-envelope\"></span><span class=\"text\">info@yourdomain.com</span></a></li>
                </ul>
              </div>
              <ul class=\"ftco-footer-social list-unstyled float-md-left float-lft mt-3\">
                <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-3\">
            <div class=\"ftco-footer-widget mb-5 ml-md-4\">
              <h2 class=\"ftco-heading-2\">Links</h2>
              <ul class=\"list-unstyled\">
                <li><a href=\"#\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>Home</a></li>
                <li><a href=\"#\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>About</a></li>
                <li><a href=\"#\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>Services</a></li>
                <li><a href=\"#\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>Projects</a></li>
                <li><a href=\"#\"><span class=\"ion-ios-arrow-round-forward mr-2\"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4\">
            <div class=\"ftco-footer-widget mb-5\">
              <h2 class=\"ftco-heading-2\">Recent Blog</h2>
              <div class=\"block-21 mb-4 d-flex\">
                <a class=\"blog-img mr-4\" style=\"background-image: url(";
        // line 455
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/image_1.jpg);\"></a>
                <div class=\"text\">
                  <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about</a></h3>
                  <div class=\"meta\">
                    <div><a href=\"#\"><span class=\"icon-calendar\"></span> Oct. 16, 2019</a></div>
                    <div><a href=\"#\"><span class=\"icon-person\"></span> Admin</a></div>
                    <div><a href=\"#\"><span class=\"icon-chat\"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class=\"block-21 mb-5 d-flex\">
                <a class=\"blog-img mr-4\" style=\"background-image: url(";
        // line 466
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/image_2.jpg);\"></a>
                <div class=\"text\">
                  <h3 class=\"heading\"><a href=\"#\">Even the all-powerful Pointing has no control about</a></h3>
                  <div class=\"meta\">
                    <div><a href=\"#\"><span class=\"icon-calendar\"></span> Oct. 16, 2019</a></div>
                    <div><a href=\"#\"><span class=\"icon-person\"></span> Admin</a></div>
                    <div><a href=\"#\"><span class=\"icon-chat\"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-12 text-center\">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"icon-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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
        return array (  588 => 466,  574 => 455,  510 => 394,  485 => 372,  460 => 350,  425 => 318,  408 => 304,  391 => 290,  374 => 276,  357 => 262,  327 => 235,  312 => 223,  299 => 213,  286 => 203,  259 => 179,  251 => 174,  243 => 169,  235 => 164,  227 => 159,  219 => 154,  169 => 107,  150 => 91,  134 => 78,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/global/templates/page.html.twig", "/var/www/html/2020/web/themes/custom/global/templates/page.html.twig");
    }
}
