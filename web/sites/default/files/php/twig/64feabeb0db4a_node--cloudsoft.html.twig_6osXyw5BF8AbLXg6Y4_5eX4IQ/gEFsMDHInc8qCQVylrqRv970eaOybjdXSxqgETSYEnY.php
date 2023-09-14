<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/cloudsoft/templates/node/node--cloudsoft.html.twig */
class __TwigTemplate_f07efdb6b88a7e776f89bdba7a3c76ad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "


<div class=\"container-fluid\">
    <!-- banner  -->
    <div class=\"banner \">
      <div class=\"banner-text w-25\">
          ";
        // line 103
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_banner_text", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"banner-img\">
       ";
        // line 106
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_banner_bg_image", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
        echo "
      </div>
    </div>
    ";
        // line 110
        echo "    <div class=\"banner-bottom mb-3 row\">
      ";
        // line 111
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_current_updates", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
        echo "
    </div>
    <!-- products -->
    <div class=\"products d-flex  mb-5 container\">
      ";
        // line 115
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("cloud_main_content_view", "block_1"), "html", null, true);
        echo "
    </div>
    <!-- features -->
    <div class=\"features d-flex mb-5 container\">
      <div class=\"features-list col-md-4\">
        <h3>Features Overview</h3>
        <div>
          ";
        // line 122
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalMenu("features-overview"), "html", null, true);
        echo "
        </div>
      </div>
      <div class=\"how-it-works col-md-8\">
      ";
        // line 126
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "cloudsoft_featuresoverview"), "html", null, true);
        echo "


      </div>
    </div>
    <!-- About us -->
    <div class=\"footer\">
    <div class=\"container d-flex\">
      <div class=\"about-us w-25 \">
      ";
        // line 135
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("block", "aboutus"), "html", null, true);
        echo "
      ";
        // line 137
        echo "
      </div>
      <div class=\"clients w-75\">
        <div class=\"client-images\">
        <div>
        ";
        // line 142
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_our_clients", [], "any", false, false, true, 142), 142, $this->source), "html", null, true);
        echo "
        </div>

        </div>
      </div>
    </div>
    </div>
    <!-- social media -->
    <div class=\"social-media\">
      <div class=\"container\">
         ";
        // line 152
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalMenu("footer"), "html", null, true);
        echo "
      </div>
    </div>
    <!-- copyright -->
    <div class=\"copyright  justify-content-center\">
      <p>RISHABHSOFTWARE © 2023 PRIVACYPOLICY</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/cloudsoft/templates/node/node--cloudsoft.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 152,  110 => 142,  103 => 137,  99 => 135,  87 => 126,  80 => 122,  70 => 115,  63 => 111,  60 => 110,  54 => 106,  48 => 103,  39 => 96,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a node.
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
 * - label: (optional) The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: (optional) Themed creation date field.
 * - author_name: (optional) Themed author name field.
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
 * @ingroup themeable
 */
#}
{# <article{{ attributes }}>

  {{ title_prefix }}
  {% if label and not page %}
    <h2{{ title_attributes }}>
      <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
    </h2>
  {% endif %}
  {{ title_suffix }}

  {% if display_submitted %}
    <footer>
      {{ author_picture }}
      <div{{ author_attributes }}>
        {% trans %}Submitted by {{ author_name }} on {{ date }}{% endtrans %}
        {{ metadata }}
      </div>
    </footer>
  {% endif %}

  <div{{ content_attributes }}>
    {{ content }}
  </div>

</article> #}



<div class=\"container-fluid\">
    <!-- banner  -->
    <div class=\"banner \">
      <div class=\"banner-text w-25\">
          {{ content.field_banner_text }}
      </div>
      <div class=\"banner-img\">
       {{ content.field_banner_bg_image }}
      </div>
    </div>
    {# current update  section  #}
    <div class=\"banner-bottom mb-3 row\">
      {{content.field_current_updates}}
    </div>
    <!-- products -->
    <div class=\"products d-flex  mb-5 container\">
      {{ drupal_view('cloud_main_content_view', 'block_1') }}
    </div>
    <!-- features -->
    <div class=\"features d-flex mb-5 container\">
      <div class=\"features-list col-md-4\">
        <h3>Features Overview</h3>
        <div>
          {{ drupal_menu('features-overview') }}
        </div>
      </div>
      <div class=\"how-it-works col-md-8\">
      {{ drupal_entity('block','cloudsoft_featuresoverview') }}


      </div>
    </div>
    <!-- About us -->
    <div class=\"footer\">
    <div class=\"container d-flex\">
      <div class=\"about-us w-25 \">
      {{ drupal_entity('block','aboutus')}}
      {# {{ drupal_entity('block', 2 )}} #}

      </div>
      <div class=\"clients w-75\">
        <div class=\"client-images\">
        <div>
        {{content.field_our_clients}}
        </div>

        </div>
      </div>
    </div>
    </div>
    <!-- social media -->
    <div class=\"social-media\">
      <div class=\"container\">
         {{ drupal_menu('footer') }}
      </div>
    </div>
    <!-- copyright -->
    <div class=\"copyright  justify-content-center\">
      <p>RISHABHSOFTWARE © 2023 PRIVACYPOLICY</p>
    </div>
</div>", "themes/custom/cloudsoft/templates/node/node--cloudsoft.html.twig", "C:\\xampp\\htdocs\\d10d2\\web\\themes\\custom\\cloudsoft\\templates\\node\\node--cloudsoft.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 103);
        static $functions = array("drupal_view" => 115, "drupal_menu" => 122, "drupal_entity" => 126);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['drupal_view', 'drupal_menu', 'drupal_entity']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
