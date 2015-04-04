<?php

/* core/modules/update/templates/update-last-check.html.twig */
class __TwigTemplate_eaf1f14e1ac031a70f5430270210c99ce824f95e88406865237db7817b464084 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 16
        echo "<div class=\"update checked\">
  ";
        // line 17
        if ((isset($context["last"]) ? $context["last"] : null)) {
            // line 18
            echo "    ";
            echo twig_render_var(t("Last checked: @time ago", array("@time" => (isset($context["time"]) ? $context["time"] : null))));
            echo "
  ";
        } else {
            // line 20
            echo "    ";
            echo twig_render_var(t("Last checked: never"));
            echo "
  ";
        }
        // line 22
        echo "  <span class=\"check-manually\">(";
        echo twig_drupal_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        echo ")</span>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/update/templates/update-last-check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 22,  30 => 20,  24 => 18,  22 => 17,  19 => 16,);
    }
}
